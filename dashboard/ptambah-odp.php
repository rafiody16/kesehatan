<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$suhu = $_POST['suhu'];

	$sql = "INSERT INTO odp(nama, umur, alamat, suhu ) VALUES ('$nama', '$umur', '$alamat', '$suhu' )";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($count==1){
		header("Location:odp.php");
	}else{
		header("Location:tambah-odp.php");
	}
}else{
	header("Location:tambah-odp.php");
}
?>