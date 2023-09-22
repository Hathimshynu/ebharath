	<?php include('header.php')?>
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
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Winner Result</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="#">Manage Winner Result</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage winner result</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
                       <div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						    
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Gold</button>
                  </li>
                  
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Diamond</button>
                  </li>
                  
                </ul></div></div>



                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="row">
    										<div class="col-lg-3">
    											<div><h id="cound">countdown:<br><span> <h6 id="countdown"><?=gmdate("i:s", $differenceInSeconds)?></h6></span></h></div>
    										</div>
    										<div class="col-lg-3">
    										    <?php $game_id = $this->db->order_by('id','DESC')->where('game_type','Parity')->get('games')->row()->game_id; 
    										    
    										    $gzero_count=$this->db->where('game_id',$game_id)->like('gcode',0)->count_all_results('game')+0;
    										    $gzero_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',0)->get('game')->row()->pet_amount+0;
    										    $gone_count=$this->db->where('game_id',$game_id)->like('gcode',1)->count_all_results('game')+0;
    										    $gone_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',1)->get('game')->row()->pet_amount+0;
    										    $gtwo_count=$this->db->where('game_id',$game_id)->like('gcode',2)->count_all_results('game')+0;
    										    $gtwo_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',2)->get('game')->row()->pet_amount+0;
    										    $gthree_count=$this->db->where('game_id',$game_id)->like('gcode',3)->count_all_results('game')+0;
    										    $gthree_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',3)->get('game')->row()->pet_amount+0;
    										    $gfour_count=$this->db->where('game_id',$game_id)->like('gcode',4)->count_all_results('game')+0;
    										    $gfour_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',4)->get('game')->row()->pet_amount+0;
    										    $gfive_count=$this->db->where('game_id',$game_id)->like('gcode',5)->count_all_results('game')+0;
    										    $gfive_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',5)->get('game')->row()->pet_amount+0;
    										    $gsix_count=$this->db->where('game_id',$game_id)->like('gcode',6)->count_all_results('game')+0;
    										    $gsix_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',6)->get('game')->row()->pet_amount+0;
    										    $gseven_count=$this->db->where('game_id',$game_id)->like('gcode',7)->count_all_results('game')+0;
    										    $gseven_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',7)->get('game')->row()->pet_amount+0;
    										    $geight_count=$this->db->where('game_id',$game_id)->like('gcode',8)->count_all_results('game')+0;
    										    $geight_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',8)->get('game')->row()->pet_amount+0;
    										    $gnine_count=$this->db->where('game_id',$game_id)->like('gcode',9)->count_all_results('game')+0;
    										    $gnine_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id)->like('gcode',9)->get('game')->row()->pet_amount+0;
    										    ?>
    										    
    											<div><h>Active Period Id:<br><span><?=$game_id?></span></h></div>
    										</div>
    
    										<div class="col-lg-3">
    											<div><h>
    
    											</h></div>
    										</div>
    
    										<!--<div class="col-lg-3">-->
    										<!--	<div class="col-xs-3">-->
              <!--                                      <div class="main-input pull-right">-->
              <!--                                          <label>Do you want manual result ?</label>-->
              <!--                                          <div class="ml-0">-->
              <!--                                              <div class="btn-group btn-group-toggle padd-l-15" data-toggle="buttons">-->
              <!--                                            <label class="btn btn-secondary ">-->
              <!--                                            <input class="switchbutton" type="radio" name="switch" id="switchyes" value="yes"> Yes </label>-->
              <!--                                             <label class="btn btn-secondary active">-->
              <!--                                           <input type="radio" class="switchbutton" name="switch" id="switchno" value="no" checked=""> No </label>-->
              <!--                                            </div>-->
              <!--                                          </div>-->
              <!--                                      </div>-->
              <!--                                  </div>-->
    									 <!--   </div>-->
									    </div>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											 <table class="table table-bordered text-nowrap border-bottom" id="parity">

												<thead>
													<tr>
														<th class="wd-20p">Result</th>
														<th class="wd-25p">Number</th>
														<th class="wd-20p">No of User</th>
														<th class="wd-15p">Amount</th>
														<th class="wd-20p">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Red+<span>Violet</span></td>
														<td>0</td>
														<td><?=$gzero_count?></td>
														<td><?=$gzero_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '0'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>1</td>
														<td><?=$gone_count?></td>
														<td><?=$gone_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '1'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>2</td>
														<td><?=$gtwo_count?></td>
														<td><?=$gtwo_sum?></td>
													<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '2'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>3</td>
														<td><?=$gthree_count?></td>
														<td><?=$gthree_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '3'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>4</td>
														<td><?=$gfour_count?></td>
														<td><?=$gfour_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '4'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Green+<span>Violet</span></td>
														<td>5</td>
														<td><?=$gfive_count?></td>
														<td><?=$gfive_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '5'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>6</td>
														<td><?=$gsix_count?></td>
														<td><?=$gsix_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '6'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>7</td>
														<td><?=$gseven_count?></td>
														<td><?=$gseven_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '7'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>8</td>
														<td><?=$geight_count?></td>
														<td><?=$geight_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '8'  data-utr ='Parity'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>9</td>
														<td><?=$gnine_count?></td>
														<td><?=$gnine_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id?>' data-number = '9'  data-utr ='Parity'>Win</a>
													</tr>
													
													
												</tbody>
											</table>
										</div>

									<!--<nav aria-label="Page navigation example">-->
									<!--<div class="d-flex justify-content-end">-->
								 <!-- <ul class="pagination mt-2 ">-->
								 <!--   <li class="page-item">-->
								 <!--     <a class="page-link" href="#" aria-label="Previous">-->
								 <!--       <span aria-hidden="true">&laquo;</span>-->
								 <!--       <span class="sr-only">Previous</span>-->
								 <!--     </a>-->
								 <!--   </li>-->
								 <!--   <li class="page-item"><a class="page-link" href="#">1</a></li>-->
								 <!--   <li class="page-item"><a class="page-link" href="#">2</a></li>-->
								 <!--   <li class="page-item"><a class="page-link" href="#">3</a></li>-->
								 <!--   <li class="page-item">-->
								 <!--     <a class="page-link" href="#" aria-label="Next">-->
								 <!--       <span aria-hidden="true">&raquo;</span>-->
								 <!--       <span class="sr-only">Next</span>-->
								 <!--     </a>-->
								 <!--   </li>-->
								 <!-- </ul></div>-->
         <!--                          </nav>-->
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
    <div class="modal-content">
         <?php  echo form_open('admin/winning_announcement');?>  
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Really?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
             <p id="modelhead">Do You Want to Continue</p>
            <input type="hidden" id="hids" name="hids">
            <input type="hidden" id="game_code" name="game_code">
            <input type="hidden" id="game" name="game">
            <div class="col-md-12 mb-3">
                <textarea id="description" class="form-control" name="remark" style="display:none"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button id="modalbtn" type="submit" class="btn btn-success">Yes</button>
            <button type="button" class="btn btn-danger" data-data-bs-dismiss="modal">No</button>
        </div>
       <?php  echo form_close('');?>  
    </div>
  </div>
                    </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										  <div class="row">
										<div class="col-lg-3">
											<div><h>countdown:<br><span> <h6 id="countdown123"><?=gmdate("i:s", $differenceInSeconds1)?></h6></span></h></div>
										</div>
										<div class="col-lg-3">
										    <?php $game_id1 = $this->db->order_by('id','DESC')->where('game_type','Sapre')->get('games')->row()->game_id;
										     
										    
										    $gzero_count=$this->db->where('game_id',$game_id1)->like('gcode',0)->count_all_results('game')+0;
										    $gzero_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',0)->get('game')->row()->pet_amount+0;
										    $gone_count=$this->db->where('game_id',$game_id1)->like('gcode',1)->count_all_results('game')+0;
										    $gone_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',1)->get('game')->row()->pet_amount+0;
										    $gtwo_count=$this->db->where('game_id',$game_id1)->like('gcode',2)->count_all_results('game')+0;
										    $gtwo_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',2)->get('game')->row()->pet_amount+0;
										    $gthree_count=$this->db->where('game_id',$game_id1)->like('gcode',3)->count_all_results('game')+0;
										    $gthree_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',3)->get('game')->row()->pet_amount+0;
										    $gfour_count=$this->db->where('game_id',$game_id1)->like('gcode',4)->count_all_results('game')+0;
										    $gfour_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',4)->get('game')->row()->pet_amount+0;
										    $gfive_count=$this->db->where('game_id',$game_id1)->like('gcode',5)->count_all_results('game')+0;
										    $gfive_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',5)->get('game')->row()->pet_amount+0;
										    $gsix_count=$this->db->where('game_id',$game_id1)->like('gcode',6)->count_all_results('game')+0;
										    $gsix_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',6)->get('game')->row()->pet_amount+0;
										    $gseven_count=$this->db->where('game_id',$game_id1)->like('gcode',7)->count_all_results('game')+0;
										    $gseven_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',7)->get('game')->row()->pet_amount+0;
										    $geight_count=$this->db->where('game_id',$game_id1)->like('gcode',8)->count_all_results('game')+0;
										    $geight_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',8)->get('game')->row()->pet_amount+0;
										    $gnine_count=$this->db->where('game_id',$game_id1)->like('gcode',9)->count_all_results('game')+0;
										    $gnine_sum=$this->db->select_sum('pet_amount')->where('game_id',$game_id1)->like('gcode',9)->get('game')->row()->pet_amount+0;
										   
										    ?>
											<div><h>Active Period Id:<br><span><?=$game_id1?></span></h></div>
										</div>


										<div class="col-lg-3">
											<div><h>
											   
				<!--<label>Parity <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" data-target="#parity" value="parity"></label>&nbsp;-->
				<!--<label>Sapre <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" data-target="#exampleModal" value="sapre"></label>&nbsp;-->
												<!--<label>Bcone <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" value="bcone"></label>&nbsp;-->
												<!--<label>Emerd <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" value="emerd"></label>-->
											</h></div>
										</div>

										<!--<div class="col-lg-3">-->
										<!--	<div class="col-xs-3">-->
          <!--                                      <div class="main-input pull-right">-->
          <!--          <label>Do you want manual result ?</label>-->
          <!--          <div class="ml-0">-->
          <!--              <div class="btn-group btn-group-toggle padd-l-15" data-toggle="buttons">-->
          <!--            <label class="btn btn-secondary ">-->
          <!--            <input class="switchbutton" type="radio" name="switch" id="switchyes" value="yes"> Yes </label>-->
          <!--             <label class="btn btn-secondary active">-->
          <!--           <input type="radio" class="switchbutton" name="switch" id="switchno" value="no" checked=""> No </label>-->
          <!--            </div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--                                  </div>-->
									 <!--   </div>-->
									</div>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											 <table class="table table-bordered text-nowrap border-bottom" id="parity">

												<thead>
													<tr>
														<th class="wd-20p">Result</th>
														<th class="wd-25p">Number</th>
														<th class="wd-20p">No of User</th>
														<th class="wd-15p">Amount</th>
														<th class="wd-20p">Action</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td>Red+<span>Violet</span></td>
														<td>0</td>
														<td><?=$gzero_count?></td>
														<td><?=$gzero_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '0'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>1</td>
														<td><?=$gone_count?></td>
														<td><?=$gone_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '1'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>2</td>
														<td><?=$gtwo_count?></td>
														<td><?=$gtwo_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '2'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>3</td>
														<td><?=$gthree_count?></td>
														<td><?=$gthree_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '3'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>4</td>
														<td><?=$gfour_count?></td>
														<td><?=$gfour_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '4'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Green+<span>Violet</span></td>
														<td>5</td>
														<td><?=$gfive_count?></td>
														<td><?=$gfive_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '5'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>6</td>
														<td><?=$gsix_count?></td>
														<td><?=$gsix_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '6'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>7</td>
														<td><?=$gseven_count?></td>
														<td><?=$gseven_sum?></td>
													<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '7'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Red</td>
														<td>8</td>
														<td><?=$geight_count?></td>
														<td><?=$geight_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '8'  data-utr ='Sapre'>Win</a>
													</tr>
													<tr>
														<td>Green</td>
														<td>9</td>
														<td><?=$gnine_count?></td>
														<td><?=$gnine_sum?></td>
														<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-info btn-sm mr-2 edit_info" data-id='<?=$game_id1?>' data-number = '9'  data-utr ='Sapre'>Win</a>
													</tr>
													
													
												</tbody>
											</table>
										</div>

									<!--<nav aria-label="Page navigation example">-->
									<!--<div class="d-flex justify-content-end">-->
								 <!-- <ul class="pagination mt-2 ">-->
								 <!--   <li class="page-item">-->
								 <!--     <a class="page-link" href="#" aria-label="Previous">-->
								 <!--       <span aria-hidden="true">&laquo;</span>-->
								 <!--       <span class="sr-only">Previous</span>-->
								 <!--     </a>-->
								 <!--   </li>-->
								 <!--   <li class="page-item"><a class="page-link" href="#">1</a></li>-->
								 <!--   <li class="page-item"><a class="page-link" href="#">2</a></li>-->
								 <!--   <li class="page-item"><a class="page-link" href="#">3</a></li>-->
								 <!--   <li class="page-item">-->
								 <!--     <a class="page-link" href="#" aria-label="Next">-->
								 <!--       <span aria-hidden="true">&raquo;</span>-->
								 <!--       <span class="sr-only">Next</span>-->
								 <!--     </a>-->
								 <!--   </li>-->
								 <!-- </ul></div>-->
         <!--                          </nav>-->
									</div>
								</div>
							</div>
						</div>
                  </div>
                 
                </div></div></div>

<script>

$(document).ready(function () {
    $('#example').DataTable();
    
});

$(document).ready(function() {
});
$(document).on('click', '.edit_info', function() {
    
    var dt_id = $(this).attr("data-id");
    var dt_number = $(this).attr("data-number");
    var data_utr = $(this).attr("data-utr");

    $("#hids").val(dt_id);
    $("#game_code").val(dt_number);
    $("#game").val(data_utr);

});
</script>
              
                
                
<script>
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
                if(time > 30){
                    // document.getElementsByClassName('edit-info').style.display='none';
                    // document.getElementById("home").disabled = true;
                    // $("#home").attr('disabled','disabled');
                    // $("#home").prop('disabled',true);
                    // document.getElementById("home").disabled = true;
                    // $("#home").find("a").attr("disabled",true);
                      $('.edit-info').attr("disabled","disabled");

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
                if(time > 15){
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
</script>
	
	<?php include('footer.php')?>