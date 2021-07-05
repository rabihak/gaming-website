<?php
include_once 'connection.php';
include_once 'adding.php';

?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title> adding page</title>
</head>

<body class="body">
  <form class="add1" method="POST" action="adding.php">
    <p class="header1"> select a language :</p>
    <input type="radio" name="language" value="1">html<br>
    <input type="radio" name="language" value="2" checked>javascript<br>
    <input type="radio" name="language" value="3">php
    <br>
    <p class="header1"> select a level :</p>
    <input type="radio" name="level" value="1">1<br>
    <input type="radio" name="level" value="2" checked>2<br>
    <input type="radio" name="level" value="3">3<br>
    <label for="user">enter a question:</label><br>
    <input type="text" id="sdd" name="question" value=""><br>
    <label for="sdd">answer 1:</label><br>
    <input type="text" id="sdd" name="answer[]" value=""><br>
    <label for="fd">answer 2:</label><br>
    <input type="text" id="fd" name="answer[]" value=""><br>
    <label for="12">answer 3:</label><br>
    <input type="text" id="12" name="answer[]" value=""><br>
    <label for="32">answer 4:</label><br>
    <input type="text" id="23" name="answer[]" value=""><br>
    <label for="22">answer 5:</label><br>
    <input type="text" id="22" name="answer[]" value=""><br>
    <p class="header1"> select the correct answer:</p>
    <select name="correct">
      <option value="0">answer 1</option>
      <option value="1">answer 2</option>
      <option value="2" selected>answer 3</option>
      <option value="3">answer 4</option>
      <option value="4">answer 5</option>
    </select> <br>
    <input type="submit" value="submit" name="adding"> <br>
    <form class="add1" method="POST" action="adding.php">
      <p class="header1"> select a language to modify its questions :</p>
      <input type="radio" name="language1" value="1">html<br>
      <input type="radio" name="language1" value="2" checked>javascript<br>
      <input type="radio" name="language1" value="3">php
      <br>
      <button type="submit" value="submit" name="mod"> modification</button>
    </form>
</body>