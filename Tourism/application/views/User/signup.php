<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<style>
p
{
	color:#F00;	
}
</style>	
    
    
</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

 
 
<script>
$(document).ready(function(e) {
		$("p").hide();
    
});

 function chkvalid()
 {
	var fname=$("#fullname").val();
	var email=$("#email").val();
	var mobile=$("#mobile").val();
	var password=$("#password").val();
	var cpassword=$("#cpassword").val();
	
	if(fname=="" )
	{
		$("#errorname").show();
		return false;
	}
	else
	{
		$("#errorname").hide();
	}
	if(email=="")
	{
		$("#erroremail").show();
		return false;
	}
	else
	{
		$("#erroremail").hide();
	}
	if(mobile=="")
	{
		$("#errormobile").show();
		return false;
	}
	else if(mobile.length != 10)
	{
		$("#errormobile").hide();
		$("#chkmobile").show();
		return false;
	}
	else
	{
		$("#chkmobile").hide();
		$("#errormobile").hide();
	}
	if(password=="")
	{
		$("#errorpassword").show();
		return false;
	}
	else if(password.length < 6)
	{
		$("#chkpassword").show();
		$("#errorpassword").hide();
		return false;
	}
	else
	{
		$("#chkpassword").hide();
		$("#errorpassword").hide();
	}
	if(cpassword=="")
	{
		$("#errorcpassword").show();
		return false;
	}
	else
	{
		$("#errorcpassword").hide();
	}
	if(password!=cpassword)
	{
		$("#chkcpassword").show()
		return false;
	}
	else
	{
		$("#chkcpassword").hide()
	}
 }
</script>   
    
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="<?php echo base_url() ?>img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>
			<form autocomplete="off" name="register" method="post" 
            action="<?php echo site_url() ?>/UserController/signupinsert"  onSubmit="return chkvalid()">
				<div class="form-group">
					<label>Full Name</label>
					<input class="form-control" id="fullname" name="fullname" type="text">
					<i class="ti-user"></i>
					<p id="errorname"   >Please Enter Your Name</p>
                </div>

				<div class="form-group">
					<label>Your Email</label>
					<input class="form-control" id="email" name="email" type="email">
					<i class="icon_mail_alt"></i>
					<p id="erroremail"  >Please Enter Your Email</p>

				</div>
               	<div class="form-group">
					<label>Phone Number</label>
					<input class="form-control" id="mobile" name="mobile" type="number">
					<i class="ti-mobile"></i>
			 		<p id="errormobile"  >Please Enter Your Mobile number</p>
			 		<p id="chkmobile"  >Invalid Mobile number</p>
				
                </div>
				<div class="form-group">
					<label>Your password</label>
					<input class="form-control" id="password" name="password" type="password" >
					<i class="icon_lock_alt"></i>
					<p id="errorpassword" >Please Enter Your Password</p>
                    <p id="chkpassword" >Password Should be atleast 6 Character</p>
                </div>
				<div class="form-group">
					<label>Confirm password</label>
		<input class="form-control" type="password" id="cpassword" name="cpassword" >												                     <i class="icon_lock_alt"></i>
                    <p id="errorcpassword"  >Please Enter Your Confirm Password</p>
                    <p id="chkcpassword"  >Confirm Password Does Not Match</p>
	
                </div>
				<div id="pass-info" class="clearfix"></div>
				<input type="submit" class="btn_1 rounded full-width add_top_30" value="Register Now!">
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="<?php echo site_url() ?>/UserController/signinpage">Sign In</a></strong></div>
			</form>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url() ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>js/common_scripts.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/validate.js"></script>
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?php echo base_url() ?>js/pw_strenght.js"></script>
	<!-- COLOR SWITCHER  -->
 
</body>
</html>