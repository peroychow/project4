<?php
  session_start();
  include "conn.php";

  $id_member = $_SESSION['id_member'];
  $id_matkul = $_POST['select'];
  $time_created = date('Y-m-d');
  $time_deadline = $_POST['deadline'];
  $desc = $_POST['desc'];

  $sql = "
    INSERT INTO daftar_tugas (id_member, id_matkul, time_created, time_deadline, desc_tugas)
    VALUES ('$id_member', '$id_matkul', '$time_created', '$time_deadline', '$desc');
  ";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  //redirect to index page
  header("location:index.php");
?>
