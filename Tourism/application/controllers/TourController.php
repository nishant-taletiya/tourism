<?php
class TourController extends CI_Controller
{
	public function index()
	{
		$this->load->model('tourmodel');
		$file['tourpackages']=$this->tourmodel->gettourpackages();
		$this->load->view('Template/Header');
		$this->load->view('Tour/Travelpackage',$file);
		$this->load->view('Template/Footer');
	}
	public function guides()
	{
		$this->load->model('tourmodel');
		$file['guide']=$this->tourmodel->subguide();
		$this->load->view('Template/Header');
		$this->load->view('Tour/Travelguide',$file);
		$this->load->view('Template/Footer');
	}
	public function showdetail($id)
	{
		$this->load->model('tourmodel');
		$file['detail']=$this->tourmodel->gettourpackagesdetail($id);
		$this->load->view('Template/Header');
		$this->load->view('Tour/tourdetail',$file);
		$this->load->view('Template/Footer');
	}
	
	public function selectdate($id)
	{
		if($this->session->userdata('username')=="")
		{
			redirect('UserController/signinpage');	
		}
		else
		{
		$this->load->view('Template/Header');
		$this->load->view('Tour/selectdate');
		$this->load->view('Template/Footer');
		}
	}
	
	public function displayseat($id)
	{
		$file['fdob']=$this->input->post('doj');
		$this->db->where('date',$file['fdob']);
		$file['result']=$this->db->get('seat')->result();
		$this->load->view('Template/Header');
		$this->load->view('Tour/busseat',$file);
		$this->load->view('Template/Footer');
	}
	public function bookedseat()
	{
		$this->load->view('Template/Header');
		$this->load->view('Tour/busseatbooked');
		$this->load->view('Template/Footer');
	}
	
	public function registerseat($pkid)
	{
		$this->load->model('tourmodel');
		$this->tourmodel->insertseatdetail($pkid);			
		redirect('TourController/confirmed');
	}
	public function confirmed()
	{
		$this->load->view('Template/Header');
		$this->load->view('Tour/Confirmed');
		$this->load->view('Template/Footer');
	}
	
	
}
?>