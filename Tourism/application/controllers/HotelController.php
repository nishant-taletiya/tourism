<?php
class HotelController extends CI_Controller
{
	public function index()
	{
		$this->load->model('Hotelmodel');
		$file['hotel']=$this->Hotelmodel->gethotel();
		$this->load->view('Template/Header');
		$this->load->view('Hotels/Hotels',$file);
		$this->load->view('Template/Footer');
	}
}
?>