<?php

class M_Setwilayah extends CI_Model
{
	public function select_all_wilayah()
	{
		$sql = "SELECT * FROM wilayah_kabupaten";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_wilayah_id($id)
	{
		$sql = " SELECT * FROM wilayah_kabupaten WHERE id_kabupaten = '$id'";

		$data = $this->db->query($sql);

		return $data->result();
	}
}
