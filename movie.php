<?php 

/**
 * 
 */
class movie extends CI_model
{
	
	public function getFilm() {

		$query = "SELECT nama_film,detail,rating,gambar FROM data WHERE rating > 7.5";

		return $this->db->query($query)->result_array();

	}

	public function getKartun() {

		$query = "SELECT * FROM kartun WHERE tipe = 'kartun'" ;

		return $this->db->query($query)->result_array();

	}

	public function getUsa() {

		$query = "SELECT * FROM data WHERE negara = 'usa'";

		return $this->db->query($query)->result_array();

	}

	public function getInd() {

		$query = "SELECT * FROM data WHERE negara = 'indonesia'";

		return $this->db->query($query)->result_array();

	}

	public function getDetail($id) {

		return $this->db->get_where('data', ['id' => $id])->row_array();
	}

	public function getUser($tabel, $data) {

		return $this->db->get_where($table, $data);
	}
}