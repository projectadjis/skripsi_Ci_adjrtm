<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_weight_alternative extends CI_Model {

    public $table_teknis_pekerjaan;
    public $table_nonteknis_pekerjaan;
    public $table_kepribadian;
    public $table_keterampilan;

    function __construct() {
        parent::__construct();
        $this->table_teknis_pekerjaan    = "tb_weight_alternative_aspek_teknis_pekerjaan";
        $this->table_nonteknis_pekerjaan = "tb_weight_alternative_aspek_nonteknis_pekerjaan";
        $this->table_kepribadian         = "tb_weight_alternative_aspek_kepribadian";
        $this->table_keterampilan        = "tb_weight_alternative_aspek_keterampilan";
    }

    function insert_teknis_pekerjaan($data) {
        $this->db->insert($this->table_teknis_pekerjaan, $data);
        return $this->db->affected_rows();
    }

    function insert_nonteknis_pekerjaan($data) {
        $this->db->insert($this->table_nonteknis_pekerjaan, $data);
        return $this->db->affected_rows();
    }

    function insert_kepribadian($data) {
        $this->db->insert($this->table_kepribadian, $data);
        return $this->db->affected_rows();
    }

    function insert_keterampilan($data) {
        $this->db->insert($this->table_keterampilan, $data);
        return $this->db->affected_rows();
    }

    function get_weight_alternative_aspek_teknis_pekerjaan() {
        $this->db->order_by("weight_alternative_aspek_teknis_pekerjaan_rangedown", 'asc');
        $q = $this->db->get($this->table_teknis_pekerjaan);
        return $q;
    }

    function get_weight_alternative_aspek_nonteknis_pekerjaan() {
        $this->db->order_by("weight_alternative_aspek_nonteknis_pekerjaan_rangedown", 'asc');
        $q = $this->db->get($this->table_nonteknis_pekerjaan);
        return $q;
    }

    function get_weight_alternative_aspek_kepribadian() {
        $this->db->order_by("weight_alternative_aspek_kepribadian_rangedown", 'asc');
        $q = $this->db->get($this->table_kepribadian);
        return $q;
    }

    function get_weight_alternative_aspek_keterampilan() {
        $this->db->order_by("weight_alternative_aspek_keterampilan_rangedown", 'asc');
        $q = $this->db->get($this->table_keterampilan);
        return $q;
    }

    function delete_teknis_pekerjaan($weight_alternative_aspek_teknis_pekerjaan_id) {
        $this->db->where($weight_alternative_aspek_teknis_pekerjaan_id);
		return $this->db->delete($this->table_teknis_pekerjaan);
    }

    function delete_nonteknis_pekerjaan($weight_alternative_aspek_nonteknis_pekerjaan_id) {
        $this->db->where($weight_alternative_aspek_nonteknis_pekerjaan_id);
		return $this->db->delete($this->table_nonteknis_pekerjaan);
    }

    function delete_kepribadian($weight_alternative_aspek_kepribadian_id) {
        $this->db->where($weight_alternative_aspek_kepribadian_id);
		return $this->db->delete($this->table_kepribadian);
    }

    function delete_keterampilan($weight_alternative_aspek_keterampilan_id) {
        $this->db->where($weight_alternative_aspek_keterampilan_id);
		return $this->db->delete($this->table_keterampilan);
    }

}
