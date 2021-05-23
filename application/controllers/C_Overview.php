<?php

class C_Overview extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Register');
    $this->load->model('M_ManageAdmin');
    $this->load->model('M_ManageUser');
    $this->load->model('M_Iklan');
    $this->load->model('M_Setkategori');
    $this->load->model('M_Setwilayah');
    $this->load->library('session');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view("admin/overview", $data);
  }

  public function coba()
  {
    // code...
    echo "coba";
  }

  public function adminlist()
  {
    $input = $this->input->get();
    if (isset($input['msg'])) {
      $msg = $input['msg'];
      $data['status'] = $msg;
      $data['msg'] = $msg == 'success' ? 'Data berhasil di buang ' : 'Data gagal di buang';
    }
    $data['alladmin'] = $this->M_ManageAdmin->select_all_admin();
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/adminlist', $data);
  }

  public function userlist()
  {
    $input = $this->input->get();
    if (isset($input['msg'])) {
      $msg = $input['msg'];
      $data['status'] = $msg;
      $data['msg'] = $msg == 'success' ? 'Data berhasil di buang ' : 'Data gagal di buang';
    }
    $data['alluser'] = $this->M_ManageUser->select_all_user();
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/userlist', $data);
  }

  public function deleteuser()
  {
    $input = $this->input->get();
    $id = $input['id'];
    $data = $this->M_ManageUser->delete($id);
    $this->load->view('admin/userlist', $data);
  }

  public function deleteadmin()
  {
    $input = $this->input->get();
    $id = $input['id'];
    $data = $this->M_ManageUser->delete($id);
    $this->load->view('admin/adminlist', $data);
  }

  public function updateDataAdmin()
  {
    //		$data = $this->input->post();
    //		$result = $this->M_ManageAdmin->update_admin($data);
    $data['alladmin'] = $this->M_ManageAdmin->select_all_admin();
    $data['allcount'] = $this->M_Iklan->show_allcount();
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
    if ($this->session->flashdata('name_admin') == "") {
      $this->session->set_flashdata('name_admin', '');
      $this->session->set_flashdata('username_admin', '');
      $this->session->set_flashdata('email_admin', '');
      $this->session->set_flashdata('birthdate', '');
      $this->session->set_flashdata('nomor_telp', '');
      $this->session->set_flashdata('alamat', '');
      $this->session->set_flashdata('gender', '');
    }
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/tambahadmin', $data);
  }

  public function editAdmin()
  {
    $id =  $this->uri->segment(2);
    //  	var_dump("data ",$id);
    $data['detailuser'] = $this->M_ManageAdmin->select_admin_id($id);
    $data['allcount'] = $this->M_Iklan->show_allcount();
    //  	var_dump($data);
    $this->load->view('admin/editadmin', $data);
  }
  public function loginadmin()
  {
    $this->load->view('admin/login');
  }
  public function searchtest()
  {
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/searchtest', $data);
  }
  public function tambahuser()
  {
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/tambahuser', $data);
  }

  public function updateadmin()
  {
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/editadmin', $data);
  }

  public function detailuser()
  {

    $input = $this->input->get();
    $id = $input['id'];
    $data['userdata'] = $this->M_ManageUser->select_user_id($id);
    // error pada sidebar allcount
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/detailuser', $data);
  }

  public function setKategori()
  {
    $input = $this->input->get();
    if (isset($input['msg'])) {
      $msg = $input['msg'];
      $data['status'] = $msg;
      $data['msg'] = $msg == 'success' ? 'Data berhasil di buang ' : 'Data gagal di buang';
    }
    $data['allkat'] = $this->M_Setkategori->select_all_kategori();
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/setkategori', $data);
  }

  public function tambahKategori()
  {
    // $data['alladmin'] = $this->M_ManageAdmin->select_all_admin();
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/tambahkategori', $data);
  }


  // public function editKatgor()
  // {
  //   $input = $this->input->get();
  //   $id = $input['id'];
  //   $data = $this->M_Setkategori->select_kategori_id($id);
  //   $data['allcount'] = $this->M_Iklan->show_allcount();
  //   $this->load->view('admin/editkategori', $data);
  // }

  public function editKategori()
  {
    $input = $this->input->get();
    $id = $input['id'];
    // var_dump("data ", $id);
    $data['editKatgor'] = $this->M_Setkategori->select_kategori_id($id);
    $data['allcount'] = $this->M_Iklan->show_allcount();
    //  	var_dump($data);
    $this->load->view('admin/editkategori', $data);
  }

  public function setWilayah()
  {
    $data['allwil'] = $this->M_Setwilayah->select_all_wilayah();
    $data['allcount'] = $this->M_Iklan->show_allcount();
    $this->load->view('admin/setwilayah', $data);
  }
}
