<?php
class restaurantmodel extends CI_Model 
{
	public function getrestaurant()
	{
	return $this->db->get('restaurant')->result();
	}
}
?>	