<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timeOrderm extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function orderTable()
	{
		$query=$this->db->get_where('order', array('oStatus'=>0));
		$data=$query->result_array();
		$arrayMID=explode( ',',$data[0]['oMidArr']);
		//获取menu数据
		$this->db->select('mID,mName,mPrice');

		$this->db->from('menu');

		$this->db->or_where_in('mID', $arrayMID);

		$query2=$this->db->get();

		$data2=$query2->result_array();

		$data[0]['oMidArr']=$data2;
		//$res=array_fill_keys($data[0]['oMidArr'], $arrayMID);
		return $data[0];
	}

	public function tableMenu()
	{
		/*$query=$this->db->get_where('order', array('oStatus'=>0));
		$data=$query->result_array();

		$arrayMID=split($data['oMidArr'], ',');

		$this->db->select('mName','mPrice');

		$this->db->from('menu');

		$this->db->or_where_in('mID', $arrayMID);

		$query2=$this->db->get();

		$data2=$query2->result_array();

		$query=$this->db->get_where('order', array('oStatus'=>0));
		$data=$query->result_array();

		foreach ($data as $key) {
			
		}

		return $data2;*/
	}

}
