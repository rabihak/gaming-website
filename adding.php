<?php
include_once 'connection.php';
include_once 'add.php';
session_start();
if (isset($_POST['mod'])) {
  $_SESSION["LANG"] =  $_POST['language1'];
  header("location:page3.php");
}
if (isset($_POST['adding'])) {
  $empty = 0;

  foreach ($_POST['answer'] as $key => $value) {
    if ($value == '') {
      $empty++;
    } else {
      $ANSWERS[] = $value;
    }
  }
  $corr = array(
    "0" => 0,
    "1" => 0,
    "2" => 0,
    "3" => 0,
    "4" => 0
  );
  $CORRECT = $_POST['correct'];
  $corr[$CORRECT] = 1;
  if ($empty > 2) {
    echo '<b>input error</b>';
  } else {
    $required = array('language', 'level', 'question');

    $error = false;
    foreach ($required as $field) {
      if (empty($_POST[$field])) {
        $error = true;
      }
    }

    if ($error) {
      echo "<b>input error</b>";
    } else {
      $sql = "SELECT idlangage FROM langage ";
      $result = $link->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if (in_array($_POST['language'], explode(" ", $row['idlangage']))) {
            $idlang = $_POST['language'];
          }
        }
      }
      $QUEST = $_POST['question'];
      $QUESTLEVEL =  $_POST['level'];
      $idADMIN = $_SESSION["ID"];
      $sql = "INSERT INTO question (enonce, niveau, idlangage, idadmin) VALUES ( '$QUEST',' $QUESTLEVEL', '$idlang','$idADMIN')";
      if (mysqli_query($link, $sql)) {
        echo "<b>question inserted successfully.</b>";
      } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      $questionid = $link->insert_id;

      for ($i = 0; $i < 5 - $empty; $i++) {
        $sql1 = "INSERT INTO reponse (texte, correct, noquestion) VALUES ( '$ANSWERS[$i]',' $corr[$i]', '$questionid')";
        if (mysqli_query($link, $sql1)) {
        } else {
          echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
        }
      }
      header("location:add.php");
    }
  }
}
