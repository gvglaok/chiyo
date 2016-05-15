<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuClassm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();	
	}

	public function addcn($data='')
	{
		$query=$this->db->insert('class', $data);
		return $query;
	}

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>