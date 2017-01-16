<!DOCTYPE html>
<html>
  <head>
      <title>Wellcome to peroy library</title>
      <style type="text/css">
        @import "css/login.css";
      </style>
  </head>
  <body bgcolor="#E3D8D8">
      <!--<div class="form-style-6">-->
      <div class="form-style-6">
        <h1>TAMBAH MATA KULIAH</h1>
        <form method="POST" action="input_matkul.php">
          <input type="text" name="mata_kuliah" placeholder="Nama Mata Kuliah" />
          <select name="semester">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="4">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <input type="submit" value="Add" />
        </form>
      </div>
  </body>
</html>
