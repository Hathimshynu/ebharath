<html lang="en"><head>
    <title>MMax Mall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASEURL?>assets/welcome/css/bootstrap.min.css">
    <script src="<?=BASEURL?>assets/welcome/js/jquery.min.js"></script>
    <script src="<?=BASEURL?>assets/welcome/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASEURL?>assets/welcome/css/style.css">
    <link rel="stylesheet" href="<?=BASEURL?>assets/welcome/css/style-login.css">
    <link href="<?=BASEURL?>assets/welcome/img/favicon.png" rel="icon">
    <style>

        .inr-icon{
            position: absolute;
            padding: 14px 35px;
        }
        .pl-50{
            padding-left: 70px !important;
        }
        
        .topbar h2{
    margin: 0;
    color: #333;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: .02em;
    padding: 12px 0;
    padding-left: 40px;
}
.pass-icon{
            position: relative !important;
            top: 27px  !important;
            left: 11px  !important;
            float: left !important;
        }
        .login-icon{
            position: relative !important;
            top: 30px  !important;
            left: 17px  !important;
            float: left !important;
        }
   
       
        .register-btn .r-btn, .register-btn .f-btn {
            position: relative;
            top: 10px;
        }
.topbar img{
    width: 20px;
    height: 20px;
}
.fild-icon img{
    width: 20px;
    height: 20px;
    position: absolute;
        left: 35px;
    margin-top: 14px;
}

.login input {
    width: 100%;
    padding: 10px 10px 10px 45px;
    border: 1px solid #c6c6c6;
    box-shadow: 0px 3px 4px #dedede;
    border-radius: 5px;
    margin-bottom: 10px;
    height: 48px;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
        border: 0;
}

/*---------------------login------------------------*/
.topbar{
    background: #ddd;
    margin: 0;
    padding: 7px 0;
        box-shadow: 0px 4px 8px #bebebe;
        position: fixed;
    /*max-width: 500px;*/
    width: 100%;
    top: 0;
    z-index: 1;
    height: 56px;
}
.topbar a{
    color: #fff;
}
.login{
    padding: 15px;
        text-align: center;
}

.login-icon{
    font-size: 25px;
    color: #199986;
    position: absolute;
    top: 24px;
    left: 30px;
}

/*.login input{
    width: 100%;
    padding: 10px 10px 10px 45px;
    border: 1px solid #c6c6c6;
    box-shadow: 0px 3px 4px #dedede;
    border-radius: 5px;
    margin-bottom:10px;
}*/
 .login{
            padding: 60px 24px 24px 24px;
        }
.pass-icon{
    font-size: 20px;
    color: #199986;
    position: absolute;
    top: 77px;
    left: 30px;
}

.login .l-btn{
background: #0081FF;
    border: none;
    font-size: 15px;
    padding: 12px 60px;
    color: #fff;
    border-radius: 5px;
    margin-top: 15px;
    width: 240px;
    margin-bottom: 30px;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
}
.login .l-btn:hover{
    background: #0081FF;
}

.register-btn{
    padding: 0;
    margin: 0;
}
#sendotp{
    color: #000;
  
}

.register-btn .r-btn:hover{
    background: #fff;
    color:#0081ff;
}
.register-btn .f-btn{
        color: #0081ff;
    opacity: .7;
    line-height: 32px;
    font-size: 16px;
    border: 1px solid #0081ff;
    text-decoration: underline;
    border-radius: 4px;
    background-color: #fff;
    padding:10px 12px;
}
.register-btn .r-btn{
        color: #0081ff;
    opacity: .7;
    line-height: 32px;
    font-size: 16px;
    border: 1px solid #0081ff;
    text-decoration: underline;
    border-radius: 4px;
    background-color: #fff;
    padding: 10px 25px;
}
.register-btn .f-btn:hover{
    background: #fff;
    color:#0081ff;
}

/*-----------------register--------------*/
.register{
        text-align: center;
        padding: 60px 24px 24px 24px;
}

.reg-icon{
    /*font-size: 25px;
    color: #199986;
    position: absolute;
    top: 24px;
    left: 30px;*/
    font-size: 20px;
    color: #199986;
    position: absolute;
    left: 28px;
    margin-top: 10px;
}

.register .text-field{
   width: 100%;
    padding: 10px 10px 10px 45px;
    border: 1px solid #c6c6c6;
    box-shadow: 0px 3px 4px #dedede;
    border-radius: 5px;
    margin-bottom: 10px;
    height: 48px;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    border: 0;
}

.veri-icon{
    /*font-size: 20px;
    color: #199986;
    position: absolute;
    top: 77px;
    left: 30px;*/
    font-size: 20px;
    color: #199986;
    position: absolute;
    left: 28px;
    margin-top: 10px;
}
.r-pass-icon{
    /*font-size: 20px;
    color: #199986;
    position: absolute;
    top: 130px;
    left: 30px;*/
    font-size: 20px;
    color: #199986;
    position: absolute;
    left: 28px;
    margin-top: 10px;
}

.r-code-icon{
    font-size: 20px;
    color: #199986;
    position: absolute;
    left: 28px;
    margin-top: 10px;
}

