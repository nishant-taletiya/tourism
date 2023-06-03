<?php
Class roomimagecontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showroomimage()
		{
			
			$this->load->model('roomimagemodel');
			$file['roomimage']=$this->roomimagemodel->showroomimage();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('roomimage/showroomimage',$file);
						
		}
		public function addroomimage()
		{			
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('roomimage/addroomimage');			
		}		
		public function insert()
		{
			$this->load->model('roomimagemodel');
			$this->roomimagemodel->insert();
			redirect('roomimagecontroller/showroomimage');
		}
		public function delete($id)
		{
			$this->load->model('roomimagemodel');
			$this->roomimagemodel->delete($id);
			redirect('roomimagecontroller/showroomimage');
		
  		}
		public function edit($id)
		{
			$this->load->model('roomimagemodel');
			$file['data']=$this->roomimagemodel->edit($id);
			$file['srid']=$this->roomimagemodel->selectroomid();
			$file['shid']=$this->roomimagemodel->selecthotelid();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('roomimage/editroomimage',$file);
		}
		public function update($id)
		{
			$this->load->model('roomimagemodel');
			$this->roomimagemodel->update($id);	
			redirect('roomimagecontroller/showroomimage');
		}
		public function deleteall()
		{
			$this->load->model('roomimagemodel');
			$this->roomimagemodel->deleteall();
			redirect('roomimagecontroller/showroomimage');
		}
		public function checkall()
		{
			$this->load->model('roomimagemodel');
			$file['roomimage']=$this->roomimagemodel->showroomimage();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('roomimage/showroomimage',$file);
			
		}
}
?>