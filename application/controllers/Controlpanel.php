<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanel extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
        // Your own constructor code
       $this->load->model('My_model');
   }

	public function panel()
	{
		$this->load->view('Admin/Adminpanel');
 

	}

	public function config()
	{
		$this->load->view('Admin/config');
		$add=$this->input->post('submit');
		if(!empty($add))
		{
			$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'keywords' => $this->input->post('keywords'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'topphone' => $this->input->post('topphone'),
				'policylink' => $this->input->post('policylink'),
				'freetitle' => $this->input->post('freetitle'),
				'freelink' => $this->input->post('freelink'),
				'show' => $this->input->post('show'),
				);
			
				$insert=$this->My_model->add_Config($data);
				$insert="The book successfully Added ✔️✔✍️";
				echo "$insert";
		}
		
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
