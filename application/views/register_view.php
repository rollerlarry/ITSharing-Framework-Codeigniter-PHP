<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jun 2018 05:48:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Register V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php if ($this->session->has_userdata('UserID')): ?>
	 	<?php redirect(base_url().'Dashboard','refresh') ?>
	<?php endif ?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets_login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="<?= base_url() ?>Register/registerAccount">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Confirm Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="confirmpassword" placeholder="Enter confirm password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="FirstName is required">
						<span class="label-input100">FirstName</span>
						<input class="input100" type="text" name="firstname" placeholder="Enter firstname">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="LastName is required">
						<span class="label-input100">LastName</span>
						<input class="input100" type="text" name="lastname" placeholder="Enter lastname">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								I agree to the <a href=""><b>Tearms</b>
							</label></a>
						</div>

						<div>
							<a href="<?= base_url() ?>Login" class="txt1">
								Have an Account. <b>Login Now</b>
							</a>
						</div>
						<br>
						
					</div>
					<div class="flex-sb-m w-full p-b-30">
						<div>
							<p class="text1">
								<?php if ($error = $this->session->flashdata('account_exist')): ?>
									<p style="color: red">This username already exists. Try again other account.</p>
								<?php endif ?>
								<?php if ($error = $this->session->flashdata('error_confirmpassword')): ?>
									<p style="color: red">Those passwords didn't match. Try again.</p>
								<?php endif ?>
							</p>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets_login/js/main.js"></script>
</body>

</html>
