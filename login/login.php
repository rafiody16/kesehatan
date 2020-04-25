<?php 

session_start();

$koneksi = mysqli_connect("localhost","root","","kesehatan");

if(isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($koneksi,"SELECT * FROM admin where username='$username' and password='$password'");
	$_SESSION['ceklogin'] = mysqli_num_rows($query);

	if($_SESSION['ceklogin']==1){
		header("location: index.php");
		exit;
	}
	else{
		echo "<center> LOGIN GAGAL!";
	}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>LOGIN</title>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="my/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="my/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="my/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="my/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="my/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="my/css/util.css">
	<link rel="stylesheet" type="text/css" href="my/css/main.css">

 </head>
 <body>
 	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<script src="my/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="my/vendor/bootstrap/js/popper.js"></script>
	<script src="my/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="my/vendor/select2/select2.min.js"></script>
	<script src="my/vendor/tilt/tilt.jquery.min.js"></script>

 </body>
 </html>