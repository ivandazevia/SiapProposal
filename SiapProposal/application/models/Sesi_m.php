<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesi_m extends CI_Model {

	public function start($data) {
		$_SESSION['login'] = 1;
		$_SESSION['nrp'] = $data['nrp'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['status'] = $data['status'];
	}

	public function check() {
		return (isset($_SESSION['login'])) ? true : false;
	}

	public function validate_login() {
		if (empty($_SESSION['login']) || $_SESSION['login'] == '') {
			exit(header("Location: ".base_url()."masuk"));
		}
	}

}

/* End of file Sesi_m.php */
/* Location: ./application/models/Sesi_m.php */