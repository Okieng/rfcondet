<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Movie');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['judul'] = 'News';
		$data['berita'] = $this->db->get('t_berita')->result_array();
		$this->load->view('tempAdmin/header', $data);
		$this->load->view('home/berita', $data);
		$this->load->view('tempAdmin/footer');
	}

	public function edit()
	{
		echo json_encode($this->Movie->getberita($this->input->post('id')));

	}

	public function update()
		{
			// $this->Movie->getUpdate();
			$id = $this->input->post('id');
			$data = [ 
				'judul' => $this->input->post('judul'),
				
				'tanggal' => $this->input->post('tgl')
				


			];
			$this->db->where('id_berita', $id);
			$this->db->update('t_berita', $data);
			
			$this->session->set_flashdata('pesan','DiUbah');
			redirect('News');

			
		}

		public function hapus($id)
		{
			$data = [
				'id_berita' => $id
			];

			
			$this->db->delete('t_berita', $data);
			$this->session->set_flashdata('pesan', 'Di Hapus');
			redirect('News');
		}

		public function tambah()
		{
				$this->form_validation->set_rules('name', 'name', 'required');
				
				$this->form_validation->set_rules('berita', 'Berita', 'required');
				$this->form_validation->set_rules('tgl', 'Tanggal', 'required');

			 if ($this->form_validation->run() == FALSE)
			 {
			 	$data['judul'] = 'News';
				$this->load->view('tempAdmin/header', $data);
				$this->load->view('home/inputNews');
				$this->load->view('tempAdmin/footer');

			 }else{
			 	 
			 			$uplod = $_FILES['gambar']['name'];
			 			if($uplod) {
			 				 $config['allowed_types']  = 'gif|jpg|png|jpeg';
		                	 $config['max_size']     = '2048';
		                	 $config['upload_path']  = './vendor/gambar/news/';

							$this->load->library('upload', $config);

							if($this->upload->do_upload('gambar')) {

								$data = [

									'judul' =>  $this->input->post('name', true),
									'gambar' => $this->upload->data('file_name'),
									'isi_berita' => $this->input->post('berita', true),
									'tanggal' => $this->input->post('tgl'),	
								
								];
								$this->db->insert('t_berita', $data);
								$this->session->set_flashdata('pesan','Ditambah');
								redirect('News');
							}else{

								echo $this->upload->display_errors();
							}	                	 
			 			}
	                }

		
		}












}

