	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Transactions</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home </a></li>
								<li class="breadcrumb-item active" aria-current="page">transactions</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<div class="row">
											<div class="col-4 mb-3">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">
												<thead>
												
													<tr>
														<th class="wd-20p">ID</th>
														<th class="wd-25p">User</th>
														<th class="wd-20p">Order ID</th>
														<!--<th class="wd-20p">Name</th>-->
														<th class="wd-20p">Mobile</th>
														<th class="wd-20p">Receipt</th>
														<th class="wd-15p">UTR ID</th>
														<th class="wd-20p">Amount</th>
														<th class="wd-20p">Payment Mode</th>
														<th class="wd-20p">Date</th>
														<th class="wd-15p">Status</th>
														<th class="wd-20p">Action</th>
													</tr>
											
												</thead>
												<tbody>
												    <?php 
												$count=1;
												$request = $this->db->where('type','investment')->where('status','Request')->get('admin_request')->result_array();
												foreach($request as $key => $rq)
												{
												    $user = $this->db->where('user_name',$rq['user_id'])->get('user_role')->row_array();
												?>
													<tr>
														<td><?=$count++;?></td>
														<td><?=$rq['user_id']?></td>
														<td><?=$rq['order_id']?></td>
														<td><?=$user['phone']?></td>
														<td><a href="<?=RECEIPTURL.$rq['filename']?>" target="_blank"><img src="<?=RECEIPTURL.$rq['filename']?>"></a></td>
														<td><?=$rq['utr']?></td>
														<td><?=$rq['wallet_value']?></td>
														<td><?=$rq['pay_mode']?></td>
														<td><?=$rq['entry_date']?></td>
														<td>
														<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2"><?=$rq['status']?></button>
														</td>
														<td class="text-center"><a title="" href="<?=BASE_URL();?>admin/recharge_details/<?=$rq['admin_request_id']?>"><i class="fas fa-info"></i></a></td>
													</tr>
											<?php } ?>
												</tbody>
											</table>
										</div>

										<div class="row">
										<div class="col-sm-12 col-lg-6">
											<div class="dataTables_info" id="deletableRowDataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
										</div>
										<div class="col-sm-12 col-lg-6">
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
                                   </nav></div></div>
									</div>
								</div>
							</div>
						</div>
						
						
						
							<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<div class="row">
											<div class="col-4 mb-3">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">
												<thead>
												
													<tr>
														<th class="wd-20p">ID</th>
														<th class="wd-25p">User</th>
														<th class="wd-20p">Order ID</th>
														<!--<th class="wd-20p">Name</th>-->
														<th class="wd-20p">Mobile</th>
														<th class="wd-20p">Receipt</th>
														<th class="wd-15p">UTR ID</th>
														<th class="wd-20p">Amount</th>
														<th class="wd-20p">Payment Mode</th>
														<th class="wd-20p">Date</th>
														<th class="wd-15p">Status</th>
													</tr>
											
												</thead>
												<tbody>
												    <?php 
												$count=1;
												$request = $this->db->where('type','investment')->where('status !=','Request')->get('admin_request')->result_array();
												foreach($request as $key => $rq)
												{
												    $user = $this->db->where('user_name',$rq['user_id'])->get('user_role')->row_array();
												?>
													<tr>
														<td><?=$count++;?></td>
														<td><?=$rq['user_id']?></td>
														<td><?=$rq['order_id']?></td>
														<td><?=$user['phone']?></td>
														<td><a href="<?=RECEIPTURL.$rq['filename']?>" target="_blank"><img src="<?=RECEIPTURL.$rq['filename']?>"></a></td>
														<td><?=$rq['utr']?></td>
														<td><?=$rq['wallet_value']?></td>
														<td><?=$rq['pay_mode']?></td>
														<td><?=$rq['entry_date']?></td>
														<td><?=$rq['status']?></td>
													
													</tr>
											<?php } ?>
												</tbody>
											</table>
										</div>

										<div class="row">
										<div class="col-sm-12 col-lg-6">
											<div class="dataTables_info" id="deletableRowDataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
										</div>
										<div class="col-sm-12 col-lg-6">
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
                                   </nav></div></div>
									</div>
								</div>
							</div>
						</div></div></div>
						
			
	
	<?php include('footer.php')?>