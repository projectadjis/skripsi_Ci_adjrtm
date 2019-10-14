<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_generate_alternative extends CI_Model {

    private $table;
    private $table_user;
    private $table_weight_alternatif_aspek_teknis_pekerjaan;
    private $table_weight_alternatif_aspek_nonteknis_pekerjaan;
    private $table_weight_alternatif_aspek_kepribadian;
    private $table_weight_alternatif_aspek_keterampilan;

    function __construct() {
        parent::__construct();
        $this->table                = "tb_generate_alternative";
        $this->table_user           = "tb_user";
        $this->table_weight_alternatif_aspek_teknis_pekerjaan = "tb_weight_alternative_aspek_teknis_pekerjaan";
        $this->table_weight_alternatif_aspek_nonteknis_pekerjaan = "tb_weight_alternative_aspek_nonteknis_pekerjaan";
        $this->table_weight_alternatif_aspek_kepribadian = "tb_weight_alternative_aspek_kepribadian";
        $this->table_weight_alternatif_aspek_keterampilan = "tb_weight_alternative_aspek_keterampilan";
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

    function check_generate_alternative($previousDate, $today) {
        $this->db->where('generate_alternative_date >=', $previousDate);
        $this->db->where('generate_alternative_date <=', $today);
        $q = $this->db->get($this->table)->result();
        return $q;
    }

    function check_done_kpi() {
        $this->db->having('user_status',  0);
        $q = $this->db->get($this->table_user)->result();
        return $q;
    }

    function check_available_weight_criteria_teknis_pekerjaan() {
        $q = $this->db->get($this->table_weight_alternatif_aspek_teknis_pekerjaan)->result();
        return $q;
    }

    function check_available_weight_criteria_nonteknis_pekerjaan() {
        $q = $this->db->get($this->table_weight_alternatif_aspek_nonteknis_pekerjaan)->result();
        return $q;
    }

    function check_available_weight_criteria_kepribadian() {
        $q = $this->db->get($this->table_weight_alternatif_aspek_kepribadian)->result();
        return $q;
    }

    function check_available_weight_criteria_keterampilan() {
        $q = $this->db->get($this->table_weight_alternatif_aspek_keterampilan)->result();
        return $q;
    }

}
