<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class user extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
  }
 
  function index()
  {
  	$data = [
		'title'		=> 'User',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan' => $this->get_karyawan()
	];
    $this->load->view('user/index', $data);
  }

  function save()
  {
    $data                = $this->input->post();
    $save                = $this->m_user->insert_user($data);
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

  function get_karyawan()
  {
    return $this->m_user->get_karyawan();
  }

  function get_data_karyawan()
  {
    $list = $this->m_user->get_datatables();
    $data = [];
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $row = [];
      $row[] = $no;
      $row[] = $field->karyawan_name;
      $row[] = $field->karyawan_position;
      $row[] = $field->karyawan_status;
      $row[] = "<a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-karyawan_name='$field->karyawan_name' data-karyawan_position='$field->karyawan_position' data-karyawan_status='$field->karyawan_status'><i class='fa fa-pencil'></i>&nbsp;Edit</a>&nbsp;<a href='javascript:void(0);' data-karyawan_name='$field->karyawan_name' class='hapus_record btn btn-danger btn-md'><i class='fa fa-trash'></i>&nbsp;Hapus</a>";

      $data[] = $row;
    }

    $output = [
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->m_user->count_all(),
      "recordsFiltered" => $this->m_user->count_filtered(),
      "data" => $data,
    ];
    //output dalam format JSON
    echo json_encode($output);
  }
 
}