<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_report extends CI_Model {

    private $table;
    private $table_generate_preference;
    private $table_user;
    private $table_weight_criteria;

    function __construct() {
        parent::__construct();
        $this->table_position 			 = "tb_position";
        $this->table_generate_preference = "tb_generate_preference";
        $this->table_user                = "tb_user";
        $this->table_weight_criteria     = "tb_weight_criteria";
    }

    function get_data_report($data) {
        $this->db->join($this->table_user, 'tb_generate_preference.user_id = tb_user.user_id','left');
		$this->db->join($this->table_weight_criteria, 'tb_generate_preference.weight_criteria_id = tb_weight_criteria.weight_criteria_id','left');
		$this->db->join($this->table_position, 'tb_position.position_id = tb_user.position_id','left');
		$this->db->where($data);
        $q = $this->db->get($this->table_generate_preference);
        return $q;
    }

}
