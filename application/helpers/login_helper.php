<?php
	checkLogin();
	/**
	* 检查是否登录
	*/
	function checkLogin()
	{
		$url = $_SERVER["REQUEST_URI"]; 
		if (!isset($_SESSION['loginStatus'])) {
			if ($url=='/chiyo/admin/clogin') {
				return true;
			} else {
				header("Location: /chiyo/admin/clogin");
				return true;
			}
			//header("Location: /chiyo/admin/clogin"); 
		}
		exit();
	}