<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuAdd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/menuAddm', 'ma');

		$data['ms']=$this->ma->getClass();

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$this->load->view('admin/menuadd',$data);
	}

	public function addMenu($value='')
	{
		$mName=$this->input->post('mName', TRUE);
		$cID=$this->input->post('cID', TRUE);
		$mPrice=$this->input->post('mPrice', TRUE);
		$mInfo=$this->input->post('mInfo', TRUE);
		//$img=$this->input->post('mImage', TRUE);

		$conf['upload_path']   = './uploads/';
		$conf['allowed_types'] = 'gif|jpg|png';
		$conf['overwrite']     = FALSE;
		$conf['max_size']      = 500;
		$conf['max_width']     = 2000;
		$conf['max_height']    = 2000;
		$conf['encrypt_name']  = TRUE;
		$this->load->library('upload', $conf);
		$imgName='';
		if ( ! $this->upload->do_upload('mImage'))
        {
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);  //输出错误
            //die();
            $imgName="";
        }
        else
        {
            $imgName = $this->upload->data('file_name');
        }
		

        $data = array('cID'=>$cID,'mName'=>$mName,'mImage'=>$imgName,'mPrice'=>$mPrice,'mInfo'=>$mInfo,'mStatus'=>'1');

        $this->load->model('admin/menuAddm', 'ma');

        $res = $this -> ma -> addMenu($data);

        if($res)
        {
        	$this->load->model('admin/menuAddm', 'ma');

			$data['ms']=$this->ma->getClass();

			$data['mes']['type']='success';

			$data['mes']['info']='添加成功';

			$this->load->view('admin/header');
			$this->load->view('admin/navbar');

			$this->load->view('admin/menuadd',$data);

        } else {
        	echo "error";
        }

	    
	}

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>