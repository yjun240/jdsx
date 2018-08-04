<?php
/* Smarty version 3.1.30, created on 2018-08-03 21:05:09
  from "C:\wamp64\www\20180802\view\user\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64c3854207d8_31610724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6dc0d24a81debcb778687dda312538965aaf1b' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\user\\login.html',
      1 => 1533330306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b64c3854207d8_31610724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.user_log{
			width: 400px;
			height: 600px;
			margin: 50px auto;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<div class="user_log">
		<h3>用户登录</h3>
		<form action="<?php echo url('user','doLog');?>
" method="post">
			<div class="form-group">
				<label>用户名</label>
				<input name="nlpmixed" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>密码</label>
				<input name="upwd" type="password" class="form-control">
			</div>

			<div class="form-group">
				<!-- 因为浏览器会默认隐藏问号后面的内容action=register$control=user，所以要用隐藏域 -->
				<!-- <input type="hidden" name="control" value="user">
				<input type="hidden" name="action" value="doLog"> -->
				<input type="submit" class="btn btn-primary" style="width: 100%;" value="登录">
			</div>
		</form>
	</div>

</body>
</html><?php }
}
