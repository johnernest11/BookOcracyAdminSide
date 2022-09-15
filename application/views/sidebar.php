<!doctype html>
<html lang="en" dir="ltr">

    <head>
        

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo  base_url();?>/assets/images/brand/booklogo1.png" />

        <!-- TITLE -->
        <title>BookOcracy – Admin</title>
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="<?php echo  base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="<?php echo  base_url();?>/assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo  base_url();?>/assets/css/dark-style.css" rel="stylesheet" />
        <link href="<?php echo  base_url();?>/assets/css/skin-modes.css" rel="stylesheet" />
        <link href="<?php echo  base_url();?>/assets/css/transparent-style.css" rel="stylesheet" />
        <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
        <!--- FONT-ICONS CSS -->
        <link href="<?php echo  base_url();?>/assets/css/icons.css" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo  base_url();?>/assets/colors/color1.css" />

    </head>

    <body class="app sidebar-mini ltr light-mode">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
        <span id="year" class="hidden">
            <img src="<?php echo  base_url();?>/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- app-Header -->
                <div class="app-header header sticky">
                    <div class="container-fluid main-container">
                        <div class="d-flex align-items-center">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
                            <div class="responsive-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="../assets/images/brand/booklogo1.png" class="mobile-logo logo-1" alt="logo">
                                    <img src="../assets/images/brand/booklogo1.png" class="mobile-logo dark-logo-1" alt="logo">
                                </a>
                            </div>
                            <!-- sidebar-toggle-->
                            <a class="logo-horizontal " href="index.html">
                                <img src="../assets/images/brand/booklogo1.png" class="header-brand-img desktop-logo" alt="logo">
                                <img src="../assets/images/brand/booklogo1.png" class="header-brand-img light-logo1"
                                    alt="logo">
                            </a>
                            <!-- LOGO -->
                            <!-- <div class="main-header-center ms-3 d-none d-lg-block">
                                <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div> -->
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <!-- SEARCH -->
                                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                                    </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <div class="dropdown d-block d-lg-none">
                                                <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <div class="dropdown-menu header-search dropdown-menu-start">
                                                    <div class="input-group w-100 p-2">
                                                        <input type="text" class="form-control" placeholder="Search....">
                                                        <div class="input-group-text btn btn-primary">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown d-md-flex">
                                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                                </a>
                                            </div>
                                            <!-- Theme-Layout -->
                                            <div class="dropdown d-md-flex">
                                                <a class="nav-link icon full-screen-link nav-link-bg">
                                                    <i class="fe fe-minimize fullscreen-button" id="myvideo"></i>
                                                </a>
                                            </div>
                                            <!-- FULL-SCREEN -->
                                            <!-- <div class="dropdown d-md-flex notifications">
                                                <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                                                    </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                                                    <div class="drop-heading border-bottom">
                                                        <div class="d-flex">
                                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-success rounded-pill">3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notifications-menu">
                                                        <a class="dropdown-item d-flex" href="chat.html">
                                                            <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                                                <i class="fe fe-message-square"></i>
                                                            </div>
                                                            <div class="mt-1 wd-80p">
                                                                <h5 class="notification-label mb-1">New review received</h5>
                                                                <span class="notification-subtext">2 hours ago</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex" href="chat.html">
                                                            <div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
                                                                <i class="fe fe-mail"></i>
                                                            </div>
                                                            <div class="mt-1 wd-80p">
                                                                <h5 class="notification-label mb-1">New Mails Received</h5>
                                                                <span class="notification-subtext">1 week ago</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex" href="cart.html">
                                                            <div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </div>
                                                            <div class="mt-1 wd-80p">
                                                                <h5 class="notification-label mb-1">New Order Received</h5>
                                                                <span class="notification-subtext">1 day ago</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="dropdown-divider m-0"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                                                </div>
                                            </div> -->
                                            <!-- NOTIFICATIONS -->
                                            <!-- <div class="dropdown d-md-flex message">
                                                <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                    <i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading border-bottom">
                                                        <div class="d-flex">
                                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger rounded-pill">4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="message-menu">
                                                        <a class="dropdown-item d-flex" href="chat.html">
                                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/1.jpg"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Madeleine</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                            3 hours ago
                                                                        </small>
                                                                </div>
                                                                <span>Hey! there I' am available....</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex" href="chat.html">
                                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/12.jpg"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Anthony</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                            5 hour ago
                                                                        </small>
                                                                </div>
                                                                <span>New product Launching...</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex" href="chat.html">
                                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/4.jpg"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Olivia</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                            45 mintues ago
                                                                        </small>
                                                                </div>
                                                                <span>New Schedule Realease......</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex" href="chat.html">
                                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="../assets/images/users/15.jpg"></span>
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-1">Sanderson</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                            2 days ago
                                                                        </small>
                                                                </div>
                                                                <span>New Schedule Realease......</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="dropdown-divider m-0"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                                                </div>
                                            </div> -->
                                            <!-- MESSAGE-BOX -->
                                            <div class="dropdown d-md-flex profile-1">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">
                                                    <span>
                                                            <img src="../assets/images/users/21.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                                        </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading">
                                                        <div class="text-center">
                                                            <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                                            <small class="text-muted">Administrator</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider m-0"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                        <span class="badge bg-secondary float-end">3</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="dropdown-icon fe fe-settings"></i> Settings
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
                                                    </a>
                                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/AuthController/logout"">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- <div class="dropdown d-md-flex header-settings">
                                                <a href="javascript:void(0);" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                    <i class="fe fe-menu"></i>
                                                </a>
                                            </div> -->
                                            <!-- SIDE-MENU -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /app-Header -->

                <!--APP-SIDEBAR-->
                <div class="sticky">
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <aside class="app-sidebar">
                        <div class="side-header">
                            <a class="header-brand1" href="index.html">
                                <img src="../assets/images/brand/booklogo1.png" class="header-brand-img desktop-logo" alt="logo">
                                <img src="../assets/images/brand/booklogo1.png" class="header-brand-img toggle-logo" alt="logo">
                                <img src="../assets/images/brand/booklogo1.png" class="header-brand-img light-logo" alt="logo">
                                <img src="../assets/images/brand/booklogo1.png" class="header-brand-img light-logo1" alt="logo">
                            </a>
                            <!-- LOGO -->
                        </div>
                        <div class="main-sidemenu">
                            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg></div>
                            <ul class="side-menu">
                                <li class="sub-category">
                                    <h3>Main</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="<?php echo site_url('Dashboard'); ?>"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                                </li>
                                <li class="sub-category">
                                    <h3>Account</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">User Settings</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Account</a></li>
                                        <li><a href="<?php echo site_url('Personal-Information'); ?>" class="slide-item">Account Settings</a></li>
                                        <li><a href="<?php echo site_url('Authors-Users'); ?>"  class="slide-item">Authors/Users</a></li>
                                        <li><a href="<?php echo site_url('Admin-Setting'); ?>" class="slide-item">Admin Settings</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Reports</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Reports</a></li>
                                        <li><a href="#" class="slide-item"> Sales Stats</a></li>
                                        <li><a href="#" class="slide-item"> Tranding Activities</a></li>
                                        <li><a href="#" class="slide-item"> Credits</a></li>
                                        <li><a href="#" class="slide-item">Visitors</a></li>
                                        <li><a href="#" class="slide-item">List of Authors</a></li>
                                        <li><a href="<?php echo site_url('List-Book'); ?>" class="slide-item">List of Books</a></li>
                                        <li><a href="#" class="slide-item">User Status</a></li>
                                        <li><a href="#" class="slide-item"> User Overtime</a></li>
                                        <li><a href="#" class="slide-item"> Revenue</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-mail"></i><span class="side-menu__label">Email</span></a>
                                </li>
                                <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="<?php echo site_url('Transaction'); ?>"><i class="side-menu__icon fe fe-mail"></i><span class="side-menu__label">Transaction</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-sliders"></i><span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Settings</a></li>
                                        <li><a href="#" class="slide-item"> Branding</a></li>
                                        <li><a href="#" class="slide-item"> Notification</a></li>
                                        <li><a href="#" class="slide-item"> Security</a></li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Backup History</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a href="<?php echo site_url('Admin-Account-Archieved'); ?>" class="sub-slide-item">Admin Accounts</a></li>
                                                <li><a href="<?php echo site_url('Authors-Users-Archieved'); ?>" class="sub-slide-item">Authors/Users Accounts</a></li>
                                                <li><a href="#" class="sub-slide-item">Books</a></li>
                                                <li><a href="#" class="sub-slide-item">Authors/Users Accounts</a></li>
                                                <li><a href="#" class="sub-slide-item">Authors/Users Accounts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="slide-item">Ticket</a></li>
                                        <li><a href="#" class="slide-item">All tickets</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                        </div>
                    </aside>
                </div>
                <!--/APP-SIDEBAR-->
                

                <!--app-content open-->
                <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">



                            

           
        </div>

        
       
        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        
