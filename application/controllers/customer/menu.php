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

	public function shopCart($mid='',$mname='',$mprice='')
	{
		$data=array('mID'=>$mid,'mName'=>$mname,'mPrice'=>$mprice);
		$this->session->set_userdata($newdata);
	}

}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */
