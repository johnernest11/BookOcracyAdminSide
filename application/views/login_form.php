<!doctype html>
<html lang="en" dir="ltr">
    <head>
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, 
		admin panel dashboard, admin panel html, admin panel html template, admin panel template, 
		admin ui templates, administrative templates, best admin dashboard, best admin templates, 
		bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin 
		templates, html5 admin template, premium bootstrap templates, responsive admin template, 
		template admin bootstrap 4, themeforest html">
		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />
		<!-- TITLE -->
		<title>BookOcracy – Admin</title>
		<!-- BOOTSTRAP CSS -->
		<link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<!-- STYLE CSS -->
		<link href="assets/css/style.css" rel="stylesheet"/>
		<link href="assets/css/dark-style.css" rel="stylesheet"/>
        <link href="assets/css/skin-modes.css" rel="stylesheet" />
        <link href="assets/css/transparent-style.css" rel="stylesheet" />
		<!--- FONT-ICONS CSS -->
		<link href="assets/css/icons.css" rel="stylesheet"/>
		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />
	</head>
	<body>
		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">
			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->
			<!-- PAGE -->
			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="../assets/images/brand/booklogo1.png" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
							<form method="POST" action="<?php echo base_url(); ?>index.php/AuthController/login">
									<span class="login100-form-title">
										Login
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="email" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<div class="text-end pt-1">
										<!-- <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p> -->
									</div>
									<div class="container-login100-form-btn">
									<button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
									</div>
								</form>

								<?php
									if($this->session->flashdata('error')){
										?>
										<div class="alert alert-danger text-center" style="margin-top:20px;">
											<?php echo $this->session->flashdata('error'); ?>
										</div>
										<?php
									}
								?>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center my-3">	
									<a href="<?=base_url('home/google_login')?>" class="btn btn-white mt-1 mb-1"><i class="fa fa-google"></i> Google Login</a>
									
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- SPARKLINE JS -->
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<!-- CHART-CIRCLE JS -->
		<script src="assets/js/circle-progress.min.js"></script>
		<!-- Perfect SCROLLBAR JS-->
		<script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<!-- INPUT MASK JS -->
		<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>
        <!-- Color Theme js -->
        <script src="assets/js/themeColors.js"></script>
        <!-- CUSTOM JS -->
        <script src="assets/js/custom.js"></script>
	</body>
</html>
