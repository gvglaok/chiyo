<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mlogin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}


	public function cLogin($data='')
	{
		
		$d2=array('loginTime'=>time(),'lip'=>$_SERVER["REMOTE_ADDR"]);
		$query = $this->db->get_where('login', $data);
		$num = $query ->num_rows();
		if($num==1){
			$uid=$query->row()->uID;
			$q2=$this->db->update('login', $d2, 'uID='.$uid);
			return $num;
		} else {
			return false;
		}

		
		//插入数据
		
	}

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */