<?php
class WishlistController extends CI_Controller 
{
	public function index()
	{
		if($this->session->userdata('username')=="")
		{
			redirect('UserController/signinpage');	
		}
		else
		{
			
		$this->db->where('Email',$this->session->userdata('useremail'));	
		$user=$this->db->get('register')->row();	
		$this->db->from('attraction');
		$this->db->join('wishlist','attraction.AID=wishlist.AID');
		$this->db->where('RID',$user->RID);
		$file['wish']=$this->db->get()->result();
		$this->load->view('Template/Header');
		$this->load->view('Wishlist/Wishlist',$file);
		$this->load->view('Template/Footer');
		}
	}
}
?>