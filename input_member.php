<?php
  include "conn.php";

  //save data into variable
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //SQL Query to insert data
  $sql = "
  INSERT INTO member (firstname, lastname, email, passwd) VALUES ('$firstname', '$lastname', '$email', '$password')
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
