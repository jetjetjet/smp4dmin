<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() {
		parent::__construct(); 
		if(!$this->session->userdata('logged')) redirect(base_url());
		$this->load->library('Template');
		$this->load->Model('GalleryModel', '', TRUE);
		$this->Template = new Template();
	}
	
	public function index()
	{
		 $data['gallery']=$this->GalleryModel->SelectAll();
			$this->Template->display('Content/LihatGallery', $data);
		  
	}
	
	public function Tambah()
	{
		$this->Template->display('Content/TambahGallery');
	}
	
	public function tambah_data()
	{
		$this->UserModel->insert_data();
		$this->session->set_flashdata('notification','Simpan Data Sukses.');
 		redirect(site_url('User/index'));
	}
}
