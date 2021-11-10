<?php  
    include "koneksi.php";
    
    $id_jurnal=$_GET['id_jurnal'];
    $query = "DELETE FROM jurnal WHERE id_jurnal='$id_jurnal'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('Location: admin.php?halaman=admin');
        exit;
?>
<?php  
    } else {
        echo "Data gagal dihapus" . mysqli_error($connect);
    }
?>
