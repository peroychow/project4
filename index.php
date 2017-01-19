<?php
  session_start();
  if (empty($_SESSION['isLoggedIn'])) {
    header("location: login.php");
  }
  $username = $_SESSION['isLoggedIn'];
  $id_member = $_SESSION['id_member'];
?>

Wellcome <?php echo $username;?>


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
        <table>
          <tr>
            <th>No</th>
            <th>Mata kuliah</th>
            <th>Time Created</th>
            <th>Due Date</th>
            <th>Desc Tugas</th>
          </tr>
        <?php
          include "conn.php";
          $sql = "
            SELECT mata_kuliah.nama_matkul, time_created, time_deadline, desc_tugas
            FROM daftar_tugas
            INNER JOIN mata_kuliah
            ON mata_kuliah.id_matkul=daftar_tugas.id_matkul
            WHERE id_member='$id_member';
          ";
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
              <td>" . $data['time_created'] . "</td>
              <td>" . $data['time_deadline'] . "</td>
              <td>" . $data['desc_tugas'] . "</td>
            </tr>
            ";
            $i++;
          }
          $conn->close();
        ?>
        </table>
      </section>
      <section id="content2">
        <a href="form_tugas.php">Create new task!</a>
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
