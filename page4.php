<?php
session_start();

if (isset($_POST['choix'])) {
  $_SESSION['userlang'] = $_POST['language'];
  $_SESSION['userlevel'] = $_POST['level'];
  header('location:page5.php');
}


?>


<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title> adding page</title>
</head>

<body class="body">
  <form class="add1" method="POST" action="page4.php">
    <p class="header1"> select a language :</p>
    <input type="radio" name="language" value="1">html<br>
    <input type="radio" name="language" value="2" checked>javascript<br>
    <input type="radio" name="language" value="3">php
    <br>
    <br>
    <p class="header1"> select a level :</p>
    <input type="radio" name="level" value="1">1<br>
    <input type="radio" name="level" value="2" checked>2<br>
    <input type="radio" name="level" value="3">3<br>
    <input type="submit" value="submit" name="choix"> <br> <br>
    <button type="submit" value="submit" name="mod"> afficher resultats</button>
  </form>
</body>