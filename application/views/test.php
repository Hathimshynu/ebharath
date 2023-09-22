<!DOCTYPE html>
<html lang="en"><head>
    <title>MMax Mall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/bootstrap.min.css">
    <script src="<?=BASE_URL();?>assets/welcome/js/jquery.min.js"></script>
    <script src="<?=BASE_URL();?>assets/welcome/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/style.css">
    <link href="<?=BASE_URL();?>assets/welcome/img/favicon.png" rel="icon">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <style type="text/css">
    
    /*accordion*/
    .panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    background-color: #fff;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}
    
          .color{
              background-color:#009688;
          }
    
        .show-tb-count {
            position: absolute;
            /* left: 0; */
            right: 25%;
            text-align: center;
            margin-top: 23px;
        }
        .row-tab {
            padding: 0;
            margin: 0;
            display: flex;
        }


        @media(max-width: 767px){
            .show-tb-count {
                right: 70%;
            }
        }


        #pagination-container {
            padding-top: 16px;
            background-color: #fff;
            -webkit-box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            padding-bottom: 10px;
        }
    </style>
    <style>
        .my-parity-list-wrapper2 td {
            font-size: 15px;
        }
        .my-parity-list-wrapper3 td {
            font-size: 15px;
        }
        .my-parity-list-wrapper4 td {
            font-size: 15px;
        }
        .yellow-btn{
            background: #efc600;
            font-size: 13px;
            padding: 2px 10px;
            border-radius: 2px;
        }
        .red-btn{
            background: #fc1413;
            font-size: 13px;
            padding: 2px 10px;
            border-radius: 2px;
            color: #fff;
        }
        .green-btn{
            background: #00b90a;
            font-size: 13px;
            padding: 2px 10px;
            border-radius: 2px;
            color: #fff;
        }
        .my-parity-list-wrapper td{
            font-size: 14px;
        }
        .wrapper{
            background-color: #f5f5f5 !important;
        }

        .avl-bl .r-btn:hover{
            color: #fff;
        }
        body {
            font-family: Arial;
        }

        .tab {
            overflow: hidden;
            background-color: #fff;
            color: #000;
            border-radius: 5px 5px 0 0;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 14px;
            width: 33.33%;
            border-bottom: 2px solid #fff;
        }

        .tab button:hover {
            border-bottom: 2px solid #0081FF;
            background-color: #fff;
        }

        .tab button.active {
            width: 100%;
            border-bottom: 2px solid #0081FF;
            background-color: #fff;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
            position: relative;
            width: 100%;
        }

        @font-face {
            font-family: 'Merriweather Sans';
            font-style: italic;
            font-weight: 800;
            src: local('Merriweather Sans ExtraBold Italic'), local('MerriweatherSans-ExtraBldItalic'), url(https://fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVfrUSW10CwTuVx9PepRx9ls.woff2) format('woff2'), url(https://fonts.gstatic.com/s/merriweathersans/v5/nAqt4hiqwq3tzCecpgPmVW2xy75WLVt7UI7Cycabsy8.woff) format('woff');
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
            margin: 7px auto;
            box-shadow: 0 1px 2px rgba( 0, 0, 0, .2 );
            overflow: hidden;
            -webkit-transition: .35s;
            transition: .35s;
            height: 35px;
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
            padding: 10px 0;
        }

        .title:before, .title:after {
            content: "\f107";
            display: block;
            position: absolute;
            right: 20px;
            top: 12px;
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
            top: 6px;
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
            padding: 0 15px;
        }

        .my-parity-list-inner h2 {
            color: #312483;
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

        .list-wrapper {
            overflow: hidden;
        }

        .list-wrapper2 {
            overflow: hidden;
        }

        .list-wrapper3 {
            overflow: hidden;
        }

        .list-wrapper4 {
            overflow: hidden;
        }

        .list-item {
            border: 1px solid #EEE;
            background: #FFF;
            margin-bottom: 10px;
            padding: 10px;
            /*box-shadow: 0px 0px 10px 0px #EEE;*/
        }

        .list-item h4 {
            color: #FF7182;
            font-size: 18px;
            margin: 0 0 5px;
        }

        .list-item p {
            margin: 0;
        }

        .simple-pagination ul {
            padding: 0;
            list-style: none;
            text-align: right;
            margin-right: 7px;
        }

        .simple-pagination li {
            display: inline-block;
            margin-right: 5px;
            padding-left: 100px;
        }
        .simple-pagination li a,
        .simple-pagination li span {
            color: #666;
            padding: 5px 10px;
            text-decoration: none;
        }

        .simple-pagination .current {
            color: #FFF;
        }

        .simple-pagination .prev.current,
        .simple-pagination .next.current {
            color: #000;

        }

        .simple-pagination li a, .simple-pagination li span{
            color: #000;
            border: none;
            padding: 0 9px;
            font-size: 22px;

        }

        #pagination-container{
            padding-top: 16px;
            background-color: #fff;
            -webkit-box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            padding-bottom: 10px;

        }
        #pagination-container a span{
            background: #000;
        }
        #pagination-container2{
            padding-top: 16px;
            background-color: #fff;
            -webkit-box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            padding-bottom: 10px;

        }
        #pagination-container2 a span{
            background: #000;
        }
        #pagination-container3{
            padding-top: 16px;
            background-color: #fff;
            -webkit-box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            padding-bottom: 10px;

        }
        #pagination-container3 a span{
            background: #000;
        }
        #pagination-container4{
            padding-top: 16px;
            background-color: #fff;
            -webkit-box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
            padding-bottom: 10px;

        }
        #pagination-container4 a span{
            background: #000;
        }

        .my-parity{
            padding: 0px 0 35px 0 !important;
        }
    </style>

