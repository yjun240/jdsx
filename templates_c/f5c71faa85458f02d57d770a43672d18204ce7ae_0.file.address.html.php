<?php
/* Smarty version 3.1.30, created on 2018-08-03 21:39:43
  from "C:\wamp64\www\20180802\view\ucenter\address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64cb9f2fbcd5_07679972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5c71faa85458f02d57d770a43672d18204ce7ae' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\ucenter\\address.html',
      1 => 1533328112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ls_css.html' => 1,
    'file:login_state.html' => 1,
  ),
),false)) {
function content_5b64cb9f2fbcd5_07679972 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>收货地址</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender("file:ls_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<link rel="stylesheet" href="public/static/address.css">
</head>
<body>
	<div class="login_state">
		<?php $_smarty_tpl->_subTemplateRender("file:login_state.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>

	<div class="nav">
		<div class="nav_a">
			<div class="nav_left"><img src="public/images/logoa.png"></div>
			<div class="nav_mid_left">
				<p class="first">我的京东</p>
				<div class="two">返回京东首页</div>
			</div>
			<div class="nav_mid_right">
				<ul>
					<li>11212121</li>
					<li>11212121</li>
					<li>11212121</li>
					<li>11212121</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
	 	<div class="row box">
	 	<div class="col-md-1">
	 		
	 	</div>
		<div  class="col-md-2 left">
			<div class="left_top">设置</div>
			<div class="left_down">
			 	<ul>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">收货地址</a></li>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">个人信息</a></li>
			 		<li><a href="">个人信息</a></li>
			 	</ul>
			</div>
		</div>
		<div  class="col-md-9 right">
			<div class="hideden" id="hideden">
		        <div class="hidden_top">
			        <span class="close" v-on:click="greet_a" >&times;</span>
			        <p>添加收货地址</p>
		        </div>
		        <form  method="post" class="form_a">
					<div class="form-group">
						<label>收货人：</label>
						<input type="text" class="form-control" id="Ars_name" 
						name="Ars_name"  placeholder="请输入用户名" required="">
					</div>
					<div class="form-group">
						<label>详细地址:</label>
						<input type="tel" class="form-control" id="Ars_addres" 
						name="Ars_addres" required="" placeholder="手机号码">
					</div>
					<div class="form-group">
						<label>地址别名:</label>
						<input type="text" class="form-control" id="Ars_addres_name" 
						name="Ars_addres_name" required="" placeholder="地址别名">
					</div>
						<div class="form-group">
						<label>手机号码:</label>
						<input type="tel" class="form-control" id="Ars_phone" 
						name="Ars_phone" required="" placeholder="手机号码">
					</div>
					<input type="hidden" name="act" value="User_xinxi">
					<input type="hidden" name="action" value="jieshou">
					<input type="submit" class="btn btn-success form-control" value="保存">
				</form>
		    </div>
		    <div class="right_top">
		    	<input type="button" class="input_a" value="新增收货地址" v-on:click="greet">
		    	<span>您已创建0个地址，最多只能创建20个地址</span>
		    </div>
			<div class="box_a" v-for="X in Ars_xinxi"> 
			    <input type="button" class="input_a" value="新增收货地址" v-on:click="greet">
			    <span>您已创建$X.id-25$个地址，最多只能创建20个地址</span>
			    <p><b>电话：</b>$X.Ars_phone$</p>  
			    <p><b>姓名 ：</b>$X.Ars_name$</p>  
			    <p><b>地址名 ：</b>$X.Ars_addres_name$</p>  
			    <p><b>详细地址：</b>$X.Ars_addres$</p>
			    <a href="" class="btn btn-success">编辑</a>
			    <a href="" class="btn btn-success">删除</a>                     
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
		Vue.http.options.emulateJSON = true;

		new Vue({
			el:'.container',
			delimiters: ['$','$'],
			data:{
				Ars_xinxi:[],     
			},
		   mounted(){
		     this.$http.get("<?php echo url('ucenter','getAddres');?>
")
			    .then((rtnD) =>{
	                this.Ars_xinxi=rtnD.data;
			    })
			},
		    methods: {
		     	greet : function(){
                  var  hidden=document.querySelector(".hideden")
                   hidden.style.display="block";	
			    },
			    greet_a : function(){
			     	var hidden=document.querySelector(".hideden")
	                    hidden.style.display="none";	
			    }
			}
		})
	<?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
