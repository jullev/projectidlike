<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_TambahIklan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_TambahIklan');
		$this->load->model('M_Iklan');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['dataKategory'] = $this->M_TambahIklan->select_all_Kategory();
		$data['dt_kabupaten'] = $this->M_TambahIklan->get();
		$this->load->view('tambahiklan', $data);

		// $data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pasien', 'tambah-pasien', $data);
		// echo json_encode($data['dataPasien']);
		$this->template->views('tambahiklan', $data);
	}
	public function index_pengajuan()
	{
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_baru();
		var_dump($data);
		$this->load->views('admin/overview', $data);
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
