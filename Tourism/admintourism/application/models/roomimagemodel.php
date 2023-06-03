<?php
	class roomimagemodel extends CI_model
	{	
		public function showroomimage()
		{
			$this->db->from('roomimages');
			$this->db->join('rooms','rooms.rid=roomimages.rid');
			$this->db->join('hotel','hotel.hotelid=roomimages.hotelid');
			return	$this->db->get()->result();
		}
		public function insert()
		{
			$config['upload_path']='./imgupload/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='5000';
			$config['max_width']='5024';
			$config['max_height']='2768';
			$config['encrypt_name']=true;
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload('title'))
			{
				$error=$this->upload->display_errors();
				echo $error;
				die();	
			}
			$data=array(
			'upload_data' => $this->upload->data()
			);
			$arr=array(
						
						"rimage"=>$data['upload_data']['file_name']
					   );
			$this->db->insert('roomimages',$arr);
		}
		public function delete($id)
		{
			$this->db->where('rid',$id);
			$this->db->delete('roomimages');
		}
		public function edit($id)
		{
			$this->db->where('rid',$id);
			$data=$this->db->get('roomimages')->row();
			return $data;	
		}
		public function update($id)
		{
			
			$img=$_FILES['title']['name'];
			if($img=="")
			{
				$this->db->where('rmid',$id);
				$row=$this->db->get('roomimages')->row();	
				$image=$row->rimage;
				$arr=array(
				"rid"=>$this->input->post('rid'),
				"Hotelid"=>$this->input->post('Hotelid'),
				"rimage"=>$image
				
				);
				$this->db->where('rmid',$id);
				$this->db->update('roomimages',$arr);
			}
			else
			{
				$config['upload_path']='./imgupload/';
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='5000';
				$config['max_width']='5024';
				$config['max_height']='2768';
				$config['encrypt_name']=true;
				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload('title'))
				{
					$error=$this->upload->display_errors();
					echo $error;
					die();	
				}
				$data=array(
				'upload_data' => $this->upload->data()
				);
				$arr=array(
				
				"rid"=>$this->input->post('rid'),
				"Hotelid"=>$this->input->post('Hotelid'),
				"rimage"=>$data['upload_data']['file_name']
				
				);
				$this->db->where('rid',$id);
				$this->db->update('roomimages',$arr);
			}
		}	
		public function deleteall()
		{
			$delall=$this->input->post('del');
			
			foreach($delall as $row)
			{
				$this->db->where('rid',$row);
				$this->db->delete('roomimages');
				
			}
		}
		public function selectroomid()
		{
			return	$this->db->get('rooms')->result();
		}
		public function selecthotelid()
		{
			return	$this->db->get('hotel')->result();
		}
	}
?>