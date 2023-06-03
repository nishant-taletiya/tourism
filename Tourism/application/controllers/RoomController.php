<?php
class RoomController extends CI_Controller
{
	public function getrooms($id)
	{
		$this->load->model('Roommodel');
		$file['rooms']=$this->Roommodel->singlehotelroom($id);
		$this->load->view('Template/Header');
		$this->load->view('Room/Rooms',$file);
		$this->load->view('Template/Footer');

	}
	public function newrooms($id,$sprice,$eprice)
	{
		$this->load->model('Roommodel');
		$file['rooms']=$this->Roommodel->ajaxsinglehotelroom($id,$sprice,$eprice);
	}	
	public function roomdetail($rid)
	{
		$this->db->where('rid',$rid);
		$file['room']=$this->db->get('rooms')->row();
		$this->load->view('Template/Header');
		$this->load->view('Room/roomdetail',$file);
		$this->load->view('Template/Footer');
	}
}
?>