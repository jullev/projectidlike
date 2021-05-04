<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Register extends CI_Model {
	public function select_all_user() {
		$sql = "SELECT * FROM user";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT pegawai.id AS id_pegawai, pegawai.nama AS nama_pegawai, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_posisi, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kota = kota.id AND pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_posisi = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function Select_Login($data) {
		$sql = "SELECT * FROM user WHERE username = '" .$data['username'] ."' and password = md5('" .$data['password'] ."')";
//		echo $sql;
		$data_query= $this->db->query($sql);
		print_r($data_query->result());
		if($data_query->num_rows() > 0)
        {
                $this->session->set_userdata('username',$data_query->row()->username);
				$this->session->set_userdata('nama',$data_query->row()->nama_user);
				$this->session->set_userdata('id',$data_query->row()->iduser);
				$this->session->set_userdata('role',$data_query->row()->role_idrole);
				$this->session->set_userdata('is_login',TRUE);

                return TRUE;

        }
        else
        {
			echo "password salah";
            return FALSE;
        }
		return $data_query->result();
	}

	public function update($data) {
		$sql = "UPDATE pegawai SET nama='" .$data['nama'] ."', telp='" .$data['telp'] ."', id_kota=" .$data['kota'] .", id_kelamin=" .$data['jk'] .", id_posisi=" .$data['posisi'] ." WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM pegawai WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		//echo implode($data);
		$sql = "INSERT INTO user(username,email,password,nama_user,tanggal_lahir,role_idrole) 
		VALUES('" .$data['username'] ."','" .$data['email'] ."',
		md5('" .$data['password'] ."'),'" .$data['name'] ."','" .$data['birthdate'] ."',1)";
		// echo $sql;

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}

	public function insert_batch($data) {
		$this->db->insert_batch('pegawai', $data);
		
		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}
}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */
