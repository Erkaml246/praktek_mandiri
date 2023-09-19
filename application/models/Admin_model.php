<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_data()
    {
        // Gantilah 'tbl_admin' dengan nama tabel yang sesuai
        return $this->db->get('tbl_admin')->result_array();
    }

	public function login($username, $password) {
        $query = $this->db->get_where('tbl_admin', array('username' => $username, 'password' => $password));
        return $query->row();
    }
	
	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

    public function update_admin($id_admin, $data) {
        return $this->db->update('tbl_admin', $data, array('id_admin' => $id_admin));
    }
	
	public function get_admin($id_admin = null) {
        if ($id_admin === null) {
            return $this->db->get('tbl_admin')->result();
        } else {
            return $this->db->get_where('tbl_admin', array('id_admin' => $id_admin))->row();
        }
    }	

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}
