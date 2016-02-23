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
		$this->load->view('Admin/Dashboard');

	}

	public function config()
	{

	$add=$this->input->post('Update');	

	if ($add==true)
	{
		$this->My_model->add_config();
	}

		$this->load->view('Admin/config');
	}
		//Controller
	public function slider()
	{
		$slider=$this->My_model->show_slider();
		$data['slider']=$slider;
		$this->load->view('Admin/slider',$data);
	}
	//Create Slider
	public function createSlider()
	{
		$create=$this->input->post('Create');
		if ($create==true)
		 {
			$this->My_model->create_slider();
		}

		$this->load->view('Admin/create_slider');
	}
	public function edit_slider($id)
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if(!empty($edit))
		{
			$update = array(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'link'=>$this->input->post('link'),
			);
			$this->My_model->edit_slider($id,$update);
			return redirect('Controlpanel/slider');
		}
		$data['result']=$this->My_model->get_id_slider($id);
		$this->load->view('Admin/slider_edit',$data);
	}
	public function delete_slider()
	{
		$id=$this->uri->segment(3);
		$delete=$this->My_model->delete_slider($id);
		if ($delete==true)
		 {
			return redirect('Controlpanel/slider');
		}
	}

	//This is the footer
	public function footer()
	{
		$footer=$this->My_model->bottom_link();
		$data['footer']=$footer;
		$this->load->view('Admin/footer',$data);
	}
	public function create_footer()
	{

		$create=$this->input->post('Create');
		if ($create==true) 
		{
			
			$this->My_model->create_link();
			redirect('Controlpanel/footer');
		}
		
		$this->load->view('Admin/create_link');
	}

	function edit_footer($id)
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if (!empty($edit))
		 {
			$update = array
			(
				'title' =>$this->input->post('title') ,
				'link' =>$this->input->post('link') ,
				'sort' =>$this->input->post('sort') 
			);
			$this->My_model->edit_link($id,$update);
			return redirect('Controlpanel/footer');
		}
		$data['result']=$this->My_model->get_id_link($id);
		$this->load->view('Admin/edit_link',$data);
	}
	function footer_delete()
	{
		$id=$this->uri->segment(3);
		$delete=$this->My_model->delete_link($id);
		if ($delete==true)
		 {
			return redirect('Controlpanel/footer');
		}
	}

	public function pages()
	{
		$pages=$this->My_model->pages();
		$data['pages']=$pages;
		$this->load->view('Admin/pages',$data);
	}
	public function createPages()
	{	
		$create=$this->input->post('Create');
		if ($create==true) {
			$this->My_model->create_pages();
			return redirect('Controlpanel/pages');
		}

		$this->load->view('Admin/create_pages');
	}

	public function editPage($id)
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if (!empty($edit))
	 	{
			$update =array(
				'titleAR' =>$this->input->post('titleAR') ,
				'titleEN' =>$this->input->post('titleEN') ,
				'link' =>$this->input->post('link'),
				'contentAR'=>$this->input->post('contentAR'),
				 'contentEN'=>$this->input->post('contentEN')
				);
				$this->My_model->edit_page($id,$update);
				return redirect('Controlpanel/pages');		
		}
		$data['result']=$this->My_model->get_id_page($id);
		$this->load->view('Admin/pages_edit',$data);
	}
	public function deletePage()
	{
		$id=$this->uri->segment(3);
		$delete=$this->My_model->delete_page($id);
		if ($delete)
		{
			return redirect('Controlpanel/pages');
		}

	}
	
}
