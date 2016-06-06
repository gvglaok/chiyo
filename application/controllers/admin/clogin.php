<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

}

/* End of file clogin.php */
/* Location: ./application/controllers/clogin.php */