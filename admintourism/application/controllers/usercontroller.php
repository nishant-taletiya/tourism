<?php
Class usercontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showuser()
		{
			
			$this->load->model('usermodel');
			$file['user']=$this->usermodel->showuser();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('user/showuser',$file);
						
		}
		public function delete($id)
		{
			$this->load->model('usermodel');
			$this->usermodel->delete($id);
			redirect('usercontroller/showuser');
		
  		}
		public function status($id)
		{
			$this->load->model('usermodel');
			$this->usermodel->status($id);
			redirect('usercontroller/showuser');
		}
		public function deleteall()
		{
			$this->load->model('usermodel');
			$this->usermodel->deleteall();
			redirect('usercontroller/showuser');
		}
		public function checkall()
		{
			$this->load->model('usermodel');
			$file['user']=$this->usermodel->showuser();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('user/showuser',$file);	
		}
}
?>