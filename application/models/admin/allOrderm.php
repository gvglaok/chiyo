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

		$this->db->order_by('oID', 'desc');
		$query = $this->db->get('order',12,$num);

		$data['res']=$query->result_array();

		for ($i=0; $i <count($data['res']) ; $i++) { 
			$data['res'][$i]['oAddTime']=date('Y-m-d H:i:s',$data['res'][$i]['oAddTime']);
		}

		return $data;
	}

	public function OMenu($oid='')
	{
		$where=array('oID'=>$oid);
		$this->db->select('oTableNumber,oMidArr,oMenuNumber,oMoney', TRUE);
		$query = $this->db->get_where('order', $where);
		$data=$query->row();

		$res['mn']=$data->oMenuNumber;
		$res['mm']=$data->oMoney;
		$res['otn']=$data->oTableNumber;

		$midArr=$data->oMidArr;
		$midArr=explode(',', $midArr);

		$midArrNum=array_count_values($midArr);

		$midArrKey=array_keys($midArrNum);

		//$res['ma']=$midArrNum;
		//$res['ma2']=$midArrKey;

		//获取menu数据
		$res['oma']=array();
		for ($i=0; $i < count($midArrKey); $i++) { 

			$this->db->select('mID,mName,mPrice');

			$where=array("mID"=>$midArrKey[$i]);

			$query2=$this->db->get_where('menu', $where, 1);

			$data2=$query2->result_array();

			$data2[0]['num']=$midArrNum[$midArrKey[$i]];
			
			array_push($res['oma'], $data2[0]);

			//$res['oma'][0]['num']=$midArrNum[$midArrKey[$i]];
		}

		return $res;
	}

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>