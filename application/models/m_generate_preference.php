<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_generate_preference extends CI_Model {

    public $table;
    public $table_normalization;
    public $table_weight_criteria;

    function __construct() {
        parent::__construct();
        $this->table                 = "tb_generate_preference";
        $this->table_normalization   = "tb_generate_normalization";
        $this->table_weight_criteria = "tb_weight_criteria";
    }

    function insert_generate_preference($data) {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    function get_generate_normalization() {
        $this->db->order_by("generate_normalization_id", 'asc');
        $q = $this->db->get($this->table_normalization);
        return $q;
    }

    function get_weight_criteria() {
        $this->db->order_by("weight_criteria_id", 'asc');
        $this->db->where("weight_criteria_status", 1);
        $q = $this->db->get($this->table_weight_criteria);
        return $q;
    }

}
