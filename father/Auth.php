<?php

class Auth extends Control{
	
	public function __construct()
	{
		// $uname = $_POST['uname'];
		// $upwd = $_POST['upwd'];
		// $np_equal = $this->model('user')->where("uname=$uname AND upwd=$upwd")->find();
		// if (!$np_equal) {
		// 	echo '您输入的用户名或密码有误，请重新输入！';exit();
		// }
		if (empty($_SESSION['u_name'])) {
			message($this, url("user", "login"), '您好，请登录');
			exit();
		}
		// 子类一旦重写了父类的构造函数，父类的构造函数就不会执行了
		parent::__construct();
	}
}

?>