.register .l-btn{
   background: #0081FF;
    border: none;
    font-size: 15px;
    padding: 12px 60px;
    color: #fff;
    border-radius: 5px;
    margin-top: 15px;
    width: 75%;
    margin-bottom: 30px;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
}
.register .l-btn:hover{
    background: #0081FF;
}
.otp-btn{
       width: 90%;
    padding:14px 0;
    border: 0;
    box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
    float: right;
    cursor: pointer;
    border-radius: 5px;
}
.otp-btn a{
 width: 90%;
    padding: 10px ;
    border-radius: 0px;
    margin-bottom: 10px; 
    cursor: pointer;
    
}

/*--------------forget------------*/

.forget{
    padding: 15px;
        text-align: center;
}

.forget input{
    width: 100%;
    padding: 10px 10px 10px 45px;
    border: 1px solid #c6c6c6;
    box-shadow: 0px 3px 4px #dedede;
    border-radius: 5px;
    margin-bottom:10px;
}

.forget .l-btn{
        background: #199986;
    border: none;
    padding: 10px 60px;
    color: #fff;
    border-radius: 5px;
    margin-top: 15px;
}
.forget .l-btn:hover{
    background: #164c9c;
}

/*-----------------------*/
.check-box{
    width: 20px !important;
    height: 20px !important;
    box-shadow:none !important;
    margin: 0 !important;
    position: relative;
    top: 4px;
}
.form-inline{
    margin: 0;
    padding:0; 
}

.register-btn-main .f-btn{
    background: #f1f1f1;
    border: 0;
    padding: 10px 20px;
    color: #000;
    border-radius: 2px;
    box-shadow: 0px 3px 4px #b7b7b7;
}
.register-btn-main .r-btn{
    background: #f1f1f1;
    border: 0;
    padding: 10px 20px;
    color: #000;
    border-radius: 2px;
    box-shadow: 0px 3px 4px #b7b7b7;
    margin-right: 10px;
}
.pl-0{
    padding-left: 0 !important;
}
 .p-0{
    padding: 0 !important;
}
@media(max-width:991){
            #sendotp{                
                padding: 10px 3vw;
            }
        }


.topbar a{
    position: absolute;
}
.topbar h2{
    
}


    </style>
</head>
<body style="padding:0; ">
<section>
    <div class="row topbar">
        <div class="col-xs-12">
            <a onclick="history.back(-1)"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png"></a>
            <h2>Register</h2>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-12 register">
            <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
                <form id="mainForm" method="POST" action="<?=BASEURL?>user/register" aria-label="Register" enctype="multipart/form-data">
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
                <input type="hidden" name="_token" value="6KJASiyW23tBciViIbN84QFNwFNbUGY61D9f2nPI">
                <p style="color:orange;">OTP will send to Email. So, please fill correct Email!</p>
                <p class="text-danger"><?=form_error('email');?></p>
                <p class="text-danger"><?=form_error('phone');?></p>
                <p class="text-danger"><?=form_error('otp');?></p>
                <p class="text-danger"><?=form_error('password');?></p>
                <p class="text-danger"><?=form_error('ref_id');?></p>
                <p id="demo" class="text-danger"></p>
                <p id="timer"></p>
                <p id="ress"></p>
                <span class="fild-icon">
                       <img src="<?=BASE_URL();?>assets/welcome/img/mobi-icon.png">
                    <div class="inr-icon">+91</div>
                        <input placeholder="Phone (10 digit number) *" id="phone" type="tel" class="pl-50 text-field " name="phone" value="" required="" autofocus="">
                    </span>
                
                    <span class="fild-icon">
                        <img src="<?=BASE_URL();?>assets/welcome/img/pass-icon.png">
                        <input placeholder="Email *" id="email" type="email" class="text-field " name="email" required="">
                    </span>

            <!---->

                <div class="row form-inline">
                    <div class="col-xs-8 col-lg-9 p-0">
                           <span class="fild-icon">
                        <img src="<?=BASE_URL();?>assets/welcome/img/verifi-icon.png" style="left:10px;">
                        <input placeholder="OTP *" id="otp" min="4" type="number" class="text-field " name="otp" value="" required autofocus="">
                    </span>

                        
                    </div>
                    <div class="col-xs-4 col-lg-3 p-0">
                        <div class="otp-btn">
                            <a id="sendotp" onclick="otp()">Send OTP</a>
                        </div>
                    </div>
                </div>


                <!--<div class="register-btn" style="text-align: left;">-->
                <!--    <a id="sendotp" type="button" class="r-btn">Send OTP</a>-->
                <!--</div>-->

                <!--<span>-->
                <!--    <i class="fa fa-lock reg-icon" aria-hidden="true"></i>-->
            <!--    <input placeholder="OTP *" id="otp" type="number" class="text-field " name="otp" value="" required autofocus>-->
                <!--</span>-->



                <!---->







                <!---->

                <!--<span>-->
                <!--    <i class="fa fa-envelope reg-icon" aria-hidden="true" style="font-size: 20px;"></i>-->
            <!--    <input placeholder="Email *" id="email" type="email" class="text-field " name="email" value="" required autofocus>-->
                <!--</span>-->
            <!---->

            <!-- <span>
                        <i class="fa fa-user veri-icon" aria-hidden="true"></i>
                        <input placeholder="Name *" id="name" type="text" class="text-field " name="name" value="" required autofocus>
                    </span> -->
            <!--    -->

                <span class="fild-icon">
                        <img src="<?=BASE_URL();?>assets/welcome/img/pass-icon.png">
                        <input placeholder="Password *" id="password" type="password" class="text-field " name="password" required="">
                    </span>
                
                    <?php
                      $abcd = "";
                        if($ref ==""){
                               $ref = $this->input->post('ref_id'); 
                         } else{
                              $ref =$ref; }
                              
                        if($ref != "BHP1001"){
                          $refx =$ref;
                          //$abcd = "readonly";
                        } else {
                           $refx ="BHP1001";   
                        }
                        ?>
                
                
                <span class="fild-icon">
                        <img src="<?=BASE_URL();?>assets/welcome/img/recommed-icon.png">
                        <input placeholder="Referral Id" id="refer_id" type="text" value="<?=$refx?>"  class="text-field " name="ref_id">
                </span>
                
                <p style="text-align: left;position: relative;top: 10px;">
                    <input type="checkbox" name="checkbox" checked="" required=""> I Agree <a target="_blank" style="color:#08326f;" href="#"> Privacy Policy</a>
                </p>
                <br>
                
                <button id="submitBtn" type="submit" class="l-btn">Register</button>
            </form>
        </div>
    </div>
