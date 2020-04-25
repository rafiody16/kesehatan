<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO admin(username, password ) VALUES ('$username', '$password' )";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($count==1){
		header("Location:../login.php");
	}else{
		header("Location:daftar.php");
	}
}else{
	header("Location:daftar.php");
}
?>