</head>

<body style="padding:0; ">

  <section class="p-0 ">
        <div class="row ">
            <div class="col-md-12 avl-bl">
                <div class="row color">
                    <div class="col-xs-10" style="padding: 0;">
                        <h3><a style="color: #fff; font-size: 20px; margin-left:5px; margin-top:5px;" href="#" target="_blank">Available balance: ₹<span>0.00</span></a> </h3>
                                                <button type="button" onclick="window.location.href='online_recharge';" class="l-btn" style="margin-left:5px;">Recharge</button>
                        <button class="r-btn" data-toggle="modal" data-target="#ruleModal">Read Rule</button>
                    </div>
                    <div class="col-xs-2 text-right">
                        <a href="?type=Parity" id="refreshButton" style="color: #000; font-size: 28px; position: absolute; padding-top: 40px; right: 10px;"><i style="font-size: 20px; color: #9b9b9b;" class="fa fa-refresh" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="page-inner ">
    <?php echo date('Y-m-d-h-i-s') ?>

    <section>
        <div class="tab">
            <div class="row-tab">
            <button class="tablinks active" data-value="1" onclick="opentab(event, 'Parity')" id="defaultOpen">Parity</button>
            
            <button class="tablinks" data-value="2" onclick="opentab(event, 'Bcone')">Sapre</button>
            </div>
            <!--<button class="tablinks" data-value="4" onclick="opentab(event, 'Emerd')"   >Emerd</button>-->
        </div>
                         <!--parity-->
                    <div id="Parity" class="tabcontent" style="display: block;">
                <div class="card" style="box-shadow:unset;">
                    <div class="row period-Parity no-gutters">
                        <div class="col-md-6 col-xs-6">
                            <h4><i class="fa fa-trophy" aria-hidden="true"></i>Period</h4>
                            <h6>20220918421</h6>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right">
                            <h4>Count Down</h4>
                            <h6 id="countdown">01:08</h6>
                        </div>
                    </div>
                </div>

                <div id="gameDiv">
                    <div class="row">
                        <div data-toggle="modal" data-value="Green" data-target=".myModal" data-gameid="20220918421" class="game-val col-md-4 col-xs-4 btn-green"><button>Join Green</button></div>
                        <div data-toggle="modal" data-value="Violet" data-target=".myModal" data-gameid="20220918421" class="game-val col-md-4 col-xs-4 btn-violet"><button>Join Violet</button></div>
                        <div data-toggle="modal" data-value="Red" data-target=".myModal" data-gameid="20220918421" class="game-val col-md-4 col-xs-4 btn-red"><button>Join Red</button></div>
                    </div>
                    <div class="row">
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val0" data-value="0" data-target=".myModal" aria-hidden="true">0</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="1" data-target=".myModal" aria-hidden="true">1</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="2" data-target=".myModal" aria-hidden="true">2</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="3" data-target=".myModal" aria-hidden="true">3</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="4" data-target=".myModal" aria-hidden="true">4</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val5" data-value="5" data-target=".myModal" aria-hidden="true">5</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="6" data-target=".myModal" aria-hidden="true">6</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="7" data-target=".myModal" aria-hidden="true">7</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="8" data-target=".myModal" aria-hidden="true">8</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="9" data-target=".myModal" aria-hidden="true">9</button></div>
                    </div>
                </div>


                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i>Parity Records</h6></a>
                <table class="list-wrapper">
                    <tbody><tr class="parity-heading" style="font-weight: 600;">
                        <td>Period</td>
                        <td>Price</td>
                        <td>Number</td>
                        <td>Color</td>
                    </tr>
                             <tr class="list-item">
                            <td>20220918420</td>
                            <td>79983</td>
                            <td>3</td>
                             <td class="green">
                             <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                               </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918419</td>
                            <td>24857</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918418</td>
                            <td>55647</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918417</td>
                            <td>51657</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918416</td>
                            <td>55408</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918415</td>
                            <td>25847</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918414</td>
                            <td>77168</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918413</td>
                            <td>81326</td>
                            <td>6</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918412</td>
                            <td>99367</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item">
                            <td>20220918411</td>
                            <td>20091</td>
                            <td>1</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918410</td>
                            <td>34069</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918409</td>
                            <td>88820</td>
                            <td>0</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                     <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                               </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918408</td>
                            <td>80443</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918407</td>
                            <td>37513</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918406</td>
                            <td>47608</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918405</td>
                            <td>50519</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918404</td>
                            <td>21263</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918403</td>
                            <td>67781</td>
                            <td>1</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918402</td>
                            <td>82622</td>
                            <td>2</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918401</td>
                            <td>34495</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918400</td>
                            <td>89575</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918399</td>
                            <td>85130</td>
                            <td>0</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918398</td>
                            <td>36487</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918397</td>
                            <td>39222</td>
                            <td>2</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918396</td>
                            <td>27615</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918395</td>
                            <td>72659</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918394</td>
                            <td>83652</td>
                            <td>2</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918393</td>
                            <td>97455</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918392</td>
                            <td>45398</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918391</td>
                            <td>43008</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918390</td>
                            <td>66629</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918389</td>
                            <td>32134</td>
                            <td>4</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918388</td>
                            <td>48149</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918387</td>
                            <td>67875</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918386</td>
                            <td>41074</td>
                            <td>4</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918385</td>
                            <td>53826</td>
                            <td>6</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918384</td>
                            <td>28386</td>
                            <td>6</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918383</td>
                            <td>67989</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918382</td>
                            <td>96317</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="list-item" style="display: none;">
                            <td>20220918381</td>
                            <td>47688</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                                    
                                    </tbody></table>
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">
                </span>
                </li>
                <li>
                    <a href="#" class="page-link next">›</a></li></ul></div>
                    
                    <!--Parity History-->
                    
                     <div id="" class="" style="display: block;">
               



                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i>My Records</h6></a>
                
  <!--accordion-->
                
   <div class = "container-fluid">

  
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
     <div class="record" style="display:flex; justify-content:space-between;">
             <div class="col">20220919239</div>
              <div class="col" style="color:red;">Fail</div>
               <div class="col"style="color:red;" >-9.50</div>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
          </div>
    </div>
    <div id="collapseOne" class="panel-collapse collapse ">
      <div class="panel-body">
          
        <form>
        <div class="row">
        
            
      <div class="col-lg-6 col-sm-6 mb-2"><label for="exampleInputEmail1">Period</label></div>
    <div class="col-lg-6 col-sm-6"><p>20220919239</p></div>
    
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Money</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>10</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Count</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>1</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Delivery</label></div>
    
    <div class="col-lg-6 col-sm-6"><p style="color:#EADDCA;">9.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Fee</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>0.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Open Price</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>30015</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Result</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>5 green,voilet</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Select</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>red</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Status</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>fail</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Amount</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>-1.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Create Time</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>2022-09-19 11:54</p></div>
    </div>
    
  </div>
  
  <div class="form-group" >
  <button type="submit" class="btn btn-primary text-end">Pre Pay</button>
  </div>
  
