<?php

class Jdsx extends Control
{
	// 主页，显示登录状态
	public function index()
	{
		// $_SESSION 关联数组（因为赋了u_name），array_keys($_SESSION) 所有键 数组，
		// in_array	检查数组中是否存在指定的值。
		// 自己写的判断条件：in_array('u_name', array_keys($_SESSION) )，复杂了，还是老师写的简单
		// empty() 检查一个变量是否为空
		if (empty($_SESSION['u_name']) ){
			$this->assign('uname', null);
		}
		else{
			$this->assign('uname', $_SESSION['u_name']);
		}
		$this->display();
	}

	// 获取商品列表
	public function getJdsx()
	{
		// 关联数组echo不出来，所以用json_encode()
		// 暂时为输出-------------------------------------------------------------------------------------
		echo json_encode($this->model('Jdsx')->select());
	}

	// 商品详情页，商品列表信息 (观钦)
	public function jdsx_info()
	{
		$this->assign('uname', $_SESSION['u_name']);
		$this->display();
	}
}

?>