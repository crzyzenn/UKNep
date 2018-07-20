<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_work extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Our work'; 
		$data['content'] = $this->load->view('home/our_work', "", TRUE); 
		$this->load->view('template', $data); 


	}


}
