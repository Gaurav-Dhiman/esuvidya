<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
		
	/**
	 * Default Constructor
	 */
	function __construct(){
		parent::__construct();
		
		$this->load->model('model_user');	
		$this->load->library('datatables');	 
	}	

	/**
	 * @author Gaurav Dhiman.
	 * @method index	
	 */
	public function index()
	{		
		$this->load->view('admin/others/login');
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Add User	
	 */
	public function add_user()
	{
		
		//pre_print($_POST);
		
		if(isset($_POST['submit']) && !empty($_POST)):
			//
			$arrData = array();
			$arrData = copy_posted($arrData,array('fullname','username','password','email','gender','user_type'));
			$arrData['created'] = date('y-m-d H:i:s');
			$arrData['modified'] = date('y-m-d H:i:s'); 
			$arrData['password'] = md5($arrData['password']);
			
			$response = $this->model_user->insert_new_user($arrData);
			if($response > 0):
				redirect('user/listing');
			else:
				superadmin_view('add_user');
			endif;
		else:
			superadmin_view('add_user');			
		endif;
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method edit	
	 */
	public function edit_user($user_id)
	{
		
		if(isset($_POST['submit']) && !empty($_POST)):
			//
			$arrData = array();
			$arrData = copy_posted($arrData,array('fullname','username','password','email','gender','user_type'));			
			$arrData['modified'] = date('y-m-d H:i:s'); 
			$arrData['password'] = md5($arrData['password']);
			//pre_print($arrData);
			$response = $this->model_user->update_user($user_id,$arrData);
			if($response > 0):
				redirect('user/listing');
			else:
				superadmin_view('edit_user');
			endif;
		else:
			$arrData['user_details'] = $this->model_user->get_user($user_id);
			//pre_print($arrData);
			superadmin_view('edit_user',$arrData);			
		endif;
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method delete	
	 */
	public function delete_user($user_id)
	{
		$this->model_user->delete_user($user_id);
		redirect('user/listing');
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method listing	
	 */
	public function listing()
	{
				
		superadmin_view('user_listing');
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function	
	 */
	function ajax_datatable_user_list(){
		
		echo $this->model_user->ajax_user_list();
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method forget_password	
	 */
	public function forget_password()
	{
		
		pre_print($_POST);
		$this->load->view('admin/others/login');
	}
	
}
