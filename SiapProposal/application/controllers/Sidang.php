<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidang extends CI_Controller {
	private $user = null;
    public function __construct() {
		parent::__construct();
		$this->load->model('Sesi_m', 'sesi');
		$this->load->model('User_m', 'userdatabase');
		$this->sesi->validate_login();
		$this->user = $this->db->get_where('user', array('nrp'=>$_SESSION['nrp']))->row();

		date_default_timezone_set("Asia/Jakarta");
	}

	public function index() {
		redirect('/home','refresh');
	}

	public function daftar() {
		if ($this->user->tipe != 'kaprodi') redirect('/home','refresh');

		$data = array(
			'data'=>$this->user, 
			'count_pending' => $this->db->get_where('pengajuan_sidang', array('status' => 'pending'))->num_rows(),
			'count_sidang' => $this->db->get_where('pengajuan_sidang', array('status' => 'sidang'))->num_rows(),
			'list_pending' => $this->db->get_where('pengajuan_sidang', array('status' => 'pending')),
			'list_sidang' => $this->db->get_where('pengajuan_sidang', array('status' => 'sidang'))
		);
		$this->load->view('part/header', $data);
		$this->load->view('form/daftar_sidang',$data);
		$this->load->view('part/footer');
	}

	public function detail() {
		if ($this->user->tipe != 'kaprodi') redirect('/home','refresh');

		$id = $this->input->post('id');
		$nrp = $this->input->post('nrp');
		if ($id == ""||$nrp=="") redirect('/home','refresh');

		$mhs = $this->db->get_where('pengajuan_judul', array('nrp' => $nrp))->row();

		$data = array(
			'data'=>$this->user, 
			'detail'=>$this->db->get_where('pengajuan_sidang', array('nrp'=>$nrp, 'id'=>$id))->row(),
			'scan'=>$this->db->get_where('bukti_bimbingan', array('nrp'=>$nrp))->result(),
			'berkas'=>$this->db->get_where('berkas_bimbingan', array('nrp'=>$nrp))->result(),
			'listdosen'=>$this->db->where('tipe', 'dosen')->
									where('nrp !=', $mhs->dosbing1)->
									where('nrp !=', $mhs->dosbing2)->
									get('user'),
		);
		$this->load->view('part/header', $data);
		$this->load->view('form/detail_sidang',$data);
		$this->load->view('part/footer');
	}

	public function action() {
		if ($this->user->tipe != 'kaprodi') redirect('/home','refresh');

		$id = $this->input->post('id');
		$nrp = $this->input->post('nrp');
		$action = $this->input->post('action');
		$newdata = array();

		
		switch ($action) {
			case 'terima':
				$newdata['status'] = 'sidang';
				$newdata['tglsidang'] = $this->input->post('tglsidang');
				$newdata['penguji'] = $this->input->post('penguji');
				break;
			
			case 'revisi':
				$newdata['status'] = 'revisi';
				break;

			default:
				redirect('/home','refresh');
				break;
		}
		$this->db->where('nrp', $nrp);
		$this->db->where('id', $id);
		$this->db->update('pengajuan_sidang', $newdata);
		redirect('/sidang/daftar','refresh');
	}

	public function nilai() {
		if ($this->user->tipe != 'kaprodi') redirect('/home','refresh');

		$id = $this->input->post('id');
		$nrp = $this->input->post('nrp');
		$nilai = $this->input->post('nilaisidang');

		$this->db->where('id', $id);
		$this->db->where('nrp', $nrp);
		$newdata = array('nilai'=>$nilai, 'status'=>'done');
		$this->db->update('pengajuan_sidang', $newdata);
		redirect('/sidang/daftar','refresh');
	}

	public function revisi($action=null, $param1=null, $param2=null) {
		switch ($action) {
			case 'delete':
			$filename = $param2;
				if ($param1 == 'buku') {
					if (unlink("./buku/".$filename)) {
						$this->db->where('filename', $filename);
						$this->db->delete('berkas_bimbingan');
					}
				} elseif ($param1 == "scan") {
					if (unlink("./scan/".$filename)) {
						$this->db->where('filename', $filename);
						$this->db->delete('bukti_bimbingan');
					}
				}
				break;

			case 'upload':
				$configBuku = array();
				$arrBuku = array();
				$configBuku['upload_path']          = './buku/';
             	$configBuku['allowed_types']        = 'pdf|docx|doc';

             	$this->load->library('upload', $configBuku);
             	if ($this->upload->do_upload('berkaspdf')) {
             		$arrBuku['nrp'] = $_SESSION['nrp'];
					$arrBuku['filename'] = $this->upload->data('file_name'); 
					$arrBuku['date'] = date("Y-m-d H:i:s");
					$this->db->insert('berkas_bimbingan', $arrBuku);

					$this->db->where('nrp', $_SESSION['nrp'])
							 ->update('pengajuan_sidang', array('status' => 'pending'));
					
             	}
				break;
			
			default:
				redirect('/home','refresh');
				break;
		}
		redirect('/pengajuan/sidang','refresh');
	}

}

/* End of file Sidang.php */
/* Location: ./application/controllers/Sidang.php */