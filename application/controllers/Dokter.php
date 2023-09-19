<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_model');		
        $this->load->library('form_validation'); // Load library form_validation
        $this->load->library('session'); // Load library session
		$this->input->post();

	}

	public function index()
	{
		$data['title'] = 'Dokter';
		$data['dokter'] = $this->Dokter_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('Dokter', $data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
        // Logika untuk menambah data dokter
		$data['title'] = 'Tambah Dokter';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_dokter');
		$this->load->view('templates/footer');
    }

public function tambah_aksi()
{
    $this->_rules(); // Panggil method _rules() untuk mengecek validasi form

        // Jika validasi berhasil, lakukan penyimpanan data dan redirect ke halaman dokter
        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter')
        );

        $this->Dokter_model->insert_data($data, 'tbl_dokter');
        redirect('dokter');
}

public function edit($id_dokter) {
	$data['title'] = 'Edit Dokter';

	$data['dokter'] = $this->Dokter_model->get_dokter($id_dokter);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_dokter', $data);
		$this->load->view('templates/footer');
}

public function update($id_dokter) {
	$data = array(
			'id_dokter' => $id_dokter,
			'nama_dokter' => $this->input->post('nama_dokter')
	);
	$this->Dokter_model->update_dokter($id_dokter, $data);
	redirect('dokter');
}

public function _rules()
{
    $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('nama_dokter', 'nama Dokter', 'required', array(
        'required' => '%s harus diisi !'
    ));
}


    public function hapus($id_dokter) {
        // Logika untuk menghapus data admin
		$where = array('id_dokter' => $id_dokter);

		$this->Dokter_model->delete($where, 'tbl_dokter');
			redirect('dokter');		
    }
}
