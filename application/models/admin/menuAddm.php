<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuAddm extends CI_Model {

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
	/**
	 * [addMenu 添加菜品 class menu number +1]
	 * @param bool $query [数据操作结果];
	 */
	public function addMenu($data='')
	{
		$query=$this->db->insert('menu', $data);

		if ($query) {
			$classID=$data['cID'];
			$this->db->select('cMenuNumber');
			$query1=$this->db->get_where('class', array('cID'=>$classID));
			$num=$query1->row()->cMenuNumber;
			$num++;
			$numData=array("cMenuNumber"=>$num);
			$this->db->update('class', $numData, 'cID='.$classID);
		} else {
			return false;
		}

		return $query;
	}

	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>