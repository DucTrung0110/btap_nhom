@extends('admin.layout.layout')
@section('main')
    <div class="content-page">

        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar">
                <div class="topbar-menu d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-box">
                        <!-- Brand Logo Light -->
                        <a href="index.html" class="logo-light">
                            <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
                            <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                        </a>

                        <!-- Brand Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg">
                            <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="dropdown d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Create New
                            <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-briefcase me-1"></i>
                                <span>New Projects</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-user me-1"></i>
                                <span>Create Users</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-bar-chart-line- me-1"></i>
                                <span>Revenue Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-headphones me-1"></i>
                                <span>Help & Support</span>
                            </a>

                        </div>
                    </div>

                    <!-- Mega Menu Dropdown -->
                    <div class="dropdown dropdown-mega d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Mega Menu
                            <i class="mdi mdi-chevron-down  ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="widgets.html">Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="extended-nestable.html">Nestable List</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Sliders</a>
                                                </li>
                                                <li>
                                                    <a href="pages-gallery.html">Masonry Items</a>
                                                </li>
                                                <li>
                                                    <a href="extended-sweet-alert.html">Sweet Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Treeview Page</a>
                                                </li>
                                                <li>
                                                    <a href="extended-tour.html">Tour Page</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="ecommerce-products.html">eCommerce Pages</a>
                                                </li>
                                                <li>
                                                    <a href="crm-dashboard.html">CRM Pages</a>
                                                </li>
                                                <li>
                                                    <a href="email-inbox.html">Email</a>
                                                </li>
                                                <li>
                                                    <a href="apps-calendar.html">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="contacts-list.html">Team Contacts</a>
                                                </li>
                                                <li>
                                                    <a href="task-kanban-board.html">Task Board</a>
                                                </li>
                                                <li>
                                                    <a href="email-templates.html">Email Templates</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Left Sidebar with User</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Menu Collapsed</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Small Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">New Header Style</a>
                                                </li>
                                                <li>
                                                    <a href="pages-search-results.html">Search Result</a>
                                                </li>
                                                <li>
                                                    <a href="pages-gallery.html">Gallery Pages</a>
                                                </li>
                                                <li>
                                                    <a href="pages-coming-soon.html">Maintenance & Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h3 class="text-dark">Special Discount Sale!</h3>
                                        <h4>Save up to 70% off.</h4>
                                        <a href="https://1.envato.market/uboldadmin" target="_blank" class="btn btn-primary rounded-pill mt-3">Download Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="topbar-menu d-flex align-items-center">
                    <!-- Topbar Search Form -->
                    <li class="app-search dropdown me-3 d-none d-lg-block">
                        <form>
                            <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
                            <span class="fe-search search-icon font-22"></span>
                        </form>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Fullscreen Button -->
                    <li class="d-none d-md-inline-block">
                        <a class="nav-link waves-effect waves-light" href="#" data-toggle="fullscreen">
                            <i class="fe-maximize font-22"></i>
                        </a>
                    </li>

                    <!-- Search Dropdown (for Mobile/Tablet) -->
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line font-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <!-- App Dropdown -->
                    <li class="dropdown d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-grid font-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div>
                    </li>

                    <!-- Language flag dropdown  -->
                    <li class="dropdown d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <!-- Notofication dropdown -->
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell font-22"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="px-1" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                <!-- item-->

                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <!-- Light/Darj Mode Toggle Button -->
                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                            <i class="ri-moon-line font-22"></i>
                        </div>
                    </li>

                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="ms-1 d-none d-md-inline-block">
                                        Geneva <i class="mdi mdi-chevron-down"></i>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <!-- Right Bar offcanvas button (Theme Customization Panel) -->
                    <li>
                        <a class="nav-link waves-effect waves-light" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="fe-settings font-22"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Products</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <form class="d-flex flex-wrap align-items-center">
                                            <label for="inputPassword2" class="visually-hidden">Search</label>
                                            <div class="me-3">
                                                <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <label for="status-select" class="me-2">Sort By</label>
                                            <div class="me-sm-3">
                                                <select class="form-select my-1 my-lg-0" id="status-select">
                                                    <option selected="">All</option>
                                                    <option value="1">Popular</option>
                                                    <option value="2">Price Low</option>
                                                    <option value="3">Price High</option>
                                                    <option value="4">Sold Out</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-lg-end my-1 my-lg-0">
                                            <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                            <a href="ecommerce-product-edit.html" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add New</a>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-1.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Jones Men's T-shirt (Blue)</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 98 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $39
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-2.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Brown Hoodie for men</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 23 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $98
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-3.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Designer Awesome T-Shirt</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 235 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $49
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-4.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Jones Awesome T-Shirt</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 385 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $29
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-5.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Green Hoodie for men</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 25 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $49
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-6.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Blue Awesome T-Shirt</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 39 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $19
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-7.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Jones Men's T-shirt (Green)</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 36 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $99
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-box">
                            <div class="card-body">
                                <div class="product-action">
                                    <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                </div>

                                <div class="bg-light">
                                    <img src="assets/images/products/product-8.png" alt="product-pic" class="img-fluid" />
                                </div>

                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Red Hoodie for men</a> </h5>
                                            <div class="text-warning mb-2 font-13">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="m-0"> <span class="text-muted"> Stocks : 128 pcs</span></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                $29
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-12">
                        <ul class="pagination pagination-rounded justify-content-end mb-3">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div><script>document.write(new Date().getFullYear())</script> © Ubold - <a href="https://coderthemes.com/" target="_blank">Coderthemes.com</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end footer-links">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
