<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter_m extends CI_Model {
	/* MAHASISWA */
	public function mahasiswa_formulir() {
		return $this->db->get_where('pengajuan_judul', array('nrp'=>$_SESSION['nrp']))->num_rows();
	}

	public function mahasiswa_terima() {
		return $this->db->get_where('pengajuan_judul', array('nrp'=>$_SESSION['nrp'], 'status'=>'diterima'))->num_rows();
	}

	public function mahasiswa_tinjau() {
		$this->db->where('nrp', $_SESSION['nrp']);
		$this->db->where('status', 'pending');
		$this->db->or_where('status', 'pendingKaprodi');
		return $this->db->get('pengajuan_judul')->num_rows();
	}

	public function mahasiswa_tolak() {
		return $this->db->get_where('pengajuan_judul', array('nrp'=>$_SESSION['nrp'], 'status'=>'tolak'))->num_rows();
	}

	/* RMK */
	public function rmk_formulir() {
		return $this->db->get_where('pengajuan_judul')->num_rows();
	}

	public function rmk_terima() {
		$this->db->where('status', 'diterima');
		$this->db->or_where('status', 'pendingKaprodi');
		return $this->db->get_where('pengajuan_judul')->num_rows();
	}

	public function rmk_tinjau() {
		return $this->db->get_where('pengajuan_judul', array('status'=>'pending'))->num_rows();
	}

	public function rmk_tolak() {
		return $this->db->get_where('pengajuan_judul', array('status'=>'tolak'))->num_rows();
	}

	/* KAPRODI */
	public function kaprodi_formulir() {
		return $this->db->get_where('pengajuan_judul')->num_rows();
	}

	public function kaprodi_terima() {
		$this->db->where('status', 'diterima');
		return $this->db->get_where('pengajuan_judul')->num_rows();
	}

	public function kaprodi_tinjau() {
		return $this->db->get_where('pengajuan_judul', array('status'=>'pendingKaprodi'))->num_rows();
	}

	public function kaprodi_tolak() {
		return $this->db->get_where('pengajuan_judul', array('status'=>'tolak'))->num_rows();
	}

	/* DOSEN */
	public function dosen_counter() {
		$this->db->where('dosbing1', $_SESSION['nrp']);
		$this->db->or_where('dosbing2', $_SESSION['nrp']);
		return $this->db->get('pengajuan_judul')->num_rows();
	}
}

/* End of file Counter_m.php */
/* Location: ./application/models/Counter_m.php */