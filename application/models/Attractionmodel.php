<?php
class Attractionmodel extends CI_Model
{
	public function getattraction()
	{
		$this->db->from('subplace');
		$this->db->join('attraction','subplace.SID=attraction.SID');
		return	$this->db->get()->result();		
	}	
}
?>