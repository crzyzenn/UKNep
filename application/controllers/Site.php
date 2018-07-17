<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Website'; 
		$data['content'] = $this->load->view('home/website', "", TRUE); 
		$this->load->view('template', $data); 
	}


	

}
