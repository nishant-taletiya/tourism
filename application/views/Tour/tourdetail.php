	<main>
		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Tour detail list</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		
		<!-- /filters -->
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60_35">
			
			<!-- /custom-search-input-2 -->
			<div class="isotope-wrapper" >
			<div class="box_list isotope-item latest" style="width:1080px">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<small>Attractive Place</small>
							<a href="#"><img src="<?php echo base_url() ?>/admintourism/attractionimage/<?php echo $detail->Aimage ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Your Place</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="#"><?php echo $detail->Atitle ?></a></h3>
							<p><?php echo $detail->Adescription ?></p>
						</div>
						
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list isotope-item latest" style="width:1080px">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<small>Hotel</small>
							<a href="#"><img src="<?php echo base_url() ?>/admintourism/hotelimage/<?php echo $detail->Hotelimg ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Your Hotel</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="#"><?php echo $detail->Hotelname ?></a></h3>
							<p>The primary purpose of hotels is to provide travelers with shelter, refreshment, and similar services and goods, offering on a commercial basis things that are customarily furnished within households but unavailable to people on a journey away from home.</p>
						</div>
						
					</div>
				</div>
			</div>
            <!-- /box_list -->
			<div class="box_list isotope-item latest" style="width:1080px">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<small>Your Guide</small>
							<a href="#"><img src="<?php echo base_url() ?>/admintourism/guideimage/<?php echo $detail->Gimage ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Your Guide</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><span>Guide Name :- <a href="hotel-detail.html"><?php echo $detail->Gname ?></a></span></h3>
							<p>Email :- <?php echo $detail->Gemail ?></p>
							<p>Mobile :- <?php echo $detail->Gphone ?></p>
                            
						<p></p>
			       	</div>
						
					</div>
				</div>
			</div>
            <!-- /box_list -->
			</div>
			<!-- /isotope-wrapper -->
			
			<p class="text-center add_top_60"><a href="<?php echo site_url() ?>/TourController/selectdate/<?php echo $this->uri->segment(3) ?>" class="btn_1 rounded">Book My Tour Package</a></p>
		
		</div>
		<!-- /container -->
		<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Contact:- 9865325698
								<br>
								Email id:- tourism12@gmail.com
							</p>

						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments</h4>
							<p>Payment by cash or e wallet or card</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Cancel Policy</h4>
							<p>The cancellation fee is free. </p>
						</a>
					</div>
				</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	