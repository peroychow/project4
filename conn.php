<?php
  $servername = "sql6.freesqldatabase.com";
  $username = "sql6154039";
  $password = "5M6iyPJ1hd";
  $dbname = "sql6154039";

  //Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  //Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>
