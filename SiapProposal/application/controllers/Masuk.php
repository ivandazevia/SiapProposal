<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sesi_m', 'sesi');
	}

	public function index(){
		if ($this->sesi->check()) exit(header("Location: ".base_url()."home"));
		$this->load->view('masuk_page');
	}

	public function process() {
		$this->load->model('User_m','userdata');
		$nrp = $this->input->post('nrp');
		$password = $this->input->post('password');
		//$result = $this->userdata->get(array('noktp'=>$noktp,'password'=>$password));
		$res = $this->db->get_where('user', array('nrp'=>$nrp, 'password'=>$password))->row();
		if (isset($res)) {
			$this->sesi->start(array('nrp'=>$res->nrp, 'nama'=>$res->nama,'status'=>$res->status));
			header("Location: ".base_url()."home");
		}else{
			header("Location: ".base_url()."masuk?error=1");
		}
	}

}

/* End of file Masuk.php */
/* Location: ./application/controllers/Masuk.php */