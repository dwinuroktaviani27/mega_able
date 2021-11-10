<?php
$halaman = isset($_GET["halaman"])?$_GET["halaman"]:"";
$act = isset($_GET["act"])?$_GET["act"]:"";
if ($halaman=="beranda"){
	include("index.php");
	  
}
elseif ($halaman=="dosen") {
	if ($act=="")
		include("pengajuan.php");
	elseif ($act=="siswa")
		include("dasboard.php");
}
elseif ($halaman=="verifikator") {
	if ($act=="")
		include("daftarverifikasi.php");
	elseif ($act=="detail") 
		include("detailverif.php");
}
elseif ($halaman=="admin") {
	if ($act=="")
		include("daftaradmin.php");
	elseif ($act=="tambah") 
		include("tambahinduk.php");
	elseif ($act=="editlhob")
		include("editlhob.php");
}

elseif ($halaman=="upt") {
	if ($act=="")
		include("uptverifikasi.php");
	elseif ($act=="status") 
		include("status.php");
}

?>