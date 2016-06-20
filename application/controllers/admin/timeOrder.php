<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timeOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/timeOrderm', 'to');
		$data['res']=$this->to->orderTable();
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/timeOrder',$data);
	}

	//更改订单状态
	public function changeStatus()
	{
		$oid=$this->input->post('oid', TRUE);
		$condition = array('oID' =>$oid);
		$this->load->model('admin/timeOrderm', 'to');
		$res=$this->to->cStatus($condition);
		if ($res) {
			$drr = array('res' => 'ok','oid' => $oid);
			$drr = json_encode($drr);
			echo $drr;
		} else {
			echo "error";
		}

	}


	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>