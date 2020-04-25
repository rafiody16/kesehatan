<?php 
include '../koneksi.php';

$sql = "SELECT * FROM pdp";

$res = mysqli_query($koneksi, $sql);

$pdp = array();

while ($data = mysqli_fetch_assoc($res)) {
	$pdp[] = $data;
}
?>
<?php 
include '../aset/header.php';
?>
<div class="container">
	<div class="row mt-3">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <h2 class="card-title"><i class="fas fa-user"></i> Data PDP <a href="tambah-pdp.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a></h2>
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
				  	foreach ($pdp as $a) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$a['nama']?></td>
				      <td><?=$a['umur']?></td>
				      <td><?=$a['alamat']?></td>
				      <td><?=$a['suhu']?></td>

				      <td>
				      	<a href="data-pdp.php?id_pdp=<?= $a['id_pdp'];?>" class="badge badge-success">Detail</a>
				      	<a href="edit-pdp.php?id_pdp=<?= $a['id_pdp'];?>" class="badge badge-warning">Edit</a>
						<a href="hapuspdp.php?id_pdp=<?= $a['id_pdp'];?>" class="badge badge-danger">Hapus</a>
				      </td>
				    </tr>
				    <?php
				    	$no++;
				  	}
				  ?>
				  </tbody>
				</table>
				<a href="index.php" class="btn btn-primary">Kembali</a></td>

			  </div>
			</div>
		</div>
	</div>
</div>


<?php 
include '../aset/footer.php';
?>