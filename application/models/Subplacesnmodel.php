<?php
class Subplacesmodel extends CI_Model
{
	public function getsubplace()
	{
		$this->db->from('place');
		$this->db->join('subplace','subplace.PID=place.PID');
		return	$this->db->get()->result();		
	}	
}
?>