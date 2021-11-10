<div class="card">
	<div class="card-header">
		<div class="card">
		<div class="card-block table-border-style">
        <div class="table-responsive">
        	<div class="card-header">
				<h4>Daftar Jurnal yang telah Masuk</h4>
			</div>
    		<table id="example1" class="table">
    		<thead>
      			<tr>
          			<tr>
			            <th>No </th>
			            <th>Nama Lengkap</th>
			            <th>NIDN</th>
			            <th>Jurusan</th>
			            <th>Judul Jurnal</th>
      					<th coslpan>Jurnal</th>
				    </tr>
				</tr>
        	</thead>
			<tbody>      
			<?php
		    include 'koneksi.php';
		    $film = mysqli_query($koneksi, "SELECT * from jurnal where status='verif'");
		    $nomor = 1;
		  	while ($row=mysqli_fetch_array($film)){
		        echo "<tr>
		            <td>".$nomor."</td>
		            <td>".$row['nama_lengkap']."</td>
		            <td>".$row['nidn']."</td>
		            <td>".$row['jurusan']."</td>
		            <td>".$row['nama_jurnal']."</td>
		      	<td><a class='btn btn-success btn-sm' href='?halaman=verifikator&act=detail&id_jurnal=$row[id_jurnal]'>Detail</a></td>
		        </tr>";
		        $nomor++;
		    }
    		?>
			  </tbody>  
			</table>
		</div>
		</div>
		</div>
	</div>
</div>