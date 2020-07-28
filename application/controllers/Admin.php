<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Movie');
		$this->load->library('form_validation');

	}
	public function index()
	{
		if (!$this->session->userdata('email')) {
            redirect('Auth');
        }

		$this->load->library('pagination');

		// search
		if($this->input->post('submit'))
		{
			$data['keyword'] = $this->input->post('keyword');
		}else {
			$data['keyword'] = null;
		}



		$this->db->like('judul', $data['keyword']);
		$this->db->from('movie');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 5;
		

		
 	
		$this->pagination->initialize($config);
		$data['mulai'] = $this->uri->segment(3);


		$data['film'] = $this->Movie->mulai($config['per_page'],$data['mulai'], $data['keyword']);
		$data['judul'] = 'Film';
		$this->load->view('tempAdmin/header', $data);
		$this->load->view('home/admin', $data);
		$this->load->view('tempAdmin/footer');
	}

	public function tambah() {


		$this->form_validation->set_rules('name', 'name', 'required');
		
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('detail', 'Detail', 'required');
		$this->form_validation->set_rules('negara', 'negara', 'required');
		$this->form_validation->set_rules('episode', 'episode', 'required');


		 if ($this->form_validation->run() == FALSE)
	        {
	        	$data['genre'] = $this->Movie->getGenre();
	        	$data['movie'] = $this->Movie->getMovie();
	        	$data['judul'] = 'Film';
				$this->load->view('tempAdmin/header', $data);
				$this->load->view('home/tambah', $data);
				$this->load->view('tempAdmin/footer');
	               
	        }
	        else
	        {


	                $uplod = $_FILES['gambar']['name'];

	                if($uplod) {
	                	 $config['allowed_types']  = 'gif|jpg|png|jpeg';
	                	 $config['max_size']     = '2048';
	                	 $config['upload_path']  = './vendor/gambar/';

	                	 $this->load->library('upload', $config);

				            if ($this->upload->do_upload('gambar'))
			                {
			                        
									                       
							         $data = [

									'judul' =>  $this->input->post('name', true),
									'gambar' => $this->upload->data('file_name'),
									'tahun' => $this->input->post('tahun', true),
									'link' => $this->input->post('link'),	
									
									'detail' => $this->input->post('detail', true),
									'rating' =>  $this->input->post('rating', true),
									'negara' => $this->input->post('negara', true),
									'usia' => $this->input->post('usia'),
									'episode' => $this->input->post('episode', true)
								];

								$this->db->insert('movie', $data);
								$this->session->set_flashdata('pesan','Ditambah');
								redirect('admin');
			                }
			                else
			                {
			                        echo $this->upload->display_errors();
			                }
	                }




	        }


	}

	public function inputGenre()
	{
		$data = [
			'movie_id' => $this->input->post('movie'),
			'genre_id' => $this->input->post('genre')
			
		];

		$this->db->insert('movie_genre', $data);
		$this->session->set_flashdata('pesan','Ditambah');
		redirect('admin/tambah');
	}

	public function inputProduction()
	{
		$data = [
			'production' => $this->input->post('production'),
			'movie_id' => $this->input->post('movie')
			
		];

		$this->db->insert('production', $data);
		$this->session->set_flashdata('pesan','Ditambah');
		redirect('admin/tambah');
	}

	public function inputDirector()
	{
		 						                       
         $data = [
			'nama' =>  $this->input->post('director', true),
			'movie_id' => $this->input->post('movie', true)
		];

		$this->db->insert('director', $data);
		$this->session->set_flashdata('pesan','Ditambah');
		redirect('admin');
			               
	}

		public function hapus($id)
		{
			$data = [
				'id' => $id
			];

			
			$this->db->delete('movie', $data);
			$data['gambar'] = $this->db->get_where('movie', $data)->row_array();
			unlink(FCPATH . 'vendor/gambar/' . $data['gambar']['gambar']);
			$this->session->set_flashdata('pesan', 'Di Hapus');
			redirect('Admin');
		}
	
		public function edit()
		{
			echo json_encode($this->Movie->getDetail($this->input->post('id')));
		}

		public function update()
		{
			// $this->Movie->getUpdate();
			$id = $this->input->post('id');
			$data = [ 
				'judul' => $this->input->post('judul'),
				
				'tahun' => $this->input->post('tahun'),
				'usia' => $this->input->post('usia'),
				'detail' => $this->input->post('detail'),
				'rating' => $this->input->post('rating'),
				'negara' => $this->input->post('negara')


			];
			$this->db->where('id', $id);
			$this->db->update('movie', $data);
			
			$this->session->set_flashdata('pesan','DiUbah');
			redirect('Admin');

			
		}

		public function keluar()
		{
			$this->session->sess_destroy();
			redirect('Auth');
		}

		public function tambahDirec()
		{
			$this->db->insert('director', ['nama' => $this->input->post('nama')]);
			$this->session->set_flashdata('pesan','Ditambah');
			redirect('admin/tambah');
		}

}
