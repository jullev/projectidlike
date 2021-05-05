<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ajaxsearch extends CI_Model
{

    public function get_kab($title)
    {
        $this->db->like('nama_kabupaten', $title, 'BOTH');
        $this->db->order_by('id_kabupaten', 'asc');
        $this->db->limit(10);
        return $this->db->get('wilayah_kabupaten')->result();
    }
}
