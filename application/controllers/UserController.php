<?php
class UserController extends CI_Controller
{
	public function signuppage()
	{
		$this->load->view('User/signup');
	}	

	public function signinpage()
	{
		$file['error']="";
		$this->load->view('User/signin',$file);
	}

	public function signupinsert()
	{
		$this->load->model('Usermodel');
		$this->Usermodel->insertuser();
		redirect('UserController/signinpage');
	}

	public function login()
	{
		$this->load->model('Usermodel');
		$cnt=$this->Usermodel->login();
		$data=0;
		
		if(count($cnt) > 0)
		{
			$this->session->set_userdata('username',$cnt->Name);
			$this->session->set_userdata('useremail',$cnt->Email);
			
			redirect('HomeController');	
		}
		else
		{
			$data=$data+1;
			$file['error']="Invalid Username Or Password";	
			$this->load->view('User/signin',$file);
		}
	}	
	
	public function getotp($mobile)
	{
		$file['mobile']=$mobile;
		$this->db->where('PhoneNo',$mobile);
		$data=$this->db->get('register')->row();
		if(count($data)>0)
		{
			$file['otp']=rand(1000,10000);
			$update=array(
							"OTP"=>$file['otp']	
						 );
			$this->session->set_userdata('mobile',$mobile);
			$this->db->where('PhoneNo',$mobile);
			$this->db->update('register',$update);			 			
			$this->load->view('OTP/otp',$file);
			echo "0";
		}
		else
		{
			echo "1";
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('HomeController');	
	}

	public function chkotp()
	{
		$file['error']="";
		$this->load->view('OTP/chkotp',$file);		
	}

	public function chkotppage()
	{
		$otp=$this->input->post('otp');
		$mobile=$this->session->userdata('mobile');
		
		$this->db->where('OTP',$otp);
		$this->db->where('PhoneNo',$mobile);
		$row=$this->db->get('register')->row();
		if(count($row)>0)
		{
			$this->load->view('OTP/changepassword');						
		}
		else
		{
			$file['error']="Invalid OTP Code";
			$this->load->view('OTP/chkotp',$file);		
		}
	
	}

	public function chgpwd()
	{
		$mobile=$this->session->userdata('mobile');
		$pwd=$this->input->post('npwd');
		
		$update=array
					(
					"Password"=>$pwd
					);
		$this->db->where('PhoneNo',$mobile);
		$this->db->update('register',$update);
		redirect('HomeController');			
	}
}
?>
