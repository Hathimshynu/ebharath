<html lang="en"><head>
    <title>Bharatpay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.mmaxmall.live/mall/css/bootstrap.min.css">
    <script src="<?=BASE_URL();?>assets/welcome/js/jquery.min.js"></script>
    <script src="<?=BASE_URL();?>assets/welcome/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/style-login.css">
    <link href="<?=BASE_URL();?>assets/welcome/img/favicon.png" rel="icon">
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
            <a href="#"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png"></a>
            <h2>Login</h2>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-12 login">

            <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>

            <form method="POST" action="<?=BASEURL?>user/login" aria-label="Login">
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
                
                <input type="hidden" name="_token" value="6KJASiyW23tBciViIbN84QFNwFNbUGY61D9f2nPI">                <span class="fild-icon">
                    <img src="<?=BASE_URL();?>assets/welcome/img/mobi-icon.png">
                    <!-- <div class="inr-icon">+91</div> pl-50-->
                <input id="email" type="email" class=" form-control " name="email" value="" required="" autocomplete="email" placeholder="Enter Email ID *" autofocus="">
                </span>

                
                <span class="fild-icon">
                    <img src="<?=BASE_URL();?>assets/welcome/img/pass-icon.png">
                <input placeholder="Password *" id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">
                </span>

                
                <button type="submit" class="l-btn">Login</button>

                <div class="row register-btn">
                    <div class="col-xs-5 p-0" style="text-align: left;"><a href="<?=BASE_URL();?>user/register" type="button" class="r-btn">Register</a></div>
                    <div class="col-xs-7 p-0" style="text-align: right;"><a href="<?=BASE_URL();?>user/forgot_password" type="button" class="f-btn">Forget Password?</a></div>                   
                    
                </div>
            </form>
        </div>

    </div>
</section>

<footer>
    <div class="row footer-inner">
        <div class="col-md-4 col-sm-4 col-xs-4 home">
            <a href="<?=BASEURL?>">
                <img src="<?=BASEURL?>assets/welcome/img/nav/home.png">
                <p>Home</p></a>
        </div>
         <div class="col-md-4 col-sm-4 col-xs-4 search">
            <a href="<?=BASEURL?>">
                <img src="<?=BASEURL?>assets/welcome/img/nav/search.png">
                <p>Search</p></a>
        </div>
       
        <div class="col-md-4 col-sm-4 col-xs-4 my">
            <a href="<?=BASEURL?>user">
                <img src="<?=BASEURL?>assets/welcome/img/nav/my.png">               
                <p>My</p></a>
        </div>

    </div>
</footer>
<script src="<?=BASE_URL();?>assets/welcome/js/popper.min.js"></script>

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



</body></html>