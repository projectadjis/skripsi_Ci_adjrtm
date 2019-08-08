<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_weight_criteria extends CI_Model {

    public $table;

    function __construct() {
        parent::__construct();
        $this->table = "tb_weight_criteria";
    }

    function insert_weight_criteria($data) {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    function delete_weight_kriteria($weight_criteria_id) {
        $this->db->where($weight_criteria_id);
		return $this->db->delete($this->table);
    }

    function get_weight_criteria() {
        $this->db->order_by("weight_criteria_id", 'desc');
        $q = $this->db->get($this->table);
        return $q;
    }

    function use_weight_criteria($use_weight_criteria, $weight_criteria_id) {
        $this->db->where($weight_criteria_id);
		return $this->db->update($this->table, $use_weight_criteria);
    }

    function check_weight_criteria() {
        $this->db->having('weight_criteria_status',  1);
        $q = $this->db->get($this->table)->result();
        return $q;
    }

    function stop_weight_criteria($stop_weight_criteria, $weight_criteria_id) {
        $this->db->where($weight_criteria_id);
		return $this->db->update($this->table, $stop_weight_criteria);
    }

}
