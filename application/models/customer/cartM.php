<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cartM extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getMenu($midArr='')
	{
		$this->db->select('mID,mName,mPrice');
		$this->db->from('menu');
		$this->db->or_where_in('mID', $midArr);
		$query=$this->db->get();
		//$sql=$this->db->get_compiled_select();
		$data=$query->result_array();
		return $data;
	}

	public function addOrder($arr='')
	{

		$query=$this->db->insert('order', $arr);

		return $query;
	}

}

/* End of file cartM.php */
/* Location: ./application/models/cartM.php */