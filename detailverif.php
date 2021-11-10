<div class="card">
	<div class="card-header">
		<div class="card">
		<div class="card-block table-border-style">
        <div class="table-responsive">
        	<div class="card-header">
				<h4>Daftar Jurnal yang telah Masuk</h4>
			</div>
    		<table id="example1" class="table">
    				    
			<?php
		    include 'koneksi.php';
		    $id_jurnal = $_GET["id_jurnal"];
		    $film = mysqli_query($koneksi, "SELECT * from jurnal where status='verif' and id_jurnal = '$id_jurnal' ");
		    $nomor = 1;
		    while ($fetch = $film->fetch_array()){
        		$name = explode('/', $fetch['upload_artikel']);
		        echo "<tr> <td>Nama Lengkap</td>        <td>  $fetch[nama_lengkap]</td></tr>
		        		<tr> <td>NIDN</td>        <td>  $fetch[nidn]</td></tr>
		        		<tr> <td>Jurusan</td>        <td>  $fetch[jurusan]</td></tr>
		        		<tr> <td>Program Studi</td>        <td>  $fetch[program_studi]</td></tr>
		        		<tr> <td>Judul Artikel</td>        <td>  $fetch[judul_artikel]</td></tr>
		        		<tr> <td>Nama Jurnal</td>        <td>  $fetch[nama_jurnal]</td></tr>
		        		<tr> <td>Kualifikasi</td>        <td>  $fetch[kualifikasi]</td></tr>
		        		<tr> <td>Url Artikel</td>        <td>  $fetch[url_artikel]</td></tr>
		        		<tr> <td>Jurnal</td>        <td>  <a class='btn btn-success btn-sm' href='download.php?file=$name[1]' type='application/pdf'>Detail</a></td></tr>
		        		<tr><td><a class='btn btn-info btn-sm' href='action.php?id_jurnal=$fetch[id_jurnal]' type='application/pdf'>Valid</a>
		        				<a class='btn btn-danger btn-sm' href='action2.php?id_jurnal=$fetch[id_jurnal]' type='application/pdf'>Tidak Valid</a></td></tr>";
		        $nomor++;
		    }
    		?> 
			</table>
		</div>
		</div>
		</div>
	</div>
</div>