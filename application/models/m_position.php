<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_position extends CI_Model {

    public $table;

    function __construct() {
        parent::__construct();
        $this->table = "tb_position";
    }

    function insert_position($data) {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    function delete_position($position_id) {
        $this->db->where($position_id);
		return $this->db->delete($this->table);
    }

    function get_position() {
        //$this->db->order_by("position_id", 'desc');
        $q = $this->db->get($this->table);
        return $q;
    }

}
