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

    public function updateAdmin()
    {
        $input = $this->input->post();
        $input['id'] = $this->session->userdata('id');
        $result = $this->M_ManageAdmin->updateProfile($input);
        if ($result > 0) {
            $this->session->set_userdata('status', 'success');
            $this->session->set_userdata('msg', 'Data berhasil diperbarui.');
        } else {
            $this->session->set_userdata('status', 'error');
            $this->session->set_userdata('msg', 'Periksa kembali data anda.');
        }
        redirect("editadmin", "refresh");
    }
}
