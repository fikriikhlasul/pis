<!DOCTYPE html>
<html lang="en">
<head>

	<title>Masuk - PATRIOT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" sizes="192x192" href="http://localhost/pis-client/landing/assets/images/favicon-patriot-16x16.ico">
<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/pis-client/landing/assets/images/favicon-patriot-16x16.ico">
<link rel="icon" type="image/png" sizes="96x96" href="http://localhost/pis-client/landing/assets/images/favicon-patriot-16x16.ico">
<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/pis-client/landing/assets/images/favicon-patriot-16x16.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset_authen/assets/'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="<?=base_url('login')?>">
				<?= $this->session->flashdata('message'); ?>
					<span class="login100-form-title p-b-51">
						Masuk
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" autofocus>
						
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Masuk
						</button>
                    </div>
                    <div class="container" style="text-align:center">
                   <h8> Dafar keanggotaan.<a href="register"class="txt1"> Daftar</a></h8><br/>
					<a href="/pis-client"class="txt1"> Home</a>
                    </div>
					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('asset_authen/assets/'); ?>js/main.js"></script>
	<script src="<?= base_url();?>assets/sweetalert/dist/sweetalert2.all.min.js"></script>
	<?php
	if (isset($_SESSION['message']))
	{
		echo '<script>';
		echo $_SESSION['message'];
		echo '</script>';
		unset($_SESSION['message']);
	}
	?>

</body>
</html>