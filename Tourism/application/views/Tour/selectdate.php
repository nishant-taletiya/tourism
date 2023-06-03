		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bus/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bus/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bus/css/datepicker.css" />

	<main>
		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>BUS BOOKING</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		<div class="filters_listing sticky_horizontal">
			<div class="container">
							<div class="row well">
				<div class="span10">
			    	<form action="<?php echo site_url() ?>/TourController/displayseat/
					<?php echo $this->uri->segment(3) ?>" method="POST">
						<center>
                        <h1>Bus Booking</h1>
							<label>Date of Journey
                           
                            </label>
							<div data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker"  >
							    <input type="text" value="" name="doj"  
                                class="span2" required>
							    <span class="add-on"><i class="icon-calendar"></i></span>
							</div>


							<!--<input type="date" class="span2" name="doj" placeholder="YYYY-MM-DD" required/>-->
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
<!--							<a href="./login.php" class="btn btn-danger"><i class="icon-remove icon-white"></i> Cancel Ticket </a>
	-->
    					</center>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>/bus/js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="<?php echo base_url() ?>/bus/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>/bus/js/bootstrap-datepicker.js"></script>
		<script>
			$('.myDatepicker').each(function() {
			    var minDate = new Date();
			    minDate.setHours(0);
			    minDate.setMinutes(0);
			    minDate.setSeconds(0,0);
			    
			    var $picker = $(this);
			    $picker.datepicker();
			    
			    var pickerObject = $picker.data('datepicker');
			    
			    $picker.on('changeDate', function(ev){
			        if (ev.date.valueOf() < minDate.valueOf()){
			            
			            // Handle previous date
			            alert('You can not select past date.');
			            pickerObject.setValue(minDate);
			            
			            // And this for later versions (in case)
			            ev.preventDefault();
			            return false;
			        }
			    });
			});					
		</script>
	</BODY>
</HTML>