</form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
     <div class="record" style="display:flex; justify-content:space-between;">
             <div class="col">20220918239</div>
              <div class="col" style="color:green;">Success</div>
               <div class="col"style="color:green;" >+5700</div>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"></a>
          </div>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        
          <form>
        <div class="row">
        
            
      <div class="col-lg-6 col-sm-6 mb-2"><label for="exampleInputEmail1">Period</label></div>
    <div class="col-lg-6 col-sm-6"><p>20220919239</p></div>
    
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Money</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>10</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Count</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>1</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Delivery</label></div>
    
    <div class="col-lg-6 col-sm-6"><p style="color:#EADDCA;">9.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Fee</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>0.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Open Price</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>30015</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Result</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>5 green,voilet</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Select</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>red</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Status</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>fail</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Amount</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>-1.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Create Time</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>2022-09-19 11:54</p></div>
    </div>
    
  </div>
  
  <div class="form-group" >
  <button type="submit" class="btn btn-primary text-end">Pre Pay</button>
  </div>
  
</form>
        
      </div>
    </div>
  </div>
 
</div>
  
  
</div> <!-- end container -->
                
                
                
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">‹</span></li><li><a href="#" class="page-link next">›</a></li></ul></div>

                            </div>
                    
                    
                     </div>
                            
                            
                            <!--sapre-->
                            
                            <div id="Bcone" class="tabcontent" style="display: block;">
                <div class="card" style="box-shadow:unset;">
                    <div class="row period-Bcone no-gutters">
                        <div class="col-md-6 col-xs-6">
                            <h4><i class="fa fa-trophy" aria-hidden="true"></i>P</h4>
                            <h6>20220918421</h6>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right">
                            <h4>Count Down</h4>
                            <h6 id="countdown">01:08</h6>
                        </div>
                    </div>
                </div>

                <div id="gameDiv">
                    <div class="row">
                        <div data-toggle="modal" data-value="Green" data-target=".myModal" data-gameid="20220918421" class="game-val col-md-4 col-xs-4 btn-green"><button>Join Green</button></div>
                        <div data-toggle="modal" data-value="Violet" data-target=".myModal" data-gameid="20220918421" class="game-val col-md-4 col-xs-4 btn-violet"><button>Join Violet</button></div>
                        <div data-toggle="modal" data-value="Red" data-target=".myModal" data-gameid="20220918421" class="game-val col-md-4 col-xs-4 btn-red"><button>Join Red</button></div>
                    </div>
                    <div class="row">
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val0" data-value="0" data-target=".myModal" aria-hidden="true">0</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="1" data-target=".myModal" aria-hidden="true">1</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="2" data-target=".myModal" aria-hidden="true">2</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="3" data-target=".myModal" aria-hidden="true">3</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="4" data-target=".myModal" aria-hidden="true">4</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val5" data-value="5" data-target=".myModal" aria-hidden="true">5</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="6" data-target=".myModal" aria-hidden="true">6</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="7" data-target=".myModal" aria-hidden="true">7</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val6" data-value="8" data-target=".myModal" aria-hidden="true">8</button></div>
                        <div class="col btn-num"><button data-toggle="modal" data-gameid="20220918421" class="game-val game-val1" data-value="9" data-target=".myModal" aria-hidden="true">9</button></div>
                    </div>
                </div>


                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i>Sapre Records</h6></a>
                <table class="list-wrapper">
                    <tbody><tr class="Bcone-heading" style="font-weight: 600;">
                        <td>Period</td>
                        <td>Price</td>
                        <td>Number</td>
                        <td>Color</td>
                    </tr>
                                            <tr class="">
                            <td>20220918420</td>
                            <td>79983</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918419</td>
                            <td>24857</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918418</td>
                            <td>55647</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918417</td>
                            <td>51657</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918416</td>
                            <td>55408</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918415</td>
                            <td>25847</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918414</td>
                            <td>77168</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918413</td>
                            <td>81326</td>
                            <td>6</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918412</td>
                            <td>99367</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="">
                            <td>20220918411</td>
                            <td>20091</td>
                            <td>1</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918410</td>
                            <td>34069</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918409</td>
                            <td>88820</td>
                            <td>0</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918408</td>
                            <td>80443</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918407</td>
                            <td>37513</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918406</td>
                            <td>47608</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918405</td>
                            <td>50519</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918404</td>
                            <td>21263</td>
                            <td>3</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918403</td>
                            <td>67781</td>
                            <td>1</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918402</td>
                            <td>82622</td>
                            <td>2</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918401</td>
                            <td>34495</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918400</td>
                            <td>89575</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918399</td>
                            <td>85130</td>
                            <td>0</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918398</td>
                            <td>36487</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918397</td>
                            <td>39222</td>
                            <td>2</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918396</td>
                            <td>27615</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918395</td>
                            <td>72659</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918394</td>
                            <td>83652</td>
                            <td>2</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918393</td>
                            <td>97455</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918392</td>
                            <td>45398</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918391</td>
                            <td>43008</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918390</td>
                            <td>66629</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918389</td>
                            <td>32134</td>
                            <td>4</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918388</td>
                            <td>48149</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918387</td>
                            <td>67875</td>
                            <td>5</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                            <img src="<?=BASE_URL();?>assets/welcome/img/voilet.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918386</td>
                            <td>41074</td>
                            <td>4</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918385</td>
                            <td>53826</td>
                            <td>6</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918384</td>
                            <td>28386</td>
                            <td>6</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918383</td>
                            <td>67989</td>
                            <td>9</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918382</td>
                            <td>96317</td>
                            <td>7</td>
                                                            <td class="green">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/green.png">
                                                                    </td>
                                                    </tr>
                                            <tr class="" style="display: none;">
                            <td>20220918381</td>
                            <td>47688</td>
                            <td>8</td>
                                                            <td class="red">
                                    <img src="<?=BASE_URL();?>assets/welcome/img/red.png">
                                                                    </td>
                                                    </tr>
                                    </tbody></table>
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">‹</span></li><li><a href="#" class="page-link next">›</a></li></ul></div>


              <div id="" class="" style="display: block;">
               



                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i>My Records</h6></a>
                
  <!--accordion-->
                
   <div class = "container-fluid">

  
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
     <div class="record" style="display:flex; justify-content:space-between;">
             <div class="col">20220919239</div>
              <div class="col" style="color:red;">Fail</div>
               <div class="col"style="color:red;" >-9.50</div>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSapre1"></a>
          </div>
    </div>
    <div id="collapseSapre1" class="panel-collapse collapse ">
      <div class="panel-body">
          
        <form>
        <div class="row">
        
            
      <div class="col-lg-6 col-sm-6 mb-2"><label for="exampleInputEmail1">Period</label></div>
    <div class="col-lg-6 col-sm-6"><p>20220919239</p></div>
    
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Money</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>10</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Count</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>1</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Delivery</label></div>
    
    <div class="col-lg-6 col-sm-6"><p style="color:#EADDCA;">9.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Fee</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>0.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Open Price</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>30015</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Result</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>5 green,voilet</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Select</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>red</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Status</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>fail</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Amount</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>-1.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Create Time</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>2022-09-19 11:54</p></div>
    </div>
    
  </div>
  
  <div class="form-group" >
  <button type="submit" class="btn btn-primary text-end">Pre Pay</button>
  </div>
  
