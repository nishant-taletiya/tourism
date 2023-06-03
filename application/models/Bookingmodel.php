<?php
class Bookingmodel extends CI_Model
{
	public function getplace()
	{
		return $this->db->get('place')->result();	
	}
	
	public function getsubplace()
	{
		return $this->db->get('subplace')->result();	
	}	
}
?>