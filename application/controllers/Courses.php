<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Courses extends CI_Controller{
    function __construct()
    {
        parent::__construct();
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
     * Listing of courses
     */
    function index()
    {
        // $params['limit'] = RECORDS_PER_PAGE; 
        // $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        // $config = $this->config->item('pagination');
        // $config['base_url'] = site_url('courses/index?');
        // $config['total_rows'] = $this->Courses_model->get_all_courses_count();
        // $this->pagination->initialize($config);

        $data['courses'] = $this->Courses_model->get_all_courses();
        
        $data['_view'] = 'courses/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new courses ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');
	
		//
		$this->form_validation->set_rules('categ','Categ','trim|required|max_length[10]');
		$this->form_validation->set_rules('title','Title','trim|required|max_length[100]');
		$this->form_validation->set_rules('price','Price','trim|required');
		$this->form_validation->set_rules('duration','Duration','trim|required');
		$this->form_validation->set_rules('module_count','Module_count','trim|required|max_length[10]');

		
		if($this->form_validation->run())     
        {  /// upload docsA
				$config['upload_path']   = './uploads/courses'; 
				$config['allowed_types'] = 'gif|jpg|png'; 
				$config['max_size']      = 1000000; 
				$config['max_width']     = 3000; 
				$config['max_height']    = 3000;  
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				/////////////////////
				if ( ! $this->upload->do_upload('img')) {
					$data['error']= array('error' => $this->upload->display_errors()); 
					//var_dump($data);echo '1'; exit();
				 }
					
				 else { 
					$data = array('upload_data' => $this->upload->data());
					$imgname=$data['upload_data']['file_name'];					
				///////////////////// 
				$params = array(
				//
				'categ' => $this->input->post('categ'),
				'title' => $this->input->post('title'),
				'price' => $this->input->post('price'),
				'duration' => $this->input->post('duration'),
				'img' => $imgname,
				'module_count' => $this->input->post('module_count'),

            );
			//var_dump($params);exit();
            $params=$this->security->xss_clean($params);
			//var_dump($params);exit();
            if($this->Courses_model->add_courses($params)){
				redirect('Course_details/add');
			}
        }}
        else
        {       
			
			
			$data['category'] = $this->Category_model->get_all_category();
			$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
            $data['_view'] = 'courses/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a courses
     */
    function edit($id)
    {   
        // check if the courses exists before trying to edit it
        $data['cid'] = $this->Courses_model->get_courses($id);
        
        if(isset($data['cid']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('categ','Categ','trim|required|max_length[10]');
			$this->form_validation->set_rules('title','Title','trim|required|max_length[100]');
			$this->form_validation->set_rules('price','Price','trim|required');
			$this->form_validation->set_rules('duration','Duration','trim|required');
			$this->form_validation->set_rules('module_count','Module_count','trim|required|max_length[10]');

		
			if($this->form_validation->run())     
            {   
		
		
				if($_FILES['img']['name'] == "") {
					$imgname= $this->input->post('oldimage');
					// No file was selected for upload, your (re)action goes here
				}else{
		
				/// upload docsA
				$config['upload_path']   = './uploads/courses'; 
				$config['allowed_types'] = 'gif|jpg|png'; 
				$config['max_size']      = 1000000; 
				$config['max_width']     = 3000; 
				$config['max_height']    = 3000;  
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				/////////////////////
				if ( ! $this->upload->do_upload('img')) {
				
					$data['error']= array('error' => $this->upload->display_errors()); 
					//var_dump($data);echo '1'; exit();
					$data['category'] = $this->Category_model->get_all_category();
					$data['_view'] = 'Blogs/edit';
					$this->load->view('layouts/main2',$data);
				 }  else { 
			
					$data = array('upload_data' => $this->upload->data());
					$imgname=$data['upload_data']['file_name'];	
				 }
				}
		
		
		
                $params = array(
					//
					'categ' => $this->input->post('categ'),
					'title' => $this->input->post('title'),
					'price' => $this->input->post('price'),
					'duration' => $this->input->post('duration'),
					'img' => $imgname,
					'module_count' => $this->input->post('module_count'),

                );
				$params=$this->security->xss_clean($params);
                $this->Courses_model->update_courses($id,$params);            
                redirect('courses/index');
            }
            else
            {
				$data['category'] = $this->Category_model->get_all_category();
				$data['courses'] = $this->Courses_model->get_Courses($id);
				$data['users'] = $this->Users_model->user_info();
				$data['curriculam'] = $this->Curriculam_model->get_all_curriculam_list();
                $data['_view'] = 'courses/edit';
				// var_dump($data);exit();
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The courses you are trying to edit does not exist.');
    } 

    /*
     * Deleting courses
     */
    function remove($id)
    {
        $courses = $this->Courses_model->get_courses($id);

        // check if the courses exists before trying to delete it
        if(isset($courses['id']))
        {
            $this->Courses_model->delete_courses($id);
            redirect('courses/index');
        }
        else
            show_error('The courses you are trying to delete does not exist.');
    }
    
}