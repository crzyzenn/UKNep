<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$data['metas'] = '<meta name="description" content="Based in the UK, MahatoTech, is your digital partner for your business who will help you achieve your business goals. Call us at 01403432047." />'; 
		$data['caonical'] = '<link rel="canonical" href="http://mahato.co.uk/contact/" />';
		$data['title'] = 'Website Designer, App Developer UK'; 
		$data['content'] = $this->load->view('home/contact', "", TRUE); 
		$this->load->view('template', $data); 

		// $this->load->view('template', $data);
	}

	public function send(){
		$name = $this->input->post('fname').' '.$this->input->post('lname'); 
		$email = $this->input->post('email'); 
		$details = $this->input->post('details'); 
		
		$form_rules = array(
						array(
							'field' => 'fname', 
							'label' => 'First name', 
							'rules' => 'required'
						),
						array(
							'field' => 'lname', 
							'label' => 'Last name', 
							'rules' => 'required'
						),
						array(
							'field' => 'email', 
							'label' => 'Email', 
							'rules' => 'required'
						),
						array(
							'field' => 'details', 
							'label' => 'Details', 
							'rules' => 'required'
						)
					);

		$this->form_validation->set_rules($form_rules);

		if ($this->form_validation->run()) {
			$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 2096,
			  'smtp_user' => 'enquiries.mahatotech@gmail.com', // change it to yours
			  'smtp_pass' => 'mahatotech12345', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			
			$this->email->from($email, $name);
			$this->email->to('zenishshr@gmail.com');			
			
			$this->email->subject('Enquiry');
			$this->email->message($details);
			
	         //Send mail 
	         if($this->email->send()) 
	         $this->session->set_flashdata("email_sent","Your enquiry has been sucessfully sent."); 
	         else 
	         $this->session->set_flashdata("email_sent","An error has occured. Please try again later.");
		}

		$data['title'] = 'Contact'; 
		$data['content'] = $this->load->view('home/contact', "", TRUE); 
		$this->load->view('template', $data); 
	}




}
