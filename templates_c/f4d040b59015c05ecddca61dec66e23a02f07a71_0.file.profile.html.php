<?php
/* Smarty version 3.1.30, created on 2018-08-04 17:06:59
  from "C:\wamp64\www\20180802\view\ucenter\profile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b65dd333210f8_62470081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d040b59015c05ecddca61dec66e23a02f07a71' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\ucenter\\profile.html',
      1 => 1533402352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ls_css.html' => 1,
    'file:login_state.html' => 1,
  ),
),false)) {
function content_5b65dd333210f8_62470081 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"><?php echo '</script'; ?>
>

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
	<!-- 自己写的 -->
	<div class="container">
		<div class="ucenter">
			<div class="tab">
				<h3>设置</h3>
				<ul>
					<li><a href="<?php echo url('ucenter','profile');?>
">个人信息</a></li>
					<li><a href="<?php echo url('ucenter','show');?>
">收货地址</a></li>
					<li><a href="<?php echo url('ucenter','address');?>
">YJ的收货地址</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- 柳娜写的 -->
	<div class="container">
	<div class="col-md-3 left"></div>
	<div class="col-md-6 right">
		<div class="top tl_content">
			<ul>
				<li class="nav nav_first cur">基本信息</li>
				<li class="nav">头像图片</li>
				<li class="nav">更多个人信息</li>
			</ul>
		</div>
		<form action="<?php echo url('ucenter','doprofile');?>
" class="form" method="post">
	        <div class="content">
				<label>用户名：<?php echo $_smarty_tpl->tpl_vars['username']->value['uname'];?>
</label>
				<label>登录名：<?php echo $_smarty_tpl->tpl_vars['username']->value['ulname'];?>
</label>
				<div class="form-group">
					<label>昵称：</label>
					<input type="text" class="form-control" name="name" v-model="info.name">
				</div>
			
				<div class="form-group">
					<label>性别：</label>
					<label>
						<input type="radio" value="1" name="sex" v-model="info.sex">男</label>
					<label>
					  <input type="radio" value="2" name="sex" v-model="info.sex">女</label>
			    </div>
			
				<div class="form-group">
					<label>生日：</label>
					<select name="year" v-model="info.year" class="xiala">
						<option value="0">请选择</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
					</select>年
					<select name="yue" v-model="info.yue" class="xiala">
						<option value="0">请选择</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>月
					<select name="day" v-model="info.day" class="xiala">
						<option value="0">请选择</option>
					    <option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>日
				</div>
			    
				<div class="form-group">
					<label>兴趣爱好</label>
					 <ul class="row hobby_box">
		            	<li v-for="(hb,xb) in hobby"  @click="choise(xb)"  :class="{ choise:cs_a.indexOf(xb)>-1 }">
		              		$hb$
		          		</li>       
		             </ul>
				</div>
				
				<div class="from-group">
					<input type="hidden" name="hobby" v-model="hobby_ht">
					<input  type="submit" class="btn btn-primary" value="提交">
				</div>
			</div>
	<!--第二个页面-->
	        <div class="content" style="display:none;">
				<div class="pic">
			    
				</div>
			</div>
	<!--第三个页面-->
	        <div class="content" style="display: none">
		<p class="label">婚姻状态：</p>
            <div class="loc" >
            <input type="radio" name="marry" value="0">已婚
            <input type="radio" name="marry" value="1">未婚
            <input type="radio" name="marry" value="2">保密
                    </td></tr></div><br><br>
        <p class="label" name="money">月收入</p><div class="loc">
        	<select>
        		<option value="5000">5000</option>
        		<option value="6000">6000</option>
        		<option value="7000">7000</option>
        		<option value="8000">8000</option>
        	</select>
        </div><br><br>
        <p class="label">身份证号码</p><div class="loc">
        	<input type="text" name="ID"/>
        </div><br><br>
        <p class="label">教育程度</p><div class="loc">
        	<select class="edu">
        	    <option value="大学">大学</option>
        		<option value="中学">中学</option>
        		<option value="小学">小学</option>
        	</select>
        </div><br><br><br>
		<p class="label">所在行业</p><div class="loc">
			<select>
				<option>1</option>
        		<option>2</option>
        		<option>3</option>
        		<option>4</option>
			</select>
		</div><br><br>
		      <input type="hidden" name="control" value="Ucenter">
	          <input type="hidden" name="action" value="profile">
		<div class="btn"><input type="submit" value="提交"></div>
	    </div>
	    </form>
	   </div>
	</div>

<?php echo '<script'; ?>
>
	new Vue({
		el:'.container',
		delimiters:['$','$'],
		data:{
		hobby:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['hobby']->value;?>
'),
		info:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
'),
		hobby_ht:'',
		cs_a:[],
		},
	    mounted(){
			this.cs_a = this.info.hobby
		},
		methods:{
			choise(n){
				let wz=this.cs_a.indexOf(n)
				if(wz>-1){
					this.cs_a.splice(wz,1)
				}
				else{
					this.cs_a.push(n)
					this.hobby_ht=this.cs_a.join("|")
				}
			}
		}
	})
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/uinfo.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
