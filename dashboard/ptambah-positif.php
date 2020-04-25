<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$suhu = $_POST['suhu'];
	$status = $_POST['status'];

	$sql = "INSERT INTO positif(nama, umur, alamat, suhu, status ) VALUES ('$nama', '$umur', '$alamat', '$suhu', '$status' )";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($count==1){
		header("Location:positif.php");
	}else{
		header("Location:tambah-positif.php");
	}
}else{
	header("Location:tambah-positif.php");
}
?>