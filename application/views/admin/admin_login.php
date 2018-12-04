<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Escaro Royale | Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>assets/admin/css/style-conquer.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url(); ?>assets/admin/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="<?php echo base_url(); ?>">
	<img src="assets/img/logo.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->

<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	 
	<?php echo form_open('admin_dashboard/login','class="login-form"'); ?>
		<h3 class="form-title">Login to your account</h3>

		
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="login_email" value="<?php echo set_value('login_email'); ?>"/>
				<?php //echo form_input('login_email', 'Email', 'class="form-control placeholder-no-fix"' ); ?>
			</div>
		</div>
		<?php echo form_error('login_email'); ?>
		
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Password" name="login_password" value="<?php echo set_value('login_password'); ?>"/>
				<?php // echo form_input('login_password', 'Password', 'class="form-control placeholder-no-fix"'); ?>
				
			</div>
		</div>
		<?php echo form_error('login_password'); ?>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
			
			<?php echo form_submit('Login', 'Login','class="btn btn-info pull-right"'); ?>
		</div>
		<div class="forget-password">
			<h4>Forgot your password ?</h4>
			<p>
				 no worries, click <a href="javascript:;" id="forget-password">here</a>
				to reset your password.
			</p>
		</div>
		<div class="create-account">
			<p>
				 Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">Create an account</a>
			</p>
		</div>

	<?php echo form_close(); ?>
	
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	
	<form class="forget-form" action="index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn btn-info pull-right">
			Submit </button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<?php echo form_open('admin_dashboard/register','class="register-form"'); ?>
		<h3>Sign Up</h3>
		<p>
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">First Name</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" value="<?php echo set_value('fname'); ?>" placeholder="First Name" name="fname"/>
			</div>
		</div>
		<?php echo form_error('fname'); ?>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Last Name</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" value="<?php echo set_value('lname'); ?>" placeholder="Last Name" name="lname"/>
			</div>
		</div>
		<?php echo form_error('lname'); ?>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Phone</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" value="<?php echo set_value('phone'); ?>" placeholder="Phone" name="phone"/>
			</div>
		</div>
		<?php echo form_error('phone'); ?>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email/Username</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" value="<?php echo set_value('signup_email'); ?>" type="text" placeholder="Email" name="signup_email"/>
			</div>
		</div>
		<?php echo form_error('signup_email'); ?>
		<p>
			 Enter your account details below:
		</p>
		
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" value="<?php echo set_value('signup_password'); ?>" type="password" autocomplete="off" placeholder="Password" name="signup_password"/>
			</div>
		</div>
		<?php echo form_error('signup_password'); ?>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" type="password" value="<?php echo set_value('signup_rpassword'); ?>" autocomplete="off" placeholder="Re-type Your Password" name="signup_rpassword"/>
				</div>
			</div>
		</div>
		<?php echo form_error('signup_rpassword'); ?>
		<div class="form-group">
			<label>
			<input type="checkbox" name="tn"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn btn-default">
			<i class="m-icon-swapleft"></i> Back </button>
			<?php  echo form_submit('Sign Up', 'signup','class="btn btn-info pull-right"'); ?>
			
		</div>
	<?php echo form_close(); ?>
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->	

<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2018 &copy; Escaro Royale.
</div>							
							
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/admin/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  App.init();
  Login.init();
  /*var action = location.hash.substr(1);
          if (action == 'createaccount') {
              $('.register-form').show();
              $('.login-form').hide();
              $('.forget-form').hide();
          } else if (action == 'forgetpassword')  {
              $('.register-form').hide();
              $('.login-form').hide();
              $('.forget-form').show();
          }
		  */
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>