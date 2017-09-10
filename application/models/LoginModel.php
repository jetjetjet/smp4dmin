<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function Cek($email, $pass) {
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->where('email', $email);
		$this->db->where('password', $pass);	
		
		return $this->db->get();
	}
		
	function get_user($email) {
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->where('email', $email);
		
		return $this->db->get();
	}		
}
/* Location: ./application/model/Login_model.php */