	<main>
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Find your guide</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		
		<!-- /filters -->
		
		
		<!-- End Map -->

		<div class="container margin_60_35">
			
			<!-- /custom-search-input-2 -->
		
			<div class="isotope-wrapper">
			<div class="row">
			
            <?php
			foreach($guide as $row)
			{
			?>
            
            	<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							
							<a href="#"><img src="<?php echo base_url() ?>/admintourism/guideimage/<?php echo $row->Gimage ?>" width="80" height="200"><div class="read_more"></div></a>
						</figure>
						<div class="wrapper">
							<h3><a href="#"><?php echo $row->Gname ?></a></h3>
							<p>Location :- <?php echo $row->Atitle ?>
							<br>
							Email :- <?php echo $row->Gemail ?></p>
							<span class="price"><strong>Contact  No. </strong><?php echo $row->Gphone ?></span>
						</div>
						
					</div>
				</div>
			
            <?php
			}
			?>
            	<!-- /box_grid -->
			
				<!-- /box_grid -->
			</div>
			<!-- /row -->
			</div>
			
            
            <!-- /isotope-wrapper 
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>-->
			
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
	