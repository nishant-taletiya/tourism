<?php
Class buscontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showbus()
		{
			
			$this->load->model('busmodel');
			$file['bus']=$this->busmodel->showbus();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('bus/showbus',$file);
						
		}
		public function delete($id)
		{
			$this->load->model('busmodel');
			$this->busmodel->delete($id);
			redirect('buscontroller/showbus');
		
  		}
		public function deleteall()
		{
			$this->load->model('busmodel');
			$this->busmodel->deleteall();
			redirect('buscontroller/showbus');
		}
		public function checkall()
		{
			
			$this->load->model('busmodel');
			$file['bus']=$this->busmodel->showbus();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('bus/showbus',$file);
						
		}
		
}
?>