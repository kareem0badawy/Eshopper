<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
        // Your own constructor code
      // $this->load->model('My_model');
   }
/*
   function index()
   {
   			if($this->input->post('submit')) 
   			{
   			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '10000';
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('file')) 
			{
				echo "Done";
			}else
			{
				echo $this->upload->display_errors();
			}
		
   			}
			

			$this->load->view('upload_view');

   }


	function do_upload()
	{
		//$data['error']="";
		//$data['done']="";
		//if ($this->input->post('submit')) {
		
		
			
			$this->load->library('upload');
			$this->upload->do_upload('pic');
			$this->load->view('Admin/slider_create');

		}*/
	}


	/*

	else
		{
		$data['done']="Done"; 
		$this->load->view('upload_view',$data);
		}
		
   function index()
   {
   			if($this->input->post('submit')) 
   			{
   			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '10000';
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('file')) 
			{
				echo "Done";
			}else
			{
				echo $this->upload->display_errors();
			}
		
   			}
			

			$this->load->view('Admin/uploadview');

   }


	function do_upload()
	{
		$data['error']="";
		if ($this->input->post('submit')) {
		
		
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2000';
			$this->load->library('upload',$config);

			
		if($this->upload->do_upload('file'))
		{
		 $succss=$this->input->post('submit');
		 $data['succss']=$succss;
		}
		elseif(!$this->upload->do_upload())
			{
			$data['error']=$this->upload->display_errors();

		}
		}
		$this->load->view('upload_view',$data);
	}


<?php echo form_open_multipart('upload/do_upload');?>


 <input type="file" class="form_control" name="pic" size="20">

<br /><br />

 <input type="submit" name="submit" class="btn- btn-primary" value="upload">


<?php echo form_close();?>
	*/