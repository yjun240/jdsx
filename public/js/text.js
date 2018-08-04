
var tl_content = document.querySelectorAll(".container .box_top .t_left .tl_content");
var icon = document.querySelectorAll(".container .box_top .t_left .tl_content .icon");
var time_box = document.querySelectorAll(".container .box_top .t_right .tr_time .time_box");
var arrow_head = document.querySelectorAll(".container .box_bottom .arrow_head");
var bar_box = document.querySelectorAll(".container .box_bottom .bar_box");
var btn = document.querySelectorAll(".container .box_bottom .bar_dot li");
var bar = document.querySelectorAll(".container .box_bottom .bar_box .bar");
var bar_li = document.querySelectorAll(".container .box_bottom .bar_box .bar li");
var tab_key = 0, dot_key = 0, speed = 0, iTarget = 0;  //tab_key 用于tab控制，联动；	dot_key用于小圆点控制，联动
var dk_current = [0, 0, 0];		//存储小圆点在早中晚tab里的不同状态

// 任务1：商品滑过有下拉效果
// 任务2：好评率与红色进度条是同步的
for(var i = 0; i < bar_li.length; i++){
            // 任务：商品滑过有下拉效果
			bar_li[i].onmouseover = function () {
	            var purchase = this.querySelector("a .purchase");
	            for (var i = 0; i < bar_li.length; i++) {
		            purchase.style.bottom = "0px";
		            // 如果写：
		            // 	purchase.style.display = "block";(原先为none)
		            // 	purchase.style.transition = "bottom 0.5s,block 0.5s";
		            // 	效果是：直接变成 display: block;和 bottom: 0px;（不是想要的）
					purchase.style.transition = "bottom 0.4s";
				}
				this.onmouseout = function () {
	            	// var purchase = this.querySelector("a .purchase");
		            purchase.style.bottom = "-40px";
					purchase.style.transition = "bottom 0.4s";
				}
            }

            // 任务：好评率与红色进度条是同步的	
	        var praise_rate = bar_li[i].querySelector("a .praise_rate span");
			// var pr_sum = bar_li[i].querySelector("a .pr_sum");
			var pr_value = bar_li[i].querySelector("a .pr_sum .pr_value");
			var rate = praise_rate.innerHTML;
			pr_value.style.width = rate;
}

// 任务3：左上角早中晚可切换
for(var i = 0; i < tl_content.length; i++){
    tl_content[i].id = i;
    tl_content[i].onclick = function(){
    	tab_key = this.id;
        for(var i = 0; i < tl_content.length; i++){
            bar_box[i].style.display = "none";
            tl_content[i].style.color = "#909090";
            // 三张图都复位
            icon[0].style.backgroundPosition = "0px -181px";
            icon[1].style.backgroundPosition = "-41px -181px";
            icon[2].style.backgroundPosition = "-82px -181px";
        }
        bar_box[this.id].style.display = "block";
        tl_content[this.id].style.color = "#00c65d";
        if (this.id == 0) {
        	icon[this.id].style.backgroundPosition = "0px -221px";
        }
        if (this.id == 1) {
        	icon[1].style.backgroundPosition = "-41px -221px";
        }
        if (this.id == 2) {
        	icon[2].style.backgroundPosition = "-82px -221px";
        }
        // 早中晚tab切换时，提取相对应的 dot_key 值（历史状态）
        dot_key = dk_current[this.id];
        // 早中晚tab切换时，同步小圆点的历史状态
        currentDot();
    }
}

// 任务4：右上角能倒计时
function countDown(hour, minute, second){
	var timer = null;
	// 预先设定倒计时的开始时间
	var cd_start = hour * 60 * 60 + minute * 60 + second;
	var hour =  hour;
	var minute = minute;
	var second = second;
	var t_array = [hour, minute, second];
	// 显示时间
	function showtime(){
		for (var i = 0; i < time_box.length; i++) {
			// 刷新时间
			hour =  Math.floor(cd_start / 3600);
			minute = Math.floor(cd_start / 60 % 60);
			second = Math.floor(cd_start % 60);
			t_array = [hour, minute, second];
			// 如果t_array里的 元素==0，就赋值为"00"
			if (t_array[i] == 0) {
				time_box[i].innerHTML = "00";
			}else if (t_array[i] < 10 && t_array[i] > 0) {
				// 如果 0<元素<10，就在十位上加0。如01、02
				time_box[i].innerHTML = "0" + t_array[i];
			}else{
				// 如果 元素>10，就直接赋值给对应innerHTML
				time_box[i].innerHTML = t_array[i];
			}
		}
	}
	// 先显示倒计时的开始时间
	showtime();
	// 倒计时
	timer = setInterval(function(){
		--cd_start;
		if (cd_start > 0) {
			showtime();
		}
		else{
			showtime();
			clearInterval(timer);
		}
	},1000);
}
// 3小时倒计时
countDown(3,0,0);

// 任务5：下面商品列表可左右切换、点击气泡切换
// 小圆点更新状态
function currentDot(){
	for(var i = 0; i < btn.length; i++){
        btn[i].removeAttribute("class")
    }
    btn[dot_key].setAttribute("class", "cur");
}
// ul运动
function move(iTarget, obj) {
    obj.style.transform = "translateX(" + iTarget + "px)";
    obj.style.transition = "transform 0.6s";

    // 用定时器减速运动的话，offsetLeft的值是相对父元素(position:relative)的，
    // 这里的情况是offsetLeft一直为35px; 
    // 以至于speed = -几十（定住不动了），所以 obj.style.left的值也无法达到iTarget

    // clearInterval(timer);
    // timer = setInterval(function () {
    //     speed = (iTarget - obj.style.offsetLeft) / 10;
    //     speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
    //     // console.log(speed);
    //     obj.style.left = obj.style.offsetLeft + speed + "px";
    //     if(!speed){
    //     	clearInterval(timer);
    //     }
    // },30);
    // console.log(11111111111);
}
// ul和小圆点 联动
function barDot(){
	currentDot();
    iTarget = dot_key * -bar_box[tab_key].offsetWidth;
    move(iTarget, bar[tab_key]);
}
// 上一页
function prev(){
    dot_key--;
    dot_key <= 0 ? dot_key = 0 : dot_key;
    // 用新的方法就加个-号，和 next() 一样！
    barDot();
    reserveDot();
}
// 下一页
function next(){
    dot_key++;
    dot_key >= btn.length - 1? dot_key = btn.length - 1 : dot_key;
    barDot();
    reserveDot();
}
arrow_head[0].onclick = function(){
	prev();
}
arrow_head[1].onclick = function(){
	next();
}
//点击小圆点
function clickDot() {
	for(var i = 0; i < btn.length; i++){
	    btn[i].index = i;
	    btn[i].onclick = function () {
	    	// 关键:先改变dot_key
	        dot_key = this.index;
	    	barDot();
	    	reserveDot();
	    }
	}
}
clickDot();
// 保存当前小圆点状态至当前选中的早中晚tab
function reserveDot(){
	dk_current[tab_key] = dot_key;
}
