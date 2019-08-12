<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class user extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    $this->load->model('m_position');
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
        'karyawan' => $this->get_karyawan(),
        'position' => $this->get_position()
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

  function get_position()
  {
    return $this->m_position->get_position();
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

      if ($field->karyawan_right == 1 && $field->karyawan_status == 0) {
        $row[] = "<button class='btn bg-maroon btn-md' style='pointer-events: none;'>LEAD</button>";
        $row[] = "
            <a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-karyawan_id='$field->karyawan_id' data-karyawan_name='$field->karyawan_name' data-karyawan_position='$field->karyawan_position'><i class='fa fa-pencil'></i>&nbsp;Edit
            </a>&nbsp;
            <a href='javascript:void(0);' data-karyawan-id='$field->karyawan_id' class='delete_record btn btn-danger btn-md'><i class='fa fa-trash'></i>&nbsp;Delete
            </a>
        ";  
      } elseif ($field->karyawan_right == 0 && $field->karyawan_status == 0){
        $row[] = "<button class='btn btn-primary btn-md' style='pointer-events: none;'>Belum Penilaian</button>";
        $row[] = "
            <a class='kpi_record btn bg-navy btn-md' data-karyawan_id='$field->karyawan_id'><i class='fa fa-bar-chart-o'></i>&nbsp;KPI
            </a>&nbsp;
            <a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-karyawan_id='$field->karyawan_id' data-karyawan_name='$field->karyawan_name' data-karyawan_position='$field->karyawan_position'><i class='fa fa-pencil'></i>&nbsp;Edit
            </a>&nbsp;
            <a href='javascript:void(0);' data-karyawan-id='$field->karyawan_id' class='delete_record btn btn-danger btn-md'><i class='fa fa-trash'></i>&nbsp;Delete
            </a>
        ";  
      } elseif ($field->karyawan_right == 0 && $field->karyawan_status == 1) {
        $row[] = "<button class='btn btn-success btn-md' style='pointer-events: none;'>Sudah Penilaian</button>";
        $row[] = "
            <a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-karyawan_id='$field->karyawan_id' data-karyawan_name='$field->karyawan_name' data-karyawan_position='$field->karyawan_position'><i class='fa fa-pencil'></i>&nbsp;Edit
            </a>&nbsp;
            <a href='javascript:void(0);' data-karyawan-id='$field->karyawan_id' class='delete_record btn btn-danger btn-md'><i class='fa fa-trash'></i>&nbsp;Delete
            </a>
        "; 
      }

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
      'karyawan_name'     => $data['karyawan_name'],
      'karyawan_position' => $data['karyawan_position']
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