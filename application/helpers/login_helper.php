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
			if ($urlArr[3]=='clogin') {
				return true;
			} else if($urlArr[2]=='customer'){
				return true;
			} else {
				header("Location:/chiyo/admin/clogin");
				return true;
			}
			//header("Location: /chiyo/admin/clogin"); 
		} else {
			return true;
		}
		exit();
	}