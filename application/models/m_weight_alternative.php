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

    function get_weight_alternative_aspek_teknis_pekerjaan($param_weight_alternative_aspek_teknis_pekerjaan = NULL) {
        if ($param_weight_alternative_aspek_teknis_pekerjaan != NULL) {
            $this->db->where($param_weight_alternative_aspek_teknis_pekerjaan);
        }
        $this->db->order_by("weight_alternative_aspek_teknis_pekerjaan_rangedown", 'asc');
        $q = $this->db->get($this->table_teknis_pekerjaan);
        return $q;
    }

    function get_weight_alternative_aspek_nonteknis_pekerjaan($param_weight_alternative_aspek_nonteknis_pekerjaan = NULL) {
        if ($param_weight_alternative_aspek_nonteknis_pekerjaan != NULL) {
            $this->db->where($param_weight_alternative_aspek_nonteknis_pekerjaan);
        }
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

    function get_generate_weight_alternative_teknis_pekerjaan($kpi_teknis_pekerjaan, $user_id) {
        return $this->db->query("SELECT * FROM tb_kpi
        JOIN tb_weight_alternative_aspek_teknis_pekerjaan 
        ON tb_kpi.weight_alternative_aspek_teknis_pekerjaan_unique = tb_weight_alternative_aspek_teknis_pekerjaan.weight_alternative_aspek_teknis_pekerjaan_unique
        WHERE '$kpi_teknis_pekerjaan' 
        BETWEEN 
        weight_alternative_aspek_teknis_pekerjaan_rangedown AND weight_alternative_aspek_teknis_pekerjaan_rangeup AND user_id = '$user_id' ");
    }

    function get_generate_weight_alternative_nonteknis_pekerjaan($kpi_nonteknis_pekerjaan, $user_id) {
        return $this->db->query("SELECT * FROM tb_kpi
        JOIN tb_weight_alternative_aspek_nonteknis_pekerjaan 
        ON tb_kpi.weight_alternative_aspek_nonteknis_pekerjaan_unique = tb_weight_alternative_aspek_nonteknis_pekerjaan.weight_alternative_aspek_nonteknis_pekerjaan_unique
        WHERE '$kpi_nonteknis_pekerjaan' 
        BETWEEN 
        weight_alternative_aspek_nonteknis_pekerjaan_rangedown AND weight_alternative_aspek_nonteknis_pekerjaan_rangeup AND user_id = '$user_id' ");
    }

    function get_generate_weight_alternative_kepribadian($kpi_kepribadian, $user_id) {
        return $this->db->query("SELECT * FROM tb_kpi
        JOIN tb_weight_alternative_aspek_kepribadian 
        ON tb_kpi.weight_alternative_aspek_kepribadian_unique = tb_weight_alternative_aspek_kepribadian.weight_alternative_aspek_kepribadian_unique
        WHERE '$kpi_kepribadian' 
        BETWEEN 
        weight_alternative_aspek_kepribadian_rangedown AND weight_alternative_aspek_kepribadian_rangeup AND user_id = '$user_id' ");
    }

    function get_generate_weight_alternative_keterampilan($kpi_keterampilan, $user_id) {
        return $this->db->query("SELECT * FROM tb_kpi
        JOIN tb_weight_alternative_aspek_keterampilan 
        ON tb_kpi.weight_alternative_aspek_keterampilan_unique = tb_weight_alternative_aspek_keterampilan.weight_alternative_aspek_keterampilan_unique
        WHERE '$kpi_keterampilan' 
        BETWEEN 
        weight_alternative_aspek_keterampilan_rangedown AND weight_alternative_aspek_keterampilan_rangeup AND user_id = '$user_id' ");
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
