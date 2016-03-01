<?php

class My_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function add_config()
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
				'logo' =>$this->upload->data('file_name'),
				'favicon' =>$this->upload->data('file_name'),
				'status' => $this->input->post('show'),
				);
	$this->db->insert('config',$data);

	}
   public function show_slider()
    {
    	$this->db->select('*');
    	$query=$this->db->get('slider');
        return $query->result();
    }
    
	public function create_slider()
	{

		$data=array
			(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'pictures' =>$this->upload->data('file_name'),
				'link'=>$this->input->post('link'),
				'status'=>$this->input->post('show'),
				
			);
		$this->db->insert('slider',$data);
	}
	
	function get_id_slider($id)
	{
		$query=$this->db->get_where('slider',array('id' =>$id));

		return $query->result();
	}
	function edit_slider($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('slider',$data);
		return true;
	}
	function delete_slider($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('slider');
		return true;
	}


	public function bottom_link()
	{
		$this->db->select('id,title,parent,status');
		$query=$this->db->get('bottomLinks');
		return $query->result();
	}
	function create_link()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'link'=>$this->input->post('link'),
			'parent'=>$this->input->post('parent'),
			'sort'=>$this->input->post('sort'),
			'status'=>$this->input->post('show'),	
			
			 );

		$this->db->insert('bottomLinks',$data);
	}
	function get_id_link($id)
	{
		$query=$this->db->get_where('bottomLinks', array('id' => $id));
		
		return $query->result();
	}
	function edit_link($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('bottomLinks',$data);
		return true;

	}
	function delete_link($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('bottomLinks');
		return true;
	}

	 function pages()
	{
		$this->db->select('id,titleEN,titleAR,link');
		$query=$this->db->get('pages');
		return $query->result();

	}
	 function create_pages()
	{
		$data = array
		(
			'titleAR' =>$this->input->post('titleAR'),
			'titleEN' =>$this->input->post('titleEN'),
			'link' =>$this->input->post('link'),
			'contentAR' =>$this->input->post('contentAR'),
			'contentEN' =>$this->input->post('contentEN')
		);

		$this->db->insert('pages',$data);
	}
	function get_id_page($id)
	{
		$query=$this->db->get_where('pages',array('id' =>$id));
		return $query->result();
	}
	function edit_page($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pages',$data);
		return true;
	}
	function delete_page($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pages');
		return true;
	}

	function categories()
	{
		$this->db->select('category_id,category_name,parent_section,sort,status');
		$query=$this->db->get('categories');
		return $query->result();
	}
	function createCategories()
	{
		$data = array(
			'category_name' =>$this->input->post('name') ,
			'description' =>$this->input->post('description') ,
			'sort' =>$this->input->post('sort') ,
			'status' =>$this->input->post('status')
			);

		$this->db->insert('categories',$data);
	}
	function get_id_category($id)
	{
	 $query=$this->db->get_where('categories',array('category_id'=>$id ));
	 return $query->result();

	}
	function editCategories($id,$data)
	{
		$this->db->where('category_id',$id);
		$this->db->update('categories',$data);
		return true;
	}
	function deleteCategories($id)
	{
		$this->db->where('category_id',$id);
		$query=$this->db->delete('categories');
			return true;
	}

	function products()
	{
  $this->db->select('*');
  $this->db->from('products');
  $this->db->join('categories','categories.category_id = products.category_id');
  $query = $this->db->get();
  return $query->result();
	}
	function productsCreate()
	{
		$data=array(
			'category_id' =>$this->input->post('category_id'),
			'product_name' =>$this->input->post('product_name'),
			'product_description' =>$this->input->post('description'),
			'sort_product' =>$this->input->post('sort'),
			'product_image'  =>$this->upload->data('file_name'),
			'status'=>$this->input->post('status')
			);

		$this->db->insert('products',$data);
	}
	function get_id_product($id)
	{
		$query=$this->db->get_where('products',array('product_id'=>$id));
			return $query->result();

	}
	function productsEdit($id,$data)
	{
		$this->db->where('product_id',$id);
		$this->db->update('products',$data);
			return true;

	}
	function productsDelete($id)
	{
		$this->db->where('product_id',$id);
		$this->db->delete('products');
		return true;
	}
	function order()
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('users','users.user_id = orders.user_id' );
		$query = $this->db->get();
		return $query->result();
	}
	function get_id_order_Details($id)
	{
		$query=$this->db->get_where('order_details',array('orderdetails_id'=>$id));
			return $query->result();

	}
	function order_Details()
	{
		$this->db->select('*');	
		$this->db->from('users,address,orders');
		//$this->db->join('address','users.user_id = address.user_id' );
		$query = $this->db->get();
		return $query->result();
	}
	function show_users()
	{
		$this->db->select('user_id,name,email,role,status');
		$query=$this->db->get('users');
		return $query->result();
	}
	function create_users()
	{
		$data = array(
			'name' =>$this->input->post('name') ,
			'username' =>$this->input->post('username') ,
			'email' =>$this->input->post('email') , 
			'password' =>$this->input->post('password'),
			'role'=>$this->input->post('role'),
			'status'=>$this->input->post('active') 
			);
		
		$this->db->insert('users',$data);
	}

	function get_id_users($id)
	{
		$query=$this->db->get_where('users', array('user_id' =>$id));
		return $query->result();
	}
	function editUsers($id,$data)
	{
		$this->db->where('user_id',$id);
		$this->db->update('users',$data);
		return true;
	}
	function deleteUsers($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('users');
		return true;
	}

	function userNormal()
	{
		$role='Normal User';
		$this->db->select('user_id,name,email,role,status');
		$this->db->where('role',$role);
		$query=$this->db->get('users');
		return $query->result();

	}
	function userManager()
	{
		$role='User Administrator';
		$this->db->select('user_id,name,email,role,status');
		$this->db->where('role',$role);
		$query=$this->db->get('users');
		return $query->result();

	}


}




?>