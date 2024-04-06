<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 08:42:23 GMT -->

<head>
    <meta charset="UTF-8">
    <title>User Pannel</title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <!-- END: Page CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/morris/morris.css">
    <link rel="stylesheet" href="dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="dist/vendors/starrr/starrr.css">
    <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dist/vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">

    <!-- START: Pre Loader-->
    <div id="loader" class="se-pre-con">
        <div class="loader"></div>
    </div>

    <script>
    // Wait for 2 seconds and then hide the loader
    setTimeout(function() {
        document.getElementById('loader').style.display = 'none';
    }, 1000); // 2000 milliseconds = 2 seconds
    </script>

    <!-- END: Pre Loader-->

    <!-- START: Header-->
    <div id="header-fix" class="header fixed-top">
        <div class="site-width">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                    <a href="index.php" class="horizontal-logo text-left">
                        <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">User Pannel</span>
                    </a>
                </div>

                <div class="navbar-right ml-auto h-100">

                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                        <li class="dropdown align-self-center">
                            <a href="../index.php">
                                <button type="button" class="btn btn-warning">Back To Home</button>
                            </a>
                        </li>

                        <li class="dropdown user-profile align-self-center d-inline-block">
                            <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                                <div class="media">
                                    <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle"
                                        width="29">
                                </div>
                            </a>

                            <div class="dropdown-menu border dropdown-menu-right p-0">
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                    <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                            </div>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END: Header-->
    <!-- START: Main Menu-->
    <div class="sidebar">
        <div class="site-width">
            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active">
                    <ul>
                        <li class="active"><a href="index.php"><i class="icon-layers"></i>Dashboard</a></li>
                        <li><a href="products.php"><i class="icon-layers"></i>My Products</a></li>
                        <li><a href="my-order.php"><i class="icon-layers"></i>My Orders</a></li>
                        <li><a href="add-address.php"><i class="icon-layers"></i>My Address</a></li>
                    </ul>

                </li>
            </ul>
            <!-- END: Menu-->
            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- END: Main Menu-->