<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Register');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPasien'] = $this->M_pasien->select_all_pasien();
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();

		$data['page'] = "Pasien";
		$data['judul'] = "Data Pasien";
		$data['deskripsi'] = "Manage Data Pasien";

		$data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pasien', 'tambah-pasien', $data);
		// echo json_encode($data['dataPasien']);
		$this->template->views('pasien/home', $data);
	}

	public function tampil() {
		$data['dataPasien'] = $this->M_pasien->select_all_pasien();
		$this->load->view('pasien/list_data', $data);
	}

	public function loginData($data) {
		$data['dataPasien'] = $this->M_pasien->select_all_pasien();
		$this->load->view('pasien/list_data', $data);
	}

	public function prosesTambah() {
		$data = $this->input->post();
		$result = $this->M_Register->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pegawai Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Pegawai Gagal ditambahkan', '20px');
			}
		

		echo json_encode($result);
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataPasien'] = $this->M_pasien->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['userdata'] = $this->userdata;
		echo show_my_modal('modals/modal_update_pasien', 'update-pasien', $data);
	}

	public function prosesUpdate() {
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

	public function delete() {
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