</form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
     <div class="record" style="display:flex; justify-content:space-between;">
             <div class="col">20220918239</div>
              <div class="col" style="color:green;">Success</div>
               <div class="col"style="color:green;" >+5700</div>
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSapre2"></a>
          </div>
    </div>
    <div id="collapseSapre2" class="panel-collapse collapse">
      <div class="panel-body">
        
          <form>
        <div class="row">
        
            
      <div class="col-lg-6 col-sm-6 mb-2"><label for="exampleInputEmail1">Period</label></div>
    <div class="col-lg-6 col-sm-6"><p>20220919239</p></div>
    
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Money</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>10</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Contract Count</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>1</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Delivery</label></div>
    
    <div class="col-lg-6 col-sm-6"><p style="color:#EADDCA;">9.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Fee</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>0.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Open Price</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>30015</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Result</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>5 green,voilet</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Select</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>red</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Status</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>fail</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Amount</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>-1.50</p></div>
    </div>
    
    <div class="form-group" >
      <div class="col-lg-6 col-sm-6"><label for="exampleInputEmail1">Create Time</label></div>
    
    <div class="col-lg-6 col-sm-6"><p>2022-09-19 11:54</p></div>
    </div>
    
  </div>
  
  <div class="form-group" >
  <button type="submit" class="btn btn-primary text-end">Pre Pay</button>
  </div>
  
