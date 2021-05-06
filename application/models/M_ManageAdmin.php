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
	public function update_admin($data){
		var_dump($data);
		/*$sql = "INSERT INTO kerjaan(judul_kerjaan,deskripsi,tanggal_submit,deadline,kabupaten_idkabupaten,harga,kategori_idkategori)
		VALUES('" . $data['judul'] . "','" . $data['contents'] . "',
		now(),'" . $data['deadline'] . "','" . $data['kota'] . "','" . $data['negotiable'] . "','" . $data['kategori'] . "')";
		echo $sql;

		$this->db->query($sql);
*/
//		return $this->db->affected_rows();

	}
}
