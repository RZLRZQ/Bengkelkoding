<?php 
 
include 'koneksi.php';
error_reporting(0);
 
session_start();
 
if (isset($_GET['username'])) {
    header("Location: ../login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Poliklinik</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/polilogo.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    </div>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bgrund.png');">
			<div class="wrap-login100">
				<form class="form" method="POST" action="" name="myForm" onsubmit="return(validate());">
				<?php
   				 $username = '';
   				 $password ='';
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$username = $_POST["username"];
						$password = $_POST["password"];
    				$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
  					$result = $koneksi->query($sql);
					  // Periksa apakah password dan konfirmasi password sesuai
   					 if ($password === $password) {

       					 header("Location: ../login");
        				exit();
    				} else {
      					  echo "Konfirmasi password tidak cocok. Silakan coba lagi.";
   						 }
					}
    			?>
					<span class="login100-form-logo">
						<img src="images/udinus.png" witdh="auto" height="160px"> 
					</span>

					<span class="login100-form-title p-b-27 p-t-27">
						Poliklinik <br>Universitas <br>Dian Nuswantoro
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button name="submit" class="login100-form-btn">
							Register
						</button>
					</div>
                    <div class="text-center p-t-13">
						<a class="txt1" href="../login">
							Sudah Punya Akun ? Login Sekarang!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>