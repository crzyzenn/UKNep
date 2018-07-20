<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller {

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
		$data['metas'] = '<meta name="description" content="Build Ecommerce websites with ease with us. MahatoTech will create a robust eCommerce platform for your business to meet your business goals." />'; 
		$data['caonical'] = '<link rel="canonical" href="http://mahato.co.uk/ecommerce/" />';
		$data['title'] = 'Ecommerce website development UK - MahatoTech'; 
		$data['content'] = $this->load->view('home/ecommerce', "", TRUE); 
		$this->load->view('template', $data); 

		// $this->load->view('template', $data);
	}




}
