<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Reward System</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Reward System</a></li>
								<li class="breadcrumb-item active" aria-current="page">reward system</li>
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
										<div class="row">
						               <div class="col-lg-6 col-md-12">
									<div class="form-group mb-0">
										<label class="form-label">Select User</label>
										<select class="SlectBox form-control">
											<option>Select Mobile Number</option>
											<option>#</option>
											<option>#</option>
											
										</select>
									</div></div>

									<div class="col-lg-6 col-md-12">
									<div class="form-group">
									<label class="form-label">Reward Amount</label>
									<input type="text" class="form-control" id="inputName" placeholder="">										
									</div></div>

								</div>
							</div>
						</div>
						<div class="form-group text-center">
								<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">submit</button>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		


		<?php include('footer.php')?>