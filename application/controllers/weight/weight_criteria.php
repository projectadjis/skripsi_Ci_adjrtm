<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class weight_criteria extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
  }
 
  function index()
  {
    $this->load->view('weight/weight_criteria/index');
  }
 
}