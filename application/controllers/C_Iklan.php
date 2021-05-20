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
		var_dump($data);
		$this->load->view('admin/iklanbaru',$data);
	}
	public function reportkerjaan()
	{
		$id =  $this->uri->segment(2);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['dataIklan'] = $this->M_Iklan->select_iklan($id);
//		var_dump($data);
		$this->load->view('user/reportkerjaan',$data);
	}
	public function index_pengajuan_diterima()
	{
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan_disetujui();
//		var_dump($data);
		$this->load->view('admin/iklandisetujui',$data);
	}
	public function terimaiklan()
	{
		$id =  $this->uri->segment(2);
//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailuser']=$this->M_Iklan->terima_iklan($id);
//  	var_dump($data);
		$this->load->view('admin/editadmin',$data);
	}

	public function tampil()
	{
		$data['dataIklan'] = $this->M_Iklan->select_all_iklan();
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$this->load->view('admin/semuaiklan', $data);
	}
	public function detailhit()
	{
		$id =  $this->uri->segment(2);
//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailhit']=$this->M_Iklan->select_hit_periklan($id);
//  	var_dump($data);
		$this->load->view('admin/detailhit',$data);
	}
	public function tolakhitter()
	{
		$id =  $this->uri->segment(2);
//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['detailhit']=$this->M_Iklan->tolak_hit($id);
//  	var_dump($data);
		$this->load->view('admin/detailhit',$data);
	}
	public function terimahitter()
	{
		$id =  $this->uri->segment(2);
//  	var_dump("data ",$id);
		$data['allcount'] = $this->M_Iklan->show_allcount();
		$data['terimahit']=$this->M_Iklan->terima_hit($id);
		$data['detailhit']=$this->M_Iklan->select_hit_periklan($id);
//  	var_dump($data);
		$this->load->view('admin/detailhit',$data);
	}


	public function tambahIklan(){
		$inputGet = $this->input->get();

		if(isset($inputGet['msg'])){
			$data['status'] = $inputGet['msg'];
			$data['msg'] = $inputGet['msg'] == 'success' ? 'Berhasil menambahkan iklan' : 'Iklan gagal ditambahkan, ulangi lagi.';
		}

		$data['kategori'] = $this->M_Iklan->getAllCategory();
		$data['kabupaten'] = $this->M_Iklan->getAllKab();
		$this->load->view("user/tambahiklan", $data);
	}

	public function simpanIklan(){
		$input = $this->input->post();
		$result = $this->M_Iklan->saveIklan($input);
		if($result > 0){
			redirect('tambahiklan?msg=success');
		}else{
			redirect('tambahiklan?msg=error');
		}
	}

	public function reportIklan(){
		$config['upload_path'] = '/assets/image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')){
			// If the upload fails
			echo $this->upload->display_errors('<p>', '</p>');
		}else{
			// Pass the full path and post data to the set_newstudent model
			$image_path = $this->upload->data();
			$data = array(
				'id_report'                => $this->input->post('hotelname'),
				'id_user'        => $this->session->userdata('id'),
				'id_kerjaan'             => $this->input->post('idkerjaan'),
				'detail'             => $this->input->post('contents'),
				'bukti'      =>    $image_path[full_path],
				'tgl_selesai'              => CURRENT_DATE()
			);
			print_r($data);
			$result = $this->db->insert('report_kerjaan', $data);
			if($result > 0){
//				redirect('tambahiklan?msg=success');
			}else{
//				redirect('tambahiklan?msg=error');
			}
		}


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
