<?php
	class usermodel extends CI_model
	{	
		public function showuser()
		{
		return	$this->db->get('register')->result();
		}	
		public function status($id)
		{
			$this->db->where('RID',$id);
			$data=$this->db->get('register')->row();
			
			if($data->status=="Active")
			{
				$update=array
							("status"=>"Dective");
			}
			else
			{
				$update=array
							("status"=>"Active");
				
			}
			$this->db->where('RID',$id);
			$this->db->update('register',$update);
		}
		public function deleteall()
		{
			$delall=$this->input->post('del');
			
			foreach($delall as $row)
			{
				$this->db->where('RID',$row);
				$this->db->delete('register');
				
			}
		}
		public function delete($id)
		{
			$this->db->where('RID',$id);
			$this->db->delete('register');
		}
	}
?>