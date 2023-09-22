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
        <div class="col-xs-12">
            <a onclick="history.back(-1)"><img src="https://www.mmaxmall.live/mall/img/back-arrow.png"></a>
            <h2>Transaction</h2>

        </div>
    </div>
</section>
<div class="page-inner">
    <section>
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="card" style="box-shadow: unset;">
                    <?php 
                    $balance=$this->db->select('sum(credit)-sum(debit) as balance')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->balance+0;
                    ?>
                    <h3 style="text-align: center;">Balance: ₹<?=number_format($balance,2)?></h3>
                </div>
            </div>
            <div class="col-md-12 p-0 record-sucess-tb">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="record-sucess">
                            <p>No Record Found</p>
                        </div>
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