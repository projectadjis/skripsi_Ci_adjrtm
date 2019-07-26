<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class menuutama extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
  }
 
  function index()
  {
  	$data = [
		//'title'		=> 'Leave History',
		// 'css'   	=> [
            
  //       ],
		'js' 		=> [
            'adminlte/bower_components/chart.js/Chart'
        ],
	];

    $this->load->view('menuutama/index',$data);
  }
 
}