<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require '../includes/head.php' ?>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
	<?php require '../includes/header.php'?>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <?php require '../includes/nav.php'?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                <!-- eCommerce statistic -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">50</h3>
                                            <h6>Registered Users</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">648</h3>
                                            <h6>Stolen Cars</h6>
                                        </div>
                                        <div>
                                            <i class="icon-layers warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">146</h3>
                                            <h6>Registered Checkpoints</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">9.89 %</h3>
                                            <h6>Recovered Cars</h6>
                                        </div>
                                        <div>
                                            <i class="icon-heart danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar"
                                            style="width: 9.8%" aria-valuenow="9.8" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ eCommerce statistic -->

                <!-- Recent Transactions -->
                <div class="row">
                    <div id="recent-transactions" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Latest Reported Vehicles</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                                                href="all_vehicles.html" >View All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Vehicle Model</th>
                                                <th class="border-top-0">Color</th>
                                                <th class="border-top-0">PLate Number</th>
                                                <th class="border-top-0">Chassis Number</th>
                                                <th class="border-top-0">Location</th>
                                                <th class="border-top-0">Date Reported</th>
                                                <th class="border-top-0">More details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate">Toyota Hilux</td>
                                                <td class="text-truncate">Blue</td>
                                                <td class="text-truncate">KJA-193AA</td>
                                                <td class="text-truncate">WDB67600115312803</td>
                                                <td class="text-truncate">Lagos</td>
                                                <td class="text-truncate">09/09/2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-blue round">More
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Toyota Hilux</td>
                                                <td class="text-truncate">Blue</td>
                                                <td class="text-truncate">KJA-193AA</td>
                                                <td class="text-truncate">WDB67600115312803</td>
                                                <td class="text-truncate">Lagos</td>
                                                <td class="text-truncate">09/09/2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-blue round">More
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Toyota Hilux</td>
                                                <td class="text-truncate">Blue</td>
                                                <td class="text-truncate">KJA-193AA</td>
                                                <td class="text-truncate">WDB67600115312803</td>
                                                <td class="text-truncate">Lagos</td>
                                                <td class="text-truncate">09/09/2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-blue round">More
                                                        details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">Toyota Hilux</td>
                                                <td class="text-truncate">Blue</td>
                                                <td class="text-truncate">KJA-193AA</td>
                                                <td class="text-truncate">WDB67600115312803</td>
                                                <td class="text-truncate">Lagos</td>
                                                <td class="text-truncate">09/09/2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-blue round">More
                                                        details</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Recent Transactions -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    <?php require '../includes/footer.php'?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/charts/chartist.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>