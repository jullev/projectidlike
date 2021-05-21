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
		// Cek apakah ada input file
		if($_FILES['avatar']['error'] == UPLOAD_ERR_NO_FILE){
			$temp = $this->M_ManageUser->checkImage();
			$input['avatar'] = $temp->foto_profil;
		}else{
			// Upload image
			$img_upload = $this->uploadImage();
			if($img_upload['status'] != 'success'){
				$this->session->set_userdata('status', 'error');
				$this->session->set_userdata('msg', $img_upload['msg']);
				redirect('dashboard', 'refresh');
			}else{
				$input['avatar'] = $img_upload['filename'];
			}
		}


		$result = $this->M_ManageUser->updateProfile($input);
		if($result > 0){
			$this->session->set_userdata('status', 'success');
			$this->session->set_userdata('msg', 'Data berhasil diperbarui.');
		}else{
			$this->session->set_userdata('status', 'error');
			$this->session->set_userdata('msg', 'Periksa kembali data anda.');
		}
		redirect("dashboard", "refresh");

	}

	private function uploadImage(){

    	// Cek apakah gambar  default atau tidak
		// Jika gambar tidak default, maka gambar akan ditimpa
		// Jika default, maka akan upload gambar dengan nama file random
		$img_check = $this->M_ManageUser->checkImage();
		if($img_check->foto_profil == 'default.png'){
			// Rename random filename
			$this->load->helper('string');
			$image_ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
			$image_name = random_string('alnum', 10);
			$image = $image_name.'.'.$image_ext;
		}else{
			$image = $img_check->foto_profil;
		}

		// Config untuk upload image
		$config['upload_path'] = 'assets/image/users/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['file_name'] = $image;
		$config['overwrite'] = true;
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('avatar')){
			$this->upload->data();
			$result['status'] = 'success';
			$result['filename'] = $image;
			return $result;
		}else{
			$result['status'] = 'error';
			$result['msg'] = $this->upload->display_errors();
			return $result;
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
