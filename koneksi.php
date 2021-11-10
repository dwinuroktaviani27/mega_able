<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "insentif_publikasi";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
if($koneksi->connect_error){
	die("Fatal Error: Can't connect to database: ". $conn->connect_error);
}
?>