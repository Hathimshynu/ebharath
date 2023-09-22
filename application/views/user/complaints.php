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
        .bank-card input {
    padding: 15px;
}
.plus
{
    margin-top:10px; 
    align-content:right;
    
}
.bank-card select {
    width: 100%;
    padding: 10px 10px 10px 40px;
    box-shadow: 0px 1px 1px #dedede;
    margin-bottom: 10px;
    border: 0;
}
.bank-card textarea {
    width: 100%;
    padding: 10px 10px 10px 40px;
    box-shadow: 0px 1px 1px #dedede;
    margin-bottom: 10px;
    border: 0;
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
        <div class="row topbar">       
            <div class="col-xs-12">
                <a style="margin-top:10px;" onclick="history.back(-1)"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png"></a>
                <h2 style="color:white; ">Complaints &amp; Suggestions</h2>
               
            </div>
           
        </div>
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
    
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
</script>

            <form method="post" action="<?=BASEURL?>user/query" >
                <?php if($this->session->flashdata('success'))
                {
                ?>
                
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                  
                  <div class="toast-body">
                    <h4 style=color:green;><?=$this->session->flashdata('success')?></h4>
                  </div>
                </div>
                
                <?php } ?>
                
                <select class="form-control" class="mb-2" style="margin-bottom:20px;" name="type" required>
                    <option value="">Type of complaints & Suggestion *</option>
                    <option value="Suggestion">Suggestion</option>
                    <option value="Consult">Consult</option>
                    <option value="Recharge Problem">Recharge Problem</option>
                    <option value="Withdraw Problem">Withdraw Problem</option>
                    <option value="Parity Problem">Parity Problem</option>
                    <option value="Gift Receive Problem">Gift Receive Problem</option>
                    <option value="Other">Other</option>
                </select> 
                  
                <input required="" value="" type="text" placeholder="Out ID *" name="out_id">
                <input required="" value="" type="number" placeholder="Whatsapp *" name="whatsapp">
                <textarea required name="message" placeholder="Description *"></textarea>
                <p class="text-center" style="margin-top:20px; margin-bottom:20px;">Service: 10:00~17:00, Mon~Fri about 1~5 business days</p>
                <button type="submit" class="l-btn w-100 rounded-0">Submit</button>
            </form>
            
        </div>

    </div>
</section>
</div>


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