<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	 
	function __construct()
    {
        parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
		$this->load->model('Mycourses_model');
		//check user level
    }	
	public function index()
	{
		
	}
	
	public function dashboard()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];

		$this->load->model('Videos_model');
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_schedule/index?');
        $config['total_rows'] = $this->Mycourses_model->get_all_mycourses_count();
        $this->pagination->initialize($config);
		

		$data['rcateg'] = $this->Category_model->get_rand_list('5');
        $data['catregr'] = $this->Category_model->get_rand_list('10');
		$data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid,$params);
		$data['courses'] = $this->Courses_model->get_courses_all_info($params);
		$data['course_schedule'] = $this->Course_schedule_model->get_all_course_schedule_upcoming();
		$data['videos'] = $this->Videos_model->get_videoss('3');
		$data['page']="student";
		$data['_view'] = 'StudentPanel/student_dashboard';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	 public function all_courses()
	{
		
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_schedule/index?');
        $config['total_rows'] = $this->Courses_model->get_all_courses_count();
        $this->pagination->initialize($config);
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
		$data['courses'] = $this->Courses_model->get_courses_all_info($params);
		$data['course_schedule'] = $this->Course_schedule_model->get_all_course_schedule();
		$data['page']="student";
		$data['_view'] = 'StudentPanel/student_all_courses';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function student_help()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
		
		$data['batches'] = $this->Course_schedule_model->get_batch_list();
        $data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
		$data['_view'] = 'StudentPanel/student_help';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function srcard()
	{  
		$this->load->model('Attendance_model');
		$this->load->model('Marks_model');
		$this->load->model('Assign_model');
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
		$uid=$_SESSION['id'];
        $data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid);
		$data['batches'] = $this->Course_schedule_model->get_batch_list();
        $data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
		$data['_view'] = 'StudentPanel/srcard';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function student_leave_testimony()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
		$data['batches'] = $this->Course_schedule_model->get_batch_list();
		$data['mycourses'] = $this->Mycourses_model->get_all_mycourses_list();
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
		$data['_view'] = 'StudentPanel/student_leave_testimony';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function student_testimonials()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
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

		$data['_view'] = 'StudentPanel/student_testimonials';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function student_payment()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
		$this->load->model('Payments_model');
		$this->load->model('Courses_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('testimony/index?');
        $config['total_rows'] = $this->Payments_model->get_all_payments_count();
        $this->pagination->initialize($config);
        $data['payments'] = $this->Payments_model->get_all_payments($params);
		$data['_view'] = 'StudentPanel/student_payment';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function student_edit_profile()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
		$this->load->model('Users_model');
        $data['userinfo'] = $this->Users_model->get_users($uid);
		$data['_view'] = 'StudentPanel/student_edit_profile';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	
	public function studentdocs($folder,$filename)
	{
		
		$d=str_replace("-----","=",$filename);
		$d=str_replace("----","+",$d);
		$d=str_replace("---","-",$d);
		$d=str_replace("--","/",$d);
		$filename=str_replace("-"," ",$d); 
		
		$path = site_url()."/uploads/".$folder."/"; // change the path to fit your websites document structure
	
		$ciphering = "AES-128-CTR";
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "infotonicsMedia";

		$decrypted=openssl_decrypt ($filename, $ciphering,
				$encryption_key, $options, $encryption_iv);

		$fullPath = $path.$decrypted;

		$data['page'] = 'student';
        $data['docview'] = $fullPath;
		// $data['_view'] = '';
        $this->load->view('StudentPanel/student_docs',$data);
	}
	
	
	
	public function student_edits()
	{
	
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$this->load->model('Users_model');
		$this->load->library('form_validation');
		//=&=&=&=&dob=&=&=&=&=&=
		$this->form_validation->set_rules('first_name','First Name','trim|required|max_length[255]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|max_length[255]');
		$this->form_validation->set_rules('phone','Phone','trim|required|max_length[255]');
		$this->form_validation->set_rules('email','Email','trim|required|max_length[255]');
		$this->form_validation->set_rules('state','State','trim|required|max_length[255]');
		$this->form_validation->set_rules('caddress','Contact Address','trim|required|max_length[255]');
		$this->form_validation->set_rules('paddress','Permanent Address','trim|required|max_length[255]');
		$this->form_validation->set_rules('city','City','trim|required|max_length[255]');
		$this->form_validation->set_rules('pincode','Pincode','trim|required|max_length[255]');
		
		if($this->form_validation->run())     
        {   
			$date=date_create($this->input->post('dob'));
			$rdate=date_format($date,"Y-m-d");
			
            $params = array(
				// =&=&=&=&=&=&=&=&=&=
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'dob' => $rdate,
				'state' => $this->input->post('state'),
				'caddress' => $this->input->post('caddress'),
				'paddress' => $this->input->post('paddress'),
				'city' => $this->input->post('city'),
				'pincode' => $this->input->post('pincode'),
				
			);
			$params=$this->security->xss_clean($params);
			
            if($this->Users_model->update_users($uid,$params)){
				echo '1';exit();
			}
		}else{exit();
			var_dump(validation_errors());
		}
	}
	
	public function student_courses()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$this->load->model('Course_schedule_model');
		$this->load->model('Course_info_model');
		
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $config['total_rows'] = $this->Mycourses_model->get_all_mycourses_count();
        $this->pagination->initialize($config);
		$uid=$_SESSION['id'];
        $data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid,$params);
        
		$data['page'] = 'student';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'StudentPanel/student_courses';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function student_material()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		
		$this->load->model('Course_material_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $config['total_rows'] = $this->Mycourses_model->get_all_mycourses_count();
        $this->pagination->initialize($config);

        $data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid,$params);
      
		$data['page'] = 'student';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'StudentPanel/student_material';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function student_assignments()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		
		$this->load->model('Assignments_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $config['total_rows'] = $this->Mycourses_model->get_all_mycourses_count();
        $this->pagination->initialize($config);

        $data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid,$params);
        
		$data['page'] = 'student';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'StudentPanel/student_assignments';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function student_certificate()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		
		$this->load->model('Certifications_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Certifications_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $config['total_rows'] = $this->Mycourses_model->get_all_mycourses_count();
        $this->pagination->initialize($config);

        $data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid,$params);
        
		$data['page'] = 'student';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'StudentPanel/student_certificate';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function student_test()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		
		$this->load->model('Tests_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mycourses/index?');
        $config['total_rows'] = $this->Mycourses_model->get_all_mycourses_count();
        $this->pagination->initialize($config);

        $data['mycourses'] = $this->Mycourses_model->get_all_mycourses($uid,$params);
        
		$data['page'] = 'student';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'StudentPanel/student_test';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function student_trainer()
	{
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$uid=$_SESSION['id'];
		$this->load->model('Trainers_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('trainers/index?');
        $config['total_rows'] = $this->Trainers_model->get_all_trainers_count();
        $this->pagination->initialize($config);

        $data['trainers'] = $this->Trainers_model->get_all_trainers($params);
        
		$data['page'] = 'student';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$data['catregr'] = $this->Category_model->get_rand_list('25');
        
		$data['_view'] = 'StudentPanel/student_trainer';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function add_to_courses($buyid)
	 {
		 $data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
			$this->load->model('Courses_model');
			$ryu=explode('-',$buyid);
			$batch=$ryu[0];// batch id
			$buyid=$ryu[1];// course id
			$cname=$this->Courses_model->get_courses($buyid);
			$params = array(
				//
				'course_id' => $buyid,
				'studentid' => $_SESSION['id'],
				'batch_id' => $batch,
				'completed' => '0',
				'cidsid' => '#'.$buyid.$batch.$_SESSION['id'],

            );
            $params=$this->security->xss_clean($params);
            $mycourses_id = $this->Mycourses_model->add_mycourses($params);
			unset($_SESSION['buyid']);
			if($_SERVER['HTTP_REFERER']=='https://fpga.infotonicsmedia.com//course-details/test'){
				redirect('student-dashboard');
			}else{
				redirect($_SERVER['HTTP_REFERER']);
				
			}
		
	}
	
	public function helpsubmit(){
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$this->load->model('Help_model');
		$this->load->model('Batch_student_model');
		$this->load->library('form_validation');
		//
		$this->form_validation->set_rules('subject','Subject','trim|required|max_length[255]');
		$this->form_validation->set_rules('batch_id','Batch Name','trim|required|max_length[100]');
		$this->form_validation->set_rules('query','Query','trim|required');
		//course_id:10
		$bid=$this->Batch_student_model->get_batch_student($this->input->post('batch_id'));
		
		if($this->form_validation->run())     
        {   
            $params = array(
				// subject quest answer course_id 
				'subject' => $this->input->post('subject'),
				'batch_id' => $this->input->post('batch_id'),
				'course_id' => $this->input->post('course_id'),
				'quest' => $this->input->post('query'),
				'studentid' => $_SESSION['id'],
				'trainerid' => $bid['tid'],
			);
			$params=$this->security->xss_clean($params);
			//var_dump($params);exit();
            if($this->Help_model->add_help($params)){
				echo '1';
			}
		}else{
			echo validation_errors();
		}
            
	}
	public function gethelplist(){
	
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$this->load->model('Help_model');
		$uid=$_SESSION['id'];
		$data['page'] = 'student';
		
		$data['myhelp'] = $this->Help_model->get_all_help_list($uid);
		$data['_view'] = 'StudentPanel/student_helpllist';
        $this->load->view('FrontWebsite/layout/main',$data);
            
	}
	
	public function view_pdf($folder,$filename){
	
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
		$path = $_SERVER['DOCUMENT_ROOT']."/uploads/".$folder."/"; // change the path to fit your websites document structure
		$fullPath = $path.$filename;

		if ($fd = fopen ($fullPath, "r")) {
		$fsize = filesize($fullPath);
		$path_parts = pathinfo($fullPath);
		$ext = strtolower($path_parts["extension"]);
		switch ($ext) {
			case "pdf":
			header("Content-type: application/pdf"); // add here more headers for diff. extensions
			header("Content-Disposition: inline; filename=\"".$path_parts["basename"]."\"");     
			break;
			default;
			header("Content-type: application/octet-stream");
			header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
		}
		header("Content-length: $fsize");
		header("Cache-control: private"); //use this to open files directly
		while(!feof($fd)) {
			$buffer = fread($fd, 2048);
			echo $buffer;
		}
		}
		fclose ($fd);
		exit;

            
	} 

	function  pdfGet($try)
	{   
		//course_id-batch_id-sid-tid	uniqueid
		//11-33-32-5				     #1133325

		$this->load->model('Certifications_model');
		$this->load->model('Users_model');
		$uniqueid='#'.$try;
		$ye=$this->Certifications_model->get_certifications_uniqueid($uniqueid);
		$yer=$this->Courses_model->get_courses($ye['course_id']);
		$ber=$this->Course_schedule_model->get_course_schedule($ye['batch_id']);
		
		if($ye){
			if($ye['testi']==0){
				$this->session->set_flashdata('flash_message', 'To download your certificate, please leave testimonial for the course "<b>'.$yer['title'].'</b>" with batch name "'.$ber['batch_name'].'"!');
				redirect('student-leave-testimony');
			}
		}else{
			$this->session->set_flashdata('flash_message', 'Your certificate yet not been created, please connect with your Trainer!');
				redirect('student-certificate');
		}
		$yers=$this->Users_model->get_users($ye['sid']);
		$date=date_create($ye['created_on']);
		$date=date_format($date,"Y");
		$yrs=trim($yers['first_name'].' '.$yers['last_name']);
		// 2022-Suraj-Harichandan.pdf
		if(file_exists("./downloads/certificate/2022/2022-Suraj-Harichandan.pdf")){
			////////////////////////////
			
			header("Content-Type: application/octet-stream");
  
			$file ='./downloads/certificate/'.$date.'/'.str_replace(" ","-",$date.'-'.ucwords($yrs)).'.pdf';
			header("Content-Disposition: attachment; filename=" . urlencode($file));   
			header("Content-Type: application/download");
			header("Content-Description: File Transfer");            
			header("Content-Length: " . filesize($file));
			  
			flush(); // This doesn't really matter.
			  
			$fp = fopen($file, "r");
			while (!feof($fp)) {
				echo fread($fp, 65536);
				flush(); // This is essential for large downloads
			} 
			  
			fclose($fp); 
			
			////////////////////////////
		}else{
			$ctitle= $yer['title'];
			$this->pdfSave($yrs,$date,$ctitle);
			$data['view']=array('name' => $yrs, 'year' => $date, 'course_name' =>$ctitle);
			$this->load->view('../../certificate/template',$data);
		}
	}
	function pdfSave($yrs,$date,$ctitle)
	{   	
		$data['view']=array('name' => $yrs , 'year' => $date, 'course_name' => $ctitle);
		$this->load->view('../../certificate/template_save',$data);
	}
	
}
