<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_app extends CI_Controller {



	public function index()
	{
		$data['metas'] = '<meta name="description" content="Looking to build a mobile application on the most popular platforms today? We build excellent performing mobile apps for your business. Visit our site to learn more." />'; 
		$data['caonical'] = '<link rel="canonical" href="http://mahato.co.uk/mobile-app/" />';
		$data['title'] = 'Mobile App Development UK - MahatoTech'; 

		$data['content'] = $this->load->view('home/mobile_app', "", TRUE); 
		$this->load->view('template', $data); 

		
	}




}
