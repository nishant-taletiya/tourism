<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Tourism | Premium site template for travel agencies, hotels and restaurant listing.</title>
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
	
	<!-- Modernizr -->
	<script src="<?php echo base_url() ?>js/modernizr.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,gu,hi,ml,mr,pa,ta,te,ur,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>


	<div id="page">
	<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
		<div id="logo">
		<a href="index.html">
				<img src="img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
				<img src="img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
              <?php
			  if($this->session->userdata('username')!="")
			  {
			  ?> 


			<li><a href="<?php echo site_url()?>/WishlistController/" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>

			<?php
			  }
			?>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
        <div id="google_translate_element" style="float:right;margin-top:8px"></div>
			
		<nav id="menu" class="main-menu">
			<ul>

				<li><span><a href="<?php echo site_url() ?>">Home</a></span>
				</li>
				
				<li><span><a href="<?php echo site_url() ?>/AttractionController">Attractions</a></span>
					<ul>
						<li><a href="<?php echo site_url() ?>/AttractionController">Attractive Places</a></li>
						</ul>
				</li>
                <li><span><a href="#0">Tours</a></span>
					<ul>
						<li><a href="<?php echo site_url() ?>/TourController">Tour Packages</a></li>
                        <li><a href="<?php echo site_url() ?>/TourController/guides">Get Your Guide</a></li>
					</ul>
				</li>
                <li><span><a href=" <?php echo site_url() ?>/MediaController ">Media</a></span>
				<ul>
			<!--	<li><a href="<?php echo site_url() ?>/MediaController">Video Gallery</a></li>
				-->
                <li><a href="<?php echo site_url() ?>/MediaController">Image Gallery</a></li>
            <!-- 
                <li><a href="<?php echo site_url() ?>/MediaController">News & Update</a></li>
			-->
					</ul>
				</li>
                <li><span><a href=" <?php echo site_url() ?>/HotelController ">Hotels</a></span>
					<ul>
						<li><a href="<?php echo site_url() ?>/HotelController">Find Your Hotel</a></li>
					</ul>
				</li>
                <li><span><a href="<?php echo site_url() ?>/BookingController">Online Booking</a></span>
					</li>
				
				<ul>
					</ul>
				</li>
			<!--	<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="media-gallery.html">Media gallery</a></li>
						<li><a href="help.html">Help Section</a></li>
						<li><a href="faq.html">Faq Section</a></li>
						<li><a href="wishlist.html">Wishlist page</a></li>
						<li><a href="contacts.html">Contacts</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="blog.html">Blog</a></li>
					</ul>
				</li>
			-->	
                
               <li>
              <?php
			  if($this->session->userdata('username')=="")
			  {
			  ?> 
              <span>
               <a href="#" >Hii Guest !</a>
               </span>
			   <?php
			  }
			  else
			  {
			  ?>
              <span>
               <a href="#" >Hii <?php echo $this->session->userdata('username') ?> !</a>
              
              </span>
              <ul>
						<li><a href="<?php echo site_url() ?>/AddtocartController/bookedtour">Booked Tour</a></li>
						<li><a href="<?php echo site_url() ?>/AddtocartController/bookedroom">Booked Rooms</a></li> 

						<li><a href="<?php echo site_url() ?>/UserController/logout">Logout</a></li></ul> 
               </li>
			</ul>
            <?php
			  }
			  ?>
		</nav>
	</header>
	<!-- /header -->
	