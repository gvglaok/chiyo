<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuClassm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();	
	}

	public function addcn($data='')
	{
		$query=$this->db->insert('class', $data);
		return $query;
	}

	public function delec($cid='')
	{
		$this->db->where('cID', $cid);
		$this->db->select('cMenuNumber');
		$query=$this->db->get('class');
		$num=$query->row()->cMenuNumber;
		if($num==0){
			$this->db->where('cID', $cid);
			$query=$this->db->delete('class');
			return $query;
		} else {
			return false;
		}
	}

	public function updatac($cid='',$data='')
	{
		$this->db->where('cID', $cid);
		$query=$this->db->update('class', $data);
		return $query;
	}

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>