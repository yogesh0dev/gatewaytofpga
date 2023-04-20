<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */ 
 
class Course_schedule extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
        $this->load->model('Users_model');
        $this->load->model('Curriculam_model');
        	$this->load->model('Category_model');
		$data = $this->session->userdata;
		if($data['role']!='admin'){
				redirect(site_url().'signup');
			}
		} 

    /*
     * Listing of course_schedule
     */
    function index()
    { 
        
        $data['course_schedule'] = $this->Course_schedule_model->get_all_course_schedule();
        
        $data['_view'] = 'course_schedule/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new course_schedule ffffff
     */
    function add()
    {   
		$this->load->library('form_validation');
		//
		$this->form_validation->set_rules('categ','Category','trim|required|max_length[10]');
		$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
		$this->form_validation->set_rules('bdate','Bdate','trim|required|max_length[10]');
		$this->form_validation->set_rules('batch_name','Module_name','trim|required|max_length[255]');
		$this->form_validation->set_rules('weekdays','WeekDays','trim|required|max_length[255]');
		$this->form_validation->set_rules('weekends','WeekEnds','trim|required|max_length[255]');
		$k=0;
		$s=''; 
		
		if($this->form_validation->run())     
        {   
			if(is_array($_POST['students'])){
				$count=count($_POST['students']);
				for($k;$k<$count;$k++){
						$s.=$_POST['students'][$k].',';
					}
					$s = rtrim($s, " ,");
			}else{
				$s = '';
			}
            $params = array(
				//
				'categ' => $this->input->post('categ'),
				'course_id' => $this->input->post('course_id'),
				'tid' => $this->input->post('tid'),
				'bdate' => $this->input->post('bdate'),
				'batch_name' => $this->input->post('batch_name'),
				'weekdays' => $this->input->post('weekdays'),
				'weekends' => $this->input->post('weekends'),
				'student' => $s
            ); 
			
            $params=$this->security->xss_clean($params);
            $course_schedule_id = $this->Course_schedule_model->add_course_schedule($params);
			//echo '1';
            redirect('course_schedule');
        }
        else
        {       
			$data['category'] = $this->Category_model->get_all_category();
			$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
			
				
            $data['_view'] = 'course_schedule/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a course_schedule
     */
    function edit($id)
    {   
        // check if the course_schedule exists before trying to edit it
        $data['course_schedule'] = $this->Course_schedule_model->get_course_schedule($id);
        
        if(isset($data['course_schedule']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('categ','Category','trim|required|max_length[10]');
			$this->form_validation->set_rules('course_id','Course Name','trim|required|max_length[10]');
			$this->form_validation->set_rules('bdate','Batch Date','trim|required|max_length[10]');
			$this->form_validation->set_rules('batch_name','Batch Name','trim|required|max_length[255]');
			$k=0;
			$s='';
			if($_POST){
				$count=count($_POST['students']);
				for($k;$k<$count;$k++){
					$s.=$_POST['students'][$k].',';
				}
				$s = rtrim($s, " ,");
			}
		
			if($this->form_validation->run())     
            {   
                $params = array(
					//
					'categ' => $this->input->post('categ'),
					'course_id' => $this->input->post('course_id'),
					'tid' => $this->input->post('tid'),
					'bdate' => $this->input->post('bdate'),
					'batch_name' => $this->input->post('batch_name'),
					'weekends' => $this->input->post('weekdays'),
					'weekdays' => $this->input->post('batch_name'),
					'student' => $s

                );
				$params=$this->security->xss_clean($params);
                $this->Course_schedule_model->update_course_schedule($id,$params);            
                redirect('course_schedule/index');
            }
            else
            {
			
			$data['category'] = $this->Category_model->get_all_category();
			$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
                $data['_view'] = 'course_schedule/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The course_schedule you are trying to edit does not exist.');
    } 

    /*
     * Deleting course_schedule
     */
    function remove($id)
    {
        $course_schedule = $this->Course_schedule_model->get_course_schedule($id);

        // check if the course_schedule exists before trying to delete it
        if(isset($course_schedule['id']))
        {
            $this->Course_schedule_model->delete_course_schedule($id);
            redirect('course_schedule/index');
        }
        else
            show_error('The course_schedule you are trying to delete does not exist.');
    }
    
}