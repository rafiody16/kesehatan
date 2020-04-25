<?php

include '../koneksi.php';
session_start();

if(isset($_POST["btnPinjam"])){
$id_positif=$_POST["id_positif"];
$nama=$_POST["nama"];
$umur=$_POST["umur"];
$alamat=$_POST["alamat"];
$suhu=$_POST["suhu"];
$status=$_POST["status"];

$query=mysqli_query($koneksi,"UPDATE positif SET nama='$nama',umur='$umur',alamat='$alamat',suhu='$suhu', status='$status' where id_positif='$id_positif' ");
$count = mysqli_affected_rows($koneksi);

if($count == 1){
	header("Location: positif.php");
}else{
	header("Location: positif.php");
}

}
?>