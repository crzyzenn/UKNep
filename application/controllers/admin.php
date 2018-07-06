<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$data['title'] = 'Admin | Home'; 
		$data['content'] = $this->load->view('admin/index', "", TRUE); 
		$this->load->view('admin/template', $data); 

		// $this->load->view('template', $data);
	}

	public function widgets()
	{
		$data['title'] = 'Admin | Widgets'; 
		$data['content'] = $this->load->view('admin/widgets', "", TRUE); 
		$this->load->view('admin/template', $data); 

		// $this->load->view('template', $data);
	}

	public function forms($form = "general")
	{

		if ($form == "general"){
			$data['title'] = 'Admin | Widgets'; 
			$data['content'] = $this->load->view('admin/forms/general', "", TRUE); 
			$this->load->view('admin/template', $data); 	
		}
		else if ($form == "advanced") {
			$data['title'] = 'Admin | Widgets'; 
			$data['content'] = $this->load->view('admin/forms/advanced', "", TRUE); 
			$this->load->view('admin/template', $data); 
		}
		else if ($form == "editors") {
			$data['title'] = 'Admin | Widgets'; 
			$data['content'] = $this->load->view('admin/forms/editors', "", TRUE); 
			$this->load->view('admin/template', $data); 
		}
		else{		
			$data['title'] = 'Admin | Widgets'; 
			$data['content'] = $this->load->view('admin/forms/general', "", TRUE); 
			$this->load->view('admin/template', $data); 
		}
		
		

		// $this->load->view('template', $data);
	}






}
