<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GalleryModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_gallery");
        return $query->result();
   }
  
  /* public function Ambil_berita($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('tb_berita');
		return $hasil;
	} */


}
