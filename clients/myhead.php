<?php
session_start();
include ("../restricted/config/DB_config.php"); 
 
include("../restricted/web-include/checkuser-2.php");
include("../restricted/web-include/class_file.php");


 
 include("../restricted/web-include/SendingSMS.php");
 include("../restricted/web-include/view-application-details-home.php");
 include("../restricted/web-include/view-users-details.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title><?php
		
		echo $inst_name." :::: ".$inst_slogan;
		
		?></title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="<?php echo "../restricted/".$inst_logo; ?>" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo "../restricted/".$inst_logo; ?>">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo "../restricted/".$inst_logo; ?>">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo "../restricted/".$inst_logo; ?>">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo "../restricted/".$inst_logo; ?>">
	
  <!-- Bootstrap core CSS-->
  <link href="../backend/admin_section/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="../backend/admin_section/css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="../backend/admin_section/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="../backend/admin_section/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	 
  <link href="../backend/admin_section/vendor/dropzone.css" rel="stylesheet">
  <link href="../backend/admin_section/css/date_picker.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="../backend/admin_section/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="../backend/admin_section/js/editor/summernote-bs4.css">
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php"><img src="<?php echo "../restricted/".$inst_logo; ?>" data-retina="true" alt="" width="165" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../backend/admin_section/index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="../backend/admin_section/messages.html">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">Messages</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Bookings">
          <a class="nav-link" href="../backend/admin_section/bookings.html">
            <i class="fa fa-fw fa-calendar-check-o"></i>
            <span class="nav-link-text">Bookings <span class="badge badge-pill badge-primary">6 New</span></span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="My listings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMylistings" data-parent="#mylistings">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">My listings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMylistings">
            <li>
              <a href="../backend/admin_section/listings.html">Pending <span class="badge badge-pill badge-primary">6</span></a>
            </li>
			<li>
              <a href="../backend/admin_section/listings.html">Active <span class="badge badge-pill badge-success">6</span></a>
            </li>
			<li>
              <a href="../backend/admin_section/listings.html">Expired <span class="badge badge-pill badge-danger">6</span></a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
          <a class="nav-link" href="../backend/admin_section/reviews.html">
            <i class="fa fa-fw fa-star"></i>
            <span class="nav-link-text">Reviews</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
          <a class="nav-link" href="../backend/admin_section/bookmarks.html">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">Bookmarks</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
          <a class="nav-link" href="add-listing.php">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Add listing</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link" href="../backend/admin_section/user-profile.html">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">My Profile</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#Components">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="../backend/admin_section/charts.html">Charts</a>
            </li>
			<li>
              <a href="../backend/admin_section/tables.html">Tables</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control search-top" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="../restricted/web-include/logout-2.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>