<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengaturanModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_gallery");
        return $query->result();
   }
  
  public function Sambutan(){
     $query = $this->db->get("tb_sambutan");
        return $query->result();
   }
   
   public function insert_data() {
		if (!empty($_FILES['filefoto']['name'])) {
			$data = array(    			
	    			'sambutan' 					=> trim($this->input->post('sambutan')),
	    			'foto_kepsek' 				=> $this->upload->file_name
				);
		} else {
			$data = array(    			
	    			'sambutan' 				=> trim($this->input->post('sambutan'))
				);
		}
		$this->db->where('id', 1);
		$this->db->update('tb_sambutan', $data);
	}	
   
    function SambutanId($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tb_sambutan');
	}
   
   public function Identitas(){
     $query = $this->db->get("tb_sambutan");
        return $query->result();
   }


}
