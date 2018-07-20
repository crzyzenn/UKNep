<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


	public function index()
	{
		$data['metas'] = '<meta name="description" content="Looking to build a responsive website with a compelling design and SEO friendly? Visit our site to learn more | MahatoTech." />';
		$data['caonical'] = '<link rel="canonical" href="http://mahato.co.uk/site/" />';
		$data['title'] = 'Build Responsive Websites UK - MahatoTech'; 
		$data['content'] = $this->load->view('home/website', "", TRUE); 
		$this->load->view('template', $data); 
	}


	

}
