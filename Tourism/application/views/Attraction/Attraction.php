	<main>
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>India Attractive grid</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		
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
<script>
function wishlist(aid)
{
	$.ajax({
				url:"<?php echo site_url() ?>/AttractionController/wishlist/"+aid,
				method:"post",
				success:function(res)
				{
					
				}
			});	
}
</script>			
			<div class="isotope-wrapper">
			<div class="row">
            <?php
			foreach($attr as $row)
			{
				$this->db->where('AID',$row->AID);
				$wish=$this->db->get('wishlist')->row();
				
				
				$this->db->where('AID',$row->AID);
				$wish2=$this->db->get('wishlist')->result();
				if(count($wish2)=="0")
				{
			?>
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt" onclick="wishlist(<?php echo $row->AID ?>)"></a>
							<a href="<?php echo site_url() ?>/AttractionController/detail/<?php echo $row->AID ?>"><img src="<?php echo base_url() ?>admintourism/attractionimage/<?php echo $row->Aimage ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small><?php echo $row->SPtitle ?></small>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo site_url() ?>/AttractionController/detail/<?php echo $row->AID ?>"><?php echo $row->Atitle ?></a></h3>
							<p><?php echo substr($row->Adescription,0,75) ?></p>
						</div>
						<ul>
							<li style="margin-top:-8px">
                            
                            <a href="<?php echo site_url() ?>/AttractionController/detail/<?php echo $row->AID ?>">
                            <div class="score"><strong>Learn More</strong></div>
                            </a>
                            
                            
                            </li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->			
			<?php
				}
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
	