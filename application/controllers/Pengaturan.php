<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct() {
		parent::__construct(); 
		if(!$this->session->userdata('logged')) redirect(base_url());
		$this->load->library('Template');
		$this->load->Model('PengaturanModel', '', TRUE);
		
		$this->Template = new Template();
	}
	
	public function index()
	{
		 $data['pengaturan']=$this->PengaturanModel->SelectAll();
			$this->Template->display('Content/Pengaturan', $data);
		  
	}
	
	public function Sambutan()
	{
		
		$data['sambutan']=$this->PengaturanModel->Sambutan();
		$this->Template->display('Content/Sambutan', $data);
	}
	
	public function EditSambutan($id)
	{
		$id = $this->uri->segment(3);
		$sambutan = $this->PengaturanModel->SambutanId($id)->row(); 
		$data['sambutan'] = $this->PengaturanModel->SambutanId($id); 
		$this->Template->display('Content/UbahSambutan', $data);
	}
	
	public function UbahSambutan()
	{
		$this->form_validation->set_rules('sambutan','<b>Sambutan Kepala Sekolah</b>','trim|required'); 	

		if ($this->form_validation->run() == FALSE) {
			$data['error']	= true;
			$this->template->display('Content/UbahSambutan', $data);
		} else {
			if (!empty($_FILES['filefoto']['name'])) {
				$jam 	= time(); 
					
				$config['file_name']    = 'Kepsek.jpg';
				$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'jpg|png|gif|jpeg';		
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->do_upload('filefoto');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = TRUE;
												
				$config['width'] = 450;
				$config['height'] = 550;
				$this->load->library('image_lib',$config);
				 
				$this->image_lib->resize();
			} elseif (empty($_FILES['filefoto']['name'])){
				$config['file_name'] = '';
			}

			$this->PengaturanModel->insert_data();
			$this->session->set_flashdata('notification','Save Data Success.');
 			redirect(site_url('Pengaturan/Sambutan'));
		}
	}
	
	public function Identitas()
	{
		$data['data']=$this->PengaturanModel->Identitas();
		$this->Template->display('Content/Identitas', $data);
	}
}
