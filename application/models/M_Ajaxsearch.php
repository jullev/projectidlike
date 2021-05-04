<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("wilayah_kabupaten");
		if ($query != '') {
			$this->db->like('nama_kabupaten', $query);
		}
		$this->db->order_by('id_kabupaten', 'DESC');
		return $this->db->get();
	}
}
