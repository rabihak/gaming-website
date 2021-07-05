<?php
include_once 'connection.php';
session_start();

$IDLANG = $_SESSION['LANG'];
$sql = "SELECT enonce,noquestion FROM question WHERE idlangage='$IDLANG' ";
$result = $link->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $ques[] = $row["enonce"];
    $noen[] = $row["noquestion"];
  }
}
if (isset($_POST['modif'])) {
  if (!isset($_POST['qes'])) {
    echo '<br> <b> input error </b>';
  } else {
    $f = $_POST['qes'];
    $_SESSION["f"] =  $f;
    $qe = $noen[$f];
    $sql1 = "SELECT noreponse,texte,correct FROM reponse WHERE noquestion='$qe'  GROUP BY noreponse ";
    $result1 = $link->query($sql1);
    if ($result1->num_rows > 0) {
      while ($row1 = $result1->fetch_assoc()) {
        $idrep[] = $row1["noreponse"];
        $texte[] = $row1["texte"];
        $right[] = $row1["correct"];
      }
      $_SESSION['IDREP'] = $idrep;
    }
  }
}
if (isset($_POST['page3'])) {
  if (isset($_POST['ques']) == null) {
    echo 'input error';
  } else {
    $error = false;
    if ($_POST['question'] == '') {
      $error = true;
    }

    if ($error) {
      echo "input error";
    } else {
      $empty = 0;
      foreach ($_POST['ans'] as $key => $value) {
        if ($value == '') {
          $empty++;
        } else {
          $ANSWERS[] = $value;
        }
      }
      if ($empty == 1) {
        echo "input error";
      } else {
        $F = $_SESSION["f"];
        foreach ($_SESSION['IDREP'] as $key => $value) {
          $spa[$key] = $value;
        }
        $qss  = $_POST["question"];
        $sql2 = "UPDATE question SET enonce = '$qss' WHERE 	noquestion = $noen[$F]";
        $result2 = $link->query($sql2);
        foreach ($_POST['ans'] as $key1 => $value) {
          $sql3 = "UPDATE reponse SET texte = '$value' WHERE 	noreponse = $spa[$key1]";
          $result3 = $link->query($sql3);
        }
        header('location:page3.php');
      }
    }
  }
}
?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title> modification</title>
</head>

<body class="body">
  <form class="add1" method="POST" action="page3.php">
    <?php if (isset($ques)) {
      foreach ($ques as $key => $q) {
        $i = $key + 1;
        echo "question $i: <br>";
        echo "<input type='radio' name='qes'value='$key'> $q <br> 
        <input type='submit' value='modify' name='modif'> <br> <br>";
      }
    } else {
      echo "no questions from that language";
    }
    ?>
  </form>
  <?php if (isset($_POST['modif']) && isset($_POST['qes'])) {
    echo "
  <form class='add1' method='POST' action='page3.php'>
    <label for='user'>modify the question:</label><br>
    <input type='text' id='sdd' name='question' value='$ques[$f]'><br>";
    foreach ($idrep as $key => $a) {
      $t = $key + 1;
      echo "<label for='sdd'>answer $t :</label><br>";
      if ($right[$key] == 1) {
        echo "correct answer <br>";
      }
      echo "<input type='text' id='sdd' name='ans[]' value='$texte[$key]'> <br> ";
    }
    echo "<input type='submit' value='submit' name='page3'> <br> <br>";
  } ?>

  </form>
</body>