<script>
function subplace(pid)
{
	$.ajax({
				url:"<?php echo site_url() ?>/HomeController/subplace/"+pid,
				method:"post",
				success:function(res)
				{
					alert(res)
				//	$("#subplaceid").html("<option>Select Subplace</option>")
					$("#subplaceid").empty();
					$("#subplaceid").html(res);					
					//alert(res)
				}	
	});
	
}
</script>


<main>
		<section class="header-video">
			<div id="hero_video">
				<div class="wrapper">
				<div class="container">
					<h3>Book unique experiences</h3>
					<p>Expolore top rated tours and hotels around the world</p>
					<form method="post" action="<?php echo site_url() ?>/AttractionController/searchdata">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-10">
                            <input class="form-control" id="searchbox" name="searchbox" Placeholder="Search Your Place Where You Want To GO !">
							</div>
							<div class="col-lg-2">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
			</div>
			<img src="<?php echo base_url() ?>img/video_fix.png" alt="" class="header-video--media" data-video-src="<?php echo base_url() ?>video/intro" data-teaser-source="<?php echo base_url() ?>video/intro" data-provider="" data-video-width="1920" data-video-height="960">
		</section>
		<!-- /header-video -->

		<div class="container-fluid margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our Popular Tours</h2>
				
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<?php
				foreach($place as $placerow)
				{
				?>
                <div class="item">
					<div class="box_grid">
						<figure>
							
							<a href="<?php echo site_url() ?>/SubplaceController/subplace/<?php echo $placerow->PID ?>"><img src="<?php echo base_url() ?>admintourism/placeimage/<?php echo $placerow->Pimage  ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small><?php echo $placerow->Ptitle  ?></small>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo site_url() ?>/SubplaceController/subplace/<?php echo $placerow->PID ?>"><?php echo $placerow->Pname  ?></a></h3>
							<p><?php echo substr($placerow->Pdescription,0,75) ?>
							</p>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<?php
				}
				?>			
            </div>
			<!-- /carousel -->
			
			<!-- /container -->
			<hr class="large">
		</div>
		<!-- /container -->
		
		<div class="container-fluid margin_30_95 pl-lg-5 pr-lg-5">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Popular Hotels and Accommodations</h2>
				</div>
				<div class="row">
					<?php
					foreach($hotel as $rowhotel)
					{
					?>
                    <div class="col-xl-3 col-lg-6 col-md-6">
						<a href="<?php echo site_url() ?>/RoomController/getrooms/<?php echo $rowhotel->Hotelid  ?>" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img src="<?php echo base_url() ?>/admintourism/hotelimage/<?php echo $rowhotel->Hotelimg ?>" class="img-fluid" alt=""
                                style="width:400px;height:167px">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3><?php echo $rowhotel->Hotelname ?></h3>
								</div>
							</figure>
						</a>
					</div>
					<?php
					}
					?>
                </div>
				<!-- /row -->
				<a href="<?php echo site_url() ?>/HotelController"><strong>View all<i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section -->
			
			
			<!-- /section -->
		</div>
		<!-- /container -->

		
		<!-- /bg_color_1 -->

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a GREAT travel with us</h3>
							<p>Tourism is India’s leading online travel booking brand providing range of choice for hotels and bus for travelers. Our core value differentiator is the most trusted user experience, be it in terms of quickest search and booking, fastest payments, settlement or refund processes. Through GoStays, our customers enjoy standardised stay experience at certified hotel properties. Tourism is the number one choice for new India on the move.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
