<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ManageUser extends CI_Model
{

	public function select_all_user()
	{
		$sql = "SELECT * FROM user where role_idrole=2";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_user_id($id)
	{
		$sql = "SELECT * FROM user where role_idrole=2 and iduser ='$id'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function save()
	{
	}

	public function delete($id)
	{
		$sql = "DELETE FROM user WHERE iduser='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
	public function updateProfile($input){
		$input['phone'] = '62'.$input['phone'];
		$sql = "UPDATE user SET nama_user='".$input['nama']."', gender='".$input['gender']."', email='".$input['email']."', tanggal_lahir='".$input['birthdate']."', no_hp='".$input['phone']."', alamat='".$input['alamat']."', foto_profil='".$input['avatar']."' WHERE iduser=".$input['id'];
		return $this->db->query($sql);
	}
	public function updatePassword($input){
		$sql = "UPDATE user SET password=md5('".$input['pwd']."') WHERE iduser=".$input['id'];
		return $this->db->query($sql);
	}
	public function checkImage(){
		$sql = "SELECT foto_profil FROM user WHERE iduser=".$this->session->userdata('id');
		$result = $this->db->query($sql)->row();

		return $result;
	}
}
