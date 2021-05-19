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

    public function prosesUpdate()
    {
        $data = $this->input->post();
		$validation = $this->form_validation;

		$validation->set_rules("username", "username_register", "required|trim|is_unique['user.username']");
		$validation->set_rules("nama_user", "name", "required|trim");
		$validation->set_rules("email", "email_register", "required|trim|valid_email|is_unique['user.email']");
		$validation->set_rules("tanggal_lahir", "birthdate", "required");
		$validation->set_rules("gender", "gender", "required");
		$validation->set_rules("no_hp", "phone", "required");
		$validation->set_rules("password", "password_register", "required");

        if ($validation == true) {
			$result = $this->M_Register->insertAdmin($data);
			if ($result == "success") {
				$this->session->set_flashdata('msg', 'Pendaftaran Admin berhasil!');
				redirect("tambahadmin");
			} elseif ($result == "failed") {
				$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
				redirect("tambahadmin");
			} elseif ($result == "email-error") {
				$this->session->set_flashdata('msg', 'Email sudah pernah terdaftar!');
				redirect("tambahadmin");
			} elseif ($result == "username-error") {
				$this->session->set_flashdata('msg', 'Username sudah tersedia! Coba username lain.');
				redirect("tambahadmin");
			}
		} else {
			$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
			redirect("tambahadmin");
		}
    }
}
