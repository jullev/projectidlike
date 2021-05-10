<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Register');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index()
	{
//		echo $this->session->userdata('role');
		if ($this->session->userdata('role')==1) {
			$this->load->view('admin/overview');
		}
		else if($this->session->userdata('role')==2){
			$this->load->view('user/overview');
		}
		else{
			$this->load->view('overview_landing');
		}
	}

	

}
