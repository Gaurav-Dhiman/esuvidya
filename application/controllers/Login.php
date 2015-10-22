<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Default Constructor
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('model_login');

	}

	/**
	 * @author Gaurav Dhiman.
	 * @method index
	 */
	public function index()
	{

		//	pre_print($_POST);

		if(isset($_POST['submit']) && !empty($_POST)):
			$username = $_POST['username'];
			$password = $_POST['password'];
			$userResult = $this->model_login->check_login($username,$password);
			if(count($userResult) > 0 && $userResult != false)
			{
				if(ISSET($_POST['remember']))
				{
					$expire=time()+1209600;
					$newdata = array(
							'user_id'=> $userResult['user_id'],
							'username'  => $userResult['username'],
							'fullname' => $userResult['fullname'],
							'user_type' => $userResult['user_type'],
							'user_login_checked' => TRUE,
							'user_remember_checked' => TRUE
					);
				}
				else
				{
					$expire=0;
					$newdata = array(
							'user_id'=> $userResult['user_id'],
							'user_uid'  => $userResult['username'],
							'username' => $userResult['fullname'],
							'user_type' => $userResult['user_type'],
							'user_login_checked' => TRUE,
							'user_remember_checked' => FALSE
					);
				}
				setcookie("user_id", $userResult['user_id'],$expire,'/');
				$this->session->set_userdata($newdata);

				switch($this->session->userdata('user_type')):
					case 'superadmin':
						redirect('superadmin');
						break;
					case 'Admin':
						redirect('admin');
						break;
					case 'Teacher':
						redirect('teacher');
						break;
					case 'Account':
						redirect('account');
						break;
					case 'Parent':
						redirect('parent');
						break;
					case 'Student':
						redirect('student');
						break;
					case 'Accounts':
						redirect('accounts');
						break;
					echo "end";
				endswitch;

			}else{
				$this->session->set_flashdata('error', 'Incorrect Username or Password !!!');
				redirect('login');
			}
		else:
			if($this->session->userdata('user_login_checked') == true):
				switch($this->session->userdata('user_type')):
					case 'Superadmin':
						redirect('superadmin');
						break;
					case 'Admin':
						redirect('admin');
						break;
					case 'Teacher':
						redirect('teacher');
						break;
					case 'Account':
						redirect('account');
						break;
					case 'Parent':
						redirect('parent');
						break;
					case 'Student':
						redirect('student');
						break;
					case 'Accounts':
						redirect('accounts');
						break;
				endswitch;
			else:
				$this->load->view('site/others/login');
			endif;
		endif;

	}


	/**
	 * logout
	 *
	 * This is used to destroy session for logging out and redirected to login page.
	 *
	 * @author	Gaurav Dhiman
	 * @access	public
	 * @return	void
	 */
	function logout()
	{
		$exp = time()-500000;
		setcookie("admin_id", "",$exp,'/');
		$userResult=$this->model_login->get_user($this->session->userdata('user_id'));




		if($this->session->userdata('user_type') == "Amit Chu"){
			$this->session->sess_destroy();
			redirect('');
		}else {
			$this->session->sess_destroy();
			redirect('login');

		}


	}

}
