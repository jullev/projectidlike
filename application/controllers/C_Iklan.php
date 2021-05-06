<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Iklan extends CI_Controller
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

		if ($this->session->userdata('role')==1) {
			$this->load->view('admin/overview');
		}
		else if ($this->session->userdata('role')==2){
			$this->load->view('user/overview');
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



	public function prosesTambah()
	{

		$data = $this->input->post();
		if ($this->form_validation->run() == true) {
			$result = $this->M_Register->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = 'Data Pegawai Berhasil ditambahkan';
				$this->load->view('user/register', $out);
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Pegawai Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = '';
			$out['msg'] = validation_errors();
			$this->load->view('user/register', $out);
		}


		//echo json_encode($result);
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
				$out['msg'] = show_succ_msg('Data Pasien Berhasil diupdate', '20px');
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
		$id = $_POST['id'];
		$result = $this->M_pasien->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Pasien Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Pasien Gagal dihapus ', '20px');
		}
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
