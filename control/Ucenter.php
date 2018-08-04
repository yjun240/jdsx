<?php

class Ucenter extends Auth{

	// 个人信息
	public function profile()
	{
		$this->assign('uname', $_SESSION['u_name']);
		// $ulname_pro = $this->model('user')->where("ulname=")->find();
		// $this->assign('ulxname', json_encode($ulname_pro));
		$this->display();

		// 柳娜 1
		$this->model('uinfo')->insert([
        	'name'=>$_POST['name'],
        	'sex'=>$_POST['sex'],
        	'year'=>$_POST['year'],
        	'yue'=>$_POST['yue'],
        	'day'=>$_POST['day'],
        	'marry'=>$_POST['marry'],
        ]);
        
		$id = $_GET['id'];
		$g_model = $this->model('uinfo');

		$info = $g_model->where("id=$id")->find();
		$this->assign('uinfo', $info);

		// header('location:'.url('ucenter', 'profile'));
	}

	// 收货地址
	public function address()
	{
		$this->assign('uname', $_SESSION['u_name']);
		$this->display();
	}

	// 收货地址Y
	public function addressY()
	{
		$this->assign('uname', $_SESSION['u_name']);
		$this->display();
	}

	// 返回user表里面的全部数据
	public function getUser()
	{
		# code...
	}

	// 凯阳 1
	public function  jieshou(){
        $Ars_name = $_POST['Ars_name'];
        $Ars_addres_name = $_POST['Ars_addres_name'];
        $Ars_addres=$_POST['Ars_addres'];
        $Ars_phone=$_POST['Ars_phone'];
		$this->model('User_xinxi')->insert([
			'Ars_name'=>$Ars_name,
			'Ars_addres_name'=>$Ars_addres_name,
			'Ars_addres'=>$Ars_addres,
			'Ars_phone'=>$Ars_phone,
		]);
	}

	// 凯阳 2
	public function getAddres()
	{
    	echo json_encode($this->model('User_xinxi')->select('addres'));
	}

	// 柳娜 2
	public function uinfo()
	{ 
		$this->display();
  //     	$this->model('uinfo')->insert([
  //       	'name'=>$_POST['name'],
  //       	'sex'=>$_POST['sex'],
  //       	'year'=>$_POST['year'],
  //       	'yue'=>$_POST['yue'],
  //       	'day'=>$_POST['day'],
  //       	'marry'=>$_POST['marry'],
  //       ]);
        
		// $id = $_GET['id'];
		// $g_model = $this->model('uinfo');

		// $info = $g_model->find("id=$id");
		// $this->assign('uinfo',$info);

		// header('location:http://localhost/20180802/index.php?control=Ucenter&action=uinfo');
	}
}

?>