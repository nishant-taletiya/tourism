		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bus/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bus/css/bootstrap-responsive.css">
  <script>
	function chkseat(c)
	{
		var img = c.replace("chk", "ch");
		var ck=document.getElementById(c);
		if (ck.checked)
		{
	 	document.getElementById(img).src="<?php echo base_url() ?>/bus/img/occupied.png";
		} 
		else
		{
		
	 	document.getElementById(img).src="<?php echo base_url() ?>/bus/img/available.png";
	    }
		
	}
	</script>

	<main>
		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Seat Booking</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
<style>
.span10
{
-webkit-box-shadow: 6px -5px 29px -4px rgba(36,4,36,1);
-moz-box-shadow: 6px -5px 29px -4px rgba(36,4,36,1);
box-shadow: 6px -5px 29px -4px rgba(36,4,36,1);
/*
-webkit-transform: rotate(90deg);
-moz-transform: rotate(90deg);
-o-transform: rotate(90deg);
-ms-transform: rotate(90deg);
transform: rotate(90deg);
*/
}

</style>		

		<div class="container" >
			<div class="row well">
            	<div class="span10" style="width:500px;margin-left:350px">
				<br /><br />
                	<form  method="POST" onsubmit="return validateCheckBox();" action="<?php echo site_url() ?>/TourController/bookedseat/<?php echo $this->uri->segment(3) ?>">
						<ul class="thumbnails" >
						<?php
							if (count($result) == 0 )
							{
								$space=0;
								for($i=1; $i<25; $i++)
								{
									if($space%2==0)
									{

								echo "<li class='span1' style='margin-left:70px;'>";
								echo "<a href='#' class='thumbnail' title='Available'>";
								?><img src="<?php echo base_url() ?>/bus/img/available.png" alt='Available Seat' id="ch<?php echo $i ?>"/>
								<?php
                                echo "<label class='checkbox'>";
								echo "<input type='checkbox'  name='ch".$i."' onClick='return chkseat(this.value)' value='chk$i' id='chk$i'/>Seat".$i;
								echo "</label>";
								echo "</a>";
								echo "</li>";
									}
									else
									{
								echo "<li class='span1' >";
								echo "<a href='#' class='thumbnail' title='Available'>";
								?><img src="<?php echo base_url() ?>/bus/img/available.png" alt='Available Seat' id="ch<?php echo $i ?>"/>
								<?php
                                echo "<label class='checkbox'>";
								echo "<input type='checkbox' name='ch".$i."' onClick='return chkseat(this.value)' value='chk$i' id='chk$i'/>Seat".$i;
								echo "</label>";
								echo "</a>";
								echo "</li>";
									
									}
								$space=$space+1;
								}
							}
							else
							{
						$seats = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
								foreach($result as $row)
								{
									$pnr = explode("-", $row->PNR);
									$pnr[3] = intval($pnr[3]) - 1;
									$seats[$pnr[3]] = 1;
								//	print_r($seats[$pnr[3]]);
								}
								$space=0;
								for($i=1; $i<25; $i++)
								{
								if($space%2==0)
								{	
							
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1' style='margin-left:70px'>";
											echo "<a href='#' class='thumbnail' title='Booked'>";
								?><img src="<?php echo base_url() ?>/bus/img/occupied.png" alt='Booked Seat' />
								<?php
                     							echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' disabled/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
											else
									{
										echo "<li class='span1' style='margin-left:70px' >";
											echo "<a href='#' class='thumbnail' title='Available'>";
							?>
                            <img src='<?php echo base_url() ?>bus/img/available.png' alt='Available Seat' id="ch<?php echo $i ?>"/>		<?php
								
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' id='chk$i' onClick='return chkseat(this.value)' value='chk$i'>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								}
									else
									{
										$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Available'>";
													?><img src="<?php echo base_url() ?>/bus/img/occupied.png" alt='Booked Seat' id="ch<?php echo $i ?>"/>
								<?php
                     		echo "<label class='checkbox'>";
									echo "<input type='checkbox' name='ch".$i."' disabled />Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								else
									{
										echo "<li class='span1'  >";
											echo "<a href='#' class='thumbnail' title='Available' >";
							?>
                            <img src='<?php echo base_url() ?>bus/img/available.png' alt='Available Seat' id="ch<?php echo $i ?>"/>		<?php
								
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' id='chk$i' onClick='return chkseat(this.value)' value='chk$i'/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								
								
								}									
								$space=$space+1;
						
							}
							}
						?>
						</ul>
                        <hr />
						<center>
							<label>Date of Journey</label>
							<?php
								echo "<input type='text' class='span2' name='doj' 
								value='". $fdob ."' readonly/>";
							?>
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							<a href="<?php echo base_url() ?>/TourController/selectdate" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i> Back </a>
						</center>
					</form>
				</div>
			
            </div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>/bus/js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="<?php echo base_url() ?>/bus/js/bootstrap.js"></script>
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	</BODY>
</HTML>