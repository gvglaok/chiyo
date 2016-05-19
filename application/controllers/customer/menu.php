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
		$data['class']=$this->mm->getClass();
		$this->load->view('customer/menu',$data);
	}

	public function cMenu($value='')
	{
		$this->load->model('customer/menuM', 'mm');
		$data['res']=$this->mm->getCMenu($value);
		$data['class']=$this->mm->getClass();
		$this->load->view('customer/menu',$data);
	}

	public function shopCart($mid='')
	{
		$mid=$this->input->post('mid', TRUE);
		if (isset($_SESSION['mID'])) {
			$midStr=$_SESSION['mID'];
			$midStr=$midStr.','.$mid;
		}
		else{
			$midStr=$mid;
		}
	
		$data=array("mID"=>$midStr);
		$this->session->set_userdata($data);
		echo 'this Session:'.$_SESSION['mID'];
	}

}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */
