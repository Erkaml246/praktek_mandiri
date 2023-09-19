<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');		
        $this->load->library('form_validation'); // Load library form_validation
        $this->load->library('session'); // Load library session
		$this->input->post();

	}

	public function index()
	{
		$data['title'] = 'Admin';
		$data['admin'] = $this->Admin_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('Admin', $data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
        // Logika untuk menambah data admin
		$data['title'] = 'Tambah Admin';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_admin');
		$this->load->view('templates/footer');
    }

public function tambah_aksi()
{
    $this->_rules(); // Panggil method _rules() untuk mengecek validasi form

        // Jika validasi berhasil, lakukan penyimpanan data dan redirect ke halaman admin
        $data = array(
            'password' => $this->input->post('password'),
            'username' => $this->input->post('username'),
            'nama_admin' => $this->input->post('nama_admin')
        );

        $this->Admin_model->insert_data($data, 'tbl_admin');
        redirect('admin');
}

public function edit($id_admin) {
	$data['title'] = 'Edit Admin';

	$data['admin'] = $this->Admin_model->get_admin($id_admin);
	$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_admin', $data);
		$this->load->view('templates/footer');
}

public function update($id_admin) {
	$data = array(
			'id_admin' => $id_admin,
			'password' => $this->input->post('password'),
            'username' => $this->input->post('username'),
            'nama_admin' => $this->input->post('nama_admin')
	);
	$this->Admin_model->update_admin($id_admin, $data);
	redirect('admin');
}


public function _rules()
{
    $this->form_validation->set_rules('id_admin', 'Id admin', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('password', 'password', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('username', 'username', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('nama_admin', 'nama admin', 'required', array(
        'required' => '%s harus diisi !'
    ));
}


    public function hapus($id_admin) {
        // Logika untuk menghapus data admin
		$where = array('id_admin' => $id_admin);

		$this->Admin_model->delete($where, 'tbl_admin');
			redirect('admin');		
    }
}
