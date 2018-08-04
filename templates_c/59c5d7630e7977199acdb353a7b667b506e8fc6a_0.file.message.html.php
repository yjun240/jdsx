<?php
/* Smarty version 3.1.30, created on 2018-08-03 20:57:23
  from "C:\wamp64\www\20180802\view\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64c1b35737d9_74721304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c5d7630e7977199acdb353a7b667b506e8fc6a' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\message.html',
      1 => 1533329182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b64c1b35737d9_74721304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提醒跳转</title>
</head>
<body>
	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	<br>
	<b id="s"></b>秒后，自动跳转
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">手动跳转</a>
	
	<?php echo '<script'; ?>
>

		setInterval(skip, 1000);
		var n = 3;
		document.querySelector("#s").innerHTML = n;
		function skip() {
			if (n > 0) {
				document.querySelector("#s").innerHTML = n;
			} else {
				location.href = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
			}
			--n;
		}

	<?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
