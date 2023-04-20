<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Testimony extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Testimony_model');
        $this->load->model('Courses_model');
        $this->load->model('Users_model');
        $this->load->model('Curriculam_model');
		
    } 

    /*
     * Listing of testimony
     */
    function index()
    {
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('testimony/index?');
        $config['total_rows'] = $this->Testimony_model->get_all_testimony_count();
        $this->pagination->initialize($config);

        $data['testimony'] = $this->Testimony_model->get_all_testimony($params);
        
        $data['_view'] = 'testimony/index';
        $this->load->view('layouts/main2',$data);
    }
/*
     * Adding a new chage status 
     */
	 
	 function status($status,$id)
    {
		$params = array('status' => $status);
		$params=$this->security->xss_clean($params);
		$this->Testimony_model->update_testimony($id,$params);        
		redirect(site_url().'testimony');
    }

    /*
     * Adding a new testimony ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');

		//
		$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
$this->form_validation->set_rules('studentid','Studentid','trim|required|max_length[10]');
$this->form_validation->set_rules('tdate','Tdate','trim|required');
$this->form_validation->set_rules('subject','Subject','trim|required|max_length[255]');
$this->form_validation->set_rules('msg','Msg','trim|required');
$this->form_validation->set_rules('star','Star','trim|required|max_length[10]');

		
		if($this->form_validation->run())     
        {   
            $params = array(
				//
				'course_id' => $this->input->post('course_id'),
'studentid' => $this->input->post('studentid'),
'tdate' => $this->input->post('tdate'),
'subject' => $this->input->post('subject'),
'msg' => $this->input->post('msg'),
'star' => $this->input->post('star'),

            );
            $params=$this->security->xss_clean($params);
            $testimony_id = $this->Testimony_model->add_testimony($params);
            redirect('testimony/index');
        }
        else
        {       
			 
            $data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
            
			
				
            $data['_view'] = 'testimony/add';
            $this->load->view('layouts/main2',$data);
        }
    }  
function sadd()
    {   
	
		$this->load->library('form_validation');
		//
		$this->form_validation->set_rules('course_id','Course name','trim|required|max_length[10]');
		$this->form_validation->set_rules('subject','Subject','trim|required|max_length[255]');
		$this->form_validation->set_rules('msg','Message','trim|required');
		$this->form_validation->set_rules('star','Star','trim|required|max_length[10]');

		
		if($this->form_validation->run())     
        {   
            $params = array(
				//
				'course_id' => $this->input->post('course_id'),
				'studentid' => $_SESSION['id'],
				'batch_id' => $this->input->post('batch_id'),
				'tdate' => date('Y-m-d'),
				'subject' => $this->input->post('subject'),
				'msg' => $this->input->post('msg'),
				'star' => $this->input->post('star'),
				'dpc' => '#'.$this->input->post('batch_id').$_SESSION['id'],

            );			
            $params=$this->security->xss_clean($params);
            if($this->Testimony_model->add_testimony($params)){
				$sid=$_SESSION['id'];
				$this->load->model('Certifications_model');
				$params = array(
					'testi' => '1',
				);
				if($this->Certifications_model->update_certifications_testi($params,$this->input->post('batch_id'),$this->input->post('course_id'),$sid)){
					echo '1';
				}
				
			}
            //redirect('student-certificate');
        }
        else
        {       
			 
            echo validation_errors();
        }
    }  

    /*
     * Editing a testimony
     */
    function edit($id)
    {   
	
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
        // check if the testimony exists before trying to edit it
        $data['testimony'] = $this->Testimony_model->get_testimony($id);
        
        if(isset($data['testimony']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
$this->form_validation->set_rules('studentid','Studentid','trim|required|max_length[10]');
$this->form_validation->set_rules('tdate','Tdate','trim|required');
$this->form_validation->set_rules('subject','Subject','trim|required|max_length[255]');
$this->form_validation->set_rules('msg','Msg','trim|required');
$this->form_validation->set_rules('star','Star','trim|required|max_length[10]');

		
			if($this->form_validation->run())     
            {   
                $params = array(
					//
					'course_id' => $this->input->post('course_id'),
'studentid' => $this->input->post('studentid'),
'tdate' => $this->input->post('tdate'),
'subject' => $this->input->post('subject'),
'msg' => $this->input->post('msg'),
'star' => $this->input->post('star'),

                );
				$params=$this->security->xss_clean($params);
                $this->Testimony_model->update_testimony($id,$params);            
                redirect('testimony/index');
            }
            else
            { 
            $data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
            
                $data['_view'] = 'testimony/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The testimony you are trying to edit does not exist.');
    } 

    /*
     * Deleting testimony
     */
    function remove($id)
    {
        $testimony = $this->Testimony_model->get_testimony($id);

        // check if the testimony exists before trying to delete it
        if(isset($testimony['id']))
        {
            $this->Testimony_model->delete_testimony($id);
            redirect('testimony/index');
        }
        else
            show_error('The testimony you are trying to delete does not exist.');
    }
    
}