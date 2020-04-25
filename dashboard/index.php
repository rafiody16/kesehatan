<?php 

include '../aset/header.php';


include '../koneksi.php';

$date=date("Y-m-d");
$odp = "SELECT count(nama) as jml FROM odp ";
$pdp = "SELECT count(nama) as jml FROM pdp ";
$positif = "SELECT count(nama) as jml FROM positif ";

$odp = mysqli_query($koneksi, $odp);
$pdp = mysqli_query($koneksi, $pdp);
$positif = mysqli_query($koneksi, $positif);
$o=mysqli_fetch_assoc($odp);
$p=mysqli_fetch_assoc($pdp);
$po=mysqli_fetch_assoc($positif);

 ?>
<!DOCTYPE html>

<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	   <div style="background-image: url('gambarapik.jpg');"></div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md">
                <h2><i class="fas fa-map-marker-alt"></i> Kec.Turen, Kab.Malang, Jawa Timur</h2>
                <hr class="bg-light">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body text-white" style="background-color: #44bd32">
                        <h5 class="card-title">Orang dalam Pengawasan</h5>
                        <p class="card-text" style="font-size:60px"><?= $o["jml"];?></p>
                        <a href="odp.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body text-white" style="background-color: #e1b12c">
                        <h5 class="card-title">Pasien Dalam Pengawasan</h5>
                        <p class="card-text" style="font-size:60px"><?= $p["jml"];?></p>
                        <a href="pdp.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>           
    </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body text-white" style="background-color: #d63031">
                        <h5 class="card-title">Positif</h5>
                        <p class="card-text" style="font-size:60px"><?= $po["jml"];?></p>
                        <a href="positif.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>

        </div>
    </div>   
            </div>
        </div>

</div>

</body>
</html>

 <?php 

include '../aset/footer.php';

  ?>