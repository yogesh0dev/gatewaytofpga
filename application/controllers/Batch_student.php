<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Batch_student extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Batch_student_model');
		$this->load->model('Courses_model');
        $this->load->model('Users_model');
        $this->load->model('Curriculam_model');
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
    } 

    /*
     * Listing of Batch_student
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('Batch_student/index?');
        $config['total_rows'] = $this->Batch_student_model->get_all_Batch_student_count();
        $this->pagination->initialize($config);

        $data['Batch_student'] = $this->Batch_student_model->get_all_Batch_student($params);
        
        $data['_view'] = 'Batch_student/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new Batch_student ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');

		//
		$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
$this->form_validation->set_rules('discs','Discs','trim|required');

		
		if($this->form_validation->run())     
        {   
            $params = array(
				//
				'course_id' => $this->input->post('course_id'),
'discs' => $this->input->post('discs'),

            );
            $params=$this->security->xss_clean($params);
            $Batch_student_id = $this->Batch_student_model->add_Batch_student($params);
            redirect('Batch_student/index');
        }
        else
        {   
            $data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();      
			
			
				
            $data['_view'] = 'Batch_student/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a Batch_student
     */
    function edit($id)
    {   
        // check if the Batch_student exists before trying to edit it
        $data['Batch_student'] = $this->Batch_student_model->get_Batch_student($id);
        
        if(isset($data['Batch_student']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
$this->form_validation->set_rules('discs','Discs','trim|required');

		
			if($this->form_validation->run())     
            {   
                $params = array(
					//
					'course_id' => $this->input->post('course_id'),
'discs' => $this->input->post('discs'),

                );
				$params=$this->security->xss_clean($params);
                $this->Batch_student_model->update_Batch_student($id,$params);            
                redirect('Batch_student/index');
            }
            else
            {  
            $data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
                $data['_view'] = 'Batch_student/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The Batch_student you are trying to edit does not exist.');
    } 

    /*
     * Deleting Batch_student
     */
    function remove($id)
    {
        $Batch_student = $this->Batch_student_model->get_Batch_student($id);

        // check if the Batch_student exists before trying to delete it
        if(isset($Batch_student['id']))
        {
            $this->Batch_student_model->delete_Batch_student($id);
            redirect('Batch_student/index');
        }
        else
            show_error('The Batch_student you are trying to delete does not exist.');
    }
    
}