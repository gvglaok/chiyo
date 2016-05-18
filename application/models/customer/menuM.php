<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuM extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getMenu()
	{
		$query=$this->db->get('menu', 15);
		return $data=$query->result_array();
	}

	public function getCMenu($cID="")
	{	 
		$query=$this->db->get_where('menu', array('cID'=>$cID));
		return $data=$query->result_array();
	}

	public function getClass()
	{
		$query=$this->db->get('class');
		return $data=$query->result_array();
	}

}

/* End of file menuM.php */
/* Location: ./application/models/menuM.php */