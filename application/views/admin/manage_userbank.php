<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Bankcard</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage Bankcard</li>
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
											<span class="text-danger"><?=form_error('acc_name');?></span>
											<span class="text-danger"><?=form_error('bank_name');?></span>
											<span class="text-danger"><?=form_error('ifsc');?></span>
											<span class="text-danger"><?=form_error('acc_no');?></span>
											<span class="text-danger"><?=form_error('state');?></span>
											<span class="text-danger"><?=form_error('city');?></span>
											<span class="text-danger"><?=form_error('address');?></span>
											<span class="text-danger"><?=form_error('phone');?></span>
											<span class="text-danger"><?=form_error('email');?></span>
											<span class="text-danger"><?=form_error('upi');?></span>
											<span class="text-danger"><?=form_error('acc_phone');?></span>
											<div class="col-4 mb-3">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">sl.no</th>
														<th class="wd-20p">Username</th>
														<th class="wd-25p">Acc Holder Name</th>
														<th class="wd-20p">IFSC</th>
														
														<th class="wd-20p">Bank Name</th>
														<th class="wd-20p">Acc Number</th>
														<th class="wd-25p">State</th>
														<th class="wd-20p">City</th>
														
														<th class="wd-20p">Address</th>
														<th class="wd-20p">Mobile</th>
														<th class="wd-15p">Email</th>
														<th class="wd-20p">Upi</th>
														<th class="wd-20p">Acc Mobile Number</th>
														<th class="wd-20p">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $users = $this->db->get('bank')->result_array(); 
												    $count=1;
												    foreach($users as $key => $us)
												    { 
												    ?>
													<tr>
														<td><?=$count++?></td>
														<td><?=$us['user_id']?></td>
														<td><?=$us['acc_name']?></td>
													
													
														<td><?=$us['ifsc']?></td>
														<td><?=$us['bank_name']?></td>
													
														<td><?=$us['acc_no']?></td>
														<td><?=$us['state']?></td>
														<td><?=$us['city']?></td>
														<td><?=$us['address']?></td>
														<td><?=$us['phone']?></td>
														<td><?=$us['email']?></td>
														<td><?=$us['upi']?></td>
														<td><?=$us['acc_phone']?></td>
														
														<td class="text-center">
												    <!--<a title="Delete"href="#"><i class="fa fa-trash-alt ms-3"></i></a>-->
												    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$us['bank_id']?>">
												        <a title="Edit"href="#"><i class="fas fa-edit"></i></a>
												    </button>

												    
												    <div class="modal fade" id="exampleModal<?=$us['bank_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                        <form method="post" action="<?=BASEURL?>admin/update_bankcard">
                                                            <div class="mb-3">
                                                        
                                                        <input type="hidden" class="form-control" name="bank_id" id="exampleInputEmail1" value="<?=$us['bank_id']?>" placeholder="Acc id" >
                                                                
                                                                
                                                        <input type="text" class="form-control" name="acc_name" id="exampleInputEmail1" value="<?=$us['acc_name']?>" placeholder="Acc Holder Name..." required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="ifsc" id="exampleInputEmail1" value="<?=$us['ifsc']?>" placeholder="ifsc" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="bank_name" id="exampleInputEmail1" value="<?=$us['bank_name']?>" placeholder="Bank Name" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="number" class="form-control" name="acc_no" id="exampleInputEmail1" value="<?=$us['acc_no']?>" placeholder="Acc Number" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="state" id="exampleInputEmail1" value="<?=$us['state']?>"  placeholder="state" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="city" id="exampleInputEmail1" value="<?=$us['city']?>" placeholder="City" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value="<?=$us['address']?>" placeholder="Address" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="number" class="form-control" name="phone" id="exampleInputEmail1" value="<?=$us['phone']?>"  placeholder="Mobile" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"  value="<?=$us['email']?>" placeholder="email" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="upi" id="exampleInputEmail1" value="<?=$us['upi']?>" placeholder="upi" required>
                                                        
                                                      </div>
                                                      <div class="mb-3">
                                                        <input type="text" class="form-control" name="acc_phone" id="exampleInputPassword1" value="<?=$us['acc_phone']?>" placeholder="Acc Mobile Number" required>
                                                      </div>
                                                   
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                       </form>
                                                    </div>
                                                  </div>
                                                </div>
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