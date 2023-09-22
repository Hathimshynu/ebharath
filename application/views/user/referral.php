<?php include('header.php');?>

    <style type="text/css">
        .dataTables_length{
            display: none;
        }
        .level_one th{
            border-bottom: 0 !important;
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - (0.5rem * 2));
        }
        @media (min-width: 576px){
            .modal-dialog-centered {
                min-height: calc(100% - (1.75rem * 2));
            }
        }
        @media (min-width: 768px){
            .modal-dialog {
                width: 600px;
                margin: 0 auto;
            }
        }
        .nav-tabs.li.active>a{
            border-bottom: 1px solid #3690f0 !important;
            background-color: #189986 !important;
        }
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        /* Style the close button */
        .topright {
            float: right;
            cursor: pointer;
            font-size: 28px;
        }
        .level{
            width: 50%;
        }
        #level-1{
            text-align: center;
            border: none;
        }
        #level-1 h3{
            font-size:17px;

        }
        #level-1 h6{
            font-size:25px;
        }
        .tab .level{
            background: #e9e9e9;
        }
        .tab .level.active{
            background-color: #fff;
            border-bottom: 1px solid #08326f !important;
        }
    </style>


    

    <style type="text/css">
        .dropdown-menu{
            right: 0;
            left: unset;
        }
        .m-0{
            margin: 0 !important;
        }
        .dropdown-menu a{
            text-decoration: none;
            color: #000; font-size: 14px; line-height: 2.5;
        }
        .dropdown{
            position: absolute;right: 15px;font-size: 20px;margin: 3px; top:0;
        }
        .dropdown button{
            background:none;color: #fff;
        }
        .dropdown button:hover{
            color: #fff;
        }
        .dropdown button:focus{
            color: #fff;
        }
        .dropdown-menu{
            border: 0; padding: 10px;
            min-width: 86vw;
        }

    </style>
    <style type="text/css">
        .apply-btn:hover{
            color: #fff;
        }
        .apply-btn:focus{
            color: #fff;
        }
        .bank-card label{
            position: relative;
            margin-top: unset;
            left: unset;
            display: flex;
            color: #b3b3b3;
            font-weight: 500;
        }
        .copy-btn{
            width: 50%;
            padding: 10px 15px;
            font-size: 14px;
            border: 0;
            background: #f5f5f5;
            border-radius: 2px;
            box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
        }
        .record-tb li.active>a {
            background-color: #DDDDDD;
            border: 1px solid #DDDDDD;
            border-radius: 0;
            box-shadow: 0px 1px 0px #dddddd;
        }
        .record-tb li.active>a:focus {
            background-color: #ddd;
            border: 1px solid #ddd;
            border-radius: 0;
            box-shadow: 0px 1px 0px #ddd;
        }
        .record-tb ul {
            background-color: #ffffff;
        }
        .record-tb li a {
            color: #000 !important;
            margin-right: 0;
            border: 1px solid #fff;
            border-radius: 0;
            box-shadow: 0px 1px 0px #fff;
        }
        .record-tb li a:hover {
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 0;
            margin-right: 0;
            color: #000;
        }
        .record-tb li.active>a:hover {
            background-color: #ddd;
            border: 1px solid #ddd;
            border-radius: 0;
        }
        .main-table th{
            text-align: center;
            font-weight: 500;

        }
        .main-table td{
            text-align: center;


        }
        .topbar a {
            position: relative;
        }
    </style>

    <style>
        .simple-pagination ul {
            margin: 0 0 20px;
            padding: 0;
            list-style: none;
            text-align: center;
        }
        #pagination-container{
            float: right;
        }
        #pagination-container2{
            float: right;
        }
        #pagination-container3{
            float: right;
        }


        .simple-pagination li {
            display: inline-block;
            margin-right: 5px;

        }

        .simple-pagination li a,
        .simple-pagination li span {
            color: #666;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #EEE;
            background-color: #FFF;
            box-shadow: 0px 0px 10px 0px #EEE;
        }

        .simple-pagination .current {
            color: #999;
            background-color: #FF7182;
            border-color: #FF7182;
        }

        .simple-pagination .prev.current,
        .simple-pagination .next.current {
            background: #fff;
        }
        .simple-pagination li a, .simple-pagination li span{
            background-color: #fff;
            color: #999 !important;
            border-radius: 50px;
            border: none;
            padding: 0 9px;
            font-size: 22px;
        }

        #pagination-container a span{
            background: #000;
        }
        #pagination-container2 a span{
            background: #000;
        }
        #pagination-container3 a span{
            background: #000;
        }
        .border-0{
            border: 0 !important;
        }
        .show-paging-next i{
            font-size: 20px;
            float: left;
            text-align: left;
        }
        .show-paging-right i{
            font-size: 20px;
            float: right;
            text-align: right;
        }
        .table-search {
            padding: 10px;
        }
        .table-search input{
            background-color: #F7F8FA;
            border: 0;
            padding: 10px 10px 10px 38px;
        }
        .table-search label{
            position: absolute;
            padding: 10px;

        }
        .table-search i{
            color: #333;

        }
        .dataTables_info{
            text-align: center;
        }
        .level_one th{
            font-weight: 500;
        }
        .dataTables_length{
            display: none;
        }
        .level_one th{
            border-bottom: 0 !important;
        }

    </style>

