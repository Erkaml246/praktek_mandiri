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
		$this->load->view('proses.php');	
    }
    
    public function logout() {
        $this->session->unset_userdata('admin_id');
        redirect('dashboard');
    }
}
?>
