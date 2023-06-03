<?php
	class hotelmodel extends CI_model
	{	
		public function showhotel()
		{
			$this->db->from('hotel');
			$this->db->join('attraction','attraction.AID=hotel.AID');
			$this->db->join('subplace','subplace.SID=hotel.SID');
			
		return	$this->db->get()->result();
		}	

		public function insert()
		{
			
		$config['upload_path']='./hotelimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='10000';
		$config['max_width']='10000';
		$config['max_height']='10000';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('himg'))
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
			"SID"=>$this->input->post('si'),
			"Hotelname"=>$this->input->post('hn'),
			"Hotelimg"=>$data['upload_data']['file_name']
			);
			$this->db->insert('hotel',$arr);
		}
		public function delete($id)
		{
			$this->db->where('hotelid',$id);
			$this->db->delete('hotel');
		}
		public function deleteall()
		{
			$data=$this->input->post('chk');
			foreach ($data as $row)
			{
				$this->db->where('hotelid',$row);
				$this->db->delete('hotel');
			}
		}
		public function selectattractionid()
		{
			return	$this->db->get('attraction')->result();
		}			
		public function selectsubplaceid()
		{
			return	$this->db->get('subplace')->result();
		}			
		public function edit($id)
		{
			$this->db->where('hotelid',$id);
			$data=$this->db->get('hotel')->row();
			return $data;	
		}
		public function update($id)
		{
			$img=$_FILES['himg']['name'];
			if($img=="")
			{
			$this->db->where('Hotelid',$id);
			$row=$this->db->get('hotel')->row();	
			$image=$row->Hotelimg;
			$arr=array
				(
				"AID"=>$this->input->post('ai'),
				"SID"=>$this->input->post('si'),
				"Hotelname"=>$this->input->post('hn'),
				"Hotelimg"=>$image
				);
				
				$this->db->where('hotelid',$id);
				$this->db->update('hotel',$arr);
			}
			else
			{	
			$config['upload_path']='./hotelimage/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='10000';
			$config['max_width']='10000';
			$config['max_height']='10000';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload('himg'))
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
				"AID"=>$this->input->post('ai'),
				"SID"=>$this->input->post('si'),
				"Hotelname"=>$this->input->post('hn'),
				"Hotelimg"=>$data['upload_data']['file_name']		
				);
				
				$this->db->where('hotelid',$id);
				$this->db->update('hotel',$arr);
			}
		}
		public function status($id)
		{
			$this->db->where('hotelid',$id);
			$data=$this->db->get('hotel')->row();
			
			if($data->Hotelstatus=="Active")
			{
				$update=array
							("Hotelstatus"=>"Deactive");
			}
			else
			{
				$update=array
							("Hotelstatus"=>"Active");
				
			}
			$this->db->where('hotelid',$id);
			$this->db->update('hotel',$update);
		}
		public function getsubplace($id)
		{
			$this->db->where('SID',$id);
			$row=$this->db->get('attraction')->result();
			foreach($row as $rr)
			{?><option value="<?php echo $rr->AID ?>"><?php echo $rr->Atitle ?> </option><?php }
		}
	
	}
?>