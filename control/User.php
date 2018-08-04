<?php

class user extends Control{

	// 用户注册
	public function register()
	{
		$this->display();
	}

	// 保存用户注册信息
	public function doReg()
	{
		$uphone = $_POST['uphone'];
		$uname = $_POST['uname'];
		// 初次注册时，不需要填写登录名，登录名默认为用户名
		$ulname = $uname;
		$upwd = $_POST['upwd'];
		$reg_time = time();

		$this->model('user')->insert([
			'uphone'=>$uphone,
			'uname'=>$uname,
			'ulname'=>$ulname,
			'upwd'=>$upwd,
			// 'reg_time'=>'1',
			'reg_time'=>$reg_time,
		]);
		// header('Location: index.php');
		// 用中间跳转页面，就可以不用header()了
		message($this, url("jdsx", "index"), '注册成功！');
	}

	// 用户登录
	public function login()
	{
		$this->display();
	}

	// 保存用户登录信息
	public function doLog()
	{
		// header('Location: index.php');
		// 混合型，用户名or手机号or登录名
		$nlpmixed = $_POST['nlpmixed'];
		$upwd = $_POST['upwd'];

		// 判断逻辑重新写----------------------------------------------------------------------------------------
		// 手机号用1581587，用户名用yj1581587，密码2299，
		// 然后用手机号登录可以，用户名登录不行！
		$s_condition = 'upwd='.$upwd.' AND (uname='.$nlpmixed.' OR uphone='.$nlpmixed.' OR ulname='.$nlpmixed.')';

		// echo $s_condition;

		if ($this->model('user')->where($s_condition)->find() ) {
			$_SESSION['u_name'] = $nlpmixed;
			message($this, url("jdsx", "index"), '登录成功！');
		}
		else{
			message($this, url("user", "login"), '登录失败！您输出的用户名或密码有误，请重新输入！');
		}
	}

	// 用户退出登录
	public function logout()
	{
		unset($_SESSION['u_name']);	//销毁给定的变量
		message($this, url("jdsx", "index"), '退出成功！');
	}
}

?>