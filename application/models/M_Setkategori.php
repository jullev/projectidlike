<?php

class M_Setkategori extends CI_Model
{

	public function select_all_kategori()
	{
		$sql = "SELECT * FROM kategori";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_kategori_id($id)
	{
		$sql = "SELECT * FROM kategori WHERE idkategori ='$id'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function addkategori($data)
	{
		//cek data unik pada nama kategori
		$validation = $this->uniqueDataCheck($data);
		if ($validation == "kategori-error") {
			return "kategori-error";
		}

		$sql = "INSERT INTO kategori(nama_kategori) VALUES('" . $data['category'] . "')";

		$this->db->query($sql);

		if ($this->db->affected_rows() > 0) {
			return "success";
		} else {
			return "failed";
		}
	}

	public function uniqueDataCheck($data)
	{
		$sql = "SELECT COUNT(nama_kategori) as kat_count FROM kategori where nama_kategori='" . $data['category'] . "'";
		$query = $this->db->query($sql);
		if ($query->row()->kat_count > 0) {
			return "kategori-error";
		} else {
			return 0;
		}
	}

	public function delete($id)
	{
		$sql = "DELETE FROM kategori WHERE idkategori='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function updateKategori($input)
	{
		$sql = "UPDATE kategori SET nama_kategori='" . $input['category'] . "' WHERE idkategori=" . $input['id'];
		return $this->db->query($sql);
	}
}