</form>
        
      </div>
    </div>
  </div>
 
</div>
  
  
</div> <!-- end container -->
                
                
                
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">‹</span></li><li><a href="#" class="page-link next">›</a></li></ul></div>

                            </div>


                 </div>
                            
                            
                            <!--history-->
                            
                            
                            
                            
            </section>
</div>
<input type="hidden" value="10" id="kalaNumber"><br>
<footer>
    <div class="row footer-inner ">
        <div class="col-md-3 col-sm-3 col-xs-3 home">
            <a href="<?=BASE_URL();?>">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/home.png">
                <p>Home</p></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 search">
            <a href="<?=BASE_URL();?>">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/search.png">
                <p>Search</p></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 win">
            <a href="<?=BASE_URL();?>welcome/win" class="active3">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/win.png">
                <p>Win</p></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 my">
            <a href="<?=BASE_URL();?>user/login">
                <img src="<?=BASE_URL();?>assets/welcome/img/nav/my.png">
                <p>My</p></a>
        </div>
    </div>
</footer>


<style type="text/css">
    @media (min-width: 576px){
        .modal-dialog-center{
            min-height: calc(100% - (1.75rem * 2));
        }
    }
    .modal-dialog-center {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - (0.5rem * 2));
    }
    .p-0{
        padding: 0 !important;
    }
</style>

