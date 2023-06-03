<?php
class Hotelmodel extends CI_Model
{
	public function gethotel()
	{
		$this->db->from('hotel');
		$this->db->join('attraction','attraction.AID=hotel.AID');
		return $this->db->get()->result();
		
	}
	public function gethotelhome()
	{
		$this->db->limit(8);
		return $this->db->get('hotel')->result();	
	}
}

?>