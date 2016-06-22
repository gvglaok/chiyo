<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboardc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/dashboard');
	}

}

/* End of file dashboardc.php */
/* Location: ./application/controllers/dashboardc.php */