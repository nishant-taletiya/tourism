<?php
class RestaurantController extends CI_Controller
{
		public function index()
		{
		$this->load->model('restaurantmodel');
		$file['attr']=$this->restaurantmodel->getrestaurant();
	
		$this->load->view('Template/Header');
		$this->load->view('Restaurant/Restaurant',$file);
		$this->load->view('Template/Footer');
		}
}

?>