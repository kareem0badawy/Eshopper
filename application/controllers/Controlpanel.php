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
			
				$insert=$this->My_model->add_config($data);
				$insert="The book successfully Added ✔️✔✍️";
				echo "$insert";
		}
		
	}

	public function slider()
	{
		$slider=$this->My_model->show_slider();
		$data['slider']=$slider;
		$this->load->view('Admin/slider',$data);
	}

	//This is the footer
	public function footer()
	{
		$footer=$this->My_model->bottom_link();
		$data['footer']=$footer;
		$this->load->view('Admin/footer',$data);
	}

	public function pages()
	{
		$pages=$this->My_model->pages();
		$data['pages']=$pages;
		$this->load->view('Admin/pages',$data);
	}
	
}