</section>
<footer>
    <div class="row footer-inner">
        <div class="col-md-4 col-sm-4 col-xs-4 home">
            <a href="<?=BASE_URL();?>">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/home.png">
                <p>Home</p></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 search">
            <a href="<?=BASE_URL();?>">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/search.png">
                <p>Search</p></a>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4 my">
            <a href="#">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/my.png">
                <p>My</p></a>
        </div>

    </div>
</footer>

<script src="<?=BASEURL?>assets/welcome/js/popper.min.js"></script>

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
       $.post('<?=BASE_URL();?>user/new_check', {
	        'email': em,
	    })
	    //alert('hiii');
	   .done(function(res) {
	        //alert(res);
	        if(res!='success') {
				document.getElementById("demo").innerHTML = "Email ID alredy exist";
	        } else{
	        	document.getElementById("demo").innerHTML = "Mail sent to Email ID";
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


// function checkotp()
// {
//      var ot = document.getElementById('otp').value;
     
//      if(ot == "")
//      {
//         document.getElementById('demo').innerHTML = "OTP expired please click send otp again";
//         document.getElementById("sendotp").style.pointerEvents = "";
//      }
//      else
//      {
   
//         $.post('<?=BASEURL?>user/new_otp_check', {
//         	'otp': ot,
//         })
        	    
//         if(ress!='success') {
//     	document.getElementById("demo").innerHTML = "OTP not valid";
//          }
//          else
//          {
//           document.getElementById("demo").innerHTML = "OTP verified"; 
//          }
//      }
// }

    // $('#sendotp').on('click',function (e) {
    //     e.preventDefault();

    //     var email = $('#phone').val();
    //     if(email){

    //         $('#sendotp').text('Sending...');

    //         $.ajax({
    //             url: "<?=BASE_URL();?>assets/welcome/sendotp",
    //             type: 'POST',
    //             data: {
    //                 "_token": "6KJASiyW23tBciViIbN84QFNwFNbUGY61D9f2nPI",
    //                 "email": email
    //             },
    //             dataType: 'JSON',
    //             success: function (data) {
    //                 if(data.status == 1){
    //                     localStorage.setItem("motp",data.otp);
    //                     $('#phone').attr('readonly',true);
    //                     $('#sendotp').off('click');
    //                     $('#sendotp').text('OTP Sent');
    //                     $('#sendotp').attr('disabled',true);
    //                     return false;
    //                 }else if(data.status == 2){
    //                     alert('Phone already exists, try with new phone number!');
    //                     return false;
    //                 }else{
    //                     alert('Something went wrong, try later!');
    //                     return false;
    //                 }
    //             },
    //             error: function (data) {
    //                 alert('Something went wrong!');
    //                 return false;
    //             }
    //         });
    //     }else{
    //         alert('Phone field required!');
    //         return false;
    //     }
    // });

    // $('#submitBtn').on('click',function (e) {
    //     e.preventDefault();

    //     var phone = $('#phone').val();
    //     //var name = $('#name').val();
    //     var password = $('#password').val();
    //     var otp = $('#otp').val();
    //     //var email = $('#email').val();


    //     if(!(phone && password && otp)){
    //         alert('Phone, Password & OTP are required!');
    //         return false;
    //     }

    //     var ooootp = localStorage.getItem("motp");

    //     if(ooootp && (ooootp.trim() === otp.trim())){
    //         $('#mainForm').submit();
    //     }else{
    //         alert('OTP Mismatched!');
    //         return false;
    //     }
    //     return false;
    // });
</script>


</body></html>