<!-- JQUERY JS -->
<script src="<?php echo  base_url();?>/assets/js/jquery.min.js"></script>


<!-- BOOTSTRAP JS -->
<script src="<?php echo  base_url();?>/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


        <!-- PIETY CHART JS-->
        <script src="<?php echo  base_url();?>/assets/plugins/peitychart/jquery.peity.min.js"></script>
        <script src="<?php echo  base_url();?>/assets/plugins/peitychart/peitychart.init.js"></script>

<!-- SPARKLINE JS-->
<script src="<?php echo  base_url();?>/assets/js/jquery.sparkline.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="<?php echo  base_url();?>/assets/js/circle-progress.min.js"></script>

<!-- CHARTJS CHART JS-->
<script src="<?php echo  base_url();?>/assets/plugins/chart/Chart.bundle.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/chart/utils.js"></script>

<!-- C3 CHART JS -->
<script src="<?php echo  base_url();?>/assets/plugins/charts-c3/d3.v5.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/charts-c3/c3-chart.js"></script>

<!-- INPUT MASK JS-->
<script src="<?php echo  base_url();?>/assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="<?php echo  base_url();?>/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Sticky js -->
<script src="<?php echo  base_url();?>/assets/js/sticky.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="<?php echo  base_url();?>/assets/plugins/select2/select2.full.min.js"></script>

<!-- DATA TABLE JS-->
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/dataTables.select.min.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="<?php echo  base_url();?>/assets/js/table-data.js"></script>

<!-- APEXCHART JS -->
<script src="<?php echo  base_url();?>/assets/js/apexcharts.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/echarts/echarts.js"></script>

<!-- SIDEBAR JS -->
<script src="<?php echo  base_url();?>/assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="<?php echo  base_url();?>/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/p-scroll/pscroll.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/p-scroll/pscroll-1.js"></script>

<!-- Color Theme js -->
<script src="<?php echo  base_url();?>/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="<?php echo  base_url();?>/assets/js/custom.js"></script>
<script src="<?php echo  base_url();?>/assets/js/index.js"></script>
<script src="<?php echo  base_url();?>/assets/js/index1.js"></script>
<script src="../assets/js/jquery.sparkline.min.js"></script>

<!-- SWEET-ALERT JS -->
<script src="<?php echo  base_url();?>/assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="<?php echo  base_url();?>/assets/js/sweet-alert.js"></script>
        <script src="<?php echo  base_url();?>/assets/js/sweetalert2.all.js"></script>
        <script src="<?php echo  base_url();?>/assets/js/sweetalert2.min.js"></script>



    </body>

</html>