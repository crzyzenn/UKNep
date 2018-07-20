<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$data['metas'] = '<meta name="description" content="Build Mobile-apps, Websites, E-Commerce websites tailored specific for your business. Turn your idea into a reality. Contact us at 01403432047 or visit us.">';
		$data['caonical'] = '<link rel="canonical" href="http://mahato.co.uk/home/" />';
		$data['title'] = 'Websites, eCommerce, Mobile apps UK'; 
		$data['content'] = $this->load->view('home/index', "", TRUE); 
		$this->load->view('template', $data); 

		// $this->load->view('template', $data);
	}




}
