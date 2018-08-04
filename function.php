<?php
// 页面跳转到 中间等待页面
function message($obj, $url, $msg)
{
	$obj->assign('url', $url);
	$obj->assign('msg', $msg);
	$obj->display('message.html');
}

// 绝对路径 地址链接 control，action
function url($control, $action)
{
	// return "http://localhost/20180802/index.php?control=$control&action=$action";

	// 用一个预定义变量，移植性更好
	// 预定义变量的特点：1.写法都是固定的 2.返回的都是一个数组
	// [SERVER_NAME] => localhost
	// [SCRIPT_NAME] => /20180802/index.php
	// 端口：[SERVER_PORT] => 80
	return 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?control=$control&action=$action";
	// 要注意"?control=$control&action=$action"，用双引号，细节！
	// 因为传参的时候是url('', '')这种形式，单双引号会冲突
	
	// 如果多了一个反斜杠无所谓，两个就有所谓了，h
}

?>