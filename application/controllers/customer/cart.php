<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (isset($_SESSION['mID'])) {

			$mid=$_SESSION['mID'];
			$midArr=explode(',', $mid);
			$data['number']=count($midArr);

			//获取菜ID及选择次数
			$midArrCount=array_count_values($midArr);

			//获取非重复菜ID
			$rMid=array_keys($midArrCount);

			$this->load->model('customer/cartM', 'cm');
			
			$data['res']=$this->cm->getMenu($rMid);
			$data['count']=$midArrCount;

			$money=0;
			foreach ($data['res'] as $key) {
				$one=$key['mPrice']*$midArrCount[$key['mID']];
				$money+=$one;
			}
			$data['money']=$money;
		} else {
			
			$data['res']=0;
			
		}

		$this->load->view('customer/cart',$data);
	}
	
	/**
	 * [sum description]
	 * @return [type] [description]
	 */
	public function sum()
	{
		if (isset($_SESSION['mID'])) {

			$mid=$_SESSION['mID'];
			$midArr=explode(',', $mid);
			$data['number']=count($midArr);

			//获取菜ID及选择次数
			$midArrCount=array_count_values($midArr);

			//获取非重复菜ID
			$rMid=array_keys($midArrCount);

			$this->load->model('customer/cartM', 'cm');
			
			$data['res']=$this->cm->getMenu($rMid);
			$data['count']=$midArrCount;

			$money=0;
			foreach ($data['res'] as $key) {
				$one=$key['mPrice']*$midArrCount[$key['mID']];
				$money+=$one;
			}
			$data['money']=$money;
		} else {
			
			$data['res']=0;
			
		}

		$mn = array('number' => count($midArr),'money' => $money);
		echo json_encode($mn);
		//print_r($midArr);

	}

	//delete mid
	public function sess($value='')
	{
		$value=$this->input->post('mid', TRUE);

		$mid=$_SESSION['mID'];

		$midArr=explode(',', $mid);

		$key=array_search($value, $midArr);

		unset($midArr[$key]);

		$str=implode(',', $midArr);

		$data=array("mID"=>$str);

		$this->session->set_userdata($data);

		echo 'success';
	}

	public function sessAdd($value='')
	{
		$value=$this->input->post('mid', TRUE);

		$mid=$_SESSION['mID'];

		$midArr=explode(',', $mid);

		array_push($midArr, $value);
		
		$str=implode(',', $midArr);

		$data=array("mID"=>$str);

		$this->session->set_userdata($data);

		echo 'success';
	}

	/**
	 * [deleMenu 删除菜单]
	 * $pmid 需要删除的菜单ID
	 * $midArr session Array
	 * @return [type] [description]
	 */
	public function deleMenu()
	{
		$pmid=$this->input->post('mid', TRUE);

		$mid=$_SESSION['mID'];

		$midArr=explode(',', $mid);

		sort($midArr);

		$total=array_count_values($midArr);

		$start=array_search($pmid,$midArr);

		$end=$total[$pmid];

		array_splice($midArr, $start,$end);

		$str=implode(',',$midArr);

		$data=array('mID'=>$str);

		$this->session->set_userdata($data);
		//print_r($midArr);
	}

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
