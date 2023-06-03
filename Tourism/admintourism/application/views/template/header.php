<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>AdminUX Panel - Responsive Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta content="SRGIT" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png">

<!-- page css -->
<link href="<?php echo base_url()?>assets/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>plugins/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/charts.css" rel="stylesheet" type="text/css" />

<!-- C3 charts css -->
<link href="<?php echo base_url()?>plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

<!--Morris Chart CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/morris/morris.css">

<link href="<?php echo base_url()?>plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()?>plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>

</head>
<body >

<!-- Preloader Ends--> 
<!-- Begin page -->
<div id="wrapper" style="background-color:#FFF"> 
  <!-- Top Bar Start -->
  <div id="page-header" class="topbar bg-blue"> 
    <!-- LOGO -->
    <div class="topbar-left"> 
      <!-- Image logo --> 
      <a href="index.html" class="logo"> <span> <img src="<?php echo base_url()?>assets/images/logo.png" alt="" class="lg-logo"> </span> <i> <img src="<?php echo base_url()?>assets/images/logo_sm.png" alt="" class="sm-logo"> </i> </a> </div>
    
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container"> 
        
        <!-- Navbar-left -->
        <ul class="nav navbar-nav navbar-left nav-menu-left">
          <li>
            <button type="button" class="button-menu-mobile open-left waves-effect"> <i class="dripicons-menu"></i> </button>
          </li>
        </ul>
        
        <!-- Search box -->
       
        <!-- end Search box --> 
        
        <!-- notification bar -->
        
        <div class="notification-header">
          <ul class="nav navbar-nav navbar-right content-right">
           
           
            <li class="dropdown user-box"> <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="false"> <img src="<?php echo base_url()?>assets/images/users/avatar-11.jpg" alt="user-img" class="img-circle user-img"> </a>
              <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
              	<li><a href="javascript:void(0)"><?php echo $this->session->userdata('username');?></a></li>
                <li><a href="<?php echo site_url() ?>/profilecontroller">Profile</a></li>
                <li><a href="<?php echo site_url() ?>/logincontroller/changepassword"><span class="badge badge-info pull-right"></span>Change password</a></li>
                <li><a href="<?php echo site_url() ?>/logincontroller/lockscreen">Lock screen</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url();?>/logincontroller/logout/">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- end container --> 
    </div>
    <!-- end navbar --> 
  </div>
