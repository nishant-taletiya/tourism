<?php
Class placecontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
	
		public function showplace()
		{			
			$this->load->model('placemodel');
			$file['place']=$this->placemodel->showplace();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('place/showplace',$file);	
		}
		public function addplace()
		{			
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('place/addplace');			
		}		
		public function insert()
		{
			$this->load->model('placemodel');
			$this->placemodel->insert();
			redirect('placecontroller/showplace');
		}
		public function delete($id)
		{
			$this->load->model('placemodel');
			$this->placemodel->delete($id);
			redirect('placecontroller/showplace');
		
  		}
		public function edit($id)
		{
			$this->load->model('placemodel');
			$file['data']=$this->placemodel->edit($id);
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('place/editplace',$file);
		}
		public function update($id)
		{
			$this->load->model('placemodel');
			$this->placemodel->update($id);	
			redirect('placecontroller/showplace');
		}
		public function status($id)
		{
			$this->load->model('placemodel');
			$this->placemodel->status($id);
			redirect('placecontroller/showplace');
		}
		public function deleteall()
		{
			$this->load->model('placemodel');
			$this->placemodel->deleteall();
			redirect('placecontroller/showplace');
		}
		public function checkall()
		{			
			$this->load->model('placemodel');
			$file['place']=$this->placemodel->showplace();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('place/showplace',$file);	
		}
}
?>