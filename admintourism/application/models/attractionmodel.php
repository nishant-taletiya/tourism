<?php
	class attractionmodel extends CI_model
	{	
		public function showattraction()
		{
		
			$this->db->from('attraction');
			$this->db->join('place','place.PID=attraction.PID');
			$this->db->join('subplace','subplace.SID=attraction.SID');
		
			return	$this->db->get('')->result();
		}
		public function addattraction()
		{
			$config['upload_path']='./attractionimage/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='5000';
			$config['max_width']='5024';
			$config['max_height']='2768';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload('image'))
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
				"PID"=>$this->input->post('pid'),
				"SID"=>$this->input->post('sid'),
				"Atitle"=>$this->input->post('nick'),
				"Adescription"=>$this->input->post('email'),
				"Aimage"=>$data['upload_data']['file_name']

			);
			$this->db->insert("attraction",$arr);
		}
		public function delete($id)
		{
			$this->db->where('AID',$id);
			$this->db->delete('attraction');
		}
		public function edit($id)
		{
			$this->db->where('AID',$id);
			$data=$this->db->get('attraction')->row();
			return $data;	
		}
		public function update($id)
		{
			
			$img=$_FILES['image']['name'];
			if($img=="")
			{
			$this->db->where('AID',$id);
			$row=$this->db->get('attraction')->row();	
			$image=$row->Aimage;
			$arr=array
			(
				"PID"=>$this->input->post('pid'),
				"SID"=>$this->input->post('sid'),
				"Atitle"=>$this->input->post('nick'),
				"Adescription"=>$this->input->post('email'),
				"Aimage"=>$image
			);
			$this->db->where('AID',$id);
			$this->db->update('attraction',$arr);
			}
			else		
			{
				$config['upload_path']='./attractionimage/';
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='5000';
				$config['max_width']='5024';
				$config['max_height']='2768';
				$config['encrypt_name']=true;
				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload('image'))
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
					"PID"=>$this->input->post('pid'),
					"SID"=>$this->input->post('sid'),
					"Atitle"=>$this->input->post('nick'),
					"Adescription"=>$this->input->post('email'),
					"Aimage"=>$data['upload_data']['file_name']
				);
				$this->db->where('AID',$id);
				$this->db->update('attraction',$arr);
			}
		}
		public function status($id)
		{
			$this->db->where('AID',$id);
			$data=$this->db->get('attraction')->row();
			
			if($data->Astatus=="Active")
			{
				$update=array
							("Astatus"=>"Deactive");
			}
			else
			{
				$update=array
							("Astatus"=>"Active");
				
			}
			$this->db->where('AID',$id);
			$this->db->update('attraction',$update);
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('AID',$row);
				$this->db->delete('attraction');
			}
		}
		public function selectplaceid()
		{
			return	$this->db->get('place')->result();
		}
		public function selectsubplaceid()
		{
			return	$this->db->get('subplace')->result();
		}

		public function getsubplace($id)
		{
			$this->db->where('PID',$id);
			$row=$this->db->get('subplace')->result();
			foreach($row as $rr)
			{?><option value="<?php echo $rr->SID ?>"><?php echo $rr->SPtitle ?> </option><?php }
		}


	}
?>