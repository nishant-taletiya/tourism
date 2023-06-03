<?php
class BookingController extends CI_Controller
{
	public function index()
	{
		$this->load->model('Bookingmodel');
		$file['place']=$this->Bookingmodel->getplace();
		$file['subplace']=$this->Bookingmodel->getsubplace();
		$this->load->view('Template/Header');
		$this->load->view('Booking/Booking',$file);
		$this->load->view('Template/Footer');
	}
	public function roombook()
	{
		$this->load->view('Template/Header');
		$this->load->view('Tour/roomconfirmed');
		$this->load->view('Template/Footer');
	}
	public function bookroom($rid)
	{
		if($this->session->userdata('username')=="")
		{
			redirect('UserController/signinpage');	
		}
		else
		{
			$file['cname']=$this->input->post('name');
			$file['mobile']=$this->input->post('mobile');
			
			$cname=$this->input->post('name');
			$mobile=$this->input->post('mobile');
			$email=$this->input->post('email');
			$chkin=$this->input->post('chkin');
			$chkout=$this->input->post('chkout');
			$stays=$this->input->post('Days');
			$totalprice=$this->input->post('price');
			$book=array(
							"rid"=>$rid,
							"customername"=>$cname,
							"mobilenumber"=>$mobile,
							"bemail"=>$email,
							"chekin"=>$chkin,
							"chekout"=>$chkout,
							"staingdays"=>$stays,
							"totalprice"=>$totalprice
						);	
		$this->db->insert('roombooking',$book);
		$this->load->view('booked/smsroom',$file);					
	
		}
	}
}
?>