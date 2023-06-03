<main>
		<section class="hero_in tours_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php echo $attr->Atitle ?></h1>
				</div>
				<span class="magnific-gallery">
				
					<a href="<?php echo base_url() ?>/admintourism/attractionimage/<?php echo $attr->Aimage  ?> " class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
				
                
				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Description</a></li>
						
						<li><a href="#sidebar">Booking</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<h2>Description</h2>
							<p>
                            <?php
							echo $attr->Adescription;
							
							 ?>
                            </p>
							
							
							
							<!-- End Map -->
						</section>
						<!-- /section -->
					
							
					</div>
					<!-- /col -->
					
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->