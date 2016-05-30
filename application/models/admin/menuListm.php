<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuListm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getMenu($num=0)
	{
		$data['num']= $this->db->count_all('menu'); 

		$query=$this->db->get('menu',10,$num);

		$data['res']=$query->result_array();

		return $data;
	}
	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>