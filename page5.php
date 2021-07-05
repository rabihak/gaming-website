<?php
session_start();
include_once 'connection.php';
$LANGID = $_SESSION['userlang'];
$LEVELID = $_SESSION['userlevel'];
$sql = "SELECT enonce,noquestion FROM question WHERE idlangage='$LANGID' AND 	niveau='$LEVELID' ORDER BY rand()";
$result = $link->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $ques[] = $row["enonce"];
    $noen[] = $row["noquestion"];
  }
}
foreach ($ques as $key => $value) {
  $sql = "SELECT texte,correct,noquestion,noreponse FROM reponse WHERE noquestion = $noen[$key]";
  $result = $link->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $TEXTE[] = $row["texte"];
      $CORRECT[] = $row["correct"];
      $IDQUES[] = $row["noquestion"];
      $IDREP[] = $row["noreponse"];
    }
  }
}
$grade = 0;
if (isset($_POST['modif1'])) {
  foreach ($qes as $key => $value) {

    if ($_POST[''] == 1) {
      $grade++;
    }
    echo "$grade";
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
  <form class="add1" method="POST" action="page5.php">
    <?php foreach ($ques as $key => $q) {
      if ($key > 4) {
        break;
      }
      $i = $key + 1;
      echo "<hr>question $i: ";
      echo " <b>$q</b> <br> ";
      $i1 = 0;
      foreach ($IDQUES as $key1 => $valuea) {
        if ($valuea == $noen[$key]) {
          $i1 = $key1 + 1;
          echo "answer $i1: <br>";
          echo "<input type='radio' name='qes[$i1]'value='$CORRECT[$key1]'> $valuea <br>";
        }
      }
      $i1++;
    }
    ?>
    <input type="submit" value="submit" name="modif1"> <br> <br>
  </form>


  </form>
</body>