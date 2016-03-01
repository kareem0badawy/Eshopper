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
	$config['upload_path'] = './uploads/config';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']	= '2000';
	$config['encrypt_name']= true;
	$this->load->library('upload',$config);
	$this->upload->do_upload('logo');
	$this->upload->do_upload('favicon');
	//$this->load->library('form_validation');	
	//$this->form_validation->set_error_delimiters();
	//&&$this->form_validation->run() == TRUE
	$add=$this->input->post('Update');	
	if ($add)
	{
		$this->My_model->add_config();
	}
	$data['errors']=$this->upload->display_errors();
		$this->load->view('Admin/config',$data);
	}
		//End config
	public function slider()
	{
		$slider=$this->My_model->show_slider();
		$data['slider']=$slider;
		$this->load->view('Admin/slider',$data);
	}
	//Create Slider
	public function slider_create()
	{
		$this->load->library('upload');
		$this->upload->do_upload('pic');
		$submit=$this->input->post('submit');
		$this->load->library('form_validation');	
		$this->form_validation->set_error_delimiters();
		if ($submit&&$this->form_validation->run() == TRUE)
	 	{
			$this->My_model->create_slider();
			//return redirect('Controlpanel/slider');
		}
		
		$data['errors']=$this->upload->display_errors();
		$this->load->view('Admin/slider_create',$data);
		
			
			
	}
	function uploadssss()
	{
			$this->load->library('upload');
			$this->upload->do_upload('pic');
			$this->load->view('Admin/slider_create');
	}
	public function slider_edit($id)
	{
		$this->load->library('upload');
		$this->upload->do_upload('pic');
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if(!empty($edit))
		{
			$update = array(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'link'=>$this->input->post('link'),
				'pictures' =>$this->upload->data('file_name'),
				'status'=>$this->input->post('show'),
			);
			$this->My_model->edit_slider($id,$update);
			//return redirect('Controlpanel/slider');
		}
		$data['errors']=$this->upload->display_errors();
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
	public function footer_create()
	{

		$create=$this->input->post('Create');
		if ($create==true) 
		{
			
			$this->My_model->create_link();
			redirect('Controlpanel/footer');
		}
		
		$this->load->view('Admin/footer_create');
	}

	function footer_edit($id)
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if (!empty($edit))
		 {
			$update = array
			(
				'title' =>$this->input->post('title') ,
				'link' =>$this->input->post('link') ,
				'sort' =>$this->input->post('sort'),
				'parent'=>$this->input->post('parent'),
				'status'=>$this->input->post('show') 
			);
			$this->My_model->edit_link($id,$update);
			return redirect('Controlpanel/footer');
		}
		$data['result']=$this->My_model->get_id_link($id);
		$this->load->view('Admin/footer_edit',$data);
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
	public function pages_create()
	{	
		$create=$this->input->post('Create');
		if ($create==true) {
			$this->My_model->create_pages();
			return redirect('Controlpanel/pages');
		}

		$this->load->view('Admin/pages_create');
	}

	public function pages_edit($id)
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
	public function sections()
	{
		$categories=$this->My_model->categories();
		$data['categories']=$categories;
		$this->load->view('Admin/sections',$data);
	}
	public function sections_create()
	{
		$create=$this->input->post('create');
		if($create)
		{
			$this->My_model->createCategories();
			return redirect('Controlpanel/sections');
		}
		$this->load->view('Admin/sections_create');
	}
	public function sections_edit($id)
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if (!empty($edit))
		{
			$update = array(
			'category_name' =>$this->input->post('name') ,
			'description' =>$this->input->post('description') ,
			'sort' =>$this->input->post('sort') ,
			'status' =>$this->input->post('status') 

				);
			$this->My_model->editCategories($id,$update);
				return redirect('Controlpanel/sections');
		}
		$data['result']=$this->My_model->get_id_category($id);
		$this->load->view('Admin/sections_edit',$data);

	}

	public function sections_delete($id)
	{
		$data['id']=$this->uri->segment(3);
		$delete=$this->My_model->deleteCategories($id);
		if ($delete) 
		{
			return redirect('Controlpanel/sections');
		}
		$this->load->view('Admin/sections');
	}
	public function products()
	{
		$products=$this->My_model->products();
		$data['products']=$products;
		$this->load->view('Admin/products',$data);	
	}
	public function products_create()
	{
	$config['upload_path'] = './uploads/products';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']	= '2000';
	$config['encrypt_name']= true;
	$this->load->library('upload',$config);
	$this->upload->do_upload('icon');
		$create=$this->input->post('create');
		if ($create==true) 
		{
			$this->My_model->productsCreate();
			return redirect('Controlpanel/products');
		}
		$data['errors']=$this->upload->display_errors();
		$this->load->view('Admin/products_create',$data);
	}
	public function products_edit($id)
	{	
		$config['upload_path'] = './uploads/products';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['encrypt_name']= true;
		$this->load->library('upload',$config);
		$this->upload->do_upload('icon');
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if (!empty($edit)) 
		{
			$update=array(
			'category_id' =>$this->input->post('category_id'),
			'product_name' =>$this->input->post('product_name'),
			'product_description' =>$this->input->post('description'),
			'sort_product' =>$this->input->post('sort_product'),
			'product_image' =>$this->upload->data('file_name'),
			'status'=>$this->input->post('status')
			);

			$this->My_model->productsEdit($id,$update);
				//return redirect('Controlpanel/products');
		}
		$data['errors']=$this->upload->display_errors();
		$data['result']=$this->My_model->get_id_product($id);
		$this->load->view('Admin/products_edit',$data);
	}
	public function products_delete()
	{
		$id=$this->uri->segment(3);
		$delete=$this->My_model->productsDelete($id);
		if ($delete==true) 
		{
			return redirect('Controlpanel/products');
		}
		$this->load->view('Admin/products');
	}

	public function orders()
	{	
		$order=$this->My_model->order();
		$data['order']=$order;
		$this->load->view('Admin/order',$data);
	}
	public function orderDetails()
	{
		$id=$this->uri->segment(3);	
		$data=$this->My_model->get_id_order_Details($id);
		$orderdetails=$this->My_model->order_Details();
		$data['orderdetails']=$orderdetails;
		$this->load->view('Admin/order_details',$data);
	}
	public function users()
	{
		$users=$this->My_model->show_users();
		$data['users']=$users;
		$this->load->view('Admin/users',$data);
	}
	public function users_create()
	{
		$create=$this->input->post('create');
		if ($create==true)
		{
			$this->My_model->create_users();
			return redirect('Controlpanel/users');

		}

		$this->load->view('Admin/users_create');
	}

	public function users_edit($id)
	{
		$data['id']=$this->uri->segment(3);
		$edit=$this->input->post('edit');
		if (!empty($edit)) 
		{
			$update =array
			(
				'name' =>$this->input->post('name') , 
				'username' =>$this->input->post('username') ,
				'email' =>$this->input->post('email') ,
				'password' =>$this->input->post('password') ,
				'role' =>$this->input->post('role') ,
				'status' =>$this->input->post('status') 
			);
			$this->My_model->editUsers($id,$update);
			return redirect('Controlpanel/users');
		}
		$data['result']=$this->My_model->get_id_users($id);
		$this->load->view('Admin/users_edit',$data);
	}

	public function users_delete()
	{
		$id=$this->uri->segment(3);
		$delete=$this->My_model->deleteUsers($id);
		if ($delete)
		{
		return redirect('Controlpanel/users');
		}

		$this->load->view('Admin/users');
	}

	public function manager()
	{
		$users=$this->My_model->userManager();
		$data['users']=$users;
		$this->load->view('Admin/users_manager',$data);
	}

	public function normal()
	{
		$users=$this->My_model->userNormal();
		$data['users']=$users;
		$this->load->view('Admin/users_normal',$data);
	}


	
}