<div class="myModal modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding: 0;">
    <div class="modal-dialog modal-dialog-center" role="document" style="max-width: 500px;">
        <div class="modal-content" style="border-radius: 0;">
            <div class="modal-header btn-pop-head btn-pop-head-green text-center" style="padding:12px;">
                Join <span id="selected_value"></span>
            </div>
            <form method="post" action="#">
                <input type="hidden" name="_token" value="gHtVf8PMKO2cjXzNpJRa0e8RHv89Win0bDeBmDMu">                <div class="modal-body" style="padding:0 30px">
                    <div class="row btn-pop">
                        <div class="col-md-12 col-xs-12 btn-pop-inner" style="padding:10px 0 0 0">
                            <h4>Contract Money</h4>
                        </div>
                        <div class="col-md-12 col-xs-12 btn-pop-inner" style="padding-bottom: 0;">
                            <!-- <button onclick="sBtn10numberValue(10)" id="data10" data-id="10" class="databtn10 btn btn-warning" type="button">10</button>
                            <button onclick="sBtn10numberValue(50)" id="data50" data-id="50" class="databtn10 btn btn-warning" type="button">50</button>
                            <button onclick="sBtn10numberValue(100)" id="data100" data-id="100" class="databtn10 btn btn-warning" type="button">100</button>
                            <button onclick="sBtn10numberValue(500)" id="data500" data-id="500" class="databtn10 btn btn-warning" type="button">500</button>
                            <button onclick="sBtn10numberValue(1000)" id="data1000" data-id="1000" class="databtn10 btn btn-warning" type="button">1000</button> -->
                            <div class="row text-center">
                                <div class="col-xs-3 p-0">
                                    <p class="anount-btn-pop" onclick="sBtn10numberValue(10)" id="data10" data-id="10">10</p>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <p class="anount-btn-pop" onclick="sBtn10numberValue(100)" id="data100" data-id="100">100</p>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <p class="anount-btn-pop" onclick="sBtn10numberValue(1000)" id="data1000" data-id="1000">1000</p>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <p class="anount-btn-pop" onclick="sBtn10numberValue(10000)" id="data10000" data-id="10000">10000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 btn-pop-inner">
                            <div class="row">
                                <div class="col-xs-3 p-0"><h4>Number</h4></div>
                                <div class="col-xs-9">
                                    <div class="amount-pop">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                        <input name="amount" required="" min="1" step="1" max="5000000" type="number" id="number" value="1">
                                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                        <input type="hidden" id="gameid" name="gameid">
                                        <input type="hidden" id="userid" name="userid" value="5595">
                                                                                    <input type="hidden" id="game_Type" name="game_Type" value="1">
                                                                                <input type="hidden" id="type" name="type" value="">
                                        <input type="hidden" id="value" name="value" value="">
                                        <input type="hidden" id="amount" name="amount" value="10">
                                        <input type="hidden" id="contract" name="contract" value="1">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-xs-12 btn-pop-inner p-0">
                            <h4>Total Contract Money is <span id="selected_amount">10</span></h4>
                        </div>
                        <div class="col-md-12 col-xs-12 btn-pop-inner">
                            <input checked="" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I agree <a data-dismiss="modal" data-toggle="modal" data-target="#ruleModal" style="color: #378FEE;">PRESALE RULE</a></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer btn-pop-fo p-0" style="border-color:#000; margin:0 10px;">
                    <button class="btn cencel-btn" data-dismiss="modal" type="button" style="padding:10px 0;">Cancel</button>
                    <button class="btn confirm-btn" id="abcdefgh1" style="padding:10px 0;" onclick="abcdefgh()" type="button">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade pr-0" id="ruleModal" tabindex="-1" role="dialog" aria-labelledby="ruleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 500px;">
        <div class="modal-content" style="border-radius: 0;">
            <div class="modal-header btn-pop-head btn-pop-head-green">
                Rule of Guess
            </div>
            <div class="modal-body" style="font-size: 13px;">
                <p>3 minutes 1 issue, 2 minutes and 30 seconds to order, 30 seconds to show the result. It opens all day.</p>
                <p>If you spend 100 to trade, after deducting 5.00 service fee, your contract amount is
                    95:</p>
                <p>1. JOIN GREEN: if the result shows 1,3,7,9, you will get (95*2) 190. If the result shows 5, you will get (95*1.5) 142.5</p>
                <p>2. JOIN RED: if the result shows 2,4,6,8, you will get (95*2) 190. If the result shows 0, you will get (95*1.5) 142.5</p>
                <p>3. JOIN VIOLET: if the result shows 0 or 5, you will get (95*4.5) 427.5</p>
                <p>4. SELECT NUMBER: if the result is the same as the number you selected, you will get (95*9)
                    855</p>
            </div>
            <!--<div class="modal-footer btn-pop-fo" style="border: 0;">-->
            <!--    <button class="btn btn-warning cencel-btn" data-dismiss="modal" type="button">Cancel</button>-->
            <!--</div>-->
            <div class="modal-footer btn-pop-fo p-0" style="border-color:#000; margin:0 10px;">
                <!--<button class="btn cencel-btn" data-dismiss="modal" type="button" style="padding:10px 0;">Cancel</button>-->
                <button class="btn confirm-btn" data-dismiss="modal" style="width:100%;padding:10px 0;" type="button">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!--  -->

<script>
    $(window).on('load', function() {
        $('#sucessModalCenter').modal('show');
        $('.modal-backdrop').removeClass("modal-backdrop");
    });
    setTimeout(function() {
        $('#sucessModalCenter').modal('hide');
        $('#sucessModalCenter').fadeOut('fast');
    },2000);
