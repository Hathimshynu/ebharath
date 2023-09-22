	<?php include('header.php')?>

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
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Manage Winner Result</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage winner result</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->


						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="row">
										<div class="col-lg-3">
											<div><h>countdown:<br><span></span></h></div>
										</div>
										<div class="col-lg-3">
											<div><h>Active Period Id:<br><span></span></h></div>
										</div>


										<div class="col-lg-3">
											<div><h>
												<label>Parity <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" value="parity"></label>&nbsp;
												<label>Sapre <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" value="sapre"></label>&nbsp;
												<label>Bcone <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" value="bcone"></label>&nbsp;
												<label>Emerd <br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="tabbtn" name="tab" value="emerd"></label>
											</h></div>
										</div>

										<div class="col-lg-3">
											<div class="col-xs-3">
                <div class="main-input pull-right">
                    <label>Do you want manual result ?</label>
                    <div class="ml-0">
                <div class="btn-group btn-group-toggle padd-l-15" data-toggle="buttons">
          <label class="btn btn-secondary ">
          <input class="switchbutton" type="radio" name="switch" id="switchyes" value="yes"> Yes </label>
           <label class="btn btn-secondary active">
         <input type="radio" class="switchbutton" name="switch" id="switchno" value="no" checked=""> No </label>
                      </div>
                    </div>
                  </div>
              </div>
									</div>
									</div>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

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
														<td>1</td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													
													
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
			
	
	<?php include('footer.php')?>