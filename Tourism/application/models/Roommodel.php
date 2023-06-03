<?php
class Roommodel extends CI_Model
{
	public function singlehotelroom($id)
	{
			  $this->db->where('Hotelid',$id);		
	return	$this->db->get('rooms')->result();	
	}	
	public function ajaxsinglehotelroom($id,$sprice,$eprice)
	{
		
		$this->db->where('Hotelid',$id);
		$this->db->where('rprice >=',$sprice);
		$this->db->where('rprice <=',$eprice);
		$rooms=$this->db->get('rooms')->result();	
		foreach($rooms as $rowrooms)
							{
								$this->db->where('rid',$rowrooms->rid);
								$rimg=$this->db->get('roomimages')->row();
							
		
		?>
		<div class="col-md-6 isotope-item latest">
								<div class="box_grid">
									<figure>
										<a href="#0" class="wish_bt"></a>
										<a href="hotel-detail.html">
         <img src="<?php echo base_url() ?>/admintourism/imgupload/<?php echo $rimg->rimage ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more">
         <span>Read more</span></div></a>
										<small><?php echo $rowrooms->rcategory ?></small>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="hotel-detail.html"><?php echo $rowrooms->rname ?></a></h3>
										<p><?php echo $rowrooms->rdetail ?></p>
										<span class="price">From <strong> &#8377;<?php echo $rowrooms->rprice ?></strong></span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
									</ul>
								</div>
							</div>
        
        <?php
		}
	}
}
?>