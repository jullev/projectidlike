<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ManageAdmin extends CI_Model
{
	public function select_all_admin()
	{
		$sql = "SELECT * FROM user where role_idrole=1";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_admin_id($id)
	{
		$sql = "SELECT * FROM user where role_idrole=1 and iduser ='$id'";
		//		echo $sql;
		$data = $this->db->query($sql);

		return $data->result();
	}
	public function update_admin($data)
	{
		var_dump($data);
		/*$sql = "INSERT INTO kerjaan(judul_kerjaan,deskripsi,tanggal_submit,deadline,kabupaten_idkabupaten,harga,kategori_idkategori)
		VALUES('" . $data['judul'] . "','" . $data['contents'] . "',
		now(),'" . $data['deadline'] . "','" . $data['kota'] . "','" . $data['negotiable'] . "','" . $data['kategori'] . "')";
		echo $sql;

		$this->db->query($sql);
*/
		//		return $this->db->affected_rows();

	}

	public function updateAdmin($input)
	{
		$input['phone'] = '62' . $input['phone'];
		$sql = "UPDATE user SET nama_user='" . $input['name'] . "', username='" . $input['username'] . "', gender='" . $input['gender'] . "', password=md5('" . $input['password_register'] . "') , email='" . $input['email'] . "', tanggal_lahir='" . $input['birthdate'] . "', no_hp='" . $input['phone'] . "', foto_profil='" . $input['avatar'] . "', alamat='" . $input['alamat'] . "' WHERE iduser=" . $input['id'];
		return $this->db->query($sql);
	}

	public function checkImage()
	{
		$sql = "SELECT foto_profil FROM user WHERE iduser=" . $this->session->userdata('id');
		$result = $this->db->query($sql)->row();

		return $result;
	}
}
