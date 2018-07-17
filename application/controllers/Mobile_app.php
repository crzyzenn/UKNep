<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_app extends CI_Controller {



	public function index()
	{
		$data['title'] = 'Mobile App'; 
		$data['content'] = $this->load->view('home/mobile_app', "", TRUE); 
		$this->load->view('template', $data); 

		
	}




}
