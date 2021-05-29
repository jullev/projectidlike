<?php


class M_Register extends CI_Model
{
	public function select_all_user()
	{
		$sql = "SELECT * FROM user";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id)
	{
		$sql = "SELECT pegawai.id AS id_pegawai, pegawai.nama AS nama_pegawai, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_posisi, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kota = kota.id AND pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id)
	{
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_posisi = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function Select_Login($data)
	{

		$sql = "SELECT * FROM user WHERE (username = '" . $data['username'] . "' OR email = '".$data['username']."' ) and password = md5('" . $data['password'] . "')";
		$data_query = $this->db->query($sql);
		if ($data_query->num_rows() > 0) {
			// Cek apakah email sudah diverifikasi atau belum
			$query_check = $this->db->query('SELECT verify_status from verifikasi where email="' . $data_query->row()->email . '"');
			if ($query_check->row()->verify_status == 1) {
				$this->session->set_userdata('username', $data_query->row()->username);
				$this->session->set_userdata('nama', $data_query->row()->nama_user);
				$this->session->set_userdata('id', $data_query->row()->iduser);
				$this->session->set_userdata('role', $data_query->row()->role_idrole);
				$this->session->set_userdata('is_login', TRUE);
				return TRUE;
			} else {
				$this->session->set_userdata('status', 'error');
				$this->session->set_userdata('msg', 'Email belum diverifikasi, harap verifikasi terlebih dahulu! Klik <a href="C_Register/resendToken"><strong>di sini</strong></a> untuk mengirim ulang kode verifikasi.');
				$this->session->set_userdata('email', $data_query->row()->email);
				return 'error';
			}
		} else {
			$this->session->set_userdata('status', 'error');
			$this->session->set_userdata('msg', 'Username/password salah');
			return 'error';
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

	public function update($data)
	{
		$sql = "UPDATE pegawai SET nama='" . $data['nama'] . "', telp='" . $data['telp'] . "', id_kota=" . $data['kota'] . ", id_kelamin=" . $data['jk'] . ", id_posisi=" . $data['posisi'] . " WHERE id='" . $data['id'] . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM user WHERE iduser='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data)
	{
		// Cek data unik pada username dan email
		$validation = $this->uniqueDataCheck($data);
		if ($validation == "username-error") {
			return "username-error";
		} elseif ($validation == "email-error") {
			return "email-error";
		}

		//		 Menambahkan string 62 di depan input phone
		$data['phone'] = "62" . $data['phone'];

		// Penambahan data
		$sql = "INSERT INTO user(username,email,password,nama_user,tanggal_lahir, alamat, foto_profil, gender, no_hp, role_idrole)
		VALUES('" . $data['username_register'] . "', '" . $data['email_register'] . "',
		md5('" . $data['password_register'] . "'), '" . $data['name'] . "', '" . $data['birthdate'] . "', '" . $data['alamat'] . "', 'default.png', '" . $data['gender'] . "', '" . $data['phone'] . "', 2)";

		$this->db->query($sql);

		if ($this->db->affected_rows() > 0) {
			return "success";
		} else {
			return "failed";
		}
	}

	public function insertAdmin($data)
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
		$sql = "INSERT INTO user(username,email,password,nama_user,tanggal_lahir, alamat, foto_profil, gender, no_hp, role_idrole) 
		VALUES('" . $data['username_register'] . "', '" . $data['email_register'] . "', 
		md5('" . $data['password_register'] . "'), '" . $data['name'] . "', '" . $data['birthdate'] . "', '" . $data['alamat'] . "', 'default.png', '" . $data['gender'] . "', '" . $data['phone'] . "', 1)";

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
		//		echo $sql;
		$query = $this->db->query($sql);
		if (intval($query->row()->user_count) > 0) {
			return "username-error";
		}

		// Email check
		$sql = "SELECT COUNT(email) as email_count FROM user where email='" . $data['email_register'] . "'";
		$query = $this->db->query($sql);
		if (intval($query->row()->email_count) > 0) {
			return "email-error";
		} else {
			return 0;
		}
	}

	public function insert_batch($data)
	{
		$this->db->insert_batch('pegawai', $data);

		return $this->db->affected_rows();
	}

	public function check_nama($nama)
	{
		$this->db->where('nama', $nama);
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get('user');

		return $data->num_rows();
	}

	public function saveToken($token, $email)
	{
		$sql = "INSERT INTO verifikasi VALUES (NULL, '" . $email . "', '" . $token . "', 0)";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function checkToken($data)
	{
		$sql = "SELECT email FROM verifikasi WHERE token='" . $data . "'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function verifyEmail($data)
	{
		$sql = "UPDATE verifikasi SET verify_status=1 WHERE email='" . $data . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function resendToken($token)
	{
		$email = $this->session->userdata('email');
		$sql = "UPDATE verifikasi SET token='" . $token . "' where email='" . $email . "'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function checkemail($data)
	{
		$sql = "SELECT email FROM user WHERE email='" . $data . "' OR username='" . $data . "' ";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
			$data = $query->row()->email;
			return $data;
		} else {
			return '';
		}
		// $data['jumlah'] = $query->num_rows();
	}

	private function checkValueResetPassword($email)
	{
		$sql = "SELECT email FROM reset_password WHERE email= '" . $email . "' ";
		$query = $this->db->query($sql);
		// var_dump($query->num_rows());
		return $query->num_rows();
	}

	public function saveForgotPassword($email, $token)
	{
		$check = $this->checkValueResetPassword($email);
		// var_dump($check);
		if ($check > 0) {
			$sql = "UPDATE reset_password SET token= '" . $token . "' WHERE email= '" . $email . "'";
		} else {
			$sql = "INSERT INTO reset_password VALUES('" . $email . "' , '" . $token . "')";
		}
		$this->db->query($sql);
		// return $this->db->affected_rows();
	}

	public function checkTokenPassword($input)
	{
		$sql = "SELECT email FROM reset_password WHERE token='" . $input . "'";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
			$this->session->set_userdata('email', $query->row()->email);
			return 'success';
		} else {
			return 'error';
		}
	}

	public function updatePassword($input, $reset = false)
	{
		if ($reset == true) {
			$sql = "UPDATE user SET password=md5('" . $input['newpassword'] . "') WHERE email='" . $input['email'] . "'";
		} else {
			$sql = "UPDATE user SET password=md5('" . $input['newpassword'] . "') WHERE iduser=" . $input['id'];
		}
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteToken($email)
	{
		$sql = "DELETE FROM reset_password WHERE email='" . $email . "'";
		$this->db->query($sql);
	}
}
