<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Courses_model');
		$this->load->model('Common_model');
		$this->load->model('Course_info_model');
		$this->load->model('Course_schedule_model');
    }	 
	public function index()
	{
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('missing/index?');
		
        $config['total_rows'] = $this->Category_model->get_all_category_count();
        $this->pagination->initialize($config);

        $data['missing'] = $this->Category_model->get_all_category($params);
        
		$data['_view'] = 'FrontWebsite/main';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function homepage()
	{
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = 0;
       
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
        $data['catregr'] = $this->Category_model->get_rand_list('10');
// var_dump($data);
// exit();
		//////////
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$this->load->model('Testimony_model');
		$data['testimoney'] = $this->Testimony_model->get_rand_list('3');
		$this->load->model('Trainers_model');
		$data['trainers'] = $this->Trainers_model->get_rand_list('10');
		$this->load->model('Blogs_model');
		$data['blogs'] = $this->Blogs_model->get_rand_list('3');
		$this->load->model('Users_model');
		/////////
        $data['page']='main';
		$data['_view'] = 'FrontWebsite/main';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function video_list()
	{
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('frontend/course_list?');
        $config['total_rows'] = $this->Courses_model->get_all_courses_count();
        $this->pagination->initialize($config);
		
		$this->load->model('Videos_model');
		$this->load->model('Category_model');
		$this->load->model('Courses_model');
		$this->load->model('Course_schedule_model');
		///
		$data['videos'] = $this->Videos_model->get_all_videos($params);
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		/////////
		$data['page']='course_list';
		$data['_view'] = 'FrontWebsite/video_list';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function course_list()
	{
		
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('frontend/course_list?');
        $config['total_rows'] = $this->Courses_model->get_all_courses_count();
        $this->pagination->initialize($config);
		
		///
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$this->load->model('Courses_model');
		$this->load->model('Testimony_model');
        $data['catregr'] = $this->Category_model->get_rand_list('10');
		$this->load->model('Curriculam_model');
		$this->load->model('Trainers_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		/////////
		$data['page']='course_list';
		$data['_view'] = 'FrontWebsite/course_list';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function category_courses($ctitle)
	{
		$this->load->model('Courses_model');
		$this->load->model('Curriculam_model');
		$this->load->model('Trainers_model');
		//////////////////
		$ctitle=str_replace("---","##",$ctitle);
		$ctitle=str_replace("--","/",$ctitle);
		$ctitle=str_replace("-"," ",$ctitle);
		$ctitle=str_replace("##","-",$ctitle);
		//////////////////
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('missing/index?');
		
        $config['total_rows'] = $this->Courses_model->get_categ_courses_count($ctitle);
        $this->pagination->initialize($config);
		///
		$data['tlist'] = $config['total_rows'];
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
        $data['catregr'] = $this->Category_model->get_rand_list('10');
		$data['courses'] = $this->Courses_model->get_all_categ_courses($ctitle,$params);
		/////////
		$data['page']='course_details';
		$data['_view'] = 'FrontWebsite/category_courses';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function course_details($ctitle)
	{
		//////////////////
		$ctitle=str_replace("---","##",$ctitle);
		$ctitle=str_replace("--","/",$ctitle);
		$ctitle=str_replace("-"," ",$ctitle);
		$ctitle=str_replace("##","-",$ctitle);
		
		//////////////////
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
        $data['catregr'] = $this->Category_model->get_rand_list('10');
		$this->load->model('Courses_model');
		$this->load->model('Curriculam_model');
		$this->load->model('Trainers_model');
		$this->load->model('Testimony_model');
		$this->load->model('Users_model');
		$this->load->model('Mycourses_model');
		$data['courses'] = $this->Courses_model->get_courses_all($ctitle);
		$cid=$data['courses']['course_id'];
		$data['testimonials'] = $this->Testimony_model->get_all_testimony_id($cid);
		
		$data['related_courses'] = $this->Course_schedule_model->get_all_related_course_schedule_upcoming($cid);
		
		/////////
		$data['page']='course_details';
		$data['_view'] = 'FrontWebsite/course_details';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function category_details($id)
	{
		$this->load->model('Courses_model');
		$data['courses'] = $this->Category_model->get_category($id);
		/////////
		$data['page']='category_details';
		$data['_view'] = 'FrontWebsite/category-list';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function svalidate($id)
	{
		$this->load->model('Contacts_model');
		$this->load->model('Bookacall_model');
		$vid=$this->input->post('vcode');
		$this->load->library('form_validation');
		$params = array(
			//
			'isvalidated' => '1'
		);
		$params=$this->security->xss_clean($params);
		if($id=='b'){
			$checked= $this->Bookacall_model->check_validate($vid);
			if($checked)
			{
				//
				$this->form_validation->set_rules('vcode','Validation Code Is Not Accurate, Please check again','trim|required|max_length[255]');		
				if($this->form_validation->run())     
				{		
						if($this->Bookacall_model->update_vcontacts($vid,$params))
						{ echo 'Thanks for validating, you will soon recieve a call from us';}
				}else{
					echo 'Validation Code Is Not Accurate, Please check again';
				}
			}
		}elseif($id=='c'){
			$checked= $this->Contacts_model->check_validate($vid);
			if($checked)
			{
				//
				$this->form_validation->set_rules('vcode','Validation Code Is Not Accurate, Please check again','trim|required|max_length[255]');		
				if($this->form_validation->run())     
				{
						if($this->Contacts_model->update_vcontacts($vid,$params)){ 
						echo 'Thanks for validating, you will soon recieve a call from us';}
				}else{
					echo 'Validation Code Is Not Accurate, Please check again';
				}
			}else{	
				echo '10';
				}			
		}
				
	}
		
	
	public function login()
	{
		$data['page']='login';
		$this->load->model('Courses_model');
		$data['_view'] = 'FrontWebsite/login';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	 
	public function signup()
	{
		$data['page']='Institute Registration Form';
		$this->load->model('Courses_model');
		$data['_view'] = 'FrontWebsite/signup';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function internship()
	{
		$data['page']='internship';
		$data['_view'] = 'FrontWebsite/internship';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function courseschedule()
	{
		$this->load->model('Courses_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Course_info_model');
		$data['courses'] = $this->Course_schedule_model->get_all_course_schedule_upcoming();
		$data['page']='course-schedule';
		$data['_view'] = 'FrontWebsite/courseschedule';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function aboutus()
	{
		$data['page']='aboutus';
		$data['_view'] = 'FrontWebsite/aboutus';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function terms_conditions()
	{
		$data['page']='terms-&-conditions';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$this->load->model('Blogs_model');
		$data['pageinfo'] = $this->Blogs_model->get_page_info('terms-conditions');
		$data['_view'] = 'FrontWebsite/terms-conditions';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function privacy_policy()
	{
		$data['page']='privacy-policy';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$this->load->model('Blogs_model');
		$data['pageinfo'] = $this->Blogs_model->get_page_info('privacy-policy');
		$data['_view'] = 'FrontWebsite/privacy-policy';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function our_blogs()
	{
		$this->load->model('Blogs_model');
		$this->load->model('Courses_model');
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('news-blogs/');
        $config['total_rows'] = $this->Blogs_model->get_all_blogs_count();
        $this->pagination->initialize($config);

        $data['blogs'] = $this->Blogs_model->get_all_blogs($params);

		$data['page']='news-and-blogs';
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/blogs';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function blogs_details($id)
	{
		//////////////////
		$ctitle=str_replace("---","##",$id);
		$ctitle=str_replace("--","/",$ctitle);
		$ctitle=str_replace("-"," ",$ctitle);
		$ctitle=str_replace("##","-",$ctitle);
		
		$this->load->model('Blogs_model');
		$this->load->model('Courses_model');

        $data['blogs'] = $this->Blogs_model->get_tblogs($ctitle);
		
		$data['page']=$data['blogs']['title'];
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/blogs_details';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function freshers_training()
	{
		$data['page']='freshers-training';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/freshers-training';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function corporate_training()
	{
		$data['page']='corporate-training';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/corporate-training';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function training_121()
	{
		$data['page']='121-training';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/121-training';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function professional_training()
	{
		$data['page']='professional-training';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/professional-training';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	
	public function summer_training()
	{
		$data['page']='summer-training';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/summer-training';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function on_demand_training()
	{
		$data['page']='on-demand-training';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/On-Demand-training';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function faq()
	{
		$data['page']='faq\'s';
		$this->load->model('Courses_model');
		$data['courses'] = $this->Courses_model->get_all_courses($params);
		$data['_view'] = 'FrontWebsite/faq';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function career()
	{
		$data['page']='career';
		$data['_view'] = 'FrontWebsite/career';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	public function contactus()
	{
		$data['page']='contactus';
		$data['courses'] = $this->Courses_model->get_all_courses();
		$data['_view'] = 'FrontWebsite/contactus';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	 public function askfordemo()
	 {
		$data['page']='askfordemo';
		$data['courses'] = $this->Courses_model->get_all_courses();
		$data['_view'] = 'FrontWebsite/askfordemo';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	
	 public function search()
	 {
		// var_dump($_POST);exit();
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('missing/index?');
		$params['search']=$_POST['search'];
        $config['total_rows'] = $this->Category_model->get_all_category_count();
        $this->pagination->initialize($config);
		///
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
        $data['catregr'] = $this->Category_model->get_rand_list('10');
		$this->load->model('Courses_model');
		$this->load->model('Curriculam_model');
		$this->load->model('Trainers_model');
		$this->load->model('Testimony_model');
		$data['courses'] = $this->Courses_model->get_all_courses_like($params);
		/////////Testimony_model
		$data['page']='course_details';
		$data['_view'] = 'FrontWebsite/course_list';
        $this->load->view('FrontWebsite/layout/main',$data);
	}
	public function buynow($bid)
	 {
		// var_dump($_POST);exit();
		if($_SESSION['role']=='student'){
			$this->session->set_userdata('buyid', $bid);
			redirect('./student-dashboard');
		}else{
			$this->load->model('Courses_model');
			$this->session->set_userdata('buyid', $bid);
			redirect('/signup');
		}
	}
	
	 public function removebuy()
	 {
			unset($_SESSION['buyid']);
			redirect($_SERVER['HTTP_REFERER']);
		
	}
	
	
	
	
	
	 
}
