<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class allOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()

	{
		$this->load->model('admin/allOrderm', 'ao');

		$res=$this->ao->getOrder();

		$data['fdata']=$res['res'];

		$data['num']=$res['num'];

		$config['base_url'] = base_url().'admin/allorder/goPage';

		$config['total_rows'] = $data['num'];

		$config['per_page'] = 12;

		$this->pagination->initialize($config);

		$data['plink']=$this->pagination->create_links();

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$this->load->view('admin/allOrder',$data);
	}

	public function goPage($num=0)
	{
		$this->load->model('admin/allOrderm', 'ao');

		$res=$this->ao->getOrder($num);

		$data['fdata']=$res['res'];

		$data['num']=$res['num'];


		$config['base_url'] = base_url().'admin/allorder/goPage';
		$config['total_rows'] = $data['num'];
		$config['per_page'] = 12;


		$this->pagination->initialize($config);

		$data['plink']=$this->pagination->create_links();
		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$this->load->view('admin/allOrder',$data);
	}

	public function getOMenu()
	{
		$oid = $this->input->post('poid', TRUE);
		$this->load->model('admin/allOrderm', 'ao');
		$res=$this->ao->OMenu($oid);
		//print_r($res);
		$this->output->set_content_type('text/plain', 'UTF-8');
		echo json_encode($res);
	}


	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>