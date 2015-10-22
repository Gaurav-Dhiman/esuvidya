<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller {

	/**
	 * Default Constructor
	 */
	function __construct(){
		parent::__construct();	
		$this->load->model('model_master');	
		$this->load->library('datatables');		
	}

	/**
	 * @author Gaurav Dhiman.
	 * @method Index 	
	 */
	public function index()
	{
		superadmin_view('masters');
	}



	/**
	 * @author Gaurav Dhiman.
	 * @method Add Section 	
	 */
	public function add_section()
	{
		if(isset($_POST['submit']) && !empty($_POST['code'])){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,array('code','name','start_std','end_std','header_name','only_fr_acc'));
			if($result = $this->model_master->insert_section($arrData)){
				//pre_print('success');
				$this->session->set_flashdata('success_msg', 'A Section Created successfully.');
				redirect('master/section_listing');
			}else{				
				$this->session->set_flashdata('success_msg', 'Something went wrong Please Try Again.');
				superadmin_view('masters/add_section');
			}
		}else{
			superadmin_view('masters/add_section');	
		}
		//pre_print('here');\
		
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Section Listing 	
	 */
	public function section_listing(){
		//pre_print('here');
		superadmin_view('masters/sections_listing');
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for section listing	
	 */
	function ajax_datatable_section_list(){
		
		echo $this->model_master->ajax_section_list();
		
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Edit Section 	
	 */
	public function edit_section($sec_id)
	{
		if(isset($_POST['submit']) && !empty($_POST['code'])){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,array('code','name','start_std','end_std','header_name','only_fr_acc'));
			if($result = $this->model_master->update_section($sec_id,$arrData)){
				//pre_print('success');
				$this->session->set_flashdata('success_msg', 'A Section Updated successfully.');
				redirect('master/section_listing');
			}else{				
				$this->session->set_flashdata('success_msg', 'Something went wrong Please Try Again.');
				superadmin_view('masters/edit_section');
			}
		}else{
			$arrData['section'] = $this->model_master->get_section($sec_id);
			//pre_print($arrData);
			superadmin_view('masters/edit_section',$arrData);	
		}
		//pre_print('here');\
		
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method delete section
	 */
	public function delete_section($sec_id)
	{
		$this->model_master->delete_section($sec_id);
		$this->session->set_flashdata('success_msg', 'A Section Deleted successfully.');
		redirect('master/section_listing');
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Add Standard	
	 */
	public function add_standard()
	{

		if(isset($_POST['submit']) && !empty($_POST['std'])){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,array('std_code','std','section','medium','best_age','next_std','default_fee_schemes','std_name','fractional_marks'));
			if($result = $this->model_master->insert_standard($arrData)){
				//pre_print('success');
				$this->session->set_flashdata('success_msg', 'A Standard Created successfully.');
				redirect('master/standard_listing');
			}else{				
				$this->session->set_flashdata('success_msg', 'Something went wrong Please Try Again.');
				superadmin_view('masters/add_standard');
			}
		}else{
			superadmin_view('masters/add_standard');	
		}				
	}

	/**
	 * @author Gaurav Dhiman.
	 * @method Standard Listing 	
	 */
	public function standard_listing(){
		//pre_print('here');
		superadmin_view('masters/standard_listing');
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for Standard Listing	
	 */
	function ajax_datatable_standard_list(){
		
		echo $this->model_master->ajax_standard_list();
		
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Edit Standard 	
	 */
	public function edit_standard($std_id)
	{
		if(isset($_POST['submit']) && !empty($_POST['std'])){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,array('std_code','std','section','medium','best_age','next_std','default_fee_schemes','std_name','fractional_marks'));
			if($result = $this->model_master->update_standard($std_id,$arrData)){
				//pre_print('success');
				$this->session->set_flashdata('success_msg', 'A Standard Updated successfully.');
				redirect('master/standard_listing');
			}else{				
				$arrData['standard'] = $this->model_master->get_standard($std_id);
				$this->session->set_flashdata('success_msg', 'Something went wrong Please Try Again.');
				superadmin_view('masters/edit_standard');
			}
		}else{
			$arrData['standard'] = $this->model_master->get_standard($std_id);
			//pre_print($arrData);
			superadmin_view('masters/edit_standard',$arrData);	
		}
		//pre_print('here');\
		
	}

/**
	 * @author Gaurav Dhiman.
	 * @method delete standard
	 */
	public function delete_standard($std_id)
	{
		$this->model_master->delete_standard($std_id);
		$this->session->set_flashdata('success_msg', 'A Standard Deleted successfully.');
		redirect('master/standard_listing');
	}



	/**
	 * @author Gaurav Dhiman.
	 * @method Add Division
	 */
	public function add_division()
	{

		if(isset($_POST['submit']) && !empty($_POST['std_code'])){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,array('std_code','division_name'));
			if($result = $this->model_master->insert_division($arrData)){
				//pre_print('success');
				$this->session->set_flashdata('success_msg', 'A Division Created successfully.');
				redirect('master/division_listing');
			}else{				
				$this->session->set_flashdata('success_msg', 'Something went wrong Please Try Again.');
				superadmin_view('masters/add_division');
			}
		}else{
			$arrData['standards'] = $this->model_master->get_all_standards();						
			superadmin_view('masters/add_division',$arrData);	
		}				
	}

	/**s
	 * @author Gaurav Dhiman.
	 * @method Division Listing 	
	 */
	public function division_listing(){
		//pre_print('here');
		superadmin_view('masters/division_listing');
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for Division Listing	
	 */
	function ajax_datatable_division_list(){
		
		echo $this->model_master->ajax_division_list();
		
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Edit Division 	
	 */
	public function edit_division($div_id)
	{
		if(isset($_POST['submit']) && !empty($_POST['std_code'])){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,array('std_code','division_name'));
			if($result = $this->model_master->update_division($div_id,$arrData)){
				//pre_print('success');
				$this->session->set_flashdata('success_msg', 'A division Updated successfully.');
				redirect('master/division_listing');
			}else{				
				$arrData['division'] = $this->model_master->get_division($std_id);
				$this->session->set_flashdata('success_msg', 'Something went wrong Please Try Again.');
				superadmin_view('masters/edit_division');
			}
		}else{
			$arrData = $this->model_master->get_division($div_id);
			$arrData['standards'] = $this->model_master->get_all_standards();
			//pre_print($arrData);
			superadmin_view('masters/edit_division',$arrData);	
		}
		//pre_print('here');\
		
	}

	/**
	 * @author Gaurav Dhiman.
	 * @method delete Division
	 */
	public function delete_division($div_id)
	{
		$this->model_master->delete_division($iv_id);
		$this->session->set_flashdata('success_msg', 'A division Deleted successfully.');
		redirect('master/division_listing');
	}	
}
