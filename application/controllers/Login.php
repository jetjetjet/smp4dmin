<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();		
		$this->load->model('LoginModel');		
	}

	public function index()
	{
		 
		$session = $this->session->userdata('logged');
		if ($session == FALSE) 
		{
			$contents['recaptcha_html'] = $this->recaptcha->render();;
			$this->load->view('Login', $contents);
		} 
		else 
		{						
			redirect(site_url('Welcome'));
		}
		 
	}
	
	public function getResponse($str){

		$response = $this->recaptcha->verifyResponse($str);
		if ($response['success'])
		{     
			return true;
        }     
        else
        {
			$this->form_validation->set_message('getResponse', '%s '. var_dump($response) );
			return false;
        }
    }

	public function Validasi() 
	{
		$email 		= trim($this->input->post('email', 'true'));
		$password 	= trim($this->input->post('password', 'true'));
		
		$temp_user 	= $this->LoginModel->get_user($email)->row();
		$num_user 	= count($temp_user);
		
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Belum Ditandai', 'callback_getResponse');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->session->set_flashdata('email',$this->input->post('email'));
			$this->session->set_flashdata('password',$this->input->post('password'));
			$this->session->set_flashdata('notification',validation_errors());
			redirect(site_url('Login'));
		} 
		else 
		{
			if ($num_user == 0) 
			{
				$this->session->set_flashdata('notification','<b>Maaf !! email Anda Tidak Terdaftar.</b>');
				redirect(site_url('Login'));				
			} 
			elseif ($num_user > 0) 
			{
				$temp_account = $this->LoginModel->Cek($email, md5($password))->row();
				$num_account = count($temp_account);
		
				if ($num_account > 0) 
				{	
					$array_item = array('id_user' 			=> $temp_account->id_user, 
										'email' 			=> $temp_account->email, 
										'nama' 				=> $temp_account->nama, 
										'logged' 	=> TRUE
										);
					
					$this->session->set_userdata($array_item);
					redirect(site_url('Welcome'));
				}
				else
				{
					$this->session->set_flashdata('notification','<b>Login Gagal, email atau Password Salah.</b>');
					
					redirect(site_url('Login'));					
				}				
			}
		}
	}	

	public function logout() {
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-chace');
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
/* Location: ./application/controller/Login.php */