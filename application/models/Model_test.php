<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_test extends CI_Model{
	public function __construct(){
		parent::__contsruct();
	}	
	public function index(){
		return false;
	}
}

?>