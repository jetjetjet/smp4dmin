<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengumumanModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_pengumuman");
        return $query->result();
   }
  
  public function insert_data()
  {
	  $data = array( 
					 'judul'				=> trim($this->input->post('judul')),
					 'isi'					=> trim($this->input->post('pengumuman')),
					 'dari'					=> trim($this->input->post('dari')),
					 'sampai'				=> trim($this->input->post('sampai')),
					 'status'				=> trim($this->input->post('status')),
					 'nama'					=> $this->session->userdata('nama')
					 
					 );
		$this->db->insert('tb_pengumuman', $data);
  }
   
   public function Identitas(){
     $query = $this->db->get("tb_sambutan");
        return $query->result();
   }
   
   function PengumumanId($id)
	{
		$this->db->where('id_pengumuman',$id);
		return $this->db->get('tb_pengumuman');
	}
	
	function UpdateData() {
		$id     = $this->input->post('id');
		
		$data = array(
				'judul'				=> trim($this->input->post('judul')),
				'isi'				=> trim($this->input->post('pengumuman')),
				'dari'				=> trim($this->input->post('dari')),
				'sampai'			=> trim($this->input->post('sampai')),
				 'status'			=> trim($this->input->post('status')),
				 'nama'				=> $this->session->userdata('nama')
		);

		$this->db->where('id_pengumuman', $id);
		$this->db->update('tb_pengumuman', $data);
	}
   
   function deletePengumuman($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}


}
