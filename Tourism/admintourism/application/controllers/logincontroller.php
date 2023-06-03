<?php
class logincontroller extends CI_Controller 
	{

	public function index()
	{
		if($this->session->userdata('username')!="")
		{
			redirect('dashboardcontroller/dashboard');	
		}
		else
		{
			$file['data']="Login to your Admin account";
			$this->load->view('login/login',$file);
		}
	}
	public function login()
	{
			$email=$this->input->post('email');
        
		if($this->session->userdata('username')!="")
		{
			redirect('dashboardcontroller/dashboard');	
		}
			$this->load->model('loginmodel');
			$record=$this->loginmodel->login();					
			if($record>0)
			{
				$uname=$this->loginmodel->showdata();
				$this->session->set_userdata('useremail',$email);
				$this->session->set_userdata('username',$uname);
				redirect('dashboardcontroller/dashboard');
			}
			else
			{
					$file['data']="wrong email & password";
					$this->load->view('login/login',$file);
			}
		
	}
	public function logout()
	{
			$this->session->unset_userdata('username');
			redirect('logincontroller');
	}
	public function changepassword()
	{
		if($this->session->userdata('username')=="")
		{
			redirect('logincontroller');	
		}
		else
		{
			$file['c']="";
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('profile/changepassword',$file);
		}
	}

	public function chgpwd()
	{
		$file['c']="";
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('profile/changepassword',$file);
		
	}
	
	public function checkpassword()
	{
		$this->load->model('profilemodel');
		$op=$this->profilemodel->changepassword();
		$oldpassword=$this->input->post('oldpassword');
		if($op->password==$oldpassword)
		{
			
			$this->profilemodel->updatepassword();
			$this->logout1();
		}
		else
		{
			$file['c']="<font color='red'>enter a correct old password</font>";
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('profile/changepassword',$file);
		}
	}
	public function lockscreen()
	{
		$file['c']="Enter your password";
		$this->load->view('profile/lockscreen',$file);
	}
	public function checklsp()
	{
		$this->load->model('profilemodel');
		$op=$this->profilemodel->changepassword();
		$pass=$this->input->post('pass');
		if($op->password==$pass)
		{
			redirect('dashboardcontroller/dashboard');
		}
		else
		{
			$file['c']="<font color='red'>Enter a correct password</font>";
			$this->load->view('profile/lockscreen',$file);
		}
	}
	public function logout1()
	{
		$this->session->unset_userdata('username');
		redirect('logincontroller');			
	}
	public function emailchk()
	{
		
		$email=$this->input->post('email');	
		$this->db->where('adminemail',$email);
		$data=$this->db->get('admin')->result();
		
		if(count($data)>0)
		{
			$this->session->set_userdata('forgetpass1',$email);
			$file['errr']="";
			$this->load->view('profile/newpassword',$file);
		}
		else
		{
			$file['err']="<font color='red'>Invalid email address</font>";
			$this->load->view('profile/forgetpassword',$file);
		}
	}
	public function updatepwd()
	{
		$newpass=$this->input->post('newpass');
		$conpass=$this->input->post('conpass');
		$email=$this->session->userdata('forgetpass1');
		
		if($newpass==$conpass)
		{
			$update=array(
					"password"=>$conpass
			);
			$this->db->where('adminemail',$email);
			$this->db->update('admin',$update);
			redirect('logincontroller');
			
		}
		else
		{
			$file['errr']="<font color='red'>Please check the password || And try again</font>";
			$this->load->view('profile/newpassword',$file);
		}
	}
}