<!DOCTYPE html>
<html lang="en"><head>
    <title>BharatPay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/bootstrap.min.css">
    <script src="<?=BASEURL?>assets/welcome/js/jquery.min.js"></script>
    <script src="<?=BASE_URL();?>assets/welcome/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/style.css">
    <link href="<?=BASE_URL();?>assets/welcome/img/favicon.png" rel="icon">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <style type="text/css">
    
    .brd{
        border-bottom: 1px solid #d8d8d8;
    }
    
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
              border-radius:5px;
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
                    <div class="col-xs-10" style="padding: 20px;">
                    <?php $balance =$this->db->select('sum(credit)-sum(debit) as balance')->where('user_id',$this->session->userdata('bhpusername'))->get("wallet")->row()->balance+0; ?>
                        <h3 style="color: #fff; font-size: 20px; margin-left:5px; margin-top:5px;">Available balance: ₹<span><?=number_format($balance,2)?></span></h3>
                        <button type="button" onclick="window.location.href='<?=BASEURL?>user/online_recharge';" class="l-btn" style="margin-left:5px;">Recharge</button>
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
    <?php
    $datttt = date('i');
    $timeFirst  = strtotime(date('Y-m-d H:i:s'));
    $timeSecond = strtotime(date('Y-m-d H:'.(ceil(($datttt+0.1) / 3) * 3).':00'));
    $differenceInSeconds = $timeSecond - $timeFirst;
    $game_id = $this->db->order_by('id','DESC')->where('game_type','Parity')->get('games')->row()->game_id;
    // echo date('Y-m-d H:i:s');
    
     $datttt1 = date('s');
    $timeFirst1  = strtotime(date('Y-m-d H:i:s'));
    $timeSecond1= strtotime(date('Y-m-d H:i:'.(ceil(($datttt1+0.1) / 60) * 60).''));
    $differenceInSeconds1 = $timeSecond1 - $timeFirst1;
    ?>

    <section>
        <div class="tab">
            <div class="row-tab">
            <button class="tablinks active" data-value="1" onclick="opentab(event, 'Parity')" id="defaultOpen">Parity</button>
            
            <button class="tablinks" id="sapre" data-value="2" onclick="opentab(event, 'Bcone')">Sapre</button>
            </div>
            <!--<button class="tablinks" data-value="4" onclick="opentab(event, 'Emerd')"   >Emerd</button>-->
        </div>
                        <!--parity-->
                        
                    <div id="Parity" class="tabcontent" style="display: block;">
                <div class="card" style="box-shadow:unset;">
                    <div class="row period-Parity no-gutters">
                        <div class="col-md-6 col-xs-6">
                            <h4><i class="fa fa-trophy" aria-hidden="true"></i>Period</h4>
                            <h6 id="curentgame"><?=$game_id;?></h6>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right">
                            <h4>Count Down</h4>
                            <h6 id="countdown"><?=gmdate("i:s", $differenceInSeconds)?></h6>
                        </div>
                    </div>
                </div>

                <div id="gameDiv">
                    <div class="row">
                        <div data-toggle="modal"  data-target=".myModal" class=" col-md-4 col-xs-4 btn-green"><button  data-value="Green" class=" game-val parity_chose" data-toggle="modal"  data-id="Parity" data-target=".myModalParity" aria-hidden="true">Join Green</button></div>
                        <div data-toggle="modal" data-target=".myModal" class="col-md-4 col-xs-4 btn-violet"><button  data-value="Violet" class=" game-val parity_chose" data-toggle="modal"  data-id="Parity" data-target=".myModalParity" aria-hidden="true">Join Violet</button></div>
                        <div data-toggle="modal"  data-target=".myModal" class=" col-md-4 col-xs-4 btn-red"><button  data-value="Red" class=" game-val parity_chose" data-toggle="modal"  data-id="Parity"  data-target=".myModalParity" aria-hidden="true">Join Red</button></div>
                    </div>
                    <div class="row">
                        <div class="col btn-num "><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="0" data-target=".myModalParity" aria-hidden="true">0</button></div>
                        <div class="col btn-num "><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="1" data-target=".myModalParity" aria-hidden="true">1</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="2" data-target=".myModalParity" aria-hidden="true">2</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="3" data-target=".myModalParity" aria-hidden="true">3</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="4" data-target=".myModalParity" aria-hidden="true">4</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="5" data-target=".myModalParity" aria-hidden="true">5</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="6" data-target=".myModalParity" aria-hidden="true">6</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="7" data-target=".myModalParity" aria-hidden="true">7</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="8" data-target=".myModalParity" aria-hidden="true">8</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Parity" data-value="9" data-target=".myModalParity" aria-hidden="true">9</button></div>
                    </div>
                </div>


                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i><br>Parity Records</h6></a>
               
                           
                                <table class="list-wrapper brd" >
                                      <tr class="Bcone-heading brd" style="font-weight: 600;">
                                        <td>Period</td>
                                        <td>Price</td>
                                        <td>Number</td>
                                        <td>Color</td>
                                    </tr>
                                    <tbody >
                                        <?php 
                                        
                                       $old_date = date('Y-m-d', strtotime('-7 day'));
                                       $today = date('Y-m-d');
                                       $news = $this->db->where('date(entry_date) >=',$old_date)->where('date(entry_date) <=' ,$today)->where('game_type','Parity')->get('games')->result_array();
                                        
                                        

                                        //$news = $this->db->where('status', 'Win')->where('date(entry_date) >='  ,$old_date)->where('date(entry_date) <=' ,$today)->where('game_type','Parity')->get('game')->result_array();
                                        $winn=0;
                                        $count=1; foreach ($news as $key => $n) { 
                                            
                                        $winn=$this->db->where('game_id',$n['game_id'])->get('game')->row()->wincode+0;
                                        
                                        $rand = substr( $n['game_id'], -min( strlen( $n['game_id'] ), 4 ) );
                                        
                                        //echo $new_string;
                                         
                                         if($winn == 1 || $winn == 3|| $winn == 7|| $winn == 9 || $winn == 5)
                                         {
                                             $colort = 'green';
                                             $text_color='green';
                                         }
                                         if($winn == 2|| $winn == 4|| $winn == 6|| $winn == 8 || $winn == 0)
                                         {
                                             $colort = 'red';
                                             $text_color='red';
                                         }
                                         if($winn == 0)
                                         {
                                             $text_color='red';
                                             $col = 'voilet';
                                         }
                                         if($winn == 5)
                                         {
                                              $text_color='green';
                                              $col = 'voilet';
                                         }
    ?>                                 
                                        <tr class="list-item brd" style="<?php if($count > 10) echo 'display: none'; ?>">
                                            <td style="vertical-align: middle;"><?=$n['game_id']?></td>
                                            <td><?=$rand.$winn?></td>
                                            <td style="color:<?=$colort?>;"><?=$winn?></td>
                                             <td class="<?=$text_color?>"><img src="<?=BASEURL?>assets/welcome/img/<?=$text_color?>.png"><?php if($winn == 0 ||$winn == 5){ ?> <img src="<?=BASEURL?>assets/welcome/img/<?=$col?>.png"> <?php }?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                           
                    <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">
                </span>
                </li>
                <li>
                    <a href="#" class="page-link next">›</a></li></ul></div>
                    
                    <!--Parity History-->
                    
                     <div id="" class="" style="display: block;">
               



                <a href="#"><h6 class="record-box"><img style="margin-bottom:5px;" width="20px" src="<?=BASEURL?>assets/user/img/icons/list.png"><br>My Records</h6></a>
                
  <!--accordion-->
                
 <div class = "container-fluid">
  <div class="panel-group" id="accordion">
      <?php 
      $result = $this->db->order_by('id','DESC')->where('game_type','Parity')->where('user_id',$this->session->userdata('bhpusername'))->get("game")->result_array(); 
    //   if($result['status']=='Win') {
    //       $price = $result['pet_amount']*8;
    //       $tds = ($price*10)/100;
    foreach($result as $re)
    {
     
               if(!empty($re['g_color'])){
               switch ($re['g_color']) {
                  case "Green":
                    $winprice = $re['pet_amount']*2; 
                    break;
                  case "Red":
                    $winprice = $re['pet_amount']*2; 
                    break;
                  case "Violet":
                    $winprice = $re['pet_amount']*1.5; 
                    break;
                }
               } else {
                  $winprice = $re['pet_amount']*9; 
               }
  
            $g_coll = $this->db->like('level',$re['wincode'])->where('type','game')->get('master')->row()->criteria;
            
           $rd = substr( $re['game_id'], -min( strlen( $re['game_id'] ), 4 ) );
           
           if($re['status'] == "--")
           {
               $stat = 'Wait';
               $cll = "#ecac21";
           }
           if($re['status'] == "Win")
           {
               $stat = $re['status'];
               $cll = "green";
           }
           if($re['status'] == "Fail")
           {
               $stat = $re['status'];
               $cll = "Red";
           }
           
      ?>
      <div class="panel panel-default">
    <div class="panel-heading">
       <div class="record" style="display:flex; justify-content:space-between;">
           <div class="col"><?=$re['game_id']?></div>
           <div class="col" style="color:<?=$cll?>;"><?=$stat;?></div>
           <div class="col"style="color:<?=$cll;?>;"><?php if($re['status'] == '--'){ ?> <?=$re['pet_amount']?> <?php }?><?php if($re['status'] == 'Win'){ ?> +<?= $winprice?> <?php }?><?php if($re['status'] == 'Fail'){ ?> -<?=$re['pet_amount']?> <?php }?>
               
               </div>
           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?=$re['id']?>"></a>
       </div>
   </div>
   <div id="collapseTwo<?=$re['id']?>" class="panel-collapse collapse">
      <div class="panel-body">
          <form>
            <div class="row">
              <div class="col-xs-6  mb-2"><label for="exampleInputEmail1">Period</label></div>
              <div class="col-xs-6"><p><?=$re['game_id']?></p></div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Contract Money</label></div>
                  <div class="col-xs-6"><p><?=$re['contract_amount']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Contract Count</label></div>
                  <div class="col-xs-6"><p><?=$re['contract_count']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Delivery</label></div>
                  <div class="col-xs-6"><p style="color:#f39839;"><?=$re['pet_amount'];?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Fee</label></div>
                  <div class="col-xs-6"><p><?=$re['contract_amount']*5/100?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Open price</label></div>
                  <div class="col-xs-6"><p><?=$rd.$re['wincode'];?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Result</label></div>
                  <div class="col-xs-6"><p><?=$re['gcode']?></p></div>
              </div> 
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Select</label></div>
                  <div class="col-xs-6"><p style="color:blue;"><?=$re['wincode'];?> <span style="color:<?=$g_coll?>"><?=$g_coll?></span></p></div>
              </div>
              
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Status</label></div>
                  <div class="col-xs-6"><p style="color:<?=$cll?>;"><?=$re['status']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Amount</label></div>
                  <div class="col-xs-6"><?php if($re['status'] == 'Fail'){ ?><p style="color:red;">-<?=$re['pet_amount'];?> </p><?php } ?> <?php if($re['status'] == 'Win'){ ?><p style="color:green;"> +<?=$winprice?> </p><?php } ?></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Create Time</label></div>
                  <div class="col-xs-6"><p><?=$re['entry_date']?></p></div>
              </div>
          </div>

      </form>
  </div>
</div>
</div>
<?php }  ?>

</div>
</div> 
<!-- end container -->
                
                
                
                

                            </div>
                    
                    
                     </div>
                            
                            
                            <!--sapre-->
                            
            <div id="Bcone" class="tabcontent" style="display: block;">
                <div class="card" style="box-shadow:unset;">
                    <div class="row period-Bcone no-gutters">
                        <div class="col-md-6 col-xs-6">
                            <h4><i class="fa fa-trophy" aria-hidden="true"></i>Period</h4>
                            <h6>20220918421</h6>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right">
                            <h4>Count Down</h4>
                            <h6 id="countdown123"><?=gmdate("s", $differenceInSeconds1)?></h6>
                        </div>
                    </div>
                </div>
                
                 <div id="gameDiv1">
                    <div class="row">
                        <div data-toggle="modal"  data-target=".myModal" class="col-md-4 col-xs-4 btn-green"><button  data-value="Green" class=" game-val parity_chose" data-toggle="modal"  data-id="Sapre" data-target=".myModalParity" aria-hidden="true">Join Green</button></div>
                        <div data-toggle="modal" data-target=".myModal" class="col-md-4 col-xs-4 btn-violet"><button  data-value="Violet" class=" game-val parity_chose" data-toggle="modal"  data-id="Sapre" data-target=".myModalParity" aria-hidden="true">Join Violet</button></div>
                        <div data-toggle="modal"  data-target=".myModal" class="col-md-4 col-xs-4 btn-red"><button  data-value="Red" class=" game-val parity_chose" data-toggle="modal"  data-id="Sapre"  data-target=".myModalParity" aria-hidden="true">Join Red</button></div>
                    </div>
                    <div class="row">
                        <div class="col btn-num "><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="0" data-target=".myModalParity" aria-hidden="true">0</button></div>
                        <div class="col btn-num "><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="1" data-target=".myModalParity" aria-hidden="true">1</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="2" data-target=".myModalParity" aria-hidden="true">2</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="3" data-target=".myModalParity" aria-hidden="true">3</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="4" data-target=".myModalParity" aria-hidden="true">4</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="5" data-target=".myModalParity" aria-hidden="true">5</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="6" data-target=".myModalParity" aria-hidden="true">6</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="7" data-target=".myModalParity" aria-hidden="true">7</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="8" data-target=".myModalParity" aria-hidden="true">8</button></div>
                        <div class="col btn-num"><button class=" game-val parity_chose"  data-toggle="modal"  data-id="Sapre" data-value="9" data-target=".myModalParity" aria-hidden="true">9</button></div>
                    </div>
                </div>
                
              


                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i><br>Sapre Records</h6></a>
                <table class="list-wrapper2 ">
                   <tr class="Bcone-heading" style="font-weight: 600;">
                        <td>Period</td>
                        <td>Price</td>
                        <td>Number</td>
                        <td>Color</td>
                    </tr>
                                  <tbody >
                                        <?php 
                                        
                                       $old_datee = date('Y-m-d', strtotime('-7 day'));
                                       $todayy = date('Y-m-d');
                                       $newss = $this->db->where('date(entry_date) >=',$old_datee)->where('date(entry_date) <=' ,$todayy)->where('game_type','Sapre')->get('games')->result_array();
                                        
                                        

                                        //$news = $this->db->where('status', 'Win')->where('date(entry_date) >='  ,$old_date)->where('date(entry_date) <=' ,$today)->where('game_type','Parity')->get('game')->result_array();
                                        $winnn=0;
                                        $count=1; foreach ($newss as $key => $nn) { 
                                            
                                        $winnn=$this->db->where('game_id',$nn['game_id'])->get('game')->row()->wincode+0;
                                        //  switch ($color['criteria']) {
                                        //         case 'Green':
                                        //             $text_color='green';
                                        //             break;
                                        //         case 'Red':
                                        //             $text_color='red';
                                        //             break;
                                        //       case 'Violet':
                                        //           $text_color='voilet';
                                                   
                                        //             break;
                                        //     }
                                         $randd = substr( $nn['game_id'], -min( strlen( $nn['game_id'] ), 4 ) );
                                         
                                         if($winnn == 1 || $winnn == 3|| $winnn == 7|| $winnn == 9 || $winnn == 5)
                                         {
                                             $colortt = 'green';
                                             $text_colorr='green';
                                         }
                                         if($winnn == 2|| $winnn == 4|| $winnn == 6|| $winnn == 8 || $winnn == 0)
                                         {
                                             $colortt = 'red';
                                             $text_colorr='red';
                                         }
                                         if($winnn == 0)
                                         {
                                             $text_colorr='red';
                                             $coll = 'voilet';
                                         }
                                         if($winnn == 5)
                                         {
                                              $text_colorr='green';
                                              $coll = 'voilet';
                                         }
                                     ?>                                 
                                        <tr class="list-item brd" style="<?php if($count > 10) echo 'display: none'; ?>">
                                            <td style="vertical-align: middle;"><?=$nn['game_id']?></td>
                                            <td><?=$randd.$winnn?></td>
                                            <td style="color:<?=$colortt?>;"><?=$winnn?></td>
                                             <td class="<?=$text_colorr?>"><img src="<?=BASEURL?>assets/welcome/img/<?=$text_colorr?>.png"><?php if($winnn == 0 ||$winnn == 5){ ?> <img src="<?=BASEURL?>assets/welcome/img/<?=$coll?>.png"> <?php }?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    
                                </table>
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container2" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">‹</span></li><li><a href="#" class="page-link next">›</a></li></ul></div>


              <div id="" class="" style="display: block;">
               



                <a href="#"><h6 class="record-box"><img style="margin-bottom:5px;" width="20px" src="<?=BASEURL?>assets/user/img/icons/list.png"><br>My Records</h6></a>
                
  <!--accordion-->
                
  <div class = "container-fluid">
  <div class="panel-group" id="accordion">
      <?php 
      $result = $this->db->order_by('id','DESC')->where('game_type','Sapre')->where('user_id',$this->session->userdata('bhpusername'))->get("game")->row_array(); 
      if($result['status']=='Win') {
          $price = $result['pet_amount']*8;
          $tds = ($price*10)/100;
          $color=$this->db->like('level',$result['gcode'])->where('type','game')->get('master')->row_array();
      ?>
      <div class="panel panel-default">
    <div class="panel-heading">
       <div class="record" style="display:flex; justify-content:space-between;">
           <div class="col"><?=$result['game_id']?></div>
           <div class="col" style="color:green;">Win</div>
           <div class="col"style="color:green;" ><?=$price?></div>
           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1"></a>
       </div>
   </div>
   <div id="collapseTwo1" class="panel-collapse collapse">
      <div class="panel-body">
          <form>
            <div class="row">
              <div class="col-xs-6  mb-2"><label for="exampleInputEmail1">Period</label></div>
              <div class="col-xs-6 "><p><?=$result['game_id']?></p></div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Contract Money</label></div>
                  <div class="col-xs-6 "><p><?=$result['pet_amount']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Contract Count</label></div>
                  <div class="col-xs-6 "><p>1</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Delivery</label></div>
                  <div class="col-xs-6 "><p style="color:#EADDCA;"><?=$price-$tds?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Fee</label></div>
                  <div class="col-xs-6"><p><?=$tds?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Open Price</label></div>
                  <div class="col-xs-6 "><p>30015</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Result</label></div>
                  <div class="col-xs-6 "><p><?=$result['gcode']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Select</label></div>
                
                <div class="col-xs-6 "><p><?=$color['criteria']?></p></div>
                </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Status</label></div>
                  <div class="col-xs-6 "><p>Win</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Amount</label></div>
                  <div class="col-xs-6 "><p>-1.50</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6 "><label for="exampleInputEmail1">Create Time</label></div>
                  <div class="col-xs-6 "><p><?=$result['entry_date']?></p></div>
              </div>
          </div>

      </form>
  </div>
</div>
</div>
<?php } else { ?>
      <div class="panel panel-default">
        <div class="panel-heading">
           <div class="record" style="display:flex; justify-content:space-between;">
               <div class="col"><?=$result['game_id']?></div>
               <div class="col" style="color:red;">Fail</div>
               <div class="col"style="color:red;" >-<?=$price?></div>
               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
           </div>
       </div>
       <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
          <form>
            <div class="row">
              <div class="col-xs-6 mb-2"><label for="exampleInputEmail1">Period</label></div>
              <div class="col-xs-6"><p><?=$result['game_id']?></p></div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Contract Money</label></div>
                  <div class="col-xs-6 "><p><?=$result['pet_amount']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Contract Count</label></div>
                  <div class="col-xs-6"><p>1</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Delivery</label></div>
                  <div class="col-xs-6 "><p style="color:#EADDCA;"><?=$price-$tds?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Fee</label></div>
                  <div class="col-xs-6"><p><?=$tds?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Open Price</label></div>
                  <div class="col-xs-6"><p>30015</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Result</label></div>
                  <div class="col-xs-6"><p><?=$result['gcode']?></p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Select</label></div>
                
                <div class="col-xs-6"><p><?=$color['criteria']?></p></div>
                </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Status</label></div>
                  <div class="col-xs-6"><p>Fail</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Amount</label></div>
                  <div class="col-xs-6"><p>-1.50</p></div>
              </div>
              <div class="form-group" >
                  <div class="col-xs-6"><label for="exampleInputEmail1">Create Time</label></div>
                  <div class="col-xs-6"><p><?=$result['entry_date']?></p></div>
              </div>
          </div>

      </form>
  </div>
</div>
</div>
<?php } ?>  
</div>
</div> 
  <!-- end container -->
                
                
                
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container3" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">‹</span></li><li><a href="#" class="page-link next">›</a></li></ul></div>

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
            <a href="<?=BASE_URL();?>user">
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

<div class="myModalParity modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding: 0;">
    <div class="modal-dialog modal-dialog-center" role="document" style="max-width: 500px;">
        <div class="modal-content" style="border-radius: 0;">
            <div id="colo" class="modal-header btn-pop-head btn-pop-head-green text-center" style="padding:12px;">
                Select <span id="selected_valuex"></span>
            </div>
            <form method="post" action="<?=BASEURL?>user/join_game">
                <input type="hidden" id="selected_value" name="selected_value">
                <input type="hidden" id="game_Type" name="game_Type" >
                <input type="hidden" id="amount" name="amount" value="10">
                <input type="hidden" id="amounth" name="amounth" value="10">
                <div class="modal-body" style="padding:0 30px">
                    <div class="row btn-pop">
                        <div class="col-md-12 col-xs-12 btn-pop-inner" style="padding:10px 0 0 0">
                            <h4>Contract Money</h4>
                        </div>
                        <div class="col-md-12 col-xs-12 btn-pop-inner" style="padding-bottom: 0;">
                            <!--<button onclick="sBtn10numberValue(10)" id="data10" data-id="10" class="databtn10 btn btn-warning" type="button">10</button>-->
                            <!--<button onclick="sBtn10numberValue(50)" id="data50" data-id="50" class="databtn10 btn btn-warning" type="button">50</button>-->
                            <!--<button onclick="sBtn10numberValue(100)" id="data100" data-id="100" class="databtn10 btn btn-warning" type="button">100</button>-->
                            <!--<button onclick="sBtn10numberValue(500)" id="data500" data-id="500" class="databtn10 btn btn-warning" type="button">500</button>-->
                            <!--<button onclick="sBtn10numberValue(1000)" id="data1000" data-id="1000" class="databtn10 btn btn-warning" type="button">1000</button> -->
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
                                        <input name="number"  min="1" step="1" type="number" id="number" value="1" required>
                                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                        
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
                    <button class="btn confirm-btn" id="abcdefgh1" style="padding:10px 0;" onclick="abcdefgh()" type="submit">Confirm</button>
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



<script>
    $(document).ready(function () {
            $('#selected_value').val(select);
        });

        $('.game-val').on('click', function () {
            let select = $(this).data("value");
            let gameid = $(this).data("gameid");
            $('#selected_value').val(select);

            $('#value').val(select);
            $('#gameid').val(gameid);
            

        });

         $(document).ready(function () {
            $('#selected_valuex').val(selectt);
        });

        $('.game-val').on('click', function () {
            let selectt = $(this).data("value");
            if(selectt == 0||selectt == 5)
            {
                  document.getElementById("selected_valuex").innerHTML = $(this).data("value");
                 $("#colo").css("background-color", "#378fee");
            }
            if(selectt == 1 || selectt == 3 || selectt == 7 || selectt == 9)
            {
                document.getElementById("selected_valuex").innerHTML = $(this).data("value");
                 $("#colo").css("background-color", "#378fee");
            }
            if(selectt == 2 || selectt == 4 || selectt == 6 || selectt == 8)
             {
               document.getElementById("selected_valuex").innerHTML = $(this).data("value");
                 $("#colo").css("background-color", "#378fee");
             }
            
        });
        
        $('.game-val').on('click', function () {
            let selectt = $(this).data("value");
            if(selectt == 'Violet')
            {
                document.getElementById("selected_valuex").innerHTML = "Violet";
                 $("#colo").css("background-color", "#6a29b7");
            }
            if(selectt == 'Green')
            {
                document.getElementById("selected_valuex").innerHTML = "Green";
                  $("#colo").css("background-color", "#4cb251");
            }
            if(selectt == 'Red')
             {
                document.getElementById("selected_valuex").innerHTML = "Red";
                 $("#colo").css("background-color", "#f1463a");
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

        var okok = '<?=$differenceInSeconds?>';
        function countdown(element, minutes, seconds) {
            var time = minutes*60 + seconds;
            var interval = setInterval(function() {
                var el = document.getElementById('countdown');
                if (time <= 0) {
                    var text = "Completed";
                    el.innerHTML = text;
                    setTimeout(function() {
                        countdown('clock', 0, 30);
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
        
        
        
        var okok1 = '<?=$differenceInSeconds1?>';
        function countdown123(element, minutes, seconds) {
            var time = minutes*60 + seconds;
            var interval = setInterval(function() {
                var el = document.getElementById('countdown123');
                if (time <= 0) {
                    var text = "Completed";
                    el.innerHTML = text;
                    setTimeout(function() {
                        countdown123('clock', 0, 30);
                    }, 500);
                    clearInterval(interval);
                    location = '';
                    return;
                }
                if(time <= 15){
                    $('#gameDiv1 button').attr('disabled',true);
                    $('#gameDiv1 button').css('background-color','gray');
                    $('#gameDiv1 button').css('background','gray');
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
        countdown123('clock', 0, okok1);
    // });
</script>








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
    function sBtn10numberValue(value) {
        var number = $('#number').val();
        var amountxx = parseInt(value)*parseInt(number);
        $('#amount').val(amountxx);
        $('#selected_amount').text(amountxx);
        $('#amounth').val(value);
    }
    
    function increaseValue() {
        var number = $('#number').val();
        $('#number').val(parseInt(number)+parseInt(1));
        var camount = $('#amounth').val();
        
        var numberx = $('#number').val();
        var amount = $('#amount').val();
        if(amount > 5000000){
            alert('Max betting amount is Rs.5000000');
            return false;
        }
        var amountxx = parseInt(numberx)*parseInt(camount);
        
        $('#amount').val(amountxx);
        $('#selected_amount').text(amountxx);
    }

    function decreaseValue() {
        var number = $('#number').val();
        $('#number').val(parseInt(number)-parseInt(1));
        var camount = $('#amounth').val();
        
        var numberx = $('#number').val();
        var amount = $('#amount').val();
        if(numberx < 1){
            alert('Min betting amount is Rs.10');
            $('#number').val(1);
            $('#amount').val(10);
            $('#selected_amount').text(10);
            return false;
        }
        var amountxx = parseInt(numberx)*parseInt(camount);
        
        $('#amount').val(amountxx);
        $('#selected_amount').text(amountxx);
    }
    $(document).on('click', '.parity_chose', function() {
    var dt_id = $(this).attr("data-id");
    // alert(dt_id);
    $("#game_Type").val(dt_id);
});
    
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
    // $(window).on('load', function() {
    //     $('#sucessModalCenter').modal('show');
    //     $('.modal-backdrop').removeClass("modal-backdrop");
    // });
</script>



</body></html>



















<html lang="en" style="font-size: 68.2px;">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="icon" href="favicon.ico">
      <title>universalclub</title>
      <link href="css/app.46643acf.css" rel="preload" as="style">
      <link href="css/chunk-vendors.cf06751b.css" rel="preload" as="style">
      <link href="js/app.019170bb.js?id=1" rel="preload" as="script">
      <link href="js/chunk-vendors.824d6eef.js" rel="preload" as="script">
      <link href="css/chunk-vendors.cf06751b.css" rel="stylesheet">
      <link href="css/app.46643acf.css" rel="stylesheet">
   </head>
   <body style="font-size: 24px;">
      <noscript><strong>We're sorry but default doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
      <div  class="win">
         <div  class="mine_top">
            <div  class="mine_info">
               <p  class="balance">Available balance: ₹ 14106.42</p>
               <div  class="mine_info_btn">
                  <div  class="btn"><button  class="one_btn">Recharge</button><button >Trend</button></div>
                  <div  class="refresh"><img  src="" alt=""></div>
               </div>
            </div>
         </div>
         <div  class="main">
            <ul  class="main_nav">
               <!---->
               <li  class="active">
                  Sapre
               </li>
               <li  class="">
                  Bcone
               </li>
               <!---->
            </ul>
            <div  class="center_text">
               <ul  class="center_top">
                  <li  class="left_li">
                     <ol  class="top_ol"><img  src="" alt=""><span >Period</span></ol>
                     <ol  class="bot_ol">
                        20220929269
                     </ol>
                  </li>
                  <li  class="right_li">
                     <ol  class="top_ol"><span >Count Down</span></ol>
                     <ol  class="bot_ol">
                        <div  class="countdown">
                           <div  class="van-count-down">
                              <span  class="span">0</span><span  class="span">0</span><span >:</span>
                              <p ><span  class="span">1</span><span  class="span">9</span></p>
                           </div>
                        </div>
                        <div  class="ol_btn" style="display: none;"><button  class="grayback">
                           Continue
                           </button>
                        </div>
                     </ol>
                  </li>
               </ul>
               <div  class="btn_center"><button  class="back_one btn_active">
                  Join Green
                  </button><button  class="back_two btn_active">
                  Join Violet
                  </button><button  class="back_three btn_active">
                  Join Red
                  </button>
               </div>
               <ul  class="center_notes">
                  <li >
                     <ol  class="btn_active">
                        0
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        1
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        2
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        3
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        4
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        5
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        6
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        7
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        8
                     </ol>
                  </li>
                  <li >
                     <ol  class="btn_active">
                        9
                     </ol>
                  </li>
               </ul>
            </div>
            <div  class="nav_content">
               <div  class="content" style="display: none;">
                  <div  class="content_con">
                     <div  class="content_title">
                        <img  src="" alt="">
                        <p >Parity Record</p>
                     </div>
                     <div  class="parity">
                        <table >
                           <thead >
                              <tr >
                                 <th >Period</th>
                                 <th >Price</th>
                                 <th >Number</th>
                                 <th >Result</th>
                              </tr>
                              <tr  style="border: 0px; width: 100%; display: none;">
                                 <th  colspan="4" style="height: 0px; line-height: 0;">
                                    <div  class="table_loading">
                                       <div  class="v-progress-linear__bar">
                                          <div  class="
                                             v-progress-linear__bar__indeterminate
                                             v-progress-linear__bar__indeterminate--active
                                             ">
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                long
                                                primary
                                                "></div>
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                short
                                                primary
                                                "></div>
                                          </div>
                                       </div>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody >
                              <tr >
                                 <td >20220929268</td>
                                 <td >30479</td>
                                 <td  style="color: green;">
                                    9
                                 </td>
                                 <td ><span  class="red" style="background: rgb(76, 175, 80);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929267</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: rgb(76, 175, 80);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929266</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: rgb(76, 175, 80);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929265</td>
                                 <td >30455</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: rgb(76, 175, 80);"></span><span  class="red" style="background: rgb(156, 39, 176);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929264</td>
                                 <td >30437</td>
                                 <td  style="color: green;">
                                    7
                                 </td>
                                 <td ><span  class="red" style="background: rgb(76, 175, 80);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929263</td>
                                 <td >30445</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: rgb(76, 175, 80);"></span><span  class="red" style="background: rgb(156, 39, 176);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929262</td>
                                 <td >30450</td>
                                 <td  style="color: red;">
                                    0
                                 </td>
                                 <td ><span  class="red" style="background: rgb(244, 67, 54);"></span><span  class="red" style="background: rgb(156, 39, 176);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929261</td>
                                 <td >30474</td>
                                 <td  style="color: red;">
                                    4
                                 </td>
                                 <td ><span  class="red" style="background: rgb(244, 67, 54);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929260</td>
                                 <td >30456</td>
                                 <td  style="color: red;">
                                    6
                                 </td>
                                 <td ><span  class="red" style="background: rgb(244, 67, 54);"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929259</td>
                                 <td >30452</td>
                                 <td  style="color: red;">
                                    2
                                 </td>
                                 <td ><span  class="red" style="background: rgb(244, 67, 54);"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div  class="pagination">
                        <ul  class="page_box">
                           <li  class="page"><span >1-10</span> of 2912
                           </li>
                           <li  class="page_btn">
                              <i  class="van-icon van-icon-arrow-left">
                                 <!---->
                              </i>
                              <i  class="van-icon van-icon-arrow">
                                 <!---->
                              </i>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div  class="content" style="">
                  <div  class="content_con">
                     <div  class="content_title">
                        <img  src="" alt="">
                        <p >Sapre Record</p>
                     </div>
                     <div  class="parity">
                        <table >
                           <thead >
                              <tr >
                                 <th >Period</th>
                                 <th >Price</th>
                                 <th >Number</th>
                                 <th >Result</th>
                              </tr>
                              <tr  style="border: 0px; width: 100%; display: none;">
                                 <th  colspan="4" style="height: 0px; line-height: 0;">
                                    <div  class="table_loading">
                                       <div  class="v-progress-linear__bar">
                                          <div  class="
                                             v-progress-linear__bar__indeterminate
                                             v-progress-linear__bar__indeterminate--active
                                             ">
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                long
                                                primary
                                                "></div>
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                short
                                                primary
                                                "></div>
                                          </div>
                                       </div>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody >
                              <tr >
                                 <td >20220929268</td>
                                 <td >30479</td>
                                 <td  style="color: green;">
                                    9
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929267</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929266</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929265</td>
                                 <td >30455</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929264</td>
                                 <td >30437</td>
                                 <td  style="color: green;">
                                    7
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929263</td>
                                 <td >30445</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929262</td>
                                 <td >30450</td>
                                 <td  style="color: red;">
                                    0
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929261</td>
                                 <td >30474</td>
                                 <td  style="color: red;">
                                    4
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929260</td>
                                 <td >30456</td>
                                 <td  style="color: red;">
                                    6
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929259</td>
                                 <td >30452</td>
                                 <td  style="color: red;">
                                    2
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div  class="pagination">
                        <ul  class="page_box">
                           <li  class="page"><span >1-10</span> of 2912
                           </li>
                           <li  class="page_btn">
                              <i  class="van-icon van-icon-arrow-left">
                                 <!---->
                              </i>
                              <i  class="van-icon van-icon-arrow">
                                 <!---->
                              </i>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div  class="content" style="display: none;">
                  <div  class="content_con">
                     <div  class="content_title">
                        <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADF0lEQVRoQ+1aO2gUURQ9Nx8mYCfYiR+w0EbsTMD4qyVqwA/aGBG7FUdm3jYBYxOYeS+OmE6IBoL4Az9gk8L4BbVSUlkIiXY2dkKEZK9MSGR8O7PzdXeKmXLn3nvOub/d91hCwse2bU5oWqiZlJKSBExk5AeqhCRJZwubqiJRySl9a3WKYM6Oa3KnSkjRKc0Zr6pIzgQW7h5akbDd3alZSsqlElJ4b0QETFORTwD2BON0dXVtdRzne/CzsrRWvV7f0mg0vmm6P/utdQfAOU3IoOM470oqZF+j0XirCZn2hQgAjvbikZTyZBmF2Lb9EMAJjW+dhBBDzPxMb1EiOu+6rl+t1acMrSWEGGHm2yFcj66eRyzLek1E+zWDX8x8RCn1qgxCLMs6SETPAWwI8mTmN0qpA+tCjhPR45DFsUBEV1zXfdrJigghjjHzdQDbdY7MPKyUevL3hGjb9n0ApyK2oD9cg+1auRpOK+wHUsrTvv1fIUKIfmZ+3yGymWCJaMB13Q//CFmblb1EdAvA7kyR2+c0z8wXlVIf1yGbLh9M09zY09NzE8DZ9vFKhXR3eXn5kud5P4NekbcolmVdBXA4ZJulQi3K2N9OAOaUUtfCYsZeB5mmuaO7u/vQmqjVwWrXw8z+AppbWVl56Xne11a4sUKCzrZtLwDY1iYhi1LKpnUbhZ1KSNQ36/8Qpv+yiMNIJaRWqxl9fX1f2lCVxaWlpZ2Tk5O/4wREbq04R38JENFYnF2e98w8FjXUhbTWehAhhMfMl/OQjSREdMN1XTNt7FStpQ1+0zkmLXiI/bSUciRLnMxCfLCwQ1kWEr4PM08ppS5k9c8lxAe1LOsMEY0C2JWFBDPPMrM3MTExm8U/87CHgdVqtU2GYYwS0TCAzQkJvWDme0qpqYT2Lc1yVyQY3V/PhmEMEFE/gAEAQxr6PICZ3t7emfHx8R9FCCi0ImGEwtZ0lrWaVGyhFQmCVkKSlkCzqyoSl7iqteIyFPG+aq24xFWtFZehqrVaZKjoa9Skf9cIo5Rr2CshEVWuKhK8xM6yLMrUWn8AMZSO49QGBtUAAAAASUVORK5CYII=" alt="">
                        <p >Bcone Record</p>
                     </div>
                     <div  class="parity">
                        <table >
                           <thead >
                              <tr >
                                 <th >Period</th>
                                 <th >Price</th>
                                 <th >Number</th>
                                 <th >Result</th>
                              </tr>
                              <tr  style="border: 0px; width: 100%; display: none;">
                                 <th  colspan="4" style="height: 0px; line-height: 0;">
                                    <div  class="table_loading">
                                       <div  class="v-progress-linear__bar">
                                          <div  class="
                                             v-progress-linear__bar__indeterminate
                                             v-progress-linear__bar__indeterminate--active
                                             ">
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                long
                                                primary
                                                "></div>
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                short
                                                primary
                                                "></div>
                                          </div>
                                       </div>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody >
                              <tr >
                                 <td >20220929268</td>
                                 <td >30479</td>
                                 <td  style="color: green;">
                                    9
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929267</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929266</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929265</td>
                                 <td >30455</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929264</td>
                                 <td >30437</td>
                                 <td  style="color: green;">
                                    7
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929263</td>
                                 <td >30445</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929262</td>
                                 <td >30450</td>
                                 <td  style="color: red;">
                                    0
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929261</td>
                                 <td >30474</td>
                                 <td  style="color: red;">
                                    4
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929260</td>
                                 <td >30456</td>
                                 <td  style="color: red;">
                                    6
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929259</td>
                                 <td >30452</td>
                                 <td  style="color: red;">
                                    2
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div  class="pagination">
                        <ul  class="page_box">
                           <li  class="page"><span >1-10</span> of 2912
                           </li>
                           <li  class="page_btn">
                              <i  class="van-icon van-icon-arrow-left">
                                 <!---->
                              </i>
                              <i  class="van-icon van-icon-arrow">
                                 <!---->
                              </i>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div  class="content" style="display: none;">
                  <div  class="content_con">
                     <div  class="content_title">
                        <img  src="" alt="">
                        <p >Emerd Record</p>
                     </div>
                     <div  class="parity">
                        <table >
                           <thead >
                              <tr >
                                 <th >Period</th>
                                 <th >Price</th>
                                 <th >Number</th>
                                 <th >Result</th>
                              </tr>
                              <tr  style="border: 0px; width: 100%; display: none;">
                                 <th  colspan="4" style="height: 0px; line-height: 0;">
                                    <div  class="table_loading">
                                       <div  class="v-progress-linear__bar">
                                          <div  class="
                                             v-progress-linear__bar__indeterminate
                                             v-progress-linear__bar__indeterminate--active
                                             ">
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                long
                                                primary
                                                "></div>
                                             <div  class="
                                                v-progress-linear__bar__indeterminate
                                                short
                                                primary
                                                "></div>
                                          </div>
                                       </div>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody >
                              <tr >
                                 <td >20220929268</td>
                                 <td >30479</td>
                                 <td  style="color: green;">
                                    9
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929267</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929266</td>
                                 <td >30483</td>
                                 <td  style="color: green;">
                                    3
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929265</td>
                                 <td >30455</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929264</td>
                                 <td >30437</td>
                                 <td  style="color: green;">
                                    7
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929263</td>
                                 <td >30445</td>
                                 <td  style="color: green;">
                                    5
                                 </td>
                                 <td ><span  class="red" style="background: green;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929262</td>
                                 <td >30450</td>
                                 <td  style="color: red;">
                                    0
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span><span  class="red" style="background: violet;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929261</td>
                                 <td >30474</td>
                                 <td  style="color: red;">
                                    4
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929260</td>
                                 <td >30456</td>
                                 <td  style="color: red;">
                                    6
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                              <tr >
                                 <td >20220929259</td>
                                 <td >30452</td>
                                 <td  style="color: red;">
                                    2
                                 </td>
                                 <td ><span  class="red" style="background: red;"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div  class="pagination">
                        <ul  class="page_box">
                           <li  class="page"><span >1-10</span> of 2912
                           </li>
                           <li  class="page_btn">
                              <i  class="van-icon van-icon-arrow-left">
                                 <!---->
                              </i>
                              <i  class="van-icon van-icon-arrow">
                                 <!---->
                              </i>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div  class="content_con">
                  <div  class="content_title">
                     <img  src="" alt="">
                     <p >My Record</p>
                  </div>
                  <div  class="parity">
                     <div  class="van-collapse van-hairline--top-bottom">
                        <div  class="van-collapse-item">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928334</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-95.00</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928334</span><span  class="success">Success</span><!----><!----><span  class="success">+190.00</span><!----><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928319</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-95.00</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928222</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-95.00</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928207</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-9.50</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928207</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-9.50</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928207</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-9.50</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928207</span><span  class="success">Success</span><!----><!----><span  class="success">+85.50</span><!----><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928207</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-9.50</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                        <div  class="van-collapse-item van-collapse-item--border">
                           <div role="button" tabindex="0" aria-expanded="false" class="van-cell van-cell--clickable van-collapse-item__title">
                              <div class="van-cell__title">
                                 <div  class="myParity_info">
                                    <span  class="timenum">20220928207</span><!----><span  class="fail">Fail</span><!----><!----><span  class="fail">-9.50</span><!---->
                                 </div>
                              </div>
                              <i class="van-icon van-icon-arrow van-cell__right-icon">
                                 <!---->
                              </i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div  class="pagination">
                     <ul  class="page_box">
                        <li  class="page"><span >1-10</span> of
                           6
                        </li>
                        <li  class="page_btn">
                           <i  class="van-icon van-icon-arrow-left">
                              <!---->
                           </i>
                           <i  class="van-icon van-icon-arrow">
                              <!---->
                           </i>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div   class="footer">
            <ul  class="nav_foot">
               <li  class=""><img  src="" alt=""><span >Home</span></li>
               <li  class=""><img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAGkUlEQVRoQ9Waf4jURRTA39tVEKS0rP6wOEQo+wWhf1gphF7+oEJLQkMjTcOSTEtvZvYspQ3Mznmze5baL5SshPIHUYpF/iCDfqBiBWGZUlpdBJmmKNyBt/Nijt1l9nvf7+5+b49bfbDsst83b95n582bmTeLUKMIIe4GgEmI2AAADYV3Zj4PAH8CQBsztyHi0c7Ozl2tra2/1dhlaHPsiVEhxCxEnAgAEwDghpg2DjDzZ4i4k4i+i9k2Uj0WiFLqUWZeCABuFGoSZs4h4joAWE9Ex2syBgBVgQghpiDiMy6Eau0wpP1/DubkyZPpbdu25XpqvyKIlHI6AGwt1wEifmWt3QsApwHgX2Y+jYgDEHEIM1+dnzcuDG8rY2dnMpmc09LS4sBiS1mQChC7EXFzv3799q5atervanpuamq6NZlMTmDmBQBwS0ibtkQiMXb16tV/VGPP14kEEUK8iIjpEIPHmTljjHkrbmcF/XQ6PfjChQsCEZsAYEDQDjOPN8bsj2M/FCQKAhE3tre3L1u7du2pOJ1E6TY3N4+01q5h5ntqhekGopR6jplbQzpfSkRh39fMpJTaxMxzSkIFscNae1+1I1MCks9OO4KeEVHFpFArjZTSZcTPAzDHLl682Nja2vpXJfslDkopnaFgip1MRLsrGeqN50qpZcy8KgDzitb6+Ur2iyD5xW6z34CZs8YYNyH7TKSU+wCg0evwvLV2dCaTOVrOiSKIlPKbwIp9vKOjY2xvTexqf4mwEMuv/m5BjpQuECnlIwDwYWA0FtSSYqt1PExPSvkmADzlP7PWDstkMr9H2e0CEUKsR8SnPaXdRDS5FmdqaSulvBERv2bmawt2EHG21vr9siBSyhMAMMxrNE9r/U4tztTaVin1NjPP9+xsIqK5kSBSylEAcNhXyOVyDdls1p0l6iZKqceY+T3PgbNEdFUkSMgqfoiIRteNIN9xKpUaZK09G5i3kVsXlFJuBIB5hQbMnDbGvFRvkHwS+gIAxnm+PWSM+STMNweyJ3/S63rOzIuMMe7AU3eRUm4HgIc9R+YQkR9uxUeolPqFmW/yqGcaY0pScb2IQtLwYiJaGzoiSql2Zi5upa21kzKZjBuluotSaiUzv+A5soKIVkaF1j8AUMzXzDzVGLOz7hQAoJTKMPPSgi+IqLTWFAXiUq9LwQWZS0SbLgUQKaVbyx73wj5yt+Emu8sCUz3lJmNM9lIAEULsQMQpni+ziOiD0BEJbk+YeZ0xZtGlACKl/BEAbvd8eYCIPo0KLef0a14cHtNaj6g3SHNz8/BcLver74e19rZMJvNTVNYawcwle/1cLjcqm81+X08YKWXJDwwAR4jIH50S9wrbeEdZLM8g4hKt9Zp6ggghtiDiDM+HlUS0IsqnLhCl1KvMvNhT+nngwIFj0ul0yV6nr8CEEI2I6E6KRUHERq2127KESuE8MgMRt/gazPyyMWZ5Xznv9yOl3AUA93vfHSSiO8v5UjzqCiG+RES/vtSRTCbHtLS09OlcEUI8gYgbAk5H7rGKSarwQQgxDRE/Cgzndq21q/32iSilhjLzIQAY6nW4j4hc3bisBMtBbrPozu9+bC7SWvfJblhK6Wpq/gIIiDhNa/1xLBCl1F3M/G2wESI+qLXuVrirZDzO87AyLTO/boxx9zEVpVsFUQiRQsSWYEtm3mqMKRmtitarUHAVelfVR8SRAfX9RDS+ChNdKqGlUCmluw/pNjdc/CLi8t6qPLqJDQAGEQcHHD5FRNdVCxEJ4h5IKQ/kd8X9Qgy6K4VMT6/M8uuEq2D6KbbQzQkiGp73YToiXow9R4IOp1Kp+dbaNwAgGTJvTllrtwHA3kQisVdr7W5xIyWVSjVYa132ca+ZEYobiKirBCSl9M/rh621s6P2WWVHpNCRi+FEIuFCrdy1mVPfz8xnEPEMALiXk2sAYAgiDmPmO8qBImKxWC2EGIeIwVX8iLV2RuSmsZo4XLJkyfX9+/dfyMyu/npFNW1i6Oxzt7t++Cil7mVmdycZlEiYWPceTU1NNycSCQdTVUqsAHMwX5wOrYrk52hYfS0UJhZIwTF3Vujs7JyY/9OA++PAlVWOwA/MvCeRSOzRWpctcFQI6W4wPQIJOu1iGgAGIeIg955/dTDzuWQyeQ4AzjHzEa11W5XAXWpxYHoFJI5zcXWrhbnkQaodmcsCpBKMS92XDUhFmLgxW2/9sDnjbhAuqxEJ7DaeBYAnAcD92eDd/wHzROCR7+HNuQAAAABJRU5ErkJggg==" alt=""><span >Search</span></li>
               <li  class="active"><img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADCElEQVRoQ+2aO2gUURSGv5MEA9oJduIDLLQROxMwvmqJGvCBNkaiklkNmsKd1UBik51pElndCYoxgSBGBR9gk8KoiaBWSioLIdHOxi5CwOyV2aBmdmczszOz2S1mup055z/n/8+5Z+ZeVvB7WYbyaxqpnaaLHzxfRnmgmIgfPVewiStSSpyab61qJRiy4wrdpWqLOCbirkBckYg7IzSce0XcZne1hoLPXGIioXvBL0AZFfkE7HLg1rOZC/p3x71aaa07xiYW+Vagw2dhyBhBccbxQNFCQn9Xk0Syxh6EaUduwqiQNa4imE6G8gQtebwmiVjmY1DHCoRPCpbZCupFccvKWbTkyL/7tdBaltkO6r5LroeX9iNZ4y3C3gKW8+TUIS6l3tTEfuRWej918hJhXUGeUyT0fUtEhtJHUfK0iKliFpFutOTzqn2T2VPLMo+g1ADC1qIcRbXRmXr2f4domeOgTrhPRTUN0uJ3YkZrt1JseYSWPGnHW06kCdT7aJOoNJo0oyU/OInYv27376ZO7oLsrHQK4fDVDDl1novXPv7FKT58uDewnoWFDCKnwwWrkLdSD2hs7KKj++fyCKVPUYbMXnLqYNE0q1B+nrCKKepkks7kDTdb7+OgbHobdXIAxUEgv7BW8RpHmCSnXpNIfV0prjeR5d6WMQtsWSUic2h68bgtEbxMIqXerJWgVvBl4RGiPCKZTCMNv76sQlXm+L12O11dC34lKo9I/ivA7EWpPr8BAtmJ9JVa1KXwyidiI1nGIHA5UJLeTjfR9CveZk6LYERsjGx6BBHnPqbc6IX2So2SSLUHgQlOJHoyw2h6RxAStk84IkttdgroAXYETGICYZBOfSKgf94tPBEbJdO/gXrpAWlD2OgrIeEVOXlIIjnsyz7S8esV0R7PMt9MgzShVDNIq9NFzaBkjDWLY5y7/sMLrpzn0VTELaLbmA4wVv2SiYl4KhVXxFMiV4O4tTx1i1vLU6K4tYJJFLdWMN3CTa2oD7Z9/l3DjWpMJK9KXJES6yBuLfgDD0c21e428DwAAAAASUVORK5CYII=" alt=""><span >Win</span></li>
               <li  class=""><img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFEmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0wNy0wNlQxMToyMDoyNSswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMDctMDZUMTE6MzI6MzcrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjAtMDctMDZUMTE6MzI6MzcrMDg6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6YTc0MTM1YzQtMzMwNi05YzQ2LWE3ZWItNzdhNTJmMmMwNTE2IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOmE3NDEzNWM0LTMzMDYtOWM0Ni1hN2ViLTc3YTUyZjJjMDUxNiIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmE3NDEzNWM0LTMzMDYtOWM0Ni1hN2ViLTc3YTUyZjJjMDUxNiI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6YTc0MTM1YzQtMzMwNi05YzQ2LWE3ZWItNzdhNTJmMmMwNTE2IiBzdEV2dDp3aGVuPSIyMDIwLTA3LTA2VDExOjIwOjI1KzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PquNCzwAAAXxSURBVGiBzZptiB3lFcd/55m59+7d7DVizXZDQlJfYlsl2diNwXfxrSXUl7SSDwWhFaTFTyliWyq0GL/4SRT0m6D4RRE0UaT9ZBGDRCStWIkKitkKTXebsrDkZe9mZ55z+mFm5e6duXPv3BfZH8yHO3vOzPnPeZ7znHlmxcxo5dChQxQhIqgqFy5cwMyo1WqoKsvLy2vszIxKpSL1el0Ams2mxXFsIgJAEAR476nVajjnWFpaQlWZnp6m0WgQx3FhHAcOHFjzOyy0Lk8I3AzsFZEfqOrmZrNZB1DVpojMAZ8Bx4H3AT/MGw+EiCAiDeABEbkd2AFcBkyZ2TdPdjUTwBwwq6pfmtm7IvKGiJwbNI6BhIgIcRzvMrMDwEPAljybNjYDm83sRuBO7/3lqvoG8MkgsQwipALsWVlZ+ZOZ7csJuCsisnVlZeXPIjIjIk8CHwHFk6MD/QoJgZ3e++eBH/UjYpV0aP5UVSeBXwMn6ENMaSFp0Jd4758Crinrn0daOXcGQfBUGIYPViqVhbIPJyPE++JCEsfxZBRFDwO3kwyvoSAiY8Cds7OzDzvnXvLeny6y379//5rfGSGqWnQzvPd74zj+jXNuaCJaqCwsLDwSRdEJ7/1fymSlrJAJM7tFRLb1F2cPAYXhdufcLar6HtBzWc4IiaKoyH63iOwZZHL3gnNuxjm3CzjWs0/7CTPreABXmNmOIcbciR3AFWUcMhkZHx/PNRQRoijaGkXR5v5iK8UWM8ssrkVkhNRqtVzDtFncFEXRsPuzDGYWhmE4GYYh7U1tJzJBnTlzpsh+bNTzY5UgCMar1Wr/QhYWFnINVZVGoxHX6/XCyjYszCxqmZtdyQgJgiDXMG0lzg4WXikKh0Y7GSGNRqOjsYicVtXzwIbycfWOiJyJ4/i0977/jDiXqcitnDSzkyKys88Ye2VWVU+WccgI6fIEjqfHSIWIyHER+XsZn4yQLlXpP8BR4AFgY6noemdRRI465+bKOBWOow4cM7M3gVGULm9mR1T1A1Wl6Gin7NAC+Ap4DrgN+N4Qgm/la1V9zsxKzQ/oLyMKfC4ijwP/68O/E/8FHgc+p49s99tuLAFHRKSuqr8Fdva74qd+n5jZM8BbwHKxRz6D9E3LwIuVSmVRVX/pvb9VRC4ucwERWfTevwe87Jw7MkAsxVWr23wxM6rV6mFV/XBpaekgsC8VcxEwAbjV66XX8sB5klV7UUT+Gsfxs2Y2NzY2hpl1q5q9C1ltUcwMVf1GTKcbpP3QKTP7vZk9EwTB3SS7jdcC21V1IvU/C3wNfCwiR4F3gPn263ZakLsJHLglX93zdc6hqvPA68DbQRBUz507V5mfnw8Apqam/MTEROS9XwEuAE3vPauteq+tSCcGFtKaMeeckRSCJVWlWq2yadMmAKrV6pr63xr4MF4NBhFSI1lHrgK+C9RFZANQB8TMCMOQjRs3GoCqShq8kmTkPNAETgFfAP+iz11G6E/IFPB94EbgamAG2EZOR2xm3fbJmsCXwD9I9n6Pk8yjf5cNqoyQMeCHwM+AX5jZlWVvtkrLcKwDu9IDkqwcBl4FPiUR2hNlVvYfAy8Af6TkDkcJtgMHgVeAe8s49irkDpL2YZoki6N6cRcgAK4Engae7NWx29CqAj8XkYPAXkYnoB0BtgKPkBSP33VzKMrIOHAfSSau59sT0cqlwGPAr0gEdaRIyAzw6LfwWtsLTwD3kDzcXDoJCcxsH3DDCILqh+3AH0jegXJjzpz03hPH8YyZXTfi4EphZtNm9iA53ymhgxDgVmD3SCMrTwjcZWb35/0xIyTtVm8imWjrjUngJ+RsfGSEBEFwLUkdX69cbmZ72k/mCbkh/QeA9coGM9vbfjJvaG0h6avWK2MkjesaMkJE5BKG+LV2BFTSGNeQV5O3UbDwrAPqJO3LGvK+IZ4CBnvvHC1VYLH9ZN7mw2Ez22pmu1On9SBKSLafzgInzOy1doOMkDAMP4jj+DuquiAik8DK6OPsSmBmc8A/ReRvwIftBv8Hq5Zpb/uYVqgAAAAASUVORK5CYII=" alt=""><span >My</span></li>
            </ul>
         </div>
         <div  class="agree_zz" style="display: none;">
            <div  class="wrapper">
               <p  class="agree_title">Rule of Guess</p>
               <div  class="content_agree">
                  <div  class="contents">
                     <p >
                        3 minutes 1 issue, 2 minutes and 30 seconds to order, 30 seconds
                        to show the lottery result. It opens all day. The total number of
                        trade is 480 issues
                     </p>
                     <p >
                        If you spend 100 to trade, after deducting 2 service fee, your
                        contract amount is 98:
                     </p>
                     <p >
                        1. JOIN GREEN: if the result shows 1,3,7,9, you will get (98*2)
                        196
                     </p>
                     <p >If the result shows 5, you will get (98*1.5) 147</p>
                     <p >
                        2. JOIN RED: if the result shows 2,4,6,8, you will get (98*2) 196;
                        If the result shows 0, you will get (98*1.5) 147
                     </p>
                     <p >
                        3. JOIN VIOLET: if the result shows 0 or 5, you will get (98*4.5)
                        441
                     </p>
                     <p >
                        4. SELECT NUMBER: if the result is the same as the number you
                        selected, you will get (98*9) 882
                     </p>
                  </div>
               </div>
               <div  class="close_btn"><button >CLOSE</button></div>
            </div>
         </div>
         <div data-v-26b1e4cf=""  class="branch">
            <div data-v-26b1e4cf="" class="agree_zz" style="display: none;">
               <div data-v-26b1e4cf="" class="wrapper">
                  <p data-v-26b1e4cf="" class="branch_title" style="background: rgb(76, 175, 80);">Join Green</p>
                  <div data-v-26b1e4cf="" class="branch_content">
                     <p data-v-26b1e4cf="" class="money">Contract Money</p>
                     <div data-v-26b1e4cf="" class="choose_money">
                        <ul data-v-26b1e4cf="">
                           <li data-v-26b1e4cf="" class="active">
                              10
                           </li>
                           <li data-v-26b1e4cf="" class="">
                              100
                           </li>
                           <li data-v-26b1e4cf="" class="">
                              1000
                           </li>
                           <li data-v-26b1e4cf="" class="">
                              10000
                           </li>
                        </ul>
                     </div>
                     <p data-v-26b1e4cf="" class="money">Number</p>
                     <div data-v-26b1e4cf="" class="stepper">
                        <div data-v-26b1e4cf="" class="van-stepper"><button type="button" class="van-stepper__minus van-stepper__minus--disabled"></button><input type="text" role="spinbutton" inputmode="decimal" aria-valuemax="Infinity" aria-valuemin="1" aria-valuenow="1" class="van-stepper__input"><button type="button" class="van-stepper__plus"></button></div>
                     </div>
                     <p data-v-26b1e4cf="" class="money">
                        Total contract money is <span data-v-26b1e4cf="">10</span>
                     </p>
                     <div data-v-26b1e4cf="" class="agree_box">
                        <div data-v-26b1e4cf="" role="checkbox" tabindex="0" aria-checked="true" class="van-checkbox">
                           <div class="van-checkbox__icon van-checkbox__icon--square van-checkbox__icon--checked">
                              <i class="van-icon van-icon-success" style="border-color: rgb(0, 0, 0); background-color: rgb(0, 0, 0);">
                                 <!---->
                              </i>
                           </div>
                           <span class="van-checkbox__label">I agree
                           <span data-v-26b1e4cf="" class="greencolor">PRESALE RULE</span></span>
                        </div>
                     </div>
                     <div data-v-26b1e4cf="" class="close_btn"><button data-v-26b1e4cf="">CANCEL</button><button data-v-26b1e4cf="" style="color: rgb(0, 137, 123);">CONFIRM</button></div>
                  </div>
               </div>
            </div>
            <div data-v-26b1e4cf="" class="agree_zz" style="display: none;">
               <div data-v-26b1e4cf="" class="wrapper">
                  <p data-v-26b1e4cf="" class="agree_title">Privacy Policy</p>
                  <div data-v-26b1e4cf="" class="content_agree">
                     <div data-v-26b1e4cf="" class="contents">
                        <div >
                           <p >
                              In order to protect the legitimate rights and interests of users
                              participating in the presale and maintain the normal operation
                              order of the presale, the rules are formulated in accordance
                              with relevant agreements and rules of national laws and
                              regulations.
                           </p>
                           <p ><span  style="color: rgb(0, 150, 136); font-size: 14px;">Chapter 1 Definition</span></p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.1<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>Presale definition: refers to a sales model in which a merchant
                              provides a product or service plan, gathers consumer orders
                              through presale product tools, and provides goods and / or
                              services to consumers according to prior agreement.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.2<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>The presale model is a "deposit" model. "Deposit" refers to a
                              fixed amount of presale commodity price pre-delivered. “The
                              deposit” can participate in small games and have the opportunity
                              to win more deposits. The deposit can be directly exchanged for
                              commodities. The deposit is not redeemable.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.3<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>Presale products: refers to the products released by merchants
                              using presale product tools. Only the presale words are marked
                              on the product title or product details page, and the products
                              that do not use the presale product tools are not presale
                              products.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.4<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>Presale system: Refers to the system product tools provided to
                              support merchants for presale model sales.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.5<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>Presale commodity price: refers to the selling price of presale
                              commodity. The price of presale goods is composed of two parts:
                              deposit and final payment.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.6<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>Presale deposit: Refers to a certain amount of money that
                              consumers pay in advance when purchasing presale goods, which is
                              mainly used as a guarantee to purchase presale goods and
                              determine the purchase quota.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px;">
                              1.7<span  style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 9px; line-height: normal;">&nbsp;&nbsp; </span>Presale final payment: refers to the amount of money that the
                              consumer still has to pay after the presale commodity price
                              minus the deposit.
                           </p>
                           <p  class="MsoListParagraph" style="margin-left: 8px; text-indent: 0px;">
                              &nbsp;
                           </p>
                           <p ><span  style="color: rgb(0, 150, 136); font-size: 14px;">Chapter 2 Presale management specifications</span></p>
                           <p ><span  style="color: rgb(0, 150, 136); font-size: 13px;">2.1 Commodity management</span></p>
                           <p >
                              2.1.1 Presale deposit time: up to 7 days can be set.
                           </p>
                           <p >
                              2.1.2 Presale final payment time: The start time of the final
                              payment is within 7 days.
                           </p>
                           <p >
                              2.1.3 During the presale of commodities, the system does not
                              support merchants to modify the price of pre-sold commodities
                              (including deposits and balances), but the amount of remaining
                              commodity inventory can be modified according to the actual
                              situation of inventory.
                           </p>
                           <p >
                              2.1.4 To avoid unnecessary disputes, If the presale product is a
                              customized product, the merchant should clearly inform the
                              consumer on the product page of the production cycle and
                              delivery time of the product, and contact the consumer to
                              confirm the delivery standard, delivery time, etc.
                           </p>
                           <p >
                              2.1.5 For customized products, the merchant has not agreed with
                              the consumer on the delivery time and delivery standard, the
                              delivery standard proposed by the consumer is unclear or
                              conflicts and after the merchant places an order, he(she) starts
                              production and delivery without confirming with the consumer, if
                              the consumer initiates a dispute as a result, the platform will
                              treat it as a normal delivery time limit order fulfillment.
                           </p>
                           <p ><span  style="color: rgb(0, 150, 136); font-size: 13px;">2.2 Transaction management</span></p>
                           <p >
                              2.2.1 Consumers who use the pre-sale system will lock in the
                              pre-sale quota after placing an order for goods. If the pre-sale
                              order is overtime, the system will automatically cancel it.
                           </p>
                           <p >
                              2.2.2 During the presale period, the merchant shall not cancel
                              the presale activities without reason. For presale activities
                              that have generated orders, the merchant must not cancel the
                              order without the consumer ’s consent. If the consumer agrees,
                              the merchant should double return the deposit paid by the
                              consumer; if the consumer does not agree to cancel the order,
                              the merchant should perform the contract according to the order.
                           </p>
                           <p >
                              2.2.3 If the final payment of the presale order is not completed
                              due to consumer reasons, the merchant can deduct the deposit
                              paid by the consumer; if the merchant actively negotiates with
                              the consumer to terminate the order before paying the final
                              payment, the merchant shall double Return the deposit paid by
                              the consumer.
                           </p>
                           <p ><span  style="color: rgb(0, 150, 136); font-size: 13px;">2.3 Delivery Management</span></p>
                           <p >2.3.1 Delivery time limit setting</p>
                           <p >
                              If the merchant sets the delivery time limit through the presale
                              system, it should be shipped within the set time limit.
                           </p>
                           <p >2.3.2 Shipping way</p>
                           <p >The third-party delivery the orders.</p>
                           <p >
                              Customers need to provide your name, address and phone number to
                              facilitate third-party delivery orders.
                           </p>
                           <p ><span  style="color: rgb(0, 150, 136); font-size: 13px;">2.4 After-sales management</span></p>
                           <p >
                              Presale products shall provide after-sales service in accordance
                              with the "Regulations for After-sales Service of Platform
                              Merchants".
                           </p>
                           <p >&nbsp;</p>
                           <p ><strong >Explanation</strong></p>
                           <p >Mall transaction mode</p>
                           <p >
                              There are two ways to buy in the mall, one is full purchase, and
                              the other is deposit purchase.
                           </p>
                           <p >
                              In the mode of full purchase, you can place an order directly
                              and purchase goods in full payment.
                           </p>
                           <p >
                              The deposit purchase mode will freeze the customer's deposit,
                              and the customer will take delivery after completing the final
                              payment within 7 days. Users who have paid a deposit will be
                              given an extra point quiz game. According to the analysis of
                              market fluctuations, they have the opportunity to win more
                              points to deduct the payment or send red envelopes to friends.
                           </p>
                           <p >&nbsp;</p>
                           <p ><a ></a>The pre-order model has many benefits
                              for customers. The deposit not only generates an order for the
                              customer, but also gives the customer an equal amount of red
                              envelopes, which can be withdrawn immediately. Although the
                              deposit is not refundable, the red envelope converted from the
                              deposit can be withdrawn without any loss to the customer.
                           </p>
                           <p >&nbsp;</p>
                           <p >
                              一. After the customer pays the deposit and orders, a
                              merchandise order is generated, and the mall began to prepare
                              this order. This deposit cannot be returned. After the customer
                              needs to make up the balance, the mall will ship the goods. If
                              the customer does not make up the balance, the product order
                              will always exist.
                           </p>
                           <p >
                              二. After paying the deposit, the customer will be given a red
                              envelope account with the same amount of deposit.
                           </p>
                           <p >
                              1. The red envelope can be withdrawn directly, so that instead
                              of losing money, the customer has added a commodity order
                              generated by a deposit. And red envelopes can also be given to
                              friends.
                           </p>
                           <p ><span  style="font-size: 14px;">2. If the customer uses the red envelope account to
                              participate in the game, you can earn more red envelopes, but
                              if the game loses, the red envelope will be gone, but his
                              merchandise order is still there.</span>
                           </p>
                           <p ><br ></p>
                           <p >
                              Note: I have carefully read all contents of this presale
                              management rule, Risk Disclosure Agreement and Risk Agreement
                              and I am agreed to continue with my own risk.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div data-v-26b1e4cf="" class="close_btn" style="border-top: 1px solid rgb(224, 224, 224);"><button data-v-26b1e4cf="">CLOSE</button></div>
               </div>
            </div>
         </div>
         <div   class="loading" style="display: none;">
            <div  class="v-dialog v-dialog--persistent" style="width: 300px; display: block;">
               <div  data-v-5197ff2a="" class="v-card v-sheet theme--dark teal">
                  <div  data-v-5197ff2a="" class="v-card__text">
                     <span >Loading</span>
                     <div  data-v-5197ff2a="" role="progressbar" aria-valuemin="0" aria-valuemax="100" class="v-progress-linear mb-0" style="height: 7px;">
                        <div  class="v-progress-linear__background white" style="height: 7px; opacity: 0.3; width: 100%;"></div>
                        <div  class="v-progress-linear__bar">
                           <div  class="v-progress-linear__bar__indeterminate v-progress-linear__bar__indeterminate--active">
                              <div  class="v-progress-linear__bar__indeterminate long white"></div>
                              <div  class="v-progress-linear__bar__indeterminate short white"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="js/chunk-vendors.824d6eef.js"></script><script src="js/app.019170bb.js?id=117"></script>
   </body>
</html>