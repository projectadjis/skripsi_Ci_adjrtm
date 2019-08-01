<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_generate_alternative extends CI_Model {

    public $table;

    function __construct() {
        parent::__construct();
        $this->table = "tb_generate_alternative";
    }

    function insert_generate_alternative($data) {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    function get_generate_alternative() {
        $this->db->order_by("generate_alternative_id", 'asc');
        $q = $this->db->get($this->table);
        return $q;
    }

    function max_generate_alternative_teknis_pekerjaan() {
        $this->db->select_max('generate_alternative_teknispekerjaan','teknispekerjaan');
        $q = $this->db->get($this->table);
        return $q;
    }

    function max_generate_alternative_nonteknis_pekerjaan() {
        $this->db->select_max('generate_alternative_nonteknispekerjaan','nonteknispekerjaan');
        $q = $this->db->get($this->table);
        return $q;
    }

    function max_generate_alternative_kepribadian() {
        $this->db->select_max('generate_alternative_kepribadian','kepribadian');
        $q = $this->db->get($this->table);
        return $q;
    }

    function max_generate_alternative_keterampilan() {
        $this->db->select_max('generate_alternative_keterampilan','keterampilan');
        $q = $this->db->get($this->table);
        return $q;
    }

}
