<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$data['metas'] = '<meta name="description" content="Based in the UK, MahatoTech, is your digital partner for your business who will help you achieve your business goals. Call us at 01403432047 | MahatoTech." />';
		$data['caonical'] = '<link rel="canonical" href="http://mahato.co.uk/about/" />';
		$data['title'] = 'Website Designer, App Developer UK'; 
		$data['content'] = $this->load->view('home/about', "", TRUE); 
		$this->load->view('template', $data); 

		// $this->load->view('template', $data);
	}




}
