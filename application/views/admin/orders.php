<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Edit Task</span>
						</div>
						
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<form>
					<div class="row">
						<div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="role">Select Role <span>*</span></label>
					<select class="form-control" id="role" name="role" required="">
					    <option value="" selected="">Select Role</option>
					    <option value="1">
					    SuperAdmin  </option>
					  <option value="2">
					    Support  </option>
					  <option value="13">
					    serverRoot  </option>
					  <option selected="selected" value="14">
					    Assistant  </option>
					  <option value="15">
					    Agent  </option>

						</select></div>

						<div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="form-group">
                       
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="1">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Dashboard</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="2">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Manage AdminUser</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="3">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Manage Banner</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="4">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Content Management</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="5">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Manage Product</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="6">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>User Management</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="7">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Withdrawal Management </strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" checked="checked" name="check[]" value="8">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Wining Management</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="9">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Game History</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="10">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Trade History</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="11">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Reward Management</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="12">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Amount Setup</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="13">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Recharge Management</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="16">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Deposit Update</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="18">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Users Bid History</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="19">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Manage Support</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="20">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Complaints Management</strong>
						                              </div>  

						     
						<div class="checkbox c-checkbox">
						  <label>
						 <input type="checkbox" name="check[]" value="21">
						<span class="fa fa-check"></span>
						 </label>&nbsp;<strong>Red Envelope</strong>
						                              </div>  


						</div></div>

					   <div class="form-group text-center">
						<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Cancel</button>
						<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2">Edit</button>
						</div>
						</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		


		<?php include('footer.php')?>