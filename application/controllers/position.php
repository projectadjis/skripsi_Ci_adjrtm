<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class position extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_position');
  }
 
  function index()
  {
    $data = [
		'title'		=> 'Position',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'position' => $this->get_position()
	];
    $this->load->view('position/index', $data);
  }

  function get_position()
  {
    return $this->m_position->get_position();
  }

  function save()
  {
    $data                = $this->input->post();
    $save                = $this->m_position->insert_position($data);
    $hasil               = [];
    if ($save > 0) {
        $hasil['pesan']  = "Data has been saved";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Database operation fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function delete()
  {
    $position_id         = $this->input->post();
    $delete              = $this->m_position->delete_position($position_id);
    $hasil               = [];
    if ($delete > 0) {
        $hasil['pesan']  = "Data has been deleted";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }
 
}