<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {		
			
	/**
	 * Default Constructor
	 */
	function __construct(){
		parent::__construct();		
	}	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method index	
	 */
	public function index()
	{
		//pre_print($this->session->all_userdata());
		
		admin_view('admin');
	}
	
}
