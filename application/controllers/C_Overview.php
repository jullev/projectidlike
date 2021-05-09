<?php

class C_Overview extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Register');
    $this->load->model('M_ManageAdmin');
    $this->load->model('M_ManageUser');
    $this->load->library('session');
    $this->load->library('form_validation');
  }

  public function index()
  {

    $this->load->view("admin/overview");
  }

  public function coba()
  {
    // code...
    echo "coba";
  }

  public function adminlist()
  {
    $data['alladmin'] = $this->M_ManageAdmin->select_all_admin();
    $this->load->view('admin/adminlist', $data);
  }
  public function userlist()
  {
    $data['alluser'] = $this->M_ManageUser->select_all_user();
    $this->load->view('admin/userlist', $data);
  }
  public function updateDataAdmin()
  {
    //		$data = $this->input->post();
    //		$result = $this->M_ManageAdmin->update_admin($data);
    $data['alladmin'] = $this->M_ManageAdmin->select_all_admin();
    $this->load->view('admin/adminlist', $data);

    /*
		if ($result > 0) {
			$out['status'] = '';
			$out['msg'] = show_succ_msg('Data Pegawai Berhasil ditambahkan', '20px');
		} else {
			$out['status'] = '';
			$out['msg'] = show_err_msg('Data Pegawai Gagal ditambahkan', '20px');
		}
*/

    //		echo json_encode($result);

  }

  public function tambahadmin()
  {
    $this->load->view('admin/tambahadmin');
  }

  public function editAdmin()
  {
    $id =  $this->uri->segment(2);
    //  	var_dump("data ",$id);
    $data['detailuser'] = $this->M_ManageAdmin->select_admin_id($id);
    //  	var_dump($data);
    $this->load->view('admin/editadmin', $data);
  }
  public function loginadmin()
  {
    $this->load->view('admin/login');
  }
  public function searchtest()
  {
    $this->load->view('admin/searchtest');
  }
  public function tambahuser()
  {
    $this->load->view('admin/tambahuser');
  }
  public function detailuser()
  {
    $this->load->view('admin/detailuser');
  }
}
