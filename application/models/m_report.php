<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_report extends CI_Model {

    public $table;
    public $table_generate_preference;
    public $table_karyawan;
    public $table_weight_criteria;

    function __construct() {
        parent::__construct();
        $this->table_position 			 = "tb_position";
        $this->table_generate_preference = "tb_generate_preference";
        $this->table_karyawan            = "tb_karyawan";
        $this->table_weight_criteria     = "tb_weight_criteria";
    }

    function get_data_report($data = null) {
        $this->db->join($this->table_karyawan, 'tb_generate_preference.karyawan_id = tb_karyawan.karyawan_id','left');
		$this->db->join($this->table_weight_criteria, 'tb_generate_preference.weight_criteria_id = tb_weight_criteria.weight_criteria_id','left');
		$this->db->join($this->table_position, 'tb_position.position_name = tb_karyawan.karyawan_position','left');
		if ($data != null) {
			$this->db->where($data);
		}
        $q = $this->db->get($this->table_generate_preference);
        return $q;
    }

}
