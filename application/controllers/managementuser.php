<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class managementuser extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    $this->load->model('m_managementuser');
  }
 
  function index()
  {
  	$data = [
		'title'		=> 'Management User',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'leadKaryawan'     => $this->get_lead_karyawan()
	];
    $this->load->view('managementuser/index', $data);
  }

  function save()
  {
    $data                       = $this->input->post();
    $karyawan_id['karyawan_id'] = $data['karyawan_id'];
    $save_management_user       = [
      'karyawan_username'     	=> $data['managementuser_username'],
      'karyawan_password'     	=> $data['managementuser_password'],
      'karyawan_access'     	=> 1
    ];
    $save                     = $this->m_managementuser->insert_managementuser($save_management_user, $karyawan_id);
    $hasil               = [];
    if ($save > 0) {
        $hasil['pesan']  = "Success !";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail !";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function get_lead_karyawan()
  {
    return $this->m_user->get_lead_karyawan();
  }

  function delete()
  {
    $karyawan_id         = $this->input->post();
    $delete              = $this->m_user->delete_user($karyawan_id);
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

  function update()
  {
    $data                       = $this->input->post();
    $karyawan_id['karyawan_id'] = $data['karyawan_id'];
    $update_karyawan            = [
      'karyawan_username'     => $data['karyawan_username'],
      'karyawan_password'     => $data['karyawan_password']
    ];
    $update                     = $this->m_user->update_user($update_karyawan, $karyawan_id);
    $hasil                      = [];
    if ($update > 0) {
        $hasil['pesan']         = "Data has been update";
        $hasil['status']        = 1;
    } else {
        $hasil['pesan']         = "Fail";
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }
 
}