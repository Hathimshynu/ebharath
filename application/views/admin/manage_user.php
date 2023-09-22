	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage User</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage user</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

						
						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									
									<div class="card-body">
										<div class="table-responsive ">
											<div class="row">
											
											<div class="col-4 mb-3">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">Mobile</th>
														<th class="wd-25p">Email</th>
														<th class="wd-20p">Password</th>
														
														<th class="wd-20p">Own Code</th>
														<th class="wd-20p">Ref Code</th>
														<th class="wd-25p">Customer ID</th>
														<th class="wd-20p">Member</th>
														
														<th class="wd-20p">First Recharge</th>
														<th class="wd-20p">Recharge</th>
														<th class="wd-15p">Withdrawal</th>
														<th class="wd-20p">Reg Date</th>
														<th class="wd-20p">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $users = $this->db->where('user_type','u')->get('user_role')->result_array(); 
												    foreach($users as $key => $us)
												    {
												       $first_recharge =  $this->db->order_by('id','asc')->limit(1)->where('user_id',$us['user_name'])->get('wallet')->row_array();
												       
												       $total_recharge = $this->db->select_sum('credit')->where('user_id',$us['user_name'])->get('wallet')->row()->credit;
												    ?>
													<tr>
														<td><?=$us['phone']?></td>
														<td><?=$us['email']?></td>
														<td><?=$us['pwd_hint']?></td>
														<td>--</td>
													
														<td><?=$us['ref_id']?></td>
														<td><?=$us['user_name']?></td>
														<td>--</td>
														<td><?=$first_recharge['credit']?></td>
														<td><?=$total_recharge?></td>
														<td>--</td>
														<td><?=date("d-m-Y", strtotime($us['entry_date']));?></td>
														<td class="text-center">
												    <!--<a title="Delete"href="#"><i class="fa fa-trash-alt ms-3"></i></a>-->
												    <?php if($us['status']=='Active'){?>
												    <a title="Publish"href="<?=BASEURL?>/admin/change_status/<?=$us['user_name']?>/Inactive"><i class="fa fa-check-square text-success ms-0"></i></a>
												    <?php }else{?>
												     <a title="Publish"href="<?=BASEURL?>/admin/change_status/<?=$us['user_name']?>/Active"><i class="fa fa-square text-danger ms-0"></i></a>
												     <?php }?>
														  </td>
													</tr>
													<?php } ?>
													
												</tbody>
											</table>
										</div>

									<nav aria-label="Page navigation example">
									<div class="d-flex justify-content-end">
								  <ul class="pagination mt-2 ">
								    <li class="page-item">
								      <a class="page-link" href="#" aria-label="Previous">
								        <span aria-hidden="true">&laquo;</span>
								        <span class="sr-only">Previous</span>
								      </a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item">
								      <a class="page-link" href="#" aria-label="Next">
								        <span aria-hidden="true">&raquo;</span>
								        <span class="sr-only">Next</span>
								      </a>
								    </li>
								  </ul></div>
                                   </nav>
									</div>
								</div>
							</div>
						</div>
			</div></div>
	
	<?php include('footer.php')?>