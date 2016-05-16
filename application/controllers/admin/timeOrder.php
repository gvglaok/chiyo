<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timeOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/timeOrderm', 'to');
		$data['to']=$this->to->listTime();
		$this->load->view('admin/timeOrder',$data);
	}
	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>