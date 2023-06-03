<?php
class tourmodel extends CI_Model
{
	public function subguide()
	{
		$this->db->from('attraction');
		$this->db->join('guide','attraction.AID=guide.AID');
	return	$this->db->get()->result();
	}

	public function gettourpackages()
	{
		$this->db->from('package');
		$this->db->join('attraction','package.AID=attraction.AID');
		$this->db->join('Hotel','package.Hotelid=Hotel.Hotelid');
		$this->db->join('guide','package.GID=guide.GID');
		return $this->db->get()->result();	
	}

	public function gettourpackagesdetail($id)
	{
		$this->db->from('package');
		$this->db->join('attraction','package.AID=attraction.AID');
		$this->db->join('Hotel','package.Hotelid=Hotel.Hotelid');
		$this->db->join('guide','package.GID=guide.GID');
		$this->db->where('packageid',$id);
		return $this->db->get()->row();	
		
	}

	public function insertseatdetail($pkid)
	{
		$doj = $this->input->post('journey_date');
		$name = $this->input->post('user_name');
		$address = $this->input->post('address');
		$mobile =$this->input->post('mobile');
		$userid =$this->input->post('userid');
		$email = $this->input->post('email');
		$password =$this->input->post('password');
		$message =$this->input->post('message');
		$rand=rand(1000,10000);
		$this->db->where('customerid',$userid);
		$cntuser=$this->db->get('busticketregister')->result();

		if(count($cntuser) > 0)
		{
			echo "User Already Registered";	
		    //header('Location: book.php?e='.urlencode($error)); exit;
		}
		else
		{
			$insert=array
						(
						"customerid"=>$userid,
						"packageid"=>$pkid,
						"customername"=>$name,
						"customeremail"=>$email,
						"customerpassword"=>$password,
						"customeraddress"=>$address,
						"customercontact"=>$mobile, 
						"customermessage"=>$message,	
						"orderno"=>$rand
						);
						

			$this->db->insert('busticketregister',$insert);
						
			$seatNumber = NULL;
			for($i=1; $i<25; $i++)
			{
			$chparam = "ch" . strval($i);
			$calcPNR = $doj . "-" . strval($i);
				 if(!empty($_POST[$chparam]))
				 {
					 $insertseat=array
					 				(
									"customerid"=>$userid,
									"number"=>intval($i),
									"PNR"=>$calcPNR,
									"date"=>$doj,
									"orderno"=>$rand
									);
				//	echo "<pre>";
				//	print_r($insertseat);	
					$results=$this->db->insert('seat',$insertseat);
			//		$results = mysql_real_escape_string($query);
					if (!$results)
					{
						die ("Could not update seat: <br />". mysqli_error());
					}
					$seatNumber = $seatNumber .", ". "$i";
				}			
			}
		}
	
		
		
	}




}
?>