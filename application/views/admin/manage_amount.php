<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Amount Setup</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Amount Setup</a></li>
								<li class="breadcrumb-item active" aria-current="page">amount setup</li>
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
						           <div class="form-group">
									<label class="form-label">Minimum Recharge Amount</label>
									<input type="text" class="form-control" id="inputName" placeholder="100">										
									</div>    	
						        </div>
								<div class="col-lg-6 col-md-12">
                                    <div class="form-group">
									<label class="form-label">Minimum Withdrawal Amount</label>
									<input type="text" class="form-control" id="inputName" placeholder="300">										
									</div>
								</div>
								</div>

								<div class="row">
						        <div class="col-lg-6 col-md-12">
						           <div class="form-group">
									<label class="form-label">Level 1 Commission</label>
									<input type="text" class="form-control" id="inputName" placeholder="15">										
									</div>    	
						        </div>
								<div class="col-lg-6 col-md-12">
                                    <div class="form-group">
									<label class="form-label">Level 2 Commission</label>
									<input type="text" class="form-control" id="inputName" placeholder="10">										
									</div>
								</div>
								</div>


								<div class="row">
						        <div class="col-lg-6 col-md-12">
						           <div class="form-group">
									<label class="form-label">Withdrawal Charges(in%)</label>
									<input type="text" class="form-control" id="inputName" placeholder="5">										
									</div>    	
						        </div>
								
								</div>	
							</div>
						    </div>
							<div class="form-group text-center">
							<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Submit</button>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		


		<?php include('footer.php')?>