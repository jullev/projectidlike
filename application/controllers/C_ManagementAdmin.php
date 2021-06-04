<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_ManagementAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ManageAdmin');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function uniqueDataCheck()
    {
        $data = $this->input->get();
        $this->M_ManageAdmin->uniqueDataCheck($data);
    }

    public function updateAdmin()
    {
        $input = $this->input->post();
        $input['id'] = $this->session->userdata('id');
        // var_dump($input);
        if ($_FILES['profil']['error'] == UPLOAD_ERR_NO_FILE) {
            $data = $this->M_ManageAdmin->checkImage();
            $input['profil'] = $data->foto_profil;
        } else {
            $img_upload = $this->uploadImage();
            if ($img_upload['status'] != 'success') {
                $this->session->set_userdata('status', 'error');
                $this->session->set_userdata('msg', $img_upload['msg']);
                redirect('adminlist', 'refresh');
            } else {
                $input['profil'] = $img_upload['filename'];
            }
        }

        $result = $this->M_ManageAdmin->updateAdmin($input);
        if ($result > 0) {
            $this->session->set_userdata('status', 'success');
            $this->session->set_userdata('msg', 'Data berhasil diperbarui.');
        } else {
            $this->session->set_userdata('status', 'error');
            $this->session->set_userdata('msg', 'Periksa kembali data anda.');
        }
        redirect("adminlist", "refresh");
    }


    private function uploadImage()
    {
        $img_check = $this->M_ManageAdmin->checkImage();
        if ($img_check->foto_profil == 'default.png') {

            $this->load->helper('string');

            $image_ext = pathinfo($_FILES['profil']['name'], PATHINFO_EXTENSION);
            $image_name = random_string('alnum', 10);

            $image = $image_name . '.' . $image_ext;
        } else {
            $image = $img_check->foto_profil;
        }


        $config['upload_path'] = 'assets/image/users/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $image;
        $config['overwrite'] = true;
        $config['max_size'] = 4096;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('profil')) {
            $this->upload->data();
            $result['status'] = 'success';
            $result['filename'] = $image;
            return $result;
        } else {
            $result['status'] = 'error';
            $result['msg'] = $this->upload->display_errors();
            return $result;
        }
    }
}
