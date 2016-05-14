<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mlogin extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function userCheck($uname='',$ukey='')
	{
		$this->db->where('uname',$uname);
		$this->db->where('upwd',$ukey);
		$query=$this->db->get('user_login');
		return $query;
	}

	public function userReg($uname='',$ukey='')
	{
		$data = array('uname' => $uname, 'upwd' => $ukey);
		$query=$this->db->insert('user_login', $data);
		return $query;
	}

	public function noteInsert($uname,$message)
	{
		$data = array('uname'=> $uname,'note' => $message);
		$query=$this->db->insert('note', $data);

		return $query;
	}

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>