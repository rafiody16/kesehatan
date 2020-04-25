<?php 
include '../koneksi.php';

$sql = "SELECT * FROM odp";

$res = mysqli_query($koneksi, $sql);

$odp = array();

while ($data = mysqli_fetch_assoc($res)) {
	$odp[] = $data;
}
?>
<?php 
include '../aset/header.php';
?>
<form action="" method="post">
<div class="container">
	<div class="row mt-3">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <h2 class="card-title"><i class="fas fa-user"></i> Data ODP <a href="tambah-odp.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a></h2>
			  </div>
			  <div class="card-body">
			  	<table class="table table-sm">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Umur</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Suhu</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <?php  
				  	$no = 1;
				  	foreach ($odp as $a) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$a['nama']?></td>
				      <td><?=$a['umur']?></td>
				      <td><?=$a['alamat']?></td>
				      <td><?=$a['suhu']?></td>

				      <td>
				      	<a href="data-odp.php?id_odp=<?= $a['id_odp'];?>" class="badge badge-success">Detail</a>
				      	<a href="edit-odp.php?id_odp=<?= $a['id_odp'];?>" class="badge badge-warning">Edit</a>
						<a href="hapusodp.php?id_odp=<?= $a['id_odp'];?>" class="badge badge-danger">Hapus</a>
				      </td>
				    </tr>
				    <?php
				    	$no++;
				  	}
				  ?>
				  	<!-- <tr>
				    	<td></td>
				    	<td><a href="" class="btn btn-primary">Kembali</a></td>
				    </tr> -->
				  </tbody>
				</table>
				<a href="index.php" class="btn btn-primary">Kembali</a></td>
			  </div>
			</div>
		</div>
	</div>
</div>
</form>


<?php 
include '../aset/footer.php';
?>