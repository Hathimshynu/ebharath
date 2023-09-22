	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Complaints</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">complaints</li>
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
									<span class="text-danger"><?=form_error('reply');?></span>
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
														<th class="wd-20p">Sr.No</th>
														<th class="wd-25p">User ID</th>
														<th class="wd-20p">Type</th>
														<th class="wd-15p">Out Id</th>
														<th class="wd-20p">Mobile</th>
														<th class="wd-25p">Description</th>
														<th class="wd-20p">Reply</th>
														<th class="wd-15p">Status</th>
														
													</tr>
												</thead>
												<tbody>
												    
												    <?php
												    $count = 1;
												    $complaints = $this->db->where('status','Pending')->get('complaints')->result_array();
												    foreach($complaints as $com)
												    {
												    ?>
													<tr>
													    <td><?=$count++;?></td>
														<td><?=$com['user_id']?></td>
														<td><?=$com['type']?></td>
														<td><?=$com['out_id']?></td>
														<td><?=$com['phone']?></td>
														<td><?=$com['description']?></td>
														<td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$com['id']?>">
												        <a title="Edit"href="#"><i class="fas fa-edit"></i></a>
												             </button></td>
														<td><?=$com['status']?></td>
													</tr>
													
													 <div class="modal fade" id="exampleModal<?=$com['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                        <form method="post" action="<?=BASEURL?>admin/compliant_reply">
                                                            <div class="mb-3">
                                                        
                                                        <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" value="<?=$com['id']?>" placeholder="Acc id" >
                                                                
                                                                
                                                        <textarea class="form-control" name="reply" id="exampleInputEmail1" placeholder="Enter Your reply" required></textarea>
                                                        
                                                      </div>
                                                      
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Send Reply</button>
                                                      </div>
                                                       </form>
                                                    </div>
                                                  </div>
                                                </div>
													
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
														<th class="wd-20p">Sr.No</th>
														<th class="wd-25p">User ID</th>
														<th class="wd-20p">Type</th>
														<th class="wd-15p">Out Id</th>
														<th class="wd-20p">Mobile</th>
														<th class="wd-25p">Description</th>
														<th class="wd-20p">Reply</th>
														<th class="wd-15p">Status</th>
														
													</tr>
												</thead>
												<tbody>
												    
												    <?php
												    $count = 1;
												    $complaints = $this->db->where('status','Replied')->get('complaints')->result_array();
												    foreach($complaints as $com)
												    {
												    ?>
													<tr>
													    <td><?=$count++;?></td>
														<td><?=$com['user_id']?></td>
														<td><?=$com['type']?></td>
														<td><?=$com['out_id']?></td>
														<td><?=$com['phone']?></td>
														<td><?=$com['description']?></td>
												    	<td><?=$com['reply']?></td>
														<td><?=$com['status']?></td>
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
						</div></div></div>
			
			
	
	<?php include('footer.php')?>