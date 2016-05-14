<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuAdd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/menuadd');
	}
	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>