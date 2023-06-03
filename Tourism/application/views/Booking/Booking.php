<main>
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Booking Section</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#payment" class="active"><i class="icon-airport"></i>Trip Booking</a></li>
								<li><a href="#tips"><i class="icon-user-8"></i>Guide Booking</a></li>
								<li><a href="#reccomendations"><i class="icon-building"></i>Hotel Booking</a></li>
								<li><a href="#booking"><i class="icon-bus"></i>
                                Bus Booking</a></li>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
				
				<div class="col-lg-9" id="faq">
					<h4 class="nomargin_top">Trip Booking</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="payment">
						
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
										<i class="indicator ti-plus"></i>
                                        Trip Booking
                                        </a>
								</h5>
							</div>
							<div id="collapseTwo_payment" class="collapse show" role="tabpanel" data-parent="#payment">
								<div class="card-body">
	                              	<div class="form-group">
 							<center>
                            <form method="post" action="<?php echo site_url() ?>/TourController">
                            <input type="submit" value="Go To The Tour Trip" class="btn_1 rounded" id="submit-contact"> 
                            </form>
                            </center>
									</div>  
                          		</div>
							</div>
						</div>
						<!-- /card -->
						
						<!-- /card -->
					</div>
					<!-- /accordion payment -->
					
					<h4 class="nomargin_top">Find Guide</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="tips">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator ti-plus"></i>Find Your Guide</a>
								</h5>
							</div>

							<div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
								<div class="card-body">
	                              	<div class="form-group">
 							


							<center>
                            <form method="post" action="<?php echo site_url() ?>/TourController/guides">
                            <input type="submit" value="Find Your Guide" class="btn_1 rounded" id="submit-contact"> 
                            </form>
                            </center>
                        
									</div>  
                          		</div>
							</div>
						</div>
						<!-- /card -->
						
						<!-- /card -->
						
						<!-- /card -->
					</div>
					<!-- /accordion suggestions -->
					
					<h4 class="nomargin_top">Find Hotel</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="reccomendations">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_reccomendations" aria-expanded="true"><i class="indicator ti-plus"></i>Find Hotel</a>
								</h5>
							</div>

							<div id="collapseOne_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
								
                                
                   

							<center>
                            <form method="post" action="<?php echo site_url() ?>/HotelController">
                            <input type="submit" value="Find Your Hotel" class="btn_1 rounded" id="submit-contact"> 
                            </form>
                            </center>
                                
                                
                                
                                
                                
                                
							</div>
						</div>
						<!-- /card -->
						
						<!-- /card -->
						
						<!-- /card -->
					</div>
					<!-- /accordion Reccomendations -->
					
					
					
					<!-- /accordion Terms -->
					
					<h4 class="nomargin_top">Bus Booking</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="booking">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_booking" aria-expanded="true"><i class="indicator ti-plus"></i>Book Bus</a>
								</h5>
							</div>

							<div id="collapseOne_booking" class="collapse" role="tabpanel" data-parent="#booking">
								
                               <center>
                                <h5>
                                For Bus Booking You Have To Choose Tour Trip First 
                                </h5>
                                </center>
                                
							</div>
						</div>
						<!-- /card -->
						
						<!-- /card -->
						
						<!-- /card -->
					</div>
					<!-- /accordion Booking -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!--/container-->
	</main>
	<!--/main-->