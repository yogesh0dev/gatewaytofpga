<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Course_info extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_info_model');
		$this->load->model('Courses_model');
        $this->load->model('Users_model');
        $this->load->model('Curriculam_model');
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
    } 

    /*
     * Listing of course_info
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_info/index?');
        $config['total_rows'] = $this->Course_info_model->get_all_course_info_count();
        $this->pagination->initialize($config);

        $data['course_info'] = $this->Course_info_model->get_all_course_info($params);
        
        $data['_view'] = 'course_info/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new course_info ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');

		//
$this->form_validation->set_rules('course_id','Course Name','trim|required|max_length[255]');
		$this->form_validation->set_rules('course_duration','Course_duration','trim|required|max_length[255]');
$this->form_validation->set_rules('batch_size','Batch_size','trim|required|max_length[10]');
$this->form_validation->set_rules('class_time_end','Class_time_end','trim|required');
$this->form_validation->set_rules('class_time_days','Class_time_days','trim|required');
$this->form_validation->set_rules('tools','Tools','trim|required');
$this->form_validation->set_rules('training_mode','Training_mode','trim|required');
$this->form_validation->set_rules('certis','Certis','trim|required|max_length[255]');

		
		if($this->form_validation->run())     
        {   
            $params = array(
				//
				'course_id' => $this->input->post('course_id'),
				'course_duration' => $this->input->post('course_duration'),
'batch_size' => $this->input->post('batch_size'),
'class_time_end' => $this->input->post('class_time_end'),
'class_time_days' => $this->input->post('class_time_days'),
'tools' => $this->input->post('tools'),
'training_mode' => $this->input->post('training_mode'),
'certis' => $this->input->post('certis'),

            );
            $params=$this->security->xss_clean($params);
            $course_info_id = $this->Course_info_model->add_course_info($params);
            redirect('course_schedule/add');
        }
        else
        {       
			
			$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
				
            $data['_view'] = 'course_info/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a course_info
     */
    function edit($id)
    {   
        // check if the course_info exists before trying to edit it
        $data['course_info'] = $this->Course_info_model->get_course_info($id);
        
        if(isset($data['course_info']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('course_duration','Course_duration','trim|required|max_length[255]');
$this->form_validation->set_rules('batch_size','Batch_size','trim|required|max_length[10]');
$this->form_validation->set_rules('class_time_end','Class_time_end','trim|required');
$this->form_validation->set_rules('class_time_days','Class_time_days','trim|required');
$this->form_validation->set_rules('tools','Tools','trim|required');
$this->form_validation->set_rules('training_mode','Training_mode','trim|required');
$this->form_validation->set_rules('certis','Certis','trim|required|max_length[255]');

		
			if($this->form_validation->run())     
            {   
                $params = array(
					//
					'course_duration' => $this->input->post('course_duration'),
'batch_size' => $this->input->post('batch_size'),
'class_time_end' => $this->input->post('class_time_end'),
'class_time_days' => $this->input->post('class_time_days'),
'tools' => $this->input->post('tools'),
'training_mode' => $this->input->post('training_mode'),
'certis' => $this->input->post('certis'),

                );
				$params=$this->security->xss_clean($params);
                $this->Course_info_model->update_course_info($id,$params);            
                redirect('course_info/index');
            }
            else
            {
				$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
                $data['_view'] = 'course_info/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The course_info you are trying to edit does not exist.');
    } 

    /*
     * Deleting course_info
     */
    function remove($id)
    {
        $course_info = $this->Course_info_model->get_course_info($id);

        // check if the course_info exists before trying to delete it
        if(isset($course_info['id']))
        {
            $this->Course_info_model->delete_course_info($id);
            redirect('course_info/index');
        }
        else
            show_error('The course_info you are trying to delete does not exist.');
    }
    
}