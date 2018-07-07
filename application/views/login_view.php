<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jun 2018 05:48:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Login V15</title>
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
<style type="text/css">
		/* Shared */
		.loginBtn {
		  box-sizing: border-box;
		  position: relative;
		  /* width: 13em;  - apply for fixed size */
		  margin: 0.2em;
		  padding: 0 15px 0 46px;
		  border: none;
		  text-align: left;
		  line-height: 34px;
		  white-space: nowrap;
		  border-radius: 0.4em;
		  font-size: 16px;
		  color: #FFF;
		}
		.loginBtn:before {
		  content: "";
		  box-sizing: border-box;
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 34px;
		  height: 100%;
		}
		.loginBtn:focus {
		  outline: none;
		}
		.loginBtn:active {
		  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
		}


		/* Facebook */
		.loginBtn--facebook {
		  background-color: #4C69BA;
		  background-image: linear-gradient(#4C69BA, #3B55A0);
		  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
		  text-shadow: 0 -1px 0 #354C8C;
		}
		.loginBtn--facebook:before {
		  border-right: #364e92 1px solid;
		  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
		}
		.loginBtn--facebook:hover,
		.loginBtn--facebook:focus {
		  background-color: #5B7BD5;
		  background-image: linear-gradient(#5B7BD5, #4864B1);
		}
</style>
<body>
	<?php if ($this->session->has_userdata('UserID')): ?>
	 	<?php redirect(base_url().'Dashboard','refresh') ?>
	<?php endif ?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets_login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="<?= base_url() ?>Login/loginAccount">
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

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="flex-sb-m w-full p-b-30">
						<div>
							<br>
							<p class="text1" style="color: red">
								<?php if ($error = $this->session->flashdata('login_error')): ?>
									<p style="color: red">Wrong username or password. Try again or click Forgot password to reset it.</p>
								<?php endif ?>
								<?php if ($error = $this->session->flashdata('account_lock')): ?>
									<p style="color: red">This account is currently locked. You can request to unlock <a style="color: red" href="<?= base_url() ?>Lock"><b>Here</b></a> or contact the administrator for more details.</p>
								<?php endif ?>
							</p>
						</div>
					</div>
					<button style="color: white" class="loginBtn loginBtn--facebook">
					  Login with Facebook
					</button>
					<div>
					<br>
					<a href="<?= base_url() ?>Register" class="txt1">
							Dont have an account? Sign Up Now
						</a>
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jun 2018 05:48:27 GMT -->
</html>
