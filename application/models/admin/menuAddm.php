<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mlogin extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getClass()
	{
		$query=$this->db->get('class');
		$data=$query->result_array();
		return $data;
	}

	public function addClass($value='')
	{
		$query=$this->db->insert('class', $data);
	}

	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>