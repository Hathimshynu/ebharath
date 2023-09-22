	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Transactions</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">transactions</li>
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
											<div class="col-8">
											</div>
											<div class="col-4 mb-3">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">ID</th>
														<th class="wd-25p">User</th>
														<th class="wd-20p">Amount</th>
														<th class="wd-15p">Value</th>
														<th class="wd-20p">Data</th>
														<th class="wd-20p">Date</th>
													</tr>
												</thead>
												<tbody>
												<?php 
												$count=1;
												$bett = $this->db->get('game')->result_array();
												foreach($bett as $key => $bt)
												{
												?>
													<tr>
														<td><?=$count++;?></td>
														<td><?=$bt['user_id'];?></td>
														<td><?=$bt['pet_amount'];?></td>
														<td><?=$bt['game_id'];?></td>
														<td><?=$bt['gcode'];?></td>
														<td><?=$bt['entry_date'];?></td>
													</tr>
												<?php
												}
												?>	
													
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
			
	
	<?php include('footer.php')?>