
	<main>
		
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Your Wishlist</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
<script>
function removewishlist(aid)
{
	$.ajax({
				url:"<?php echo site_url() ?>/AttractionController/removewishlist/"+aid,
				method:"post",
				success:function(res)
				{
					$("#attr"+aid).hide();
				}
			});	
}
</script>			

		<div class="container margin_60_35">
			
		<div class="wrapper-grid">
			<div class="row">
			<?php
			foreach($wish as $row)
			{			
			
			?>
            	<div class="col-xl-4 col-lg-6 col-md-6" id="attr<?php echo $row->AID ?>">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt liked" onclick="removewishlist(<?php echo $row->AID ?>)"></a>
							<a href="tour-detail.html">
                            <img src="<?php echo base_url() ?>/admintourism/imgupload/<?php echo $row->Aimage ?>" class="img-fluid" alt="" width="800" height="533"></a>
							<small><?php echo $row->Atitle ?></small>
							<div class="read_more"></div>
						</figure>
						<div class="wrapper">
							<h3><a href="tour-detail.html"><?php echo $row->Atitle ?></a></h3>
							<p><?php echo $row->Adescription ?></p>
						</div>
						<ul>
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
						
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Cum appareat maiestatis interpretaris et, et sit.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments</h4>
							<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Cancel Policy</h4>
							<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
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