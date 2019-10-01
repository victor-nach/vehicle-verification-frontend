<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<?php require '../includes/head.php' ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
	data-menu="vertical-menu-modern" data-col="2-columns">

	<!-- BEGIN: Header-->
	<?php require '../includes/header.php'?>
    <!-- END: Header-->


	<!-- BEGIN: Main Menu-->
	<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="active"><a ><span class="menu-title" data-i18n="">Dashboard </span></a>
				</li>
				<li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Vehicles</span>
				</li>
				<li class=" nav-item"><a href="verify_user.html"><span class="menu-title" data-i18n="">Verify a Vehicle</span></a>
				</li>
				<li class=" navigation-header"><span data-i18n="nav.category.ui"></span>
                </li>
                <li class=" nav-item"><a href="/"><span class="menu-title" data-i18n="">Log Out</span></a>
			</ul>
		</div>
	</div>
	<!-- END: Main Menu-->

	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-wrapper">
			<div class="content-header row mb-1">
				<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
					<h3 class="content-header-title mb-0 d-inline-block">Verify A STolen Vehicle</h3>
					<div class="row breadcrumbs-top d-inline-block">
						
					</div>
				</div>
			</div>
			<div class="content-body">
				<!-- Basic form layout section start -->
				<section id="basic-form-layouts">

					<div class="row justify-content-md-center">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-card-center">Put in the plate Number to verify</h4>
									
								</div>
								<div class="card-content collapse show">
									<div class="card-body">
										<form class="form">
											<div class="form-body">

												<div class="form-group">
													<label for="eventRegInput1">Chassis Number</label>
													<input type="text" id="eventRegInput1" class="form-control"
														placeholder="plate Number" name="fullname">
												</div>

											<div class="form-actions center">
												<button type="submit" class="btn btn-primary">
													Verify
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>
				<!-- // Basic form layout section end -->
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