<?php  
    include "koneksi.php";
    
    $id_jurnal=$_GET['id_jurnal'];
    $nama_lengkap=$_GET['nama_lengkap'];
    $nidn=$_GET['nidn'];
    $jurusan=$_GET['jurusan'];
    $nama_jurnal=$_GET['nama_jurnal'];

    $query = "UPDATE jurnal SET nama_lengkap='$nama_lengkap', nidn='$nidn' , jurusan='$jurusan',
     nama_jurnal='$nama_jurnal' WHERE id_jurnal='$id_jurnal'";
    $result=mysqli_query($koneksi, $query);

    if ($result) {
        header('Location: admin.php?halaman=admin');
        exit;
?>

<?php  
  
    } else {
        echo "Gagal update data" . mysqli_error($connect);
    }   
?>
    