<script>
        function sharel(){
            if (location.protocol !== 'https:') {
        
                var rtextarea = document.createElement("textarea");
                document.body.appendChild(rtextarea);
                rtextarea.value = '<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpusername'))?>'; //save main text in it
                rtextarea.select(); //select textarea contenrs
                document.execCommand("copy");
                document.body.removeChild(rtextarea);
               } else {
                let shareData = {
                  title: '<?=$comp['company_name']?>',
                  text: '<?=$comp['company_name']?>',
                  url: '<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpsername'))?>',
              }
              navigator.clipboard.writeText('<?=BASEURL."user/register/".bin2hex($this->session->userdata('bhpusername'))?>');
              navigator.share(shareData);
              
            }
        } 
    </script>

</head>
<body class="" style="">
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
            <a onclick="history.back(-1)"><img src="<?=BASE_URL();?>assets/welcome/img/back-arrow.png" style="position: absolute; top:10px;"></a>
            <h2 style="color:white;">Promotion</h2>
            <div class="dropdown">
            <button class="btn btn-secondary fa fa-align-right dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             </button>
             
           <!--<div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton">-->
           <!--         <p class="m-0"><a class="dropdown-item" href="#">Bonus Record</a></p>-->
           <!--         <p class="m-0"><a class="dropdown-item" href="#">Apply Record</a></p>-->
           <!--     </div>-->
            </div>
        </div>
    </div>
</section>

<div class="page-inner">
    <section>
        <div class="row">
            <div class="col-md-12 p-0">
                <script>
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
        $('.flashMessage').fadeOut('fast');
    },2000);
