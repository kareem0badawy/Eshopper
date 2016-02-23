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
				//'show' => $this->input->post('show'),
				);
	$this->db->insert('config',$data);

	}
   public function show_slider()
    {
    	$this->db->select('id,title,link,pictures,status');
    	$query=$this->db->get('slider');
       return $query->result();
    }
	public function create_slider()
	{
		$data=array
			(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'pictures'=>$this->input->post('pictures'),
				'link'=>$this->input->post('link'),
					//'status'=>$this->input->post('status'),
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
			//'parent'=>$this->input->post('parent'),
			'sort'=>$this->input->post('sort'),
			//'status'=>$this->input->post('status'),	
			
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



}




?>