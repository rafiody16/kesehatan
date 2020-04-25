<?php

include '../koneksi.php';
session_start();

if(isset($_POST["btnPinjam"])){
$id_pdp=$_POST["id_pdp"];
$nama=$_POST["nama"];
$umur=$_POST["umur"];
$alamat=$_POST["alamat"];
$suhu=$_POST["suhu"];

$query=mysqli_query($koneksi,"UPDATE pdp SET nama='$nama',umur='$umur',alamat='$alamat',suhu='$suhu' where id_pdp='$id_pdp' ");
$count = mysqli_affected_rows($koneksi);

if($count == 1){
	header("Location: pdp.php");
}else{
	header("Location: pdp.php");
}

}
?>