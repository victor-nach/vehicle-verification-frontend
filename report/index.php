<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

  <?php require '../includes/head.php' ?>

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
	<?php require '../includes/header.php'?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php require '../includes/nav.php'?>
	<!-- END: Main Menu-->
	
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-wrapper">
			
			<div class="content-body">
				<!-- Striped row layout section start -->
				<section id="striped-row-form-layouts">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="striped-row-layout-basic">Report A Stolen Vehicle</h4>
								
								</div>
								<div class="card-content collpase show">
									<div class="card-body">
	
										<form class="form form-horizontal striped-rows form-bordered">
											<div class="form-body">
												<h4 class="form-section"><i class="ft-user"></i> Vehicle Information</h4>
												<div class="form-group row mx-auto">
													<label class="col-md-3 label-control" for="projectinput1">Vehicle Model</label>
													<div class="col-md-9">
														<input type="text" id="projectinput1" class="form-control"
															placeholder="Vehicle Model" name="fname">
													</div>
												</div>
												<div class="form-group row mx-auto">
													<label class="col-md-3 label-control" for="projectinput2">Chassis Number</label>
													<div class="col-md-9">
														<input type="text" id="projectinput2" class="form-control"
															placeholder="Chassis Number" name="lname">
													</div>
												</div>
	
												<div class="form-group row mx-auto">
													<label class="col-md-3 label-control" for="projectinput3">Color</label>
													<div class="col-md-9">
														<input type="text" id="projectinput3" class="form-control"
															placeholder="Color" name="email">
													</div>
												</div>
	
												<div class="form-group row mx-auto last">
													<label class="col-md-3 label-control" for="projectinput4">Production Year
														</label>
													<div class="col-md-9">
														<input type="text" id="projectinput4" class="form-control"
															placeholder="Production Year" name="phone">
													</div>
												</div>
	
												<h4 class="form-section"><i class="la la-clipboard"></i> Incident</h4>
	
												<div class="form-group row mx-auto">
													<label class="col-md-3 label-control"
														for="projectinput5">Location Stolen</label>
													<div class="col-md-9">
														<input type="text" id="projectinput5" class="form-control"
															placeholder="Location Stolen" name="company">
													</div>
												</div>

												<div class="form-group row mx-auto">
														<label class="col-md-3 label-control" for="timesheetinput3">Date Stolen</label>
														<div class="col-md-9">
															<div class="position-relative has-icon-left">
																<input type="date" id="timesheetinput3" class="form-control"
																	name="date">
																<div class="form-control-position">
																	<i class="ft-message-square"></i>
																</div>
															</div>
														</div>
													</div>
	
												<div class="form-group row mx-auto last">
													<label class="col-md-3 label-control" for="projectinput9">Brief 
														Description</label>
													<div class="col-md-9">
														<textarea id="projectinput9" rows="5" class="form-control"
															name="comment" placeholder="Brief Description"></textarea>
													</div>
												</div>

												
											</div>
	
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
	
					
				</section>
				<!-- // Striped row layout section end -->
			</div>
		</div>
	</div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    <?php require '../includes/footer.php'?>
    <!-- END: Footer-->


 	<!-- BEGIN: Scripts-->
 	<?php require '../includes/scripts.php'?>
    <!-- END: Scripts-->

  </body>
  <!-- END: Body-->
</html>