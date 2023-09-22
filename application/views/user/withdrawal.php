<?php include('header.php');?>

    <style type="text/css">

        .re-amount input{
            width: 100%;
            border: none;
            padding: 10px 10px 10px 45px;
            border-radius: 8px;
        }
        .re-amount input:focus{
            outline: none;
        }
        .re-amount{
            border-bottom: 1px solid #d7d7d7;

        }
        svg:not(:root){
            width: 21px;
            position: absolute;
            color: #fff;
            bottom: 12px;
            background: #8e8e8e;
            padding: 3px 6px;
            border-radius: 10px;

        }
        .alert-success{color: #3c763d;
            background-color: #f5f5f5;
            border-color: #f5f5f5;
            position: absolute;
            top: 50px;
            right: 0;
            left: 0;
        }
        .topbar a {
            position: absolute;
            top: 10px;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Merriweather Sans';
            font-style: italic;
            font-weight: 800;
            src: local('Merriweather Sans ExtraBold Italic'), local('MerriweatherSans-ExtraBldItalic'), url(http://fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVfrUSW10CwTuVx9PepRx9ls.woff2) format('woff2'), url(http://fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVW2xy75WLVt7UI7Cycabsy8.woff) format('woff');
        }
        @font-face {
            font-family: "open";
            font-style: normal;
            font-weight: 300;
            src: local( "Open Sans Light" ), local( "OpenSans-Light" ),
            url( https://themes.googleusercontent.com/static/fonts/opensans/v6/DXI1ORHCpsQm3Vp6mXoaTZ1r3JsPcQLi8jytr04NNhU.woff ) format( 'woff' );
        }
        *, *:before, *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        .my-parity-list {
            width: 100%;
            margin: 1px auto;
            /* box-shadow: 0 1px 2px rgba( 0, 0, 0, .2 );*/
            overflow: hidden;
            -webkit-transition: .35s;
            transition: .0s;
            height: 50px;
            border-bottom: 1px solid #ebebeb;

        }
        .title {
            background: #fff;
            color: #000;
            cursor: pointer;
            width: 100%;
            position: relative;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            z-index: 10;
            padding: 15px 0;
        }

        .title:before, .title:after {
            content: "";
            display: block;
            position: absolute;
            right: 20px;
            top: 6px;
            font-style: normal;
            height: 21px;
            line-height: 1;
            overflow: hidden;
            font-family: FontAwesome;
            font-size: 20px;
            background: #fff;
            -webkit-transition: .35s;
            transition: .35s;
        }

        .title:before {
            z-index: 2;
        }
        .title:after {
            top: 12px;
            -webkit-transform: rotate( 180deg );
            -ms-transform: rotate( 180deg );
            -moz-transform: rotate( 180deg );
            transform: rotate( 180deg );
        }

        .open .title:before {
            height: 0;
        }

        .my-parity-list-inner {
            font: 16px open, sans-serif;
            background: #fff;
            color: #777;
            -moz-transform: translateY( -100% );
            -ms-transform: translateY( -100% );
            -webkit-transform: translateY( -100% );
            transform: translateY( -100% );
            overflow: hidden;
            -webkit-transition: .35s;
            transition: .35s;
        }
        .my-parity-list-inner h2 {
            color: #08326f;
            font-size: 15px;
            margin-bottom: 10px;
            font-weight: 600;
            margin-top: 0;
        }
        .my-parity-list-inner h2:before {
            padding-right: 7px;
            color: #00C37E;
        }
        .my-parity-list-inner a {
            color: #00C37E;
            line-height: 2.5;
        }
        .my-parity-list-inner span {
            font-size: 12px;
        }

        .my-parity-list.open {
            height: auto;
        }
        .open .my-parity-list-inner {
            -webkit-transform: none;
            -ms-transform: none;
            -moz-transform: none;
            transform: none;

        }
        .rec-icon{
            position: absolute;
            right: 6px;
            top: 84px;
            padding: 3px 6px;
        }
        .pl-60{
            padding-left: 10vw !important;
        }
        .mb-0{
            margin-bottom: 0 !important;
        }
        #mp-list a {
            color: #4e4e4e;
            font-size: 14px;
        }
        .pl-5{
            padding-left: 30px;
        }
        .payout-bank{
            padding:30px 0;
        }
        .payout-bank img{
            margin-right: 55px;
        }
        .payout-bank a{
            font-size: 14px;
        }
        @media(min-width: 575px){
            .payout-bank{
                padding-left: 4vw;
            }
        }
        #mp-list img {
            max-width: 20px;
            margin-right: 55px;
        }
        .card{
            box-shadow: none;
            border-radius: 8px;
        }
        .border-0{
            border: 0 !important;
        }
    </style>


    <style type="text/css">
        .bank-icon{
            position: absolute;
            top: 2px;
        }
        .tt-select {
            position: relative;
            height: auto;
            padding: 0px;
            text-align: left;
        }
        .tt-select select {
            display: none;
        }
        .select-selected {
            background-color: #fff;
            color: rgba(0, 0, 0, 0.8) !important;
        }
        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
        }
        .select-selected:before {
            position: absolute;
            content: "";
            top: 18px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: transparent transparent #000000 transparent;
            transform: rotate(180deg);
        }
        .select-selected.select-arrow-active:before {
            border: none;
        }
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #000000 transparent;
            top: 10px;
        }
        .select-items div,.select-selected {
            color: #000000;
            padding:8px 16px 8px 50px;
            /*border-bottom: 1px solid #d4d4d4;*/
            cursor: pointer;
            background-color: #fff;
        }
        .select-items div{
            border: 0 !important;
        }
        .select-items {
            position: relative;
            background-color: #313131;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }
        .select-hide {
            display: none;
        }
        .select-items div:hover, .same-as-selected {
            background-color: #f5f5f5;
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
  </div>
-->
<section>
    <div class="row topbar">
        <div class="col-xs-12">
            <a onclick="history.back(-1)"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png"></a>
            <h2 style="color:white;">Withdrawal</h2>
            <a href="<?=BASEURL?>user/withdrawal_history" style="right:15px; top:10px;"><i class="fa fa-align-right" aria-hidden="true" style="color:#fff;  font-size: 20px;"></i></a>
        </div>
    </div>
</section>
<!--  <section class=" topbar">
        <div class="row">
            <div class="col-lg-12">
                <a onclick="history.back(-1)"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                <span style="">Withdrawal</span>

				<a href="https://www.mmaxmall.live/withdrawal-history"><i class="fa fa-history" aria-hidden="true" style="position: absolute;right: 15px;font-size: 20px;margin: 6px;"></i></a>

            </div>
        </div>
    </section> -->
<div class="page-inner" style="box-shadow: 0px 2px 2px #0000004d; padding: 0 25px;">
    <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
    <form action="<?=BASE_URL?>user/withdrawal" method="post">
        <input type="hidden" name="_token" value="9zRg9XYUkbvR1PO8nPA0ZRUt9ESp8unqZs3JUOzr">        
        <section class="p-0">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="card" style="box-shadow: unset;">
                        <?php
                        $balance=$this->db->select('sum(credit)-sum(debit) as balance')->where('user_id',$this->session->userdata('bhpusername'))->get('wallet')->row()->balance+0;
                        ?>
                        <h3 style="text-align: center;">Balance: ₹<?=number_format($balance,2)?></h3>
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <div class="card re-amount-card" style="margin:0 40px;">
                        <div class="re-amount border-0">
                            <img src="<?=BASE_URL();?>assets/welcome/img/card-icon.png" width="22px" style="position:absolute; left: 50px;top: 14px;">
                            <input id="mainAMount" value="" type="number" min="230" max="50000" step="5" name="amount" required="" placeholder="Enter withdrawal amount *" style="height: 50px;">
                        </div>
                    </div>
                    
                    <p style="padding: 10px 0px; color: #242424; margin: 0;">Fee: <span id="percentageChange">0</span>, to account <span id="amountChange">0</span></p>
                </div>

            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="payout-bank">
                        <p style="color: #979797">Pay Out</p>
                        <a href="javascript:void(0);"><img src="<?=BASE_URL();?>assets/welcome/img/check.svg" width="15px">
                            Bank Card</a>
                    </div>

                <!-- <a class="b-card" href="https://www.mmaxmall.live/edit_profile" target="_blank">Bank Details</a>
                        <div class="card">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <select required name="bank" style="border: 0;">
                                <option value="Bank">Money Will Transfer To Your Bank</option>
                            </select>
                        </div> -->
                </div>
                <div class="col-md-12 p-0 payout">
                    <div class="card">
                        <div class="re-amount">
                            <div class="tt-select">
                                <div class="bank-icon"><img src="<?=BASE_URL();?>assets/welcome/img/nav6.svg" width="30"></div>
                                <select>
                                    <option value="0">Select Bank Card</option>
                                    <?php $bank = $this->db->where('user_id',$this->session->userdata('bhpusername'))->get('bank')->result_array();
                                    foreach($bank as $key => $bk)
                                    {
                                    ?>
                                    <option value="<?=$bk['bank_id'] ?>">Bank: <?=$bk['bank_name'] ?> , Name: <?=$bk['acc_name'] ?> , Account: <?=$bk['acc_no'] ?> , IFSC: <?=$bk['bank_name'] ?> , Phone: <?=$bk['acc_phone'] ?>  </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <!--<div class="select-selected">Select Bank Card</div>-->
                                <!--<div class="select-items select-hide">-->
                                <!--    <div>Select Bank Card</div>-->
                                <!--    <div>Bank: , Name: , Account: , IFSC: , Phone: </div>-->
                                <!--</div>-->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 p-0 payout">

                    <div class="re-amount">
                        <img src="<?=BASE_URL();?>assets/welcome/img/pass-icon.png" width="25px" style="position: absolute; margin-top: 18px; left: 0;">
                        <input placeholder="Password" id="password" type="password" class="text-field pl-60 mb-0" name="password" required="">
                    </div>

                </div>
            </div>
        </section>
    <!--  <p class="pt-3 text-center" style="color: #8e8e8e;">Withdraw Mode: BANK <br>
                Note: Please bind the correct bank account information for withdrawal. Incorrect binding will cause withdrawal failure. If there is any problem, please email <span style="color:#00b8ff;">info@mmaxmall.com</span> to help you deal with it.</p> -->
        <div class="recharge payout">
            <button type="submit" class="w-100 rounded-0">Withdrawal</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>


<script src="<?=BASE_URL();?>assets/user/mall/js/popper.min.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    $('#mainAMount').on('change keyup keypress click', function () {
        var val = $(this).val();
        var percentage = '5.00';

        var ttt = parseFloat((val*percentage)/100);

        var amnt = val - ttt;

        $('#percentageChange').text(ttt);
        $('#amountChange').text(amnt);
    });
</script>

<script type="text/javascript">
    $('#confirmModal').modal('show');
</script>
<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>
<script type="text/javascript">
    ;!( function( w, d ) {

        'use strict';

        var titles = d.querySelectorAll( '.title' ),

            i = 0,
            len = titles.length;

        for ( ; i < len; i++ )
            titles[ i ].onclick = function( e ) {

                for ( var j = 0; j < len; j++ )
                    if ( this != titles[ j ] )
                        titles[ j ].parentNode.className = titles[ j ].parentNode.className.replace( / open/i, '' );

                var cn = this.parentNode.className;

                this.parentNode.className = ~cn.search( /open/i ) ? cn.replace( / open/i, '' ) : cn + ' open';

            };

    })( this, document );
</script>
<script type="text/javascript">
    var x, i, j, selElmnt, a, b, c;
    x = document.getElementsByClassName("tt-select");

    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    document.addEventListener("click", closeAllSelect);
</script>


</body></html>