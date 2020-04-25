<?php  
include '../aset/header.php';

$koneksi = mysqli_connect("localhost","root","","kesehatan");

$id_odp=$_GET["id_odp"];

$query=mysqli_query($koneksi,"SELECT * FROM odp where id_odp='$id_odp'");
$s=mysqli_fetch_assoc($query);
?>
<form action="" method="post">
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Data ODP</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
            <tr>
					<td><strong>Nama</strong></td>
					<td><?= $s['nama']?></td>
                </tr>
                <tr>
					<td><strong>Umur</strong></td>
					<td><?= $s['umur']?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?= $s['alamat']?></td>
				</tr>
				<tr>
					<td><strong>Suhu</strong></td>
					<td><?= $s['suhu']?></td>
				</tr>
				
				<tr>
					<td class="text-rigth" colspan="2">
                    <a href="odp.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
				
							</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</form>

<?php  
include '../aset/footer.php';
?>
