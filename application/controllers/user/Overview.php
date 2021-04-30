<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// load view admin/overview.php
		$this->load->view("user/overview");
	}

	public function detail()
	{
		$this->load->view("user/detail");
	}

	public function search()
	{
		$this->load->view('user/search');
	}

	public function register()
	{
		$this->load->view('user/register');
	}
	public function list()
	{
		$this->load->view('user/tambahiklan');
	}
}
