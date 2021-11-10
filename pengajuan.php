
    <div class="page-body">	
    	<div class="card">
    		<div class="card-header" align="center">
					<h2 >Daftar Pengajuan Insentif Publikasi Ilmiah</h2>
				</div>
    	</div>
    	<form name="form1" method="post" action="cek_pengajuan.php?halaman=dosen" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					<h4>Indentitas Pengusul</h4>
				</div>
				<div class="card-block">
				
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email </label>
					
					<div class="col-sm-10">
						<input class="form-control form-control-bold" type="text" name="email" required>
					</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Lengkap</label>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="nama_lengkap" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">NIDN</label>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="nidn" required>		
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jurusan</label>
							
						<div class="col-sm-10">
							<select class="form-control form-control-bold" type="text" name="jurusan">
								<option>-Pilih Salah Satu-</option>
								<option>Teknologi Informasi</option>
								<option>Teknik Elektro</option>
								<option>Teknik Mesin</option>
								<option>Teknik Sipil</option>
								<option>Teknik Kimia</option>
								<option>Akuntansi</option>
								<option>Administrasi Niaga</option>
									
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Program studi</label>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="program_studi" required>
						</div>
						</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">No HP</label>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="no_hp" required>
								
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">URL SINTA Pengusul</label>
						<div class="form-group form-default">
						<span class="form-bar"></span>
                        <label class="float-label">Contoh: http://sinta.ristekbrin.go.id/authors/detail?id=5983891&view=overview</label>
                    	</div>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="sinta" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">URL SCOPUS Pengusul</label>
						<div class="form-group form-default">
						<span class="form-bar"></span>
                        <label class="float-label">Contoh: https://www.scopus.com/authid/detail.uri?authorId=46461783800 (Bagi yang belum memiliki Scopus ID, bisa diisi dengan 0000)</label>
                    	</div>
						<div class="col-sm-10"> 
							<input class="form-control form-control-bold" type="text" name="scopus" required>
						</div>
					</div>
				</div>
			</div>  
			<div class="card">
				<div class="card-header">
					<h4 >Artikel Pengusul</h4>
				</div>
				<div class="card-block">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Kontribusi </label>
					
					<div class="col-sm-10">
						<input type="radio" name="kontribusi" value="Penulis Pertama"> Penulis Pertama<br><br>
    					<input type="radio" name="kontribusi" value="Penulis Korespondensi"> Penulis Korespondensi<br><br>
    					<input type="radio" name="kontribusi" value="Co-author"> Co-author<br><br>
					</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Judul Artikel</label>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="judul_artikel" required>		
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Jurnal</label>
								
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="nama_jurnal" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Kualifikasi Jurnal</label>
						<div class="col-sm-10">
							<select class="form-control form-control-bold" type="text" name="kualifikasi">
								<option>-Pilih Salah Satu-</option>
								<option>Jurnal Internasional bereputasi/terindeks Q1</option>
								<option>Jurnal Internasional bereputasi/terindeks Q2</option>
								<option>Jurnal Internasional bereputasi/terindeks Q3</option>
								<option>Jurnal Internasional bereputasi/terindeks Q4</option>
								<option>Jurnal Internasional bereputasi sedang (terindeks Copernicus, CABI, dan DOAJ)</option>
								<option>Jurnal Nasional terakreditasi sinta 1</option>
								<option>Jurnal Nasional terakreditasi sinta 2</option>
								<option>Jurnal Nasional terakreditasi sinta 3</option>
								<option>Jurnal Nasional terakreditasi sinta 4</option>
								<option>Jurnal Nasional terakreditasi sinta 5</option>
								<option>Jurnal Nasional terakreditasi sinta 6</option>
									
							</select>
						</div>
						</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">URL artikel yang telah terbit</label>
						<div class="col-sm-10">
							<input class="form-control form-control-bold" type="text" name="url_artikel" required>
								
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Upload artikel</label>
						<div class="col-md-6 col-sm-8">
						    <input class="form-control" type="file" name="artikel"/>
						</div>
					</div>
					<!-- <div class="form-group row">
						<label class="col-sm-2 col-form-label">Upload Surat Pernyataan Publikasi Ilmiah</label>
						<div class="col-md-6 col-sm-8">
						    <input type="file" name="file_name1" class=" form-control" data-icon="false">
						</div>
					</div> -->
			
			
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-info btn-lg" value="SIMPAN">
						<input type="button" class="btn btn-danger btn-sm" value="SUBMIT" onclick=self.history.back()>
					</div>
				</form>
				</div> 
	<div id="styleSelector">

    </div>


          <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>