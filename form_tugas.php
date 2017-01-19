<!DOCTYPE html>
<html>
  <head>
      <title>Create new task</title>
      <style type="text/css">
        @import "css/login.css";
      </style>
  </head>
  <body bgcolor="#E3D8D8">
    <div class="form-style-6">
    <h1>Add task!</h1>
    <form method="POST" action="ftugas_process.php">
      <label>Mata kuliah: </label>

      <?php
        include "conn.php";
        $sql = 'SELECT id_matkul, nama_matkul FROM mata_kuliah';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)){
          $select= '<select name="select">';
          while ($data = mysqli_fetch_array($result)) {
            $select.='<option value="'.$data['id_matkul'].'">'.$data['nama_matkul'].'</option>';
          }
        }
        $select.='</select>';
        echo $select;
      ?>

      <label>Desc: </label>
      <textarea name="desc" placeholder="Remember, be nice!" cols="47" rows="5"></textarea>
    <hr>
      <center><label>Deadline</label></center>
    <hr>
      <input type="date" name="deadline" value="2017-12-29">
      <input type="submit" value="POST IT!" />
    </form>
  </div>
  </body>
</html>
