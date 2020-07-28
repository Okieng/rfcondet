<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('movie');
		$this->load->library('form_validation');

	}
	public function index()
	{
		 

		$email = $this->input->post('email');
    	$pass = $this->input->post('pass');

    	$data = [
    		'email' => $email
    	];
    	$cek = $this->db->get_where('admin', ['email' => $email])->num_rows();


    	if($cek > 0){
    		$setData = ['email' => $email];
    		$this->session->set_userdata($setData);
    			redirect('admin');
    	}else{
    		$this->load->view('login/register');
         
    	}
    }
		
            	 
    }	

    
