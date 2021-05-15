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

	public function tambah_admin($data)
	{
		// Cek data unik pada username dan email
		$validation = $this->uniqueDataCheck($data);
		if ($validation == "username-error") {
			return "username-error";
		} elseif ($validation == "email-error") {
			return "email-error";
		}

		// Menambahkan string 62 di depan input phone
		$data['phone'] = "62" . $data['phone'];

		// Penambahan data
		$sql = "INSERT INTO user(username,email,password,nama_user,tanggal_lahir,gender, no_hp, role_idrole) 
			VALUES('" . $data['username_register'] . "', '" . $data['email_register'] . "', 
			md5('" . $data['password_register'] . "'), '" . $data['name'] . "', '" . $data['birthdate'] . "', '" . $data['gender'] . "', '" . $data['phone'] . "', 1)";

		$this->db->query($sql);

		if ($this->db->affected_rows() > 0) {
			return "success";
		} else {
			return "failed";
		}
	}

	public function uniqueDataCheck($data)
	{
		// Username check
		$sql = "SELECT COUNT(username) as user_count FROM user where username='" . $data['username_register'] . "'";
		$query = $this->db->query($sql);
		if ($query->row()->user_count > 0) {
			return "username-error";
		}

		// Email check
		$sql = "SELECT COUNT(email) as email_count FROM user where email='" . $data['email_register'] . "'";
		$query = $this->db->query($sql);
		if ($query->row()->email_count > 0) {
			return "email-error";
		} else {
			return 0;
		}
	}
}
