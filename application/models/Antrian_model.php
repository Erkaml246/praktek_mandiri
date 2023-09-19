<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian_model extends CI_Model {

    public function get_data()
    {
        // Gantilah 'tbl_antrian' dengan nama tabel yang sesuai
        return $this->db->get('tbl_antrian')->result_array();
    }

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

    public function update_antrian($id_antrian, $data) {
        return $this->db->update('tbl_antrian', $data, array('id_antrian' => $id_antrian));
    }
	
	public function get_admin($id_antrian = null) {
        if ($id_antrian === null) {
            return $this->db->get('tbl_antrian')->result();
        } else {
            return $this->db->get_where('tbl_antrian', array('id_antrian' => $id_antrian))->row();
        }
    }		

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}
