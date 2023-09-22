<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords"
		content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 5 admin template,bootstrap 5 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 5,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 5,template admin bootstrap 5" />
<!--model-->

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Title -->
	<title> BharatPay Admin </title>

	<!-- Favicon -->
	<link rel="icon" href="<?=BASEURL?>assets/admin/img/brand/favicon.ico" type="image/x-icon" />

	<!-- Icons css -->
	<link href="<?=BASEURL?>assets/admin/css/icons.css" rel="stylesheet">

	<!-- Bootstrap css-->
	<link id="style" href="<?=BASEURL?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Style css -->
	<link href="<?=BASEURL?>assets/admin/css/style.css" rel="stylesheet">

	<!-- Plugins css -->
	<link href="<?=BASEURL?>assets/admin/css/plugins.css" rel="stylesheet">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="ltr main-body app sidebar-mini index">
	<div class="progress-top-bar"></div>

	<script>
        function sharel(){
            if (location.protocol !== 'https:') {
        
                var rtextarea = document.createElement("textarea");
                document.body.appendChild(rtextarea);
                rtextarea.value = '<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpausername'))?>'; //save main text in it
                rtextarea.select(); //select textarea contenrs
                document.execCommand("copy");
                document.body.removeChild(rtextarea);
               } else {
                let shareData = {
                  title: '<?=$comp['company_name']?>',
                  text: '<?=$comp['company_name']?>',
                  url: '<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpausername'))?>',
              }
              navigator.clipboard.writeText('<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpausername'))?>');
              navigator.share(shareData);
            }
        } 
    </script>

	<!-- Loader -->
	<div id="global-loader">
		<img src="<?=BASEURL?>assets/admin/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<div class="layout-position-binder">
				<!-- main-header -->
				<div class="main-header side-header sticky nav nav-item sticky-pin" style="margin-bottom: -64px;">
					<div class=" main-container container-fluid">
						<div class="main-header-left">
							<div class="responsive-logo">
								<a href="<?=BASEURL?>admin" class="header-logo">
									<img src="<?=BASEURL?>assets/welcome/img/favicon.png" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<!-- <div class="icon"></div> -->
								<a class="open-toggle" href="javascript:void(0)"><i class="header-icon fe fe-align-left"></i></a>
								<a class="close-toggle" href="javascript:void(0)"><i class="header-icon fe fe-x"></i></a>
							</div>
							<div class="logo-horizontal">
								<a href="<?=BASEURL?>admin" class="header-logo">
										<img src="<?=BASEURL?>assets/welcome/img/favicon.png" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							
						</div>
						
						<div class="main-header-right">
						<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon fe fe-more-vertical"></span>
						</button>
						<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
							<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
								<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
								    
									                       <!--Referral-->
									<li class="d-inline-block m-1">
												<a class="new nav-link" onclick="sharel()" data-bs-toggle="">
											<svg class="ionicon header-icon-svgs"
												viewBox="0 0 512 512">
												<title>Referral</title>
												<path
													d="M448 256L272 88v96C103.57 184 64 304.77 64 424c48.61-62.24 91.6-96 208-96v96z"
													fill="none" stroke="currentColor" stroke-linejoin="round"
													stroke-width="32" />
											</svg>
										</a>
										</li>
									
									<li class="dropdown main-profile-menu nav-item">
										<a class="new nav-link profile-user rounded-circle shadow d-flex"
											href="javascript:void(0)" data-bs-toggle="dropdown"><img alt=""
												src="<?=BASEURL?>assets/admin/img/faces/11.jpg"></a>
										<ul class="dropdown-menu">
											<li class="bg-primary p-3 br-ts-5 br-te-5 ">
												<div class="d-flex wd-100p">
													<div class="avatar"><img alt="avatar" class="rounded-circle"
															src="<?=BASEURL?>assets/admin/img/faces/11.jpg"></div>
													<div class="ms-3 my-auto">
														<h6 class="tx-15 text-black font-weight-semibold mb-0"><?=$this->session->userdata('bhpausername');?></h6><span class="text-black op-8 tx-11">
															<?=$this->session->userdata('bhpaphone');?></span>
													</div>
												</div>
											</li>
											<li><a class="dropdown-item" href="profile.html"><i
														class="fe fe-user"></i>Profile</a></li>
											<li><a class="dropdown-item" href="mail-read.html"><i
														class="fe fe-mail"></i>Inbox</a></li>
											<li><a class="dropdown-item" href="settings.html"><i
														class="fe fe-settings"></i>Settings</a></li>
											<li><a class="dropdown-item" href="<?=BASEURL?>admin/logout"><i
														class="fe fe-power"></i>Log Out</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
						
					</div>
				</div><div class="jumps-prevent" style="padding-top: 0px;"></div>
				<!-- /main-header -->

				<!-- main-sidebar -->
				<div class="sticky">
				<aside class="app-sidebar">
					<div class="main-sidebar-header active">
						<a class="header-logo active" href="<?=BASEURL?>admin">
							<img src="<?=BASEURL?>assets/welcome/img/favicon.png" class="main-logo  desktop-dark" alt="logo">
							<img src="<?=BASEURL?>assets/welcome/img/favicon.png" class="main-logo  mobile-dark" alt="logo">
						</a>
					</div>
					<div class="main-sidemenu">
						<div class="slide-left disabled" id="slide-left"><svg
								fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
								<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
							</svg></div>
						<ul class="side-menu">

							<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASEURL?>admin/index">
										<svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Home</title>
											<path
												d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"
												fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-linejoin="round" stroke-width="32" />
											<path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69"
												fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-linejoin="round" stroke-width="32" />
									</svg>
										<span class="side-menu__label">Dashboard</span></a>
								</li>


						<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_banner'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Manage Banner</title>
										<rect x="128" y="128" width="336" height="336" rx="57" ry="57" fill="none"
											stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
										<path
											d="M383.5 128l.5-24a56.16 56.16 0 00-56-56H112a64.19 64.19 0 00-64 64v216a56.16 56.16 0 0056 56h24"
											fill="none" stroke="currentColor" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="32" />
									</svg><span class="side-menu__label">Manage Banner</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_banner'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_banner">Manage Banner</a></li>	
								</ul>
							</li>

							<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'privacy_policy' || $page_name == 'website_management'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>content management</title>
										<rect x="128" y="128" width="336" height="336" rx="57" ry="57" fill="none"
											stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
										<path
											d="M383.5 128l.5-24a56.16 56.16 0 00-56-56H112a64.19 64.19 0 00-64 64v216a56.16 56.16 0 0056 56h24"
											fill="none" stroke="currentColor" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="32" />
									</svg><span class="side-menu__label">Content<br>Management</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'privacy_policy'){ echo "active"; } ?>" href="<?=BASEURL?>admin/privacy_policy">Privacy Policy</a></li>
									<!--<li><a class="slide-item" href="<?=BASEURL?>admin/riskagreement">Risk Disclosure Agreement</a></li>-->
									<li><a class="slide-item <?php if($page_name == 'website_management'){ echo "active"; } ?>" href="<?=BASEURL?>admin/website_management">Website Management</a></li>	
								</ul>
							</li>

							
							<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_product'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Manage Product</title>
										<rect x="128" y="128" width="336" height="336" rx="57" ry="57" fill="none"
											stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
										<path
											d="M383.5 128l.5-24a56.16 56.16 0 00-56-56H112a64.19 64.19 0 00-64 64v216a56.16 56.16 0 0056 56h24"
											fill="none" stroke="currentColor" stroke-linecap="round"
											stroke-linejoin="round" stroke-width="32" />
									</svg><span class="side-menu__label">Manage Product</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item " href="<?=BASEURL?>admin/manage_product">Manage Product</a></li>	
								</ul>
							</li>

							<li class="slide">
								<a class="side-menu__item  <?php if($page_name == 'manage_user'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>User Management</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">User Management</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_user'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_user">Manage User</a></li>
									<li><a class="slide-item <?php if($page_name == 'manage_userbank'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_userbank">Manage User Bank Card</a></li>
								</ul>
							</li>

							<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_withdraw' || $page_name == 'manage_withdrawAccept' || $page_name == 'manage_withdrawReject'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Withdraw Management</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Withdraw<br>Management</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_withdraw'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_withdraw">Withdrawal Request</a></li>
									<li><a class="slide-item <?php if($page_name == 'manage_withdrawAccept'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_withdrawAccept">Withdrawal Accept</a></li>
									<li><a class="slide-item <?php if($page_name == 'manage_withdrawReject'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_withdrawReject">Withdrawal Reject</a></li>

								</ul>
							</li>

							<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_winresult'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Wining Management</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Wining Management</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_winresult'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_winresult">Manage Winner <br>Result</a></li>
									

								</ul>
							</li>

							<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_parityhistory' || $page_name == 'manage_saprehistory'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Game History</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Game History</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_parityhistory'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_parityhistory">History For Gold</a></li>
									<li><a class="slide-item <?php if($page_name == 'manage_saprehistory'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_saprehistory">History For Diamond</a></li>
									<!--<li><a class="slide-item" href="<?=BASEURL?>admin/manage_bconehistory">History For Bcone</a></li>-->
									<!--<li><a class="slide-item" href="<?=BASEURL?>admin/manage_emerdhistory">History For Emerd</a></li>-->
								</ul>
							</li>

							<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_tradehistory'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Trade History</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Trade History</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_tradehistory'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_tradehistory">Manage Trade History</a></li>
									
								</ul>
							</li>

								

								<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_amount'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Amount Setup</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Amount Setup</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_amount'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_amount">Manage Amount</a></li>
									
								</ul>
							</li>

								<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'recharge_history'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Recharge Management</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Recharge<br>Management</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'recharge_history'){ echo "active"; } ?>" href="<?=BASEURL?>admin/recharge_history">Recharge History</a></li>
									
								</ul>
							</li>

								<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'deposit_update'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Deposit Update</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Deposit Update</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'deposit_update'){ echo "active"; } ?>" href="<?=BASEURL?>admin/deposit_update">Deposit Update</a></li>
									
								</ul>
							</li>

								<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'manage_transaction'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>User Bid History</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">User Bid History</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'manage_transaction'){ echo "active"; } ?>" href="<?=BASEURL?>admin/manage_transaction"> History</a></li>
									
								</ul>
							</li>

								
                        	<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'update_roi'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>ROI</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label"> ROI </span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'update_roi'){ echo "active"; } ?>" href="<?=BASEURL?>admin/update_roi"> Update ROI </a></li>
								</ul>
							</li>
								
								

								<li class="slide">
								<a class="side-menu__item <?php if($page_name == 'complaints_history'){ echo "active is-expanded"; } ?>" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
										viewBox="0 0 512 512">
										<title>Complaint Management</title>
										<path fill="none" stroke="currentColor" stroke-linejoin="round"
											stroke-width="32"
											d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
									</svg><span class="side-menu__label">Complaint<br>Management</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php if($page_name == 'complaints_history'){ echo "active"; } ?>" href="<?=BASEURL?>admin/complaints_history"> Complaint History</a></li>
								</ul>
							</li>
    
								
						</ul>
						<div class="slide-right" id="slide-right"><svg fill="#7b8191"
								width="24" height="24" viewBox="0 0 24 24">
								<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
							</svg></div>
					</div>
				</aside>
			</div>
				<div class="jumps-prevent" style="padding-top: 64px;"></div>
				<!-- main-sidebar -->
			</div>
		
		<?php 
        if($this->session->flashdata('success_message'))
        {
        ?>
        <div class="d-flex justify-content-end mt-2">
        <div class="alert alert-success alert-dismissible fade show " role="alert">
           <div><?=$this->session->flashdata('success_message');?></div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       </div>
        <?php
        }
        ?>
        <?php 
        if($this->session->flashdata('error_message'))
        {
        ?>
        <div class="d-flex justify-content-end mt-2">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <div><?=$this->session->flashdata('error_message');?></div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
        <?php
        }
        ?>