</script>
                <div class="card" style="box-shadow: none;">
                    <?php $llevel = $this->db->select_sum('credit')->where('user_id',$this->session->userdata('bhpusername'))->where('remark','Level')->get('wallet')->row()->credit+0; ?>
                    <h2 style="text-align: center; padding: 15px 0; font-size: 24px;">Level Income: ₹ <?=number_format($llevel,2)?></h2>
                </div>
            <!--  <div class="card">
                        <h2 style="text-align: center; padding: 10px 0;">Balance: &#8377; 0.00</h2>
                    </div> -->
            </div>
            <div class="col-md-12">
                <div class="card pt-3 pb-3" style="box-shadow: none; margin: 0">
                    <div class="row">
                        <div class="col-xs-6 p-0">
                            <div class="text-center">
                                <p class="text-blue">Total People</p>
                                <?php $total_people = $this->db->like('team',$this->session->userdata('bhpusername'))->count_all_results('user_role')+0; ?>
                                <h4 class="text-blue"><span id="totalMembers"><?=$total_people?></span></h4>
                            </div>
                        </div>
                        <div class="col-xs-6 p-0">
                            <div class="text-center">
                                 <?php $contribution = $this->db->select_sum('pet_amount')->where('user_id',$this->session->userdata('bhpusername'))->get('game')->row()->pet_amount+0; ?>
                                <p class="text-blue">Contribution</p>
                                <h4 class="text-blue">Rs.<?=$contribution?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 p-0">
                <div class="card card-promo m-0">
                    <p>Promotion Code: <br>
                        <a target="_blank" style="color:#000;" href="javascript:void(0);" id="p6">
                           <?=$this->session->userdata('bhpusername');?>
                        </a>
                        <!--<i class="fa fa-clone text-right" aria-hidden="true" onClick="copyToClipboard2('#p6')"></i>-->
                    </p>
                </div>
                <?php 
                $invest = $this->db->select_sum('credit')->where('user_id',$this->session->userdata('bhpusername'))->where('remark','Profit')->get('wallet')->row()->credit+0;
                
                if($invest > 0)
                {
                
                ?>
                
                
                <div class="card card-promo">
                    <p style="height: 70px;">Promotion Link: <br>
                        <a style="color:#000;" target="_blank" href="https://backofficee.com/bharatpay/user/register/<?=bin2hex($this->session->userdata('bhpusername'))?>" id="p2">
                            https://backofficee.com/bharatpay/user<br>/register/<?=bin2hex($this->session->userdata('bhpusername'));?>
                        </a>
                        <!--<i class="fa fa-clone text-right" aria-hidden="true" onClick="copyToClipboard2('#p2')"></i>-->
                    </p>
                </div>
            </div>
            <div class="col-md-12 p-0">
                <div class="row">
                    <div class="col-xs-12 p-0" style="text-align: center;">
                        <a style="color:#000;" type="button" class="btn copy-btn" id="myclick" onclick="sharel()">Copy Link</a>
                    </div>
                <!--  <div class="col-xs-8" style="padding-right: 0;"><a href="javascript:void(0)" data-toggle="modal" data-target="#confirmModal" type="button" class="btn apply-btn">Apply To Balance</a></div> -->
                </div>
            </div>
            <?php } ?>
            <div class="col-md-12 inner-page record-tb p-0" style="margin-top:50px; ">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                            
                            <?php 
                              //$le = $this->db->where('ref_id',$this->session->userdata('bhpusername'))->count_all_results('user_role')+0;
                                $le1 = $this->db->where('ref_id',$this->session->userdata('bhpusername'))->get('user_role')->result_array();
                                $lev1_count = count($le1);
                                $l2count = 0;
                                $l3count = 0;
                                foreach($le1 as $l1)
                                {
                                   $le2 = $this->db->where('ref_id',$l1['user_name'])->get('user_role')->result_array();
                                   
                                   foreach($le2 as $l2)
                                   {
                                      $le3 = $this->db->where('ref_id',$l2['user_name'])->get('user_role')->result_array();    
                                       $l3count++;
                                   }
                                   $l2count++;
                                }
                                
                                
                                 
                           ?>
                    
                                            <li class="nav-item text-center" style="width: 33.33%;">
                            <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab">Level 1 (<span id="firstLevel"><?=$lev1_count;?></span>)</a>
                        </li>
                                        
                                            <li class="nav-item text-center" style="width: 33.33%;">
                            <a class="nav-link" href="#tabs-2" data-toggle="tab" role="tab">Level 2 (<span id="secondLevel"><?=$l2count;?></span>)</a>
                            
                        </li>
                    
                    
                                            <li class="nav-item text-center" style="width: 33.33%;">
                            <a class="nav-link" href="#tabs-3" data-toggle="tab" role="tab">Level 3 (<span id="thirdLevel"><?=$l3count;?></span>)</a>
                            
                        </li>
                                    </ul><!-- Tab panes -->
                <div class="tab-content">
                    
                                            <div class="tab-pane active p-3 border " id="tabs-1" role="tabpanel">
                            <div class="table-search">
                                <label><i style="margin-top:4px;" class="fa fa-search" aria-hidden="true"></i></label>
                                <input type="text" class="w-100" name="" placeholder="search" style="background-color:#F7F8FA;">
                            </div>

                            <div class="table-responsive border-0">
                                <table id="level_one" class="list-wrapper table level_one" style="width:100%">
                                    <tr>
                                        <th>Id</th>
                                        <th>Phone</th>
                                        <th>Water Reward</th>
                                        <th>Recharge Reward</th>
                                    </tr>
                                     <tbody>
                                      <?php 
                                       $level1 = $this->db->where('ref_id',$this->session->userdata('bhpusername'))->get('user_role')->result_array();
                                      foreach($level1 as $lev)
                                      {
                                        $first_reward = $this->db->select_sum('credit')->where('user_id',$lev['ref_id'])->where('description',$lev['user_name'])->where('remark','Referral')->get('wallet')->row()->credit+0;
                                        $total = $this->db->select_sum('credit')->where('remark','Level')->where('user_id',$lev['ref_id'])->where('from_user',$lev['user_name'])->get('wallet')->row()->credit;
                                      ?>
                                       <tr>
                                         <td><?=$lev['user_name'];?></td>
                                         <td><?=$lev['phone'];?></td>
                                         <td><?=number_format($total,2)?></td>
                                         <td><?=$first_reward;?></td>
                                        </tr>
                                     </tbody>
                                     <?php
                                      }
                                     ?>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-9 p-0">
                                    <div class="show-paging text-center">
                                        1 of 1
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div id="pagination-container" class="light-theme simple-pagination"><ul><li class="active"><span class="current prev">‹</span></li><li class="active"><span class="current next">›</span></li></ul></div>
                                </div>
                            </div>

                        </div>
                    
                    
                                            <div class="tab-pane p-3 border " id="tabs-2" role="tabpanel">
                            <div class="table-search">
                                <label><i style="margin-top:4px;" class="fa fa-search" aria-hidden="true"></i></label>
                                <input type="text" class="w-100" name="" placeholder="search" style="background-color:#F7F8FA;">
                            </div>
                            <div class="table-responsive border-0">
                                <table id="level_one2" class="list-wrapper2 table" style="width:100%">
                                    <tbody><tr>
                                        <th>Id</th>
                                        <th>Phone</th>
                                        <th>Water Reward</th>
                                        <!--<th>First Reward</th>-->
                                    </tr>
                                    <tbody>
                                     <?php 
                                       //$level2 = $this->db->where('ref_id',$this->session->userdata('bhpusername'))->get('user_role')->result_array();
                                      foreach($level1 as $levv)
                                      {
                                       $level2 = $this->db->where('ref_id',$levv['user_name'])->get('user_role')->result_array();
                                       foreach($level2 as $gr)
                                       {
                                      $total1 = $this->db->select_sum('credit')->where('remark','Level')->where('user_id',$levv['ref_id'])->where('from_user',$gr['user_name'])->get('wallet')->row()->credit+0;
                                      ?>
                                       <tr>
                                         <td><?=$gr['user_name'];?></td>
                                         <td><?=$gr['phone'];?></td>
                                         <td><?=number_format($total1,2)?></td>
                                        </tr>
                                     
                                     <?php
                                       }
                                      }
                                     ?>
                                    </tbody>
                                                                    </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-9 p-0">
                                    <div class="show-paging text-center">
                                        1 of 1
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div id="pagination-container2" class="light-theme simple-pagination"><ul><li class="active"><span class="current prev">‹</span></li><li class="active"><span class="current next">›</span></li></ul></div>
                                </div>
                            </div>
                        </div>

                    


                    
                                            <div class="tab-pane p-3 border " id="tabs-3" role="tabpanel">
                            <div class="table-search">
                                <label><i style="margin-top:4px;" class="fa fa-search" aria-hidden="true"></i></label>
                                <input type="text" class="w-100" name="" placeholder="search" style="background-color:#F7F8FA;">
                            </div>
                            <div class="table-responsive border-0">
                                <table id="level_one3" class="list-wrapper3 table" style="width:100%">
                                    <tr>
                                        <th>Id</th>
                                        <th>Phone</th>
                                        <th>Water Reward</th>
                                        <!--<th>First Reward</th>-->
                                    </tr>
                                    
                                       <tbody>
                                     <?php 
                                      foreach($level1 as $levv)
                                      {
                                      $level2 = $this->db->where('ref_id',$levv['user_name'])->get('user_role')->result_array();
                                       foreach($level2 as $grr)
                                       {
                                        $level3 = $this->db->where('ref_id',$grr['user_name'])->get('user_role')->result_array();
                                        foreach($level3 as $lv3)
                                         {
                                       $total2 = $this->db->select_sum('credit')->where('remark','Level')->where('user_id',$levv['ref_id'])->where('from_user',$lv3['user_name'])->get('wallet')->row()->credit+0;
                                      ?>
                                       <tr>
                                         <td><?=$lv3['user_name'];?></td>
                                         <td><?=$lv3['phone'];?></td>
                                         <td><?=number_format($total2,2)?></td>
                                        </tr>
                                     
                                     <?php
                                       }
                                      }
                                     }
                                     ?>
                                    </tbody>
                                    </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-9 p-0">
                                    <div class="show-paging text-center">
                                        1 of 1
                                    </div>
                                </div>
                                <div class="col-xs-3 p-0">
                                    <div id="pagination-container3" class="light-theme simple-pagination"><ul><li class="active"><span class="current prev">‹</span></li><li class="active"><span class="current next">›</span></li></ul></div>
                                </div>
                            </div>
                        </div>
                                    </div>
            </div>

        </div>
    </section>
