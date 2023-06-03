<?php
Class roomcontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}



	
		public function showroom()
		{
			
			$this->load->model('roommodel');
			$file['room']=$this->roommodel->showroom();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('room/showroom',$file);
						
		}
		public function addroom()
		{			
			$this->load->model('roommodel');
			$file['shid']=$this->roommodel->selecthotelid();
			
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('room/addroom',$file);			
		}	
		public function insert()
		{
			$this->load->model('roommodel');
			$this->roommodel->insert();
			redirect('roomcontroller/showroom');
		}
		public function update($id)
		{
			$this->load->model('roommodel');
			$this->roommodel->update($id);
			redirect('roomcontroller/showroom');
		}
		
		public function delete($id)
		{
			$this->load->model('roommodel');
			$this->roommodel->delete($id);
			redirect('roomcontroller/showroom');
  		}
  		public function deleteall()
		{
			$this->load->model('roommodel');
			$this->roommodel->deleteall();
			redirect('roomcontroller/showroom');
		}
		public function checkall()
		{
			
			$this->load->model('roommodel');
			$file['room']=$this->roommodel->showroom();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('room/showroom',$file);			
		}
		public function edit($id)
		{
			$this->load->model('roommodel');
			$file['data']=$this->roommodel->edit($id);
			$file['shid']=$this->roommodel->selecthotelid();
			
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('room/editroom',$file);
		}
		public function status($id)
		{
			$this->load->model('roommodel');
			$this->roommodel->status($id);
			redirect('roomcontroller/showroom');
		}

}

?>