<?php 

class Movie extends CI_model
{
	
	public function getPopuler() {

		$query = "SELECT * FROM movie WHERE rating > 7.6";

		return $this->db->query($query)->result_array();


	}

	public function getAllFilm() {
		$query = "SELECT * FROM movie WHERE rating < 7.7";

		return $this->db->query($query)->result_array();
	}

	public function getAnimasi() {
		$query = "SELECT movie.link, movie.judul FROM movie JOIN movie_genre ON movie.id = movie_genre.movie_id JOIN genre ON movie_genre.genre_id = genre.id WHERE genre = 'animasi' ";
		return $this->db->query($query)->result_array();
	}

	// SELECT movie.judul, movie.link, movie.detail, movie.usia, genre.genre, director.nama, production.production FROM movie JOIN movie_genre ON movie.id = movie_genre.movie_id JOIN genre ON movie_genre.genre_id = genre.id JOIN director ON movie.id = director.movie_id JOIN production ON production.movie_id = movie.id WHERE movie.id = 1

	public function getDetail($id) {

		return $this->db->get_where('movie', ['id' => $id])->row_array();
	}

	public function getberita($id) {

		return $this->db->get_where('t_berita', ['id_berita' => $id])->row_array();
	}

	public function tampil($id) {

		$query = "SELECT movie.judul, movie.link, movie.detail, movie.usia, genre.genre, director.nama, production.production FROM movie JOIN movie_genre ON movie.id = movie_genre.movie_id JOIN genre ON movie_genre.genre_id = genre.id JOIN director ON movie.id = director.movie_id JOIN production ON production.movie_id = movie.id WHERE movie.id = $id";
		return $this->db->query($query)->row_array();
	}	

	public function getDate()
	{
		$date = date('n');
		
		$query = "SELECT * FROM `director` WHERE MONTH(tgl_lahir) = $date";
		return $this->db->query($query)->result_array();	
	}

	public function getNews()
	{
		return $this->db->get('t_berita')->result_array();
	}

	public function getNewsId($id)
	{
		return $this->db->get_where('t_berita', ['id_berita' => $id])->row_array();
	}

	public function getNewsNo($id)
	{
		$query = "SELECT * FROM `t_berita` WHERE id_berita != $id";
	return $this->db->query($query)->result_array();
	}
	// public function getAll()
	// {
	// 	$query = "SELECT * FROM `movie` INNER JOIN director ON movie.director_id = director.id";
	// 	return $this->db->query($query)->result_array();	
	// }	


	public function mulai($lim, $mul, $keyword = null) 
	{
		if($keyword) 
		{
			$this->db->like('judul', $keyword);
		}
		return $this->db->get('movie', $lim, $mul)->result_array();

	}

	public function getGenre()
	{
		
		return $this->db->get('genre')->result_array();
	}

	public function getMovie()
	{
		
		return $this->db->get('movie')->result_array();
	}
	// public function getUpdate()
	// {
	// 	$data = [ 
	// 		'judul' => $this->input->post('judul')
	// 	];

	// 	$this->db->where('id', $this->input->post('id'));
	// 	$this->db->update('movie');
	// }

	// public function director()
	// {
	// 	return $this->db->get('director')->result_array();
	// }
	
}