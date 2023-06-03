<?php
class AddtocartController extends CI_Controller 
{
	public function index()
	{
		$this->load->view('Template/Header');
		$this->load->view('Cart/mycart');
		$this->load->view('Template/Footer');
	}
	public function bookedroom()
	{
		$this->load->view('Template/Header');
		$this->load->view('booked/bookedroom');
		$this->load->view('Template/Footer');
	}
	public function bookedtour()
	{
		$this->load->view('Template/Header');
		$this->load->view('booked/bookedtour');
		$this->load->view('Template/Footer');
	}
	public function removetour($id)
	{
		$this->db->where('orderno',$id);
		$this->db->delete('busticketregister');	
		$this->db->where('orderno',$id);
		$this->db->delete('seat');	
		redirect('AddtocartController/bookedtour');
	}
	
	public function removebookedroom($id)
	{
		$this->db->where('bid',$id);
		$this->db->delete('roombooking');	
		redirect('AddtocartController/bookedroom');
	}

}
?>