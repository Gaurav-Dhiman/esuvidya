<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
		
	/**
	 * Default Constructor
	 */
	function __construct(){
		parent::__construct();	
		$this->load->model('model_student');	
		$this->load->library('datatables');		
	}	

	/**
	 * @author Gaurav Dhiman.
	 * @method index	
	 */
	public function index()
	{
		//pre_print('herhe');
		superadmin_view('student');
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method add	
	 */
	public function add()
	{
		if(isset($_POST['submit']) && !empty($_POST)){
			//pre_print($_POST);
			$arrData = array();
			$arrData = copy_posted($arrData,
							array(
								'std','stream','division','semester','admit_to','medium','fname','mname','lname','father_mname',
								'father_qualification','father_occupation','father_pq','father_mobile','father_ofc_num','father_ofc_name',
								'adrs_father_ofc','father_email','father_aadhar','father_ai','father_pan','mother_fname','mother_qualification',
								'mother_occupation','mother_pq','mother_mobile','mother_ofc_num','mother_ofc_name','adrs_mother_ofc',
								'mother_email','mother_aadhar','mother_ai','mother_pan','is_divorced','is_adopted','sibbling1','sibbling2','sibbling3',								
								'adrs_residence','adrs_native','city','pincode','district','birth_place','alt_phone','gender','religion',
								'caste','s_caste','weight','height','birth_date','admission_date','fee_scheme','start_std','blood_grp',
								'status','mother_tongue','nationality','near_rly_stn','seat_num','child_num','passed_out'
								,'last_percentage','handicap','nss','leaving_date'		
							)
						);

			if($_FILES['image']['name']){

				$file_path = 'assets/media/students_images';
				image_upload_config($this,$file_path,array("max_width"=>870,"max_height"=>500,"allowed_types"=>'png|gif|jpg|jpeg'));
				if($this->upload->do_upload('image')){												
					$f_data = $this->upload->data();
					$arrData['image_path'] = $file_path.'/'.$f_data['file_name'];
				}else{
					pre_print($this->upload->display_errors());
					$arrData['error'] = $this->upload->display_errors();
				}
					
			}

			if(empty($arrData['error'])){	
															
				$arrData['created'] = date('y-m-d H:i:s');
				$arrData['modified'] = date('y-m-d H:i:s');
				$arrData['updated_by'] = "Gaurav Dhiman";					
				$arrData['gr_num'] = "egd01";
				$arrData['roll_num'] = "02";
				$arrData['admit_to'] = date('Y-m-d H:i:s',strtotime($arrData['admit_to']));
				$arrData['birth_date'] = date('Y-m-d H:i:s',strtotime($arrData['birth_date']));
				$arrData['admission_date'] = date('Y-m-d H:i:s',strtotime($arrData['admission_date']));

				$bday = new DateTime($arrData['birth_date']);
				$today = new DateTime(date('F.j.Y', time())); 
				$diff = $today->diff($bday);
				
				$arrData['age'] = $diff->y;

				//pre_print($arrData);

				$response = $this->model_student->insert_new_student($arrData);
				//pre_print($response);			
				if($response){												
					$this->session->set_flashdata('success_msg', 'A Contributor published successfully.');
					redirect('student/listing');						
				}else{
					pre_print('here');
					$this->session->set_flashdata('error_msg', 'Something Went Wrong Please Try Again.');
					superadmin_view('student/new_add_student');
				}				
			}else {
				superadmin_view('student/add_student');			
			}
		}else{
			superadmin_view('student/add_student');
		}
		
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method edit student	
	 */
	public function edit($stud_id)
	{
		if(isset($_POST['submit']) && !empty($_POST)):
			//
			$arrData = array();
			$arrData = copy_posted($arrData,
							array(
								'std','stream','division','semester','admit_to','medium','fname','mname','lname','father_mname',
								'father_qualification','father_occupation','father_pq','father_mobile','father_ofc_num','father_ofc_name',
								'adrs_father_ofc','father_email','father_aadhar','father_ai','father_pan','mother_fname','mother_qualification',
								'mother_occupation','mother_pq','mother_mobile','mother_ofc_num','mother_ofc_name','adrs_mother_ofc',
								'mother_email','mother_aadhar','mother_ai','mother_pan','is_divorced','is_adopted','sibbling1','sibbling2','sibbling3',								
								'adrs_residence','adrs_native','city','pincode','district','birth_place','alt_phone','gender','religion',
								'caste','s_caste','weight','height','birth_date','admission_date','fee_scheme','start_std','blood_grp',
								'status','mother_tongue','nationality','near_rly_stn','seat_num','child_num','passed_out'
								,'last_percentage','handicap','nss','leaving_date'	
							)
						);			
			$arrData['modified'] = date('y-m-d H:i:s');
			$arrData['updated_by'] = "Gaurav Dhiman";
			$arrData['admit_to'] = date('Y-m-d H:i:s',strtotime($arrData['admit_to']));
			$arrData['birth_date'] = date('Y-m-d H:i:s',strtotime($arrData['birth_date']));
			$arrData['admission_date'] = date('Y-m-d H:i:s',strtotime($arrData['admission_date']));
			//pre_print($arrData);
			$response = $this->model_student->update_student($stud_id,$arrData);
			pre_print($response);
			if($response > 0):
				redirect('student/listing');
			else:
				$arrData['student_details'] = $this->model_student->get_student($stud_id);
				//pre_print($arrData);
				superadmin_view('student/edit_student',$arrData);
			endif;
		else:
			$arrData['student_details'] = $this->model_student->get_student($stud_id);
			//pre_print($arrData);
			superadmin_view('student/edit_student',$arrData);			
		endif;
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method delete student
	 */
	public function delete($stud_id)
	{
		//pre_print($_POST);
		superadmin_view('student/student_listing');
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method listing	
	 */
	public function listing()
	{
				
		superadmin_view('student/student_listing');
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function	
	 */
	function ajax_datatable_student_list(){
		
		echo $this->model_student->ajax_student_list();
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method view function	
	 */
	public function view($stud_id){
				
		if(!empty($stud_id)):
			$arrData = array();
			$arrData['student_details'] = $this->model_student->get_student($stud_id);
			if(!empty($arrData['student_details'])):
				superadmin_view('student/view_student',$arrData);
			else:
				redirect('student/student_listing');
			endif;	
		else:
			redirect('student/student_listing');
		endif;	
						
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method new student listing	
	 */
	public function new_student_listing()
	{
		if(isset($_POST['submit']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){
			//pre_print($_POST);
			$newdata = array(
					'start_date' => $_POST['start_date'],
					'end_date' => $_POST['end_date'],
			);
			$this->session->set_userdata($newdata);
			$arrData['date'] = true;
			superadmin_view('student/new_student_listing',$arrData);
		}else{
			$arrData['date'] = false;
			superadmin_view('student/new_student_listing',$arrData);
		}
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for new student listing
	 */
	function ajax_datatable_new_student_list(){
		
		echo $this->model_student->ajax_new_student_list();
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method student by caste listing
	 */
	public function student_by_caste_listing()
	{
		if(isset($_POST['submit']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){
			//pre_print($_POST);
			$newdata = array(
					'start_date' => $_POST['start_date'],
					'end_date' => $_POST['end_date'],
			);
			$this->session->set_userdata($newdata);
			$arrData['date'] = true;
			superadmin_view('student/student_by_caste_listing',$arrData);
		}else{
			$arrData['date'] = false;
			superadmin_view('student/student_by_caste_listing',$arrData);
		}
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for student by caste listing
	 */
	function ajax_datatable_student_by_caste_list(){
		
		echo $this->model_student->ajax_student_by_caste_list();  
		
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method student by age listing
	 */
	public function student_by_age_listing()
	{
		if(isset($_POST['submit']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){
			//pre_print($_POST);
			$newdata = array(
					'start_date' => $_POST['start_date'],
					'end_date' => $_POST['end_date'],
			);
			$this->session->set_userdata($newdata);
			$arrData['date'] = true;
			superadmin_view('student/student_by_age_listing',$arrData);
		}else{
			$arrData['date'] = false;
			superadmin_view('student/student_by_age_listing',$arrData);
		}		
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for student by age listing
	 */
	function ajax_datatable_student_by_age_list(){
		
		echo $this->model_student->ajax_student_by_age_list();  
		
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method student by Birthday listing
	 */
	public function student_by_birthday_listing()
	{
		if(isset($_POST['submit']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){
			//pre_print($_POST);
			$newdata = array(
					'start_date' => $_POST['start_date'],
					'end_date' => $_POST['end_date'],
			);
			$this->session->set_userdata($newdata);
			$arrData['date'] = true;
			superadmin_view('student/student_by_birthday_listing',$arrData);
		}else{
			$arrData['date'] = false;
			superadmin_view('student/student_by_birthday_listing',$arrData);
		}				
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for student by Birthday listing
	 */
	function ajax_datatable_student_by_birthday_list(){
		
		echo $this->model_student->ajax_student_by_birthday_list();  
		
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method student by Birthday listing
	 */
	public function student_by_class_listing()
	{
		if(isset($_POST['submit']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){
			//pre_print($_POST);
			$newdata = array(
					'start_date' => $_POST['start_date'],
					'end_date' => $_POST['end_date'],
			);
			$this->session->set_userdata($newdata);
			$arrData['date'] = true;
			superadmin_view('student/student_by_class_listing',$arrData);
		}else{
			$arrData['date'] = false;
			superadmin_view('student/student_by_class_listing',$arrData);
		}
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for student by class listing
	 */
	function ajax_datatable_student_by_class_list(){
		
		echo $this->model_student->ajax_student_by_class_list();  
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method student left listing
	 */
	public function left_student_listing()
	{
		if(isset($_POST['submit']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){
			//pre_print($_POST);
			$newdata = array(
					'start_date' => $_POST['start_date'],
					'end_date' => $_POST['end_date'],
			);
			$this->session->set_userdata($newdata);
			$arrData['date'] = true;
			superadmin_view('student/student_left_listing',$arrData);
		}else{
			$arrData['date'] = false;
			superadmin_view('student/student_left_listing',$arrData);
		}		
	}
	
	
	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for student left listing
	 */
	function ajax_datatable_student_left_list(){
		
		echo $this->model_student->ajax_student_left_list();  
		
	}


	/**
	 * @author Gaurav Dhiman.
	 * @method Bonefide 
	 */
	public function bonafide($student_id)
	{
		if($student_id){			
			$arrData['student'] = $this->model_student->get_student($student_id);
			superadmin_view('student/bonafide',$arrData);
		}
	}

	/**
	 * @author Gaurav Dhiman.
	 * @method student list for bonafide 
	 */
	public function select_student()
	{
		superadmin_view('student/select_student_bonafide');		
	}

	/**
	 * @author Gaurav Dhiman.
	 * @method Datatable function for student listing for bonafide
	 */
	function ajax_datatable_student_list_bonafide(){
		
		echo $this->model_student->ajax_student_list_bonafide();  
		
	}
	
	/**
	 * @author Gaurav Dhiman.
	 * @method student by Birthday listing
	 */
	public function leaving_certificate()
	{
				
		superadmin_view('student/leaving_certificate');
	}
	
	
	
}
