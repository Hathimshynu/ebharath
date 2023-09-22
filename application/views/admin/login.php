<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 5 admin template,bootstrap 5 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 5,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 5,template admin bootstrap 5"/>

		<!-- Title -->
		<title> Admin Login </title>

		<!-- Favicon -->
		<link rel="icon" href="<?=BASEURL?>assets/admin/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="<?=BASEURL?>assets/admin/css/icons.css" rel="stylesheet">

		<!--  Bootstrap css-->
		<link id="style" href="<?=BASEURL?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?=BASEURL?>assets/admin/css/style.css" rel="stylesheet">

	</head>
	<body class="ltr error-page1 bg-primary">

		<!-- Progress bar on scroll -->
		<div class="progress-top-bar"></div>

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?=BASEURL?>assets/admin/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<div class="square-box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>

		<div class="bg-svg">
			<div class="page" >
				<div class="z-index-10">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 mx-auto my-auto py-4 justify-content-center">
								<div class="card-sigin">
									<!-- Demo content-->
									<div class="main-card-signin d-md-flex">
									      <?php 
                                            if($this->session->flashdata('success_message'))
                                            {
                                            ?>
                                            <div><?=$this->session->flashdata('success_message');?></div>
                                            <?php
                                            }
                                            ?>
                                            <?php 
                                            if($this->session->flashdata('error_message'))
                                            {
                                            ?>
                                            <div class="text-danger"><?=$this->session->flashdata('error_message');?></div>
                                            <?php
                                            }
                                          ?>
										<div class="wd-100p">
											<div class="d-flex"><a href="<?=BASEURL?>admin"><img src="<?=BASEURL?>assets/welcome/img/favicon.png" class="sign-favicon ht-40" alt="logo"></a></div>
											<div class="mt-3">
												<h2 class="tx-medium tx-primary">Welcome back!</h2>
												<h6 class="font-weight-semibold mb-4 text-white-50">Please sign in to continue.</h6>
												<div class="panel tabs-style7 scaleX mt-2">
													<div class="panel-head">
														<ul class="nav nav-tabs d-block d-sm-flex">
															<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start active" data-bs-toggle="tab" href="#signinTab1">Phone</a></li>
															<!--<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start" data-bs-toggle="tab" href="#signinTab2">Mobile Number</a></li>-->
														</ul>
													</div>
													<div class="panel-body p-0">
														<div class="tab-content mt-3">
															<div class="tab-pane active" id="signinTab1">
																<form action="<?=BASEURL?>admin/login" method="post">
																	<div class="form-group">
																		<input class="form-control" placeholder="Phone Number" name="phone" type="tel">
																	</div>
																	<div class="form-group">
																		<input class="form-control" placeholder="Password" type="password" name="password">
																	</div>
																	<div class="d-flex align-items-center justify-content-center">
																		<!--<p class="mb-0"><a href="javascript:void(0);" class="tx-primary">Forgot password?</a></p>-->
																		<button type="submit" class="btn btn-primary mb-4">Log In</button>
																	</div>
																</form>
																<!--<div class="divider my-4 or tx-muted"></div>-->
																<!--<a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center flex-center"><i class="bx bxl-google tx-22 me-2"></i>Signin With Google</a>-->
																<!--<div class="d-flex">-->
																<!--	<a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center mt-1 flex-1 flex-center"><i class="bx bxl-facebook tx-22 me-2"></i>Facebook</a>-->
																<!--	<a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center mt-1 ms-1 flex-1 flex-center"><i class="bx bxl-twitter tx-22 me-2"></i>Twitter</a>-->
																<!--</div>-->
															</div>
															<!--<div class="tab-pane" id="signinTab2">-->
															<!--	<div id="mobile-num" class="input-group mb-2">-->
															<!--		<a href="javascript:void(0);" class="input-group-text bg-white text-muted">-->
															<!--			<span>+91</span>-->
															<!--		</a>-->
															<!--		<input class="form-control" type="number" placeholder="Mobile Number">-->
															<!--	</div>-->
															<!--	<div id="login-otp" class="justify-content-around mb-4">-->
															<!--		<input class="form-control  text-center me-2" id="txt1" maxlength="1" onkeyup="move(event, '', 'txt1', 'txt2')">-->
															<!--		<input class="form-control  text-center me-2" id="txt2" maxlength="1" onkeyup="move(event, 'txt1', 'txt2', 'txt3')">-->
															<!--		<input class="form-control  text-center me-2" id="txt3" maxlength="1" onkeyup="move(event, 'txt2', 'txt3', 'txt4')">-->
															<!--		<input class="form-control  text-center" id="txt4" maxlength="1" onkeyup="move(event, 'txt3', 'txt4', '')">-->
															<!--	</div>-->
															<!--	<span>Note : Login with registered mobile number to generate OTP.</span>-->
															<!--	<div class="container-login100-form-btn mt-3">-->
															<!--		<a href="javascript:void(0);" class="btn login100-form-btn btn-primary" id="generate-otp">-->
															<!--			Proceed-->
															<!--		</a>-->
															<!--	</div>-->
															<!--</div>-->
														</div>
													</div>
												</div>

												<!--<div class="tx-center mt-3">-->
												<!--	<p class="mb-0 tx-muted">Don't have an account? <a href="signup.html" class="tx-primary font-weight-semibold tx-15">Create an Account</a></p>-->
												<!--</div>-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- JQuery min js -->
		<script src="<?=BASEURL?>assets/admin/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js -->
		<script src="<?=BASEURL?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- generate-otp js -->
		<script src="<?=BASEURL?>assets/admin/js/generate-otp.js"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="<?=BASEURL?>assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- custom js -->
		<script src="<?=BASEURL?>assets/admin/js/custom.js"></script>

	</body>
</html>
