<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Edit Product</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home/manage product</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<form>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Description</label>
										<textarea type="textarea" class="form-control" id="inputName" placeholder=""></textarea>										
									</div>
									<div class="form-group">
										<label class="form-label">Price</label>
										<input type="text" class="form-control" id="inputName" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">Affiliate Link</label>
										<input type="text" class="form-control" id="inputName" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">Image Upload</label>
										<input type="file" class="dropify" data-height="97" />
										<p>Size 1500px * 1500px</p>
									</div>

								
								</div>
							</div>
						</div>   
						            <div class="row">
                                	<div class="col-6 form-group  text-end">
										<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Cancel</button>
									</div>
							
								<div class="col-6 form-group  text-left">
										<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Save</button>
									</div>
									</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		


		<?php include('footer.php')?>