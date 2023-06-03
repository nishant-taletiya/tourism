	<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">My Rooms</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Booked</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Finish!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</div>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<table class="table table-striped cart-list" style="width:1000px">
					
                 <thead>
                  <tr>
				    <th>Room Name</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Check In</th>
                    <th>Check Out</th>
	                <th>number of days</th>
	                <th>price</th>
      		      	<th>Cancel Rooms</th>
                  </tr>
                </thead>
                <tbody>
                <?php
				$this->db->where('bemail',$this->session->userdata('useremail'));
				$roombook=$this->db->get('roombooking')->result();
				foreach($roombook as $row)
				{
				?>
                  <tr>
                 	<td>
					

					<?php 
					$this->db->where('rid',$row->rid); 
					$room=$this->db->get('rooms')->row();
					echo $room->rname;
					?>
                    </td>
                    <td><?php echo $row->customername ?></td>
                    <td><?php echo $row->mobilenumber ?></td>
                    <td><?php echo $row->bemail ?></td>
                           <td><?php echo $row->chekin ?></td>
                    <td><?php echo $row->chekout ?></td>
 
                    <td><?php echo $row->staingdays ?></td>
              		<td><?php echo $row->totalprice ?></td>
                    <td>
                    <a href="<?php echo site_url() ?>/AddtocartController/removebookedroom/<?php echo $row->bid ?>">
                    Cancel
                    </a>
                    </td>   
                  </tr>
                <?php
				}
				?>
                
                
                </tbody>
                    	</table>
						
						<!-- /cart-options -->
					</div>
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