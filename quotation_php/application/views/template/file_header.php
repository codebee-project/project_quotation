<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<!-- meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- title -->
    <title>codebee</title>
    <!-- link css -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.css"); ?>" rel="stylesheet" />
    <!-- link for template css -->
    <link href="<?php echo base_url("assets/css/nav_menu.css"); ?>" rel="stylesheet">
    <!-- link for content css -->
    <link href="<?php echo base_url("assets/css/main.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/main_responsive.css"); ?>" rel="stylesheet">
    <!-- css this page (data table)-->
    <link href="<?php echo base_url("assets/css/dataTables.bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/rowGroup.bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/responsive.bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- toggle on/off -->
    <link href="<?php echo base_url("assets/css/bootstrap-toggle.min.css"); ?>" rel="stylesheet">
    <!-- link for bootbox alert css -->
    <link href="<?php echo base_url("assets/css/boot_alert.css"); ?>" rel="stylesheet">
</head>

<body>
<!-- start attribute for change page php -->
<?php
    $url_edit_pro = base_url('home/view_edit_profile');
    $url_dash = base_url('home/view_dash/');
?>
<!-- end attribute for change page php -->

<!-- start header -->
<div class="bg-box-menu col-md-12">
<div class="box-center">
    <!-- Hamburger menu -->
    <div id="menu-toggle" class="fa fa-bars tooltips control-ham" data-placement="right" data-original-title="Toggle Navigation"></div>
    <!-- Logo -->
    <div class="control-logo">
        <a href="index.html" class="logo"><b>
            <img src="<?php echo base_url("assets/img/logo_navbar.png"); ?>" class="logo-navbar" alt="logo_codebee"></b>
        </a>
    </div>
    <!-- Change language EN/TH -->
    <div class="box-top-menu">
      <ul class="nav pull-right top-menu">
        <li>
          <div class="col-md-6 col-xs-6 control-language"><a class="EN active" href="#">EN</a></div>
          <div class="col-md-6 col-xs-6 control-language"><a class="TH" href="#">TH</a></div>
        </li>
      </ul>
    </div>
</div>
</div>
<!-- end header -->

<!-- start togglebar/sidebar -->
<div id="toggle-bar" class="toggled-no-transition">
<div id="sidebar-wrapper" class="control-sidebar">
    <ul class="sidebar-nav">
        <li class="control-edit-pic">
            <p class="text-center">
                <a class="control-pic-a" href="edit_profile.html">
                    <img src="<?php echo base_url("assets/img/pic_1.jpg");?>" class="img-circle control-pic-user" width="80">
                </a>
            </p>
            <h5 class="text-center font-sidebar color-white">Taneeya</h5>
        </li>
        <li>
            <a class="active" href="<?php echo base_url("dashboard.html"); ?>" >
                <i class="fa fa-bar-chart-o"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("quotation_list.html"); ?>" >
                <i class="fa fa-file-text"></i>
                <span>Quotation</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("document_list.html"); ?>" >
                <i class="fa fa-file-text"></i>
                <span>Document</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("invoice_list.html"); ?>" >
                <i class="fa fa-file-text"></i>
                <span>Invoice</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("company_list.html"); ?>" >
                <i class="fa fa-building"></i>
                <span>Company</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("contact_list.html"); ?>" >
                <i class="fa fa-address-book"></i>
                <span>Contact</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url("management_user.html"); ?>" >
                <i class="fa fa-users"></i>
                <span>Management User</span>
            </a>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-1">
                <i class="fa fa-cog"></i>
                <span>Website Setting</span>
            </a>
            <ul id="submenu-1" class="collapse no-pad-lr">
                <li class="lh-0"><a class="control-sub-a" href="<?php echo base_url("type_list.html"); ?>" >Quotation Type</a></li>
            </ul>
        </li>
        <li>
            <a id="logout" href="#">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
</div>
<!-- end togglebar/sidebar -->


