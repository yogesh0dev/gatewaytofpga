<?php
/* 
 * Generated by MegaBuilder v1.0 
 * www.MegaBuilder.com
 */
 
class Stcourses extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Stcourses_model');
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
    } 

    /*
     * Listing of stcourses
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('stcourses/index?');
        $config['total_rows'] = $this->Stcourses_model->get_all_stcourses_count();
        $this->pagination->initialize($config);

        $data['stcourses'] = $this->Stcourses_model->get_all_stcourses($params);
        
        $data['_view'] = 'stcourses/index';
        $this->load->view('layouts/main2',$data);
    }

    /*
     * Adding a new stcourses ffffff
     */
    function add()
    {   
        $this->load->library('form_validation');

				//
		$this->form_validation->set_rules('stcourses','stcourses','trim|required|max_length[100]');

		// imgs icons 
		if($this->form_validation->run())     
        {   
			/// upload docsA
				/// upload docsA
				$config['upload_path']   = './uploads/stcourses'; 
				$config['allowed_types'] = 'gif|jpg|png'; 
				$config['max_size']      = 1000000; 
				$config['max_width']     = 3000; 
				$config['max_height']    = 3000;  
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				/////////////////////
				if ( ! $this->upload->do_upload('imgs')) {
					$data['error']= array('error' => $this->upload->display_errors()); 
					//var_dump($data);echo '1'; exit();
					$data['_view'] = 'stcourses/add';
					$this->load->view('layouts/main2',$data);
				 }
					
				 else { 
					$data = array('upload_data' => $this->upload->data());
					$imgname=$data['upload_data']['file_name'];	
					/////////////////////
				$params = array(
					//
					
					'stcourses' => $this->input->post('stcourses'),
					'imgs' => $imgname,
					'icons' => '<i class="flaticon-design"></i>',

				);
				$params=$this->security->xss_clean($params);
				$stcourses_id = $this->Stcourses_model->add_stcourses($params);
				redirect('stcourses/index');
			}
			
			
		}
        else
        {       
			
			
				
            $data['_view'] = 'stcourses/add';
            $this->load->view('layouts/main2',$data);
        }
    }  

    /*
     * Editing a stcourses
     */
    function edit($id)
    {   
        // check if the stcourses exists before trying to edit it
        $data['stcourses'] = $this->Stcourses_model->get_stcourses($id);
        
        if(isset($data['stcourses']['id']))
        {
            $this->load->library('form_validation');

			//
			$this->form_validation->set_rules('stcourses','stcourses','trim|required|max_length[100]');
					
			if($this->form_validation->run())     
            {   
				/// upload docsA
					$config['upload_path']   = './uploads/stcourses'; 
					$config['allowed_types'] = 'gif|jpg|png'; 
					$config['max_size']      = 1000000; 
					$config['max_width']     = 3000; 
					$config['max_height']    = 3000;  
					$this->load->library('upload', $config);
				$this->upload->initialize($config);
					/////////////////////
					if ( ! $this->upload->do_upload('imgs')) {
						$data['error']= array('error' => $this->upload->display_errors()); 
						//var_dump($data);echo '1'; exit();
					 }
						
					 else { 
						$data = array('upload_data' => $this->upload->data());
						$imgname=$data['upload_data']['file_name'];	
						
						/////////////////////
					$params = array(
						//
						
						'stcourses' => $this->input->post('stcourses'),
						'imgs' => $imgname,
						'icons' => '<i class="flaticon-design"></i>',

					);
					$params=$this->security->xss_clean($params);
					$this->Stcourses_model->update_stcourses($id,$params);            
					redirect('stcourses/index');
				 }
				 $data['_view'] = 'stcourses/edit';
				$this->load->view('layouts/main2',$data);
            }
            else
            {
                $data['_view'] = 'stcourses/edit';
                $this->load->view('layouts/main2',$data);
            }
        }
        else
            show_error('The stcourses you are trying to edit does not exist.');
    } 

    /*
     * Deleting stcourses
     */
    function remove($id)
    {
        $stcourses = $this->Stcourses_model->get_stcourses($id);

        // check if the stcourses exists before trying to delete it
        if(isset($stcourses['id']))
        {
            $this->Stcourses_model->delete_stcourses($id);
            redirect('stcourses/index');
        }
        else
            show_error('The stcourses you are trying to delete does not exist.');
    }
    
}