<?php 
include '../aset/header.php';
?>
	<div>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i>Daftar</h2>
					</div>
					<div class="card-body">
						<form method="post" action="tambah-admin.php">
							<div class="form-group">
								<label for="admin">Username</label>
								<input type="text" class="form-control" name="username" id="admin" placeholder="Masukkan Username">
							</div>						
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password"id="password" >
							<button type="submit" class="btn btn-primary" name="simpan"> Daftar </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>

<?php 
include '../aset/footer.php';
?>