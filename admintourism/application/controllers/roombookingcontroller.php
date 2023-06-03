<?php
Class roombookingcontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showroombooking()
		{
			
			$this->load->model('roombookingmodel');
			$file['roombooking']=$this->roombookingmodel->showroombooking();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('roombooking/showroombooking',$file);
						
		}
		public function delete($id)
		{
			$this->load->model('roombookingmodel');
			$this->roombookingmodel->delete($id);
			redirect('roombookingcontroller/showroombooking');
  		}
  		public function deleteall()
		{
			$this->load->model('roombookingmodel');
			$this->roombookingmodel->deleteall();
			redirect('roombookingcontroller/showroombooking');
		}
		public function checkall()
		{
			$this->load->model('roombookingmodel');
			$file['roombooking']=$this->roombookingmodel->showroombooking();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('roombooking/showroombooking',$file);
		}

}
?>