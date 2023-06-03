<?php
Class dashboardmodel extends CI_model
{
	public function countplace()
    {
		$cplace=$this->db->get('place')->result();
		return count ($cplace);
    }
	public function countsubplace()
    {
		$splace=$this->db->get('subplace')->result();
		return count ($splace);
    }
	public function countattraction()
    {
		$attraction=$this->db->get('attraction')->result();
		return count ($attraction);
    }
	public function countphoto_gallery()
    {
		$photo=$this->db->get('photo_gallery')->result();
		return count ($photo);
    }
	public function countvideo_gallery()
    {
		$video=$this->db->get('video_gallery')->result();
		return count ($video);
    }
	public function countpackage()
    {
		$packages=$this->db->get('package')->result();
		return count ($packages);
    }
	public function countbusticket()
    {
		$bus=$this->db->get('busticketregister')->result();
		return count ($bus);
    }
	public function countseat()
    {
		$seat=$this->db->get('seat')->result();
		return count ($seat);
    }
	public function countguide()
    {
		$guide=$this->db->get('guide')->result();
		return count ($guide);
    }
	public function counthotel()
    {
		$hotel=$this->db->get('hotel')->result();
		return count ($hotel);
    }
	public function countroombooking()
    {
		$roomb=$this->db->get('roombooking')->result();
		return count ($roomb);
    }
	public function countrooms()
    {
		$rooms=$this->db->get('rooms')->result();
		return count ($rooms);
    }
	public function countroomimages()
    {
		$roomi=$this->db->get('roomimages')->result();
		return count ($roomi);
    }
	public function countrestaurant()
    {
		$res=$this->db->get('restaurant')->result();
		return count ($res);
    }
	public function countfeedback()
    {
		$feed=$this->db->get('feedback')->result();
		return count ($feed);
    }
	public function countnews()
    {
		$news=$this->db->get('news')->result();
		return count ($news);
    }
	public function countregister()
    {
		$reg=$this->db->get('register')->result();
		return count ($reg);
    }
	public function countwishlist()
    {
		$wish=$this->db->get('wishlist')->result();
		return count ($wish);
    }
	
}
?>