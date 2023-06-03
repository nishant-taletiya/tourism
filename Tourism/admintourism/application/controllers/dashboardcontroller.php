<?php
Class dashboardcontroller extends CI_controller
{
	
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
	
		public function dashboard()
		{
			$this->load->model('dashboardmodel');
			$file['cplace']=$this->dashboardmodel->countplace();
			$file['splace']=$this->dashboardmodel->countsubplace();
			$file['attraction']=$this->dashboardmodel->countattraction();
			$file['photo']=$this->dashboardmodel->countphoto_gallery();
			$file['video']=$this->dashboardmodel->countvideo_gallery();
			$file['package']=$this->dashboardmodel->countpackage();
			$file['busticketregister']=$this->dashboardmodel->countbusticket();
			$file['seat']=$this->dashboardmodel->countseat();
			$file['guide']=$this->dashboardmodel->countguide();
			$file['hotel']=$this->dashboardmodel->counthotel();
			$file['roomb']=$this->dashboardmodel->countroombooking();
			$file['rooms']=$this->dashboardmodel->countrooms();
			$file['roomi']=$this->dashboardmodel->countroomimages();
			$file['res']=$this->dashboardmodel->countrestaurant();
			$file['feed']=$this->dashboardmodel->countfeedback();
			$file['news']=$this->dashboardmodel->countnews();
			$file['reg']=$this->dashboardmodel->countregister();
			$file['wish']=$this->dashboardmodel->countwishlist();
			
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('dashboard/dashboard',$file);
						
		}
}
?>