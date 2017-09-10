<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct() {
		parent::__construct(); 
		if(!$this->session->userdata('logged')) redirect(base_url());
		$this->load->library('Template');
		$this->load->Model('PengumumanModel', '', TRUE);
		$this->Template = new Template();
	}
	
	public function index()
	{
		 $data['pengumuman']=$this->PengumumanModel->SelectAll();
			$this->Template->display('Content/LihatPengumuman', $data);
		  
	}
	
	public function Tambah()
	{
		$this->Template->display('Content/TambahPengumuman');
	}
	
	public function TambahPengumuman()
	{
		$this->form_validation->set_rules('judul','<b>Judul</b>','trim|required');
		$this->form_validation->set_rules('pengumuman','<b>isi Pengumuman</b>','trim|required');		
		$this->form_validation->set_rules('dari','<b>Dari Tanggal</b>','trim|required');
		$this->form_validation->set_rules('sampai','<b>sampai Tanggal</b>','trim|required');	 	

		if ($this->form_validation->run() == FALSE) {
			$data['error']	= true;
			$this->template->display('Content/TambahPengumuman', $data);
		} else {
			$this->PengumumanModel->insert_data();
			$this->session->set_flashdata('notification','Save Data Success.');
 			redirect(site_url('Pengumuman'));
		}
	}
	
	public function edit()
	{
		$id = $this->uri->segment(3);
		$pengumuman = $this->PengumumanModel->PengumumanId($id)->row(); 
		$data['pengumuman'] = $this->PengumumanModel->PengumumanId($id); 
		$this->Template->display('Content/EditPengumuman', $data);
		 
	}
	
	public function Update(){
		$this->PengumumanModel->UpdateData();
		$this->session->set_flashdata('notification','Update Pengumuman Sukses.');
		redirect(site_url('Pengumuman'));
	}
	
	public function hapus($id)
	{
		$where = array('id_pengumuman' => $id);
		$this->PengumumanModel->deletePengumuman($where,'tb_pengumuman');
		$this->session->set_flashdata('notification','Hapus Pengumuman Sukses.');
		redirect(site_url('Pengumuman'));
	}
	
}
