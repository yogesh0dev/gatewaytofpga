<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Trainers extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Trainers_model');
		$this->load->model('Category_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
		$this->load->model('Certifications_model');
		//check user level
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='student'){
	        redirect(site_url());
	    }
    } 

    /*
     * Listing of trainers
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('trainers/index?');
        $config['total_rows'] = $this->Trainers_model->get_all_trainers_count();
        $this->pagination->initialize($config);

        $data['trainers'] = $this->Trainers_model->get_all_trainers($params);
        
        $data['_view'] = 'trainers/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new trainers ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');

		//
		
		
		if($this->form_validation->run())     
        {   
            $params = array(
				//
				
            );
            $params=$this->security->xss_clean($params);
            $trainers_id = $this->Trainers_model->add_trainers($params);
            redirect('trainers/index');
        }
        else
        {       
			
			
				
            $data['_view'] = 'trainers/add';
            $this->load->view('layouts/main2',$data);
        }
    } 
	
	
	

    /*
     * Editing a trainers
     */
    function edit($id)
    {   
        // check if the trainers exists before trying to edit it
        $data['trainers'] = $this->Trainers_model->get_trainers($id);
        
        if(isset($data['trainers']['id']))
        {
            $this->load->library('form_validation');

			//
			
		
			if($this->form_validation->run())     
            {   
                $params = array(
					//
					
                );
				$params=$this->security->xss_clean($params);
                $this->Trainers_model->update_trainers($id,$params);            
                redirect('trainers/index');
            }
            else
            {
                $data['_view'] = 'trainers/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The trainers you are trying to edit does not exist.');
    } 

    /*
     * Deleting trainers
     */
    function remove($id)
    {
        $trainers = $this->Trainers_model->get_trainers($id);

        // check if the trainers exists before trying to delete it
        if(isset($trainers['id']))
        {
            $this->Trainers_model->delete_trainers($id);
            redirect('trainers/index');
        }
        else
            show_error('The trainers you are trying to delete does not exist.');
    }
	
	public function dashboard()
	{
		$uid=$_SESSION['id'];

		$this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Users_model');
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_schedule/index?');
        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
        $this->pagination->initialize($config);
		

		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
		$data['page']="trainers";
		$data['_view'] = 'TeacherPanel/trainers_dashboard';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function trainers_rcard()
	{
		$uid=$_SESSION['id'];

		$this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Users_model');
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_schedule/index?');
        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
        $this->pagination->initialize($config);
		

		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
		$data['page']="trainers";
		$data['_view'] = 'TeacherPanel/trainers_rcard';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	 public function all_courses()
	{
		
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_schedule/index?');
        $config['total_rows'] = $this->Courses_model->get_all_courses_count();
        $this->pagination->initialize($config);
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
		$data['courses'] = $this->Courses_model->get_courses_all_info($params);
		$data['page']="trainers";
		$data['_view'] = 'TeacherPanel/trainers_all_courses';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function trainers_help()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Help_model');
		$data['page'] = 'trainers';
		
		$data['myhelp'] = $this->Help_model->get_all_help_tlist($uid);
		$data['_view'] = 'TeacherPanel/trainers_help';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function trainers_leave_testimony()
	{
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$this->load->model('Courses_model');
		$data['mycourses'] = $this->Courses_model->get_courses_all_bytid_list();
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
		$data['_view'] = 'TeacherPanel/trainers_leave_testimony';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function trainers_testimonials()
	{
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$this->load->model('Testimony_model');
		$this->load->model('Courses_model');
		$this->load->model('Users_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('testimony/index?');
        $config['total_rows'] = $this->Testimony_model->get_all_testimony_count();
        $this->pagination->initialize($config);

        $data['testimony'] = $this->Testimony_model->get_all_testimony($params);

		$data['_view'] = 'TeacherPanel/trainers_testimonials';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function trainers_payment()
	{
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$this->load->model('Payments_model');
		$this->load->model('Courses_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('testimony/index?');
        $config['total_rows'] = $this->Payments_model->get_all_payments_count();
        $this->pagination->initialize($config);
        $data['payments'] = $this->Payments_model->get_all_payments($params);
		$data['_view'] = 'TeacherPanel/trainers_payment';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function trainers_edit_profile()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='student'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$this->load->model('Users_model');
        $data['userinfo'] = $this->Users_model->get_users($uid);
		$data['_view'] = 'TeacherPanel/trainers_edit_profile';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function trainers_courses()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Courses_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $this->pagination->initialize($config);

        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
		

		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
        
		$data['page'] = 'trainers';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'TeacherPanel/trainers_courses';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function trainers_material()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Courses_model');
		$this->load->model('Course_material_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $this->pagination->initialize($config);

        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id_distinct($uid,$params);
		
		$data['page'] = 'trainers';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'TeacherPanel/trainers_material';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function trainers_assignments()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Courses_model');
		$this->load->model('Assignments_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $this->pagination->initialize($config);

        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
        
		$data['page'] = 'trainers';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'TeacherPanel/trainers_assignments';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function trainers_certificate()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Courses_model');
		$this->load->model('Certifications_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $config['total_rows'] = $this->Courses_model->get_courses_all_bytid_count($uid);
        $this->pagination->initialize($config);

        $data['mycourses'] = $this->Courses_model->get_courses_all_bytid($uid,$params);
        
		$data['page'] = 'trainers';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'TeacherPanel/trainers_certificate';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function trainers_test()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Courses_model');
		$this->load->model('Tests_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $this->pagination->initialize($config);

        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
        
		$data['page'] = 'trainers';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'TeacherPanel/trainers_test';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function trainers_student()
	{
		$uid=$_SESSION['id'];
		$this->load->model('Trainers_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Users_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('trainers/index?');
        $this->pagination->initialize($config);

        $config['total_rows'] = $this->Course_schedule_model->get_courses_schedule_count($uid);
		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
        
		$data['page'] = 'trainers';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'TeacherPanel/trainers_student';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function add_assignments(){
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
		$data['_view'] = 'TeacherPanel/trainers_addassignment';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function add_test(){
		$this->load->model('Tests_model');
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$data['batches'] = $this->Course_schedule_model->get_all_course_schedule_id($uid,$params);
		$data['_view'] = 'TeacherPanel/trainers_addtest';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function trainers_help_reply($id){
		$this->load->model('Help_model');
		$this->load->model('Batch_student_model');
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$data['pid'] = $id;
		
		// check if the help exists before trying to edit it
        $data['help'] = $this->Help_model->get_help($id);
		$data['_view'] = 'TeacherPanel/trainers_help_reply';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function attendace($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Attendance_model');
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$data['pid'] = $id;
		$data['batches']= $this->Course_schedule_model->get_course_schedule($id);
		$data['_view'] = 'TeacherPanel/attendance';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function marks($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Marks_model');
		$this->load->model('Courses_model');
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$data['pid'] = $id;
		$data['batches']= $this->Course_schedule_model->get_course_schedule($id);
		$data['courses']= $this->Courses_model->get_courses($data['batches']['course_id']);
		
		
		$data['_view'] = 'TeacherPanel/marks';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function assignments($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Assign_model');
		$uid=$_SESSION['id'];
		$data['page'] = 'trainers';
		$data['pid'] = $id;
		$data['batches']= $this->Course_schedule_model->get_course_schedule($id);
		$data['courses']= $this->Courses_model->get_courses($data['batches']['course_id']);
		
		$data['_view'] = 'TeacherPanel/assignments';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function sattendace($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Attendance_model');
		$uid=$_SESSION['id'];
		$data['pid'] = $id;
		$sid=$_POST['st'];
		
		$sid= count($sid);
		for($k=0;$k<$sid;$k++){
			$params = array(
					'course_id' => $_POST['courseid'],
					'studentid' => $_POST['st'][$k],
					'trainerid' => $uid,
					'batch' => $_POST['batchid'],
					'attendence' =>'1',
					'day' => date('l'),
					'adate' => date("Y-m-d H:i:s"),
					'sbcid' => '#'.date('ymd').$_POST['st'][$k].$_POST['batchid'].$_POST['courseid']
                );
			$params=$this->security->xss_clean($params);
			if($this->Attendance_model->add_attendance($params)){
				$ty= '1';
			}
			
		}
		if($ty!=''){
			echo '1';
		}else{
				echo "Looks like an error. Please submit form again";
			}
	}
	
	
	
	public function sassignments($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Attendance_model');
		$this->load->model('Assign_model');
		$uid=$_SESSION['id'];
		$data['pid'] = $id;
		$sid=$_POST['st'];
		$m=$_POST['m'];
		$sid= count($sid);
		for($k=0;$k<$sid;$k++){
			$params = array(
					'course_id' => $_POST['courseid'],
					'studentid' => $_POST['st'][$k],
					'trainerid' => $uid,
					'batch' => $_POST['batchid'],
					'assignments' => $_POST['m'][$k],
					'sbcid' => '#'.$_POST['st'][$k].$_POST['batchid'].$_POST['courseid']
                );
			$params=$this->security->xss_clean($params);
			if($this->Assign_model->add_assign($params)){
				$ty= '1';
			}
			
		}
		if($ty!=''){
			echo '1';
		}else{
				echo "Looks like an error. Please submit form again";
			}
	}
	
	
	public function smarks($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Attendance_model');
		$this->load->model('Marks_model');
		$uid=$_SESSION['id'];
		$data['pid'] = $id;
		$sid=$_POST['st'];
		$m=$_POST['m'];
		$sid= count($sid);
		for($k=0;$k<$sid;$k++){
			$params = array(
					'course_id' => $_POST['courseid'],
					'studentid' => $_POST['st'][$k],
					'trainerid' => $uid,
					'batch' => $_POST['batchid'],
					'marks' => $_POST['m'][$k],
					'sbcid' => '#'.$_POST['st'][$k].$_POST['batchid'].$_POST['courseid']
                );
			$params=$this->security->xss_clean($params);
			if($this->Marks_model->add_marks($params)){
				$ty= '1';
			}
			
		}
		if($ty!=''){
			echo '1';
		}else{
				echo "Looks like an error. Please submit form again";
			}
	}
	
	
	
	
	
	public function gcertificate($id){
		$this->load->model('Users_model');
		$this->load->model('Batch_student_model');
		$this->load->model('Attendance_model');
		$uid=$_SESSION['id'];
		$data['pid'] = $id;
		$sid=$_POST['st'];
			$b= $this->Course_schedule_model->get_course_schedule($id);
			$s=explode(',',$b['student']);
		foreach($s as $st){
			$uniqueid='#'.$b['course_id'].$id.$st.$uid;
			$xc= $this->Certifications_model->get_certifications_uniqueid($uniqueid);
			
			if($xc)
			{
				continue;
			}
			$params = array(
					'course_id' => $b['course_id'],
					'batch_id' => $id,
					'sid' => $st,
					'tid' => $uid,
					'uniqueid' => $uniqueid,
                );
			$params=$this->security->xss_clean($params);
			if($this->Certifications_model->add_certifications($params)){
				$ty= '1';
			}
			
		}
		if($ty!=''){
				$this->session->set_flashdata('success_message', 'Certificates created successfully!');
				redirect($_SERVER['HTTP_REFERER']);
				
		}else{
				$this->session->set_flashdata('flash_message', 'Certificate for this BATCH is already created, please contact admin for further queries.!');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	
	
	
	
    
}