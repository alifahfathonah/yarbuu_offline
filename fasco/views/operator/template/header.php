<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000080" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/back/operator/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/operator/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/operator/assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/operator/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/operator/assets/libs/quill/dist/quill.snow.css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	

	<![endif]-->


<!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <meta name="msapplication-config" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/guru/">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/back/operator/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?php echo base_url(); ?>assets/back/operator/assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/guru/add_learning_material">Learning Material</a>                             
                                                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/back/guru/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> <?php echo $this->session->userdata('nama'); ?></a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>index.php/operator/" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
						
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Subjects </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/subjects" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Subjects </span></a></li>

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/add_subject" class="sidebar-link"><i class="mdi mdi-bookmark-plus"></i><span class="hide-menu">Add New Subject </span></a></li>

                            </ul>
                        </li>        

						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Classes </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/classes" class="sidebar-link"><i class="mdi mdi-home"></i><span class="hide-menu"> Classes </span></a></li>

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/add_class" class="sidebar-link"><i class="mdi mdi-bookmark-plus"></i><span class="hide-menu">Add New Class </span></a></li>

                            </ul>
                        </li>     

						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-contacts"></i><span class="hide-menu">Students </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/students" class="sidebar-link"><i class="mdi mdi-contacts"></i><span class="hide-menu"> Students </span></a></li>

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/add_student" class="sidebar-link"><i class="mdi mdi-bookmark-plus"></i><span class="hide-menu">Add New Student </span></a></li>

                            </ul>
                        </li>
						
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-convert"></i><span class="hide-menu">Log Students</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/log_student" class="sidebar-link"><i class="mdi mdi-account-convert"></i><span class="hide-menu"> Login and Logout </span></a></li>

                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>index.php/operator/video_download" class="sidebar-link"><i class="mdi mdi-play"></i><span class="hide-menu">Video Download </span></a></li>

                            </ul>
                        </li>
						
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>index.php/operator/print_class" aria-expanded="false"><i class="mdi mdi-cloud-print"></i><span class="hide-menu">Print Student</span></a></li>
						
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>index.php/operator/learning_material" aria-expanded="false"><i class="mdi mdi-play"></i><span class="hide-menu">Video</span></a></li>
						
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>index.php/operator/backup_and_restore_database" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Backup Database</span></a></li>
						
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>index.php/auth/logout" aria-expanded="false"><i class="mdi mdi-redo-variant"></i><span class="hide-menu">Sign Out</span></a></li>
                        
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== --
		