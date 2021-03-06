<?php
/* Smarty version 3.1.30, created on 2018-08-04 18:36:07
  from "C:\wamp64\www\20180802\view\ucenter\address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b65f217adcb50_91755522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5c71faa85458f02d57d770a43672d18204ce7ae' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\ucenter\\address.html',
      1 => 1533407765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ucenter/menu.html' => 1,
  ),
),false)) {
function content_5b65f217adcb50_91755522 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="http://unpkg.com/iview/dist/styles/iview.css">
	<!-- import iView -->
	<?php echo '<script'; ?>
 src="http://unpkg.com/iview/dist/iview.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="container">
		<div class="col-md-3">
			<?php $_smarty_tpl->_subTemplateRender("file:ucenter/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
		<div class="col-md-9">
			<h3>收获地址管理<a @click="show=true" class="btn btn-success">添加地址</a></h3>

			<modal v-model="show" @on-ok="add">
				<form action="" class="form">
					<div class="form-group">
						<label >收货人</label>
						<input v-model="receive_people" type="text" class="form-control">
					</div>
					<div class="from-group">
						<label >选择地区</label>
						<Cascader :data="data" v-model="area"></Cascader>
					</div>
				</form>
			</modal>
			<ul>
				$addr_list$
				<li v-for="addr in addr_list">
					$addr.receive_people$
				</li>
			</ul>
		</div>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
		// vue-resource post方式提交参数php $_POST获取不到
		// post的请求头是Request Payload
		// 加上下面这行就变成了 Form Data
		// get的请求头是Query String Parameters
		// Vue原型的http 配置文件 emulateJSON属性
   		Vue.http.options.emulateJSON = true;

		new Vue({
			el: '.container',
			// [dɪ'lɪmɪtə] 定界符，分隔符
			delimiters: ['$','$'],
			data:{
				show: false,
				receive_people: '',	//收货人
				area: '',	//选择后复制给它
				data: [{
                    value: 'beijing',
                    label: '北京',
                    children: [
                        {
                            value: 'gugong',
                            label: '故宫'
                        },
                        {
                            value: 'tiantan',
                            label: '天坛'
                        },
                        {
                            value: 'wangfujing',
                            label: '王府井'
                        }
                    ]
                }, {
                    value: 'jiangsu',
                    label: '江苏',
                    children: [
                        {
                            value: 'nanjing',
                            label: '南京',
                            children: [
                                {
                                    value: 'fuzimiao',
                                    label: '夫子庙',
                                }
                            ]
                        },
                        {
                            value: 'suzhou',
                            label: '苏州',
                            children: [
                                {
                                    value: 'zhuozhengyuan',
                                    label: '拙政园',
                                },
                                {
                                    value: 'shizilin',
                                    label: '狮子林',
                                }
                            ]
                        }
                    ],
                }]
			},
			mounted(){
				this.$http.post('<?php echo url("ucenter","getAddress");?>
')
				.then((rtnD)=>{
					this.addr_list = rtnD.data
				})
			},
			methods:{
				add(){
					this.$http.post('<?php echo url("ucenter","saveAddress");?>
', {
						receive_people: this.receive_people,
						// js不可以传数组，要用JSON.stringify()，数组转成JSON字符串
						area: JSON.stringify(this.area),
					})
					.then((rtnD)=>{
						// ajax es6 Promise 异步
					})
				}
			}
		})
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
