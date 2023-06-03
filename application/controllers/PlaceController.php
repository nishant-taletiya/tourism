<?php
class PlaceController extends CI_Controller
{
	public function index()
	{
		$this->load->view('Template/Header');
		$this->load->view('Place/Showplace');
		$this->load->view('Template/Footer');	
	}
}
?>