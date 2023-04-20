<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Videos extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Videos_model');
		$this->load->model('Courses_model');
        $this->load->model('Users_model');
        $this->load->model('Curriculam_model');
        $this->load->model('Course_schedule_model');
        	$this->load->model('Category_model');
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
    } 

    /*
     * Listing of videos
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('videos/index?');
        $config['total_rows'] = $this->Videos_model->get_all_videos_count();
        $this->pagination->initialize($config);

        $data['videos'] = $this->Videos_model->get_all_videos($params);
        
        $data['_view'] = 'videos/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new videos ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');

		//
		$this->form_validation->set_rules('categ','Category','trim|required|max_length[10]');
		$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
		$this->form_validation->set_rules('batch_id','Batch_id','trim|required|max_length[10]');
		
		
		
		if($this->form_validation->run())     
        {   
			// var_dump(PATHINFO_EXTENSION);exit();
				/// upload docsA
				$target_dir = "./uploads/videos/";
				$target_file = $target_dir . basename($_FILES["youtube"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$imageFileTypeAll = pathinfo($target_file);
				$extns= $imageFileTypeAll['extension'];
				print_r(pathinfo($target_file));
				// exit();
				if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
				{
					echo "File Format Not Suppoted";
				} 
				else
				{
					if(move_uploaded_file($_FILES["youtube"]["tmp_name"],$target_file)){
						$video_path=$_FILES['youtube']['name'];
					}else{
						$video_path='Not Suppported Video';
					}
					
				}
				
            $params = array(
				//
				'categ' => $this->input->post('categ'),
				'course_id' => $this->input->post('course_id'),
				'batch_id' => $this->input->post('batch_id'),
				'youtube' =>$video_path,
				'extns' =>$extns,

            );
            $params=$this->security->xss_clean($params);
            $videos_id = $this->Videos_model->add_videos($params);
            redirect('videos/index');
        }
        else
        {     
			$data['category'] = $this->Category_model->get_all_category();
			$data['courses'] = $this->Courses_model->get_all_Courses();
            $data['users'] = $this->Users_model->user_info();
            $data['curriculam'] = $this->Course_schedule_model->get_all_course_schedule();
			
				
            $data['_view'] = 'videos/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a videos
     */
    function edit($id)
    {   
        // check if the videos exists before trying to edit it
        $data['videos'] = $this->Videos_model->get_videos($id);
        
        if(isset($data['videos']['id']))
        {
            $this->load->library('form_validation');

			//
			
			$this->form_validation->set_rules('categ','Category','trim|required|max_length[10]');
			$this->form_validation->set_rules('course_id','Course_id','trim|required|max_length[10]');
			$this->form_validation->set_rules('batch_id','Batch_id','trim|required|max_length[10]');

		
			if($this->form_validation->run())     
            {   
                $params = array(
					//
					'categ' => $this->input->post('categ'),
					'course_id' => $this->input->post('course_id'),
					'batch_id' => $this->input->post('batch_id'),
					'youtube' => $this->input->post('youtube'),
					'extns' =>$extns,
                );
				$params=$this->security->xss_clean($params);
                $this->Videos_model->update_videos($id,$params);            
                redirect('videos/index');
            }
            else
            {
				$data['category'] = $this->Category_model->get_all_category();
				$data['courses'] = $this->Courses_model->get_all_Courses();
				$data['users'] = $this->Users_model->user_info();
				$data['curriculam'] = $this->Course_schedule_model->get_all_course_schedule();
                $data['_view'] = 'videos/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The videos you are trying to edit does not exist.');
    } 

    /*
     * Deleting videos
     */
    function remove($id)
    {
        $videos = $this->Videos_model->get_videos($id);

        // check if the videos exists before trying to delete it
        if(isset($videos['id']))
        {
            $this->Videos_model->delete_videos($id);
            redirect('videos/index');
        }
        else
            show_error('The videos you are trying to delete does not exist.');
    }
    
}