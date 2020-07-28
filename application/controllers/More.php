<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class More extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}
	public function index()
	{
		
		$this->load->view('template/header');
		$this->load->view('more/More');
		$this->load->view('template/footer');
		
	}


}
