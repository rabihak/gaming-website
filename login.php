<?php
include_once 'connection.php';
session_start();

if (isset($_POST['USER'])) {
  $sql = "SELECT username,password FROM abonne ";
  $result = $link->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if (in_array($_POST['username'], explode(" ", $row['username'])) && in_array($_POST['password'], explode(" ", $row['password']))) {
        header('location: page4.php');
        return;
      }
    }
    echo "invalid username or password";
  }
}
if (isset($_POST['ADMIN'])) {
  $sql = "SELECT idadmin,username,password FROM admin ";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if (in_array($_POST["username"], explode(" ", $row['username'])) && in_array($_POST['password'], explode(" ", $row['password']))) {
        $_SESSION["ID"] =  $row['idadmin'];
        header('location: add.php');
        return;
      }
    }
    echo "invalid username or password";
  }
}

?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title> login page</title>
</head>

<body class="body">
  <form class="login" method="POST" action="login.php">
    <label for="user">username:</label><br>
    <input type="text" id="user" name="username" value=""><br>
    <label for="pass">password:</label><br>
    <input type="password" id="pass" name="password" value=""><br><br>
    <p class="header1"> please select account type </p>
    <input class="button" type="submit" value="user" name="USER">
    <input class="button" type="submit" value="admin" name="ADMIN">

  </form>
</body>