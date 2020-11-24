<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>ENHAS Admin Panel</title>
    <!-- Icons-->
    <link rel="icon" href="<?php echo base_url()?>assets/landing/img/favicon.ico">
    <link href="<?php echo base_url();?>assets/admin/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/simple-line-icons/css/simple-line-icons.css"
        rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="<?php echo base_url();?>assets/landing/img/logo-enha.png" width="32"
                height="32" alt="Enha Logo">
            <img class="navbar-brand-minimized" src="<?php echo base_url();?>assets/landing/img/logo-enha.png"
                width="30" height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">
            <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="img-avatar" src="<?php echo base_url();?>assets/landing/img/logo-enha.png"
                        alt="admin@enha">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="<?= site_url('adminpanel/logout')?>">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
        <!-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
            <span class="navbar-toggler-icon"></span>
        </button> -->
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('adminpanel/dashboard');?>">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                            <span class="badge badge-primary">HOME</span>
                        </a>
                    </li>
                    <li class="nav-title"> </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-people"></i>Direktori</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('adminpanel/dataguru');?>">
                                    <i class="nav-icon icon-user"></i>Direktori Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('adminpanel/tables');?>">
                                    <i class="nav-icon icon-user"></i>Direktori Siswa</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('adminpanel/charts');?>">
                            <i class="nav-icon icon-frame"></i>Input Image Slide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('adminpanel/charts');?>">
                            <i class="nav-icon icon-paper-clip"></i>Input File Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('adminpanel/charts');?>">
                            <i class="nav-icon icon-info"></i>Input Informasi</a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

        <!-- Your content will be here-->
        <?php echo $contents; ?>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://misnurulhuda.sch.id">ENHAS Web Admin Panel</a>
            <span>&copy; 2020 Build by zlz.</span>
        </div>
    </footer>
    <!-- Bootstrap and necessary plugins-->
    <script src="<?php echo base_url();?>assets/admin/vendors/jquery/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/popper.js/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url();?>assets/admin/vendors/chart.js/js/Chart.min.js"></script>
    <script
        src="<?php echo base_url();?>assets/admin/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/charts.js"></script>
</body>

</html>