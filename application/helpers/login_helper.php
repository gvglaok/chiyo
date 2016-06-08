<?php
	//session_start();
	checkLogin();
	/**
	* 检查是否登录
	*/
	function checkLogin()
	{
		//调用ci 内核的方法
		$CI =& get_instance();
		$CI->load->driver('session');

		$url = $_SERVER["REQUEST_URI"];
		$urlArr=explode('/', $url);
		if (!isset($_SESSION['ls'])) {
			if ($urlArr[2]=='clogin') {
				return true;
			} else if($urlArr[1]=='customer'){
				return true;
			} else {
				header("Location:http://ysd.njcftec.com/admin/clogin");
				return true;
			}
			//header("Location: /chiyo/admin/clogin"); 
		} else {
			return true;
		}
		exit();
	}