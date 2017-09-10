<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		if(!$this->session->userdata('logged')) redirect(base_url());
		$this->load->library('Template');
		$this->load->Model('UserModel', '', TRUE);
		$this->Template = new Template();
	}
	
	public function index()
	{
		 $data['user'] = $this->UserModel->SelectAll();
			$this->Template->display('Content/LihatUser', $data);
		 
		   
	}
	
	public function Tambah()
	{
		$this->template->display('Content/TambahUser');
	}
	
	public function Simpan()
	{
		$this->UserModel->Simpan();
		$this->session->set_flashdata('notification','Simpan Data Sukses.');
 		redirect(site_url('User'));
	}
	
	public function edit($id_user)
	{
			$id = $this->uri->segment(3);
            $user = $this->UserModel->userbyid($id)->row(); 
            $data['user'] = $this->UserModel->userbyid($id); 
            $this->Template->display('Content/Edituser', $data);
             
	}
	
	public function Update(){
		$this->UserModel->UpdateData();
		$this->session->set_flashdata('notification','Update Data Sukses.');
		redirect(site_url('User'));
	}
	
	
	public function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->UserModel->delete_data($where,'tb_users');
		$this->session->set_flashdata('notification','Update Data Sukses.');
		redirect(site_url('User'));
	}
}
