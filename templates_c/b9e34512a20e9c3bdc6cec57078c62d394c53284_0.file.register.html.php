<?php
/* Smarty version 3.1.30, created on 2018-08-03 20:57:16
  from "C:\wamp64\www\20180802\view\user\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64c1acea02e8_72514783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e34512a20e9c3bdc6cec57078c62d394c53284' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\user\\register.html',
      1 => 1533329795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b64c1acea02e8_72514783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.user_reg{
			width: 400px;
			height: 600px;
			margin: 50px auto;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<div class="user_reg">
		<h3>用户注册</h3>
		<!-- <form action="http://localhost/20180802/?control=user$action=register" method="post"> -->
		<!-- <form action="http://localhost/20180802/index.php" method="post"> -->
		<!-- 用了<?php echo url('user','doReg');?>
就可以不用隐藏域了，因为大括号{}，smarty遇到就会编译 -->
		<form action="<?php echo url('user','doReg');?>
" method="post">
			<div class="form-group">
				<label>手机号</label>
				<input name="uphone" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>用户名</label>
				<input name="uname" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>密码</label>
				<input name="upwd" type="password" class="form-control">
			</div>

			<div class="form-group">
				<!-- 因为浏览器会默认隐藏问号后面的内容action=register$control=user，所以要用隐藏域 -->
				<!-- <input type="hidden" name="control" value="user">
				<input type="hidden" name="action" value="doReg"> -->
				<input type="submit" class="btn btn-primary" style="width: 100%;" value="注册">
			</div>
		</form>
	</div>

</body>
</html><?php }
}
