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
			//获取 mid 对应 number
			$menuNumber[$i]=array_count_values($arrMid[$i]);

			//获取不重复mid;
			$menuKey=array_keys($menuNumber[$i]);

			//$onlyMid=array_unique($arrMid[$i]);

			$this->db->select('mID,mName,mPrice');

			$this->db->from('menu');

			//$this->db->or_where_in('mID', $arrMid[$i]);
			$this->db->or_where_in('mID', $menuKey);

			$query2=$this->db->get();

			$data2=$query2->result_array();

			$data[$i]['oMidArr']=$data2;

			//add menu number
			$data[$i]['num']=$menuNumber[$i];
			
		}

		return $data;
	}

	public function cStatus($condition='')
	{
		$data = array('oStatus' => 1);
		$query = $this->db->update('order', $data, $condition);
		return $query;
	}
}
