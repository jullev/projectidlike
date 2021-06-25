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
		$result = $this->M_Register->Select_Login($data);
		//		print_r( $hasil->role_idrole);
		//		print_r( $this->session->userdata('role'));

		if ($result == 'error') {
			redirect('/', 'refresh');
		}

		if ($this->session->userdata('role') == 1) {
			redirect('admin', 'refresh');
		} else if ($this->session->userdata('role') == 2) {
			//			$this->load->view('user/dashboard/index');
			redirect('dashboard', 'refresh');
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

		// Kirim kode verifikasi email
		$this->sendEmail($email = $data['email_register']);

		//		$this->session->set_flashdata('name', $data['name']);
		//		$this->session->set_flashdata('username_register', $data['username_register']);
		//		$this->session->set_flashdata('email_register', $data['email_register']);
		//		$this->session->set_flashdata('birthdate', $data['birthdate']);
		//		$this->session->set_flashdata('alamat', $data['alamat']);
		//		$this->session->set_flashdata('phone', $data['phone']);
		//		$this->session->set_flashdata('gender', $data['gender']);


		if ($validation == true) {
			$result = $this->M_Register->insert($data);
			if ($result == "success") {
				$this->session->set_userdata('vstatus', 'success');
				$this->session->set_userdata('vmsg', 'Pendaftaran berhasil! Silakan cek email anda untuk verifikasi akun ini.');
				redirect("verifikasiemail");
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

	private function sendEmail($email = '', $status = 'new', $tokenResend = '')
	{
		$token = $this->generateToken();

		// Save into database
		if ($status == 'new') {
			$save_token = $this->M_Register->saveToken($token, $email);
			if ($save_token < 1) {
				echo 'Token gagal ditambahkan';
			}
		}

		// Send email
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_user' => 'temantumbuh123@gmail.com',
			'smtp_pass' => 'temantum123',
			'smtp_port' => '465',
			'smtp_crypto' => 'ssl',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n",
		);
		// Load library email
		$this->load->library('email', $config);
		$this->email->from('admin@temantumbuh.com', SITE_NAME);
		$this->email->to($email);
		if ($status == 'new') {
			$this->email->subject('Pendaftaran berhasil!');
			$this->email->message('Selamat! Akun anda berhasil dibuat, pakai kode <strong>' . $token . '</strong> untuk verifikasi akun anda di <strong>' . site_url('verifikasiemail') . '</strong>');
		} elseif ($status == 'resend') {
			$this->email->subject('Verifikasi Email');
			$this->email->message('Kode verifikasi anda adalah <strong>' . $tokenResend . '</strong>. Masukkan kode ke dalam link berikut ini:  <strong>' . site_url('verifikasiemail') . '</strong>');
		} elseif ($status == 'reset-password') {
			$this->email->subject('Reset Password');
			$this->email->message('Untuk melakukan reset password silahkan klik link berikut: <strong> ' . site_url('forgot') . '?t=' . $tokenResend . '</strong>');
		}
		$this->email->send();
	}

	private function generateToken()
	{
		$this->load->helper('string');
		$token = random_string('numeric', '6');
		return $token;
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


		// $this->session->set_flashdata('name', $data['name']);
		// $this->session->set_flashdata('username_register', $data['username_register']);
		// $this->session->set_flashdata('email_register', $data['email_register']);
		// $this->session->set_flashdata('birthdate', $data['birthdate']);
		// $this->session->set_flashdata('alamat', $data['alamat']);
		// $this->session->set_flashdata('phone', $data['phone']);
		// $this->session->set_flashdata('gender', $data['gender']);


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

	public function deleteAdmin()
	{
		$data = $this->input->get();
		$id = $data['id'];
		$result = $this->M_Register->delete($id);

		if ($result > 0) {

			redirect('adminlist?msg=success');
		} else {
			redirect('adminlist?msg=error');
		}
	}

	public function verifyEmail()
	{
		$data = $this->input->post();

		// Check Token Availability
		$result = $this->M_Register->checkToken($data['verify-email']);
		if ($result !== NULL) {
			$verify = $this->M_Register->verifyEmail($result->email);
			if ($verify > 0) {
				$this->session->set_userdata('email_msg', 'Verifikasi email berhasil! Silakan login menggunakan akun anda.');
				redirect('/', 'refresh');
			} else {
				$this->session->set_userdata('vmsg', 'Token tidak sesuai, ulangi lagi');
				redirect('verifikasiemail', 'refresh');
			}
		} else {
			$this->session->set_userdata('vmsg', 'Token tidak sesuai, ulangi lagi');
			redirect('verifikasiemail', 'refresh');
		}
	}

	public function resendToken()
	{
		$token = $this->generateToken();
		$resend = $this->M_Register->resendToken($token);

		if ($resend > 0) {
			$this->session->set_userdata('vmsg', 'Kode verifikasi berhasil dikirim! Silakan cek email anda.');
			$this->session->set_userdata('vstatus', 'success');
			$this->sendEmail($email = $this->session->userdata('email'), $status = 'resend', $tokenResend = $token);
			$this->session->unset_userdata('email');
			redirect('verifikasiemail', 'refresh');
		} else {
			echo 'gagal';
		}
	}

	public function forgotPassword()
	{
		$data = $this->input->post();



		$result = $this->M_Register->checkemail($data['reset']);
		if ($result == '') {
			$this->session->set_userdata('vmsg', 'Username/Email tidak dapat ditemukan, Silahkan ulangi lagi');
			redirect('lupa-password', 'refresh');
		} else {
			$token = $this->generateToken();
			$this->M_Register->saveForgotPassword($result, $token);
			$this->session->set_userdata('vmsg', 'Silahkan check email anda, jika token tidak muncul silahkan isi dan kirim ulang');
			$this->session->set_userdata('vstatus', 'success');
			$this->sendEmail($email = $result, $status = 'reset-password', $tokenResend = $token);
			redirect('lupa-password', 'refresh');
		}
	}

	public function forgot()
	{
		$input = $this->input->get();

		// Cek apakah token valid
		$result = $this->M_Register->checkTokenPassword($input['t']);
		if ($result == 'error') {
			$data['msg'] = 'Kode token tidak sesuai. Silakan isi ulang email/username anda pada link berikut: <strong><a href= ' . site_url('lupa-password') . ' >Klik di sini</a><strong> ';
		}
		$data['result'] = $result;

		$this->load->view('user/forgot', $data);
	}

	public function updatePassword()
	{
		$input = $this->input->post();
		$input['email'] = $this->session->userdata('email');
		$result = $this->M_Register->updatePassword($input, true);
		if ($result > 0) {
			$this->session->set_userdata('email_msg', 'Password berhasil diperbarui, Silahkan Login Menggunakan akun anda.');
			$this->M_Register->deleteToken($this->session->userdata('email'));
			$this->session->unset_userdata('email');
		} else {
			$this->session->set_userdata('status', 'error');
			$this->session->set_userdata('msg', 'Periksa kembali data anda.');
		}
		redirect("/");
	}
}
