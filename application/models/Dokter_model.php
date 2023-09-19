<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

    public function get_data()
    {
        // Gantilah 'tbl_admin' dengan nama tabel yang sesuai
        return $this->db->get('tbl_dokter')->result_array();
    }

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

    public function update_dokter($id_dokter, $data) {
        return $this->db->update('tbl_dokter', $data, array('id_dokter' => $id_dokter));
    }
	
	public function get_dokter($id_dokter = null) {
        if ($id_dokter === null) {
            return $this->db->get('tbl_dokter')->result();
        } else {
            return $this->db->get_where('tbl_dokter', array('id_dokter' => $id_dokter))->row();
        }
    }		

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}
