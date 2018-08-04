
var btn = document.querySelectorAll(".right .top .nav");
var con = document.querySelectorAll(".right .bottom .content");

for (var i = 0; i < btn.length; i++) {
	btn[i].id = i;
	btn[i].onclick = function () {
		for (var i = 0; i < con.length; i++) {
			btn[i].className = "nav";
			con[i].style.display = "none";
		}
		this.className = "nav nav_first";
		con[this.id].style.display = "block";
	}
}