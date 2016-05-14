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

		$this->load->view('admin/menuadd',$data);
	}

	public function addMenu($value='')
	{
		$mName=$this->input->post('mName', TRUE);
		$cID=$this->input->post('cID', TRUE);
		$mPrice=$this->input->post('mPrice', TRUE);
		$mInfo=$this->input->post('mInfo', TRUE);

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

            var_dump($error);
            die();
        }
        else
        {
            $imgName = $this->upload->data('file_name');
        }

        $data = array('cID'=>$cID,'mName'=>$mName,'mImage'=>$imgName,'mPrice'=>$mPrice,'mInfo'=>$mInfo,'mStatus'=>'1');

        //var_dump($data);

        $this->load->model('admin/menuAddm', 'ma');

        $res = $this -> ma -> addMenu($data);
        if($res)
        {
        	echo "success";
        } else {
        	echo "error";
        }
        //$res ? echo "success" ; : echo "error" ;

	}

}

/* End of file timeOrder.php */
/* Location: ./application/controllers/timeOrder.php */
 ?>