<?php
/* Smarty version 3.1.30, created on 2018-08-03 20:57:40
  from "C:\wamp64\www\20180802\view\jdsx\jdsx_info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b64c1c4b83753_05074789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03ed4846ecc42156ee33ffe0ac6f9e0265cf61ae' => 
    array (
      0 => 'C:\\wamp64\\www\\20180802\\view\\jdsx\\jdsx_info.html',
      1 => 1533327781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ls_css.html' => 1,
    'file:login_state.html' => 1,
  ),
),false)) {
function content_5b64c1c4b83753_05074789 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<?php echo '<script'; ?>
 type="" src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.min.js"> <?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="public/static/jdsx_info.css?1">
	<?php $_smarty_tpl->_subTemplateRender("file:ls_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
	<div class="login_state">
		<?php $_smarty_tpl->_subTemplateRender("file:login_state.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	
	<div class="view">
		<!-- 最外层 -->
		<div class="container">
			<div class="content">
				<!-- 左边 -->
				<div class="left_box">

					<!--图片盒子 -->
					<div class="pic_box">
						<!-- 放小照片 -->
						<div class="pic">
							<img src="public/images/small.jpg" alt="">

							<div class="bar"></div>
						</div>

						<!-- 放大后的照片 -->
						<div class="big_pic">
							<img src="public/images/big.jpg" alt="">
						</div>
						<div class="fangda">
							<img src="public/images/icon.png" alt="">
						</div>
					</div>

					<!-- 轮播图 -->
					<div class="slider">
						<div class="zuo item" @click="go_left()"><</div>
						<div class="you item" @click="go_right">></div>
						<div class="picture">
							<ul class="goods_list" :style="'margin-left:'+move_px">
								<li v-for="n in 15">
									<img src="public/images/5b57e142N1275ff69.jpg" >
									<p>$n$</p>
								</li>

							</ul>
						</div>
					</div>
					<div class="preview_info">
						<div class="left_btn">
							<div class="icon">
								<img src="public/images/1.png" alt="">
							</div>
							<div>关注</div>
							<div class="icon">
								<img src="public/images/2.png" alt="">
							</div>
							<div>分享</div>
						</div>
						<div class="right_btn">
							<div>举报</div>
						</div>
					</div>

				</div>



				<!-- 右边 -->
				<div class="right_box">
					<div class="right_top">
						<div class="shang">
							<div class="shang_left">京东超市</div>
							<div class="shang_right" >大牧汗 羔羊羊蝎子 800g/袋 火锅食材</div>
						</div>
						<div class="xia" style="font-size: 10px"><span style="color: red">贴秋膘，吃肉肉，一起为肉痴狂！</span><span style="color: #005AA0">部分商品满199减100</span></div>
					</div>
					<div class="price_box">
						<div class="tmp_box">
							<div class="dd">
								<li style="color: #A1BADC">京东价</li>
								<li style="color: #e4393c; font-size: 25px;line-height: 20px">￥35.00</li>
								<li style="color: #005aa0;vertical-align: 2px;">降价通知</li>
								<div class="leiji">累计评价</div>
							</div>
							<div class="dd">
								<li style="color: #A1BADC">  促    销</li>
								<li style="color: #e4393c;font-size: 14px;border: 1px solid red">限购</li>
								<li style="color: #666;vertical-align: 2px"> 购买1-5件时享受单件价￥35，超出数量以结算价为准</li>
							</div>
							<div class="dd">
								<li style="color: #A1BADC">  促    销</li>
								<li style="color: #e4393c;font-size: 14px;border: 1px solid red">满价</li>
								<li style="color: #e4393c;font-size: 14px;border: 1px solid red">加价购</li>
								<div class="leiji">展开促销</div>
							</div>
						</div>
						<div class="hidden_box"></div>
					</div>
					<div class="sp_info">
						<div class="row item">
							<div class="col-md-2">配送至</div>
							<div class="col-md-4 address">
								<div>北京朝阳区三环至四环之间</div>
								<div class="hidden_box"></div>
							</div>
						</div>
						<div class="row item">
							<div class="col-md-2"></div>
							<div class="col-md-8">支持生鲜99元免基础运费（50kg内） 京准达 自提 闪电退款</div>
						</div>
						<div class="row item">
							<div class="col-md-2"></div>
							<div class="col-md-8">由 京东 发货, 并提供售后服务. 23:00前下单,预计明天(08月02日)送达</div>
						</div>
						<div class="row item">
							<div class="col-md-2">重    量</div>
							<div class="col-md-8">0.84kg</div>
						</div>
					</div>
					<div class="baitiao_box">
						<div class="col-md-2" style="line-height: 30px">京东白条</div>
						<div class="item">
							<p>不分期</p>
							<div class="hidden_box">无手续费</div>
						</div>
						<div class="item">
							<p>￥22.68起×3期</p>
							<div class="hidden_box">含手续费：费率0.5%起，￥0.34起×3期</div>
						</div>
						<div class="item">
							<p>￥11.49起×6期</p>
							<div class="hidden_box">含手续费：费率0.5%起，￥0.34起×6期</div>
						</div>
						<div class="item">
							<p>￥5.96起×12期</p>
							<div class="hidden_box">含手续费：费率0.5%起，￥0.34起×12期</div>
						</div>
					</div>
					<div class="shopcar_box">
						<div class="row ">
							<div class="col-md-2"></div>
							<div class="col-md-3">购物车</div>
							<div class="col-md-3">打白条</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 src="public/js/jdsx_info.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
		Vue.http.options.emulateJSON = true;

		new Vue({
			el:'.view',
			delimiters: ['$','$'],

			data:{
				cur_goods_code:0,
				move_px:0,
				change_num:0,
				box_width:276,

			},
			methods:{
				go_left(){
					--this.change_num;
					this.move_px = this.change_num*this.box_width+"px"

				},
				go_right(){
					++this.change_num;
					this.move_px = this.change_num*this.box_width +"px"
				},
				go_num(){

				}
			}
		})
	<?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
