<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="/homes/css/index.css">
<link rel="stylesheet" type="text/css" href="/homes/css/head.css">
<link rel="stylesheet" type="text/css" href="/homes/css/foot.css">
<link rel="stylesheet" type="text/css" href="/homes/css/detail.css">
<link rel="stylesheet" type="text/css" href="/homes/css/user.css">
<link rel="stylesheet" type="text/css" href="/homes/css/bian_style.css">
<link rel="stylesheet" type="text/css" href="/homes/css/xiugai.css">

	<link rel="stylesheet" href="/homes/touxiang/baguettebox.min.css">
	<link rel="stylesheet" href="/homes/touxiang/style.css">

	<script type="text/javascript" src="/homes/touxiang/baguettebox.min.js"></script>
	<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>

	<script src="/homes/toux/jquery.min.js"></script>

	@yield('bootstrap','<link href="/homes/bootstrap/css/bootstrap.css" rel="stylesheet">')
	
	<!-- <link href="/homes/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
	<link href="/homes/toux/cropper.css" rel="stylesheet">
	<link href="/homes/toux/sitelogo.css" rel="stylesheet">

	<script src="/homes/toux/cropper.js"></script>
	<script src="/homes/toux/sitelogo.js"></script>
	<script src="/homes/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/homes/layer/layer.js"></script>
<!-- 评论回复的js -->
<script type="text/javascript" src="/homes/js/myJS.js"></script>

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
.xiangxia_show{
	display: none;
}
.xiangxia_show ul li{
	line-height: 30px;font-size: 12px;
}
body a{
	text-decoration:none;
}
.description{
	position:fixed;
	right:10px;
	top:10px;
	font-size:12px;
	color:#888;
}
span.reference{
	position:fixed;
	left:10px;
	bottom:10px;
	font-size:12px;
}
span.reference a{
	color:#888;
	text-transform:uppercase;
	text-decoration:none;
	padding-right:20px;
}
span.reference a:hover{
	color:#444;
}
.row{
	margin-right: 0px;margin-left: 0px;
}
.con_left>a {
	color: #fff;
}


.wei_zan>div>p{
	font-size: 12px;color: #666;margin: 0px;
}
.wei_name a{
	color: #333;
}

.security_bd ul li {
	color:#131313;
}

</style>

</head>
<body class="body">
	@section('nav')
	<div class="top">
		<div class="top_div">
			<div class="WB_logo"><img height="35" src="/homes/images/logo.png"></div>
			<div class="WB_sou">
				<form action="">
					<input type="text" style="width:400px;border:none;background:#F2F2F5;height:25px;outline:none;">
					<input style="float:right;margin-right:10px" type="image" src="/homes/images/fangdajing_1.png">
				</form>
			</div>
			<div class="WB_center" style="float: right;margin-left: 0px">
				<ul>
					<li><a class="WE_cen1" href="/index">&nbsp;&nbsp;首页</a></li>
					<li><a class="WE_cen2" href="#">&nbsp;&nbsp;发现</a></li>
					<li><a class="WE_cen3" href="/user/user" style="width:100px">&nbsp;&nbsp;用户名</a></li>
					<li><a class="WE_cen4" href="javascript:;" onclick="zhuxiao()">注销</a></li>
					<li><a class="WE_cen5" href="/user/user/xiu">修改密码</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			function zhuxiao(){
                layer.confirm('您是否要注销登录', {
                    btn: ['确定','取消'] //按钮
                }, function(){
					location.href ='/user/user/loginout';
                    layer.msg('注销成功', {icon: 1});
                });
			}


		</script>
		<script type="text/javascript">
			$(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post('/user/user/pub',function(data){
                    $('.WE_cen3').html(data.nickname);
				});
            });

		</script>
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
			@foreach($flinks as $val)
				<a href="{{ $val->url }}">{{$val->link_name}}</a>
			@endforeach
			</div>
		</div>
	</div>
</body>
</html>
@show