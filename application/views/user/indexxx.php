
	<?php 
        if($this->session->flashdata('success_message'))
        {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           <div><?=$this->session->flashdata('success_message');?></div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
       
        <?php
        }
        ?>
        <?php 
        if($this->session->flashdata('error_message'))
        {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <div><?=$this->session->flashdata('error_message');?></div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        }
        ?>


<html lang="en"><head>
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
	<title> BharatPay </title>

	<!-- Favicon -->
	<link rel="icon" href="<?=BASE_URL();?>assets/user/img/brand/favicon.ico" type="image/x-icon" />

	<!-- Icons css -->
	<link href="<?=BASE_URL();?>assets/user/css/icons.css" rel="stylesheet">

	<!-- Bootstrap css-->
	<link id="style" href="<?=BASE_URL();?>assets/user/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Style css -->
	<link href="<?=BASE_URL();?>assets/user/css/style.css" rel="stylesheet">

	<!-- Plugins css -->
	<link href="<?=BASE_URL();?>assets/user/css/plugins.css" rel="stylesheet">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <style>
    .btns {
        width:100px;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
    
    
    .modal-color{
        background-color:#fff;
    }
  .footer-inner {
    text-align: center;
    padding: 5px 0;
    background: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 9999;
    height: 50px;
    box-shadow: 0 0 14px 2px rgb(0 0 0 / 12%);
}
    
        .modal-dialog-centered {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - (0.5rem * 2));
}
@media (min-width: 576px){
    .modal-dialog-centered {
        min-height: calc(100% - (1.75rem * 2));
    }
}
@media (min-width: 768px){
.modal-dialog {
    width: 100%;
    margin: 0 auto;
}
}
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            width: 25%;
        }
        /* Change background color of buttons on hover */
        .tab button:hover {
            border-bottom: 2px solid #08326f;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            border-bottom: 1px solid #08326f;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
            position: relative;
            width: 100%;
        }
    </style>
    <style>
        @font-face {
            font-family: 'Merriweather Sans';
            font-style: italic;
            font-weight: 800;
            src: local('Merriweather Sans ExtraBold Italic'), local('MerriweatherSans-ExtraBldItalic'), url(http://fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVfrUSW10CwTuVx9PepRx9ls.woff2) format('woff2'), url(http://fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVW2xy75WLVt7UI7Cycabsy8.woff) format('woff');
        }
        @font-face {
            font-family: "open";
            font-style: normal;
            font-weight: 300;
            src: local( "Open Sans Light" ), local( "OpenSans-Light" ),
            url( https://themes.googleusercontent.com/static/fonts/opensans/v6/DXI1ORHCpsQm3Vp6mXoaTZ1r3JsPcQLi8jytr04NNhU.woff ) format( 'woff' );
        }
        *, *:before, *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        .my-parity-list {
            width: 100%;
            margin: 1px auto;
            /* box-shadow: 0 1px 2px rgba( 0, 0, 0, .2 );*/
            overflow: hidden;
            -webkit-transition: .35s;
            transition: .0s;
            height: 50px;
            /*border-bottom: 1px solid #ebebeb;*/

        }
        .title {
            background: #fff;
            color: #000;
            cursor: pointer;
            width: 100%;
            position: relative;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            z-index: 10;
            padding: 15px 0;
        }

        .title:before, .title:after {
            content: "";
            display: block;
            position: absolute;
            right: 20px;
            top: 6px;
            font-style: normal;
            height: 21px;
            line-height: 1;
            overflow: hidden;
            font-family: FontAwesome;
            font-size: 20px;
            background: #fff;
            -webkit-transition: .35s;
            transition: .35s;
        }

        .title:before {
            z-index: 2;
        }
        .title:after {
            top: 12px;
            -webkit-transform: rotate( 180deg );
            -ms-transform: rotate( 180deg );
            -moz-transform: rotate( 180deg );
            transform: rotate( 180deg );
        }

        .open .title:before {
            height: 0;
        }

        .my-parity-list-inner {
            font: 16px open, sans-serif;
            background: #fff;
            color: #777;
            -moz-transform: translateY( -100% );
            -ms-transform: translateY( -100% );
            -webkit-transform: translateY( -100% );
            transform: translateY( -100% );
            overflow: hidden;
            -webkit-transition: .35s;
            transition: .35s;
        }
        .my-parity-list-inner h2 {
            color: #fff;
            font-size: 15px;
            margin-bottom: 10px;
            font-weight: 600;
            margin-top: 0;
        }
        .my-parity-list-inner h2:before {
            padding-right: 7px;
            color: #fff;
        }
        .my-parity-list-inner a {
            color: #fff;
            line-height: 2.5;
        }
        .my-parity-list-inner span {
            font-size: 12px;
        }

        .my-parity-list.open {
            height: auto;
        }
        .open .my-parity-list-inner {
            -webkit-transform: none;
            -ms-transform: none;
            -moz-transform: none;
            transform: none;
        }
        .rec-icon{
            position: absolute;
            right: 6px;
            top: 84px;
            padding: 3px 6px;
        }
        .clr{
        
            background-color:#009688;
        }
    </style>
</head>
<body>
    
    <script>
        function sharel(){
            if (location.protocol !== 'https:') {
        
                var rtextarea = document.createElement("textarea");
                document.body.appendChild(rtextarea);
                rtextarea.value = '<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpusername'))?>'; //save main text in it
                rtextarea.select(); //select textarea contenrs
                document.execCommand("copy");
                document.body.removeChild(rtextarea);
               } else {
                let shareData = {
                  title: '<?=$comp['company_name']?>',
                  text: '<?=$comp['company_name']?>',
                  url: '<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpsername'))?>',
              }
              navigator.clipboard.writeText('<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpusername'))?>');
              navigator.share(shareData);
            }
        } 
    </script>
  
    
    <section>
        <div class="container clr">
            
            <div class="row">
                <div class="col-9 " >
                    <div class="edit-details">
                      <img src="<?=BASE_URL();?>assets/user/img/user.png" width="50px" style="">
                    </div>
                    <p style="color:white; ">
                       User <?=$this->session->userdata('bhpusername')?><br>
                        Mobile +91<?=$this->session->userdata('bhpphone')?><br>
                        <!--Interest ₹0.00 Commission ₹0<br>-->
                        <!--Available balance ₹0.00-->
                        <!--<a onclick="sharel()" class="btn btn-primary btn-sm mt-2">Copy referral link</a>-->
                    </p>
                </div>
                    <div class="col-3 text-end mt-2">
                        <div class="">
                            <a data-toggle="modal" data-target="#noteModalCenter"><img class="rounded-circle" src="<?=BASE_URL();?>assets/user/img/noti-icon.png"></a>
                        </div>
                    </div>
                </div>
                <?php
                
                $credit = $this->db->select_sum('credit')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                $debit = $this->db->select_sum('debit')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->debit+0;
                $bal = $credit-$debit;
                
                $commission = $this->db->select_sum('credit')->where('user_id',$this->session->userdata('bhpusername'))->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                ?>
                <div class="row mb-3">
                <div class="col-4  text-center mb-3">
                    <p style="color:white; "><?=number_format($bal,2)?><br>
                    Balance</p>
                    <a class="btns btn-info" href="<?=BASE_URL();?>user/online_recharge">Recharge</a>
                </div>
                <div class="col-4  text-center mb-3">
                    <p style="color:white; ">0.0<br>
                    Commission</p>
                    <a class="btns btn-info" href="<?=BASE_URL();?>user/withdrawal">See</a>
                </div>
                 <div class="col-4  text-center mb-3">
                     <p style="color:white; ">0.0<br>
                     Interest</p>
                    <a class="btns btn-info" href="<?=BASE_URL();?>user/roi">See</a>
                </div>
                    </div> </div>
                    </section>
                    <div class="container-fluid mb-5">
                    <section>
                        <script>
                    setTimeout(function() {
                        $('#flashMessage').fadeOut('fast');
                        $('.flashMessage').fadeOut('fast');
                    },2000);
                </script>
                
            <div class=" my-parity">
                <div class="card" style="border:0; box-shadow: unset;">
                    <div class="row">
                        <div class="col-md-12">

                          <ul class="side-menu">
                              
                            <div class="card mb-0">
							<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/index">
										
										<i class="fas fa-home ionicon side-menu__icon" style="background-color:#9c9c9c;"></i>
										
										<span class="side-menu__label">Dashboard</span></a>
								</li>
                               </div>
						      
						      <div class="card mb-0">
								<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/game_report">
								
										<i class="fab fa-jedi-order  ionicon side-menu__icon"></i>
										<span class="side-menu__label">Orders</span></a>
								</li>
								</div>

                          <div class="card mb-0">
						<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/referral">
									
										<i class="fab fa-product-hunt ionicon side-menu__icon"></i>
										<span class="side-menu__label">Promotion</span></a>
								</li>
								</div>
                            
                            <div class="card mb-0">
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
									<i class="fas fa-wallet ionicon side-menu__icon"></i>
									<span class="side-menu__label">Wallet</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item" href="<?=BASE_URL();?>user/online_recharge">Recharge</a></li>
									<li><a class="slide-item" href="<?=BASE_URL();?>user/withdrawal">Withdrawal</a></li>
									<li><a class="slide-item" href="<?=BASE_URL();?>user/wallet_history">Transaction</a></li>	
								</ul>
							</li>
							</div>

							<div class="card mb-0">
							<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/edit_profile">
									
										<i class="fas fa-university ionicon side-menu__icon"></i>
										<span class="side-menu__label">Bank Card</span></a>
								</li>
								</div>
                            
                            <div class="card mb-0">
							<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/edit_address">
										
										<i class="far fa-address-card ionicon side-menu__icon"></i>
										<span class="side-menu__label">Address</span></a>
								</li>
								</div>
                            
                            <div class="card mb-0">
							<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/edit_profile1">
										<i class="far fa-user ionicon side-menu__icon"></i>
										<span class="side-menu__label">Account Security</span></a>
								</li>
								</div>
                             
                             <div class="card mb-0">
							<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
											<i class="far fa-arrow-alt-circle-down  ionicon side-menu__icon"></i>
										<span class="side-menu__label">App Download</span></a>
								</li>
								</div>
                                   
                                   <div class="card mb-0">
						           <li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/query">
										<i class="fas fa-headset  ionicon side-menu__icon"></i>
										<span class="side-menu__label">Complaints & Suggestion</span></a>
								</li>
								</div>
								 
								 <div class="card mb-0">
								<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
								    <i class="far fa-copy  ionicon side-menu__icon"></i>
									<span class="side-menu__label">About</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item" href="<?=BASE_URL();?>user/privacy">Privacy Policy</a></li>
									<li><a class="slide-item" href="<?=BASE_URL();?>user/risk">Risk Disclosure Agreement</a></li>	
								</ul>
							</li>
							</div>

                               <div class="card mb-0">
						           <li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="<?=BASE_URL();?>user/logout">
									
										<i class="fas fa-sign-out-alt  ionicon side-menu__icon"></i>
										<span class="side-menu__label">Logout</span></a>
								</li>
								</div>
						</ul>
                        </div>
                    </div>
                </div>
            </div>
        </section></div>

      <footer>
     <div class="row footer-inner" >
         
        <div class="row text-center">
            <div class="col-3 home">
            <a href="<?=BASE_URL();?>">
                <img style="height:20px; width:20px;" src="<?=BASE_URL();?>assets/welcome/img/nav/home.png">
                <p>Home</p></a>
            </div>
            <div class="col-3 search">
                <a href="<?=BASE_URL();?>">
                    <img  style="height:20px; width:20px;" src="<?=BASE_URL();?>assets/welcome/img/nav/search.png">
                    <p>Search</p></a>
            </div>
            <div class="col-3 win">
                <a href="<?=BASE_URL();?>welcome/win">
                    <img  style="height:20px; width:20px;" src="<?=BASE_URL();?>assets/welcome/img/nav/win.png">
                    <p>Win</p></a>
            </div>
            <div class="col-3 my">
                <a href="#" class="active4">
                    <img  style="height:20px; width:20px;" src="<?=BASE_URL();?>assets/welcome/img/nav/my.png">
                    <p>My</p></a>
            </div>
        </div>
        </div>
    </footer>

    <div class="modal fade" id="noteModalCenter" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%; max-width: 80%; margin: auto;">
    <div class="modal-color" style="width:100%;">

      <div class="modal-body">
         <h3>Notice</h3>
         <p>Welcome To BharatPay</p>
      </div>
      <div class="modal-footer" style="border:0;">
          <button id="button" type="button" class="btn btn-primary data-table-btn mb-2 mt-2 " data-dismiss="modal">Cancel</button>
      <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<script type="text/javascript">
    ;!( function( w, d ) {

        'use strict';

        var titles = d.querySelectorAll( '.title' ),

            i = 0,
            len = titles.length;

        for ( ; i < len; i++ )
            titles[ i ].onclick = function( e ) {

                for ( var j = 0; j < len; j++ )
                    if ( this != titles[ j ] )
                        titles[ j ].parentNode.className = titles[ j ].parentNode.className.replace( / open/i, '' );

                var cn = this.parentNode.className;

                this.parentNode.className = ~cn.search( /open/i ) ? cn.replace( / open/i, '' ) : cn + ' open';

            };

    })( this, document );
</script>
<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>

<!-- Select2 js -->
	<script src="<?=BASE_URL();?>assets/user/plugins/select2/js/select2.full.min.js"></script>
	
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

		<!-- JQuery min js -->
	<script src="<?=BASE_URL();?>assets/user/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap js -->
	<script src="<?=BASE_URL();?>assets/user/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Apexchart js -->
	<script src="<?=BASE_URL();?>assets/user/js/apexcharts.js"></script>

	<!--Internal Echart Plugin -->
	<script src="<?=BASE_URL();?>assets/user/plugins/echart/echart.js"></script>

	<!-- Perfect-scrollbar js -->
	<script src="<?=BASE_URL();?>assets/user/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="<?=BASE_URL();?>assets/user/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- Sidebar js -->
	<script src="<?=BASE_URL();?>assets/user/plugins/side-menu/sidemenu.js"></script>

	<!-- Sticky js -->
	<script src="<?=BASE_URL();?>assets/user/js/sticky.js"></script>
</body></html>