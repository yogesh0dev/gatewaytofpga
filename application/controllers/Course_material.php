<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Course_material extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_material_model');
		$this->load->model('Courses_model');
        $this->load->model('Users_model');
        $this->load->model('Curriculam_model');
        $this->load->model('Course_schedule_model');
		$data = $this->session->userdata;
		if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
    } 

    /*
     * Listing of course_material
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('course_material/index?');
        $config['total_rows'] = $this->Course_material_model->get_all_course_material_count();
        $this->pagination->initialize($config);

        $data['course_material'] = $this->Course_material_model->get_all_course_material($params);
        
        $data['_view'] = 'course_material/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new course_material ffffff
     */
    function add()
    {   
	
        $this->load->library('form_validation');
		//
		$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
		$this->form_validation->set_rules('batch_id','Batch_id','trim|required|max_length[10]');
		$this->form_validation->set_rules('descr','Descr','trim|required');
		
		if($this->form_validation->run())     
        {   
			/// upload docsA
				$config['upload_path']   = './uploads/cmaterial'; 
				$config['allowed_types'] = 'pdf'; 
				$config['max_size']      = 1000000; 
				$config['max_width']     = 3000; 
				$config['max_height']    = 3000;  
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				// multiple
				$count = count($_FILES['download_link']['name']);
				$kk=0;
				$coursename=$this->Courses_model->get_courses($_POST['course_id']);
				$cname=$_POST['course_id'].'_'.$coursename['title'].'_cmaterial';

				for($kk;$kk<$count;$kk++){
					
							$_FILES['download_link'.$kk]['name'] = $_FILES['download_link']['name'][$kk];
							$_FILES['download_link'.$kk]['type'] = $_FILES['download_link']['type'][$kk];
							$_FILES['download_link'.$kk]['tmp_name'] = $_FILES['download_link']['tmp_name'][$kk];
							$_FILES['download_link'.$kk]['error'] = $_FILES['download_link']['error'][$kk];
							$_FILES['download_link'.$kk]['size'] = $_FILES['download_link']['size'][$kk];
							$config['file_name'] = $cname.'_'.$kk;
							$this->upload->initialize($config);
						if ($this->upload->do_upload('download_link'.$kk)) {
							$aa= array('upload_data' => $this->upload->data());
							$mar[] = $aa['upload_data']['file_name'];
								
						} else {
							$data= array('error' => $this->upload->display_errors());
							break;
						}
				}
				
				if($data['error']!=""){	
					redirect('course_material/add?error='.$data['error']);
				}
				$files=json_encode($mar);
				/////////////////////
				$params = array(
						//
						'course_id' => $this->input->post('course_id'),
						'batch_id' => $this->input->post('batch_id'),
						'descr' => $this->input->post('descr'),
						'download_link' => $files,

					);
            $params=$this->security->xss_clean($params);
            $course_material_id = $this->Course_material_model->add_course_material($params);
            redirect('course_material/index');
        }
        else
        {       
			
			$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Course_schedule_model->get_all_course_schedule();
				
            $data['_view'] = 'course_material/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a course_material
     */
    function edit($id)
    {   
        // check if the course_material exists before trying to edit it
        $data['course_material'] = $this->Course_material_model->get_course_material($id);
        
        if(isset($data['course_material']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
$this->form_validation->set_rules('batch_id','Batch_id','trim|required|max_length[10]');
$this->form_validation->set_rules('descr','Descr','trim|required');
		
			if($this->form_validation->run())     
            {   
			/// upload docsA
				$config['upload_path']   = './uploads/cmaterial'; 
				$config['allowed_types'] = 'pdf'; 
				// $config['allowed_types'] = 'gif|jpg|png|zip|xls|xlsx|doc|pdf'; 
				$config['max_size']      = 1000000; 
				$config['max_width']     = 3000; 
				$config['max_height']    = 3000;  
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				// multiple
				$count = count($_FILES['download_link']['name']);
				$kk=0;
				$coursename=$this->Courses_model->get_courses($_POST['course_id']);
				$cname=$_POST['course_id'].'_'.$coursename['title'].'_cmaterial';
				for($kk;$kk<$count;$kk++){
					
							$_FILES['download_link'.$kk]['name'] = $_FILES['download_link']['name'][$kk];
							$_FILES['download_link'.$kk]['type'] = $_FILES['download_link']['type'][$kk];
							$_FILES['download_link'.$kk]['tmp_name'] = $_FILES['download_link']['tmp_name'][$kk];
							$_FILES['download_link'.$kk]['error'] = $_FILES['download_link']['error'][$kk];
							$_FILES['download_link'.$kk]['size'] = $_FILES['download_link']['size'][$kk];
							$config['file_name'] = $cname.'_'.$kk;
							$this->upload->initialize($config);
						if ($this->upload->do_upload('download_link'.$kk)) {
							$aa= array('upload_data' => $this->upload->data());
							$mar[] = $aa['upload_data']['file_name'];
								
						} else {
							$data['error']= array('error' => $this->upload->display_errors()); 
						}
	
				}
				$files=json_encode($mar);
				/////////////////////
                $params = array(
					//
					'course_id' => $this->input->post('course_id'),
'batch_id' => $this->input->post('batch_id'),
'descr' => $this->input->post('descr'),
'download_link' => $files,

                );
				$params=$this->security->xss_clean($params);
                $this->Course_material_model->update_course_material($id,$params);            
                redirect('course_material/index');
            }
            else
            {
				$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Course_schedule_model->get_all_course_schedule();
                $data['_view'] = 'course_material/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The course_material you are trying to edit does not exist.');
    } 

    /*
     * Deleting course_material
     */
    function remove($id)
    {
        $course_material = $this->Course_material_model->get_course_material($id);

        // check if the course_material exists before trying to delete it
        if(isset($course_material['id']))
        {
            $this->Course_material_model->delete_course_material($id);
            redirect('course_material/index');
        }
        else
            show_error('The course_material you are trying to delete does not exist.');
    }
    
}