	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Banner</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Manage Banner</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage banner</li>
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
											<div class="col-8 mb-3">
											    
											                      <!-- The Modal -->
                            <div class="modal" id="Modal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                            
                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Add Banner</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                            
                                  <!-- Modal body -->
                                  <div class="modal-body">
                                      <form>
                                    <div class="form-group text-left">
                                        <label for="formFile" class="form-label">Add Title</label>
										<input type="text" class="form-control" id="inputName" placeholder="">
									</div>
									
									<div class="text-left">
											<label for="formFile" class="form-label">Image</label>
											<input class="form-control" type="file" id="formFile">
											</div>
									
									
                                  </div>
                            
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <a href="#"></a><button type="" class="btn btn-danger" >Upload</button></a>
                                  </div>
                            </form>
                                </div>
                              </div>
                            </div>
											    
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Add New
                                  </button>
											    </div>
											<div class="col-4">
		                              <td>
		                              <input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search">
		                                </td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">Sr.No</th>
														<th class="wd-25p">Title</th>
														<th class="wd-20p">Image</th>
														<th class="wd-20p">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													
							<td class="text-center">

                                              <!-- The Modal -->
                            <div class="modal" id="myModal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                            
                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit Banner</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <form>
                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <div class="form-group text-left">
                                        <label for="formFile" class="form-label">Add Title</label>
										<input type="text" class="form-control" id="inputName" placeholder="">
									</div>
									
									<div class="text-left">
											<label for="formFile" class="form-label">Image</label>
											<input class="form-control" type="file" id="formFile">
											</div>
									
									
                                  </div>
                            
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <a href="#"></a><button type="" class="btn btn-danger" >Upload</button></a>
                                  </div>
                                    </form>
                                </div>
                              </div>
                            </div>															    
															    
							 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <i class="fa fa-edit "></i></button>
                                  
							    <a title="Delete"href="#"><i class="fa fa-trash-alt ms-3"></i></a>
							    
							    <a title="Publish"href="#"><i class="fa fa-check-square text-success ms-3"></i></a>
							    
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
								</div>
							</div>
						</div></div></div>
			
	
	<?php include('footer.php')?>