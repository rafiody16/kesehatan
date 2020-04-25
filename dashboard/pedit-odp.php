<?php

include '../koneksi.php';
session_start();

if(isset($_POST["btnPinjam"])){
$id_odp=$_POST["id_odp"];
$nama=$_POST["nama"];
$umur=$_POST["umur"];
$alamat=$_POST["alamat"];
$suhu=$_POST["suhu"];

$query=mysqli_query($koneksi,"UPDATE odp SET nama='$nama',umur='$umur',alamat='$alamat',suhu='$suhu' where id_odp='$id_odp' ");
$count = mysqli_affected_rows($koneksi);

if($count == 1){
	header("Location: odp.php");
}else{
	header("Location: odp.php");
}

}
?>