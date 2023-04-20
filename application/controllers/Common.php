<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
		$this->load->model('Mycourses_model');
		$this->load->model('Common_model');
		//check user level
		
		
    }	
	public function country($id=null)
	{
		echo $this->Common_model->get_country();
	}
	
	public function getstate($id=null)
	{
		echo $this->Common_model->get_state($id);
	}
	
	public function getcity($id=null)
	{
		echo $this->Common_model->get_city($id);
	}
	
	public function getbatch($id=null)
	{
		echo $this->Common_model->get_batch($id);
	}
	

	
}
