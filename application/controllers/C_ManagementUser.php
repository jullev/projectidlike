<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_ManagementUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_ManageUser");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["user"] = $this->M_ManageUser->select_all_user();
        $this->load->view("admin/tambahuser", $data);
    }

    public function add()
    {
        $product = $this->M_ManageUser;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/tambahuser");
    }

    public function updateProfile(){
		$input = $this->input->post();
		$input['id'] = $this->session->userdata('id');
		echo $this->uploadImage($input['avatar']);
//		$result = $this->M_ManageUser->updateProfile($input);
//		if($result > 0){
//			$this->session->set_userdata('status', 'success');
//			$this->session->set_userdata('msg', 'Data berhasil diperbarui.');
//		}else{
//			$this->session->set_userdata('status', 'error');
//			$this->session->set_userdata('msg', 'Periksa kembali data anda.');
//		}
//		redirect("dashboard", "refresh");

	}

	private function uploadImage($pic){

		// Mengubah nama file menjadi random
		$this->load->helper('string');
		$fileExt = pathinfo($pic, PATHINFO_EXTENSION);
		$fileName = random_string('alnum', 10);
		$file = $fileName.".".$fileExt;

		// Config untuk upload image
		$config['upload_path'] = './assets/image/users/';
    	$config['allowed_types'] = 'jpg|jpeg|png';
    	$config['file_name'] = $file;
    	$config['overwrite'] = true;
    	$config['max_size'] = 4096;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('avatar')){
			return $this->upload->data('file_name');
		}else{
			return 'default.png';
		}
	}

	public function updatePassword(){
		$input = $this->input->post();
		$input['id'] = $this->session->userdata('id');
		$result = $this->M_ManageUser->updatePassword($input);
		if($result > 0){
			$this->session->set_userdata('status', 'success');
			$this->session->set_userdata('msg', 'Password berhasil diperbarui.');
		}else{
			$this->session->set_userdata('status', 'error');
			$this->session->set_userdata('msg', 'Periksa kembali data anda.');
		}
		redirect("dashboard");
	}

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/products');

    //     $product = $this->product_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($product->rules());

    //     if ($validation->run()) {
    //         $product->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["product"] = $product->getById($id);
    //     if (!$data["product"]) show_404();

    //     $this->load->view("admin/product/edit_form", $data);
    // }

    // public function delete($id = null)
    // {
    //     if (!isset($id)) show_404();

    //     if ($this->product_model->delete($id)) {
    //         redirect(site_url('admin/products'));
    //     }
    // }
}
