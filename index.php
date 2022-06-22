<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SAIT Kasus 4 (Windows Server)</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin2 </title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/typicons/typicons.css">
        <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    </div>
                    <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="images/logo.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="images/logo-mini.svg" alt="logo" />
                    </a>
                    </div>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-top"> 
                    <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Ivon Virginia</span></h1>
                        <h3 class="welcome-sub-text">Covid-19 Cases Update</h3>
                    </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form class="search-form" action="#">
                        <i class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="icon-mail icon-lg"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-bell"></i>
                        <span class="count"></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                            <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                        </div>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                    </div>
                </div>
                <div id="right-sidebar" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                    </ul>
                    <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                        </div>
                        <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Team review meeting at 3.00 PM
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                            </li>
                            <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Prepare for presentation
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                            </li>
                            <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Resolve all the low priority tickets due today
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Schedule meeting for next week
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Project review
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                            </li>
                        </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                            <p>Thomas Douglas</p>
                            <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                            <div class="wrapper d-flex">
                                <p>Catherine</p>
                            </div>
                            <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                            <p>Daniel Russell</p>
                            <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                            <p>James Richardson</p>
                            <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                            <p>Madeline Kennedy</p>
                            <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                            <p>Sarah Graves</p>
                            <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                    </div>
                </div>
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">UI Elements</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-floor-plan"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i> 
                        </a>
                        <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Forms and Datas</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="menu-icon mdi mdi-card-text-outline"></i>
                        <span class="menu-title">Form elements</span>
                        <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-layers-outline"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">pages</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">help</li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                        <i class="menu-icon mdi mdi-file-document"></i>
                        <span class="menu-title">Documentation</span>
                        </a>
                    </li>
                    </ul>
                </nav>
            <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="home-tab">
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Cases</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="statistics-title">USA</p>
                                                            <h3 class="rate-percentage">86,1 Jt</h3>
                                                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                                        </div>
                                                        <div class="d-none d-md-block">
                                                            <p class="statistics-title">India</p>
                                                            <h3 class="rate-percentage">43,3 Jt</h3>
                                                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                                        </div>
                                                        <div class="d-none d-md-block">
                                                            <p class="statistics-title">Germany</p>
                                                            <h3 class="rate-percentage">27,2 Jt</h3>
                                                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                        </div>
                                                        <div class="d-none d-md-block">
                                                            <p class="statistics-title">South Korea</p>
                                                            <h3 class="rate-percentage">18,3 Jt</h3>
                                                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                        </div>
                                                        <div>
                                                            <p class="statistics-title">Japan</p>
                                                            <h3 class="rate-percentage">9,14 Jt</h3>
                                                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                                        </div>
                                                        <div>
                                                            <p class="statistics-title">Indonesia</p>
                                                            <h3 class="rate-percentage">6,07 Jt</h3>
                                                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                            <h4 class="card-title card-title-dash">Covid-19 Cases Line Chart</h4>
                                                            <h5 class="card-subtitle card-subtitle-dash">Source by Our World in Data</h5>
                                                            </div>
                                                            <div id="performance-line-legend"></div>
                                                            </div>
                                                            <div class="chartjs-wrapper mt-5">
                                                            <canvas id="performaneLine"></canvas>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                    <div class="card bg-primary card-rounded">
                                                    <div class="card-body pb-0">
                                                        <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                                        <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="status-summary-ight-white mb-1">Positif Cases</p>
                                                            <h2 class="text-info">539 Jt</h2>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                            <canvas id="status-summary"></canvas>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                                                <div class="circle-progress-width">
                                                                    <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                                                </div>
                                                                <div>
                                                                    <p class="text-small mb-2">Total Cases</p>
                                                                    <h4 class="mb-0 fw-bold">539 Jt</h4>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                <div class="circle-progress-width">
                                                                    <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                                                </div>
                                                                <div>
                                                                    <p class="text-small mb-2">Death Cases</p>
                                                                    <h4 class="mb-0 fw-bold">6,32 Jt</h4>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 d-flex flex-column">
                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body">
                                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Covid-19 Cases (Windows OS)</h4>
                                                                    </div>
                                                                    <div>
                                                                        <div class="dropdown">
                                                                        <a href="insertCovidView.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <?php
                                                                        // Include config file
                                                                        require_once "config.php";
                                                                        
                                                                        // Attempt select query execution
                                                                        $sql = "SELECT * FROM kasus_covid";
                                                                        if($result = mysqli_query($link, $sql)){
                                                                            if(mysqli_num_rows($result) > 0){
                                                                                echo '<table class="table table-hover">';
                                                                                    echo "<thead>";
                                                                                        echo "<tr>";
                                                                                            echo "<th><center>No</center></th>";
                                                                                            echo "<th><center>Negara</center></th>";
                                                                                            echo "<th><center>Total</center></th>";
                                                                                            echo "<th><center>Meninggal</center></th>";
                                                                                            echo "<th><center>Action</center></th>";
                                                                                        echo "</tr>";
                                                                                    echo "</thead>";
                                                                                    echo "<tbody>";
                                                                                    while($row = mysqli_fetch_array($result)){
                                                                                        echo "<tr>";
                                                                                            echo "<td><center>" . $row['no_id'] . "</center></td>";
                                                                                            echo "<td><center>" . $row['negara'] . "</center></td>";
                                                                                            echo "<td><center>" . $row['total'] . "</center></td>";
                                                                                            echo "<td><center>" . $row['meninggal'] . "</center></td>";
                                                                                            echo "<td><center>";
                                                                                                echo '<a href="updateCovidView.php?no_id='. $row['no_id'] .'" class="mr-3" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                                                                                echo '<a href="deleteCovidDo.php?no_id='. $row['no_id'] .'" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                                                                            echo "</center></td>";
                                                                                        echo "</tr>";
                                                                                    }
                                                                                    echo "</tbody>";                            
                                                                                echo "</table>";
                                                                                // Free result set
                                                                                mysqli_free_result($result);
                                                                            } else{
                                                                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                                                            }
                                                                        } else{
                                                                            echo "Oops! Something went wrong. Please try again later.";
                                                                        }
                                                                        // Close connection
                                                                        mysqli_close($link);
                                                                        ?>                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body">
                                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                                        <div>
                                                                            <h4 class="card-title card-title-dash">Covid-19 Cases (Ubuntu OS)</h4>
                                                                        </div>
                                                                    <div>
                                                                        <div class="dropdown">
                                                                        <a href="insertCovidView.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                    <?php
                                                                    $curl= curl_init();
                                                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                                                    //Pastikan sesuai dengan alamat endpoint dari REST API di UBUNTU, 
                                                                    curl_setopt($curl, CURLOPT_URL, 'http://192.168.56.69/modul1/sait_project_api/get_kasus_covid.php');
                                                                    $res = curl_exec($curl);
                                                                    $json = json_decode($res, true);
                                                                            echo '<table class="table table-hover">';
                                                                                echo "<thead>";
                                                                                    echo "<tr>";
                                                                                        echo "<th><center>No</center></th>";
                                                                                        echo "<th><center>Negara</center></th>";
                                                                                        echo "<th><center>Total</center></th>";
                                                                                        echo "<th><center>Meninggal</center></th>";
                                                                                        echo "<th><center>Action</center></th>";
                                                                                    echo "</tr>";
                                                                                echo "</thead>";
                                                                                echo "<tbody>";
                                                                                for ($i = 0; $i < count($json["data"]); $i++){
                                                                                    echo "<tr>";
                                                                                        echo "<td><center> {$json["data"][$i]["no_id"]} </center></td>";
                                                                                        echo "<td><center> {$json["data"][$i]["negara"]} </center></td>";
                                                                                        echo "<td><center> {$json["data"][$i]["total"]} </center></td>";
                                                                                        echo "<td><center> {$json["data"][$i]["meninggal"]} </center></td>";
                                                                                        echo "<td><center>";
                                                                                            echo '<a href="updateCovidView.php?id_mhs='. $json["data"][$i]["no_id"] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                                                                            echo '<a href="deleteCovidDo.php?id_mhs='. $json["data"][$i]["no_id"] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                                                                        echo "</center></td>";
                                                                                    echo "</tr>";
                                                                                }
                                                                                echo "</tbody>";                            
                                                                            echo "</table>";
                                                                    curl_close($curl);
                                                                    ?>                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 d-flex flex-column">
                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                        <h4 class="card-title card-title-dash">Todo list</h4>
                                                                        <div class="add-items d-flex mb-0">
                                                                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                            <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                                                        </div>
                                                                        </div>
                                                                        <div class="list-wrapper">
                                                                        <ul class="todo-list todo-list-rounded">
                                                                            <li class="d-block">
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                                                <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                </div>
                                                                            </div>
                                                                            </li>
                                                                            <li class="d-block">
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                <div class="ps-4 text-small me-3">23 June 2020</div>
                                                                                <div class="badge badge-opacity-success me-3">Done</div>
                                                                                </div>
                                                                            </div>
                                                                            </li>
                                                                            <li>
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                <div class="badge badge-opacity-success me-3">Done</div>
                                                                                </div>
                                                                            </div>
                                                                            </li>
                                                                            <li class="border-bottom-0">
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                <div class="badge badge-opacity-danger me-3">Expired</div>
                                                                                </div>
                                                                            </div>
                                                                            </li>
                                                                        </ul>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <h4 class="card-title card-title-dash">Type By Amount</h4>
                                                                    </div>
                                                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                                                    <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- disini tampilan api eksternal berita -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
            <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->

        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="vendors/progressbar.js/progressbar.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
    </body>
</html>