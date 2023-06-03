<?php
	class placemodel extends CI_model
	{	
		public function showplace()
		{
		return	$this->db->get('place')->result();
		}
		
		public function insert()
		{
			$config['upload_path']='./placeimage/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='5000';
			$config['max_width']='5024';
			$config['max_height']='2768';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload('img'))
			{
				$error=$this->upload->display_errors();
				echo $error;
				die();	
			}
			$data=array(
			'upload_data' => $this->upload->data()
			);
			$arr=array(
			"Pname"=>$this->input->post('pc'),
			"Ptitle"=>$this->input->post('title'),
			"Pdescription"=>$this->input->post('des'),
			"Pimage"=>$data['upload_data']['file_name']			
			);
			$this->db->insert('place',$arr);
			}
		public function delete($id)
		{
			$this->db->where('PID',$id);
			$this->db->delete('place');
		}
		public function edit($id)
		{
			$this->db->where('PID',$id);
			$data=$this->db->get('place')->row();
			return $data;	
		}
		public function update($id)
		{
		$img=$_FILES['img']['name'];
		if($img=="")
		{
			$this->db->where('PID',$id);
			$row=$this->db->get('place')->row();	
			$image=$row->Pimage;
			$arr=array
					(
						"Pname"=>$this->input->post('pc'),
						"Ptitle"=>$this->input->post('title'),
						"Pdescription"=>$this->input->post('des'),
						"Pimage"=>$image			
					);
			$this->db->where('PID',$id);
			$this->db->update('place',$arr);
			
		}
		else
		{
			$config['upload_path']='./placeimage/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='5000';
			$config['max_width']='5024';
			$config['max_height']='2768';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload('img'))
			{
				$error=$this->upload->display_errors();
				echo $error;
				die();	
			}
			$data=array(
			'upload_data' => $this->upload->data()
			);
			$arr=array(
			"Pname"=>$this->input->post('pc'),
			"Ptitle"=>$this->input->post('title'),
			"Pdescription"=>$this->input->post('des'),
			"Pimage"=>$data['upload_data']['file_name']			
			);
			$this->db->where('PID',$id);
			$this->db->update('place',$arr);
			}
		}
		public function status($id)
		{
			$this->db->where('PID',$id);
			$data=$this->db->get('place')->row();
			
			if($data->Pstatus=="Active")
			{
				$update=array
							("Pstatus"=>"Deactive");
			}
			else
			{
				$update=array
							("Pstatus"=>"Active");
				
			}
			$this->db->where('PID',$id);
			$this->db->update('place',$update);
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('PID',$row);
				$this->db->delete('place');
			}
		}
	}
?>