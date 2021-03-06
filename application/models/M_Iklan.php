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
				(select COUNT(kerjaan.judul_kerjaan) from kerjaan where kerjaan.id_status=6) as selesai,
				(SELECT COUNT(user.iduser) FROM user WHERE user.role_idrole=2) as total_user,                    
                (SELECT COUNT(hit.idhit) from hit) as total_hit  FROM kerjaan ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function terima_iklan($id)
	{
		$sql = "UPDATE kerjaan SET id_status=2 WHERE idkerjaan='$id'";
		echo $sql;
		$data = $this->db->query($sql);
		// var_dump($data);
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
		$sql = "SELECT kerjaan.*, F_hitunghit(idkerjaan) as hit, kategori.nama_kategori, wilayah_kabupaten.nama_kabupaten FROM kerjaan, kategori, wilayah_kabupaten  where kerjaan.kategori_idkategori=kategori.idkategori and kerjaan.kabupaten_idkabupaten=wilayah_kabupaten.id_kabupaten and id_status=2";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_iklan_tolak()
	{
		$sql = "SELECT kerjaan.*, F_hitunghit(idkerjaan) as hit, kategori.nama_kategori, wilayah_kabupaten.nama_kabupaten FROM kerjaan, kategori, wilayah_kabupaten  where kerjaan.kategori_idkategori=kategori.idkategori and kerjaan.kabupaten_idkabupaten=wilayah_kabupaten.id_kabupaten and id_status=4";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM kerjaan WHERE idkerjaan='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
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

	public function cek_hit($id, $iduser)
	{
		$sql = "select * from hit where kerjaan_idkerjaan='$id' and user_iduser='$iduser'";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_iklan($id)
	{
		$sql = "SELECT kerjaan.*,wilayah_kabupaten.nama_kabupaten as nama_kabupaten, kategori.nama_kategori, user.* From kerjaan,wilayah_kabupaten, user, kategori where wilayah_kabupaten.id_kabupaten=kerjaan.kabupaten_idkabupaten and kerjaan.user_iduser = user.iduser and kerjaan.kategori_idkategori = kategori.idkategori and idkerjaan=" . $id;

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_iklan_selesai()
	{
		$sql = "SELECT kerjaan.idkerjaan,kerjaan.judul_kerjaan,kerjaan.deskripsi, report_kerjaan.tgl_selesai,user.nama_user
		from kerjaan,report_kerjaan,user where kerjaan.idkerjaan=report_kerjaan.id_kerjaan 
		and user.iduser=report_kerjaan.id_user";
		//		echo $sql;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function detail_iklan_selesai($id)
	{
		$sql = "SELECT kerjaan.idkerjaan,kerjaan.judul_kerjaan,kerjaan.deskripsi,report_kerjaan.detail,kerjaan.deadline, report_kerjaan.tgl_selesai,user.nama_user,user.iduser
		from kerjaan,report_kerjaan,user where kerjaan.idkerjaan=report_kerjaan.id_kerjaan 
		and user.iduser=report_kerjaan.id_user and kerjaan.idkerjaan='$id'";
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
		$sql = "INSERT INTO kerjaan VALUES(NULL ,'" . $data['judul'] . "', '" . $data['contents'] . "','" . $data['img'] . "', CURRENT_DATE(), '" . $data['deadline'] . "', '" . $data['kategori'] . "','" . $data['kota'] . "','" . $data['harga'] . "', 1, '" . $this->session->userdata('id') . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function reportKerjaan($data)
	{
		$sql = "INSERT INTO report_kerjaan(id_user,id_kerjaan,detail,bukti,tgl_selesai) VALUES('" . $this->session->userdata('id') . "' ,'" . $data['idkerjaan'] . "', '" . $data['contents'] . "',' " . $data['deadline'] . "', CURRENT_DATE())";
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
		$sql = "INSERT INTO hit VALUES(NULL,current_date(),'" . $this->session->userdata('id') . "' ,'" . $idkerjaan . "','7')";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function isistarpoint($kerjaan)
	{
		$sql = "INSERT INTO star_point VALUES(NULL,'" . $kerjaan['penilaian'] . "', current_date(),' " . $kerjaan['iduser'] . "','" . $kerjaan['idkerjaan'] . "','" . $kerjaan['review'] . "')";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function searchIklanPost($data, $offset)
	{
		$filter = array();
		if (isset($data['kategori']) && $data['kategori'] != '#') {
			array_push($filter, ' kategori_idkategori=' . $data['kategori'] . ' ');
		}
		if (isset($data['kota']) && $data['kota'] != '#') {
			array_push($filter, 'kabupaten_idkabupaten=' . $data['kota'] . ' ');
		}
		if (isset($data['konten']) && trim($data['konten']) != '') {
			array_push($filter, ' judul_kerjaaan LIKE "%' . $data['konten'] . '%" OR deskripsi LIKE "%' . $data['konten'] . '%"');
		}


		$sql = 'SELECT kerjaan.*, kategori.nama_kategori as nama_kategori, wilayah_kabupaten.nama_kabupaten as nama_kabupaten FROM kerjaan INNER JOIN kategori ON kerjaan.kategori_idkategori = kategori.idkategori INNER JOIN wilayah_kabupaten ON kerjaan.kabupaten_idkabupaten = wilayah_kabupaten.id_kabupaten';

		if (count($filter) != 0) {
			$sql_query = $sql . ' WHERE ' . implode('AND', $filter) . ' LIMIT 15 OFFSET ' . $offset;
			$sql_count = $sql . ' WHERE ' . implode('AND', $filter);
		} else {
			$sql_query = $sql . ' LIMIT 15 OFFSET ' . $offset;
			$sql_count = $sql;
		}

		$data['query'] = $this->db->query($sql_query)->result();
		$data['query_count'] = $this->db->query($sql_count)->num_rows();
		return $data;

	}

	public function searchIklanGet($data, $offset)
	{
		$filter = array();
		// Kategori
		if (isset($data['kategori_get']) && $data['kategori_get'] != '#') {
			array_push($filter, ' kategori_idkategori=' . $data['kategori_get'] . ' ');
		}
		// Lokasi
		if (isset($data['kota_get']) && $data['kota_get'] != '#') {
			array_push($filter, ' kabupaten_idkabupaten=' . $data['kota_get'] . ' ');
		}
		// Harga
		if (isset($data['harga_min']) && $data['harga_min'] != '') {
			array_push($filter, ' harga>=' . $data['harga_min'] . ' ');
		}
		if (isset($data['harga_max']) && $data['harga_max'] != '') {
			array_push($filter, ' harga<=' . $data['harga_max'] . ' ');
		}
		// Tanggal deadline
		if (isset($data['start_date']) && $data['start_date'] != '') {
			array_push($filter, " deadline>='" . $data['start_date'] . "' ");
		}
		if (isset($data['end_date']) && $data['end_date'] != '') {
			array_push($filter, " deadline<='" . $data['end_date'] . "' ");
		}
		if (isset($data['konten']) && trim($data['konten']) != '') {
			array_push($filter, ' judul_kerjaan LIKE "%' . $data['konten'] . '%" OR deskripsi LIKE "%' . $data['konten'] . '%"');
		}

		$sql = 'SELECT kerjaan.*, kategori.nama_kategori as nama_kategori, wilayah_kabupaten.nama_kabupaten as nama_kabupaten FROM kerjaan INNER JOIN kategori ON kerjaan.kategori_idkategori = kategori.idkategori INNER JOIN wilayah_kabupaten ON kerjaan.kabupaten_idkabupaten = wilayah_kabupaten.id_kabupaten';
		// If no filter
		if (count($filter) == 0) {
			$sql_query = $sql . ' LIMIT 15 OFFSET ' . $offset;
			$sql_count = $sql;
		} else {
			$sql_query = $sql . ' WHERE ' . implode("AND", $filter) . " LIMIT 15 OFFSET " . $offset;
			$sql_count = $sql . ' WHERE ' . implode("AND", $filter);
		}

		$data['query'] = $this->db->query($sql_query)->result();
		$data['query_count'] = $this->db->query($sql_count)->num_rows();
		return $data;
	}

	public function searchIklanLink($id, $offset)
	{
		$sql = "SELECT kerjaan.*, kategori.nama_kategori as nama_kategori, wilayah_kabupaten.nama_kabupaten as nama_kabupaten FROM kerjaan INNER JOIN kategori ON kerjaan.kategori_idkategori = kategori.idkategori INNER JOIN wilayah_kabupaten ON kerjaan.kabupaten_idkabupaten = wilayah_kabupaten.id_kabupaten WHERE kabupaten_idkabupaten=" . $id;
		$sql_query = $sql . ' LIMIT 15 OFFSET ' . $offset;
		$sql_count = $sql;
		$data['query'] = $this->db->query($sql_query)->result();
		$data['query_count'] = $this->db->query($sql_count)->num_rows();
		return $data;
	}

	public function searchIklanCat($id, $offset)
	{
		$sql = "SELECT kerjaan.*, kategori.nama_kategori as nama_kategori, wilayah_kabupaten.nama_kabupaten as nama_kabupaten FROM kerjaan INNER JOIN kategori ON kerjaan.kategori_idkategori = kategori.idkategori INNER JOIN wilayah_kabupaten ON kerjaan.kabupaten_idkabupaten = wilayah_kabupaten.id_kabupaten WHERE kategori_idkategori=" . $id;
		$sql_query = $sql . ' LIMIT 15 OFFSET ' . $offset;
		$sql_count = $sql;
		$data['query'] = $this->db->query($sql_query)->result();
		$data['query_count'] = $this->db->query($sql_count)->num_rows();
		return $data;
	}

	public function searchIklanAll($offset)
	{
		$sql = "SELECT kerjaan.*, kategori.nama_kategori as nama_kategori, wilayah_kabupaten.nama_kabupaten as nama_kabupaten FROM kerjaan INNER JOIN kategori ON kerjaan.kategori_idkategori = kategori.idkategori INNER JOIN wilayah_kabupaten ON kerjaan.kabupaten_idkabupaten = wilayah_kabupaten.id_kabupaten ";
		$sql_query = $sql . ' LIMIT 15 OFFSET ' . $offset;
		$sql_count = $sql;
		$data['query'] = $this->db->query($sql_query)->result();
		$data['query_count'] = $this->db->query($sql_count)->num_rows();
		return $data;
	}

	public function getCategoryCount($id)
	{
		$sql = "SELECT COUNT(idkerjaan) as jml FROM kerjaan WHERE kategori_idkategori=" . $id;
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function filterharga($input)
	{
		$sql = "SELECT * FROM kerjaan WHERE harga BETWEEN harga=" . $input['minprice'] . " AND " . $input['maxprice'] . "";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function filterDate($date)
	{
		$sql = "SELECT * FROM kerjaan WHERE tanggal_submit BETWEEN tanggal_submit" . $date['startDate'] . " AND " . $date['endDate'] . "";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getCategoryName($id)
	{
		$sql = 'SELECT nama_kategori FROM kategori WHERE idkategori=' . $id;
		return $this->db->query($sql)->row();
	}

	public function getCityName($id)
	{
		$sql = 'SELECT nama_kabupaten FROM wilayah_kabupaten WHERE id_kabupaten=' . $id;
		return $this->db->query($sql)->row();
	}

	public function filter($input)
	{
		if ('f' == true) {
		}
	}
}
