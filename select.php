<?php
include_once 'connection.php';


$sql = "SELECT idabonne,username,password,nom,prenom FROM abonne GROUP BY idabonne";
$result = $link->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $users[] = $row["username"];
    $passwordU[] = $row["password"];
    $idU[] = $row["idabonne"];
    $nomU[] = $row["nom"];
    $prenomU[] = $row["prenom"];
  }

  $sql = "SELECT idadmin,username,password,nom,prenom FROM admin GROUP BY idadmin";
  $result = $link->query($sql);
  while ($row = $result->fetch_assoc()) {
    $admins[] = $row["username"];
    $passwordA[] = $row["password"];
    $idA[] = $row["idadmin"];
    $nomA[] = $row["nom"];
    $prenomA[] = $row["prenom"];
  }
}