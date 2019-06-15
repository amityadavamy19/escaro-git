<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Conquer - shared on themelock.com -  | Pages - Blog Post</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/pages/blog.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php include('admin_menu.php'); ?>
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
			Blog Post <small>blog post samples</small>
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
						<a href="#">Blog Post</a>
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
						<div class="col-md-9 article-block">
							<h3>Hello here will be some recent news..</h3>
							<div class="blog-tag-data">
								<img src="assets/img/gallery/item_img.jpg" class="img-responsive" alt="">
								<div class="row">
									<div class="col-md-6">
										<ul class="list-inline blog-tags">
											<li>
												<i class="fa fa-tags"></i>
												<a href="#">Technology</a>
												<a href="#">Education</a>
												<a href="#">Internet</a>
											</li>
										</ul>
									</div>
									<div class="col-md-6 blog-tag-data-inner">
										<ul class="list-inline">
											<li>
												<i class="fa fa-calendar"></i><a href="#">April 16, 2013</a>
											</li>
											<li>
												<i class="fa fa-comments"></i><a href="#">38 Comments</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end news-tag-data-->
							<div>
								<p>
									 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
								</p>
								<blockquote class="hero">
									<p>
										 Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere erat a ante.
									</p>
									<small>Someone famous <cite title="Source Title">Source Title</cite></small>
								</blockquote>
								<p>
									 Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpa
								</p>
							</div>
							<hr>
							<div class="media">
								<h3>Comments</h3>
								<a href="#" class="pull-left">
								<img alt="" src="assets/img/blog/9.jpg" class="media-object">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Media heading <span>
									5 hours ago / <a href="#">Reply</a>
									</span>
									</h4>
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
									</p>
									<hr>
									<!-- Nested media object -->
									<div class="media">
										<a href="#" class="pull-left">
										<img alt="" src="assets/img/blog/5.jpg" class="media-object">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Media heading <span>
											17 hours ago / <a href="#">Reply</a>
											</span>
											</h4>
											<p>
												 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
											</p>
										</div>
									</div>
									<!--end media-->
									<hr>
									<div class="media">
										<a href="#" class="pull-left">
										<img alt="" src="assets/img/blog/7.jpg" class="media-object">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Media heading <span>
											2 days ago / <a href="#">Reply</a>
											</span>
											</h4>
											<p>
												 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
											</p>
										</div>
									</div>
									<!--end media-->
								</div>
							</div>
							<!--end media-->
							<div class="media">
								<a href="#" class="pull-left">
								<img alt="" src="assets/img/blog/6.jpg" class="media-object">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Media heading <span>
									July 5,2013 / <a href="#">Reply</a>
									</span>
									</h4>
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
									</p>
								</div>
							</div>
							<!--end media-->
							<hr>
							<div class="post-comment">
								<h3>Leave a Comment</h3>
								<form role="form" action="#">
									<div class="form-group">
										<label class="control-label">Name <span class="required">
										* </span>
										</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Email <span class="required">
										* </span>
										</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Message <span class="required">
										* </span>
										</label>
										<textarea class="col-md-10 form-control" rows="8"></textarea>
									</div>
									<button class="margin-top-20 btn btn-info" type="submit">Post a Comment</button>
								</form>
							</div>
						</div>
						<!--end col-md-9-->
						<div class="col-md-3 blog-sidebar">
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
							<h3>Blog Tags</h3>
							<ul class="list-inline sidebar-tags">
								<li>
									<a href="#"><i class="fa fa-tags"></i> Business</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Music</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Internet</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Money</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Google</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> TV Shows</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Education</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> People</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> People</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Math</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Photos</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Electronics</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Apple</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tags"></i> Canada</a>
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
								<div class="blog-twitter-block">
									<a href="">@keenthemes</a>
									<p>
										 At vero eos et accusamus et iusto odio.
									</p>
									<a href="#"><em>http://t.co/sBav7dm</em></a>
									<span>
									8 hours ago </span>
									<i class="fa fa-twitter blog-twiiter-icon"></i>
								</div>
							</div>
						</div>
						<!--end col-md-3-->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2013 &copy; Conquer by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="assets/scripts/app.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>