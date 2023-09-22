<?php include('header.php') ?>

    <link rel="stylesheet" href="<?=BASE_URL();?>assets/user/css/style-login.css">
    
    
    <style type="text/css">
        .register-btn {
            padding: 0;
            margin: 0;
            height: 48px;
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
        }
        .register-btn a{
            padding: 14px;
            width: 100%;
        }
        .pr-0{
            padding-right: 0;
        }
        .fild-icon img{
            left: 24px;
        }
        .login{
            padding: 8px;
        }
        .btn-primary{
            color: #333;
            background-color: #e7e7e7;
            border: none;
        }
        .btn-primary:hover{
            color: #333;
            background-color: #e7e7e7;
            border: none;
            box-shadow: none;
        }
        .modal{
            top:auto;
            bottom: 32px;
        }
        .modal-backdrop.in{
            opacity: 0.2;
        }
        .modal-body{
            padding: 0;
        }
        .modal-dialog{
            margin: 0;
            width: 100%;
        }
        .modal-content{
            border: none;
            border-radius: 0;
        }
        .bank-card input{
            padding: 15px;
        }
        .login .l-btn{
            width: 75%;
        }
    </style>
</head>
<body>
<script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
<section class="p-0">
    <div class="row topbar">
        <div class="col-xs-12">
            <a style="margin-top:10px;" onclick="history.back(-1)"><img src="https://www.mmaxmall.live/mall/img/back-arrow.png"></a>
            <h2 style="color:white;">Reset Password</h2>
        </div>
    </div>
</section>
<div class="page-inner" style="padding-top:80px;">
    <section>
        <div class="row">
            <div class="col-md-12 login">
                <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
                <form method="post" action="<?=BASEURL?>user/change_password">
                    
                    
                    <?php 
                          if($this->session->flashdata('success_message'))
                          {
                            ?>
                          <?=$this->session->flashdata('success_message');?>
                           <?php
                             }
                            ?>
                             <?php
                             if($this->session->flashdata('error_message'))                          
                             {
                            ?>                  
                            <?=$this->session->flashdata('error_message');?>
                           <?php
                          }
                   ?>
                    
                    
                    <div class="text-danger"><?=form_error('n_pass');?></div>
                    <div class="text-danger"><?=form_error('otp');?></div>
                    <p id="demo"></p>
                    <p id="timer"></p>
                    
                    <input type="hidden" name="_token" value="1XVFLimqkbADSz0KWDYInnkas5F6iYIgoqSI0G1G">                    <span class="fild-icon">
                        <img src="<?=BASE_URL();?>assets/welcome/img/mobi-icon.png">
                        <input placeholder="Enter Email" id="email" type="email" class="text-field " name="email" value="" required="" autofocus="">
                    </span>
                    <div class="row form-inline">
                        <div class="col-xs-8 col-lg-9 p-0">
                           <span class="fild-icon">
                            <img src="<?=BASE_URL();?>assets/welcome/img/verifi-icon.png" style="left: 8px;">
                                <input placeholder="Verification Code" id="otp" type="number" class="text-field " name="otp" value="" required="" autofocus="">
                            </span>

                        </div>
                        <div class="col-xs-4 col-lg-3 pr-0">
                            <div style="background: #F5F5F5;" class="register-btn">
                                <a id="sendotp" type="button" class="btn" onclick="otp()">OTP</a>
                            </div>
                        </div>
                    </div>
                    <span class="fild-icon">
                        <img src="<?=BASE_URL();?>assets/welcome/img/pass-icon.png">
                        <input placeholder="New Password" id="password" type="password" class="form-control" name="n_pass" required="">
                    </span>
                    <button type="submit" class="l-btn" style="max-width:75%;">Continue</button>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include('footer.php');?>

<script>


function otp(){
    //alert('hiii');
    var em = document.getElementById('email').value;
   
    if(em == "")
    {
        document.getElementById("demo").innerHTML = "Please enter Email ID";
    }
    else
    {
       $.post('<?=BASE_URL();?>user/reset_mail_check', {
	        'email': em,
	    })
	    //alert('hiii');
	   .done(function(res) {
	        //alert(res);
	        if(res!='success') {
				document.getElementById("demo").innerHTML = "Email ID Not Valid";
	        } else{
	        	document.getElementById("demo").innerHTML = "OTP sent to Email ID";
	        	document.getElementById("sendotp").style.pointerEvents = "none";
                
                document.getElementById('timer').innerHTML =
                 05 + ":" + 00;
                startTimer();
                
                
                function startTimer() {
                  var presentTime = document.getElementById('timer').innerHTML;
                  var timeArray = presentTime.split(/[:]+/);
                  var m = timeArray[0];
                  var s = checkSecond((timeArray[1] - 1));
                  if(s==59){m=m-1}
                  if(m<0){
                    document.getElementById("demo").innerHTML = "If you don't get OTP Click Send OTP again";
	        	    document.getElementById("sendotp").style.pointerEvents = "";
                    return
                  }
                  
                  document.getElementById('timer').innerHTML =
                    m + ":" + s;
                  console.log(m)
                  setTimeout(startTimer, 1000);
                  
                }
                
                function checkSecond(sec) {
                  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
                  if (sec < 0) {sec = "59"};
                  return sec;
                }
	        }
	    });
    }
}









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
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>


</body></html>