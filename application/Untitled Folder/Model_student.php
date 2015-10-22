<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User Model 
 *
 * @author Gaurav Dhiman.
 * @package Rnd
 *
 */
class Model_student extends CI_Model {
	 
	/**
	 * 
	 */
	function __construct(){

		parent::__construct();
		$this->load->database();	
		
	}

	/**	 
	 * insert new student
	 */
	public function insert_new_student($data = array()){
		
		if(count($data) > 0 ){
			$this->db->insert('student', $data);	
			return $this->db->insert_id();
		}else 
			return 0;		
	}
	
	/*
	 * 
	 * delete student
	 */
	
	function delete_student($id){
		return $this->db->delete('student',array('stud_id'=>$id));
	
	}
	
	/**
	 * update student
	 */
	
	function update_student($stud_id,$arrData){
		$this->db->where('stud_id', $stud_id);
		return $this->db->update('student', $arrData);	
	}
		
	/**
	 * Get User	  
	 */
	function get_student($stud_id = null){			
		if($stud_id){			
			$sql = "SELECT * FROM student WHERE stud_id = $stud_id LIMIT 1";			
			$query = $this->db->query($sql);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else 
				return false;			
		}	
	}
	
	/** ajax Datatable student list
	 *
	 */
	public function ajax_student_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	/** ajax Datatable  new student list
	 *
	 */
	public function ajax_new_student_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');		
		$time = strtotime("-1 year", time());
		$date = date("Y-m-d H:i:s", $time);
		$date = "2015-08-06 12:56:40";
		$where = "student.created >='$date'";
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);
		
		$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	
	/** ajax Datatable Left student list
	 *
	 */
	public function ajax_left_student_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);
		$where = "student.status ='Left'";
		
		$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	
	/** ajax Datatable student by caste list
	 *
	 */
	public function ajax_student_by_caste_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.caste as caste,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);				
		$this->datatables->where('is_deleted','0');
		//$where = "student.caste ='Left'";
		
		//$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	/** ajax Datatable student by age list
	 *
	 */
	public function ajax_student_by_age_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.age as age,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);
		$this->datatables->order_by('age', "DESC");
		//$where = "student.caste ='Left'";
		
		//$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	
	/** ajax Datatable student by Birthdat list
	 *
	 */
	public function ajax_student_by_birthday_list(){

		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

		$this->datatables->set_database('rnd');
		$show_table = 'student';
			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.birth_date as birth_date,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);

		$this->datatables->order_by('birth_date', "DESC"); 
		//$where = "student.caste ='Left'";
		
		//$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	
	/** ajax Datatable student by Class list
	 *
	 */
	public function ajax_student_by_class_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);
		$this->datatables->order_by('division', "DESC"); 
		//$this->datatables->group_by('division'); 
		//$where = "student.caste ='Left'";
		
		//$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}
	
	
	/** ajax Datatable student left list
	 *
	 */
	public function ajax_student_left_list(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';
		$start_date = $this->session->userdata('start_date');
		$end_date  	= $this->session->userdata('end_date');

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.gender as gender,$show_table.status as status,$show_table.created as created,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');
		$this->datatables->where('status','Left');
		$where = "birth_date BETWEEN $start_date AND $end_date";		
		$this->datatables->where($where);
		$this->datatables->order_by('created', "DESC"); 
		//$this->datatables->group_by('division'); 
		//$where = "student.caste ='Left'";
		
		//$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$edit = "<a id='edit' style='float:left;width:40px' href=" . base_url('student/edit/$1') . " title='Edit'><i class='icon-edit'></i></a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$edit.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}


	/** ajax Datatable student list for bonafide
	 *
	 */
	public function ajax_student_list_bonafide(){
		$this->datatables->set_database('rnd');
		$show_table = 'student';

			
		$this->datatables->select("$show_table.gr_num as gr_num,$show_table.std as std,$show_table.division as division,$show_table.roll_num as roll_num,$show_table.fname as fname,$show_table.lname as lname,$show_table.status as status,$show_table.created as created,$show_table.stud_id as stud_id", TRUE);
		$this->datatables->from($show_table);				
		$this->datatables->where('is_deleted','0');	
		$this->datatables->order_by('created', "DESC"); 
		//$this->datatables->group_by('division'); 
		//$where = "student.caste ='Left'";
		
		//$this->datatables->where($where);
		//$view = "<a id='edit' style='float:left;width:10px;margin-right: 80px;' href=" . base_url('student/view/$1') . " title='View'><i class='icon-edit'></i></a>";
		$bonafide = "<a id='bonafide' style='float:left;width:40px' href=" . base_url('student/bonafide/$1') . " title='Bonafide'>Bonafide</a>";		
		$delete = "<a style='float:right;width:10px' href=" . base_url('student/delete/$1') . " onclick='$.deleteLink=\"" . base_url('student/delete/$1') . "\";$.OnDeleteDialog()'  title='Delete'><i class='icon-trash'></i></a></div>";		
		$this->datatables->edit_column('stud_id',$bonafide.$delete,'stud_id');	
		
		return $this->datatables->generate();
		
	}



	/**	 
	 * Query 
	 */
	public function student_query($query = array()){
		
		if($query){			
					
			$query = $this->db->query($query);
			$data = $query->result_array();
			
			if(!empty($data))
				return $data[0];
			else 
				return false;			
		}			
	}

	/**
	 * Query
	 */
	public function grNum($standard){
//		$query = $this->db->query("SELECT MAX(`gr_num`) as gr_num FROM `student` WHERE `std`= 'std1'");
		$this->db->select('MAX(`gr_num`) as gr_num');
		$this->db->from('student');
		if($standard != '')
			$this->db->where('std',$standard);

		$query = $this->db->get();
		$data = $query->result_array();

		if ($query->num_rows() > 0)
		{
			$result = $query->first_row('array');
			return $result;
		}
		else
			return false;

	}
}