	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Withdrawal Accept</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Manage Withdrawal Accept</a></li>
								<li class="breadcrumb-item active" aria-current="page">withdrawal accept</li>
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
									
									<div class="card-body">
										<div class="table-responsive ">
											<div class="row">
											
											<div class="col-4 mb-3">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">Sr.No</th>
														<th class="wd-25p">User Mobile</th>
														<th class="wd-20p">Amount</th>
														<th class="wd-15p">Payout Type</th>
														<th class="wd-20p">Req Date</th>
														<th class="wd-20p">Action</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td class="text-center">
					<a title="Accept/Reject"href="<?=BASE_URL();?>withdrawal_accept_reject"><i class="fa fa-check-square text-success ms-3"></i></a>
														  </td>
													</tr>
													
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
									<div class="card-footer">
										<strong>Total Request Amount: <i class="red_txt">0.00</i></strong>
									</div>
								</div>
							</div>
						</div>
			
	
	<?php include('footer.php')?>