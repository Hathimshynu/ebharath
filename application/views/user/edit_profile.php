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
            <h2 style="color:white;">Bank Card</h2>
        </div>
        <div class="col-xs-6 ">
            <?php $bank_check = $this->db->where('user_id',$this->session->userdata('bhpusername'))->get('bank')->row_array();
            if(empty($bank_check))
            {
            ?>
            <span class="pull-right" style="margin-right:15px;">
            <a style="margin-top:10px;" href="<?=BASEURL?>user/add_bankcard"><img src="<?=BASEURL?>assets/user/img/plus.png"></a>
            </span>
            <?php } ?>
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
            
  
    </section>
    
    
    
   
            <div class="address_list">
              <?php $bank=$this->db->where('user_id',$this->session->userdata('bhpusername'))->get('bank')->row_array();
              if(!empty($bank))
              {
              ?>
                <ul class="list_ul">
                     <li>
                         <ol class="left_icon">
                         <img src="<?=BASE_URL();?>assets/welcome/img/card-icon.png" alt=""></ol>
                         <ol class="center">
                             <p class="name"><?=$bank['acc_name'];?></p>
                         <p class="info_text"><?=$bank['acc_no'];?></p>
                         </ol>
                         <ol  class="right_icon">
                             <img src="" alt="">
                     </ol>
                     </li>
                </ul>
                <?php } ?>
            </div> 
    
</div>
</div>
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