<?php
	class roommodel extends CI_model
	{	
		public function showroom()
		{
			$this->db->from('hotel');
			$this->db->join('rooms','hotel.hotelid=rooms.hotelid');
			
		return	$this->db->get('')->result();
		}	
		public function insert()
		{
			$arr=array(
			"Hotelid"=>$this->input->post('hi'),
			"rname"=>$this->input->post('rn'),
			"rcategory"=>$this->input->post('rc'),
			"rprice "=>$this->input->post('rp'),
			"rtitle "=>$this->input->post('rt'),
			"rdetail "=>$this->input->post('rd')
			);
			$this->db->insert('rooms',$arr);
			//images
			
			$this->db->order_by('rid','desc');
			$rid=$this->db->get('rooms')->row();
		//	echo $rid->rid;
			$cnt=count($_FILES['rimg']['name']);
			for($i=0;$i<$cnt;$i++)
			{

				
				$config['upload_path'] = './imgupload/';  //configuration file
				$config['allowed_types'] = 'gif|JPG|jpg|png|jpeg';
				$config['max_size'] = '500000'; 
			 	$config['max_width']  = '40024';
				$config['max_height']  = '50768';
				$config['encrypt_name'] =true;
				$this->load->library('upload', $config);//load library
				$_FILES['myimg']['name']=$_FILES['rimg']['name'][$i];//image name with for loop 
				$_FILES['myimg']['tmp_name']=$_FILES['rimg']['tmp_name'][$i];
				$_FILES['myimg']['error']=$_FILES['rimg']['error'][$i];
				$_FILES['myimg']['size']=$_FILES['rimg']['size'][$i];
				$_FILES['myimg']['type']= $_FILES['rimg']['type'][$i];
			
				if ( ! $this->upload->do_upload('myimg'))
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
					die();	
				}
				else
				{
					$data = array(
						'upload_data' => $this->upload->data()
					);
			
				$insert=array
							(
								"rid"=>$rid->rid,
								"Hotelid"=>$this->input->post('hi'),
								"rimage"=>$data['upload_data']['file_name']	
							);
				print_r($insert);			
				$this->db->insert('roomimages',$insert);			
			
				}
			}
		}
		public function update($id)
		{
			$arr=array(
			"hotelid"=>$this->input->post('hi'),
			"rname"=>$this->input->post('rn'),
			"rcategory"=>$this->input->post('rc'),
			"rprice "=>$this->input->post('rp'),
			"rtitle "=>$this->input->post('rt'),
			"rdetail "=>$this->input->post('rd')
			);
			$this->db->where('rid',$id);
			$this->db->update('rooms',$arr);
		}
		
		public function selecthotelid()
		{
			return	$this->db->get('hotel')->result();
		}			

		public function delete($id)
		{
			$this->db->where('rid',$id);
			$this->db->delete('rooms');
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
	
			foreach ($data as $row)
			{
				$this->db->where('rid',$row);
				$this->db->delete('rooms');
			}
		}
		public function edit($id)
		{
			$this->db->where('rid',$id);
			$data=$this->db->get('rooms')->row();
			return $data;	
		}
		public function status($id)
		{
			$this->db->where('rid',$id);
			$data=$this->db->get('rooms')->row();
			
			if($data->rstatus=="Active")
			{
				$update=array
							("rstatus"=>"Deactive");
			}
			else
			{
				$update=array
							("rstatus"=>"Active");
				
			}
			$this->db->where('rid',$id);
			$this->db->update('rooms',$update);
		}


	}
?>