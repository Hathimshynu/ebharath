	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Products specification</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home/manage product</a></li>
								<li class="breadcrumb-item active" aria-current="page">manage specification</li>
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
											<div class="col-8">
											<button id="button"  class="btn btn-primary  data-table-btn mb-2"><a style="color:inherit;" href="<?=BASE_URL();?>admin/add_specification">Add New</a></button></div>
											<div class="col-4">
		<td><input type="text" class="form-control form-control-sm" id="inputName2" placeholder="Search"></td>
											</div></div>
											 <table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">

												<thead>
													<tr>
														<th class="wd-20p">Sr.no</th>
														<th class="wd-25p">Title</th>
														<th class="wd-20p">Specification</th>
														<th class="wd-15p">Action</th>
													
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td class="text-center">
													<a title="Edit"href="<?=BASE_URL();?>admin/edit_specification"><i class="fa fa-edit ms-3"></i></a>
													<a title="delete"href="#"><i class="fa fa-trash ms-3"></i></a>
													<a title="publish"href="#"><i class="fa-solid fa-square-check ms-3"></i></a>
													
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
						</div>
			
	
	<?php include('footer.php')?>