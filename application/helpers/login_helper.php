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
			//如果是网址 则为urlArr[2]
			if ($urlArr[3]=='clogin') {
				return true;
			} else if($urlArr[1]=='customer'){
				return true;
			} else {
				header("Location: localhost/chiyo/admin/clogin"); //跳转
				return true;
			}
			//header("Location: /chiyo/admin/clogin"); 
		} else {
			return true;
		}
		exit();
	}