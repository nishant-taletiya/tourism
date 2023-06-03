<?php
	class photomodel extends CI_model
	{	
		public function showphoto()
		{
		return	$this->db->get('photo_gallery')->result();
		}
		public function addphoto()
		{
			$config['upload_path']='./photoimage/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='5000';
			$config['max_width']='5024';
			$config['max_height']='2768';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload('photo'))
			{
				$error=$this->upload->display_errors();
				echo $error;
				die();	
			}
			$data=array(
			'upload_data' => $this->upload->data()
			);
			$arr=array
			(
				"photo"=>$data['upload_data']['file_name'],
				"title"=>$this->input->post('title')
			);
			$this->db->insert("photo_gallery",$arr);
		}
		public function delete($id)
		{
			$this->db->where('PPID',$id);
			$this->db->delete('photo_gallery');
		}
		public function edit($id)
		{
			$this->db->where('PPID',$id);
			$data=$this->db->get('photo_gallery')->row();
			return $data;
		}
		public function update($id)
		{
			$img=$_FILES['photo']['name'];
			if($img=="")
			{
				$this->db->where('PPID',$id);
				$row=$this->db->get('photo_gallery')->row();	
				$image=$row->photo;
				$arr=array
				(
					"photo"=>$image,
					"title"=>$this->input->post('title')
				);
				$this->db->where('PPID',$id);
				$this->db->update('photo_gallery',$arr);
			}
			else
			{
				$config['upload_path']='./photoimage/';
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='5000';
				$config['max_width']='5024';
				$config['max_height']='2768';
				$config['encrypt_name']=true;
				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload('photo'))
				{
					$error=$this->upload->display_errors();
					echo $error;
					die();	
				}
				$data=array(
				'upload_data' => $this->upload->data()
				);
				$arr=array
				(
					"photo"=>$data['upload_data']['file_name'],
					"title"=>$this->input->post('title')
				);
				$this->db->where('PPID',$id);
				$this->db->update('photo_gallery',$arr);
		}
}
		public function status($id)
		{
			$this->db->where('PPID',$id);
			$data=$this->db->get('photo_gallery')->row();
			
			if($data->PPstatus=="Active")
			{
				$update=array
							("PPstatus"=>"Deactive");
			}
			else
			{
				$update=array
							("PPstatus"=>"Active");
				
			}
			$this->db->where('PPID',$id);
			$this->db->update('photo_gallery',$update);
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('PPID',$row);
				$this->db->delete('photo_gallery');
			}
		}
	}
?>