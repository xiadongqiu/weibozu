<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="Homes/css/index.css">
<link rel="stylesheet" type="text/css" href="Homes/css/head.css">
<link rel="stylesheet" type="text/css" href="Homes/css/foot.css">
<link rel="stylesheet" type="text/css" href="Homes/css/detail.css">
<link rel="stylesheet" type="text/css" href="Homes/css/user.css">
<link rel="stylesheet" type="text/css" href="Homes/css/bian_style.css"><script type="text/javascript" src="/Homes/js/jquery-1.8.3.min.js"></script>
<style type="text/css">
#content{
	width: 610px;height: 96px;margin-left: 15px;font-size: 14px;color: #666;font-family: '微软雅黑';overflow: auto;
}
#send{
	float: right;margin-right: 10px;border: none;border-radius: 3px;cursor: pointer;
}
.myEmoji{
	width: 600px;top:250px;
}
.tab-pane{
	display: none;
}
.active{
	border-radius: 3px 0px;border:1px solid #d9d9d9;border-bottom: none;
}
#myTab li{
	width: 60px;height: 30px;line-height: 30px;display: inline-block;text-align: center;cursor: pointer;
}
#myTab li a{
	font-size: 14px;color: #333;
}
#WB_type{
	display: inline-block;margin-left: 20px;width: 100px;margin-left: 20px;
}
.wei_replay,.weibo_gengduo{
	/*display: none;*/
}
</style>
<script type="text/javascript" src="Homes/js/jquery-1.8.3.min.js"></script>
</head>
<body class="body">
	@section('nav')
	<div class="top">
		<div class="top_div">
			<div class="WB_logo"><img height="35" src="/Homes/images/logo.png"></div>
			<div class="WB_sou">
				<form action="">
					<input type="text" style="width:400px;border:none;background:#F2F2F5;height:25px;outline:none;">
					<input style="float:right;margin-right:10px" type="image" src="/Homes/images/fangdajing_1.png">
				</form>
			</div>
			<div class="WB_center">
				<ul>
					<li><a class="WE_cen1" href="#">&nbsp;&nbsp;首页</a></li>
					<li><a class="WE_cen2" href="#">&nbsp;&nbsp;发现</a></li>
					<li><a class="WE_cen3" href="#">&nbsp;&nbsp;用户名</a></li>
					<li><a class="WE_cen4" href="#"></a></li>
				</ul>
			</div>
		</div>
	</div>
	@show

	@section('content')
	<!-- 主体 -->
	
	@show
<!-- 页脚 -->
	<div style="clear: both;"></div>
	<div class="footer">
		<div class="footer_one"></div>
		<div class="footer_two">
			<div class="footer_three">
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
				<a href="#">友情链接</a>
			</div>
		</div>
	</div>
</body>
</html>
@show