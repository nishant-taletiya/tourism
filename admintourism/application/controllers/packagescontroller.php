<?php
Class packagescontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
		public function gethotel($id)
		{
			$this->load->model('packagesmodel');
			$this->packagesmodel->gethotel($id);
		}
		public function getguide($id)
		{
			$this->load->model('packagesmodel');
			$this->packagesmodel->getguide($id);
		}

		public function showpackages()
		{
			
			$this->load->model('packagesmodel');
			$file['pack']=$this->packagesmodel->showpackages();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('packages/showpackages',$file);
						
		}
		public function addpackages()
		{
			$this->load->model('packagesmodel');
			$file['said']=$this->packagesmodel->selectattractionid();
			$file['shid']=$this->packagesmodel->selecthotelid();
			$file['sgid']=$this->packagesmodel->selectguideid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('packages/addpackages',$file);
		}
		public function insert()
		{
			$this->load->model('packagesmodel');
			$this->packagesmodel->addpackages();
			redirect('packagescontroller/showpackages');
		}
		public function delete($id)
		{
			$this->load->model('packagesmodel');
			$this->packagesmodel->delete($id);
			redirect('packagescontroller/showpackages');
		
  		}
		public function edit($id)
		{
			$this->load->model('packagesmodel');
			$file['data']=$this->packagesmodel->edit($id);
			$file['said']=$this->packagesmodel->selectattractionid();
			$file['shid']=$this->packagesmodel->selecthotelid();
			$file['sgid']=$this->packagesmodel->selectguideid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('packages/editpackages',$file);
		}
		public function update($id)
		{
			$this->load->model('packagesmodel');
			$this->packagesmodel->update($id);	
			redirect('packagescontroller/showpackages');
		}
		public function deleteall()
		{
			$this->load->model('packagesmodel');
			$this->packagesmodel->deleteall();
			redirect('packagescontroller/showpackages');
		}
		public function checkall()
		{
			
			$this->load->model('packagesmodel');
			$file['pack']=$this->packagesmodel->showpackages();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('packages/showpackages',$file);
						
		}
}
?>