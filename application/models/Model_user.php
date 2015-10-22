<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User Model 
 *
 * @author Gaurav Dhiman.
 * @package Rnd
 *
 */
class Model_user extends CI_Model {
	 
	/**
	 * 
	 */
	function __construct(){

		parent::__construct();
		$this->load->database();	
		
	}

	/**	 
	 * insert new user
	 */
	public function insert_new_user($data = array()){
		
		if(count($data) > 0 ){
			$this->db->insert('user', $data);	
			return $this->db->insert_id();
		}else 
			return 0;		
	}
	
	/*
	 * 
	 * delete user
	 */
	
	function delete_user($id){
		return $this->db->delete('user',array('user_id'=>$id));
	
	}
	
	/**
	 * update user
	 */
	
	function update_user($user_id,$arrData){
		$this->db->where('user_id', $user_id);
		return $this->db->update('user', $arrData);	
	}
		
	/**
	 * Get User	  
	 */
	function get_user($user_id = null){			
		if($user_id){			
			$sql = "SELECT * FROM user WHERE user_id = $user_id LIMIT 1";			
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else 
				return false;			
		}	
	}
	
	/** ajax Datatable user list
	 *
	 */
	public function ajax_user_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'user';
			
		$this->datatables->select("$show_table.fullname as fullname,$show_table.username as username,$show_table.email as email,$show_table.gender as gender,$show_table.user_type as user_type,$show_table.user_id as user_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		
		$edit = "<a id='edit' style='float:left;width:10px' href=" . base_url('user/edit_user/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('user/delete_user/$1') . " onclick='$.deleteLink=\"" . base_url('user/delete_user/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('user_id',$edit.$delete,'user_id');	
		
		return $this->datatables->generate();
		
	}
	
}