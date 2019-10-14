<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_alternative extends CI_Model {

    public $table;
    public $table_kpi;
    public $table_user;
    public $table_position;

    function __construct() {
        parent::__construct();
        $this->table          = "tb_generate_alternative";
        $this->table_kpi      = "tb_kpi";
        $this->table_user     = "tb_user";
        $this->table_position = "tb_position";
        $this->column_order   = [
        		null,
        		'user_name',
        		'position_name',
        		'generate_alternative_teknis_pekerjaan',
        		'generate_alternative_nonteknis_pekerjaan',
        		'generate_alternative_kepribadian',
        		'generate_alternative_keterampilan'
        ];
        $this->column_search = [
        	    'user_name',
        		'position_name',
        		'generate_alternative_teknis_pekerjaan',
        		'generate_alternative_nonteknis_pekerjaan',
        		'generate_alternative_kepribadian',
        		'generate_alternative_keterampilan'
        ];
        $this->order         = [
        	  'tb_user.user_name' => 'asc'
        ];
    }

    function _get_datatables_query($term='')
	{
		
		$this->db->select('*');
		$this->db->join($this->table_kpi, 'tb_generate_alternative.kpi_id = tb_kpi.kpi_id','left');
		$this->db->join($this->table_user, 'tb_generate_alternative.user_id = tb_user.user_id','left');
		$this->db->join($this->table_position, 'tb_user.position_id = tb_position.position_id','left');
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

}
