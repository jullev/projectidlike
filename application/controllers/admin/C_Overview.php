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
	  $data['alladmin']=$this->M_ManageAdmin->select_all_admin();
    $this->load->view('admin/adminlist',$data);
  }
	public function userlist()
	{
		$data['alladmin']=$this->M_ManageAdmin->select_all_admin();
		$this->load->view('admin/adminlist',$data);
	}
	public function updateDataAdmin()
	{
		try {
		$id = $this->input->post('idadmin');
		echo $id;
		$data = array(

			'email' => $this->input->post('emailadmin'),
			'username' => $this->input->post('useradmin'),
			'password' => $this->input->post('password'),
			'nama_user' => $this->input->post('namaadmin'),
			'tanggal_lahir' => $this->input->post('lahiradmin'),
			'no_hp' => $this->input->post('phone'),

		);
		$this->db->where('iduser',$id);
//		$hasil = $this->db->update('user',$data);
//		var_dump($hasil);
//		redirect('adminlist');
			$db_error = $this->db->error();
			if (!empty($db_error)) {
				throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
				return false; // unreachable retrun statement !!!
			}
			return TRUE;
		} catch (Exception $e) {
			// this will not catch DB related errors. But it will include them, because this is more general.
			log_message('error: ',$e->getMessage());
			return;
		}
	}

  public function tambahadmin()
  {
    $this->load->view('admin/tambahadmin');
  }

  public function editAdmin()
  {
  	$id =  $this->uri->segment(2);
//  	var_dump("data ",$id);
  	$data['detailuser']=$this->M_ManageAdmin->select_admin_id($id);
//  	var_dump($data);
    $this->load->view('admin/editadmin',$data);
  }
  public function loginadmin()
  {
    $this->load->view('admin/login');
  }
  public function managementuser()
  {
    $this->load->view('admin/managementuser');
  }
  public function searchtest()
  {
    $this->load->view('admin/searchtest');
  }
}
