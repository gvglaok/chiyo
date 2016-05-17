<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuList extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/menuListm', 'ml');
		$data['data']=$this -> ml ->getMenu();
		$this->load->view('admin/menuList',$data);
	}
	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>