<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_user extends CI_Model {

    public $table;
    public $table_position;

    function __construct() {
        parent::__construct();
        $this->table 		  = "tb_karyawan";
        $this->table_position = "tb_position";
        $this->column_order = [
        		null,
        		'karyawan_name',
        		'karyawan_position',
        		'position_name',
        		'karyawan_right',
        		'karyawan_status'
        ];
        $this->column_search = [
        	    'karyawan_name',
        	    'karyawan_position',
        	    'position_name',
        	    'karyawan_right'
        ];
        $this->order         = [
        	    'karyawan_name' => 'asc'
        ];
    }

    function insert_user($data) {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    function update_user($update_karyawan, $karyawan_id) {
        $this->db->where($karyawan_id);
		return $this->db->update($this->table, $update_karyawan);
    }

    function delete_user($karyawan_id) {
        $this->db->where($karyawan_id);
		return $this->db->delete($this->table);
    }

    function get_karyawan() {
        $this->db->order_by("karyawan_id", 'desc');
        $q = $this->db->get('tb_karyawan');
        return $q;
    }

	function _get_datatables_query($term='')
	{
		
		$this->db->select('*');
		$this->db->join($this->table_position, 'tb_position.position_name = tb_karyawan.karyawan_position','left');
		$this->db->from($this->table);

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
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function get_lead_karyawan() {
        $this->db->order_by("karyawan_id", 'desc');
        $this->db->where("karyawan_right", 1);
        $q = $this->db->get($this->table);
        return $q;
    }

}
