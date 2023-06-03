	<main>
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Media Gallery</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Here some pictures ...</h2>
			</div>
			<div class="grid">
				<ul class="magnific-gallery">
					<?php
					foreach($photo as $row)
					{
					?>
                    
                    <li>
						<figure>
							<img src="<?php echo base_url() ?>/admintourism/photoimage/<?php echo $row->photo ?>"  alt="" style="height:200px">
							<figcaption>
								<div class="caption-content">
									<a href="<?php echo base_url() ?>/admintourism/photoimage/<?php echo $row->photo ?>" title="Photo title" data-effect="mfp-zoom-in">
										<i class="pe-7s-albums"></i>
										<p>Your caption</p>
									</a>
								</div>
							</figcaption>
						</figure>
					</li>
					<?php
					}
					?>
                    
                    	</ul>
			</div>
			<!-- /grid gallery -->
		</div>
		<!-- /container -->
		
		
		<!-- /bg_color_1 -->
		
	</main>
	<!--/main-->