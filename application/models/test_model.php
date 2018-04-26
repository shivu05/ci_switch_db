<?php

class Test_model extends CI_Model{
	public function __construct(){
		$this->load->model('custom_db');
	}
	
	function get_users($db_name = NULL){
		if($db_name){
			$db = $this->custom_db->getdatabase($db_name);
			return $db->get('users')->result_array();
		}else{
			return false;
		}
	}

}