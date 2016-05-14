<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class allOrderm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getOrder()
	{
		$query = $this->db->get('order', 0, 20);

		$data=$query->result_array();

		return $data;
	}

	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>