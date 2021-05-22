<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Iklan extends CI_Model
{
	public function select_all_iklan()
	{
		$sql = "SELECT kerjaan.*,hit.id_status FROM kerjaan,hit
		WHERE kerjaan.idkerjaan=hit.kerjaan_idkerjaan and hit.id_status=3
		order by tanggal_submit asc ";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function show_allcount()
	{
		$sql = "SELECT DISTINCT(select COUNT(kerjaan.judul_kerjaan) from kerjaan where kerjaan.id_status=1) as pengajuan_baru,
                (select COUNT(kerjaan.judul_kerjaan) from kerjaan ) as total_kerjaan,
                (select COUNT(kerjaan.judul_kerjaan) from kerjaan where kerjaan.id_status=2) as disetujui,
                (select COUNT(kerjaan.judul_kerjaan) from kerjaan where kerjaan.id_status=4) as ditolak,                
                (SELECT COUNT(hit.idhit) from hit) as total_hit  FROM kerjaan ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function terima_iklan($id)
	{
		$sql = "update kerjaan set id_status=2 where idkerjaan='$id'";
		echo $sql;
		$data = $this->db->query($sql);
		var_dump($data);
		if ($data->affected_rows() == 1)
			return true;
		else
			return false;
	}

	public function terima_hit($id)
	{
		$sql = "update hit set id_status=3 where idhit='$id' ";

		$data = $this->db->query($sql);
		if ($data == true)
			return true;
		else
			return false;

		return $data->result();
	}

	public function tolak_hit($id)
	{
		$sql = "update hit set id_status=4 where idhit='$id' ";

		$data = $this->db->query($sql);
		if ($data == true)
			return true;
		else
			return false;

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
       			kerjaan.judul_kerjaan,kerjaan.deadline,hit.id_status 
				FROM hit, user,star_point,kerjaan
				WHERE hit.user_iduser=user.iduser and user.iduser=star_point.user_iduser 
				  and kerjaan.idkerjaan=hit.kerjaan_idkerjaan and hit.kerjaan_idkerjaan='$id'";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function cek_hit($id,$iduser)
	{
		$sql = "select * from hit where kerjaan_idkerjaan='$id' and user_iduser='$iduser'";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_iklan($id)
	{
		$sql = "SELECT kerjaan.*,wilayah_kabupaten.nama_kabupaten, user.no_hp as no_hp From kerjaan,wilayah_kabupaten, user where wilayah_kabupaten.id_kabupaten=kerjaan.kabupaten_idkabupaten and kerjaan.user_iduser = user.iduser and idkerjaan=".$id;

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_iklan_selesai()
	{
		$sql = "SELECT kerjaan.idkerjaan,kerjaan.judul_kerjaan,kerjaan.deskripsi, report_kerjaan.tgl_selesai,user.nama_user
		from kerjaan,report_kerjaan,user where kerjaan.idkerjaan=report_kerjaan.id_kerjaan and user.iduser=report_kerjaan.id_user";
//		echo $sql;
		$data = $this->db->query($sql);

		return $data->result();
	}
	public function detail_iklan_selesai($id)
	{
		$sql = "SELECT kerjaan.idkerjaan,kerjaan.judul_kerjaan,kerjaan.deskripsi,report_kerjaan.detail, report_kerjaan.tgl_selesai,user.nama_user
		from kerjaan,report_kerjaan,user where kerjaan.idkerjaan=report_kerjaan.id_kerjaan and user.iduser=report_kerjaan.id_user and report_kerjaan.id='$id'";
//		echo $sql;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function getAllCategory()
	{
		$sql = "SELECT * FROM kategori";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getAllKab()
	{
		$data = $this->db->query('SELECT * FROM wilayah_kabupaten');
		return $data->result();
	}

	public function saveIklan($data)
	{
		$sql = "INSERT INTO kerjaan VALUES(NULL,'".$this->session->userdata('id')."' ,'".$data['judul']."', '".$data['contents']."',' ', CURRENT_DATE(), '".$data['deadline']."', '".$data['kategori']."','".$data['kota']."','".$data['harga']."','menunggu')";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}
	public function reportKerjaan($data)
	{
		$sql = "INSERT INTO report_kerjaan(id_user,id_kerjaan,detail,bukti,tgl_selesai) VALUES('".$this->session->userdata('id')."' ,'".$data['idkerjaan']."', '".$data['contents']."',' ".$data['deadline']."', CURRENT_DATE())";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function allHit()
	{
		$iduser = $this->session->userdata('id');
		$data = $this->db->query("SELECT kerjaan.idkerjaan,kerjaan.judul_kerjaan,kerjaan.deadline,tmst_status.status 
		FROM hit,kerjaan,tmst_status where hit.kerjaan_idkerjaan=kerjaan.idkerjaan 
		and hit.id_status=tmst_status.id_status and hit.user_iduser=$iduser");
		return $data->result();

		return $this->db->affected_rows();
	}
	public function HitKerjaan($idkerjaan)
	{
		$sql = "INSERT INTO hit VALUES(NULL,current_date(),'".$this->session->userdata('id')."' ,'".$idkerjaan."','7')";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
