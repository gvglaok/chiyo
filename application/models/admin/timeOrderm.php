<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timeOrderm extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	
	/**
	 * [orderTable 获取每个order的midarr,查询每个menu信息]
	 * @return [type] [description]
	 */
	public function orderTable()
	{
		$query=$this->db->get_where('order', array('oStatus'=>0));
		$data=$query->result_array();
		//$arrayMID=explode( ',',$data[0]['oMidArr']);
		$arrMid=array();
		for ($i=0; $i <count($data) ; $i++) { 
			$arrMid[$i]=explode( ',',$data[$i]['oMidArr']);
		}

		//获取menu数据
		//$arrMenu=array();
		for ($i=0; $i < count($data); $i++) { 
			$menuNumber[$i]=array_count_values($arrMid[$i]);

			$menuKey=array_keys($menuNumber[$i]);

			//$onlyMid=array_unique($arrMid[$i]);

			$this->db->select('mID,mName,mPrice');

			$this->db->from('menu');

			//$this->db->or_where_in('mID', $arrMid[$i]);
			$this->db->or_where_in('mID', $menuKey);

			$query2=$this->db->get();

			$data2=$query2->result_array();

			$data[$i]['oMidArr']=$data2;
			$data[$i]['oMidArr']['num']=$menuKey;


		}

		//$res=array_fill_keys($data[0]['oMidArr'], $arrayMID);
		

		
		return $data;
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
