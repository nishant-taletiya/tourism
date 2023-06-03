<?php
	class packagesmodel extends CI_model
	{	
		public function showpackages()
		{
			$this->db->from('package');
			$this->db->join('attraction','attraction.AID=package.AID');
			$this->db->join('hotel','hotel.Hotelid=package.Hotelid');
			$this->db->join('guide','guide.GID=package.GID');
			return	$this->db->get()->result();
		}
		public function addpackages()
		{
			$config['upload_path']='./packageimage/';
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
				"AID"=>$this->input->post('aid'),
				"Hotelid"=>$this->input->post('hid'),
				"GID"=>$this->input->post('gid'),
				"Packagename"=>$this->input->post('pname'),
				"Price"=>$this->input->post('price'),
				"Description"=>$this->input->post('description'),
				"Pdate"=>$this->input->post('pdate'),
				"Timespend"=>$this->input->post('timespend'),
				"Image"=>$data['upload_data']['file_name']
			);
			$this->db->insert("package",$arr);
		}
		public function delete($id)
		{
			$this->db->where('packageid',$id);
			$this->db->delete('package');
		}
		public function edit($id)
		{
			$this->db->where('packageid',$id);
			$data=$this->db->get('package')->row();
			return $data;
		}
		public function update($id)
		{
			$img=$_FILES['image']['name'];
			if($img=="")
			{
			$this->db->where('packageid',$id);
			$row=$this->db->get('package')->row();	
			$image=$row->Image;
			$arr=array
			(
				"AID"=>$this->input->post('aid'),
				"Hotelid"=>$this->input->post('hid'),
				"GID"=>$this->input->post('gid'),
				"Packagename"=>$this->input->post('pname'),
				"Price"=>$this->input->post('price'),
				"Description"=>$this->input->post('description'),
				"Pdate"=>$this->input->post('pdate'),
				"Timespend"=>$this->input->post('timespend'),
				"Image"=>$image
			);
			$this->db->where('packageid',$id);
			$this->db->update('package',$arr);
			}
			else
			{
				$config['upload_path']='./packageimage/';
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
					"AID"=>$this->input->post('aid'),
					"Hotelid"=>$this->input->post('hid'),
					"GID"=>$this->input->post('gid'),
					"Packagename"=>$this->input->post('pname'),
					"Price"=>$this->input->post('price'),
					"Description"=>$this->input->post('description'),
					"Pdate"=>$this->input->post('pdate'),
					"Timespend"=>$this->input->post('timespend'),
					"Image"=>$data['upload_data']['file_name']
				);
				$this->db->where('packageid',$id);
				$this->db->update('package',$arr);
			}
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('packageid',$row);
				$this->db->delete('package');
			}
		}
		public function selectattractionid()
		{
			return	$this->db->get('attraction')->result();
		}
		public function selecthotelid()
		{
			return	$this->db->get('hotel')->result();
		}
		public function selectguideid()
		{
			return	$this->db->get('guide')->result();
		}
		public function gethotel($id)
		{
			$this->db->where('AID',$id);
			$row=$this->db->get('hotel')->result();
			foreach($row as $rr)
			{
				?><option value="<?php echo $rr->Hotelid ?>"><?php echo $rr->Hotelname ?> </option><?php 
			}
			echo "-";
			$this->db->where('AID',$id);
			$row2=$this->db->get('guide')->result();
			foreach($row2 as $rr2)
			{
				?><option value="<?php echo $rr2->GID ?>"><?php echo $rr2->Gname ?> </option><?php 
			}
		
		}			
		

			
	}
?>