	<main>
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Our Tour Packages</h1>
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
			<div class="col-lg-12">
				
				<!-- /row -->
			</div>
			<!-- /custom-search-input-2 -->
			
			<div class="isotope-wrapper">
			<div class="row">
				
                <?php
				foreach($tourpackages as $row)
				{
				?>
                
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							<a href="<?php echo site_url() ?>/TourController/showdetail/<?php echo $row->packageid ?>"><img src="<?php echo base_url() ?>admintourism/packageimage/<?php echo $row->Image ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small>Historic</small>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo site_url() ?>/TourController/showdetail/<?php echo $row->packageid ?>">
                            <?php echo $row->Packagename ?></a></h3>
							<p><?php echo substr($row->Description,0,75) ?></p>
							<span class="price">From : <strong><?php echo $row->Timespend ?></strong> / Trip</span>
                            <span class="price">Price : <strong>
                            &#8377;<?php echo $row->Price ?>
                           
                            </strong> / per person</span>
                            <br />		
                          </div>
						<ul>
							<li><i class="icon_clock_alt"></i> <?php echo $row->Pdate ?></li>
							<li><div class="score">
                            <a href="<?php echo site_url() ?>/TourController/showdetail/<?php echo $row->packageid ?>" class="btn_1 rounded add_top">View Detail</a>
                            </div></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
            
            
            </div>
			<!-- /row -->
			</div>
			<!-- /isotope-wrapper -->
			<!--
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>		-->
			
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
	