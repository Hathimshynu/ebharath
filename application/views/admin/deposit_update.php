	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Deposit Update  <small>Control panel</small></span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Manage User</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage user</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

						


						<!-- Row -->
						
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h> Payment Update</h>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<div class="row">
											<div class="col-sm-6">
												<div class="dataTables_length" id="gameSpots_length">
													<label>Show <select name="gameSpots_length" aria-controls="gameSpots" class="form-control input-sm">
														<option value="10">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select> entries</label>
												</div>
											</div>
											<div class="col-4">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">User id</th>
														<th class="wd-25p">Email</th>
														<th class="wd-20p">Total Deposit</th>
														<th class="wd-15p">Total Withdrawal</th>
														<th class="wd-20p">Total Bet</th>
														<th class="wd-20p">Balance</th>
													</tr>
												</thead>
												<tbody>
												    <?php $deposit = $this->db->group_by('user_id')->get('wallet')->result_array();  
												    foreach($deposit as $key => $dt)
												    {
												       $email =  $this->db->select('email')->where('user_name',$dt['user_id'])->get('user_role')->row()->email;
												       
												       $total_deposit = $this->db->select_sum('credit')->where('user_id',$dt['user_id'])->get('wallet')->row()->credit;
												       $total_withdraw = $this->db->select_sum('debit')->where('user_id',$dt['user_id'])->get('wallet')->row()->debit;
												       
												       $balance = $total_deposit - $total_withdraw; 
												       
												       $bet = $this->db->select_sum('pet_amount')->where('user_id',$dt['user_id'])->get('game')->row()->pet_amount;
												    ?>
													<tr>
														<td><?=$dt['user_id'];?></td>
														<td><?=$email;?></td>
														<td><?=$total_deposit;?></td>
														<td><?=$total_withdraw?></td>
														<td><?=$bet?></td>
														<td><?=$balance?></td>
													</tr>
													<?php 
												    }
													?>
													
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


						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h>Completed Payment Update</h>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<div class="row">
											<div class="col-sm-6">
												<div class="dataTables_length" id="gameSpots_length">
													<label>Show <select name="gameSpots_length" aria-controls="gameSpots" class="form-control input-sm">
														<option value="10">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select> entries</label>
												</div>
											</div>
											<div class="col-4">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>

											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">User id</th>
														<th class="wd-25p">Email</th>
														<th class="wd-20p">Reference Id</th>
														<th class="wd-15p">Deposit Amount</th>
														<th class="wd-20p">Date</th>
													</tr>
												</thead>
												<tbody>
												    
												   <?php $completed_deposit = $this->db->where('status','Accepted')->get('admin_request')->result_array();  
												    foreach($completed_deposit as $key => $cd)
												    {
												    $user_details =  $this->db->where('user_name',$cd['user_id'])->get('user_role')->row_array();
												       
											     //  $total_dep = $this->db->select_sum('wallet_value')->where('user_id',$cd['user_id'])->where('status','Accepted')->get('admin_request')->row()->wallet_value;
				                                    
				                                    							      
											
												    ?>
												    
													<tr>
														<td><?=$cd['user_id'];?></td>
														<td><?=$user_details['email'];?></td>
														<td><?=$user_details['ref_id'];?></td>
														<td><?=$cd['wallet_value'];?></td>
														<td><?=date("d-m-Y", strtotime($cd['entry_date']));?></td>
													</tr>
													<?php 
												    }
													?>
													
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
						</div></div></div>
			
	
	<?php include('footer.php')?>