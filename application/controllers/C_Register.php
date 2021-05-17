<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Register');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->load->views('tambahlist');
	}

	public function tampil()
	{
		$data['dataPasien'] = $this->M_pasien->select_all_pasien();
		$this->load->view('pasien/list_data', $data);
	}

	public function loginData()
	{
		$data = $this->input->post();
		//print_r($data);
		$this->M_Register->Select_Login($data);
		//		print_r( $hasil->role_idrole);
		//		print_r( $this->session->userdata('role'));

		if ($this->session->userdata('role') == 1) {
			$this->load->view('admin/overview');
		} else if ($this->session->userdata('role') == 2) {
			$this->load->view('user/dashboard/index');
		}
	}
	public function logOut()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('is_login');
		$logout = $this->session->sess_destroy();
		if ($logout) {
			redirect('view/overview_landing', 'refresh');
		} else {

			if ($this->session->userdata('role') != 1) {
				redirect("user");
				//			$this->load->view('user/overview', $hasil);
			} else {
				//			$this->load->view('admin/overview', $hasil);
				redirect("admin");
			}
		}
	}

	public function uniqueDataCheck()
	{
		$data = $this->input->get();
		$this->M_Register->uniqueDataCheck($data);
	}

	public function prosesTambah()
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

		$this->session->set_flashdata('name', $data['name']);
		$this->session->set_flashdata('username_register', $data['username_register']);
		$this->session->set_flashdata('email_register', $data['email_register']);
		$this->session->set_flashdata('birthdate', $data['birthdate']);
		$this->session->set_flashdata('alamat', $data['alamat']);
		$this->session->set_flashdata('phone', $data['phone']);
		$this->session->set_flashdata('gender', $data['gender']);


		if ($validation == true) {
			$result = $this->M_Register->insert($data);
			if ($result == "success") {
				$this->session->set_flashdata('msg', 'Pendaftaran berhasil! Silakan login menggunakan akun anda.');
				redirect("/");
			} elseif ($result == "failed") {
				$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
				redirect("register");
			} elseif ($result == "email-error") {
				$this->session->set_flashdata('msg', 'Email sudah pernah terdaftar!');
				redirect("register");
			} elseif ($result == "username-error") {
				$this->session->set_flashdata('msg', 'Username sudah tersedia! Coba username lain.');
				redirect("register");
			}
		} else {
			$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
			redirect("register");
		}
	}

	public function prosesTambahUser()
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

		$this->session->set_flashdata('name', $data['name']);
		$this->session->set_flashdata('username_register', $data['username_register']);
		$this->session->set_flashdata('email_register', $data['email_register']);
		$this->session->set_flashdata('birthdate', $data['birthdate']);
		$this->session->set_flashdata('alamat', $data['alamat']);
		$this->session->set_flashdata('phone', $data['phone']);
		$this->session->set_flashdata('gender', $data['gender']);


		if ($validation == true) {
			$result = $this->M_Register->insert($data);
			if ($result == "success") {
				$this->session->set_flashdata('msg', 'Pendaftaran berhasil! Silakan login menggunakan akun anda.');
				redirect("tambahuser");
			} elseif ($result == "failed") {
				$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
				redirect("tambahuser");
			} elseif ($result == "email-error") {
				$this->session->set_flashdata('msg', 'Email sudah pernah terdaftar!');
				redirect("tambahuser");
			} elseif ($result == "username-error") {
				$this->session->set_flashdata('msg', 'Username sudah tersedia! Coba username lain.');
				redirect("tambahuser");
			}
		} else {
			$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
			redirect("tambahuser");
		}
	}

	public function prosesTambahAdmin()
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

		$this->session->set_flashdata('name', $data['name']);
		$this->session->set_flashdata('username_register', $data['username_register']);
		$this->session->set_flashdata('email_register', $data['email_register']);
		$this->session->set_flashdata('birthdate', $data['birthdate']);
		$this->session->set_flashdata('alamat', $data['alamat']);
		$this->session->set_flashdata('phone', $data['phone']);
		$this->session->set_flashdata('gender', $data['gender']);


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

	public function update()
	{
		$id = trim($_POST['id']);

		$data['dataPasien'] = $this->M_pasien->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['userdata'] = $this->userdata;
		echo show_my_modal('modals/modal_update_pasien', 'update-pasien', $data);
	}


	public function prosesUpdate()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('umur', 'umur', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pasien->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_source('Data Pasien Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pasien Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete()
	{
		$data = $this->input->get();
		$id = $data['id'];
		$result = $this->M_Register->delete($id);

		if ($result > 0) {

			redirect('userlist?msg=success');
		} else {
			redirect('userlist?msg=error');
		}
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
