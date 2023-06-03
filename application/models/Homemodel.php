<?php
class Homemodel extends CI_Model 
{
	public function getplace()
	{
	return $this->db->get('place')->result();
	}
}
?>	