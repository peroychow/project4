<?php
  session_start();
  if (empty($_SESSION['isLoggedIn'])) {
    header("location: login.php");
  }
  $username = $_SESSION['isLoggedIn'];
?>

Wellcome <?php echo $username; ?>

<a href="logout.php">Logout</a>
