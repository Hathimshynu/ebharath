<?php include('header.php')?>

<style>
    .color{
        background-color:black;
        width:50%;
    }
</style>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Website Management</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Website Management</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<form action="<?=BASEURL?>admin/recharge_details" method="post">
					<div class="row">
						

							<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
								        <input type="text" name="admin_req_id" value="<?=$req['admin_request_id']?>" hidden>
								        <input type="text" name="user_id" value="<?=$req['user_id']?>" hidden>
								    
										<div class="form-group">
										<label class="form-label">Transaction ID</label>
										<input type="text" class="form-control" value="<?=$req['utr']?>" name="utr" id="inputName" placeholder="">										
									</div>
									
									<div class="form-group">
										<label class="form-label">Amount</label>
										<input type="number" class="form-control" id="inputName" name="amount" value="<?=$req['wallet_value']?>" placeholder="">										
									</div>
									 <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                                          <option class="color" value="Pending">Pending</option>
                                          <option class="color" value="Accepted">Success</option>
                                          <option class="color" value="Rejected">Fail</option>
                                         
                                        </select>
                                      </div>
									<div class="form-group">
										<label class="form-label">ORDER ID</label>
									  <input type="text" class="form-control" id="inputName" value="<?=$req['order_id']?>" placeholder="">
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