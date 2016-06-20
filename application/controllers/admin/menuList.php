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

		// 分页
		$config['base_url'] = base_url().'admin/menulist/menuNext/';

		$config['total_rows'] = $mdata['num'];

		$config['per_page'] = 10;

		$config['num_links'] = 3;

		$this->pagination->initialize($config);

		$mdata['plink']=$this->pagination->create_links();

		//get menu class
		$this->load->model('admin/menuAddm', 'ma');

		$mdata['mclass']=$this->ma->getClass();

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$this->load->view('admin/menuList',$mdata);
	}
	


	public function menuNext($num=0)
	{
		$this->load->model('admin/menuListm', 'ml');
		$mdata=$this -> ml ->getMenu($num);

		$config['base_url'] = base_url().'admin/menulist/menuNext/';

		$config['total_rows'] = $mdata['num'];

		$config['per_page'] = 10;

		$config['num_links'] = 3;

		$this->pagination->initialize($config);


		$mdata['plink']=$this->pagination->create_links();

		//get menu class
		$this->load->model('admin/menuAddm', 'ma');

		$mdata['mclass']=$this->ma->getClass();

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$this->load->view('admin/menuList',$mdata);
	}

	public function menuUpdata()
	{
		$mmname = $this->input->post('mname', TRUE);
		$cid = $this->input->post('cID', TRUE);
		$mmoney = $this->input->post('mmoney', TRUE);
		$minfo = $this->input->post('minfo', TRUE);
		$mid = $this->input->post('mid', TRUE);

		$conf['upload_path']   = './uploads/';
		$conf['allowed_types'] = 'gif|jpg|png';
		$conf['overwrite']     = FALSE;
		$conf['max_size']      = 500;
		$conf['max_width']     = 2000;
		$conf['max_height']    = 2000;
		$conf['encrypt_name']  = TRUE;
		$this->load->library('upload', $conf);
		$imgName='';
		$data = '';
		if ( ! $this->upload->do_upload('mimg'))
        {
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);  //输出错误
            $data = array('cID' => $cid ,'mName' => $mmname ,'mPrice' => $mmoney ,'mInfo' => $minfo);
        }
        else
        {
            $imgName = $this->upload->data('file_name');
            $data = array('cID' => $cid ,'mName' => $mmname ,'mImage' => $imgName ,'mPrice' => $mmoney ,'mInfo' => $minfo); 
        }

        $condition="mID=".$mid;

        $this->load->model('admin/menuListm', 'ml');

        $res = $this -> ml -> updataMenu($data,$condition);

        if ($res) {
        	echo "success";
        } else {
        	echo "error";
        }

	}


	public function menuDele()
	{
		$mid=$this->input->post('mid', TRUE);
		$img=$this->input->post('imgName', TRUE);
		$pathArr= explode('/',$img);

		$this->load->model('admin/menuListm', 'ml');
		$warr = array('mID' => $mid);
		$res = $this -> ml -> dele($warr);
		if ($res) {
			if ($pathArr[3]=='admin') {
				echo 'success';
			} else {
				$imgFilePath = './uploads/'.$pathArr[3];
				$fexits=file_exists($imgFilePath);
				if ($fexits) {
					$unres=unlink($imgFilePath);
					echo $unres ? 'success' : 'error' ;
				}
				
			}
		} else {
			echo "error";
		}
		
	}

	public function udMS()
	{
		$status=$this->input->post('pss', TRUE);
		$mid=$this->input->post('pmid', TRUE);
		$status = $status==1 ? 0 : 1 ;

		$mstatus=array('mStatus'=>$status);
		
		$condition='mID='.$mid;

		$this->load->model('admin/menuListm', 'ml');

		$res=$this->ml->udMS($mstatus,$condition);

		echo $res ? 'success' : 'error';
	}

	public function mc($cid='',$num=0)
	{
		if($num==0){
			if ($cid!=''&&$cid!=0) {
				$this->session->set_userdata(array('scid'=>$cid));
			} else {
				echo "error";
				return false;
			}
			
		}

		$this->load->model('admin/menuListm', 'ml');
		$mdata=$this -> ml ->classMenu($_SESSION['scid'],$num);

		$config['base_url'] = base_url().'admin/menulist/mc/';
		$config['total_rows'] = $mdata['num'];

		$config['per_page'] = 10;
		$config['num_links'] = 2;

		$config['prefix'] = $_SESSION['scid'].'/';

		//sometimes firsturl need hand do it
		$config['first_url'] = base_url().'admin/menulist/mc/'.$_SESSION['scid'].'/0';

		$this->pagination->initialize($config);


		$mdata['plink']=$this->pagination->create_links();

		//get menu class
		$this->load->model('admin/menuAddm', 'ma');

		$mdata['mclass']=$this->ma->getClass();

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$this->load->view('admin/menuList',$mdata);
	}

}

