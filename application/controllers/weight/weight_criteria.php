<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class weight_criteria extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_weight_criteria');
  }
 
  function index()
  {
  	 $data = [
		'title'		     => 'Weight Criteria',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'weight_criteria' => $this->get_weight_criteria()
	];
    $this->load->view('weight/weight_criteria/index', $data);
  }

  function get_weight_criteria()
  {
    return $this->m_weight_criteria->get_weight_criteria();
  }

  function save()
  {
    $data                = $this->input->post();
    $save                = $this->m_weight_criteria->insert_weight_criteria($data);
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
    $weight_criteria_id  = $this->input->post();
    $delete              = $this->m_weight_criteria->delete_weight_kriteria($weight_criteria_id);
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

  function use_criteria()
  {
    $data                                     = $this->input->post();
    $weight_criteria_id['weight_criteria_id'] = $data['weight_criteria_id'];
    $use_weight_criteria                      = [
		      'weight_criteria_status'     => 1
    ];
    $use                        = $this->m_weight_criteria->use_weight_criteria($use_weight_criteria, $weight_criteria_id);
    $hasil                      = [];
    if ($use > 0) {
        $hasil['pesan']         = "Record Has Been Used";
        $hasil['status']        = 1;
    } else {
        $hasil['pesan']         = "Fail";
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }

  function check_criteria()
  {
    $check = $this->m_weight_criteria->check_weight_criteria();
    $hasil                      = [];
    if (count($check) == 1) {
        $hasil['pesan']         = "Cannot use the record because you have been use another record";
        $hasil['status']        = 1;
    } else {
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }

  function stop_criteria()
  {
    $data                                     = $this->input->post();
    $weight_criteria_id['weight_criteria_id'] = $data['weight_criteria_id'];
    $stop_weight_criteria                      = [
		      'weight_criteria_status'     => 0
    ];
    $use                        = $this->m_weight_criteria->stop_weight_criteria($stop_weight_criteria, $weight_criteria_id);
    $hasil                      = [];
    if ($use > 0) {
        $hasil['pesan']         = "Record Has Been Stoped";
        $hasil['status']        = 1;
    } else {
        $hasil['pesan']         = "Fail";
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }
 
}