<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuM extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getMenu($value='')
	{
		$query=$this->db->get('menu', 15);
		return $data=$query->result_array();
	}

}

/* End of file menuM.php */
/* Location: ./application/models/menuM.php */