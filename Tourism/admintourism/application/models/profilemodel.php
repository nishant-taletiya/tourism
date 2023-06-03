<?php
Class profilemodel extends CI_model
{
	public function login()
    {
    	$email=$this->input->post('email');
        $password=$this->input->post('password');
        
        $this->db->where('adminemail',$email);
        $this->db->where('password',$password);
        
        $result=$this->db->get('admin')->result();
        return count($result);
    }
	public function showdata()
    {
		$uname=$this->session->userdata('username');
        $this->db->where('username',$uname);
        return $this->db->get('admin')->row();
	}
	public function changepassword()
	{
		$ops=$this->session->userdata('useremail');
		$this->db->where('adminemail',$ops);
	
		return $this->db->get('admin')->row();	
	}
	public function updatepassword()
	{
		$ops=$this->session->userdata('useremail');
		$up=array
		(
			"password"=>$this->input->post('newpassword')
		);
		$this->db->where('adminemail',$ops);
		$this->db->update('admin',$up);
	}
	public function update($id)
	{
		$ops=$this->session->userdata('useremail');
		$up=array
		(
			"username"=>$this->input->post('nick'),
			"adminemail"=>$this->input->post('email')
		);
		$this->db->where('adminemail',$ops);
		$this->db->update('admin',$up);
		$this->session->set_userdata('username',$this->input->post('nick'));
	}
	public function fps()
	{
		return $this->db->get('admin')->row();	
	}
}
?>