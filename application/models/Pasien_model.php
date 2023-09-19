<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function get_data()
    {
        // Gantilah 'tbl_pasien' dengan nama tabel yang sesuai
        return $this->db->get('tbl_pasien')->result_array();
    }

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

    public function update_pasien($id_pasien, $data) {
        return $this->db->update('tbl_pasien', $data, array('id_pasien' => $id_pasien));
    }
	
	public function get_pasien($id_pasien = null) {
        if ($id_pasien === null) {
            return $this->db->get('tbl_pasien')->result();
        } else {
            return $this->db->get_where('tbl_pasien', array('id_pasien' => $id_pasien))->row();
        }
    }		

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}
