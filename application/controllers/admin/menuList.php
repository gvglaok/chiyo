<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuList extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($num=0)
	{
		$this->load->model('admin/menuListm', 'ml');
		$mdata=$this -> ml ->getMenu($num);

		$config['base_url'] = base_url().'admin/menulist/menuNext/';

		$config['total_rows'] = $mdata['num'];

		$config['per_page'] = 10;

		$config['num_links'] = 6;

		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '第一页';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['next_link']='<span aria-hidden="true">&raquo;</span>';

		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';

		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = '最后一页';

		$config['attributes']['rel'] = FALSE;

		$this->pagination->initialize($config);

		$mdata['plink']=$this->pagination->create_links();

		
		$this->load->view('admin/menuList',$mdata);
	}
	


	public function menuNext($num=0)
	{
		$this->load->model('admin/menuListm', 'ml');
		$mdata=$this -> ml ->getMenu($num);

		$config['base_url'] = base_url().'admin/menulist/menuNext/';

		$config['total_rows'] = $mdata['num'];

		$config['per_page'] = 10;

		$config['num_links'] = 6;

		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '第一页';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['next_link']='<span aria-hidden="true">&raquo;</span>';

		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';

		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = '最后一页';

		$config['attributes']['rel'] = FALSE;

		$this->pagination->initialize($config);


		$mdata['plink']=$this->pagination->create_links();

		$this->load->view('admin/menuList',$mdata);
	}

	public function menuPost()
	{
		$mn = $this->input->post('menuName', TRUE);
		echo $mn;

		$conf['upload_path']   = './test/';
		$conf['allowed_types'] = 'gif|jpg|png';
		$conf['overwrite']     = FALSE;
		$conf['max_size']      = 500;
		$conf['max_width']     = 2000;
		$conf['max_height']    = 2000;
		$conf['encrypt_name']  = TRUE;
		$this->load->library('upload', $conf);
		$imgName='';
		if ( ! $this->upload->do_upload('mimg'))
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);  //输出错误
            
            $imgName="";
        }
        else
        {
            $imgName = $this->upload->data('file_name');
            echo $imgName;
        }
	}

}

/* End of file menuList.php */
/* Location: ./application/controllers/menuList.php */
 ?>