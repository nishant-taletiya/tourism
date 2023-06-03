<?php
Class hotelcontroller extends CI_controller
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
			$this->load->model('hotelmodel');
			$this->hotelmodel->getsubplace($id);
		}
		public function showhotel()
		{
			
			$this->load->model('hotelmodel');
			$file['hot']=$this->hotelmodel->showhotel();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('hotel/showhotel',$file);
						
		}
		public function addhotel()
		{		
			$this->load->model('hotelmodel');
			$file['said']=$this->hotelmodel->selectattractionid();
			$file['ssid']=$this->hotelmodel->selectsubplaceid();	
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('hotel/addhotel',$file);			
		}		
		public function insert()
		{
			$this->load->model('hotelmodel');
			$this->hotelmodel->insert();
			redirect('hotelcontroller/showhotel');
		}
		public function delete($id)
		{
			$this->load->model('hotelmodel');
			$this->hotelmodel->delete($id);
			redirect('hotelcontroller/showhotel');
  		}
  		public function deleteall()
		{
			$this->load->model('hotelmodel');
			$this->hotelmodel->deleteall();
			redirect('hotelcontroller/showhotel');
		}
		public function checkall()
		{
			$this->load->model('hotelmodel');
			$file['hot']=$this->hotelmodel->showhotel();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('hotel/showhotel',$file);
		}

		public function edit($id)
		{
			$this->load->model('hotelmodel');
			$file['data']=$this->hotelmodel->edit($id);
			$file['said']=$this->hotelmodel->selectattractionid();
			$file['ssid']=$this->hotelmodel->selectsubplaceid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('hotel/edithotel',$file);
		}
		public function update($id)
		{
			$this->load->model('hotelmodel');
			$this->hotelmodel->update($id);
			redirect('hotelcontroller/showhotel');
		}
		public function status($id)
		{
			$this->load->model('hotelmodel');
			$this->hotelmodel->status($id);
			redirect('hotelcontroller/showhotel');
		}

}
?>