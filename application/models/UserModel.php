<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_users");
        return $query->result();
   }
  
	public function Simpan() {
		$data = array(
				'nama'					=> trim($this->input->post('nama')),
				'email'					=> $this->input->post('email'),
				'alamat'				=> trim($this->input->post('alamat')),
				'password'				=> md5($this->input->post('password')),
		   		'last_login' 			=> date('Y-m-d H:i:s')
		);

		$this->db->insert('tb_users', $data);
	}	
	
	function userbyid($id)
	{
		$this->db->where('id_user',$id);
		return $this->db->get('tb_users');
	}
	
	function UpdateData() {
		$id     = $this->input->post('id');
		
		$data = array(
				'nama'				=> trim($this->input->post('nama')),
				'email'				=> $this->input->post('email'),
				'alamat'			=> trim($this->input->post('alamat'))
		);

		$this->db->where('id_user', $id);
		$this->db->update('tb_users', $data);
	}

	
	function delete_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

}
