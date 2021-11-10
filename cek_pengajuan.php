<?php
session_start();

if ($_SESSION['status']=="") {
  header("location:index.php?pesan=gagal");
  exit;
}

$username_login=$_SESSION["username"];
$password_login=$_SESSION["password"];
$status=$_SESSION["status"];

        // definisi folder upload
include("config.php");
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$nidn = $_POST['nidn'];
$jurusan = $_POST['jurusan'];
$program_studi = $_POST['program_studi'];
$no_hp = $_POST['no_hp'];
$sinta = $_POST['sinta'];
$scopus = $_POST['scopus'];
$user_id = $_SESSION['username'];
$kontribusi = $_POST['kontribusi'];
$judul_artikel = $_POST['judul_artikel'];
$nama_jurnal = $_POST['nama_jurnal'];
$kualifikasi = $_POST['kualifikasi'];
$url_artikel = $_POST['url_artikel'];

include("config.php");
if(ISSET($_POST['submit'])){
  if($_FILES['artikel']['name'] != "") {
    $file = $_FILES['artikel'];
    
    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $name = explode('.', $file_name);
    $path = "files/".$file_name;

    $conn->query("INSERT INTO jurnal(id_jurnal,email,nama_lengkap, nidn, jurusan ,program_studi, no_hp, sinta, scopus,kontribusi, judul_artikel, nama_jurnal, kualifikasi, url_artikel, name, upload_artikel, user_id, status) VALUES('','$email','$nama_lengkap','$nidn','$jurusan','$program_studi','$no_hp', '$sinta', '$scopus','$kontribusi','$judul_artikel','$nama_jurnal','$kualifikasi','$url_artikel','$name[0]', '$path','$user_id', 'verif')") or die(mysqli_error());

    move_uploaded_file($file_temp, $path);
    header("location:dosen.php");
    
  }else{
    echo "<script>alert('Required Field!')</script>";
    echo "<script>window.location:dosen.php?halaman=dosen'</script>";
  }
}

?>

    

   