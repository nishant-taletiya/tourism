<script>
function getprice(value,id)
{
	var fprice=value.split(";");
	//alert(fprice[0]);
	//alert(fprice[1]);
	//alert(id)
	$.ajax({
				url:"<?php echo site_url() ?>/RoomController/newrooms/"+id+"/"+fprice[0]+"/"+fprice[1],
				method:"post",
				success: function(res)
				{
					if(res.length=="2")
					{
						$("#ajaxroom").html("<img src='<?php echo base_url() ?>/img/noimage.jpg' style='margin-left:250px'>")
					}
					else
					{
						$("#ajaxroom").html(res)
					}
				}		
		
		
	});
	 
}
</script>

<main>
		
		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Indias hotels Rooms</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		<div class="filters_listing sticky_horizontal">
			<div class="container">
					
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							
							<div class="filter_type">
                                <h6>Distance</h6>
                                <input type="text" id="range" name="range" value="" onchange="getprice(this.value,<?php echo $this->uri->segment(3) ?>)">
                            </div>
							
							
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9">
					<div class="isotope-wrapper">
						<div class="row" id="ajaxroom">
							<!-- /box_grid -->
							<?php
							foreach($rooms as $rowrooms)
							{
								$this->db->where('rid',$rowrooms->rid);
								$rimg=$this->db->get('roomimages')->row();
							?>
                            
                            <div class="col-md-6 isotope-item latest">
								<div class="box_grid">
									<figure>
										
										<a href="<?php echo site_url() ?>/RoomController/roomdetail/<?php echo $rimg->rid ?>">
         <img src="<?php echo base_url() ?>/admintourism/imgupload/<?php echo $rimg->rimage ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
										<small><?php echo $rowrooms->rcategory ?></small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="<?php echo site_url() ?>/RoomController/roomdetail/<?php echo $rimg->rid ?>"><?php echo $rowrooms->rname ?></a></h3>
										<p><?php echo $rowrooms->rdetail ?></p>
										<span class="price">From <strong> &#8377;<?php echo $rowrooms->rprice ?></strong></span>
									</div>
									
								</div>
							</div>
							
                            <?php
							}
							?>
                            
                            <!-- /box_grid -->
								</div>
						<!-- /row -->
				</div>
				<!-- /isotope-wrapper -->
			
				</div>
				<!-- /col -->
			</div>		
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