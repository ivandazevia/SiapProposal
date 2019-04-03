<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		redirect('/test/form','refresh');
	}

	public function form($param=null) {
		if ($param == "add") {
			$arr = array();
			$arr['nama'] = $this->input->post('nama');
			$arr['data'] = $this->input->post('data');
			$arr['tanggal'] = $this->input->post('tanggal');
			$this->db->insert('tabel', $arr);
			redirect('/test/form?success','refresh');
		}

		$data['id'] = $this->input->get('id'); 

		$this->load->view('test', $data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */