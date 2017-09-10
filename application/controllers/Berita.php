<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct() {
		parent::__construct(); 
		if(!$this->session->userdata('logged')) redirect(base_url());
		$this->load->library('Template');
		$this->load->Model('BeritaModel', '', TRUE);
		$this->Template = new Template();
	}
	
	public function index()
	{
		if($this->session->userdata('logged'))
		{
			$data['berita']=$this->BeritaModel->SelectAll();
			$this->Template->display('Content/LihatBerita', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}  
	}
	
	public function Tambah()
	{
		$this->Template->display('Content/TambahBerita');
	}
	
	public function TambahBerita()
	{
		
		$this->form_validation->set_rules('judul','<b>Judul</b>','trim|required');
		$this->form_validation->set_rules('berita','<b>isi Berita</b>','trim|required');		
		$this->form_validation->set_rules('tipe','<b>Tipe Berita</b>','trim|required');	 	

		if ($this->form_validation->run() == FALSE) {
			$data['error']	= true;
			$this->template->display('Content/TambahBerita', $data);
		} else {
			if (!empty($_FILES['gambar']['name'])) {
				$jam 	= time(); 
					
				$config['file_name']    = 'Berita_'.$jam.'.jpg';
				$config['upload_path'] = './assets/uploads/berita';
				$config['allowed_types'] = 'jpg|png|gif|jpeg';		
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->do_upload('gambar');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = TRUE;
												
				$config['width'] = 450;
				$config['height'] = 550;
				$this->load->library('image_lib',$config);
				 
				$this->image_lib->resize();
			} elseif (empty($_FILES['gambar']['name'])){
				$config['file_name'] = '';
			}

			$this->BeritaModel->insert_data();
			$this->session->set_flashdata('notification','Save Data Success.');
 			redirect(site_url('Berita'));
		}
	}
	
	public function edit()
	{
		$id = $this->uri->segment(3);
		$berita = $this->BeritaModel->BeritaId($id)->row(); 
		$data['berita'] = $this->BeritaModel->BeritaId($id); 
		$this->Template->display('Content/EditBerita', $data);
		 
	}
	
	
	public function Update(){
		$this->BeritaModel->UpdateData();
		$this->session->set_flashdata('notification','Update Berita Sukses.');
		redirect(site_url('Berita'));
	}
	
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->BeritaModel->deleteBerita($where,'tb_berita');
		$this->session->set_flashdata('notification','Hapus Berita Sukses.');
		redirect(site_url('Berita'));
	}
	
	
}
