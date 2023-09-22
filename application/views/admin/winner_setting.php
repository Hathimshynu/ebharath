	<?php include('header.php')?>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">Manage Banner</span>
						</div>
						
					</div>
					<!-- /breadcrumb -->

						
						<!-- Row -->
						<div class="row row-sm">
							<div class="col-xs-12 text-center">
                <!--<div class="main-input pad">-->
                    <label>Which mode do you want to run ?</label>
                    <div class="mt-0">
                        <!--<div class="btn-group btn-group-toggle" data-toggle="buttons">-->
                        <!--<label class="btn btn-secondary "></label>-->
                        <a href="<?=BASEURL?>admin/winner_priority_setting/high" class="btn btn-secondary " >High Profit Mode</a>
                        <a href="<?=BASEURL?>admin/winner_priority_setting/low" style="margin-left:1.5rem;"  class="btn btn-secondary" >Low Profit Mode</a>
                        <!--</div>-->
                    </div>
                    <p>&nbsp;</p>
                  <p>[ <span class="red_txt">Note:-</span> On low profit mode manual result option may <span class="red_txt">intrupted</span>, please do action accordingly. ]</p>
                  <!--</div>-->
              </div>
              </div>
			</div>
			</div>
	
	<?php include('footer.php')?>
	
