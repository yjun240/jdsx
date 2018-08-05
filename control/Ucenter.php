<?php

class Ucenter extends Auth{

	// 个人信息，获取用户名和登录名
	public function profile()
	{
		$this->assign('uname', $_SESSION['u_name']);

		// 拿user表的数据
		$uname = $_SESSION['u_name'];
		$onename = $this->model('user')->where("uname=$uname")->find();
		$this->assign('username', $onename);

		// 柳娜 1
		 $info=$this->model('uinfo')->where('id=14')->find();
        $this->assign('info',json_encode($info));
        $hobby=['办公用品','好吃的','手机/数码', '电脑/办公', '家居/家具/家装/厨具', 
        '服饰内衣/珠宝首饰', '个护化妆', '鞋靴/箱包/钟表/奢侈品', '运动健康', '汽车用品', '母婴/玩具乐器'];
       	$this->assign('hobby',json_encode($hobby));

		$this->display();
	}

	// 柳娜 2
	public function doprofile()
	{
    	$this->model('uinfo')->insert([
    		'name'=>$_POST['name'],
    		'sex'=>$_POST['sex'],
    		'year'=>$_POST['year'],
    		'yue'=>$_POST['yue'],
    		'day'=>$_POST['day'],
    		'hobby'=>$_POST['hobby']
    	]);
    	header('location:'.url('ucenter','profile'));
    }

	// 收货地址
	public function address()
	{
		$this->assign('uname', $_SESSION['u_name']);
		$this->display();
	}

	// 保存收获地址
	public function saveAddress()
	{
		// implode(separator,array) 返回由数组元素组合成的字符串
		// $area = implode('|', json_decode($_POST['area'], true));
		// 不用加，是字段的问题，没对应
    	$this->model('address')->insert([
    		'receive_people' => $_POST['receive_people'],
    		'area' => $_POST['area']
    	]);
    	echo json_encode(['status'=>1]);
	}

	// 获取所有收获地址
	public function getAddress()
	{
		$ad_list = $this->model('address')->select();
    	echo json_encode($ad_list);
	}

	// 凯阳 1
	public function show()
	{
		$this->display();
        $Ars_name = $_POST['Ars_name'];
        $Ars_addres_name = $_POST['Ars_addres_name'];
        $Ars_addres=$_POST['Ars_addres'];
        $Ars_phone=$_POST['Ars_phone'];

		$this->model('ucenter')->insert([
			'Ars_name'=>$Ars_name,
			'Ars_addres_name'=>$Ars_addres_name,
			'Ars_addres'=>$Ars_addres,
			'Ars_phone'=>$Ars_phone,
		]);
	}

	// 凯阳 2
	public function getAddres()
	{
    	echo json_encode($this->model('ucenter')->select());
	}
}

?>