<?php include('header.php'); ?>

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
        .topbar a {
            position: absolute;
            top: 0px;
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

    <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
    <section class="p-0">
       
        <div class="row topbar">       
            <div class="col-xs-6">
                <a style="margin-top:10px;" onclick="history.back(-1)"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png"></a>
                <h2 style="color:white;">Address</h2>
            </div>
             <div class="col-xs-6 ">
            <span class="pull-right" style="margin-right:15px;">
            <a style="margin-top:10px;" onclick="history.back(-1)"><img src="<?=BASE_URL();?>/assets/user/img/plus.png"></a>
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
                    <?php $address = $this->db->where('user_name',$this->session->userdata('bhpusername'))->get('user_role')->row_array() ?>
                    <form method="post" action="<?=BASE_URL();?>user/edit_address">
                        <input type="hidden" name="_token" value="1XVFLimqkbADSz0KWDYInnkas5F6iYIgoqSI0G1G">  
                        <input type="text" placeholder="City" name="city" value="<?=$address['city']?>"><br>
                        <input type="text" placeholder="State" name="state" value="<?=$address['state']?>"><br>
                        <input type="text" placeholder="PinCode" name="pincode" value="<?=$address['pincode']?>"><br>
                        <input type="text" placeholder="Address" name="address" value="<?=$address['address']?>"><br>
                        <button type="submit" class="l-btn w-100 rounded-0">Update</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
    
    
       <?php include('header.php'); ?>
       
       
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
<!-----infomation popup------------>

<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>




</body></html>