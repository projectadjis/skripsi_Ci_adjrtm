<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Menuutama extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('currentRoute');
  }
 
  function index()
  {
    $this->load->view('menuutama/index');
  }
 
}