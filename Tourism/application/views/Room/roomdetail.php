<main>
		<section class="hero_in hotels_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Room detail page</h1>
				</div>
				<span class="magnific-gallery">
                <?php
				$rid=$this->uri->segment(3);
				$this->db->where('rid',$rid);
				$room=$this->db->get('roomimages')->result();
				foreach($room as $roomimg)
				{
				?>
				
                    
                    <a href="<?php echo base_url() ?>/admintourism/imgupload/<?php echo $roomimg->rimage ?>" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
				<?php
				}
				?>
                
                
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
	 <?php
	 			$this->db->where('rid',$rid);
				$room=$this->db->get('rooms')->row();	
				
	 ?>         
    
    		<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<h2><?php echo $room->rname; ?></h2>
							<p>
							<?php
                            echo $room->rdetail;
                            ?>         
			                </p>
							<p>&#8377;
							<?php
                            echo $room->rprice;
                            ?>         
			                </p>
							
							
							<!-- /row -->
							<hr>
							<div id="instagram-feed-hotel" class="clearfix"></div>
							<hr>
							<?php
							$this->db->limit(3);
							$rooms=$this->db->get('rooms')->result();
							foreach($rooms as $rr)
							{
								$this->db->where('rid',$rr->rid);
								$rimg=$this->db->get('roomimages')->result();
							?>							
                            
                            <div class="room_type first">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4><?php echo $rr->rcategory ?></h4>
										<p><?php echo $rr->rdetail ?></p>
   										<p>&#8377; <?php echo $rr->rprice ?></p>	
										<ul class="hotel_facilities">
				
                					<?php
									foreach($rimg as $rrimg)
									{
									?>
           <a href="<?php echo site_url() ?>/RoomController/roomdetail/<?php echo $rrimg->rid ?>">                         
        <li><img src="<?php echo base_url() ?>/admintourism/imgupload/<?php echo $rrimg->rimage ?>" alt="" style="height:200px;width:200px;margin-left:-250px;margin-top:-150px"> </li>
        </a>
        					<?php
									}
									?>			
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<?php
							}
							?>
                            
                            <!-- /rom_type -->
							<!-- /rom_type -->
							<hr>
							<!-- End Map -->
						</section>
						<!-- /section -->
					
						
						<!-- /section -->
						<hr>

							<div class="add-review">
								
								
							</div>
					</div>
					<!-- /col -->
<script>
function chkinn(ddate)
{
	$("#chkkout").attr({"min":ddate});
}
function chkoout(vdate)
{
	var price=$("#price2").val();
	var chkkkin=$("#chhkin").val();
	var maxp=vdate.split('-');
	var minp=chkkkin.split('-');
	var total=maxp[2]-minp[2]+1;
	var ntotal=price*total;
	$("#days").val(total)
	$("#price").val(ntotal)


}
</script>


					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<span>Reservation <small></small></span>
				
							</div>
		<form method="post" action="<?php echo site_url() ?>/BookingController/bookroom/<?php echo $room->rid; ?>">
        <div class="form-group">
          <span>Name</span>
            <input class="form-control" type="text" name="name" placeholder="Your Name" required="required">
        </div>
        <div class="form-group">
          <span>Mobile</span>
            <input class="form-control" type="text" name="mobile" placeholder="Your Mobile Number" required="required">
        </div>
        <div class="form-group">
          <span>Email</span>
            <input class="form-control" type="email" name="email" placeholder="Your Email" required="required" value="<?php echo $this->session->userdata('useremail') ?>" readonly="readonly">
        </div>
		<div class="form-group">
        <span>Check In</span>
            <input class="form-control" type="date" name="chkin" min="<?php echo date('Y-m-d') ?>" onchange="chkinn(this.value)" id="chhkin" required="required" >
        </div>
        <div class="form-group">
          <span>Check Out</span>
	        <input class="form-control" type="date" name="chkout" min="<?php echo date('Y-m-d') ?>" onchange="chkoout(this.value)" id="chkkout" required="required">
        </div>
        <div class="form-group">
          <span>Total Days</span>
	        <input readonly="readonly" class="form-control" type="text" name="Days" placeholder="Days" id="days"  >
        </div>
         <div class="form-group">
        <span>Total price</span>
	        <input readonly="readonly" class="form-control" type="text" name="price" placeholder="Price" id="price" value="<?php echo $rr->rprice ?>"  >
	        <input readonly="readonly" class="form-control" type="hidden" name="price" placeholder="Price" id="price2" value="<?php echo $rr->rprice ?>"  >

        </div>

	<input value="Book Now" type="submit" class=" add_top_30 btn_1 full-width purchase">
	</form>
    
							<div class="text-center"><small>No money charged in this step</small></div>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->