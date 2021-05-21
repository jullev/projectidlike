<?php

class M_Setkategori extends CI_Model
{

	public function select_all_kategori()
	{
		$sql = "SELECT * FROM kategori";

		$data = $this->db->query($sql);

		return $data->result();
	}


}
