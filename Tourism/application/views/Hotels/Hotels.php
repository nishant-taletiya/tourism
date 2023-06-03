	<main>
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Indian Hotels grid</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		<div class="filters_listing sticky_horizontal">
			
			<!-- /container -->
		</div>
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
			foreach($hotel as $row)
			{
			?>
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							<a href="<?php echo site_url() ?>/RoomController/getrooms/<?php echo $row->Hotelid  ?>"><img src="<?php echo base_url() ?>admintourism/hotelimage/<?php echo $row->Hotelimg ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small><?php echo $row->Hotelname ?></small>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo site_url() ?>/RoomController/getrooms/<?php echo $row->Hotelid  ?>"><?php echo $row->Hotelname ?></a></h3>
							<p> Location:- <?php echo $row->Atitle ?>
								
							 </p>

						</div>
						<ul>
							<a href="<?php echo site_url() ?>/RoomController/getrooms/<?php echo $row->Hotelid  ?>">
							<li style="margin-top:-8px"><div class="score"><strong>Learn More</strong></div></li>
						</a>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->			
			<?php
			}
			?>
            </div>
			<!-- /row -->
			</div>
			<!-- /isotope-wrapper -->
		<!--	
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>-->
			
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_60_35">
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
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	