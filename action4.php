<?php
include 'koneksi.php';
$id_jurnal = $_GET["id_jurnal"];
$query= mysqli_query($koneksi, "UPDATE jurnal set status='tidak disetujui' where id_jurnal='$id_jurnal'");
header('location:upt.php?halaman=upt'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
?>