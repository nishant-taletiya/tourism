<?php
Class guidecontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showguide()
		{
			
			$this->load->model('guidemodel');
			$file['guid']=$this->guidemodel->showguide();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('guide/showguide',$file);
						
		}
		public function addguide()
		{			
			$this->load->model('guidemodel');
			$file['said']=$this->guidemodel->selectattractionid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('guide/addguide',$file);			
		}		
		public function insert()
		{
			$this->load->model('guidemodel');
			$this->guidemodel->insert();
			redirect('guidecontroller/showguide');
		}
		public function delete($id)
		{
			$this->load->model('guidemodel');
			$this->guidemodel->delete($id);
			redirect('guidecontroller/showguide');
		
  		}
			public function deleteall()
		{
			$this->load->model('guidemodel');
			$this->guidemodel->deleteall();
			redirect('guidecontroller/showguide');
		}
		public function checkall()
		{
			$this->load->model('guidemodel');
			$file['guid']=$this->guidemodel->showguide();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('guide/showguide',$file);
		}
		public function edit($id)
		{
			$this->load->model('guidemodel');
			$file['data']=$this->guidemodel->edit($id);
			$file['said']=$this->guidemodel->selectattractionid();

			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('guide/editguide',$file);
		}
		public function update($id)
		{
			$this->load->model('guidemodel');
			$this->guidemodel->update($id);
			redirect('guidecontroller/showguide');
		}


				
		
}
?>