<?php
	class roombookingmodel extends CI_model
	{	
		public function showroombooking()
		{
			$this->db->from('rooms');
			$this->db->join('roombooking','rooms.rid=roombooking.rid');
			
		return	$this->db->get('')->result();
		}	
		public function delete($id)
		{
			$this->db->where('bid',$id);
			$this->db->delete('roombooking');
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('bid',$row);
				$this->db->delete('roombooking');
			}
		}
	}
?>