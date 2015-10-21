<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.3
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Esuvidya</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/style-metro.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/style-responsive.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/main_css.css');?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/themes/default.css');?>" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url('assets/plugins/uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css');?>"/>

	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

	<script src="<?php echo base_url('assets/plugins/jquery-1.10.1.min.js');?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js');?>" type="text/javascript"></script>
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js');?>" type="text/javascript"></script>
   <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				<img src="<?php echo base_url('assets/img/logo.png');?>" alt="logo"/>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url('assets/img/menu-toggler.png');?>" alt="" />
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN TOP NAVIGATION MENU -->
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								<p>You have 14 new notifications</p>
							</li>
							<li>
								<a href="#">
								<span class="label label-success"><i class="icon-plus"></i></span>
								New user registered.
								<span class="time">Just now</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li>
								<p>You have 12 pending tasks</p>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">New release v1.2</span>
								<span class="percent">30%</span>
								</span>
								<span class="progress progress-success ">
								<span style="width: 30%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="username"><?php echo ucwords($this->session->userdata('username'));?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<!-- <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
							<li class="divider"></li>
							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li> -->
							<li><a href="<?php echo base_url('login/logout') ; ?>"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="<?php echo base_url('superadmin'); ?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;"><i class="icon-cogs"></i><span class="title">Students</span><span class="arrow "></span></a>
					<ul class="sub-menu">
						<li ><a href="<?php echo base_url('student/add.htm'); ?>">Add Student</a></li>
						<li ><a href="<?php echo base_url('student/listing.htm'); ?>">Student Listing</a></li>
						<li ><a href="<?php echo base_url(''); ?>">Student Details</a></li>
						<li ><a href="<?php echo base_url(''); ?>">Bulk Modification</a></li>
						<li ><a href="<?php echo base_url(''); ?>">Select and Print</a></li>
						<li ><a href="<?php echo base_url('student/strength.htm'); ?>">Student strength</a></li>
						<li ><a href="<?php echo base_url('student/select_student'); ?>">Bonafide Certificate</a></li>
						<li ><a href="<?php echo base_url('student/leaving_certificate'); ?>">Leaving Certificate</a></li>
						<li ><a href="<?php echo base_url(''); ?>">Student Details Overview</a></li>
						<li ><a href="<?php echo base_url(''); ?>">Marks Left Student</a></li>
						<li>
							<a href="javascript:;"><i class="icon-bookmark-empty"></i>STUDENT LIST<span class="arrow"></span></a>
							<ul class="sub-menu">
								<li><a href="<?php echo base_url('student/student_by_birthday_listing'); ?>">Birthday</a></li>
								<li><a href="<?php echo base_url('student/student_by_age_listing'); ?>">Age</a></li>
								<li><a href="<?php echo base_url('student/student_by_class_listing'); ?>">Class</a></li>
								<li><a href="<?php echo base_url('student/student_by_caste_listing'); ?>">Caste</a></li>
								<li><a href="<?php echo base_url('student/new_student_listing'); ?>">New</a></li>
								<li><a href="<?php echo base_url('student/left_student_listing'); ?>">Left</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><i class="icon-bookmark-empty"></i>ATTENDANCE<span class="arrow"></span></a>
							<ul class="sub-menu">
								<li><a href="<?php echo base_url(''); ?>">Update Holidays</a></li>
								<li><a href="<?php echo base_url(''); ?>">Mark Attendance</a></li>
								<li><a href="<?php echo base_url(''); ?>">Daily Summary</a></li>
								<li><a href="<?php echo base_url(''); ?>">Average Monthly Summary</a></li>
								<li><a href="<?php echo base_url(''); ?>">Long Absentees List</a></li>
								<li><a href="<?php echo base_url(''); ?>">Defaulters</a></li>
								<li><a href="<?php echo base_url(''); ?>">100% Present List</a></li>
								<li><a href="<?php echo base_url(''); ?>">Print Register</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i>
					<span class="title">Teachers</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="ui_general.html">
							General</a>
						</li>
						<li >
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li >
							<a href="ui_modals.html">
							Enhanced Modals</a>
						</li>
						<li >
							<a href="ui_tabs_accordions.html">
							Tabs & Accordions</a>
						</li>
						<li >
							<a href="ui_jqueryui.html">
							jQuery UI Components</a>
						</li>
						<li >
							<a href="ui_sliders.html">
							Sliders</a>
						</li>
						<li >
							<a href="ui_tiles.html">
							Tiles</a>
						</li>
						<li >
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li >
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li >
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-table"></i>
					<span class="title">Parents</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="form_layout.html">
							Form Layouts</a>
						</li>
						<li >
							<a href="form_samples.html">
							Advance Form Samples</a>
						</li>
						<li >
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li >
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li >
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li >
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li >
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Users</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo base_url('user/listing'); ?>"><i class="icon-time"></i>List Users</a>
						</li>
						<li >
							<a href="<?php echo base_url('user/add_user'); ?>"><i class="icon-cogs"></i>Add User</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-gift"></i>
					<span class="title">Accounts</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="extra_profile.html">
							User Profile</a>
						</li>
						<li >
							<a href="extra_lock.html">
							Lock Screen</a>
						</li>
						<li >
							<a href="extra_faq.html">
							FAQ</a>
						</li>
						<li >
							<a href="inbox.html">
							Inbox</a>
						</li>
						<li >
							<a href="extra_search.html">
							Search Results</a>
						</li>
						<li >
							<a href="extra_invoice.html">
							Invoice</a>
						</li>
						<li >
							<a href="extra_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li >
							<a href="extra_image_manager.html">
							Image Manager</a>
						</li>
						<li >
							<a href="extra_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li >
							<a href="extra_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li >
							<a href="extra_404_option3.html">
							404 Page Option 3</a>
						</li>
						<li >
							<a href="extra_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li >
							<a href="extra_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="active" href="javascript:;">
					<i class="icon-sitemap"></i>
					<span class="title">Fees</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 2</a></li>
								<li><a href="#">Sample Link 3</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
							Item 3
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-folder-open"></i>
					<span class="title">Misc</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;"><i class="icon-cogs"></i>Masters<span class="arrow"></span></a>
							<ul class="sub-menu">

								<li>
									<a href="javascript:;"><i class="icon-user"></i>Sections<span class="arrow"></span></a>
									<ul class="sub-menu">
										<li><a href="<?php echo base_url('master/add_section') ; ?>"><i class="icon-add"></i>Add Section</a></li>
										<li><a href="<?php echo base_url('master/section_listing') ; ?>"><i class="icon-edit"></i>List Sections</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;"><i class="icon-user"></i>Standards<span class="arrow"></span></a>
									<ul class="sub-menu">
										<li><a href="<?php echo base_url('master/add_standard') ; ?>"><i class="icon-add"></i>Add Standard</a></li>
										<li><a href="<?php echo base_url('master/standard_listing') ; ?>"><i class="icon-edit"></i>List Standards</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;"><i class="icon-user"></i>Divisions<span class="arrow"></span></a>
									<ul class="sub-menu">
										<li><a href="<?php echo base_url('master/add_division') ; ?>"><i class="icon-add"></i>Add Division</a></li>
										<li><a href="<?php echo base_url('master/division_listing') ; ?>"><i class="icon-edit"></i>List Divisions</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;"><i class="icon-globe"></i>Item 2<span class="arrow"></span></a>
							<ul class="sub-menu">
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="icon-folder-open"></i>
							Item 3
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					Widget settings form goes here
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<?php 	$this->load->view($middle); ?>
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
		  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		   <!-- BEGIN CORE PLUGINS -->

		   <!--[if lt IE 9]>
		   <script src="<?php echo base_url('assets/plugins/excanvas.min.js');?>"></script>
		   <script src="<?php echo base_url('assets/plugins/respond.min.js');?>"></script>
		   <![endif]-->
		   <script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
		   <script src="<?php echo base_url('assets/plugins/jquery.blockui.min.js');?>" type="text/javascript"></script>
		   <script src="<?php echo base_url('assets/plugins/jquery.cookie.min.js');?>" type="text/javascript"></script>
		   <script src="<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js');?>" type="text/javascript" ></script>
		   <script src="<?php echo base_url('assets/scripts/ui-jqueryui.js');?>"></script>
		  <!-- END CORE PLUGINS -->
		   <!-- BEGIN PAGE LEVEL PLUGINS -->
		   <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
		   <!-- END PAGE LEVEL PLUGINS -->
		   <!-- BEGIN PAGE LEVEL SCRIPTS -->
		   <script src="<?php echo base_url('assets/scripts/app.js');?>" type="text/javascript"></script>
		   <!-- END PAGE LEVEL SCRIPTS -->
		   <script>
		      jQuery(document).ready(function() {
		        App.init(); // initlayout and core plugins
				UIJQueryUI.init();

		      });
		   </script>
		  <!-- END JAVASCRIPTS -->
	</body>
<!-- END BODY -->
</html>
