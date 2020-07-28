<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Movie');
	}
	public function index()
	{
		
		$data['pop'] = $this->Movie->getPopuler();
		$data['ani'] = $this->Movie->getAnimasi();
		$data['all'] = $this->Movie->getAllFilm();
		$data['tanggal'] = $this->Movie->getDate(); 
		$data['news'] = $this->Movie->getNews();
		$this->load->view('template/header');
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');

	}

	public function detail() {

			
		echo json_encode($this->Movie->tampil($this->input->post('id')));
		

	}

	public function news($id)
	{

		$data['new'] = $this->Movie->getNewsNo($id);
		$data['news'] = $this->Movie->getNewsId($id);
		$this->load->view('template/header');
		$this->load->view('Home/news', $data);
		$this->load->view('template/footer');		
	}

	

}
