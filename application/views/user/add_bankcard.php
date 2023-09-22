<?php include('header.php')?>

    <style type="text/css">
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
        .form-group input:focus {
            outline: none;
            background: none;
            box-shadow: none;
        }
        .form-group input {
            border: 0 !important;
            padding: 35px 2px 16px 16px !important;
            margin-bottom: 0 !important;
            border-radius: 0 !important;
        }
        .form-group {
            border-bottom:1px solid #979797;
        }
        .bank-card label {
            margin-top: 0 !important;
            padding: 0 !important;
        }
        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: unset;
            opacity: 1;
        }
        li, ol, ul {
    list-style: none;
}
*, li, ol, p, ul {
    padding: 0;
    margin: 0;
}
.list_ul li {
    padding: 15px 10px 15px 0;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    border-bottom: 1px solid #dcdcdc;
}
.list_ul li .left_icon {
    width: 18%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.list_ul li .center{
    width: 72%;
}
.list_ul li .right_icon {
    width: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.list_ul li .left_icon img {
    width: 40px;
    height: 40px;
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
        <div class="col-xs-6">
            <a style="margin-top:10px;" onclick="history.back(-1)"><img src="<?=BASEURL?>assets/welcome/img/back-arrow.png"></a>
            <h2 style="color:white;">Add Bank Card</h2>
        </div>
        <div class="col-xs-6 ">
            <span class="pull-right" style="margin-right:15px;">
            <a style="margin-top:10px;" onclick="history.back(-1)"><img src="<?=BASEURL?>assets/user/img/plus.png"></a>
            </span>
            
        </div>
    </div>
    
     <?php 
        if($this->session->flashdata('success_message'))
        {
        ?>
        <div class=" text-center">        
          <span class="text-success"><?=$this->session->flashdata('success_message');?></span>
        </div>
        <?php
        }
        ?>
        <?php 
        if($this->session->flashdata('error_message'))
        {
        ?>
        <div class=" text-center">        
          <span class="text-success"><?=$this->session->flashdata('error_message');?></span>
        </div>
        <?php
        }
        ?>
</section>
<div class="page-inner">
     
    <section>
        <div class="row">
            <div class="col-md-12 bank-card p-0">
<script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
            
                <h5 class="text-danger text-center">You can add bank card only one time. So fill your bank details carefully</h5>
            
                <form method="post" action="<?=BASEURL?>user/add_bank">
                    <input type="hidden" name="_token" value="1XVFLimqkbADSz0KWDYInnkas5F6iYIgoqSI0G1G">                    <div class="form-group text-left">
                        <label for="ubank_holder_name">Acc Holder Name <span class="text-danger"><?=form_error('ubank_holder_name');?></span></label>
                        <input required="" value="" type="text" id="ubank_holder_name" name="ubank_holder_name" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="ubank_ifsc">IFSC Code <span class="text-danger"><?=form_error('ubank_ifsc');?></span></label>
                        <input required="" value="" type="text" id="ubank_ifsc" name="ubank_ifsc" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="ubank_name">Bank Name <span class="text-danger"><?=form_error('ubank_holder_name');?></span></label>
                        <input required="" value="" type="text" id="ubank_name" name="ubank_name" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="ubank_account">Bank Account Number <span class="text-danger"><?=form_error('ubank_account');?></span></label>
                        <input required="" value="" type="text" id="ubank_account" name="ubank_account" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="state">State / Territory <span class="text-danger"><?=form_error('state');?></span></label>
                        <input required="" value="" type="text" id="state" name="state" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="city">City <span class="text-danger"><?=form_error('city');?></span></label>
                        <input required="" value="" type="text" id="city" name="city" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="address">Address <span class="text-danger"><?=form_error('address');?></span></label>
                        <input required="" value="" type="text" id="address" name="address" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="w_phone">Mobile Number <span class="text-danger"><?=form_error('w_phone');?></span></label>
                        <input required="" value="" type="tel" id="w_phone" name="w_phone" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="email">Email <span class="text-danger"><?=form_error('email');?></span></label>
                        <input value="" type="email" id="email" name="email" class="form-control">
                    </div>
                    
                    <div class="form-group text-left">
                        <label for="phone">UPI<span class="text-danger"><?=form_error('upi');?></span></label>
                        <input value="" type="text" name="upi" id="upi" class="form-control">
                    </div>
                    
                    <div class="form-group text-left">
                        <label for="phone">Account phone number <span class="text-danger"><?=form_error('phone');?></span></label>
                        <input value="<?=$this->session->userdata('bhpphone')?>" type="tel" name="phone" id="phone" class="form-control">
                    </div>
                    <button type="submit" class="l-btn w-100 rounded-0">Continue</button>
                </form>
            </div>
        </div>
    </section>
    

    
</div>

<?php include('footer.php') ?>

<script src="<?=BASE_URL();?>assets/user/js/popper.min.js"></script>
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
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>


</body></html>