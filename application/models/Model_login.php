<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login Model 
 *
 * @author Gaurav Dhiman.
 * @package Rnd
 *
 */
class Model_login extends CI_Model {
	 
	/**
	 * 
	 */
	function __construct(){

		parent::__construct();
		$this->load->database();	
		
	}

	/**
	 * Get Admin 
	 */
	function get_user($id = null){
				
		if($id){
			
			$sql = "SELECT * FROM user WHERE user_id = $id LIMIT 1";
			
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else return false;
			
		}
		
	}	

	
	/**
	 * function to check authorization 
	 * 
	 */
	function check_login($username = null,$password = null){
		
		if($username && $password){
					
			$sql = "SELECT * from user 
					WHERE username = '$username' and password = '".md5($password)."'";
	
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(count($data) >= 1){				
				return $data[0];
			}else{
				return False;
			}
		}else{			
			return False;
		}
		
	}
	
}