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

	public function check()
	{
		$un = trim($this->input->post('pnm', TRUE));
		$ukey = trim($this->input->post('ppsw', TRUE));

		$ls = array('ls' => 'TRUE');
		if ($un=='' or $ukey=='') {
			echo "error";
			exit();
		}

		$data = array('loginName'=>$un, 'loginKey' => $ukey);
		$this->load->model('admin/mlogin', 'cl');
		$res= $this -> cl -> cLogin($data);
		if ($res==1) {
			$this->session->set_userdata($ls);
			echo "success";
		} else {
			echo "error";
		}

	}

}

/* End of file clogin.php */
/* Location: ./application/controllers/clogin.php */