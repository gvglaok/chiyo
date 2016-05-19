<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
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

		$this->load->view('customer/cart',$data);
	}

	public function sess($value='')
	{
		$value=$this->input->post('mid', TRUE);

		$mid=$_SESSION['mID'];

		$midArr=explode(',', $mid);

		$key=array_search($value, $midArr);

		unset($midArr[$key]);

		echo 'success';
		
		//$str=implode(',', $midArr);

		//echo $key."===";

		//echo $str;
	}

	public function sessAdd($value='')
	{
		$value=$this->input->post('mid', TRUE);

		$mid=$_SESSION['mID'];

		$midArr=explode(',', $mid);

		array_push($midArr, $value);
		
		//$str=implode(',', $midArr);

		echo 'success';
	}

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
