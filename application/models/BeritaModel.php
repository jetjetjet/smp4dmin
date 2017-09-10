<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BeritaModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_berita");
        return $query->result();
   }
  
  public function insert_data() {
		if (!empty($_FILES['gambar']['name'])) {
			$data = array(    			
	    			'judul' 				=> trim($this->input->post('judul')),
	    			'body' 					=>  trim($this->input->post('berita')),
	    			'tipe' 					=> trim($this->input->post('tipe')),
					'status' 				=>  trim($this->input->post('status')),
	    			'gambar' 				=> $this->upload->file_name,
	    			'dibuat' 				=> date('Y-m-d H:i:s'),
	    			'ubah' 					=> date('Y-m-d H:i:s'),
					'nama'					=> $this->session->userdata('nama')
				);
		} else {
			$data = array(    			
	    			'judul' 				=> trim($this->input->post('judul')),
	    			'body' 					=>  trim($this->input->post('berita')),
	    			'tipe' 					=> trim($this->input->post('tipe')),
					'status' 				=>  trim($this->input->post('status')),
	    			'dibuat' 				=> date('Y-m-d H:i:s'),
	    			'ubah' 					=> date('Y-m-d H:i:s'),
					'nama'					=> $this->session->userdata('nama')
				);
		}
		
		$this->db->insert('tb_berita', $data);
	}	
	
	function BeritaId($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tb_berita');
	}
	
	function UpdateData() {
		$id     = $this->input->post('id');
		
		$data = array(
				'judul'				=> trim($this->input->post('judul')),
				'body'				=> $this->input->post('berita'),
				'tipe'				=> trim($this->input->post('tipe')),
				'status'			=> trim($this->input->post('status')),
				'ubah' 				=> date('Y-m-d H:i:s')
		);

		$this->db->where('id', $id);
		$this->db->update('tb_berita', $data);
	}

	function deleteBerita($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	

}
