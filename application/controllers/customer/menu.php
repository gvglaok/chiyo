<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('customer/menuM', 'mm');
		$data['res']=$this->mm->getMenu();
		$this->load->view('customer/menu',$data);
	}

}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */
