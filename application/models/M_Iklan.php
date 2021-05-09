<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Iklan extends CI_Model
{
	public function select_all_iklan()
	{
		$sql = "SELECT * FROM kerjaan order by tanggal_submit asc ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function terima_iklan($id)
	{
		$sql = "update kerjaan set id_status=2 where idkerjaan='$id' ";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function terima_hit($id)
	{
		$sql = "update hit set id_status=1 where idhit='$id' ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all_iklan_baru()
	{
		$sql = "SELECT * FROM kerjaan where id_status=1";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all_iklan_disetujui()
	{
		$sql = "SELECT *, F_hitunghit(idkerjaan) as hit FROM kerjaan where id_status=2";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_hit_periklan($id)
	{
		$sql = "SELECT hit.idhit,user.iduser,user.nama_user,user.no_hp,sum(star_point.star_point) as star_point, 
       			kerjaan.judul_kerjaan,kerjaan.deadline 
				FROM hit, user,star_point,kerjaan
				WHERE hit.user_iduser=user.iduser and user.iduser=star_point.user_iduser 
				  and kerjaan.idkerjaan=hit.kerjaan_idkerjaan and hit.kerjaan_idkerjaan='$id'";

		$data = $this->db->query($sql);

		return $data->result();
	}
}
