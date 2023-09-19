<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Antrian_model');		
        $this->load->library('form_validation'); // Load library form_validation
        $this->load->library('session'); // Load library session
		$this->input->post();

	}

	public function index()
	{
		$data['title'] = 'Antrian';
		$data['antrian'] = $this->Antrian_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('Antrian', $data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
        // Logika untuk menambah data antrian
		$data['title'] = 'Tambah Antrian';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_antrian');
		$this->load->view('templates/footer');
    }

public function tambah_aksi()
{
    $this->_rules(); // Panggil method _rules() untuk mengecek validasi form

        // Jika validasi berhasil, lakukan penyimpanan data dan redirect ke halaman admin
        $data = array(
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pasien' => $this->input->post('id_pasien'),
            'no_antrian' => $this->input->post('no_antrian'),
			'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('waktu'),
            'status' => $this->input->post('status')
        );

        $this->Antrian_model->insert_data($data, 'tbl_antrian');
        redirect('antrian');
}

public function edit($id_antrian) {
	$data['title'] = 'Edit antrian';

	$data['antrian'] = $this->Antrian_model->get_admin($id_antrian);
	$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_antrian', $data);
		$this->load->view('templates/footer');
}

public function update($id_antrian) {
	$data = array(
			'id_antrian' => $id_antrian,
			'id_dokter' => $this->input->post('id_dokter'),
            'id_pasien' => $this->input->post('id_pasien'),
            'no_antrian' => $this->input->post('no_antrian'),
			'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('waktu'),
            'status' => $this->input->post('status')
	);
	$this->Antrian_model->update_antrian($id_antrian, $data);
	redirect('antrian');
}


public function _rules()
{
    $this->form_validation->set_rules('id_admin', 'Id admin', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('id_dokter', 'id_dokter', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('id_pasien', 'id_pasien', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('no_antrian', 'no_antrian', 'required', array(
        'required' => '%s harus diisi !'
    ));
	$this->form_validation->set_rules('tanggal', 'tanggal', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('waktu', 'waktu', 'required', array(
        'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('status', 'status', 'required', array(
        'required' => '%s harus diisi !'
    ));
}

    public function hapus($id_antrian) {
        // Logika untuk menghapus data admin
		$where = array('id_antrian' => $id_antrian);

		$this->Antrian_model->delete($where, 'tbl_antrian');
			redirect('antrian');		
    }
}
