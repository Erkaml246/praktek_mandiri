<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_model');		
        $this->load->library('form_validation'); // Load library form_validation
        $this->load->library('session'); // Load library session
		$this->input->post();

	}

	public function index()
	{
		$data['title'] = 'Pasien';
		$data['pasien'] = $this->Pasien_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('Pasien', $data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
        // Logika untuk menambah data pasien
		$data['title'] = 'Tambah Pasien';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_pasien');
		$this->load->view('templates/footer');
    }

public function tambah_aksi()
{
    $this->_rules(); // Panggil method _rules() untuk mengecek validasi form

        // Jika validasi berhasil, lakukan penyimpanan data dan redirect ke halaman pasien
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'id_antrian' => $this->input->post('id_antrian'),
            'usia' => $this->input->post('usia'),
			'jk' => $this->input->post('jk'),
            'no_telp' => $this->input->post('no_telp')
        );

        $this->Pasien_model->insert_data($data, 'tbl_pasien');
        redirect('pasien');
}

public function edit($id_pasien) {
	$data['title'] = 'Edit pasien';

	$data['pasien'] = $this->Pasien_model->get_pasien($id_pasien);
	$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_pasien', $data);
		$this->load->view('templates/footer');
}

public function update($id_pasien) {
	$data = array(
			'id_pasien' => $id_pasien,
			'nama_pasien' => $this->input->post('nama_pasien'),
            'id_antrian' => $this->input->post('id_antrian'),
            'usia' => $this->input->post('usia'),
			'jk' => $this->input->post('jk'),
            'no_telp' => $this->input->post('no_telp')
	);
	$this->Pasien_model->update_pasien($id_pasien, $data);
	redirect('pasien');
}

public function _rules()
{
    $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('nama_pasien', 'nama_pasien', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('id_antrian', 'id_antrian', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('usia', 'usia', 'required', array(
        'required' => '%s harus diisi !'
    ));
	$this->form_validation->set_rules('jk', 'jk', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('no_telp', 'no_telp', 'required', array(
        'required' => '%s harus diisi !'
    ));
}


    public function hapus($id_pasien) {
        // Logika untuk menghapus data pasien
		$where = array('id_pasien' => $id_pasien);

		$this->Pasien_model->delete($where, 'tbl_pasien');
			redirect('pasien');		
    }
}
