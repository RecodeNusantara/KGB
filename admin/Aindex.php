<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="76x76" href="images/logosmall.png">
    <title>Admin Kencana Graha</title>
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <?php include 'comp/TopNav.php' ?>
        </header>
        <aside class="left-sidebar">
            <?php include 'comp/LeftNav.php' ?>
        </aside>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Campaign</h4>
                                <div id="campaign" style="height: 168px; width: 100%;" class="m-t-10"></div>
                                <!-- row -->
                                <div class="row text-center text-lg-left">
                                    <!-- column -->
                                    <div class="col-4">
                                        <h4 class="m-b-0 font-medium">60%</h4>
                                        <span class="text-muted">Open</span>
                                    </div>
                                    <!-- column -->
                                    <div class="col-4">
                                        <h4 class="m-b-0 font-medium">26%</h4>
                                        <span class="text-muted">Click</span>
                                    </div>
                                    <!-- column -->
                                    <div class="col-4">
                                        <h4 class="m-b-0 font-medium">18%</h4>
                                        <span class="text-muted">Bounce</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-5">Referral Earnings</h5>
                                <h3 class="font-light">$769.08</h3>
                                <div class="m-t-20 text-center">
                                    <div id="earnings"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-2 order-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Ratio</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dl m-b-10">
                                            <select class="custom-select border-0 text-muted">
                                                <option value="0" selected="">August 2018</option>
                                                <option value="1">May 2018</option>
                                                <option value="2">March 2018</option>
                                                <option value="3">June 2018</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center no-block">
                                    <div>
                                        <span class="text-muted">This Week</span>
                                        <h3 class="mb-0 text-info font-light">$23.5K <span class="text-muted font-12"><i class="mdi mdi-arrow-up text-success"></i>18.6</span></h3>
                                    </div>
                                    <div class="ml-4">
                                        <span class="text-muted">Last Week</span>
                                        <h3 class="mb-0 text-muted font-light">$945 <span class="text-muted font-12"><i class="mdi mdi-arrow-down text-danger"></i>46.3</span></h3>
                                    </div>
                                </div>
                                <div class="sales ct-charts mt-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 order-lg-3 order-md-2">
                        <div class="card">
                            <div class="card-body m-b-0">
                                <h4 class="card-title">Thursday <span class="font-14 font-normal text-muted">12th April, 2018</span></h4>
                                    <div class="d-flex align-items-center flex-row m-t-30">
                                    <h1 class="font-light"><i class="wi wi-day-sleet"></i> <span>35<sup>°</sup></span></h1>
                                </div>
                            </div>
                            <div class="weather-report" style="height:120px; width:100%;"></div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Users</h4>
                                <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2>
                                <div class="m-t-30">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="m-b-0">58%</h4>
                                            <span class="font-14 text-muted">New Users</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="m-b-0">42%</h4>
                                            <span class="font-14 text-muted">Repeat Users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                <? php include 'comp/footer.php' ?>
            </footer>
        </div>
    </div>
    
    <div class="chat-windows"></div>    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.dark.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>