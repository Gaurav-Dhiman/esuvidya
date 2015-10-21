<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {		
			
	/**
	 * Default Constructor
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('model_standard');
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method index	
	 */
	public function index()
	{
		//pre_print($this->session->all_userdata());
		
		superadmin_view('superadmin');
	}

	/**
	 * @author Anksuh Joshi
	 * @method getStreams
	 */
	public function getStreams()
	{
		$std_code = $this->input->get();
		$streams = $this->model_standard->getStreams($std_code);
		$stream = array();
		if($streams) {
			foreach ($streams as $val) {
				if (is_array(($val))) {
					$stream[$val['stream_id']] = $val['stream_name'];
				}
			}
			echo json_encode($stream);
			exit;
		}
		$stream['status'] = false;
		echo json_encode($stream);
		exit;
	}
}
