<html lang="en">
	<head>


	<?php
	session_start();
	?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Elegance Smart Society Management</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/s1.css">
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<style>
		.myDiv{
			background-color:black;
		}
		 /* .hi{
			position: absolute;
 	 		top: 15px;
  			right: 0;
		}  */
		</style>


	</head>
	<body class="no-skin" style="background-image:url('elegance.jpg');">
		<div id="navbar" class="navbar navbar-default          ace-save-state navbar-fixed-top">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left fixed" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="home.php" class="navbar-brand"> 
						<small>
						<i class="menu-icon glyphicon glyphicon-home"></i>
							<!-- <i class="fa fa-leaf"></i> -->
							ELEGANCE SMART SOCIETY MANAGEMENT 
						</small>
					</a>
				</div>
				<!-- <div class="navbar-buttons navbar-header pull-right">
					<ul class="nav ace-nav">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">	
						<img width="60" height="40"src="
						<small style="color:white;font-size:15px;">
			             
							 
							 </small>
									<i class="ace-icon fa fa-caret-down" style="color:white;"></i>
								</a> -->

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state sidebar-fixed" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<div class="nav-wrap-up pos-rel"><div class="nav-wrap" style=""><div style="position: relative; top: 0px; transition-property: top; transition-duration: 0.15s;"><div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<!--<button class="btn btn-success">
							<!--<i class="ace-icon fa fa-signal"></i>
						</button>
						<button class="btn btn-info">
							<!-- <i class="ace-icon fa fa-pencil"></i> 
						</button>-->
						
					<h5 style="color: #616161;margin-top: 13px;  font-family: open sans;" >
						<span class="menu-text"  > MENU </span>
					</h5>
					<!--	<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>
						<i style="font-size: 15px;" class="ace-icon glyphicon glyphicon-list"></i>
						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>-->
						
					</div>
	
					 <div class="sidebar-shortcuts-mini" id="">
					
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>
				<ul class="nav nav-list" style="top: 0px;">
				   
					<li class="hover">
						<a href="home.php">
						<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text">
							HOME
							</span>
						
						</a>
                    </li>




					 <!-- <ul class="submenu nav-show" style="display: block;"> -->

					 <li class="">
      <a href="parking.php" class="dropdown-toggle">
       <i class="menu-icon fa fa-list"></i>
       <span class="menu-text">Parking </span>

       <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">

      
       
       <li class="">
        <a href="pnewbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         New Booking
        </a>

        <b class="arrow"></b>
       </li>

       <li class="">
        <a href="pmybooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         My Booking
        </a>

	
        <a href="papprovedbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Arrpoved Booking
        </a>

		<li class="">
        <a href="prejectedbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Rejected Booking
        </a>

		<li class="">
        <a href="ppendingbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Pending Booking
        </a>
 </ul>

       

        <b class="arrow"></b>
       </li>
       <li class="">
     
 

       <b class="arrow fa fa-angle-down"></b>
      </a>
      <a href="club.php" class="dropdown-toggle">
       <i class="menu-icon fa fa-list"></i>
       <span class="menu-text">Banquet Hall Booking </span>

       <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">

	  
	  <li class="">
        <a href="displaybanquet.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Display Banquets
        </a>

        <b class="arrow"></b>
       </li>

       <li class="">
        <a href="banquetoldbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Old Booking
        </a>

        <b class="arrow"></b>
       </li>
       
       <li class="">
        <a href="banquetnewbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         New Booking
        </a>

        <b class="arrow"></b>
       </li>

       <li class="">
        <a href="banquetapprovedbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Approved Booking
        </a>

        <b class="arrow"></b>
       </li>
       

	   <li class="">
        <a href="banquetrejectedbooking.php">
         <i class="menu-icon fa fa-caret-right"></i>
         Rejected Booking
        </a>

        <b class="arrow"></b>
       </li>
       


       
       
      </ul>

 
     

      <li class="hover">
                <a href="displayevents.php">
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     Events
     </span> 
     </a>  
     <!-- </li> -->     
	 
	 
	 <li class="hover">
                <a href="displayexpenses.php">
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     Display Expenses
     </span> 
     </a>  
     <!-- </li> -->  



                    
     <li class="hover">
                <a href="dopayment.php">
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     Do Payment
     </span> 
     </a>  
     <!-- </li> -->

     <li class="hover">
                <a href="userpasswordchange.php" >
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     Change Password
     </span> 
     </a>  
     <!-- </li> -->
     <li class="hover">
                <a href="userprofileupdate.php">
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     Update Profile
     </span> 
     </a>  
     <!-- </li> -->
     <li class="hover">
     <a href="makecomplain.php">
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     Make Complaint
     </span> 
     </a>  
     <!-- </li> -->
     <li class="hover">
     <a href="viewreport.php">
       <i class="menu-icon fa fa-list-alt"></i>
       </i>
     <span class="menu-text">
     View Report
     </span> 
     </a>  
     <!-- </li> -->
 



                    
             







                    
                    <li class="hover">
						<a href="excat_display.php">
						<i class="menu-icon fa fa-power-off"></i>
							<span class="menu-text">
							Logout
							</span>
							
						</a>
                    </li>
         						
						</ul><div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: -93px; left: 373px;"><div class="scroll-bar" style="top: 0px;"></div></div>
					</li>
				</ul></div></div><div class="ace-scroll nav-scroll scroll-disabled"><div class="scroll-track" style="display: none; height: 452px;"><div class="scroll-bar" style="transition-property: top; transition-duration: 0.1s; height: 358px; top: 0px;"></div></div><div class="scroll-content" style=""><div style=""></div></div></div></div><!-- /.nav-list -->
				
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse" style="z-index: 1;">
					<i id="sidebar-toggle-icon" class="ace-save-state ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>	
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off">
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">