<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class user extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
  }
 
  function index()
  {
  	$data = [
		'title'		=> 'User'
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
	];
    $this->load->view('user/index', $data);
  }
 
}