</script>
<!--  -->

<script src="<?=BASE_URL();?>assets/welcome/js/popper.min.js"></script>
<script src="<?=BASE_URL();?>assets/welcome/js/jquery.simplePagination.js"></script>

<script>
    function abcdefgh() {
        $('#abcdefgh1').attr('disabled',true);
        $('form').submit();
    }
</script>

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

        var typeVariable = Name;
        document.getElementById('refreshButton').setAttribute('href','?type='+typeVariable);
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
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
    function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 5000000){
            alert('Max betting amount is Rs.5000000');
            return false;
        }
        var kalaValue = $('#kalaNumber').val();
        kalaValue = isNaN(kalaValue) ? 1 : kalaValue;
        value = value + parseInt(1);
        document.getElementById('number').value = value;
        document.getElementById('contract').value = value;
        document.getElementById('amount').value = kalaValue;
        document.getElementById('selected_amount').innerHTML = parseInt(kalaValue*value);
    }

    function decreaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value <= 1){
            alert('Minimum betting amount is Rs.10');
            return false;
        }
        value < 1 ? value = 1 : '';

        var kalaValue = $('#kalaNumber').val();
        kalaValue = isNaN(kalaValue) ? 10 : kalaValue;

        value = value - parseInt(1);
        document.getElementById('number').value = value;
        document.getElementById('contract').value = value;
        document.getElementById('amount').value = kalaValue;
        document.getElementById('selected_amount').innerHTML  = parseInt(kalaValue*value);
    }

    function sBtn10numberValue(value) {
        var value = parseInt(value);
        value = isNaN(value) ? 0 : value;
        if(value < 10){
            alert('Minimum betting amount is Rs.10');
            return false;
        }

        $('.anount-btn-pop').removeClass('btn-pop-color-violet');
        $('.anount-btn-pop').removeClass('btn-pop-color-red');
        $('.anount-btn-pop').removeClass('btn-pop-color-green');
        var datatgjgj = $('#value').val();
        if(datatgjgj == 'Violet'){
            $('#data'+value).addClass('btn-pop-color-violet');
        }else if (datatgjgj == 'Red'){
            $('#data'+value).addClass('btn-pop-color-red');
        }else if(datatgjgj == 'Green'){
            $('#data'+value).addClass('btn-pop-color-green');
        }else{
            $('#data'+value).addClass('btn-pop-color-violet');
        }
        
        var kv = $('#number').val();
        kv = isNaN(kv) ? 10 : kv;

        value < 1 ? value = 1 : '';
        document.getElementById('kalaNumber').value = value;
        // document.getElementById('number').value = value;
        document.getElementById('amount').value = value;
        document.getElementById('selected_amount').innerHTML  = parseInt(kv*value);
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.game-val').on('click', function () {
            let select = $(this).data("value");
            let gameid = $(this).data("gameid");
            $('#selected_value').text(select);

            $('#value').val(select);
            $('#gameid').val(gameid);

            //alert(select);

            if(select == 'Red' || select == 'Green' || select == 'Violet'){
                $('#type').val('Color');
                if(select == 'Red'){
                    $('.modal-header').css('background-color','#EE493E');
                    $('.anount-btn-pop').removeClass('btn-pop-color-violet');
                    $('.anount-btn-pop').removeClass('btn-pop-color-red');
                    $('.anount-btn-pop').removeClass('btn-pop-color-green');
                    $('#data10').addClass('btn-pop-color-red');
                }else if(select == 'Green'){
                    $('.modal-header').css('background-color','#4CB251');
                    $('.anount-btn-pop').removeClass('btn-pop-color-violet');
                    $('.anount-btn-pop').removeClass('btn-pop-color-red');
                    $('.anount-btn-pop').removeClass('btn-pop-color-green');
                    $('#data10').addClass('btn-pop-color-green');
                }else if(select == 'Violet'){
                    $('.modal-header').css('background-color','#6D05B7');
                    $('.anount-btn-pop').removeClass('btn-pop-color-violet');
                    $('.anount-btn-pop').removeClass('btn-pop-color-red');
                    $('.anount-btn-pop').removeClass('btn-pop-color-green');
                    $('#data10').addClass('btn-pop-color-violet');
                }else{
                    $('.anount-btn-pop').removeClass('btn-pop-color-violet');
                    $('.anount-btn-pop').removeClass('btn-pop-color-red');
                    $('.anount-btn-pop').removeClass('btn-pop-color-green');
                    $('#data10').addClass('btn-pop-color-violet');
                    $('.modal-header').css('background-color',select);
                }
            }else if(select >=0 && select <= 9){
                $('.anount-btn-pop').removeClass('btn-pop-color-violet');
                $('.anount-btn-pop').removeClass('btn-pop-color-red');
                $('.anount-btn-pop').removeClass('btn-pop-color-green');
                $('#data10').addClass('btn-pop-color-violet');
                $('#type').val('Number');
                $('.modal-header').css('background-color','#312483');
            }else{
                $('#type').val();
            }
        });

        $('.tablinks').on('click', function () {
            var tablinks = $(this).data('value');
            $('#game_Type').val(tablinks);
        });

        $('#number').on('change', function () {
            var val = $(this).val();
            $('#selected_amount').text(val);
            $('#amount').val(val);
        });

        setTimeout(function(){
            location = '';
        },180000);

        var okok = '84';
        function countdown(element, minutes, seconds) {
            var time = minutes*60 + seconds;
            var interval = setInterval(function() {
                var el = document.getElementById('countdown');
                if (time <= 0) {
                    var text = "Completed";
                    el.innerHTML = text;
                    setTimeout(function() {
                        countdown('clock', 0, 180);
                    }, 500);
                    clearInterval(interval);
                    location = '';
                    return;
                }
                if(time <= 30){
                    $('#gameDiv button').attr('disabled',true);
                    $('#gameDiv button').css('background-color','gray');
                    $('#gameDiv button').css('background','gray');
                }
                var minutes = Math.floor( time / 60 );
                if (minutes < 10) minutes = "0" + minutes;
                var seconds = time % 60;
                if (seconds < 10) seconds = "0" + seconds;
                var text = minutes + ':' + seconds;
                el.innerHTML = text;
                time--;
            }, 1000);
        }
        countdown('clock', 0, okok);
    });

    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 10;
    items.slice(perPage).hide();
    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        } });

    var items2 = $(".list-wrapper2 .list-item");
    var numItems2 = items2.length;
    var perPage2 = 10;
    items2.slice(perPage2).hide();
    $('#pagination-container2').pagination({
        items: numItems2,
        itemsOnPage: perPage2,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage2 * (pageNumber - 1);
            var showTo = showFrom + perPage2;
            items2.hide().slice(showFrom, showTo).show();
        } });

    var items3 = $(".list-wrapper3 .list-item");
    var numItems3 = items3.length;
    var perPage3 = 10;
    items3.slice(perPage3).hide();
    $('#pagination-container3').pagination({
        items: numItems3,
        itemsOnPage: perPage3,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage3 * (pageNumber - 1);
            var showTo = showFrom + perPage3;
            items3.hide().slice(showFrom, showTo).show();
        } });

    var items4 = $(".list-wrapper4 .list-item");
    var numItems4 = items4.length;
    var perPage4 = 10;
    items4.slice(perPage4).hide();
    $('#pagination-container4').pagination({
        items: numItems4,
        itemsOnPage: perPage4,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage4 * (pageNumber - 1);
            var showTo = showFrom + perPage4;
            items4.hide().slice(showFrom, showTo).show();
        } });

    var items5 = $(".my-parity-list-wrapper .my-parity-list");
    var numItems5 = items5.length;
    var perPage5 = 10;
    items5.slice(perPage5).hide();
    $('#pagination-container-history').pagination({
        items: numItems5,
        itemsOnPage: perPage5,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage5 * (pageNumber - 1);
            var showTo = showFrom + perPage5;
            items5.hide().slice(showFrom, showTo).show();
        } });

    var items6 = $(".my-parity-list-wrapper2 .my-parity-list2");
    var numItems6 = items6.length;
    var perPage6 = 10;
    items6.slice(perPage6).hide();
    $('#pagination-container-history2').pagination({
        items: numItems6,
        itemsOnPage: perPage6,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage6 * (pageNumber - 1);
            var showTo = showFrom + perPage6;
            items6.hide().slice(showFrom, showTo).show();
        } });

    var items7 = $(".my-parity-list-wrapper3 .my-parity-list3");
    var numItems7 = items7.length;
    var perPage7 = 10;
    items7.slice(perPage7).hide();
    $('#pagination-container-history3').pagination({
        items: numItems7,
        itemsOnPage: perPage7,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage7 * (pageNumber - 1);
            var showTo = showFrom + perPage7;
            items7.hide().slice(showFrom, showTo).show();
        } });

    var items8 = $(".my-parity-list-wrapper4 .my-parity-list4");
    var numItems8 = items8.length;
    var perPage8 = 10;
    items8.slice(perPage8).hide();
    $('#pagination-container-history4').pagination({
        items: numItems8,
        itemsOnPage: perPage8,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage8 * (pageNumber - 1);
            var showTo = showFrom + perPage7;
            items8.hide().slice(showFrom, showTo).show();
        } });
</script>
<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>


<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#sucessModalCenter').modal('show');
    //     $('.modal-backdrop').removeClass("modal-backdrop");
    // });
</script>



</body></html>