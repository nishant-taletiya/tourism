
<?php
Class wishlistcontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
	
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}			
	}
	
		public function showwishlist()
		{
			
			$this->load->model('wishlistmodel');
			$file['wlist']=$this->wishlistmodel->showwishlist();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('wishlist/showwishlist',$file);
						
		}
		public function delete($id)
		{
			$this->load->model('wishlistmodel');
			$this->wishlistmodel->delete($id);
			redirect('wishlistcontroller/showwishlist');
		
  		}
		
		public function deleteall()
		{
			$this->load->model('wishlistmodel');
			$this->wishlistmodel->deleteall();
			redirect('wishlistcontroller/showwishlist');
		}
		public function checkall()
		{
			$this->load->model('wishlistmodel');
			$file['wlist']=$this->wishlistmodel->showwishlist();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('wishlist/showwishlist',$file);	
		}
}
?>