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
    <title>Daftar tugas</title>
    <style type="text/css">
      @import "css/homepage.css";
    </style>
  </head>
  <body>
    <main>

      <!--<h4>Peroychow library</h4>-->
      <h2>KELARIN WOY</h2>
      <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">Tugas lo neh</label>
      <input id="tab2" type="radio" name="tabs">
        <label for="tab2">Tambah lagi</label>
      <input id="tab3" type="radio" name="tabs">
        <label for="tab3">List Matkul</label>

      <section id="content1">
        <p>Disini bakal nongol semua tugas lo!!!</p>
      </section>
      <section id="content2">
        <p>Create new task!</p>
      </section>
      <section id="content3">
        <table>
          <tr>
          <th>No</th>
          <th>Mata kuliah</th>
          <th>Semester</th>
        </tr>
        <?php
          include "conn.php";
          $sql = 'SELECT nama_matkul, semester FROM mata_kuliah';
          $result = mysqli_query($conn, $sql);
          if (!$result) {
            die("Gagal ambil data : " . mysql_error());
          }
          $i = 1;
          while ($data = mysqli_fetch_array($result)) {
            echo "
            <tr>
              <td>" . $i . "</td>
              <td>" . $data['nama_matkul'] . "</td>
              <td>" . $data['semester'] . "</td>
            </tr>
            ";
            $i++;
          }
          $conn->close();
        ?>
      </table>
      <center>
        <p>If you wanna append more matkul, just <a href="matkul_form.php">click here!</a></p>
      </center>
      </section>

    </main>
  </body>
</html>
