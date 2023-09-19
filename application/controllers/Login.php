<?php
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->database();
        $this->load->library('session'); // Tambahkan load library session di sini
    }
    
    public function index() {
        $this->load->view('login');
    }
    
    public function process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $captcha_response = $this->input->post('g-recaptcha-response');
		if ($captcha_response != '') {
			$keysecret="6LcDezkoAAAAAD39SzT7K7J9w85IVp-4spCke--O";

			$check = array(
				'secret'  	=> $keysecret,
				'response'	=> $this->input->post('g-recaptcha-response')
			);

			$startprocess = curl_init();

			curl_setopt($startprocess, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
			curl_setopt($startprocess, CURLOPT_POST, true);
			curl_setopt($startprocess, CURLOPT_POSTFIELDS, http_build_query($check));
			curl_setopt($startprocess, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($startprocess, CURLOPT_RETURNTRANSFER, true);

			$receivedata = curl_exec($startprocess);
			$finalresponse = json_decode($receivedata, true);

			if ($finalresponse['succes']) {

				$storedata = array(
					'username' => $this->input->post('username'),
        			'password' => $this->input->post('password')
				);

				$this->Admin_model->insert($storedata);
				$this->session->set_flashdata('succes_message', 'Data Benar');
				redirect('admin');

			}else{
				$this->session->set_flashdata('message', 'Validasi Anda Salah');
				redirect('login');
			}
		}

        // Validasi input
        if (empty($username) || empty($password) ) {
            $data['error'] = 'Isi semua field!';
            $this->load->view('login', $data);
            redirect('pasien');
        }
        
        $admin = $this->Admin_model->login($username, $password);
        
        if ($admin) {
            $this->session->set_userdata('admin_id', $admin->id_admin);
            if ($admin->role == 'admin') {
				redirect('admin');
			} elseif ($admin->role == 'dokter') {
				redirect('pasien');
			} elseif ($admin->role == 'resepsionis') {
				redirect('pasien');
			}else {
				$data['error'] = 'Peran pengguna tidak valid.';
				$this->load->view('login', $data);
			}
    	} else {
    	    $data['error'] = 'Cek kembaliUsername, password Anda.';
    	    $this->load->view('login', $data);
    	}
    }
    
    public function logout() {
        $this->session->unset_userdata('admin_id');
        redirect('dashboard');
    }
}
?>
