<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_TambahIklan");
		$this->load->model("M_Iklan");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
		var_dump($data);
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

	public function detail()
	{
		$this->load->view("user/detail");
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
