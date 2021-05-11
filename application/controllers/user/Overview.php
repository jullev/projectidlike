<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_TambahIklan");
		$this->load->library('session');
		$this->load->model("M_Iklan");
	}

	public function index2()
	{
		// load view admin/overview.php
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
//		var_dump($data);
		$this->load->view("user/overview",$data);
	}
	public function index()
	{
		// load view admin/overview.php
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
//		echo ($data);
		$this->load->view("user/overview",$data);
	}

	public function dashboard()
	{
		$this->load->view("user/dashboard/index");
	}

	public function iklansaya()
	{
		$this->load->view("user/iklansaya");
	}

	public function hitproject()
	{
		$this->load->view("user/hitproject");
	}

	public function menunggupersetujuan()
	{
		$this->load->view('user/iklanmenunggu');
	}
	
	public function detail_iklan()
	{
		$id =  $this->uri->segment(2);
		$data['dataIklan'] = $this->M_Iklan->select_iklan($id);
		$data['userid'] = $this->session->userdata('id');
//		var_dump($data);
		$this->load->view("user/detail",$data);
	}
	public function hit_iklan()
	{
		$id =  $this->uri->segment(2);
		$id_user =  $this->uri->segment(3);
		$data['dataIklan'] = $this->M_Iklan->select_iklan($id);
		$data['userid'] = $this->session->userdata('id');
//		var_dump($data);
		$this->load->view("user/detail",$data);
	}

	public function search()
	{
		$this->load->view('user/search/index');
	}

	public function register()
	{
		if($this->session->flashdata('name') == ""){
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
}
