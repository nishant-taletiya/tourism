<?php
class SubplaceController extends CI_Controller
{
	public function index()
	{
		$this->load->model('Subplacesnmodel');
		$file['attr']=$this->Subplacesnmodel->getsubplace();
		$this->load->view('Template/Header');
		$this->load->view('subplace/subplaces',$file);
		$this->load->view('Template/Footer');
	}
	public function subplace($pid)
	{
		$this->db->where('PID',$pid);
		$file['attr']=$this->db->get('subplace')->result();
		$this->load->view('Template/Header');
		$this->load->view('subplace/subplaces',$file);
		$this->load->view('Template/Footer');
		
	}
}

?>