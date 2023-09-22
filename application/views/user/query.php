<?php include('header.php');?>

    <style type="text/css">

        .nav-tabs li{
            width: 32%;
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
    <style type="text/css">
        @media (max-width: 567px){
            .tab-pane {
                width: 100%;
            }
        }
        .card-game-record-tb p {
            font-size: 14px;
            margin: 0;
        }
        .text-blue {
            color: #59c5bf  !important;
        }
        .card-game-record-tb i {
            color:#59c5bf ;
            width: 22px;
            text-align: center;
        }
        .blue-bg {
            background-color: #59c5bf !important;
            color: #fff;
        }
        .card-game-record-tb .btn {
            padding: 0 5px !important;
            font-size: 12px;
        }
        .game-record-tb .nav-link.active {
            background-color: #12917e;
            color: #fff;
            border-radius: 0px;
            border-color: #12917e;
        }
        .game-record-tb li {
            text-align: center;
            margin: 0 1px;
            background-color: #ddd;
            border: 0;
            color: #fff;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
            background-color: #dddddd;
    border-bottom: 3px solid #2196F3;
    color: #2196F3;
    width: fit-content;
    margin: auto;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            background-color: #dddddd;
        }
        /*.game-record-tb .nav-item>.active{
             background-color: #12917e;
        }*/
        .game-record-tb ul{
            background-color: #dddddd;
        }
        .game-record-tb li a {
            color: #000;
            box-shadow: unset;
            margin: 0;
            border: 0;
        }
        @media (max-width: 767px){
            .card-game-record-tb span {
                display: inline-block;
                width: 134px;
                white-space: nowrap;
                overflow: hidden !important;
                text-overflow: ellipsis;
            }
        }
    </style>
    <style type="text/css">
        .main-table th{
            padding:10px 5px;
            font-size: 14px;

        }
        .main-table td{
            padding:10px 5px;
            font-size: 14px;

        }

        table td img{
            width: 15px;
            border-radius: 15px;
        }
        p {
            margin: 0 0 -16px;
        }
    
    .sp{
        margin:30px;
    }
    
    .modal-body input {
    width: 100%;
    padding: 10px 10px 10px 40px;
    box-shadow: 0px 1px 1px #dedede;
    margin-bottom: 10px;
    border: 0;
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
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
    
     <section class="p-0">
        <div class="row topbar">       
            <div class="col-xs-6">
                <a onclick="history.back(-1)"><img src="<?=BASEURL?>assets/welcome/img/back-arrow.png"></a>
                 <h2 style="color:white; ">Complaints &amp; Suggestions</h2>
               
            </div>
            <div class="col-xs-6">
                <span class="pull-right" style="margin-right:15px;">
                <a href="<?=BASEURL?>user/complaints"><img src="<?=BASEURL?>assets/user/img/plus.png"></a>
               </span>
            </div>
        </div>
    </section>  
    
        <section>
            
            
            <div class="row">
                <div class="col-12 inner-page game-record-tb" >
                    <ul class="nav nav-tabs " role="tablist" style="width: 100%;">
                        <li style="width: 50%;" class="nav-item active ">
                            <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab">COMPLETED</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">WAIT</a>
                        </li>
                        <!--<li class="nav-item  ">-->
                        <!--    <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Emerd</a>-->
                        <!--</li>-->
                    </ul>
                    <div class="tab-content mt-2 ">
                        
                            <div class="tab-pane active " id="tabs-1" role="tabpanel">
                        <?php $completed = $this->db->where('user_id',$this->session->userdata('bhpusername'))->where('status','Replied')->get('complaints')->result_array();
                        
                        foreach($completed as $com)
                        {
                        ?>
                         <div class="row">
                                <div class="tran">
                                <div class="col-xs-6"><strong><?=$com['type'];?></strong></div>
                                <div class="col-xs-6 text-right" style="margin-top:10px;"><?=$com['entry_date'];?></div>
                                <div class="col-xs-6"  style="margin-top:10px;"><p><?=$com['phone'];?></p></div>
                                <div class="col-xs-6 text-right" style="margin-top:10px;"><a data-toggle="modal" data-target="#completed<?=$com['id'];?>"><img src="<?=BASEURL?>assets/user/img/icons/info.png" width="15px" alt="logo"></a></div>
                                
                                <div class="modal fade" id="completed<?=$com['id'];?>" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true" style="margin-top:35px; height:500px; overflow:auto;">
                                  <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%; max-width: 80%; margin: auto;">
                                    <div class="modal-content" style="width:100%;">
                                
                                       <div class="modal-body">
                                          <div class="row">
                                              <div class="col-xs-12 bank-card"> 
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label>Type</label>
                                                        <input type="text" class="" value="<?=$com['type'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label>Out ID</label>
                                                        <input type="text" class="" value="<?=$com['out_id'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label>Whatsapp</label>
                                                        <input type="text" class="" value="<?=$com['phone'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label>Description</label>
                                                        <input type="text" class="" value="<?=$com['description'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    
                                                    <div class="col-xs-12">
                                                        <label>Reply</label>
                                                        <input type="text" class="" value="<?=$com['reply'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                </div>
                                              </div>
                                         </div>
                                      </div>
                                      <div class="modal-footer" style="border:0;">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: unset; font-size: 18px; color: #0081FF;">Close</button>
                                      <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="col-xs-6 text-left"  style="margin-top:13px;"><p><?=$com['complaint_id'];?></p></div>
                                </div>
                            </div><hr>
                            <?php } ?>
                            </div>
                            
                            <div class="tab-pane  " id="tabs-4" role="tabpanel">
                               <?php $pending = $this->db->where('user_id',$this->session->userdata('bhpusername'))->where('status','Pending')->get('complaints')->result_array();
                        
                        foreach($pending as $comm)
                        {
                        ?>
                         <div class="row sp">
                                <div class="tran">
                                <div class="col-xs-6"><strong><?=$comm['type'];?></strong></div>
                                <div class="col-xs-6 text-right" style="margin-top:10px;"><?=$comm['entry_date'];?></div>
                                <div class="col-xs-6"  style="margin-top:10px;"><p><?=$comm['phone'];?></p></div>
                                <div class="col-xs-6 text-right" style="margin-top:10px;"><a data-toggle="modal" data-target="#wait<?=$comm['id'];?>"><img src="<?=BASEURL?>assets/user/img/icons/loading.png" width="15px" alt="logo"></a></div>
                                
                                <div class="modal fade" id="wait<?=$comm['id'];?>" tabindex="-1" role="dialog" aria-labelledby="noteModalCenterTitle" aria-hidden="true" style="margin-top:20px;">
                                  <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%; max-width: 80%; margin: auto;">
                                    <div class="modal-content" style="width:100%;">
                                
                                      <div class="modal-body">
                                          <div class="row">
                                              <div class="col-xs-12 bank-card"> 
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label>Type</label>
                                                        <input type="text" class="" value="<?=$comm['type'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label>Out ID</label>
                                                        <input type="text" class="" value="<?=$comm['out_id'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label>Whatsapp</label>
                                                        <input type="text" class="" value="<?=$comm['phone'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <label>Description</label>
                                                        <input type="text" class="" value="<?=$comm['description'];?>" style="margin-top:40px;" readonly>
                                                    </div>
                                                </div>
                                              </div>
                                         </div>
                                      </div>
                                      <div class="modal-footer" style="border:0;">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: unset; font-size: 18px; color: #0081FF;">Close</button>
                                      <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="col-xs-6 text-left"  style="margin-top:13px;"><p><?=$comm['complaint_id'];?></p></div>
                                </div>
                              
                            </div><hr>
                            <?php } ?>
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>
 
 <?php include('footer.php');?>
 
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
<script type="text/javascript">
    $(window).on("load",function(){
        $(".loader").fadeOut("slow");
    });
</script>