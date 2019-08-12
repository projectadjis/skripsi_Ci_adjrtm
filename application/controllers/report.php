<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class report extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_report');
    $this->load->model('m_position');
  }
 
  function index()
  {
    $data = [
    'title'   => 'Report',
    // 'css'    => [
            
  //       ],
    // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
    'get_data_report' => $this->get_data_report(),
    'position'		  => $this->get_position()
    ];
    $this->load->view('report/index', $data);
  }

  function get_position()
  {
    return $this->m_position->get_position();
  }

  function get_data_report()
  {	
  	$data  = $this->input->post();
  	$check = $this->m_report->get_data_report();
  	return $check;
 //  	if ($data != NULL ) {
 //    	$check = $this->m_report->get_data_report($data);
	// } else {
	// 	$check = $this->m_report->get_data_report();
	// }
   	
   	// if (count($check) > 0) {
   	// 	return $check;
   	// }
  }
 
}