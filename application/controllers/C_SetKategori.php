<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_SetKategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Setkategori');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->views('setkategori')
	}

	public function prosestambahkategori()
	{

		$data = $this->input->post();
		$validation = $this->form_validation;

		$validation->set_rules("nama_kategori", "category", "required|trim|is_unique['kategori.nama_kategori']");

		if ($validation == true) {
			$result = $this->M_Register->insert($data);
			if ($result == "success") {
				$this->session->set_flashdata('msg', 'Penambahan kategori berhasil!!');
				redirect("setkategori");
			} elseif ($result == "failed") {
				$this->session->set_flashdata('msg', 'Terdapat kategori yang sama');
				redirect("setkategori");
			} else {
				$this->session->set_flashdata('msg', 'Periksa kembali data anda!');
				redirect("setkategori");
			}
		}
	}
}
