<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function insert($data) {
		$nrp = $data['nrp'];
		$password = $data['password'];
		$nama = $data['nama'];
		$gender = $data['gender'];
		$query = "INSERT INTO `user` (`id`, `nrp`, `password`, `nama`, `gender`, `status`) VALUES (NULL, ?, ?, ?, ?, ?);";
		$this->db->query($query, array($email, $password, $nama, $jeniskelamin, "mahasiswa"));
	}

	public function get($data) {
		$nrp = $data['nrp'];
		$query = "SELECT * FROM `user` WHERE `nrp` LIKE ? ;";
		$result = $this->db->query($query, array($nrp));
		$row = $result->row();

		if (isset($row)){
			return $row;
		}else{
			return (object)array('error'=>'1');
		}
	}

	public function data($nro) {
		$query = "SELECT * FROM `nrp` WHERE `email` LIKE ?;";
		$result = $this->db->query($query, array($nrp));
		$row = $result->row();
		if (isset($row)){
			return $row;
		}else{
			return (object)array('error'=>'1');
		}
	}


}

/* End of file User_m.php */
/* Location: ./application/models/User_m.php */