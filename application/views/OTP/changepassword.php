<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Tourism</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url() ?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url() ?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url() ?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url() ?>img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/vendors.css" rel="stylesheet">
	
	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url() ?>css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="<?php echo base_url() ?>img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>
			  <form method="post" action="<?php echo site_url() ?>/Usercontroller/chgpwd" >
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div>
				<div class="form-group">
					<label>Enter New Password</label>
					<input type="text" class="form-control" name="npwd" id="npwd">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Enter Confirm Password</label>
					<input type="text" class="form-control" name="cpwd" id="cpwd">
					<i class="icon_mail_alt"></i>
				</div>
				<input type="submit" class="btn_1 rounded full-width" value="Confirm">
			</form>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url() ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>js/common_scripts.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/validate.js"></script>
	
	<!-- COLOR SWITCHER  -->
  
</body>

</html>