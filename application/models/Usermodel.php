<?php
class Usermodel extends CI_Model
{
	public function insertuser()
	{
		$fullname=$this->input->post('fullname');
		$email=$this->input->post('email');
		$mobile=$this->input->post('mobile');
		$password=$this->input->post('password');
		$insert=array(
						"Name"=>$fullname,
						"Email"=>$email,
						"Password"=>$password,
						"PhoneNo"=>$mobile
					 );
					 
		$this->db->insert('register',$insert);			 	
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$email=$this->db->where('Email',$email);
		$password=$this->db->where('Password',$password);
		$this->db->where('status','Active');
		$data=$this->db->get('register')->row();
		return $data;
	}	
}
?>