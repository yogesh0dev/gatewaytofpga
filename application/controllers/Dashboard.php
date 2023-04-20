<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('Category_model');
		$this->load->model('Users_model');
		$data = $this->session->userdata;
	if($data['role']!='admin'){
	        redirect(site_url().'signup');
	    }
		
    }	
	public function index()
	{
		$data['u'] = $this->Users_model->get_all_userss();
        $data['t'] = $this->Users_model->get_all_userst();
        $data['aut'] = $this->Users_model->get_all_usersts();
        $data['bog'] = $this->Users_model->get_batchInfo_og();
        $data['buc'] = $this->Users_model->get_batchInfo_buc();
		$data['_view'] = 'Dashboard/home';
        $this->load->view('layouts/main2',$data);
	}
	
	public function download()
	{
		
		$this_id = $_POST['server_file_name'];
		// $original_filename = 'xample.pdf'; //This come from database
		$ext = pathinfo($this_id, PATHINFO_EXTENSION);

			echo $file = 'S:/VertrigoServ/www/lms/uploads/cmaterial/'.$this_id.'.'.$ext;
			if (file_exists($file)) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/'.$ext);
				header('Content-Disposition: attachment; filename='.$this_id);//Rename the file with its original filename
				header('Content-Transfer-Encoding: binary');
				header('Content-Length: ' . filesize($file));
				ob_clean();
				flush();
				echo readfile($file);//Here where i want  to return the generated url
				exit();
			}  die('1');
	}
	
	
	 
}
