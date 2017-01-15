<?php
  session_start();
  if (empty($_SESSION['isLoggedIn'])) {
    header("location: login.php");
  }
  $username = $_SESSION['isLoggedIn'];
?>

Wellcome <?php echo $username; ?>

<a href="logout.php">Logout</a>

<html>
  <head>
    <title>Peroychow Library</title>
    <style type="text/css">
      @import "css/homepage.css";
    </style>
  </head>
  <body>
    <main>

      <h4>Peroychow library</h4>
      <h2>Library tabs</h2>
      <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">List peminjam</label>
      <input id="tab2" type="radio" name="tabs">
        <label for="tab2">Member</label>
      <input id="tab3" type="radio" name="tabs">
        <label for="tab3">Book list</label>

      <section id="content1">
        <p>Disini akan di input list yg pinjem buku</p>
      </section>
      <section id="content2">
        <p>Disini akan di input list member perpustakaan</p>
      </section>
      <section id="content3">
        <p>Halaman ini akan di isi list buku yg ada</p>
      </section>

    </main>
  </body>
</html>
