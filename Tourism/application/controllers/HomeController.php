<?php
class HomeController extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Hotelmodel');
		$this->load->model('Homemodel');

		$file['hotel']=$this->Hotelmodel->gethotelhome();
		$file['place']=$this->Homemodel->getplace();

		$this->load->view('Template/Header');
		$this->load->view('Template/Content',$file);
		$this->load->view('Template/Footer');
	}

	public function fetchdata()
	{
			$this->db->where("Astatus","Active");
			$data=$this->db->get("attraction")->result();
			echo json_encode($data);
	}
	
	

	public function getroomdata($id)
	{
		$this->load->model('');

		$this->load->view('Template/Header');
		$this->load->view('Room/Rooms',$file);
		$this->load->view('Template/Footer');

	}

	public function subplace($pid)
	{
		$this->db->where('PID',$pid);
		$subplace=$this->db->get('subplace')->result();
		foreach($subplace as $sp)
		{
			echo "<option value='$sp->SID'>$sp->SPtitle</option>";	
		}
	}
	
	
}
?>