<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_managementuser extends CI_Model {

    public $table;

    function __construct() {
        parent::__construct();
        $this->table = "tb_karyawan";
    }

    function insert_managementuser($update_karyawan, $karyawan_id) {
        $this->db->where($karyawan_id);
        return $this->db->update($this->table, $update_karyawan);
    }

}
