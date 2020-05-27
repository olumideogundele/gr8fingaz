<?php

session_start();
include ("config/DB_config.php"); 
//include("web-include/checkuser.php");
include("web-include/class_file.php");
 
 include("web-include/SendingSMS.php");
 include("web-include/view-application-details.php");

 $usertype = "";
	 if(isset($_SESSION['usertype'] ))
	 {
	 $usertype = $_SESSION['usertype']; 
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
   <title><?php  if(isset($inst_name))
{
	echo  $inst_name."::: ".$inst_slogan;
	
}
		else
		{
			
			echo "SOFT SYNERGEY: CONNECT THE FUTURE";
			
		}
		?></title>
  <!--favicon-->
  <link rel="icon" href="backend/assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="backend/assets/plugins/summernote/dist/summernote-bs4.css"/>
  <!-- Vector CSS -->
  <link href="backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="backend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="backend/assets/css/animate.css" rel="stylesheet" type="text/css"/>
	
  <link href="backend/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <!--inputtags-->
  <link href="backend/assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!--multi select-->
  <link href="backend/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <!--Bootstrap Datepicker-->
  <link href="backend/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!--Touchspin-->
  <link href="backend/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css"
	
	  <!--Data Tables -->
  <link href="backend/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="backend/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- Icons CSS-->
  <link href="backend/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Horizontal CSS-->
  <link href="backend/assets/css/horizontal-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="backend/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link" href="javascript:void();">
        <div class="media align-items-center">
           <img src="backend/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          <div class="media-body">
            <h5 class="logo-text"> Admin</h5>
          </div>
        </div>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-primary">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<!-- start horizontal Menu -->
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
		
        <ul id="respMenu" class="horizontal-menu">
		
			<li>
                <a href="dashboard.php">
                    <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                    <span class="title">Dashboard</span>
		            <span class="arrow"></span>
                </a>
                <!-- Level Two-->
                
            </li>
			
            <li>
                <a href="javascript:;">
                    <i class="zmdi zmdi-settings"></i>
                    <span class="title">Settings</span>
		    <span class="arrow"></span>

                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="application-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i> Application SetUp</a></li>
                    <li><a href="register-categories.php"><i class="zmdi zmdi-dot-circle-alt"></i>  Categories</a></li>
                    <li><a href="register-sub-categories.php"><i class="zmdi zmdi-dot-circle-alt"></i> Sub-Categories</a></li>
                    <li><a href="register-products.php"><i class="zmdi zmdi-dot-circle-alt"></i> Register Products</a></li>
					 
                </ul>
            </li>
			
			 <li>
                <a href="javascript:;">
                    <i class="fa fa-inbox"></i>
                    <span class="title">Sub Packages</span>
		    <span class="arrow"></span>

                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="service-provider-package-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i> Provider Sub-Package</a></li>
                    <li><a href="users-package-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i> Users   Sub-Package</a></li>
                    <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Subscription Details	</a></li>
                    
					 
                </ul>
            </li>
			
			 <li>
                <a href="javascript:;">
                    <i class="fa fa-inbox"></i>
                    <span class="title">Service Providers</span>
		    <span class="arrow"></span>

                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="register-service-provider.php"><i class="zmdi zmdi-dot-circle-alt"></i>Register Providers</a></li>
                    <li><a href="users-package-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i>View   Providers</a></li>
                    <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Subscription Details	</a></li>
                    
					 
                </ul>
            </li>
  
  
  
        </ul>
    </nav>