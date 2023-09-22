<?php include('header.php');?>

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
    
     <section class="p-0">
        <div class="row topbar">       
            <div class="col-xs-12">
                <a onclick="history.back(-1)"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png"></a>
                <h2 style="color:white;">Game Records</h2>
               
            </div>
        </div>
    </section>  
    
        <section>
        <div class="tab">
            <div class="row-tab">
            <button class="tablinks active" data-value="1" onclick="opentab(event, 'Parity')" id="defaultOpen">Gold</button>
            
            <button class="tablinks" id="sapre" data-value="2" onclick="opentab(event, 'Bcone')">Diamond</button>
            </div>
            <!--<button class="tablinks" data-value="4" onclick="opentab(event, 'Emerd')"   >Emerd</button>-->
        </div>
                        <!--parity-->
                        
                    <div id="Parity" class="tabcontent" style="display: block;">
               

                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i><br>Gold Records</h6></a>
               
                           
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
                                       
                                       $game_id = $this->db->order_by('id','DESC')->where('game_type','Parity')->get('games')->row()->game_id;
                                       
                                       $news = $this->db->order_by('id','DESC')->where('game_id !=',$game_id)->where('date(entry_date) >',$old_date)->where('game_type','Parity')->get('games')->result_array();
                                       //log_message('error',$this->db->last_query());
                                        

                                        //$news = $this->db->where('status', 'Win')->where('date(entry_date) >='  ,$old_date)->where('date(entry_date) <=' ,$today)->where('game_type','Parity')->get('game')->result_array();
                                        
                                        $count=1; foreach ($news as $key => $n) { 
                                        
                                        $winn=$this->db->where('game_id',$n['game_id'])->get('game')->row()->wincode+0;
                                        $winn = $n['wincode'];
                                       // $rand = substr( $n['game_id'], -min( strlen( $n['game_id'] ), 4 ) );
                                        
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
                                            <td><?=$n['prices'].$n['wincode']?></td>
                                            <td style="color:<?=$colort?>;"><?=$winn?></td>
                                             <td class="<?=$text_color?>"><img src="<?=BASEURL?>assets/welcome/img/<?=$text_color?>.png"><?php if($winn == 0 ||$winn == 5){ ?> <img src="<?=BASEURL?>assets/welcome/img/<?=$col?>.png"> <?php }?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                           
                    <div class="show-tb-count"><span class="now_page">1</span>-<span id="next_page">10</span> of <span id="total_pages">40</span></div>
                <div id="pagination-container" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">
                </span>
                </li>
                <li>
                    <a href="#" class="page-link next">›</a></li></ul></div>
                    
                    <!--Parity History-->
                    
                    
                    
                    
                     </div>
                            
                            
                            <!--sapre-->
            <?php $sgame_id = $this->db->order_by('id','DESC')->where('game_type','Sapre')->get('games')->row()->game_id; ?>
            <div id="Bcone" class="tabcontent" style="display: block;">
                
                
                <a href="#"><h6 class="record-box"><i class="fa fa-trophy" aria-hidden="true"></i><br>Diamond Records</h6></a>
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
                                       
                                        $sgame_id = $this->db->order_by('id','DESC')->where('game_type','Sapre')->get('games')->row()->game_id;
                                       
                                       $newss = $this->db->order_by('id','DESC')->where('game_id !=',$sgame_id)->where('date(entry_date) >',$old_date)->where('game_type','Sapre')->get('games')->result_array();
                                        
                                        

                                        //$news = $this->db->where('status', 'Win')->where('date(entry_date) >='  ,$old_date)->where('date(entry_date) <=' ,$today)->where('game_type','Parity')->get('game')->result_array();
                                        
                                        $count=1; foreach ($newss as $key => $nn) { 
                                            
                                        $winnn=$this->db->where('game_id',$nn['game_id'])->get('game')->row()->wincode+0;
                                        
                                        $winnn= $nn['wincode'];
                                      
                                         //$randd = substr( $nn['game_id'], -min( strlen( $nn['game_id'] ), 4 ) );
                                         
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
                                            <td><?=$nn['prices'].$nn['wincode']?></td>
                                            <td style="color:<?=$colortt?>;"><?=$winnn?></td>
                                             <td class="<?=$text_colorr?>"><img src="<?=BASEURL?>assets/welcome/img/<?=$text_colorr?>.png"><?php if($winnn == 0 ||$winnn == 5){ ?> <img src="<?=BASEURL?>assets/welcome/img/<?=$coll?>.png"> <?php }?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    
                                </table>
                <div class="show-tb-count"> 1-10 of 40</div>
                <div id="pagination-container2" class="light-theme simple-pagination "><ul><li class="active"><span class="current prev">‹</span></li><li><a href="#" class="page-link next">›</a></li></ul></div>


        
                  </div>          
                            
    <!--history-->
                            
                            
                            
                            
            </section>
 
 <?php include('footer.php');?>
 
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

<?php 
$parity_pages = $this->db->order_by('id','DESC')->where('game_id !=',$game_id)->where('date(entry_date) >',$old_date)->where('game_type','Parity')->count_all_results('games');
$div_pages = $parity_pages/10;
$total_pages = floor($div_pages);
?>
 
<script type="text/javascript">
    

    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 10;
    document.getElementById("total_pages").innerHTML = <?=$total_pages?>;
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
 
 
 


</body></html>