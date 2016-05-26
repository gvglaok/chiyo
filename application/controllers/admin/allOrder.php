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


		$config['base_url'] = 'http://192.168.1.111'.base_url().'admin/allorder/goPage';

		$config['total_rows'] = $data['num'];

		$config['per_page'] = 12;

		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['next_link']='<span aria-hidden="true">&raquo;</span>';

		$config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['attributes']['rel'] = FALSE;


		$this->pagination->initialize($config);

		$data['plink']=$this->pagination->create_links();

		$this->load->view('admin/allOrder',$data);
	}

	public function goPage($num=0)
	{
		$this->load->model('admin/allOrderm', 'ao');

		$res=$this->ao->getOrder($num);

		$data['fdata']=$res['res'];

		$data['num']=$res['num'];


		$config['base_url'] = 'http://192.168.1.111'.base_url().'admin/allorder/goPage';

		$config['total_rows'] = $data['num'];

		$config['per_page'] = 12;

		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['next_link']='<span aria-hidden="true">&raquo;</span>';

		$config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['attributes']['rel'] = FALSE;

		$this->pagination->initialize($config);

		$data['plink']=$this->pagination->create_links();

		$this->load->view('admin/allOrder',$data);
	}


	

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>