</div>

<?php include('footer.php');?>



<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 500px;">
        <div class="modal-content rounded-0">
            <div class="modal-header btn-pop-head btn-pop-head-green" style="background-color: #bbbbbb !important">
                Apply To Balance
            </div>
            <div class="modal-body" style="padding-bottom: 0;">
                <div class="row">
                    <div class="col-md-12 col-xs-12 bank-card p-0">
                        <form method="get" action="#">
                            <div class="form-group">
                                <label for="amount">Bonus *</label>
                                <input required="" type="number" min="100" step="any" name="amount" id="amount" placeholder="Bonus *">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn copy-btn" style="color:#000; max-width: 200px;">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noteModalCenter" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%; max-width: 80%; margin: auto;">
        <div class="modal-content" style="width:100%;">

            <div class="modal-body" style="overflow: auto;height: 300px;">
                <h3>Notice</h3>
                <p>When your friends trade, you will also receive a 30% commission. Therefore, the more friends you invite, the higher your commission. There is a fixed income every day, the commission is permanent, but the reward is only onceWhen they make money, they will invite their friends to join them, and then you can get a 20% commission. In this way, your team can spread quickly. Therefore, I hope everyone can use our platform to make money, make money, and make money!When they make money, they will invite their friends to join them, and then you can get a 20% commission. In this way, your team can spread quickly. Therefore, I hope everyone can use our platform to make money, make money, and make money!Level 1 commission: Friends who join through your own link belong to your level, when they trade, you will get 30% commission.Tier 2 commission: Friends who join through your friend link belong to your secondary commission. When they trade, you can get 20% commission.Level 3 commission: Friends who join through friends of friends belong to your level 3. When they trade, you get 10% commission.Promotional rewards: 10% bonus amount for the first recharge after the first-level lower level joins. If your friend joins through your invitation and recharges 1000 for the first time, you will get 200</p>
            </div>
            <div class="modal-footer" style="border:0;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: unset; font-size: 18px; color: #0081FF;">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?=BASE_URL();?>assets/user/js/popper.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=BASE_URL();?>assets/user/js/jquery.simplePagination.js"></script>
<script>
    function copyToClipboard2(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        document.getElementById('myclick').innerHTML='COPIED';
    }

    function openlevel(evt, Name) {
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
<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#noteModalCenter').modal('show');
    });
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
        }
    });

    var items2 = $(".list-wrapper2 .list-item");
    var numItems2 = items2.length;
    var perPage2 = 10;
    items2.slice(perPage2).hide();
    $('#pagination-container2').pagination({
        items: numItems2,
        itemsOnPage: perPage2,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber2) {
            var showFrom = perPage2 * (pageNumber2 - 1);
            var showTo = showFrom + perPage2;
            items2.hide().slice(showFrom, showTo).show();
        }
    });

    var items3 = $(".list-wrapper3 .list-item");
    var numItems3 = items3.length;
    var perPage3 = 10;
    items3.slice(perPage3).hide();
    $('#pagination-container3').pagination({
        items: numItems3,
        itemsOnPage: perPage3,
        prevText: "&#8249;",
        nextText: "&#8250;",
        onPageClick: function (pageNumber3) {
            var showFrom = perPage3 * (pageNumber3 - 1);
            var showTo = showFrom + perPage3;
            items3.hide().slice(showFrom, showTo).show();
        }
    });
</script>


</body></html>