<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	protected $_ci;
	
	function __construct(){
		$this->_ci = &get_instance();
	}
	
	function display($content, $data = null){
		$data['header'] = $this->_ci->load->view('Templates/Header', $data, true);
		$data['sidebar'] = $this->_ci->load->view('Templates/Sidebar', $data, true);
		$data['content'] = $this->_ci->load->view($content, $data, true);
		
		
		$this->_ci->load->view('Templates/Home', $data);
	}
}
