<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Razorpay extends CI_Controller {


	function __construct()
    {
        parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Course_schedule_model');
		$this->load->model('Courses_model');
		$this->load->model('Mycourses_model');
		//check user level
    }	
	public function index() {
		$this->checkout();
	}

	public function checkout($bid) {
		$data = $this->session->userdata;
	    if(empty($data['role'])){
	        redirect(site_url().'login');
	    }elseif($data['role']=='teacher'){
	        redirect(site_url());
	    }
        $data['batchinfo']      = $this->Course_schedule_model->get_course_schedule($bid);
        $data['courseinfo']      = $this->Courses_model->get_courses($data['batchinfo']['course_id']);
		$uid=$_SESSION['id']; 
		$data['page'] = 'student';
        $data['title']              = 'Checkout payment | Gateway To FPGA';  
        $data['callback_url']       = base_url().'razorpay/callback';
        $data['surl']               = base_url().'razorpay/success';;
        $data['furl']               = base_url().'razorpay/failed';;
        $data['currency_code']      = 'INR';
        $data['_view'] = 'StudentPanel/student-paydetails';
        $this->load->view('FrontWebsite/layout/main',$data);
    }

    // initialized cURL Request
    private function curl_handler($payment_id, $amount)  {
        $url            = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id         = "rzp_test_gsauMgkv5iP3FR";
        $key_secret     = "JC6ys8O5TzoPULhcbuQsuV5Q";
        $fields_string  = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        return $ch;
    }   
        
    // callback method
    public function callback() {   
        print_r($this->input->post());     
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            
            $this->session->set_flashdata('razorpay_payment_id', $this->input->post('razorpay_payment_id'));
            $this->session->set_flashdata('merchant_order_id', $this->input->post('merchant_order_id'));
            $currency_code = 'INR';
            $amount = $this->input->post('merchant_total');
            $success = false;
            $error = '';
            try {                
                $ch = $this->curl_handler($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close curl connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'Request to Razorpay Failed';
            }
            
            if ($success === true) {
                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                }
                if (!$order_info['order_status_id']) {
                    redirect($this->input->post('merchant_surl_id'));
                } else {
                    redirect($this->input->post('merchant_surl_id'));
                }

            } else {
                redirect($this->input->post('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    } 
    public function success() {
        $data['title'] = 'Razorpay Success | Gateway To FPGA';
        echo "<h4>Your transaction is successful</h4>";  
        echo "<br/>";
        echo "Transaction ID: ".$this->session->flashdata('razorpay_payment_id');
        echo "<br/>";
        echo "Order ID: ".$this->session->flashdata('merchant_order_id');
    }  
    public function failed() {
        $data['title'] = 'Razorpay Failed | Gateway To FPGA';  
        echo "<h4>Your transaction got Failed</h4>";            
        echo "<br/>";
        echo "Transaction ID: ".$this->session->flashdata('razorpay_payment_id');
        echo "<br/>";
        echo "Order ID: ".$this->session->flashdata('merchant_order_id');
    }

}