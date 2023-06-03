<?php
	class busmodel extends CI_model
	{	
		public function showbus()
		{
			$this->db->from('package');
			$this->db->join('busticketregister','package.packageid=busticketregister.packageid');
			
		return	$this->db->get('')->result();
		}	
		public function delete($id)
		{
			$this->db->where('customerid',$id);
			$this->db->delete('busticketregister');
		}
			public function deleteall()
		{
			$delall=$this->input->post('del');
			foreach($delall as $row)
			{
				$this->db->where('customerid',$row);
				$this->db->delete('busticketregister');
			}
		}
	
		
	}
?>