<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class generate_alternative extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_generate_alternative');
  }
 
  function index()
  {
 //  	 $data = [
	// 	'title'		     => 'Weight Alternative',
	// 	// 'css'   	=> [
            
 //  //       ],
	// 	// 'js' 		=> [
 //  //           'adminlte/bower_components/chart.js/Chart'
 //  //       ],
 //        'weight_alternative_aspek_teknis_pekerjaan'    => $this->get_weight_alternative_aspek_teknis_pekerjaan(),
 //        'weight_alternative_aspek_nonteknis_pekerjaan' => $this->get_weight_alternative_aspek_nonteknis_pekerjaan(),
 //        'weight_alternative_aspek_kepribadian'         => $this->get_weight_alternative_aspek_kepribadian(),
 //        'weight_alternative_aspek_keterampilan'        => $this->get_weight_alternative_aspek_keterampilan()
	// ];
    $this->load->view('generate/generate_alternative/index');
  }

  function save_generate_alternative()
  {
    $data                   = $this->input->post();
    $date_period            = $data['date_generate_alternative'];
    // $save_teknis_pekerjaan  = $this->m_weight_alternative->insert_teknis_pekerjaan($data);
    // $hasil               = [];
    // if ($save_teknis_pekerjaan > 0) {
    //     $hasil['pesan']  = "Weight's Alternative has been saved";
    //     $hasil['status'] = 1;
    // } else {
    //     $hasil['pesan']  = "Database operation fail";
    //     $hasil['status'] = 0;
    // }
    // echo json_encode($hasil);
  }
 
}