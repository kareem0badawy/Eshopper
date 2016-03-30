<?php

class Model_home extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	//Model
	function slidshow_db()
	{
		//$this->db->order_by('id','desc');
		//$this->db->limit(3);
		$this->db->select('*');
		$data = $this->db->get('slider,products');
        return $data->result();

	}
	function get_slider()
	{
		$this->db->order_by('id','desc');
		$data = $this->db->get('slider');
        return $data->result();
	}


}