<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Iklan extends CI_Model
{
	public function select_all_iklan() {
		$sql = "SELECT * FROM kerjaan order by tanggal_submit asc ";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function terima_iklan($id) {
		$sql = "update kerjaan set id_status=2 where idkerjaan='$id' ";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_all_iklan_baru() {
		$sql = "SELECT * FROM kerjaan where id_status=1";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_all_iklan_disetujui() {
		$sql = "SELECT *, F_hitunghit(idkerjaan) as hit FROM kerjaan where id_status=2";

		$data = $this->db->query($sql);

		return $data->result();
	}
}
