<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class rank extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
  }
 
  function index()
  {
  	$data = [
		'title'		=> 'Rank',
		// 'css'   	=> [
            
  //       ],
		'js' 		=> [
            'adminlte/bower_components/Flot/jquery.flot',
            'adminlte/bower_components/Flot/jquery.flot.resize',
            'adminlte/bower_components/Flot/jquery.flot.pie',
            'adminlte/bower_components/Flot/jquery.flot.categories',
            'adminlte/bower_components/Flot/flot.tooltip/js/jquery.flot.tooltip.min'
        ],
	];

    $this->load->view('rank/index',$data);
  }
 
}