<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_ManagementAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ManageAdmin');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function uniqueDataCheck()
    {
        $data = $this->input->get();
        $this->M_ManageAdmin->uniqueDataCheck($data);
    }
}
