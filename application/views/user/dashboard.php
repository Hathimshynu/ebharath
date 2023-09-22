<html lang="en"><head>
    <title>Bharatpay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASEURL?>assets/user/css/bootstrap.min.css">
    <script src="<?=BASEURL?>assets/user/js/jquery.min.js"></script>
    <script src="<?=BASEURL?>assets/user/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>assets/user/css/style.css">
    <link href="<?=BASEURL?>assets/user/img/favicon.png" rel="icon">
    <style>
    .btns {
        width:100px;
    display: inline-block;
    /*padding: 6px 12px;*/
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
    width: 600px;
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
           

        }
        .title {
            background: #fff;
            color: #4e4e4e;
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
            color: #08326f;
            font-size: 15px;
            margin-bottom: 10px;
            font-weight: 600;
            margin-top: 0;
        }
        .my-parity-list-inner h2:before {
            padding-right: 7px;
            color: #00C37E;
        }
        .my-parity-list-inner a {
            color: #00C37E;
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
        
        .top_item>a {
    /*border-color: #2196f3!important;*/
    padding: 0 8px;
    margin-top: 5px;
    width: 80px;
    font-size: 14px;
}

.btns {
    background: #2196f3!important;
    
     /*border: 1px solid;*/
      /*padding: 10px;*/
      box-shadow: 2px 2px #544646;
}
.title .arrow
{
    float:right;
    width:20px;
}

.arr
{
    font-size: 20px;
    color:#c7c7c7;
}

.btn-info:hover {
            width:100px;
    display: inline-block;
    /*padding: 6px 12px;*/
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: default;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
     background: #2196f3!important;
    
     /*border: 1px solid;*/
      /*padding: 10px;*/
      box-shadow: 2px 2px #544646;
      text-decoration:none;
}

    </style>
</head>
<body>
    <!-- <div class="loader">
        <div class="snippet" data-title=".dot-windmill">
            <div class="stage">
                <div class="dot-windmill"></div>
            </div>
        </div>
    </div> -->
    <section class="p-0">
            <div class="row menu-header">
                <div class="col-xs-9 col-md-9 p-0" style="padding-top: 10px;">
                   <div class="edit-details">
                      <img src="<?=BASE_URL();?>assets/user/img/icons/propic.png" width="50px" style="">
                    </div>
                    <p style="color:white; ">
                       User: 91<?=$this->session->userdata('bhpphone')?><br>
                        ID: <?=$this->session->userdata('bhpusername')?><br>
                        <!--Interest ₹0.00 Commission ₹0<br>-->
                        <!--Available balance ₹0.00-->
                        <!--<a onclick="sharel()" class="btn btn-primary btn-sm mt-2">Copy referral link</a>-->
                    </p>
                </div>
               
                 <div class="col-xs-3 col-md-3">
                        <div class="text-right notifi-icon">
                            <a data-toggle="modal" data-target="#noteModalCenter"><img  src="<?=BASE_URL();?>assets/user/img/noti-icon.png"></a>
                        </div>
                    </div>
                     <?php
                
                $credit = $this->db->select_sum('credit')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                $debit = $this->db->select_sum('debit')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->debit+0;
                $bal = $credit-$debit;
                
                $commission = $this->db->select_sum('credit')->where('remark','Referral')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                $interest = $this->db->select_sum('credit')->where('remark','Interest')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                ?>
                    
                    <div class="row mb-3 mt-4 top_item" style="margin-top:60px; margin-bottom: 12px;">
                <div class="col-xs-4 text-center mb-3">
                    <p class="" style="color:white; margin-left:-85px;">₹ <?=number_format($bal,2)?><br>
                    Balance</p>
                    <a class="btns btn-info" href="<?=BASE_URL();?>user/online_recharge">Recharge</a>
                </div>
                <div class="col-xs-4 text-center mb-3">
                    <p style="color:white; margin-left:-85px;">₹ <?=$commission?><br>
                    Commission</p>
                    <a class="btns btn-info" href="<?=BASE_URL();?>user/commission_income">See</a>
                </div>
                 <div class="col-xs-4 text-center mb-3">
                     <p style="color:white; margin-left:-85px;">₹ <?=number_format($interest,2)?><br>
                     Interest</p>
                    <a class="btns btn-info" href="<?=BASE_URL();?>user/roi">See</a>
                </div>
                    </div>
               
            </div>
            
            
            
        </section>
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
                            
                            
                         <div id="mp-list" class="my-parity-list1"> 
                                <a href="<?=BASEURL?>user"><div class="title">
                                   <img src="<?=BASE_URL();?>assets/user/img/icons/13.png ">Dashboard
                                  <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>
                                </div>
                                <div class="my-parity-list-inner">
                                </div>
                                </a>
                            </div>

                              <div id="mp-list" class="my-parity-list1">
                                <a href="<?=BASEURL?>user/game_report"><div class="title">
                                    <img src="<?=BASE_URL();?>assets/user/img/icons/1.png">Orders
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>
                                </div>
                                <div class="my-parity-list-inner">
                                </div></a>
                            </div>
                            <div onclick="#" id="mp-list" class="my-parity-list1 open">
                                 <a href="<?=BASEURL?>user/referral"><div class="title">
                                  <img src="<?=BASE_URL();?>assets/user/img/icons/4.png">Promotion
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>
                                </div>
                                <div class="my-parity-list-inner">
                                </div></a>
                            </div>
                            <div id="mp-list" class="my-parity-list">
                                <div class="title">
                                    <a href="javascript:void(0);"><img src="<?=BASE_URL();?>assets/user/img/icons/6.png">Wallet</a>
                                    <i class="fa fa-angle-right right-icon" aria-hidden="true"></i>
                                </div>
                                <div class="my-parity-list-inner">
                                    <a href="<?=BASEURL?>user/online_recharge">Recharge</a><br>
                                    <a href="<?=BASEURL?>user/withdrawal">Withdrawal</a><br>
                                    <a href="<?=BASEURL?>user/wallet_history">Transactions</a>
                                </div>
                            </div>
                            <div id="mp-list" class="my-parity-list1">
                                <a href="<?=BASEURL?>user/edit_profile"> <div class="title">
                                   <img src="<?=BASE_URL();?>assets/user/img/icons/7.png">Bank Card
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>
                                </div>
                                <div class="my-parity-list-inner">
                                    
                                </div></a>
                            </div>
                            <div id="mp-list" class="my-parity-list1">
                                <a href="<?=BASEURL?>user/edit_address"><div class="title">
                                    <img src="<?=BASE_URL();?>assets/user/img/icons/8.png">Address
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>
                                </div>
                                <div class="my-parity-list-inner">

                                </div></a>
                            </div>

                            <div id="mp-list" class="my-parity-list1">
                                <a href="<?=BASEURL?>user/edit_profile1"><div class="title">
                                    <img src="<?=BASE_URL();?>assets/user/img/icons/9.png">Account Security
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>

                                </div>
                                <div class="my-parity-list-inner">

                                </div></a>
                            </div>

                            <div id="mp-list" class="my-parity-list1">
                                <a href="#" download=""><div class="title">
                                    <img src="<?=BASE_URL();?>assets/user/img/icons/10.png">App Download
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>

                                </div>
                                <div class="my-parity-list-inner">

                                </div></a>
                            </div>

                            <div id="mp-list" class="my-parity-list1">
                                   <a href="<?=BASEURL?>user/query"><div class="title">
                                <img src="<?=BASE_URL();?>assets/user/img/icons/11.png">Complaints &amp; Suggestions
                                    <div class="arrow"> <i class="fa fa-angle-down arr"></i></div>

                                </div>
                                <div class="my-parity-list-inner">

                                </div></a>
                            </div>

                            <div id="mp-list" class="my-parity-list">
                                <div class="title">
                                    <a href="javascript:void(0);"><img src="<?=BASE_URL();?>assets/user/img/icons/12.png">About</a>
                                    <i class="fa fa-angle-right right-icon" aria-hidden="true"></i>
                                </div>
                                <div class="my-parity-list-inner">
                                    <a href="<?=BASEURL?>user/privacy">Privacy Policy</a><br>
                                    <a href="<?=BASEURL?>user/risk">Risk Disclosure Agreement</a>
                                </div>
                            </div>

                            <div class="my-parity">
                                <div class="text-center title">
                                    <a class="btn btn-default" href="<?=BASE_URL();?>user/logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <footer>
        <div class="row footer-inner">
            <div class="col-md-3 col-sm-3 col-xs-3 home">
            <a href="<?=BASE_URL();?>">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/home.png">
                <p>Home</p></a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 search">
                <a href="<?=BASE_URL();?>">
                    <img src="<?=BASE_URL();?>assets/welcome/img/nav/search.png">
                    <p>Search</p></a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 win">
                <a href="<?=BASE_URL();?>welcome/win">
                    <img src="<?=BASE_URL();?>assets/welcome/img/nav/win.png">
                    <p>Win</p></a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 my">
                <a href="#" >
                    <img src="<?=BASE_URL();?>assets/welcome/img/nav/my.png">
                    <p>My</p></a>
            </div>
        </div>
    </footer>
    
   

    <div class="modal fade" id="noteModalCenter" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%; max-width: 80%; margin: auto;">
    <div class="modal-content" style="width:100%;">

      <div class="modal-body">
         <h3>Notice</h3>
         <p>Welcome To BharatPay</p>
      </div>
      <div class="modal-footer" style="border:0;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: unset; font-size: 18px; color: #0081FF;">Close</button>
      <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script src="<?=BASEURL?>assets/user/js/popper.min.js"></script>

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


</body></html>