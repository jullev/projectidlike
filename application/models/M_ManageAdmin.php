<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ManageAdmin extends CI_Model
{
	public function select_all_admin() {
		$sql = "SELECT * FROM user where role_idrole=1";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_admin_id($id) {
		$sql = "SELECT * FROM user where role_idrole=1 and iduser ='$id'";
//		echo $sql;
		$data = $this->db->query($sql);

		return $data->result();
	}
	public function update_admin(){
		$id = $this->input->post('idadmin');
		$data = array(

			'email' => $this->input->post('emailadmin'),
			'username' => $this->input->post('useradmin'),
			'password' => $this->input->post('password'),
			'nama_user' => $this->input->post('namaadmin'),
			'tanggal_lahir' => $this->input->post('lahiradmin'),
			'no_hp' => $this->input->post('phone'),

		);
		$this->db->where('iduser',$id);
		$this->db->update('user',$data);
		redirect('sumberdana');

	}
}
