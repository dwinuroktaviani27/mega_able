<!DOCTYPE html>
<html>
  <title>Simple Sign up from</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
    </head>
    <body>
<?php
include "koneksi.php";

include "koneksi.php";
$id_jurnal = $_GET['id_jurnal'];
$query = "SELECT * FROM jurnal WHERE id_jurnal='$id_jurnal'";
$result = mysqli_query($koneksi, $query);
?>
<div class="container mb-5 mt-5">
  <div class="row justify-content-md-center">
    <div class="col-md-auto">


      <form action="prosesEdit.php" method="GET">
      <h1>Masukkan data</h1>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
        <table>
          <?php
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <tr>
              <td> ID JURNAL DATABASE:</td>
              <td><input type="text" name="id_jurnal" readonly value="
                        <?php echo $row['id_jurnal']; ?>">
            </tr>
            <tr>
              <td> NAMA LENGKAP:</td>
              <td><input type="text" name="nama_lengkap" value="
                        <?php echo $row['nama_lengkap']; ?>">
            </tr>
            <tr>
              <td> NIDN:</td>
              <td><input type="text" name="nidn" value="
                        <?php echo $row['nidn']; ?>"></td>
            </tr>
            <tr>
              <td> JURUSAN:</td>
              <td><input type="text" name="jurusan" value="
                        <?php echo $row['jurusan']; ?>"></td>
            </tr>
            <tr>
            <tr>
              <td> NAMA JURNAL:</td>
              <td><input type="text" name="nama_jurnal" value="
                        <?php echo $row['nama_jurnal']; ?>">
            </tr>


            <form class="form-inline my-2 my-lg-0 mr-3" action="admin.php?halaman=admin">
              <button class="btn btn-warning my-2 my-sm-0" type="submit">KEMBALI</button>

            </form>
            </tr>

          <?php
          }
          ?>
        </table>
        <button type="submit" name="simpan" value="Simpan"><strong>SIMPAN</strong></button>
      </form>
    </div>
  </div>
</div>