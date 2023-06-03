<?php
Class photocontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showphoto()
		{
			
			$this->load->model('photomodel');
			$file['photo']=$this->photomodel->showphoto();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('photo/showphoto',$file);
						
		}
		public function addphoto()
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('photo/addphoto');
		}
		public function insert()
		{
			$this->load->model('photomodel');
			$this->photomodel->addphoto();
			redirect('photocontroller/showphoto');
		}
		public function delete($id)
		{
			$this->load->model('photomodel');
			$this->photomodel->delete($id);
			redirect('photocontroller/showphoto');
		
  		}
		public function edit($id)
		{
			$this->load->model('photomodel');
			$file['data']=$this->photomodel->edit($id);
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('photo/editphoto',$file);
		}
		public function update($id)
		{
			$this->load->model('photomodel');
			$this->photomodel->update($id);	
			redirect('photocontroller/showphoto');
		}
		public function status($id)
		{
			$this->load->model('photomodel');
			$this->photomodel->status($id);
			redirect('photocontroller/showphoto');
		}
		public function deleteall()
		{
			$this->load->model('photomodel');
			$this->photomodel->deleteall();
			redirect('photocontroller/showphoto');
		}
		public function checkall()
		{
			
			$this->load->model('photomodel');
			$file['photo']=$this->photomodel->showphoto();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('photo/showphoto',$file);
						
		}
}
?>