<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class allOrderm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getOrder($num=0)
	{
		$data['num']= $this->db->count_all('order'); 

		$query = $this->db->get('order',$num+12,$num);

		$data['res']=$query->result_array();

		return $data;
	}

	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>