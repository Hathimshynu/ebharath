<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">User Trade History</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">User Trade History</a></li>
								<li class="breadcrumb-item active" aria-current="page">User trade history</li>
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
										<label class="form-label">Filter By User</label>
										<select class="SlectBox form-control">
											<option>Select All</option>
											<option>#</option>
											<option>#</option>
											
										</select>
									</div></div>

									<div class="col-lg-6 col-md-12">
									<div class="form-group mb-0">
										<label class="form-label">Filter By Game Space</label>
										<select class="SlectBox form-control">
											<option>Select All</option>
											<option>Gold</option>
											<option>Diamond</option>
											<!--<option >Bcone</option>-->
											<!--<option >Emerd</option>-->
											
										</select>
									</div></div>
									
								</div>

								<div class="mt-3 text-center"><h4>Filter By DATE</h4></div>

									<div class="row">
						               <div class="col-lg-6 col-md-12">
									<div class="form-group">
									<label class="form-label">Start Date</label>
									<input type="date" class="form-control" id="inputName" placeholder="">										
									</div></div>
                                    
                                     <div class="col-lg-6 col-md-12">
									<div class="form-group">
									<label class="form-label">End Date</label>
									<input type="date" class="form-control" id="inputName" placeholder="">										
									</div></div>
								</div>
							</div>
						</div>

							
								<div class="form-group text-center">
										<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Download Excel</button>
									</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		


		<?php include('footer.php')?>