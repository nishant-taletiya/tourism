<?php
	class subplacemodel extends CI_model
	{	
		public function showsubplace()
		{
			$this->db->from('subplace');
			$this->db->join('place','place.PID=subplace.PID');
			return	$this->db->get()->result();
		}	
		public function addsubplace()
		{
			$config['upload_path']='./subplaceimage/';
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
				"SPtitle"=>$this->input->post('nick'),
				"SPdescription"=>$this->input->post('email'),
				"SPimage"=>$data['upload_data']['file_name']
			);
			$this->db->insert("subplace",$arr);
		}
		public function delete($id)
		{
			$this->db->where('SID',$id);
			$this->db->delete('subplace');
		}
		public function edit($id)
		{
			$this->db->where('SID',$id);
			$data=$this->db->get('subplace')->row();
			return $data;	
		}
		public function update($id)
		{
			$img=$_FILES['image']['name'];
			if($img=="")
			{
			$this->db->where('SID',$id);
			$row=$this->db->get('subplace')->row();	
			$image=$row->SPimage;
			$arr=array
			(
				"PID"=>$this->input->post('pid'),
				"SPtitle"=>$this->input->post('nick'),
				"SPdescription"=>$this->input->post('email'),
				"SPimage"=>$image
			);
			$this->db->where('SID',$id);
			$this->db->update('subplace',$arr);
			}
			else
			{
			$config['upload_path']='./subplaceimage/';
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
				"SPtitle"=>$this->input->post('nick'),
				"SPdescription"=>$this->input->post('email'),
				"SPimage"=>$data['upload_data']['file_name']
			);
			$this->db->where('SID',$id);
			$this->db->update('subplace',$arr);
			}
		}
		public function status($id)
		{
			$this->db->where('SID',$id);
			$data=$this->db->get('subplace')->row();
			
			if($data->SPstatus=="Active")
			{
				$update=array
							("SPstatus"=>"Deactive");
			}
			else
			{
				$update=array
							("SPstatus"=>"Active");
				
			}
			$this->db->where('SID',$id);
			$this->db->update('subplace',$update);
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('SID',$row);
				$this->db->delete('subplace');
			}
		}
		public function selectplaceid()
		{
			return	$this->db->get('place')->result();
		}
	}
?>