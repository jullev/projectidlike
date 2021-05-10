<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ManageUser extends CI_Model
{
	private $sql = "user";

	public $iduser;
	public $username;
	public $email;
	public $password;
	public $nama_user;
	public $tanggal_lahir;
	public $gender;
	public $no_hp;
	public $alamat;
	public $foto_profil;
	public $role_idrole;

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			],

			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],

			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],

			[
				'field' => 'nama_user',
				'label' => 'Nama_user',
				'rules' => 'required'
			],

			[
				'field' => 'tanggal_lahir',
				'label' => 'Tanggal_lahir',
				'rules' => 'required'
			],

			[
				'field' => 'gender',
				'label' => 'Gender',
				'rules' => 'required'
			],

			[
				'field' => 'no_hp',
				'label' => 'No_hp',
				'rules' => 'required'
			],

			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required'
			],

			[
				'field' => 'foto_profile',
				'label' => 'Username',
				'rules' => ''
			],
		];
	}


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

		return $data->result();
	}
	public function save()
	{
		$post = $this->input->post();
		$this->iduser = uniqid();
		$this->username = $post["username"];
		$this->email = $post["email"];
		$this->password = $post["password"];
		$this->nama_user = $post["nama_user"];
		$this->tanggal_lahir = $post["tanggal_lahir"];
		$this->gender = $post["gender"];
		$this->no_hp = $post["no_hp"];
		$this->alamat = $post["alamat"];
		$this->foto_profil = $post["foto_profil"];
		$this->db->insert($this->sql, $this);
	}
}
