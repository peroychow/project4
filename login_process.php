<?php
  include "conn.php";

  //Save data into variable
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM member WHERE email = '$username' AND passwd = '$password'";
  $result = mysqli_query($conn, $sql);

  //Numeric ArrayAccess
  $row = mysqli_fetch_array($result);

  if ($row['email'] == $username && $row['passwd'] == $password ) {
    session_start();
    $_SESSION['isLoggedIn'] = $username;
    header("location: index.php");
  }
  else {
    echo "Login failed";
  }
?>
