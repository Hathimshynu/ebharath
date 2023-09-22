<?php include('header.php'); ?>



    <style type="text/css">
        .sec-title h6{
            font-size: 15px;
            margin-bottom:20px;
            color: #9b9b9b;
        }
        .close{
            position: absolute;
            top: 0;
            right: 5px;
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

        .re-amount input{
            width: 100%;
            border: none;
            padding: 10px 10px 10px 40px;
            border-radius: 5px;
            box-shadow: 0px 3px 3px #00000026;
        }
        .re-amount input:focus{
            outline: none;
        }
        /*.re-amount{
            border-bottom: 1px solid #d7d7d7;

        }*/
        svg:not(:root){
            width: 20px;
            position: absolute;
            color: #8e8e8e;
            bottom: 12px;
            margin-left: 10px;
        }
        .price{
            background: whitesmoke;
            padding: 8px 0;
            margin: 7px;
            border: 0;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            box-shadow: 0px 2px 2px #0000004d;
            cursor: pointer;
        }
        .price:hover{
            background: #2196F3;
            color: #fff;
                border-radius: 5px;
        }
        .active{
            background-color:#219986;
            color: white;
        }
        @media  only screen and (max-width: 768px){
            .price{
                position: relative;
                left: 5%;}

            .page-inner{
                padding:0 20px !important;
            }
        }

        @media  only screen and (max-width: 425px){
            .price{
                position: relative;
                left: 0%;}
        }
        .card{
            box-shadow:none;
            background: unset;
        }

    </style>

    <style type="text/css">
        .custom-radios div {
            display: inline-block;
        }
        .custom-radios input[type=radio] {
            display: none;
        }
        .custom-radios input[type=radio] + label {
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .custom-radios input[type=radio] + label span {
            padding: 8px 20px 8px 20px;
        }
        .custom-radios input[type=radio] + label span img {
            opacity: 0;
            transition: all 0.3s ease;
        }
        .custom-radios input[type=radio]:checked + label span img {
            opacity: 1;
        }
        .topbar a {
            position: absolute;
            top: 10px;
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

    <section>
        <div class="row topbar">
            <div class="col-xs-12">
                <a onclick="history.back(-1)"><img src="https://www.mmaxmall.live/mall/img/back-arrow.png"></a>
                <h2 style="color:white;">Recharge</h2>
                <a href="<?=BASEURL?>user/online_recharge_history" style="right:15px; top:10px;"><i class="fa fa-align-right" aria-hidden="true" style="color:#fff;  font-size: 20px;"></i></a>
            </div>
        </div>
    </section>
    <div class="page-inner" style="    box-shadow: 0px 2px 2px #0000004d; padding:0 70px;">
        <form method="post" action="<?=BASEURL?>user/admin_request" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="1XVFLimqkbADSz0KWDYInnkas5F6iYIgoqSI0G1G">            <section>
                <div class="row">
                    <?php 
                    
                    $arr = [];
                    //$upi = $this->db->where('up_id','1')->get('upi')->row_array();
                    for($i=1; $i<=10; $i++)
                    {
                        $val = 'upi_id'.$i;
                        $sel = $this->db->select($val)->where('up_id',1)->get('upi')->row()->$val;
                        $add = array_push($arr,$sel);
                    }
                    $rand = rand(0,9);
                    $selected_value = $arr[$rand];
                    
                    $credit = $this->db->select_sum('credit')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->credit+0;
                    $debit = $this->db->select_sum('debit')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->debit+0;
                    $bal = $credit-$debit;
                    ?>
                    <div class="col-md-12 p-0">
                        <div class="card">
                            <h3 style="text-align: center;">Balance: ₹ <?=number_format($bal,2)?></h3>
                        </div>
                        
                        
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                
                                <div class="text-success taxt-lg text-center">UPI ID:  </div><div class="input-group">
                                    <input type="text" id="upi_idd" value="<?=$selected_value?>" class="form-control" readonly>
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary" onclick="myFunc()" id="cpp" type="button"> Copy</button>
                                    </span>
                                    </div>
                                
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        
                        
                        
                        
                    <div class="col-md-12 p-0">
                        <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
                <span class="text-danger"><?=form_error('amount');?></span>
                <div class="re-amount">
                           <img src="<?=BASE_URL();?>assets/welcome/img/rec-amount-icon.png" width="22px" style="position:absolute; left: 8px;top: 8px;">
                            <input name="amount" step="5" id="amount" type="number" min="100" max="500000" required="" placeholder="Enter or select recharge amount *">
                </div>
                    </div>
                </div>
            </section>



            <section style="padding: 10px 0;">
                <div id="price">
                    <div class="row" style="margin: 0 30px;">
                        <div class="col-xs-4 mb-3 p-0">
                            <div data-value="500" class="price">₹ 500</div>
                        </div>
                        <div class="col-xs-4 mb-3 p-0">
                            <div data-value="1000" class="price">₹ 1000</div>
                        </div>
                        <div class="col-xs-4 mb-3 p-0">
                            <div data-value="2000" class="price">₹ 2000</div>
                        </div>
                        <div class="col-xs-4 mb-3 p-0">
                            <div data-value="5000" class="price">₹ 5000</div>
                        </div>
                        <div class="col-xs-4 mb-3 p-0">
                            <div data-value="10000" class="price">₹ 10000</div>
                        </div>
                        
                        <div class="col-xs-4 mb-3 p-0">
                            <div data-value="50000" class="price">₹ 50000</div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-lg-12">
                               <div class="row">
                                   <div class="col-lg-12">
                                       <div class="text-center"><h4>Click to Upload Receipt</h4></div>
                                       <div><p class="text-center text-danger">File size less than 2MB</p></div>
                                        <span class="text-danger"><?=form_error('idimage');?></span>
                                       <div align="center">
                                     <div id="uploadArea" class="upload-area">
                                        <a id="idclick" href="#">
                                            <img id="idimg" src="<?=RECEIPTURL?>invoice.png" width="200px" accept="image/jpg" class="img-lg mb-3">
                                        </a>
                                        <label><span id="id_status"    style="color:green; font-weight: bold;"></span></label><br>
                                        <input style="display: none;" type="file" class="custom-file-input" name="idfile"   id="idfile" required>
                                        <input value="" type="hidden" class="readonly form-control" autocomplete="off" name="idimage" id="idimage"  required>
                                    </div>
                                </div>
                                   </div>
                               </div>
                           </div>
                        
                        <div class="col-lg-12 mt-3">
                            <span class="text-danger"><?=form_error('utr');?></span>
                            <input type="text" class="form-control" name="utr" id="utr" placeholder="Enter Transaction Hash *" required>
                            
                        </div>
                        
                        
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-xs-12 mt-3">
                            <div class="sec-title">
                                <h6 style="margin-bottom: 0;">Payment Mode</h6> <span class="text-danger"><?=form_error('pay_mode');?></span>
                            </div>
                            &nbsp; 
                            <!-- <input type="radio" id="html" name="fav_language" value="ekpay">
                            &nbsp; <label for="html">EkPay</label><br>
                            &nbsp; <input type="radio" id="css" name="fav_language" value="scanpay">
                            &nbsp; <label for="css">Scan Pay</label>   -->
                            <div class="custom-radios">
                                    <div>
                                        <input checked="" required="" type="radio" id="manual" name="p_type" value="manual">
                                        <label for="manual">
                                        <span>
                                            <img src="<?=BASE_URL();?>assets/welcome/img/check-icn.svg">
                                        </span>
                                            <!--<div class="row">-->
                                            <!--    <div class="col-lg-4">-->
                                                    <select class="form-select" aria-label="Default select example" name="pay_mode" required>
                                                      <option value="" selected>Select Payment Mode</option>
                                                      <option value="Gpay">Gpay</option>
                                                      <option value="Phonepay">Phonepay</option>
                                                      <option value="Paytm">Paytm</option>
                                                    </select>
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </label>
                                    </div>
                                    <br>
                                    <br>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="recharge">
                                <button type="submit" aria-hidden="true">Recharge</button>




                            </div>
                           <!--  <p class="pt-3" style="color: #8e8e8e;">Reminder if you will do not receive the account within 30 minutes after payment, please send it by email. Please provide the detailed voucher for recharge and the User ID to contact us Or contact your supervisor.</p> -->
                        </div>
                    </div>
                </div>
            </section>


        </form>
    </div>
   
   
   <?php include('footer.php'); ?>

<script>
function myFunc() {
  // Get the text field
  var copyText = document.getElementById("upi_idd");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  document.getElementById("cpp").innerHTML = "Copied";
  //alert("Copied the text: " + copyText.value);
}
</script>

<script>


$(document).ready(function() {
    // $('#earn').DataTable();
    $("#idclick").click(function() {
        $("#idfile").trigger('click')
    });
    $(document).on('change', '#idfile', function() {
        var name = document.getElementById("idfile").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("idfile").files[0]);
        var f = document.getElementById("idfile").files[0];
        var fsize = f.size || f.fileSize;
        if (fsize > 3000000 || jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Image File Size is very big / Invalid Image File");
        } else {
            form_data.append("update_upload", document.getElementById('idfile').files[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>user/update_upload",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#id_status').html("Image Uploading...");
                },
                success: function(data) {
                    $('#id_status').html("Uploaded");
                    $('#idimage').val(data);
                    $('#idimg').attr('src', '<?=RECEIPTURL?>' + data);
                }
            });
        }
    });

});

</script>



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
    $(document).ready(function () {
        $('#price .price').on('click', function (event) {
            event.preventDefault();
            $('.price').removeClass('active');
            $(this).addClass('active');
            $('#amount').val($(this).data('value'));
        });
    });
</script>
<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>


</body></html>