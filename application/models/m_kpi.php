<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kpi extends CI_Model {

    public $table_kpi;
    public $table_karyawan;

    function __construct() {
        parent::__construct();
        $this->table_kpi      = "tb_kpi";
        $this->table_karyawan = "tb_karyawan";
        $this->column_order = [
                null,
                'karyawan_name',
                'karyawan_position'
        ];
        $this->column_search = [
                'karyawan_name',
                'karyawan_position'
        ];
        $this->order         = [
                'tb_karyawan.karyawan_id' => 'asc'
        ];
    }

    function insert_kpi($data) {
        $this->db->insert($this->table_kpi, $data);
        return $this->db->affected_rows();
    }

    function update_status_karyawan($karyawan_id, $update_status) {
        $this->db->where($karyawan_id);
		return $this->db->update($this->table_karyawan, $update_status);
    }

    function _get_datatables_query($term='')
    {
        
        $this->db->select('*');
        $this->db->join($this->table_kpi, 'tb_karyawan.karyawan_id = tb_kpi.karyawan_id','left');
        $this->db->from($this->table_karyawan);

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
                }
                $i++;
            }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $term = $_REQUEST['search']['value'];
        $this->_get_datatables_query($term);
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {   
        $term = $_REQUEST['search']['value'];
        $this->_get_datatables_query($term);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_all()
    {
        $this->db->from($this->table_karyawan);
        return $this->db->count_all_results();
    }

    function get_kpi() {
        $this->db->order_by("kpi_id", 'asc');
        $q = $this->db->get($this->table_kpi);
        return $q;
    }

}
