<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kpi extends CI_Model {

    public $table_kpi;
    public $table_karyawan;

    function __construct() {
        parent::__construct();
        $this->table_kpi      = "tb_kpi";
        $this->table_karyawan = "tb_karyawan";
    }

    function insert_kpi($data) {
        $this->db->insert($this->table_kpi, $data);
        return $this->db->affected_rows();
    }

    function update_status_karyawan($karyawan_id, $update_status) {
        $this->db->where($karyawan_id);
		return $this->db->update($this->table_karyawan, $update_status);
    }

}
