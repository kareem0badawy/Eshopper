<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanel extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
        // Your own constructor code
        $this->load->view('Admin/Adminpanel');
   }

	public function panel()
	{
		
	}

	public function config()
	{

	}
	public function slider()
	{

	}

	//This is the footer
	public function bottom_links()
	{
	}

	public function pages()
	{
		
	}
	
}
