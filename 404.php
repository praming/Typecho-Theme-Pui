<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>该页面不存在</title>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	body {
	background-color: #fff;
}
.auto {
	width: 1000px;
	margin: 230px auto;
}
.container {
	background: url(http://img.gukong.net/404-bg.png) no-repeat 560px top;
}
.settings {
	padding-left: 200px;
	padding-bottom: 50px;
}
.settings .icon {
	display: block;
	width: 242px;
	height: 106px;
	background: url(http://img.gukong.net/404.png) no-repeat 0 0;
}
.settings h4 {
	margin: 30px 0 15px 0;
	font-size: 18px;
	color: #2cb7fd;
}
.settings p {
	font-size: 14px;
	color: #999;
}
.settings > div {
	margin-top: 40px;
	font-size: 0;
}
.settings > div a {
	display: inline-block;
	padding: 10px 40px;
	border: 1px solid #2cb7fd;
	font-size: 15px;
	color: #2cb7fd;
	text-decoration: none;
}
.settings > div a:first-child {
	margin-right: 20px;
	color: #fff;
	background-color: #2cb7fd;
}
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
</style>
</head>
<body>
<div class="auto">
	<div class="container">
		<div class="settings">
			<i class="icon"></i>
			<h4>很抱歉！没有找到您要访问的页面！</h4>
			<p><span id="num">5</span> 秒后将自动跳转到首页</p>
			<div>
				<a href="http://www.gukong.com" title="返回首页">返回首页</a>
				<a href="javascript:;" title="上一步" id="reload-btn">上一步</a>
			</div>
		</div>
	</div>
</div>

<script>
	//倒计时跳转到首页的js代码
	var $_num=$("#num");
	var num=parseInt($_num.html());
	var numId=setInterval(function(){
		num--;
		$_num.html(num);
		if(num===0){
			//跳转地址写在这里
			window.location.href="http://www.gukong.com";
		}
	},1000);
	//返回按钮单击事件
	var reloadPage = $("#reload-btn");
	reloadPage.click(function(e){
		window.history.back();
	});
</script>

</body>
</html>