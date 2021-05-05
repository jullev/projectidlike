<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_searchajax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Ajaxsearch');
    }

    var $title = 'ajaxsearch';

    public function index()
    {
        $data['title'] = $this->title;
        $this->load->view('tambahiklan', $data);
    }

    function get_ajaxsearch()
    {
        if (isset($_GET['term'])) {
            $result = $this->M_ajaxsearch->get_kab($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'title' => $row->nama_kabupaten
                    );
                echo json_encode($result_array);
            }
        }
    }
}
