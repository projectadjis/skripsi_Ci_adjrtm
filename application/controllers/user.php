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
    $currentPosition = $this->m_user->get_user('position_id')->row();

  	$data = [
		'title'		=> 'User',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'user'            => $this->get_user(),
        'position'        => $this->get_position(),
        'currentPosition' => $currentPosition->position_id
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

  function get_user()
  {
    return $this->m_user->get_user();
  }

  function get_position()
  {
    return $this->m_position->get_position();
  }

  function get_lead_user()
  {
    $data['leaduser'] = $this->m_user->get_lead_user();
    $this->load->view('user/managementuser', $data);
  }

  function get_data_user()
  {
    $list = $this->m_user->get_datatables();
    $data = [];
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $row = [];
      $row[] = $no;
      $row[] = $field->user_name;
      $row[] = $field->position_name;

      if ($field->user_right == 1 && $field->user_status == 0) {
        $row[] = "<button class='btn bg-maroon btn-md' style='pointer-events: none;'>LEAD</button>";
        $row[] = "
            <a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-user_id='$field->user_id' data-user_name='$field->user_name'><i class='fa fa-pencil'></i>&nbsp;Edit
            </a>&nbsp;
            <a href='javascript:void(0);' data-user-id='$field->user_id' class='delete_record btn btn-danger btn-md'><i class='fa fa-trash'></i>&nbsp;Delete
            </a>
        ";  
      } elseif ($field->user_right == 2 && $field->user_status == 0){
        $row[] = "<button class='btn btn-primary btn-md' style='pointer-events: none;'>Not Yet Rated</button>";
        $row[] = "
            <a class='kpi_record btn bg-navy btn-md' data-user_id='$field->user_id'><i class='fa fa-bar-chart-o'></i>&nbsp;KPI
            </a>&nbsp;
            <a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-user_id='$field->user_id' data-user_name='$field->user_name' data-position_id='$field->position_id'><i class='fa fa-pencil'></i>&nbsp;Edit
            </a>&nbsp;
            <a href='javascript:void(0);' data-user-id='$field->user_id' class='delete_record btn btn-danger btn-md'><i class='fa fa-trash'></i>&nbsp;Delete
            </a>
        ";  
      } elseif ($field->user_right == 2 && $field->user_status == 1) {
        $row[] = "<button class='btn btn-success btn-md' style='pointer-events: none;'>Has Been Rated</button>";
        $row[] = "
            <a href='javascript:void(0);' class='edit_record btn btn-warning btn-md' data-user_id='$field->user_id' data-user_name='$field->user_name' data-position_id='$field->position_id'><i class='fa fa-pencil'></i>&nbsp;Edit
            </a>&nbsp;
            <a href='javascript:void(0);' data-user-id='$field->user_id' class='delete_record btn btn-danger btn-md' disabled style='pointer-events : none'><i class='fa fa-trash'></i>&nbsp;Delete
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
    $user_id         = $this->input->post();
    $delete              = $this->m_user->delete_user($user_id);
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
    $user_id['user_id'] = $data['user_id'];
    $update_user            = [
      'user_name'     => $data['user_name'],
      'user_position' => $data['user_position']
    ];
    $update                     = $this->m_user->update_user($update_user, $user_id);
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