<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_TambahIklan");
	}

	public function index()
	{
		// load view admin/overview.php
		$this->load->view("user/overview");
	}

	public function dashboard()
	{
		$this->load->view("user/dashboard/index");
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
		$this->load->view('user/register');
	}

	public function listIklan()
	{
		$data['iklan'] = $this->M_TambahIklan->getIklan();
		$this->load->view('user/tambahiklan', $data);
	}
}
