	<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">My Tour</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Package Booked</div>
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
				    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>address</th>
                    <th>Message</th>
					<th>Cancel</th>
	              </tr>
                </thead>
                <tbody>
                <?php
				$this->db->where('customeremail',$this->session->userdata('useremail'));
				$tourbook=$this->db->get('busticketregister')->result();
				foreach($tourbook as $row)
				{
				?>
                  <tr>
                 	
                    <td><?php echo $row->customername ?></td>
                    
                    <td><?php echo $row->customeremail ?></td>
                    <td><?php echo $row->customercontact ?></td>
                           <td><?php echo $row->customeraddress ?></td>
                    <td><?php echo $row->customermessage ?></td>
                    <td>
                    <a href="<?php echo site_url() ?>/AddtocartController/removetour/<?php echo $row->orderno ?>">
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