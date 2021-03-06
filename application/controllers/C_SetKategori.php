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
		$this->load->views('setkategori');
	}

	public function prosestambahkategori()
	{

		$data = $this->input->post();
		$validation = $this->form_validation;

		$validation->set_rules("nama_kategori", "category", "required|trim|is_unique['kategori.nama_kategori']");

		if ($validation == true) {
			$result = $this->M_Setkategori->addkategori($data);
			if ($result == "success") {
				$this->session->set_userdata('msg', 'Penambahan kategori berhasil!!');
				redirect("setkategori");
			} elseif ($result == "failed") {
				$this->session->set_userdata('msg', 'Terdapat kategori yang sama');
				redirect("setkategori");
			} else {
				$this->session->set_userdata('msg', 'Periksa kembali data anda!');
				redirect("setkategori");
			}
		}
	}

	public function delete()
	{
		$data = $this->input->get();
		$id = $data['id'];
		$result = $this->M_Setkategori->delete($id);

		if ($result > 0) {

			redirect('setkategori?msg=success');
		} else {
			redirect('setkategori?msg=error');
		}
	}

	public function UpdateKategori()
	{
		$input = $this->input->post();
		$input['id'] = $this->session->userdata('id');
		$result = $this->M_Setkategori->updateKategori($input);


		if ($result > 0) {
			$this->session->set_userdata('status', 'success');
			$this->session->set_userdata('msg', 'Data berhasil diperbarui');
		} else {
			$this->session->set_userdata('status', 'error');
			$this->session->set_userdata('msg', 'Periksa kembali data anda. ');
		}
		redirect("setkategori", "refresh");
	}
}
