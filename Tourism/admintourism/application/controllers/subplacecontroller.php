<?php
Class subplacecontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showsubplace()
		{
			
			$this->load->model('subplacemodel');
			$file['subplc']=$this->subplacemodel->showsubplace();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('subplace/showsubplace',$file);
						
		}
		public function addsubplace()
		{
			$this->load->model('subplacemodel');
			$file['spid']=$this->subplacemodel->selectplaceid();
			
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('subplace/addsubplace',$file);
		}
		public function insert()
		{
			$this->load->model('subplacemodel');
			$this->subplacemodel->addsubplace();
			redirect('subplacecontroller/showsubplace');
		}
		public function delete($id)
		{
			$this->load->model('subplacemodel');
			$this->subplacemodel->delete($id);
			redirect('subplacecontroller/showsubplace');
		
  		}
		public function edit($id)
		{
			$this->load->model('subplacemodel');
			$file['spid']=$this->subplacemodel->selectplaceid();
			$file['data']=$this->subplacemodel->edit($id);
			$file['subplc']=$this->subplacemodel->showsubplace();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('subplace/editsubplace',$file);
		}
		public function update($id)
		{
			$this->load->model('subplacemodel');
			$this->subplacemodel->update($id);	
			redirect('subplacecontroller/showsubplace');
		}
		public function status($id)
		{
			$this->load->model('subplacemodel');
			$this->subplacemodel->status($id);
			redirect('subplacecontroller/showsubplace');
		}
		public function deleteall()
		{
			$this->load->model('subplacemodel');
			$this->subplacemodel->deleteall();
			redirect('subplacecontroller/showsubplace');
		}
		public function checkall()
		{
			
			$this->load->model('subplacemodel');
			$file['subplc']=$this->subplacemodel->showsubplace();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('subplace/showsubplace',$file);
						
		}

}
?>