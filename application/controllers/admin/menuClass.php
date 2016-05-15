<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuClass extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/menuAddm', 'ma');
		$data['menu']=$this->ma->getClass();
		$this->load->view('admin/menuClass',$data);
	}
	
	public function addClass()
	{
		$className=$this->input->post('cn', TRUE);
		
		$data = array('cName' => $className,'cAddTime'=>time());

		$this->load->model('admin/menuClassm', 'mc');

		$res=$this -> mc ->addcn($data);

		if ($res) {
			echo "success";
		} else {
			echo "error";
		}
	}

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>