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

	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>