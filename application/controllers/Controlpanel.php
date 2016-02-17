<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanel extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
        // Your own constructor code
       
   }

	public function panel()
	{
		$this->load->view('Admin/Adminpanel');
	}

	public function config()
	{
		$this->load->view('Admin/config');
	}
	public function slider()
	{
		$this->load->view('Admin/slider');
	}

	//This is the footer
	public function bottom_links()
	{
		$this->load->view('Admin/footer');
	}

	public function pages()
	{
		$this->load->view('Admin/pages');
	}
	
}
