<?php
$link = new mysqli("localhost", "root", "", "web_quiz");
if ($link->connect_error) {
  die("error could not connect. " . $link->connect_error);
}