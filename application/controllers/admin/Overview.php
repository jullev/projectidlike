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
    $this->load->view("admin/overview");
  }

  public function coba()
  {
    // code...
    echo "coba";
  }

  public function adminlist()
  {
    $this->load->view('admin/adminlist');
  }

  public function tambahadmin()
  {
    $this->load->view('admin/tambahadmin');
  }

  public function editadmin()
  {
    $this->load->view('admin/editadmin');
  }
  public function loginadmin()
  {
    $this->load->view('admin/login');
  }
}
