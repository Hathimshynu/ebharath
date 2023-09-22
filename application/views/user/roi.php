<?php include('header.php');?>

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
        svg:not(:root){
            width: 20px;
            position: absolute;
            color: #8e8e8e;
            bottom: -32px;
        }
        .topbar a {
            position: absolute;
            top: 10px;
        }
        .tran
        {
            display: flex;
            flex-wrap: wrap;
          
        }
        .tran .right
        {
           padding-left:320px;
        }
        .tran .right1
        {
           padding-left:320px;
        }
        @media (max-width: 800px) {
          .tran{
            flex-direction: row;
            flex: 100%;
             display: flex;
            flex-wrap: wrap;
          
          }
          .tran .right
            {
               padding-left:207px;
            }
        }
         @media (max-width: 700px) {
          .tran{
            flex-direction: row;
            flex: 100%;
             display: flex;
            flex-wrap: wrap;
          
          }
          .tran .right
                {
                   padding-left:196px;
                }
           .tran .right1
           {
               padding-left:196px;
           }
        }
         @media (max-width: 600px) {
          .tran{
            flex-direction: row;
            flex: 100%;
          }
          .tran .right
            {
               padding-left:178px;
            }
          .tran .right1
           {
               padding-left:142px;
           }
        }
        .notifi-icon
        {
            margin-right:20px;
            
        }
        .notifi-icon img {
                border-radius: 50px;
                height:30px;
                width:30px;
                max-width: 35px;
            }
        .modal
        {
            margin-top:200px;
        }
    </style>
</head>

<body>
<!--   <div class="loader">
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
<section>
    <div class="row topbar">
        <div class="col-xs-9">
            <a onclick="history.back(-1)"><img src="https://www.mmaxmall.live/mall/img/back-arrow.png"></a>
            <h2 style="color:white;">Interest</h2>

        </div>
         <div class="col-xs-3">
            <div class="text-right notifi-icon">
                <a data-toggle="modal" data-target="#noteModalCenter"><img  src="<?=BASE_URL();?>assets/user/img/quo.png"></a>
            </div>
         </div>
    </div>
    <div class="modal fade" id="noteModalCenter" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%; max-width: 80%; margin: auto;">
    <div class="modal-content" style="width:100%;">

      <div class="modal-body">
         <h3>Explain</h3>
         <p>Interest rule:1 The account balance is great than 500 to generate interest 2.
         Settlement time is 12:00 everyday, and the profit amount enters <br> the balance 3. Interest amount 1000*0.008=8</p>
      </div>
      <div class="modal-footer" style="border:0;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: unset; font-size: 18px; color: #0081FF;">Close</button>
      <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>  
    
</section>
<div class="page-inner">
    <section>
        <div class="row">
            
            <div class="col-md-12 p-0 record-sucess-tb">
                <div class="row">
                    <div class="col-xs-12">
                        
                        <?php 
                        $all_transactions = $this->db->where('remark','Interest')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->result_array();
                        
                        foreach($all_transactions as $key => $tt)
                        {
                           
                        $get_val = $this->db->select('sum(credit)-sum(debit) as credit')->where('remark','Interest')->where('id <',$tt['id'])->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                       //$deb = $this->db->select_sum('debit')->where('id <',$tt['id'])->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->debit+0;
                         
                        $get_amt = $this->db->select('sum(credit)-sum(debit) as credit')->where('remark','Interest')->where('id <=',$tt['id'])->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                      
                      
                      
                        
                        
                        ?>
                        <?php if($tt['credit'] > 0){ ?>
                            <div class="row">
                                <div class="tran">
                                <div class="col-xs-6 text-success"><strong>₹<?=$tt['credit']; ?></strong></div>
                                <div class="col-xs-6 text-right" style="margin-top:10px;">₹<?= $get_val ?></div>
                                <div class="col-xs-6"><p>₹<?=$get_amt?></p></div>
                                <div class="col-xs-6 text-right"></div>
                                <div class="col-xs-6"><p><?= date("d-m-Y h:i", strtotime($tt['entry_date']));?></p></div>
                                </div>
                            </div>
                        <?php } ?>
                        <hr>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
                    </div>
    </section>
</div>

<?php include('footer.php');?>

<script src="<?=BASE_URL();?>assets/user/js/popper.min.js"></script>

<script>
    function opentab(evt, Name) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(Name).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
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




































