<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>微博</title>
	<meta name="keywords" content="微博">
	<meta name="content" content="微博">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link type="text/css" rel="stylesheet" href="/homes/css/login.css">
    <script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/homes/layer/layer.js"></script>

    <style type="text/css">
        .box1,.box2{
                   display: none;
        }
    </style>
</head>
<body class="login_bj" width="">
<div class="zhuce_body">
	<div class="logo"><img src="/homes/images/logo.png"></div>
    <div class="zhuce_kong login_kuang">
    	<div class="zc">
        	<div class="bj_bai">
            <h3>登录</h3>
       	  	  <form action="" method="get">
                <input name="" type="text" id="phone" class="kuang_txt" placeholder="手机号">
                <div class="box1">账号不存在</div>
                <input name="" type="text" id="password" class="kuang_txt" placeholder="密码">
                <div class="box2">密码错误</div>
                <div>
               		<a href="#">忘记密码？</a><input name="" type="checkbox" value="" checked><span>记住我</span> 
                </div>
                <input name="登录" type="button" class="btn_zhuce" value="登录">
                
                </form>
            </div>
        	<div class="bj_right">
            	<p>使用以下账号直接登录</p>
                <a href="www.qq.com" class="zhuce_qq">QQ注册</a>
                <a href="https://wx.qq.com/" class="zhuce_wx">微信注册</a>
                <p>已有账号？<a href="/user/register">立即注册</a></p>
            
            </div>
        </div>
        <P>weibo.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欢迎您登录微博</P>
    </div>

</div>
    <script type="text/javascript">
        $('#phone').blur(function(){

            //设置一个判断手机号是否合法的正则表达式
            var string = "^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\\d{8}$";

            var res = $('#phone').val().match(string);

            if(res == null){
                $('.box1').text('手机号格式书写错误');
                $('.box1').css({color:'red',display:'block'});
            }else{
                $('.box1').text('手机号格式书写正确');
                $('.box1').css({color:'green',display:'block'});

                    $.post('/user/login/phone', {phone: $('#phone').val(), '_token': '{{csrf_token()}}'}, function (data) {
                        if (data == '1') {
                        } else if (data == '0') {
                            layer.msg('您的手机尚未注册,请先注册');
                        }
                    });


            }

        });

    </script>

</body>
</html>