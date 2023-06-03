<?php
	class profilecontroller extends CI_Controller
	{
		public function index()
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('profile/showprofile');
		}
		public function editprofile()
		{
			$this->load->model('profilemodel');
			$file['uname']=$this->profilemodel->showdata();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('profile/editprofile',$file);
		}
		public function update($id)
		{
			
			$this->load->model('profilemodel');
			$this->profilemodel->update($id);
			redirect('profilecontroller/editprofile');
		}
		public function fp()
		{
			$file['err']="";
			$this->load->view('profile/forgetpassword',$file);
		}
		
	}
?>