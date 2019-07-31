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

}
