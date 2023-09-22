<?php include('header.php')?>

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
					<form action="<?=BASEURL?>admin/update_upi" method="post">
					    <?php $wm = $this->db->where('title','UPI IDs')->get('upi')->row_array(); ?>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Title <span class="text-center"><?=form_error('title');?></span></label>
										<input type="text" class="form-control" name="title" value="<?=$wm['title']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">Mail-ID <span class="text-center"><?=form_error('email');?></span></label>
										<input type="email" class="form-control" name="email" value="<?=$wm['email']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">Account Number <span class="text-center"><?=form_error('acc_no');?></span></label>
										<input type="text" class="form-control" name="acc_no" value="<?=$wm['acc_no']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">Website Link(https://domainame) <span class="text-center"><?=form_error('web_link');?></span></label>
										<input type="text" class="form-control" name="web_link" value="<?=$wm['web_link']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 1 <span class="text-center"><?=form_error('upi1');?></span></label>
										<input type="text" class="form-control" name="upi1" value="<?=$wm['upi_id1']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 2 <span class="text-center"><?=form_error('upi2');?></span></label>
										<input type="text" class="form-control" name="upi2" value="<?=$wm['upi_id2']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 3 <span class="text-center"><?=form_error('upi3');?></span></label>
										<input type="text" class="form-control" name="upi3" value="<?=$wm['upi_id3']?>" placeholder="">										
									</div>
									
								</div>
							</div>
						</div>

							<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
                                         <div class="form-group">
										<label class="form-label">UPI ID 4 <span class="text-center"><?=form_error('upi4');?></span></label>
										<input type="text" class="form-control" name="upi4" value="<?=$wm['upi_id4']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 5 <span class="text-center"><?=form_error('upi5');?></span></label>
										<input type="text" class="form-control" name="upi5" value="<?=$wm['upi_id5']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 6 <span class="text-center"><?=form_error('upi6');?></span></label>
										<input type="text" class="form-control" name="upi6" value="<?=$wm['upi_id6']?>" placeholder="">										
									</div>
										<div class="form-group">
										<label class="form-label">UPI ID 7 <span class="text-center"><?=form_error('upi7');?></span></label>
										<input type="text" class="form-control" name="upi7" value="<?=$wm['upi_id7']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 8 <span class="text-center"><?=form_error('upi8');?></span></label>
										<input type="text" class="form-control" name="upi8" value="<?=$wm['upi_id8']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 9 <span class="text-center"><?=form_error('upi9');?></span></label>
										<input type="text" class="form-control" name="upi9" value="<?=$wm['upi_id9']?>" placeholder="">										
									</div>
									<div class="form-group">
										<label class="form-label">UPI ID 10 <span class="text-center"><?=form_error('upi10');?></span></label>
										<input type="text" class="form-control" name="upi10" value="<?=$wm['upi_id10']?>" placeholder="">										
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