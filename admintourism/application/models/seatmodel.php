<?php
	class seatmodel extends CI_model
	{	
		public function showseat()
		{
		return	$this->db->get('seat')->result();
		}	
		public function delete($id)
		{
			$this->db->where('customerid',$id);
			$this->db->delete('seat');
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('customerid',$row);
				$this->db->delete('seat');
			}
		}
	}
?>