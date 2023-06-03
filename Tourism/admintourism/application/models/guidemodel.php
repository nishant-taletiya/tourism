<?php
	class guidemodel extends CI_model
	{	
		public function showguide()
		{
			$this->db->from('attraction');
			$this->db->join('guide','attraction.AID=guide.AID');
			
		return	$this->db->get('')->result();
		}
		public function insert()
		{
		$config['upload_path']='./guideimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='5000';
		$config['max_width']='5024';
		$config['max_height']='2768';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('gimg'))
		{
			$error=$this->upload->display_errors();
			echo $error;
			die();	
		}
			$data=array(
			'upload_data' => $this->upload->data()
			);
		
			$arr=array(
			"AID"=>$this->input->post('ai'),
			"Gname"=>$this->input->post('gn'),
			"Gemail"=>$this->input->post('ge'),
			"Gphone"=>$this->input->post('gp'),
			"Gimage"=>$data['upload_data']['file_name']
			
			);
			$this->db->insert('guide',$arr);
		}
		public function delete($id)
		{
			$this->db->where('GID',$id);
			$this->db->delete('guide');
		}
		public function deleteall()
		{
			$data=$this->input->post('del');
			foreach ($data as $row)
			{
				$this->db->where('GID',$row);
				$this->db->delete('guide');
			}
		}
		public function selectattractionid()
		{
			return	$this->db->get('attraction')->result();
		}	
		public function edit($id)
		{
			$this->db->where('GID',$id);
			$data=$this->db->get('guide')->row();
			return $data;	
		}
		public function update($id)
		{
			$img=$_FILES['gimg']['name'];
			if($img=="")
			{
				$this->db->where('GID',$id);
				$row=$this->db->get('guide')->row();	
				$image=$row->Gimage;	
				$arr=array(
				"AID"=>$this->input->post('ai'),
				"Gname"=>$this->input->post('gn'),
				"Gemail"=>$this->input->post('ge'),
				"Gphone"=>$this->input->post('gp'),
				"Gimage"=>$image
				);
				$this->db->where('GID',$id);
				$this->db->update('guide',$arr);
			}
			else
			{
				$config['upload_path']='./guideimage/';
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='5000';
				$config['max_width']='5024';
				$config['max_height']='2768';
				$config['encrypt_name']=true;
				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload('gimg'))
				{
					$error=$this->upload->display_errors();
					echo $error;
					die();	
				}
					$data=array(
					'upload_data' => $this->upload->data()
					);
				
					$arr=array(
					"AID"=>$this->input->post('ai'),
					"Gname"=>$this->input->post('gn'),
					"Gemail"=>$this->input->post('ge'),
					"Gphone"=>$this->input->post('gp'),
					"Gimage"=>$data['upload_data']['file_name']			
					);
					$this->db->where('GID',$id);
					$this->db->update('guide',$arr);
			}
		}
}
?>