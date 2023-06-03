<?php
	class wishlistmodel extends CI_model
	{	
		public function showwishlist()
		{
		$this->db->from('wishlist');
		$this->db->join('attraction','attraction.AID=wishlist.AID');
		$this->db->join('rooms','rooms.rid=wishlist.rid');	
		return	$this->db->get()->result();
		}
		public function deleteall()
		{
			$delall=$this->input->post('del');
			
			foreach($delall as $row)
			{
				$this->db->where('wishlistid',$row);
				$this->db->delete('wishlist');
				
			}
		}
		public function delete($id)
		{
			$this->db->where('wishlistid',$id);
			$this->db->delete('wishlist');
		}
	}
?>