<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_TambahIklan");
		$this->load->library('session');
		$this->load->model("M_Iklan");
		$this->load->model("M_ManageUser");
	}

	public function index2()
	{
		// load view admin/overview.php
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
		//		var_dump($data);
		$this->load->view("user/overview", $data);
	}
	public function index()
	{
		// load view admin/overview.php
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
		$data['kategori'] = $this->M_Iklan->getAllCategory();
		$this->load->view("user/overview", $data);
	}

	public function dashboard()
	{
		$data['datauser'] = $this->M_ManageUser->select_user_id($this->session->userdata('id'));
		$this->load->view("user/dashboard/index", $data);
	}

	public function iklansaya()
	{
		$this->load->view("user/iklansaya");
	}

	public function hitproject()
	{
		$data['dataIklan'] = $this->M_Iklan->allHit();
		//		echo ($data);
		$this->load->view("user/hitproject", $data);
	}

	public function menunggupersetujuan()
	{
		$this->load->view('user/iklanmenunggu');
	}

	public function detail_iklan()
	{
		$id =  $this->uri->segment(2);
		$iduser = $this->session->userdata('id');
		$data['dataIklan'] = $this->M_Iklan->select_iklan($id);
		$data['cekhit'] = $this->M_Iklan->cek_hit($id, $iduser);
		$data['userid'] = $this->session->userdata('id');
		//		var_dump($data);
		$this->load->view("user/detail", $data);
	}
	public function hit_iklan()
	{
		$id =  $this->uri->segment(2);
		$data['hit'] = $this->M_Iklan->HitKerjaan($id);
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
		////		echo ($data);
		$this->load->view("user/overview", $data);
	}

	public function search()
	{
		$data['kategori'] = $this->M_Iklan->getAllCategory();
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
		$this->load->view('user/search/index', $data);
	}

	public function register()
	{
		if ($this->session->flashdata('name') == "") {
			$this->session->set_flashdata('name', '');
			$this->session->set_flashdata('username_register', '');
			$this->session->set_flashdata('email_register', '');
			$this->session->set_flashdata('birthdate', '');
			$this->session->set_flashdata('phone', '');
			$this->session->set_flashdata('alamat', '');
			$this->session->set_flashdata('gender', '');
		}
		$this->load->view('user/register');
	}

	public function listIklan()
	{
		$data['iklan'] = $this->M_TambahIklan->getIklan();
		$this->load->view('user/tambahiklan', $data);
	}

	public function lupapassword()
	{
		$this->load->view('user/lupapassword');
	}

	public function editiklan()
	{
		$this->load->view('user/editiklan');
	}

	public function verifikasiemail()
	{
		$this->load->view('user/verifikasiemail');
	}

	public function lupapassword2()
	{
		$this->load->view('user/lupapassword2');
	}

	public function forgot()
	{
		$this->load->view('user/forgot');
	}
}
