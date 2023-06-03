<?php
class AttractionController extends CI_Controller
{
	public function index()
	{
		$this->load->model('Attractionmodel');
		$file['attr']=$this->Attractionmodel->getattraction();
		$this->load->view('Template/Header');
		$this->load->view('Attraction/Attraction',$file);
		$this->load->view('Template/Footer');
	}
	
	public function searchdata()
	{
		$search=$this->input->post('searchbox');
	
		$this->db->from('subplace');
		$this->db->join('attraction','subplace.SID=attraction.SID');
		$this->db->where('attraction.Atitle',$search);
		$file['attr']=$this->db->get()->result();		
		$this->load->view('Template/Header');
		$this->load->view('Attraction/Attraction',$file);
		$this->load->view('Template/Footer');
			
	}
	
	public function detail($id)
	{
		$this->db->where('AID',$id);
		$file['attr']=$this->db->get('attraction')->row();
		
		$this->load->view('Template/Header');
		$this->load->view('Attraction/attractiondetail',$file);
		$this->load->view('Template/Footer');
	}

	public function wishlist($aid)
	{
		
		$uemail=$this->session->userdata('useremail');	
		$this->db->where('Email',$uemail);	
		$user=$this->db->get('register')->row();	
		
		
		$insert=array
					(
					"aid"=>$aid,
					"RID"=>$user->RID
					);	
		$this->db->insert('wishlist',$insert);
			
	}
	
	public function removewishlist($aid)
	{
		
		$this->db->where('AID',$aid);
		$this->db->delete('wishlist');
			
	}	
	
	
}
?>