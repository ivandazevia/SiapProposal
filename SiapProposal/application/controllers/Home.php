<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

class Home extends CI_Controller {
	private $user = null;
	public function __construct() {
		parent::__construct();
		$this->load->model('Sesi_m', 'sesi');
		$this->load->model('User_m', 'userdatabase');
		$this->load->model('Counter_m', 'counter');
		$this->sesi->validate_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->user = $this->db->get_where('user', array('nrp' => $_SESSION['nrp']))->row();
	}


	public function index() {
		switch ($this->user->tipe) {
			case 'mahasiswa':
				$data = array(
					'data' => $this->user,
					'counter_formulir'=>$this->counter->mahasiswa_formulir(),
					'counter_terima'=>$this->counter->mahasiswa_terima(),
					'counter_tinjau'=>$this->counter->mahasiswa_tinjau(),
					'counter_tolak'=>$this->counter->mahasiswa_tolak()
				);
				break;

			case 'dosen':
				$data = array(
					'data' => $this->user,
					'counter_dosen'=>$this->counter->dosen_counter()
				);
				break;

			case 'rmk':
				$data = array(
					'data' => $this->user,
					'counter_formulir'=>$this->counter->rmk_formulir(),
					'counter_terima'=>$this->counter->rmk_terima(),
					'counter_tinjau'=>$this->counter->rmk_tinjau(),
					'counter_tolak'=>$this->counter->rmk_tolak()
				);
				break;

			case 'kaprodi':
				$data = array(
					'data' => $this->user,
					'counter_formulir'=>$this->counter->kaprodi_formulir(),
					'counter_terima'=>$this->counter->kaprodi_terima(),
					'counter_tinjau'=>$this->counter->kaprodi_tinjau(),
					'counter_tolak'=>$this->counter->kaprodi_tolak()
				);
				break;
		}
		
		$this->load->view('part/header', $data);
		$this->load->view('main_page', $data);
		$this->load->view('part/footer');
	}

	public function profil($param=NULL) {
		$data = array(
			'data'=>$this->user,
			'success'=>$this->input->get('success'),
			'error'=>$this->input->get('error')
		);
		if ($param != NULL) {
			switch ($param) {
				case 'updateData':
					$newdata = array();
					$newdata['nama'] = $this->input->post('nama');
					$newdata['gender'] = $this->input->post('gender');
					$newdata['nrp'] = $this->input->post('nrp');
					$newdata['password'] = $this->input->post('password');
					$this->db->where('nrp', $_SESSION['nrp']);
					$this->db->update('user', $newdata);
					redirect(base_url().'home/profil/?success=data','refresh');
					break;

				case 'uploadPhoto':
					$config['upload_path']          = './img/profile/';
                	$config['allowed_types']        = 'gif|jpg|png|jpeg';
                	$this->load->library('upload', $config);
                	if ($this->upload->do_upload('photo')) {
                		$ext = $this->upload->data('file_ext');
                		$full_path = $this->upload->data('full_path');
                		$rand_name = generateRandomString(15);
                		rename($full_path, './img/profile/'.$rand_name.$ext);
                		$this->db->where('nrp', $_SESSION['nrp']);
                		$this->db->update('user', array('photo'=>$rand_name.$ext));
                        redirect('/home/profil?success=photo','refresh');
                	}else{
                		redirect('/home/profil?error=photo','refresh');
                	}
					break;

				default:
					# code...
					break;
			}
		}else{
			$this->load->view('part/header', $data);
			$this->load->view('profil_page', $data);
			$this->load->view('part/footer');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url().'masuk','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
