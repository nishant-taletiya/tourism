<?php
class MediaController extends CI_Controller
{
	public function index()
	{
		$file['photo']=$this->db->get('photo_gallery')->result();
		$this->load->view('Template/Header');
		$this->load->view('Media/image',$file);
		$this->load->view('Template/Footer');
	}
}
?>