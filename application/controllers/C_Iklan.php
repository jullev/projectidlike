<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Iklan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Register');
		$this->load->model('M_Iklan');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->load->views('tambahlist');
	}

	public function index_pengajuan()
	{
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_baru();
		//var_dump($data);
		$this->load->view('admin/iklanbaru', $data);
	}

	public function reportkerjaan()
	{
		$id = $this->uri->segment(2);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['dataIklan'] = $this->M_Iklan->select_iklan($id);
		//		var_dump($data);
		$this->load->view('user/reportkerjaan', $data);
	}

	public function index_pengajuan_diterima()
	{
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
		//		var_dump($data);
		$this->load->view('admin/iklandisetujui', $data);
	}

	public function terimaiklan()
	{
		$id = $this->uri->segment(2);
		//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailuser'] = $this->M_Iklan->terima_iklan($id);
		//  	var_dump($data);
		$this->load->view('admin/editadmin', $data);
	}

	public function tampil()
	{
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan();
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$this->load->view('admin/semuaiklan', $data);
	}

	public function tampiliklanselesai()
	{
		$data['dataIklan'] = $this->M_Iklan->select_iklan_selesai();
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$this->load->view('admin/iklanselesai', $data);
	}

	public function tampilIklanTolak()
	{
		$data['dataIklan'] = $this->M_Iklan->select_iklan_tolak();
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$this->load->view('admin/iklanditolak', $data);
	}

	public function delete()
	{
		$data = $this->input->get();
		$id = $data['id'];
		$result = $this->M_Iklan->delete($id);

		if ($result > 0) {

			redirect('iklanditolak?msg=success');
		} else {
			redirect('iklanditolak?msg=error');
		}
	}

	public function detaillaporan()
	{
		$id = $this->uri->segment(2);
		//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailhit'] = $this->M_Iklan->detail_iklan_selesai($id);
		//  	var_dump($data);
		$this->load->view('admin/detaillaporanselesai', $data);
	}

	public function detailhit()
	{
		$id = $this->uri->segment(2);
		//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailhit'] = $this->M_Iklan->select_hit_periklan($id);
		//  	var_dump($data);
		$this->load->view('admin/detailhit', $data);
	}

	public function tolakhitter()
	{
		$id = $this->uri->segment(2);
		//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailhit'] = $this->M_Iklan->tolak_hit($id);
		//  	var_dump($data);
		$this->load->view('admin/detailhit', $data);
	}

	public function terimahitter()
	{
		$id = $this->uri->segment(2);
		//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['terimahit'] = $this->M_Iklan->terima_hit($id);
		$data['detailhit'] = $this->M_Iklan->select_hit_periklan($id);
		//  	var_dump($data);
		$this->load->view('admin/detailhit', $data);
	}


	public function tambahIklan()
	{
		$inputGet = $this->input->get();

		if (isset($inputGet['msg'])) {
			$data['status'] = $inputGet['msg'];
			$data['msg'] = $inputGet['msg'] == 'success' ? 'Berhasil menambahkan iklan' : 'Iklan gagal ditambahkan, ulangi lagi.';
		}

		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['kategori'] = $this->M_Iklan->getAllCategory();
		$data['kabupaten'] = $this->M_Iklan->getAllKab();
		$this->load->view("admin/tambahiklan", $data);
	}

	public function editIklan()
	{
		$inputGet = $this->input->get();

		if (isset($inputGet['msg'])) {
			$data['status'] = $inputGet['msg'];
			$data['msg'] = $inputGet['msg'] == 'success' ? 'Berhasil menambahkan iklan' : 'Iklan gagal ditambahkan, ulangi lagi.';
		}

		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['kategori'] = $this->M_Iklan->getAllCategory();
		$data['kabupaten'] = $this->M_Iklan->getAllKab();
		$this->load->view("admin/tambahiklan", $data);
	}

	public function simpanIklan()
	{
		$input = $this->input->post();

		// Cek apakah file ada
		if ($_FILES['img']['error'] == UPLOAD_ERR_NO_FILE) {
			redirect('tambahiklan?msg=error');
		}

		// Upload image
		$img_upload = $this->uploadGambarIklan();
		if ($img_upload['status'] != 'success') {
			redirect('tambahiklan?msg=error');
		}

		$input['img'] = $img_upload['filename'];
		$result = $this->M_Iklan->saveIklan($input);
		if ($result > 0) {
			redirect('tambahiklan?msg=success');
		} else {
			redirect('tambahiklan?msg=error');
		}
	}

	private function uploadGambarIklan()
	{
		$img_ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
		// Randomize string
		$this->load->helper('string');
		$random_name = random_string('alnum', 15);
		$img_name = $random_name . '.' . $img_ext;

		$config['upload_path'] = 'assets/image/iklan/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 4096;
		$config['file_name'] = $img_name;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('img')) {
			$this->upload->data();
			$data['status'] = 'success';
			$data['filename'] = $img_name;
			return $data;
		} else {
			$data['status'] = $this->upload->display_errors();
			return $data;
		}
	}

	public function reportIklan()
	{
		$config['upload_path'] = '/assets/image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			// If the upload fails
			echo $this->upload->display_errors('<p>', '</p>');
		} else {
			// Pass the full path and post data to the set_newstudent model
			$image_path = $this->upload->data();
			$data = array(
				'id_report' => $this->input->post('hotelname'),
				'id_user' => $this->session->userdata('id'),
				'id_kerjaan' => $this->input->post('idkerjaan'),
				'detail' => $this->input->post('contents'),
				'bukti' => $image_path[full_path],
				'tgl_selesai' => CURRENT_DATE()
			);
			print_r($data);
			$result = $this->db->insert('report_kerjaan', $data);
			if ($result > 0) {
				//				redirect('tambahiklan?msg=success');
			} else {
				//				redirect('tambahiklan?msg=error');
			}
		}
	}

	public function inputReview()
	{
		$data = $this->input->post();
		//print_r($data);
		$this->M_Iklan->isistarpoint($data);
		redirect("iklanselesai");
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


	public function searchIklan()
	{
		$input_post = $this->input->post();
		$input_get = $this->input->get();

		$data['kabupaten'] = $this->M_Iklan->getAllKab();
		$data['kategori'] = $this->M_Iklan->getAllCategory();
		$data['kategori_jml'] = array();
		foreach ($data['kategori'] as $kat) {
			array_push($data['kategori_jml'], $this->M_Iklan->getCategoryCount($kat->idkategori));
		}

		// Current page
		$page = $this->uri->segment(2) !== null ? (intval($this->uri->segment(2) - 1)) : 0;

		if (isset($input_get['loc'])) {
			$data['kota_badge'] = $input_get['loc'] != '#' ? $this->M_Iklan->getCityName($input_get['loc']) : '';
			// Data iklan
			$data['dataIklan'] = $this->M_Iklan->searchIklanLink($input_get['loc'], $page);
			$data['jmlIklan'] = count($data['dataIklan']);
		} elseif (isset($input_get['kota_get'])) {
			// Ambil data input untuk ditampilkan di badge
			if (isset($input_get['kategori_get'])) {
				// Get category name
				$data['kat_badge'] = $input_get['kategori_get'] != '' && $input_get['kategori_get'] != '#' ? $this->M_Iklan->getCategoryName($input_get['kategori_get']) : '';
			}
			$data['kota_badge'] = isset($data['kota_get']) && $input_get['kota_get'] != '#' ? $this->M_Iklan->getCityName($input_get['kota_get']) : '';
			$data['hargamin_badge'] = isset($data['harga_min']) && $input_get['harga_min'] != '' ? $input_get['harga_min'] : '';
			$data['hargamax_badge'] = isset($data['harga_max']) && $input_get['harga_max'] != '' ? $input_get['harga_max'] : '';
			$data['startdate_badge'] = isset($data['start_date']) && $input_get['start_date'] != '' ? $input_get['start_date'] : '';
			$data['enddate_badge'] = isset($data['end_date']) && $input_get['end_date'] != '' ? $input_get['end_date'] : '';

			// Data iklan
			$data['dataIklan'] = $this->M_Iklan->searchIklanGet($input_get, $page);
//			$data['totalIklan'] = $this->M_Iklan->searchIklanGet($input_get, 'default');
		}elseif(isset($input_get['all'])) {
			// Data iklan
			$data['dataIklan'] = $this->M_Iklan->searchIklanAll($page);
		} elseif (isset($input_get['cat'])) {
			$data['kat_badge'] = $input_get['cat'] != '' || $input_get['cat'] != '#' ? $this->M_Iklan->getCategoryName($input_get['cat']) : '';
			// Data iklan
			$data['dataIklan'] = $this->M_Iklan->searchIklanCat($input_get['cat'], $page);
		}

		$data['jmlIklan'] = $data['dataIklan']['query_count'];

		// Pagination
		$config['base_url'] = 'http://localhost/projectidlike/search/';
		$config['total_rows'] = $data['dataIklan']['query_count'];
		$config['per_page'] = 15;
		$config['num_links'] = 2;
		$config['reuse_query_string'] = true;
		$config['use_page_numbers'] = true;
		// UI
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$this->load->view('user/search/index', $data);
	}

	public function filterHarga()
	{
		$input = $this->input->post();

		$data['dataIklan'] = $this->M_Iklan->filterharga($input);
		$this->load->view('user/search/result', $data);
	}

	public function filterDate()
	{
		$input = $this->input->post();

		$data['dataIklan'] = $this->M_Iklan->filterDate($input);
		$this->load->view('user/search/result', $data);
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
