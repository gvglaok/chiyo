<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class allOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()

	{
		$this->load->model('admin/allOrderm', 'ao');

		$data['fdata']=$this->ao->getOrder();
		
		$this->load->view('admin/allOrder',$data);


	}


	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>