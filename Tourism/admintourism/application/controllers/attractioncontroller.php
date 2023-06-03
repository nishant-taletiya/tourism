<?php
Class attractioncontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function getsubplace2($id)
		{
			$this->load->model('attractionmodel');
			$this->attractionmodel->getsubplace($id);
		}




		
		public function showattraction()
		{
			
			$this->load->model('attractionmodel');
			$file['attr']=$this->attractionmodel->showattraction();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('attraction/showattraction',$file);				
		}
		public function addattraction()
		{
			$this->load->model('attractionmodel');
			$file['spid']=$this->attractionmodel->selectplaceid();
			$file['sspid']=$this->attractionmodel->selectsubplaceid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('attraction/addattraction',$file);
		}
		public function insert()
		{
			$this->load->model('attractionmodel');
			$this->attractionmodel->addattraction();
			redirect('attractioncontroller/showattraction');
		}
		public function delete($id)
		{
			$this->load->model('attractionmodel');
			$this->attractionmodel->delete($id);
			redirect('attractioncontroller/showattraction');
		
  		}
		public function edit($id)
		{
			$this->load->model('attractionmodel');
			$file['data']=$this->attractionmodel->edit($id);
			$file['spid']=$this->attractionmodel->selectplaceid();
			$file['sspid']=$this->attractionmodel->selectsubplaceid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('attraction/editattraction',$file);
		}
		public function update($id)
		{
			$this->load->model('attractionmodel');
			$this->attractionmodel->update($id);	
			redirect('attractioncontroller/showattraction');
		}
		public function status($id)
		{
			$this->load->model('attractionmodel');
			$this->attractionmodel->status($id);
			redirect('attractioncontroller/showattraction');
		}
		public function deleteall()
		{
			$this->load->model('attractionmodel');
			$this->attractionmodel->deleteall();
			redirect('attractioncontroller/showattraction');
		}
		public function checkall()
		{
			
			$this->load->model('attractionmodel');
			$file['attr']=$this->attractionmodel->showattraction();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('attraction/showattraction',$file);				
		}
}
?>