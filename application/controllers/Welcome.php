<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Register');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model("M_Iklan");
	}
	public function index()
	{
		// var_dump($_SERVER['HTTP_HOST']);
		//		echo $this->session->userdata('role');
		if ($this->session->userdata('role') == 1) {
			$data['allcount'] = $this->M_Iklan->show_allcount();
			$this->load->view('admin/overview', $data);
		} else if ($this->session->userdata('role') == 2) {
			$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
			$data['kategori'] = $this->M_Iklan->getAllCategory();
			$data['kabupaten'] = $this->M_Iklan->getAllKab();
			$this->load->view('user/overview', $data);
		} else {
			$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
			$data['kategori'] = $this->M_Iklan->getAllCategory();
			$data['kabupaten'] = $this->M_Iklan->getAllKab();
			$this->load->view('user/overview', $data);
		}
	}
}
