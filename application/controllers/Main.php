<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public $status;
    public $roles;

    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
		$this->load->model('Category_model');
		$this->load->model('Courses_model');
    }

    //index dasboard
	public function index()
	{
	    //user data from session
	    $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'login');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level
        
	    $data['title'] = "Dashboard Admin";
	    
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'login');
        }else{
            if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
        }

	}
	
	public function checkLoginUser(){
	     //user data from session
	    $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'login');
	    }
	    
	$this->load->library('user_agent');
        $browser = $this->agent->browser();
        $os = $this->agent->platform();
        $getip = $this->input->ip_address();
        
        $result = $this->user_model->getAllSettings();
        $stLe = $result->site_title;
	$tz = $result->timezone;
	    
	$now = new DateTime();
        $now->setTimezone(new DateTimezone($tz));
        $dTod =  $now->format('Y-m-d');
        $dTim =  $now->format('H:i:s');
        
        $this->load->helper('cookie');
        $keyid = rand(1,9000);
        $scSh = sha1($keyid);
        $neMSC = md5($data['email']);
        $setLogin = array(
            'name'   => $neMSC,
            'value'  => $scSh,
            'expire' => strtotime("+2 year"),
        );
        $getAccess = get_cookie($neMSC);
	    
        if(!$getAccess && $setLogin["name"] == $neMSC){
            $this->load->library('email');
            $this->load->library('sendmail');
            $bUrl = base_url();
            $message = $this->sendmail->secureMail($data['first_name'],$data['last_name'],$data['email'],$dTod,$dTim,$stLe,$browser,$os,$getip,$bUrl);
            $to_email = $data['email'];
            $this->email->from($this->config->item('register'), 'New sign-in! from '.$browser.'');
            $this->email->to($to_email);
            $this->email->subject('New sign-in! from '.$browser.'');
            $this->email->message($message);
            $this->email->set_mailtype("html");
            $this->email->send();
            
            $this->input->set_cookie($setLogin, TRUE);
             if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
        }else{
            $this->input->set_cookie($setLogin, TRUE);
             if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
        }
	}
	
	public function settings(){
	    $data = $this->session->userdata;
        if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level

        $data['title'] = "Settings";
        $this->form_validation->set_rules('site_title', 'Site Title', 'required');
        $this->form_validation->set_rules('timezone', 'Timezone', 'required');
        $this->form_validation->set_rules('recaptcha', 'Recaptcha', 'required');
        $this->form_validation->set_rules('theme', 'Theme', 'required');

        $result = $this->user_model->getAllSettings();
        $data['id'] = $result->id;
	    $data['site_title'] = $result->site_title;
	    $data['timezone'] = $result->timezone;
	    
	    if (!empty($data['timezone']))
	    {
	        $data['timezonevalue'] = $result->timezone;
	        $data['timezone'] = $result->timezone;
	    }
	    else
	    {
	        $data['timezonevalue'] = "";
            $data['timezone'] = "Select a time zone";
	    }
	    
	    if($dataLevel == "is_admin"){
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('settings', $data);
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
				$this->load->view('container');
		 $this->load->view('FrontWebsite/layout/main',$data);
            }else{
                $post = $this->input->post(NULL, TRUE);
                $cleanPost = $this->security->xss_clean($post);
                $cleanPost['id'] = $this->input->post('id');
                $cleanPost['site_title'] = $this->input->post('site_title');
                $cleanPost['timezone'] = $this->input->post('timezone');
                $cleanPost['recaptcha'] = $this->input->post('recaptcha');
                $cleanPost['theme'] = $this->input->post('theme');
    
                if(!$this->user_model->settings($cleanPost)){
                    $this->session->set_flashdata('flash_message', 'There was a problem updating your data!');
                }else{
                    $this->session->set_flashdata('success_message', 'Your data has been updated.');
                }
                redirect(site_url().'main/settings/');
            }
	    }

	}
    
    	//user list
	public function users()
	{
	    $data = $this->session->userdata;
	    $data['title'] = "User List";
	    $data['groups'] = $this->user_model->getUserData();

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level

	    //check is admin or not
	    if($dataLevel == "is_admin"){
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('container');
            $this->load->view('user', $data);
            
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
		 $this->load->view('FrontWebsite/layout/main',$data);
	    }else{
	        if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
	    }
	}

    	//change level user
	public function changelevel()
	{
        $data = $this->session->userdata;
        //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level

	    $data['title'] = "Change Level Admin";
	    $data['groups'] = $this->user_model->getUserData();

	    //check is admin or not
	    if($dataLevel == "is_admin"){

            $this->form_validation->set_rules('email', 'Your Email', 'required');
            $this->form_validation->set_rules('level', 'User Level', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header', $data);
                $this->load->view('navbar', $data);
                $this->load->view('container');
                $this->load->view('changelevel', $data);
                
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
		 $this->load->view('FrontWebsite/layout/main',$data);
            }else{
                $cleanPost['email'] = $this->input->post('email');
                $cleanPost['level'] = $this->input->post('level');
                if(!$this->user_model->updateUserLevel($cleanPost)){
                    $this->session->set_flashdata('flash_message', 'There was a problem updating the level user');
                }else{
                    $this->session->set_flashdata('success_message', 'The level user has been updated.');
                }
                redirect(site_url().'main/changelevel');
            }
	    }else{
	        if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
	    }
	}
    
    	//ban or unban user
	public function banuser() 
	{
        $data = $this->session->userdata;
        //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level

	    $data['title'] = "Ban User";
	    $data['groups'] = $this->user_model->getUserData();

	    //check is admin or not
	    if($dataLevel == "is_admin"){

            $this->form_validation->set_rules('email', 'Your Email', 'required');
            $this->form_validation->set_rules('banuser', 'Ban or Unban', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header', $data);
                $this->load->view('navbar', $data);
                $this->load->view('container');
                $this->load->view('banuser', $data);
                
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
		 $this->load->view('FrontWebsite/layout/main',$data);
            }else{
                $post = $this->input->post(NULL, TRUE);
                $cleanPost = $this->security->xss_clean($post);
                $cleanPost['email'] = $this->input->post('email');
                $cleanPost['banuser'] = $this->input->post('banuser');
                if(!$this->user_model->updateUserban($cleanPost)){
                    $this->session->set_flashdata('flash_message', 'There was a problem updating');
                }else{
                    $this->session->set_flashdata('success_message', 'The status user has been updated.');
                }
                redirect(site_url().'main/banuser');
            }
	    }else{
	        if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
	    }
	}

    //edit user
	public function changeuser() 
    {
        $data = $this->session->userdata;
        if(empty($data['role'])){
	        redirect(site_url().'login');
	    }

        $dataInfo = array(
            'firstName'=> $data['first_name'],
            'id'=>$data['id'],
        );

        $data['title'] = "Change Password";
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        $data['groups'] = $this->user_model->getUserInfo($dataInfo['id']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('container');
            $this->load->view('changeuser', $data);
            
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
				$this->load->view('container');
		 $this->load->view('FrontWebsite/layout/main',$data);
        }else{
            $this->load->library('password');
            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);
            $hashed = $this->password->create_hash($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            $cleanPost['user_id'] = $dataInfo['id'];
            $cleanPost['email'] = $this->input->post('email');
            $cleanPost['firstname'] = $this->input->post('firstname');
            $cleanPost['lastname'] = $this->input->post('lastname');
            unset($cleanPost['passconf']);
            if(!$this->user_model->updateProfile($cleanPost)){
                $this->session->set_flashdata('flash_message', 'There was a problem updating your profile');
            }else{
                $this->session->set_flashdata('success_message', 'Your profile has been updated.');
            }
            if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
        }
    }

    //open profile and gravatar user
    public function profile()
    {
        $data = $this->session->userdata;
        if(empty($data['role'])){
	        redirect(site_url().'login');
	    }

        $data['title'] = "Profile";
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('container');
        $this->load->view('profile', $data);
        
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
		 $this->load->view('FrontWebsite/layout/main',$data);

    }

    //delete user
    public function deleteuser($id) {
            $data = $this->session->userdata;
            if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level

	    //check is admin or not
	    if($dataLevel == "is_admin"){
    		$this->user_model->deleteUser($id);
    		if($this->user_model->deleteUser($id) == FALSE )
    		{
    		    $this->session->set_flashdata('flash_message', 'Error, cant delete the user!');
    		}
    		else
    		{
    		    $this->session->set_flashdata('success_message', 'Delete user was successful.');
    		}
    		redirect(site_url().'main/users/');
	    }else{
		    if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
	    }
    }

    //add new user from backend
    public function adduser()
    {
        $data = $this->session->userdata;
        if(empty($data['role'])){
	        redirect(site_url().'login');
	    }

        //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level

	    //check is admin or not
	    if($dataLevel == "is_admin"){
            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('role', 'role', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

            $data['title'] = "Add User";
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('container');
                $this->load->view('adduser', $data);
                
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
				$this->load->view('container');
		 $this->load->view('FrontWebsite/layout/main',$data);
            }else{
                if($this->user_model->isDuplicate($this->input->post('email'))){
                    $this->session->set_flashdata('flash_message', 'User email already exists');
                    redirect(site_url().'main/adduser');
                }else{
                    $this->load->library('password');
                    $post = $this->input->post(NULL, TRUE);
                    $cleanPost = $this->security->xss_clean($post);
                    $hashed = $this->password->create_hash($cleanPost['password']);
                    $cleanPost['email'] = $this->input->post('email');
                    $cleanPost['role'] = $this->input->post('role');
                    $cleanPost['firstname'] = $this->input->post('firstname');
                    $cleanPost['lastname'] = $this->input->post('lastname');
                    $cleanPost['banned_users'] = 'unban';
                    $cleanPost['password'] = $hashed;
                    unset($cleanPost['passconf']);

                    //insert to database
                    if(!$this->user_model->addUser($cleanPost)){
                        $this->session->set_flashdata('flash_message', 'There was a problem add new user');
                    }else{
                        $this->session->set_flashdata('success_message', 'New user has been added.');
                    }
                    redirect(site_url().'main/users/');
                };
            }
	    }else{
	        if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}
	    }
    }

    //register new user from frontend
    public function register()
    {
        $data['title'] = "Register to Admin";
        $this->load->library('curl');
        $this->load->library('recaptcha');
		
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('phn', 'Phone Number', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('caddress', 'Contact Address', 'required');
        $this->form_validation->set_rules('paddress', 'Permanent Address', 'required');
        $this->form_validation->set_rules('college', 'College Name', 'required');
        $this->form_validation->set_rules('degree', 'Degree', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        
        $result = $this->user_model->getAllSettings();
        $sTl = $result->site_title;
        $data['recaptcha'] = $result->recaptcha;

        if ($this->form_validation->run() == FALSE) {
			
			$data['error']=validation_errors();
			$data['page']='signup';
			$this->load->model('Courses_model');
			$data['rcateg'] = $this->Category_model->get_rand_list('5');
			$data['_view'] = 'FrontWebsite/signup';
			$this->load->view('FrontWebsite/layout/main',$data);
			
        }else{
            if($this->user_model->isDuplicate($this->input->post('email'))){
                $this->session->set_flashdata('flash_message', 'User email already exists');
                $data['error']='User email already exists';
				$data['page']='signup';
				$this->load->model('Courses_model');
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
				$data['_view'] = 'FrontWebsite/signup';
				$this->load->view('FrontWebsite/layout/main',$data);
            }else{
				echo '4';
				/// upload docsA
				/// upload docsA
				$config['upload_path']   = './uploads/avatar'; 
				$config['allowed_types'] = 'gif|jpg|png'; 
				$config['max_size']      = 1000000; 
				$config['max_width']     = 3000; 
				$config['max_height']    = 3000;  
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				/////////////////////
				if ( ! $this->upload->do_upload('avatar')) {
				echo '5';
					$data['error']= array('error' => $this->upload->display_errors()); 
					//var_dump($_POST);echo '1'; exit();
				 }
					
				 else { 
				echo '6';
					$data = array('upload_data' => $this->upload->data());
					$imgname=$data['upload_data']['file_name'];	
				 }
				$_POST['avatar']=$imgname;
                $post = $this->input->post(NULL, TRUE);
                $clean = $this->security->xss_clean($post);

                if($data['recaptcha'] == 'yes'){
                    //recaptcha
                    $recaptchaResponse = $this->input->post('g-recaptcha-response');
                    $userIp = $_SERVER['REMOTE_ADDR'];
                    $key = $this->recaptcha->secret;
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$key."&response=".$recaptchaResponse."&remoteip=".$userIp; //link
                    $response = $this->curl->simple_get($url);
                    $status= json_decode($response, true);
    
                    //recaptcha check
                    if($status['success']){
                        //insert to database
                        $id = $this->user_model->insertUser($clean);
                        $token = $this->user_model->insertToken($id);
    
                        //generate token
                        $qstring = $this->base64url_encode($token);
                        $url = site_url() . 'main/complete/token/' . $qstring;
                        $link = '<a href="' . $url . '">' . $url . '</a>';
    
                        $this->load->library('email');
                        $this->load->library('sendmail');
                        
                        $message = $this->sendmail->sendRegister($this->input->post('lastname'),$this->input->post('email'),$link, $sTl);
                        $to_email = $this->input->post('email');
                        $this->email->from($this->config->item('register'), 'Set Password ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
                        $this->email->to($to_email);
                        $this->email->subject('Set Password Login');
                        $this->email->message($message);
                        $this->email->set_mailtype("html");
						//////
						
                        //Sending mail
                        if($this->email->send()){
							$this->load->library('email');
							$this->load->library('sendmail');
							$enquery="Registration Form";
							$message = $this->sendmail->sendFormsData($enquery,$clean,$link,$token,$sTl);
							$to_email = 'shailender@infotonicsmedia.com';
							$this->email->from($this->config->item('forgot'), 'New Form From FPGA website! ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
							$this->email->to($to_email);
							$this->email->subject('FPGA::New Form From FPGA website');
							$this->email->message($message);
							$this->email->set_mailtype("html");
							$this->email->send();
                            redirect(site_url().'main/successregister/');
                        }else{
                            $this->session->set_flashdata('flash_message', 'There was a problem sending an email.');
                            exit;
                        }
                    }else{
                        //recaptcha failed
                        $this->session->set_flashdata('flash_message', 'Error...! Google Recaptcha UnSuccessful!');
                        redirect(site_url().'main/register/');
                        exit;
                    }
                }else{
                    //insert to database
                    $id = $this->user_model->insertUser($clean);
                    $token = $this->user_model->insertToken($id);
    
                    //generate token
                    $qstring = $this->base64url_encode($token);
                    $url = site_url() . 'main/complete/token/' . $qstring;
                    $link = '<a href="' . $url . '">' . $url . '</a>';
    
                    $this->load->library('email');
                    $this->load->library('sendmail');
                    
                    $message = $this->sendmail->sendRegister($this->input->post('lastname'),$this->input->post('email'),$link,$sTl);
                    $to_email = $this->input->post('email');
                    $this->email->from($this->config->item('register'), 'Set Password ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
                    $this->email->to($to_email);
                    $this->email->subject('Set Password Login');
                    $this->email->message($message);
                    $this->email->set_mailtype("html");
    
                    //Sending mail
                    if($this->email->send()){
						
						$this->load->library('email');
						$this->load->library('sendmail');
						$enquery="Registration";
						$message = $this->sendmail->sendFormsData($enquery,$clean,$link,$token,$sTl);
						$to_email = 'shailender@infotonicsmedia.com';
						$this->email->from($this->config->item('forgot'), 'New Form From FPGA website! ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
						$this->email->to($to_email);
						$this->email->subject('FPGA::New Form From FPGA website');
						$this->email->message($message);
						$this->email->set_mailtype("html");
						$this->email->send();
                        redirect(site_url().'main/successregister/');
                    }else{
                        $this->session->set_flashdata('flash_message', 'There was a problem sending an email.');
                        exit;
                    }
                }
            };
        }
    }

    //if success new user register
    public function successregister()
    {
		
		$data['_view'] = 'register-info';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$this->load->view('container');
		 $this->load->view('FrontWebsite/layout/main',$data);
    }

    //if success after set password
    public function successresetpassword()
    {
        $data['title'] = "Success Reset Password";
		$data['_view'] = 'reset-pass-info';
		$data['rcateg'] = $this->Category_model->get_rand_list('5');
		$this->load->view('container');
		 $this->load->view('FrontWebsite/layout/main',$data);
    }

    protected function _islocal(){
        return strpos($_SERVER['HTTP_HOST'], 'local');
    }

    //check if complate after add new user
    public function complete()
    {
        $token = base64_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);

        $user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();

        if(!$user_info){
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            redirect(site_url().'main/login');
        }
        $data = array(
            'firstName'=> $user_info->first_name,
            'email'=>$user_info->email,
            'user_id'=>$user_info->id,
            'token'=>$this->base64url_encode($token)
        );

        $data['title'] = "Set the Password";

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
			echo '1';
            $data['_view'] = 'complete';
			$data['rcateg'] = $this->Category_model->get_rand_list('5');
			$this->load->view('container');
			$this->load->view('FrontWebsite/layout/main',$data);
        }else{
			echo '2';
            $this->load->library('password');
            $post = $this->input->post(NULL, TRUE);

            $cleanPost = $this->security->xss_clean($post);

            $hashed = $this->password->create_hash($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            unset($cleanPost['passconf']);
            $userInfo = $this->user_model->updateUserInfo($cleanPost);

            if(!$userInfo){
			echo '3';
                $this->session->set_flashdata('flash_message', 'There was a problem updating your record');
                redirect(site_url().'login');
            }
			$this->session->set_flashdata('flash_message', 'Your password is created successfully, please login to access your panel.');
                redirect(site_url().'login');
			redirect(site_url().'login');

            unset($userInfo->password);

            foreach($userInfo as $key=>$val){
                $this->session->set_userdata($key, $val);
            }
            if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){
				redirect(site_url().'dashboard');
			}

        }
    }

    //check login failed or success
    public function login()
    {        
        $data = $this->session->userdata;
        
        if(!empty($data['email'])){
			if($data['role']=='student'){
				redirect(site_url().'student-dashboard');
			}elseif($data['role']=='teacher'){
				redirect(site_url().'trainers-dashboard');
			}elseif($data['role']=='admin'){                
				redirect(site_url().'dashboard');
			}
	    }else{
            $this->load->library('curl');
            $this->load->library('recaptcha');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            $data['title'] = "Welcome Back!";
            
            $result = $this->user_model->getAllSettings();
            $data['recaptcha'] = $result->recaptcha;

            if($this->form_validation->run() == FALSE) {
				$data['error'] = validation_errors();
				$data['_view'] = 'FrontWebsite/login';
				$data['rcateg'] = $this->Category_model->get_rand_list('5');
				$this->load->view('FrontWebsite/layout/main',$data);
            }else{
                $post = $this->input->post();
                $clean = $this->security->xss_clean($post);
                $userInfo = $this->user_model->checkLogin($clean);
                if($data['recaptcha'] == 'yes'){
                    //recaptcha
                    $recaptchaResponse = $this->input->post('g-recaptcha-response');
                    $userIp = $_SERVER['REMOTE_ADDR'];
                    $key = $this->recaptcha->secret;
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$key."&response=".$recaptchaResponse."&remoteip=".$userIp; //link
                    $response = $this->curl->simple_get($url);
                    $status= json_decode($response, true);
    
                    if(!$userInfo)
                    {
                        $this->session->set_flashdata('flash_message', 'Wrong password or email.');
                        redirect(site_url().'main/login');
                    }
                    elseif($userInfo->banned_users == "Banned")
                    {
                        $this->session->set_flashdata('danger_message', 'You’re temporarily banned from our website!');
                        redirect(site_url().'main/login');
                    }
                    else if(!$status['success'])
                    {
                        //recaptcha failed
                        $this->session->set_flashdata('flash_message', 'Error...! Google Recaptcha UnSuccessful!');
                        redirect(site_url().'login');
                        exit;
                    }
                    elseif($status['success'] && $userInfo && $userInfo->banned_users == "UnBan") //recaptcha check, success login, ban or unban
                    {
                        foreach($userInfo as $key=>$val){
                        $this->session->set_userdata($key, $val);
                        }
                        redirect(site_url().'main/checkLoginUser/');
                    }
                    else
                    {
                        $this->session->set_flashdata('flash_message', 'Something Error!');
                        redirect(site_url().'login');
                        exit;
                    }
                }else{
                    if(!$userInfo)
                    {
                        $this->session->set_flashdata('flash_message', 'Wrong password or email.');
                        redirect(site_url().'main/login');
                    }
                    elseif($userInfo->banned_users == "Banned")
                    {
                        $this->session->set_flashdata('danger_message', 'You’re temporarily banned from our website!');
                        redirect(site_url().'main/login');
                    }
                    elseif($userInfo && $userInfo->banned_users == "UnBan") //recaptcha check, success login, ban or unban
                    {
                        foreach($userInfo as $key=>$val){
                        $this->session->set_userdata($key, $val);
                        }
                        redirect(site_url().'main/checkLoginUser/');
                    }
                    else
                    {
                        $this->session->set_flashdata('flash_message', 'Something Error!');
                        redirect(site_url().'login');
                        exit;
                    }
                }
            }
	    }
    }

    //Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url().'login');
    }

    //forgot password
    public function forgot()
    {
        $data['title'] = "Forgot Password";
        $this->load->library('curl');
        $this->load->library('recaptcha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        $result = $this->user_model->getAllSettings();
        $sTl = $result->site_title;
        $data['recaptcha'] = $result->recaptcha;

        if($this->form_validation->run() == FALSE) {
            $data['_view'] = 'forgot';
			$data['rcateg'] = $this->Category_model->get_rand_list('5');
			$this->load->view('container');
			$this->load->view('FrontWebsite/layout/main',$data);
        }else{
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->user_model->getUserInfoByEmail($clean);
			
            if(!$userInfo){
                $this->session->set_flashdata('flash_message', 'We cant find your email address');
                redirect(site_url().'main/login');
            }

            if($userInfo->status != 'Approved'){ //if status is not approved
                $this->session->set_flashdata('flash_message', 'Your account is not in approved status');
                redirect(site_url().'main/login');
            }

            if($data['recaptcha'] == 'yes'){
                //recaptcha
                $recaptchaResponse = $this->input->post('g-recaptcha-response');
                $userIp = $_SERVER['REMOTE_ADDR'];
                $key = $this->recaptcha->secret;
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$key."&response=".$recaptchaResponse."&remoteip=".$userIp; //link
                $response = $this->curl->simple_get($url);
                $status= json_decode($response, true);
    
                //recaptcha check
                if($status['success']){
    
                    //generate token
                    $token = $this->user_model->insertToken($userInfo->id);
                    $qstring = $this->base64url_encode($token);
                    $url = site_url() . 'main/reset_password/token/' . $qstring;
                    $link = '<a href="' . $url . '">' . $url . '</a>';
    
                    $this->load->library('email');
                    $this->load->library('sendmail');
                    
                    $message = $this->sendmail->sendForgot($this->input->post('lastname'),$this->input->post('email'),$link,$sTl);
                    $to_email = $this->input->post('email');
                    $this->email->from($this->config->item('forgot'), 'Reset Password! ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
                    $this->email->to($to_email);
                    $this->email->subject('Reset Password');
                    $this->email->message($message);
                    $this->email->set_mailtype("html");
                    
                    if($this->email->send()){
                        redirect(site_url().'main/successresetpassword/');
                    }else{
                        $this->session->set_flashdata('flash_message', 'There was a problem sending an email.');
                        exit;
                    }
                }else{
                    //recaptcha failed
                    $this->session->set_flashdata('flash_message', 'Error...! Google Recaptcha UnSuccessful!');
                    redirect(site_url().'main/register/');
                    exit;
                }
            }else{
                //generate token
                $token = $this->user_model->insertToken($userInfo->id);
                $qstring = $this->base64url_encode($token);
                $url = site_url() . 'main/reset_password/token/' . $qstring;
                $link = '<a href="' . $url . '">' . $url . '</a>';                

                $this->load->library('email');
                $this->load->library('sendmail');
                
                $message = $this->sendmail->sendForgot($this->input->post('lastname'),$this->input->post('email'),$link,$sTl);
                $to_email = $this->input->post('email');
                $this->email->from($this->config->item('forgot'), 'Reset Password! ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
                $this->email->to($to_email);
                $this->email->subject('Reset Password');
                $this->email->message($message);
                $this->email->set_mailtype("html");

                if($this->email->send()){
                    redirect(site_url().'main/successresetpassword/');
                }else{
                    $this->session->set_flashdata('flash_message', 'There was a problem sending an email.');
                    exit;
                }
            }
            
        }

    }

    //reset password
    public function reset_password()
    {        
        $token = $this->base64url_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);
        $user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();

        if(!$user_info){
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            redirect(site_url().'main/login');
        }
        $data = array(
            'firstName'=> $user_info->first_name,
            'email'=>$user_info->email,
            //'user_id'=>$user_info->id,
            'token'=>$this->base64url_encode($token)
        );

        $data['title'] = "Reset Password";
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data['_view'] = 'reset_password';
			$data['rcateg'] = $this->Category_model->get_rand_list('5');
			$this->load->view('container');
			$this->load->view('FrontWebsite/layout/main',$data);
        }else{
            $this->load->library('password');
            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);
            $hashed = $this->password->create_hash($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            $cleanPost['user_id'] = $user_info->id;
            unset($cleanPost['passconf']);
            if(!$this->user_model->updatePassword($cleanPost)){
                $this->session->set_flashdata('flash_message', 'There was a problem updating your password');
            }else{
                $this->session->set_flashdata('success_message', 'Your password has been updated. You may now login');
            }
            redirect(site_url().'login');
        }
    }

    public function base64url_encode($data) {
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data) {
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}
