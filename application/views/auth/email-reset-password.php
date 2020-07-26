<!DOCTYPE html>
<html lang="en">
<head>

	<title>Masuk - PATRIOT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" sizes="192x192" href="<?= base_url();?>landing/assets/images/favicon-patriot-16x16.ico">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url();?>landing/assets/images/favicon-patriot-16x16.ico">
<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url();?>landing/assets/images/favicon-patriot-16x16.ico">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>landing/assets/images/favicon-patriot-16x16.ico">
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
				
					<span class="login100-form-title p-b-51">
						Silahkan klik tombol dibawah untuk reset password
					</span>
					

					<div class="container-login100-form-btn m-t-17">
					<a class="login100-form-btn" href="<?php  echo base_url();echo $reset;echo $user_email;echo '&token=';echo urlencode($token) ?>"><?=$respas;?></a>
					</div>
		 
			</div>
		</div>
	</div>
	

	
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