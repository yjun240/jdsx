<?php
/* Smarty version 3.1.30, created on 2018-08-03 23:52:37
  from "C:\wamp64\www\20180802\view\ucenter\addressY.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64eac56ec9d2_26438057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56608854ec3ba10dd215a80b0938d88fec64d18e' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\ucenter\\addressY.html',
      1 => 1533340331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ucenter/menu.html' => 1,
  ),
),false)) {
function content_5b64eac56ec9d2_26438057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>收货地址</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>
	<!-- import stylesheet -->
	<link rel="stylesheet" href="//unpkg.com/iview/dist/styles/iview.css">
	<!-- import iView -->
	<?php echo '<script'; ?>
 src="//unpkg.com/iview/dist/iview.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="container">
		<div class="col-md-3">
			<?php $_smarty_tpl->_subTemplateRender("file:ucenter/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
		<div class="col-md-9">
			<h3>收获地址管理<a @click="" class="btn btn-success">添加地址</a></h3>

			<modal v-model="show">111</modal>
			<ul>
				<li></li>
			</ul>
		</div>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
		new Vue({
			el: '.container',
			data:{
				show: true,
			}
		})
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
