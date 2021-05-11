<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ManageUser extends CI_Model
{

	public function select_all_user()
	{
		$sql = "SELECT * FROM user where role_idrole=2";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_user_id($id)
	{
		$sql = "SELECT * FROM user where role_idrole=2 and iduser ='$id'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function save()
	{
	}

	public function delete($id)
	{
		$sql = "DELETE FROM user WHERE iduser='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
