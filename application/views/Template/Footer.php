<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					
					<div class="follow_us">
						<ul>
							<br><br>
							<li>Follow us</li>
							<li><a href="https://www.facebook.com/profile.php?id=100006950026575"><i class="ti-facebook"></i></a></li>
							<li><a href="https://twitter.com/NTaletiya"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="https://www.instagram.com/nishant_taletiya/"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="<?php echo site_url() ?>/BookingController">Booking</a></li>
                        <li><a href="<?php echo site_url() ?>/HotelController">Hotels</a></li>
                        <li><a href="<?php echo site_url() ?>/AttractionController">Attraction</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 91 95 5645 9876</a></li>
						<li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> tourism12@gmail.com</a></li>
					</ul>
					
					
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				
				<div class="col-lg-6">
					
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form method="post" action="<?php echo site_url() ?>/Usercontroller/login">
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In"  class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="<?php echo site_url() ?>/UserController/signuppage">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm Your Mobile number below</label>
						<input type="number" min="10" max="10" class="form-control" name="mobile_forgot" id="mobile_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an OTP code containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="button" onclick="getopt()" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->

	
<script>
function getopt()
{
	var mobile=$("#mobile_forgot").val();
		
	$.ajax({
			method:"post",
			url:"<?php echo site_url() ?>/UserController/getotp/"+mobile,
			success: function(res)
			{

				if(res==1)
				{
				alert("Invalid Email Id")	
				}
				else
				{	
				window.location="<?php echo site_url() ?>/UserController/chkotp";
				}
			}
	});
}


</script>   
    
    
	<!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url() ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>js/common_scripts.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/validate.js"></script>
	<script src="<?php echo base_url() ?>js/markerclusterer.js"></script>
	<script src="<?php echo base_url() ?>js/map_hotels.js"></script>
	<script src="<?php echo base_url() ?>js/infobox.js"></script>
	<script src="<?php echo base_url() ?>js/isotope.min.js"></script>

	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?php echo base_url() ?>js/video_header.js"></script>
	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
<script>
	$(window).load(function(){
	  var $container = $('.isotope-wrapper');
	  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
	});

	$('.filters_listing').on( 'click', 'input', 'change', function(){
	  var selector = $(this).attr('data-filter');
	  $('.isotope-wrapper').isotope({ filter: selector });
	});
	</script>
	
	<!-- Range Slider -->
	<script>
		 $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 1000,
            max: 9999,
            from: 60,
            to: 130,
            type: 'double',
            step: 1,
            prefix: "&#8377;",
            grid: false
        });
	</script>	
	<!--  -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>/css/search/easy-autocomplete.min.css"/>

<script src="<?php echo base_url() ?>/css/search/jquery.easy-autocomplete.min.js"></script>

</script>
<script>

$(document).ready(function(){
	
  var options = 
  {
  url: "<?php echo site_url() ?>/homeController/fetchdata/",
  getValue:"Atitle",
  list: {
    match: {
      enabled: true
    }
  },
    template: {
    type: "custom",
    method: function(value,item) {
		if(value.length>20)
		{
			
			value=value.substr(0,45);
		//	alert(value)
		}
	 return "<b id='result' ><p style='width:40px;height:30px;' />"+"<span style='float:left;margin-top:-30px;margin-left:35px;color:black'>"+value+"</span></p></b>";
	    }
  },
  theme: "square"
};
$("#searchbox").easyAutocomplete(options);
});
</script>

</body>

</html>