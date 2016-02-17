<?php

class My_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function add_config($data)
	{

	$this->db->insert('config',$data);

	}
   public function show_slider()
    {
    	$this->db->select('id,title,link,pictures,status');
    	$query=$this->db->get('slider');
       return $query->result();
    }

	public function bottom_link()
	{
		$this->db->select('id,title,parent,status');
		$query=$this->db->get('bottomLinks');
		return $query->result();
	}

	public function pages()
	{
		$this->db->select('id,titleEN,titleAR,link');
		$query=$this->db->get('pages');
		return $query->result();

	}






}




?>