<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
	private $user = null;
    public function __construct() {
		parent::__construct();
		$this->load->model('Sesi_m', 'sesi');
		$this->load->model('User_m', 'userdatabase');
		$this->sesi->validate_login();
		$this->user = $this->db->get_where('user', array('nrp'=>$_SESSION['nrp']))->row();
	}

	public function index() {
		$id = $this->input->post('id');
		if ($id == "") redirect('/home','refresh');
		switch ($this->user->tipe) {
			case 'rmk':
				$this->_rmk($id);
				break;

			case 'kaprodi':
				$this->_kaprodi($id);
				break;

			case 'dosen':
				$this->_dosen($id);
				break;

			default:
				redirect('/home','refresh');
				break;
		}
	}

	public function _rmk($id) {
		$data = array(
			'data' => $this->user,
			'detail' => $this->db->get_where('pengajuan_judul', array('id'=>$id, 'status'=>'pending'))->row(),
			'dosen' => $this->db->get_where('user', array('tipe'=>'dosen'))
		); 
		$this->load->view('part/header', $data);
		$this->load->view('form/detail_rmk',$data);
		$this->load->view('part/footer');
	}

	public function _kaprodi($id) {
		$data = array(
			'data' => $this->user,
			'detail' => $this->db->get_where('pengajuan_judul', array('id'=>$id, 'status'=>'pendingKaprodi'))->row(),
			'dosen' => $this->db->get_where('user', array('tipe'=>'dosen'))
		);
		$this->load->view('part/header', $data); 
		$this->load->view('form/detail_kaprodi',$data);
		$this->load->view('part/footer');
	}

	public function _dosen($id) {
		$data = array(
			'data' => $this->user,
			'detail' => $this->db->get_where('pengajuan_judul', array('id'=>$id))->row(),
			'dosen' => $this->db->get_where('user', array('tipe'=>'dosen'))
		);
		$this->load->view('part/header', $data); 
		$this->load->view('form/detail_dosen',$data);
		$this->load->view('part/footer');
	}

}

/* End of file Detail.php */
/* Location: ./application/controllers/Detail.php */