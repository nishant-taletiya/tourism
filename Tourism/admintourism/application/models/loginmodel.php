<?php
Class loginmodel extends CI_model
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
    	$email=$this->input->post('email');
        $password=$this->input->post('password');
        $this->db->where('adminemail',$email);
        $this->db->where('password',$password);
        $result=$this->db->get('admin')->row();
        return $result->username;
    }
}
?>