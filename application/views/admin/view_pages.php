<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Admin - Escaro Royale  | Pages - View Pages</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<?php include('admin_header.php');?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar  navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
	<div class="page-logo">
            <a href="index.html">
                <img src="assets/img/logo.png" alt="logo"/>
            </a>
        </div>
        <form class="search-form search-form-header" role="form" action="index.html">
            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
            </div>
        </form>
	<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-bell"></i>
				<span class="badge badge-success">
				6 </span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							 You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-success">
								<i class="fa fa-plus"></i>
								</span>
								New user registered. <span class="time">
								Just now </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Server #12 overloaded. <span class="time">
								15 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
								<i class="fa fa-bell"></i>
								</span>
								Server #2 not responding. <span class="time">
								22 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
								<i class="fa fa-bullhorn"></i>
								</span>
								Application error. <span class="time">
								40 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Database overloaded 68%. <span class="time">
								2 hrs </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								2 user IP blocked. <span class="time">
								5 hrs </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
								<i class="fa fa-bell"></i>
								</span>
								Storage Server #4 not responding. <span class="time">
								45 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
								<i class="fa fa-bullhorn"></i>
								</span>
								System Error. <span class="time">
								55 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Database overloaded 68%. <span class="time">
								2 hrs </span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all notifications <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-envelope-open"></i>
				<span class="badge badge-info">
				5 </span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							 You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="./assets/img/avatar2.jpg" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Lisa Wong </span>
								<span class="time">
								Just Now </span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="./assets/img/avatar3.jpg" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Richard Doe </span>
								<span class="time">
								16 mins </span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="./assets/img/avatar1.jpg" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Bob Nilson </span>
								<span class="time">
								2 hrs </span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="./assets/img/avatar2.jpg" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Lisa Wong </span>
								<span class="time">
								40 mins </span>
								</span>
								<span class="message">
								Vivamus sed auctor 40% nibh congue nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="./assets/img/avatar3.jpg" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Richard Doe </span>
								<span class="time">
								46 mins </span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">See all messages <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			<li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-calendar"></i>
				<span class="badge badge-warning">
				5 </span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								New release v1.2 </span>
								<span class="percent">
								30% </span>
								</span>
								<span class="progress">
								<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								40% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Application deployment </span>
								<span class="percent">
								65% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								65% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Mobile app release </span>
								<span class="percent">
								98% </span>
								</span>
								<span class="progress">
								<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								98% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Database migration </span>
								<span class="percent">
								10% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								10% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Web server upgrade </span>
								<span class="percent">
								58% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								58% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Mobile development </span>
								<span class="percent">
								85% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								85% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								New UI release </span>
								<span class="percent">
								18% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								18% Complete </span>
								</span>
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END TODO DROPDOWN -->
			<li class="devider">
				 &nbsp;
			</li>
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="assets/img/avatar3_small.jpg"/>
				<span class="username">
				Nick </span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="page_inbox.html"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
						3 </span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
						7 </span>
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="login.html"><i class="fa fa-key"></i> Log Out</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<form class="search-form" role="form" action="index.html" method="get">
						<div class="input-icon right">
							<i class="fa fa-search"></i>
							<input type="text" class="form-control input-sm" name="query" placeholder="Search...">
						</div>
					</form>
				</li>
				<li class="start ">
					<a href="index.html">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">Page Layouts</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_sidebar_fixed.html">
							<i class="icon-anchor"></i>
							Sidebar Fixed Page</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
							<i class="icon-book-open"></i>
							Sidebar Closed Page</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
							<i class="icon-pin"></i>
							Boxed Page</a>
						</li>
						<li>
							<a href="layout_session_timeout.html">
							<i class="icon-vector"></i>
							<span class="badge badge-warning">new</span>Session Timeout</a>
						</li>
						<li>
							<a href="layout_idle_timeout.html">
							<i class="icon-cursor"></i>
							User Idle Timeout</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							<i class="icon-rocket"></i>
							Language Bar</a>
						</li>
						<li>
							<a href="layout_disabled_menu.html">
							<i class="icon-link"></i>
							Disabled Menu Links</a>
						</li>
						<li>
							<a href="layout_sidebar_reversed.html">
							<i class="icon-settings"></i>
							<span class="badge badge-success">new</span>Reversed Sidebar</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							<i class="icon-paper-clip"></i>
							Blank Page</a>
						</li>
						<li>
							<a href="layout_ajax.html">
							<i class="icon-bubble"></i>
							Content Loading via Ajax</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-present"></i>
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li>
							<a href="ui_icons.html">
							Icons</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							<span class="badge badge-warning">new</span>Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-success">new</span>Date Paginator</a>
						</li>
						<li>
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
						<li>
							<a href="ui_ion_sliders.html">
							<span class="badge badge-important">new</span>Ion Range Sliders</a>
						</li>
						<li>
							<a href="ui_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="ui_knob.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-calendar"></i>
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-warning">new</span>Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-important">new</span>Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li class="active ">
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">Pages</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_inbox.html">
							<span class="badge badge-important">4</span>Inbox</a>
						</li>
						<li>
							<a href="page_locked.html">
							User Locked</a>
						</li>
						<li>
							<a href="page_portfolio.html">
							<span class="badge badge-warning badge-roundless">new</span>Portfolio</a>
						</li>
						<li class="active">
							<a href="page_blog.html">
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							Blog Post</a>
						</li>
						<li>
							<a href="page_about.html">
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							Contact Us</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<span class="badge badge-important">14</span>Calendar</a>
						</li>
						<li>
							<a href="page_profile.html">
							User Profile</a>
						</li>
						<li>
							<a href="page_faq.html">
							FAQ</a>
						</li>
						<li>
							<a href="page_invoice.html">
							Invoice</a>
						</li>
						<li>
							<a href="page_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="page_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="page_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="page_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="page_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-share"></i>
					<span class="title">4 Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-settings"></i> Item 1 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									Sample Link 1 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-wrench"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-ban"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-check"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-question"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-rocket"></i> Sample Link 2</a>
								</li>
								<li>
									<a href="#"><i class="icon-tag"></i> Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-globe"></i> Item 2 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="icon-graph"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-share"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-settings"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="icon-note"></i>
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Data Tables</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Tables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Tables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Tables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Tables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Tables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-layers"></i>
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-drop"></i>
					<span class="title">Maps</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="charts.html">
					<i class="icon-bar-chart"></i>
					<span class="title">Visual Charts</span>
					</a>
				</li>
				<li class="last ">
					<a href="login.html">
					<i class="icon-user"></i>
					<span class="title">Login</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
					<i class="fa fa-gear"></i>
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						Theme Color </span>
						<ul>
							<li class="color-black current color-default tooltips" data-style="default" data-original-title="Default">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-original-title="Grey">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-original-title="Blue">
							</li>
							<li class="color-red tooltips" data-style="red" data-original-title="Red">
							</li>
							<li class="color-light tooltips" data-style="light" data-original-title="Light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar </span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END BEGIN STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Blog <small>blog listing and post samples</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Pages</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12 blog-page">
					<div class="row">
						<div class="col-md-9 col-sm-8 article-block">
							<h1>Latest Blog</h1>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="assets/img/gallery/image4.jpg" alt="" class="img-responsive">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i><a href="#">April 16, 2013</a>
										</li>
										<li>
											<i class="fa fa-comments"></i><a href="#">38 Comments</a>
										</li>
									</ul>
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Technology</a>
											<a href="#">Education</a>
											<a href="#">Internet</a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 blog-article">
									<h3><a href="page_blog_item.html">Hello here will be some recent news..</a></h3>
									<p>
										 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
									</p>
									<a class="btn btn-info" href="page_blog_item.html">
									Read more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="assets/img/gallery/image3.jpg" alt="" class="img-responsive">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i><a href="#">April 16, 2013</a>
										</li>
										<li>
											<i class="fa fa-comments"></i><a href="#">38 Comments</a>
										</li>
									</ul>
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Technology</a>
											<a href="#">Education</a>
											<a href="#">Internet</a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 blog-article">
									<h3><a href="page_blog_item.html">Hello here will be some recent news..</a></h3>
									<p>
										 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
									</p>
									<a class="btn btn-info" href="page_blog_item.html">
									Read more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="assets/img/gallery/image4.jpg" alt="" class="img-responsive">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i><a href="#">April 16, 2013</a>
										</li>
										<li>
											<i class="fa fa-comments"></i><a href="#">38 Comments</a>
										</li>
									</ul>
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Technology</a>
											<a href="#">Education</a>
											<a href="#">Internet</a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 blog-article">
									<h3><a href="page_blog_item.html">Hello here will be some recent news..</a></h3>
									<p>
										 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
									</p>
									<a class="btn btn-info" href="page_blog_item.html">
									Read more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="assets/img/gallery/image3.jpg" alt="" class="img-responsive">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i><a href="#">April 16, 2013</a>
										</li>
										<li>
											<i class="fa fa-comments"></i><a href="#">38 Comments</a>
										</li>
									</ul>
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Technology</a>
											<a href="#">Education</a>
											<a href="#">Internet</a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 blog-article">
									<h3><a href="page_blog_item.html">Hello here will be some recent news..</a></h3>
									<p>
										 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
									</p>
									<a class="btn btn-info" href="page_blog_item.html">
									Read more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="assets/img/gallery/image5.jpg" alt="" class="img-responsive">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i><a href="#">April 16, 2013</a>
										</li>
										<li>
											<i class="fa fa-comments"></i><a href="#">38 Comments</a>
										</li>
									</ul>
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Technology</a>
											<a href="#">Education</a>
											<a href="#">Internet</a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 blog-article">
									<h3><a href="page_blog_item.html">Hello here will be some recent news..</a></h3>
									<p>
										 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
									</p>
									<a class="btn btn-info" href="page_blog_item.html">
									Read more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</div>
						<!--end col-md-9-->
						<div class="col-md-3 col-sm-4 blog-sidebar">
							<h3>Top Entiries</h3>
							<div class="top-news">
								<a href="#" class="btn btn-danger">
								<span>
								Conquer News </span>
								<em>Posted on: April 16, 2013</em>
								<em>
								<i class="fa fa-tags"></i>
								Money, Business, Google </em>
								<i class="fa fa-briefcase top-news-icon"></i>
								</a>
								<a href="#" class="btn btn-success">
								<span>
								Top Week </span>
								<em>Posted on: April 15, 2013</em>
								<em>
								<i class="fa fa-tags"></i>
								Internet, Music, People </em>
								<i class="fa fa-music top-news-icon"></i>
								</a>
								<a href="#" class="btn btn-info">
								<span>
								Gold Price Falls </span>
								<em>Posted on: April 14, 2013</em>
								<em>
								<i class="fa fa-tags"></i>
								USA, Business, Apple </em>
								<i class="fa fa-globe top-news-icon"></i>
								</a>
								<a href="#" class="btn btn-warning">
								<span>
								Study Abroad </span>
								<em>Posted on: April 13, 2013</em>
								<em>
								<i class="fa fa-tags"></i>
								Education, Students, Canada </em>
								<i class="fa fa-book top-news-icon"></i>
								</a>
								<a href="#" class="btn btn-info">
								<span>
								Top Destinations </span>
								<em>Posted on: April 12, 2013</em>
								<em>
								<i class="fa fa-tags"></i>
								Places, Internet, Google Map </em>
								<i class="fa fa-bolt top-news-icon"></i>
								</a>
							</div>
							<div class="space20">
							</div>
							<h3>Flickr</h3>
							<ul class="list-inline blog-images">
								<li>
									<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="assets/img/blog/1.jpg">
									<img alt="" src="assets/img/blog/1.jpg">
									</a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/2.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/3.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/4.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/5.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/6.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/8.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/10.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/11.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/1.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/2.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/img/blog/7.jpg"></a>
								</li>
							</ul>
							<div class="space20">
							</div>
							<h3>Tabs</h3>
							<div class="tabbable tabbable-custom">
								<ul class="nav nav-tabs">
									<li class="active">
										<a data-toggle="tab" href="#tab_1_1">Section 1</a>
									</li>
									<li>
										<a data-toggle="tab" href="#tab_1_2">Section 2</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="tab_1_1" class="tab-pane active">
										<p>
											 I'm in Section 1.
										</p>
										<p>
											 Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
										</p>
									</div>
									<div id="tab_1_2" class="tab-pane">
										<p>
											 Howdy, I'm in Section 2.
										</p>
										<p>
											 Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
										</p>
									</div>
								</div>
							</div>
							<div class="space20">
							</div>
							<h3>Recent Twitts</h3>
							<div class="blog-twitter">
								<div class="blog-twitter-block">
									<a href="">@keenthemes</a>
									<p>
										 At vero eos et accusamus et iusto odio.
									</p>
									<a href="#"><em>http://t.co/sBav7dm</em></a>
									<span>
									2 hours ago </span>
									<i class="fa fa-twitter blog-twiiter-icon"></i>
								</div>
								<div class="blog-twitter-block">
									<a href="">@keenthemes</a>
									<p>
										 At vero eos et accusamus et iusto odio.
									</p>
									<a href="#"><em>http://t.co/sBav7dm</em></a>
									<span>
									5 hours ago </span>
									<i class="fa fa-twitter blog-twiiter-icon"></i>
								</div>
								<div class="blog-twitter-block">
									<a href="">@keenthemes</a>
									<p>
										 At vero eos et accusamus et iusto odio.
									</p>
									<a href="#"><em>http://t.co/sBav7dm</em></a>
									<span>
									7 hours ago </span>
									<i class="fa fa-twitter blog-twiiter-icon"></i>
								</div>
							</div>
						</div>
						<!--end col-md-3-->
					</div>
					<ul class="pagination pull-right">
						<li>
							<a href="#"><i class="fa fa-angle-left"></i></a>
						</li>
						<li>
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">6</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-angle-right"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include('admin_footer.php'); ?>