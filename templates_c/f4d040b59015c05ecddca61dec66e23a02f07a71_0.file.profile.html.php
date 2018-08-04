<?php
/* Smarty version 3.1.30, created on 2018-08-03 23:52:25
  from "C:\wamp64\www\20180802\view\ucenter\profile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64eab9438683_18211629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d040b59015c05ecddca61dec66e23a02f07a71' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\ucenter\\profile.html',
      1 => 1533334227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ls_css.html' => 1,
    'file:login_state.html' => 1,
  ),
),false)) {
function content_5b64eab9438683_18211629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/static/ucenter_profile.css">
	<link rel="stylesheet" href="public/static/uinfo.css">
	<?php $_smarty_tpl->_subTemplateRender("file:ls_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
	<div class="login_state">
		<?php $_smarty_tpl->_subTemplateRender("file:login_state.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	<!-- <?php echo $_smarty_tpl->tpl_vars['ulxname']->value;?>
 -->
	<!-- 自己写的 -->
	<div class="container">
		<div class="jd_nav">京东</div>
		<div class="row ucenter">
			<div class="col-md-2 tab">
				<h3>设置</h3>
				<ul>
					<li><a href="<?php echo url('ucenter','profile');?>
">个人信息</a></li>
					<li><a href="<?php echo url('ucenter','address');?>
">收货地址</a></li>
				</ul>
			</div>
			<div class="col-md-10">
				<div class="content">111</div>
				<div class="content">222</div>
			</div>
		</div>
	</div>

	<!-- 柳娜写的 -->
	<div class="view container">
		<div class="left">
			
		</div>
		<div class="right">
			<div class="top tl_content">
				<ul>
					<li class="nav nav_first cur">基本信息</li>
					<li class="nav">头像图片</li>
					<li class="nav">更多个人信息</li>
				</ul>
			</div>
			<br>
			<br>
            <form action="http://localhost/20180802/index.php" method="post">
				<div class="bottom">
					<div class="content">
						<!--< div class="box">
							<p name="uanme"></p>
							<img src="../../public/static/2.jpg">
						</div>-->
						<p class="label">用户名：</p>
						<div>	
							<h5></h5>
						</div>
						<br>
						<br>
						<p class="label">登录名:</p>
						<div>
							<p><name="uname"></p>
						</div>
						<br>
						<br>
						<p class="label">昵称：</p>
						<div class="loc">
				        	<input type="text"  name="name" value="">
				        </div>
				        <br>
				        <br>
				        <p class="label">性别：</p>
				        	<div class="loc">
					            <input type="radio" name="sex" value="0">男
					            <input type="radio" name="sex" value="1">女
					            <input type="radio" name="sex" value="2">保密
					            </td></tr>
					        </div><br><br>
				        <p class="label">生日：</p>
			            <div class="loc">
							<select id="year" class="xiala" name="year">
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
							</select><span>年</span>
							<select name="yue">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select><span>月</span>
							<select name="day">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select><span>日</span>
						</div>
						<br>
						<br>
			 			<p class="label">兴趣爱好：</p>
			 			<span class="hh">请选择你感兴趣的分类，给你最棒的推荐</span>
			 			<br>
					 	<div class="loc">
					 		<div class="choose" name="hobby">
					 		    <div class="kuangkuang" value="家用电器">家用电器</div>
				 		 		<div class="kuangkuang" value="家具">家具</div>
			                    <div class="kuangkuang" value="苹果">苹果</div>
			                    <div class="kuangkuang" value="苹果000000000">苹果000000000</div>
			                    <div class="kuangkuang">苹果000000000</div>
			                    <div class="kuangkuang">苹果0000000000</div>
			                    <div class="kuangkuang">苹果0000000000</div>
			                    <div class="kuangkuang">水仙</div>
					        </div>
					    </div>
			      		<tr><td><br><br>
			      		<input type="hidden" name="control" value="Ucenter">
						<input type="hidden" name="action" value="uinfo">
			   			<div class="btn">
			   				<input type="submit" value="提交">
			   			</div>
					</div>

					<div class="content" style="display:none;">
						<div class="pic">
							
						</div>
					</div>
					
					<div class="content" style="display: none">
						<p class="label">婚姻状态：</p>
			            <div class="loc" >
				            <input type="radio" name="marry" value="0">已婚
				            <input type="radio" name="marry" value="1">未婚
				            <input type="radio" name="marry" value="2">保密
				            </td></tr>
			        	</div>
				        <br>
				        <br>
				        <p class="label" name="money">月收入</p>
				        <div class="loc">
				        	<select>
				        		<option value="5000">5000</option>
				        		<option value="6000">6000</option>
				        		<option value="7000">7000</option>
				        		<option value="8000">8000</option>
				        	</select>
				        </div>
				        <br>
				        <br>
				        <p class="label">身份证号码</p>
				        <div class="loc">
				        	<input type="text" name="ID"/>
				        </div>
				        <br>
				        <br>
				        <p class="label">教育程度</p>
				        <div class="loc">
				        	<select class="edu">
				        	    <option value="大学">大学</option>
				        		<option value="中学">中学</option>
				        		<option value="小学">小学</option>
				        	</select>
				        </div>
				        <br>
				        <br>
				        <br>
						<p class="label">所在行业</p>
						<div class="loc">
							<select>
								<option>1</option>
				        		<option>2</option>
				        		<option>3</option>
				        		<option>4</option>
							</select>
						</div>
						<br>
						<br>
					    <input type="hidden" name="control" value="Ucenter">
				        <input type="hidden" name="action" value="uinfo">
						<div class="btn">
							<input type="submit" value="提交">
						</div>
					</div>
				</div>
	        </form>
	   	</div>
	</div>

	<?php echo '<script'; ?>
 src="public/js/uinfo.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
