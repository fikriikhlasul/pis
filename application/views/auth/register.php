<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar - PATRIOT</title>
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
			<?= $this->session->flashdata('message'); ?>
				<form class="login100-form validate-form flex-sb flex-w" id='isian' method="post" action="<?=base_url('register')?>">
					<span class="login100-form-title p-b-51">
						Daftar Keanggotaan
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Nama Lengkap" autofocus>
						<span class="focus-input100"></span>
						<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Tanggal Lahir is required">
						<input class="input100" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nim is required">
						<input class="input100" type="text" name="nim" placeholder="Nim">
						<span class="focus-input100"></span>
						<?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Jurusan is required">
						<select class="input100" name="jurusan" form='isian'>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Matematika">Matematika</option>
						<option value="Teknik Industri">Teknik Industri</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nomor Handphone is required">
						<input class="input100" type="text" name="no_hp" placeholder="Nomor Handphone">
						<span class="focus-input100"></span>
						<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password1" placeholder="Password">
						<span class="focus-input100"></span>
						<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Repeat Password is required">
						<input class="input100" type="password" name="password2" placeholder="Repeat Password">
						<span class="focus-input100"></span>
					</div>
					
					
		
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Daftar
						</button>
                    </div>
                    <div class="container" style="text-align:center">
                   <h8> Masuk jika sudah memiliki akun.<a href="login"class="txt1"> Masuk</a></h8>
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