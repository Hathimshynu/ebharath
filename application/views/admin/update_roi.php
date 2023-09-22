<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Update ROI</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Update ROI</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<form action="<?=BASEURL?>admin/update_roi" method="post">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="form-group">
										<label class="form-label"> Reward <span class="text-center"><?=form_error('reward');?></span></label>
										<input type="text" class="form-control" name="reward" value="" placeholder="">										
									</div>
								
								</div>
							</div>
						</div>

						<div class="form-group text-center">
										<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Submit</button>
						</div>
					</div>
					</form>
					
					
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
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
														<th class="wd-20p">S.I</th>
														<th class="wd-25p">Current Reward</th>
														<th class="wd-20p">Updated Date</th>
														<th class="wd-15p">Updated By</th>
													
													</tr>
												</thead>
												<tbody>
												    <?php $current = $this->db->order_by('id','desc')->get('roi_updates')->row_array(); ?>
													<tr>
													    
														<td>1</td>
														<td><?=$current['rewards']?></td>
														<td><?=$current['entry_date']?></td>
														<td><?=$current['updated_by']?></td>
														
														<!--<td class="text-center">-->
												  <!--  <a title="Delete"href="#"><i class="fa fa-trash-alt ms-3"></i></a>-->
												  <!--  <a title="Publish"href="#"><i class="fa fa-check-square text-success ms-3"></i></a>-->
														<!--  </td>-->
													</tr>
													
													
												</tbody>
											</table>
										</div>
								
								</div>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		


		<?php include('footer.php')?>