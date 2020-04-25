<?php 
include '../aset/header.php';
?>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data Positif</h2>
					</div>
					<div class="card-body">
						<form method="post" action="ptambah-positif.php">
							<div class="form-group">
								<label for="positif">Nama</label>
								<input type="text" class="form-control" name="nama" id="positif" placeholder="Masukkan Nama Lengkap">
							</div>						
							<div class="form-group">
								<label for="umur">Umur</label>
								<input type="text" class="form-control" name="umur"id="umur" placeholder="Masukan Umur">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" name="alamat"id="alamat" placeholder="Masukkan Alamat">
							</div>
							<div class="form-group">
								<label for="suhu">Suhu</label>
								<input type="text" class="form-control" name="suhu"id="suhu" placeholder="Masukkan Suhu Badan"> 
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<input type="text" class="form-control" name="status"id="status" > 
							</div>
							<button type="submit" class="btn btn-primary" name="simpan"> Simpan </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
include '../aset/footer.php';
?>