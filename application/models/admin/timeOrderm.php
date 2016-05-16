<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timeOrder extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function listTime()
	{
		$query=$this->db->get_where('order', array('oStatus'=>0));
		$data=$query->result_array();

		$arrayMID=split($data['oMidArr'], ',');
		for ($i=0; $i < $arrayMID.count() ; $i++) { 
			# code...
		}
		

		return $data;
	}

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>