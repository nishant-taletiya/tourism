<?php
Class seatcontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showseat()
		{
			
			$this->load->model('seatmodel');
			$file['seat']=$this->seatmodel->showseat();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('seat/showseat',$file);
		}
		public function delete($id)
		{
			$this->load->model('seatmodel');
			$this->seatmodel->delete($id);
			redirect('seatcontroller/showseat');
  		}
  		public function deleteall()
		{
			$this->load->model('seatmodel');
			$this->seatmodel->deleteall();
			redirect('seatcontroller/showseat');
		}
		public function checkall()
		{
			
			$this->load->model('seatmodel');
			$file['seat']=$this->seatmodel->showseat();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('seat/showseat',$file);
		}
}
?>