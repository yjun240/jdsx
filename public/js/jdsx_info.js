// 图片放大

// 图片区的最外层盒子
var pic_box =document.querySelector(".pic_box");

var picImg = document.querySelector(".pic img");

var bar = document.querySelector(".bar");

var big_pic = document.querySelector(".big_pic");

var big_picImg = document.querySelector(".big_pic img");

//显示隐藏
function $(id,all){ return all ? document.querySelectorAll(all) : document.querySelector(id)};

function show(obj){
	obj.style.display="block"
}
function hide(obj){
	obj.style.display="none"
}

pic_box.onmouseover=function () {
	show(bar);
	show(big_pic);
}
pic_box.onmouseout=function () {
	hide(bar);
	hide(big_pic);
}
pic_box.onmousemove=function(ev){
	var x=ev.clientX - pic_box.offsetLeft - 40;
	var y=ev.clientY - pic_box.offsetTop - 40;

	bar.style.left=x+"px";
	bar.style.top=y+"px";

	if (bar.offsetLeft <= 0 ){
		bar.style.left=0+"px";
	}
	else if(bar.offsetLeft >= pic_box.offsetWidth - bar.offsetWidth){
		bar.style.left=pic_box.offsetWidth - bar.offsetWidth+"px";
	}
	if (bar.offsetTop <= 0 ){
		bar.style.top=0+"px";
	}
	else if(bar.offsetTop >= pic_box.offsetHeight - bar.offsetHeight){
		bar.style.top=pic_box.offsetHeight - bar.offsetHeight+"px";
	}

    //bar 移动一像素， 图片移动几像素
    // 昨天小明吃了 10个包子，小爸爸吃了8个包子， 今天 小明吃了5.6个包子 小明爸爸吃几个包子

    // 小盒子 除以 大盒子  *  bar 移动的距离 = 图片移动的距离
    big_picImg.style.left = pic_box.offsetWidth / big_pic.offsetWidth *  -x + "px";
    big_picImg.style.top = pic_box.offsetHeight / big_pic.offsetHeight *  -y + "px";
}
