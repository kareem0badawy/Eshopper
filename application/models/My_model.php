<?php

class My_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function add_Config($data)
	{

	$this->db->insert('config',$data);


	}
   public function show_Slider($data)
    {

        $this->db->insert('config',$data);
    }








}




?>