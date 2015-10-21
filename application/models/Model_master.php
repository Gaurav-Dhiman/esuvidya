<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login Model 
 *
 * @author Gaurav Dhiman.
 * @package esuvidya
 *
 */
class Model_master extends CI_Model {
	 
	/**
	 * 
	 */
	function __construct(){

		parent::__construct();
		$this->load->database();	
		
	}

	/**	 
	 * insert new sections
	 */
	public function insert_section($data = array()){
		
		if(count($data) > 0 ){
			$this->db->insert('sections', $data);	
			return $this->db->insert_id();
		}else 
			return 0;		
	}
	
	/*
	 * 
	 * delete sections
	 */
	
	function delete_section($id){
		return $this->db->delete('sections',array('sec_id'=>$id));	
	}
	
	/**
	 * update sections
	 */
	
	function update_section($sec_id,$arrData){
		$this->db->where('sec_id', $sec_id);
		return $this->db->update('sections', $arrData);	
	}


	/**
	 * Get Section  
	 */
	function get_section($sec_id = null){			
		if($sec_id){			
			$sql = "SELECT * FROM sections WHERE sec_id = $sec_id LIMIT 1";			
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else 
				return false;			
		}	
	}


	/** ajax Datatable section list
	 *
	 */
	public function ajax_section_list(){
		$this->datatables->set_database('esuvidya');
		$show_table = 'sections';
			
		$this->datatables->select("$show_table.code as code,$show_table.name as name,$show_table.start_std as start_std,$show_table.end_std as end_std,$show_table.header_name as header_name,$show_table.only_fr_acc as only_fr_acc,$show_table.sec_id as sec_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		
		$edit = "<a id='edit' style='float:left;width:10px' href=" . base_url('master/edit_section/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('master/delete_section/$1') . " onclick='$.deleteLink=\"" . base_url('master/delete_section/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('sec_id',$edit.$delete,'sec_id');	
		
		return $this->datatables->generate();
		
	}
	

	/**	 
	 * insert new standard
	 */
	public function insert_standard($data = array()){
		
		if(count($data) > 0 ){
			$this->db->insert('standards', $data);	
			return $this->db->insert_id();
		}else 
			return 0;		
	}
	
	/** ajax Datatable standard list
	 *
	 */
	public function ajax_standard_list(){
		$this->datatables->set_database('esuvidya');
		$show_table = 'standards';
			
		$this->datatables->select("$show_table.std_code as std_code,$show_table.std as std,$show_table.section as section,$show_table.medium as medium,$show_table.best_age as best_age,$show_table.next_std as next_std,$show_table.default_fee_schemes as default_fee_schemes,$show_table.std_name as std_name,$show_table.fractional_marks as fractional_marks,$show_table.std_id as std_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		
		$edit = "<a id='edit' style='float:left;width:10px' href=" . base_url('master/edit_standard/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('master/delete_standard/$1') . " onclick='$.deleteLink=\"" . base_url('master/delete_standard/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('std_id',$edit.$delete,'std_id');	
		
		return $this->datatables->generate();
		
	}
/*
	 * 
	 * delete standard
	 */
	
	function delete_standard($id){
		return $this->db->delete('standards',array('std_id'=>$id));	
	}
	
	/**
	 * update sections
	 */
	
	function update_standard($std_id,$arrData){
		$this->db->where('std_id', $std_id);
		return $this->db->update('standards', $arrData);	
	}


	/**
	 * Get Standard  
	 */
	function get_standard($std_id = null){			
		if($std_id){			
			$sql = "SELECT * FROM standards  WHERE std_id = $std_id LIMIT 1";			
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else 
				return false;			
		}	
	}


	/**
	 * Get All Standards 
	 */
	function get_all_standards(){			
				
		$sql = "SELECT * FROM standards";			
		$query = $this->db->query($sql);
		$data = $query->result_array();
		
		if(!empty($data))
			return $data;
		else 
			return false;			
		
	}


	/**	 
	 * insert new division
	 */
	public function insert_division($data = array()){
		
		if(count($data) > 0 ){
			$this->db->insert('divisions', $data);	
			return $this->db->insert_id();
		}else 
			return 0;		
	}
	
	/** ajax Datatable division list
	 *
	 */
	public function ajax_division_list(){
		$this->datatables->set_database('esuvidya');
		$show_table = 'divisions';
			
		$this->datatables->select("$show_table.std_code as std_code,$show_table.division_name as division_name,$show_table.div_id as div_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		
		$edit = "<a id='edit' style='float:left;width:10px' href=" . base_url('master/edit_division/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('master/delete_division/$1') . " onclick='$.deleteLink=\"" . base_url('master/delete_division/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('div_id',$edit.$delete,'div_id');	
		
		return $this->datatables->generate();
		
	}
/*
	 * 
	 * delete division
	 */
	
	function delete_division($id){
		return $this->db->delete('divisions',array('div_id'=>$id));	
	}
	
	/**
	 * update sections
	 */
	
	function update_division($div_id,$arrData){
		$this->db->where('div_id', $div_id);
		return $this->db->update('divisions', $arrData);	
	}


	/**
	 * Get division  
	 */
	function get_division($div_id = null){			
		if($div_id){			
			$sql = "SELECT * FROM divisions  WHERE div_id = $div_id LIMIT 1";			
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else 
				return false;			
		}	
	}


}