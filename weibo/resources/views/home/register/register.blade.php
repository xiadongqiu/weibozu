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
        .gray-bg{
                disabled:disabled;

             }


    </style>
</head>
<body class="login_bj" >

<div class="zhuce_body">
	<div class="logo"><a href="#"><img src="/homes/images/logo.png" width="114" height="54" border="0"></a></div>
    <div class="zhuce_kong">
    	<div class="zc">
        	<div class="bj_bai">
            <h3>欢迎注册</h3>
       	  	  <form action="" method="get">
                <input name="phone" type="text" class="kuang_txt phone" placeholder="手机号"><i class='none1'></i>
                <input name="yan" type="button" id="yan" value="点击获取验证码" class="btn_info">
                <input name="code" type="text" class="btn_code" placeholder="验证码"><i class='none2'></i>
                <input name="password" id="password" type="password" class="kuang_txt possword" placeholder="密码 6到18位"><i class='none3'></i>
                <input name="" id="repassword" type="password" class="kuang_txt yanzm" placeholder="确认密码"><i class='none4'></i>
                <div>
               		<input name="" type="checkbox" value=""><span>已阅读并同意<a href="#" target="_blank"><span class="lan">《XXXXX使用协议》</span></a></span>
                </div>
                <input name="注册" id="register" type="button" class="btn_zhuce" value="注册">
                
                </form>
            </div>
        	<div class="bj_right">
            	<p>使用以下账号直接登录</p>
                <a class="zhuce_qq">QQ注册</a>
                <a class="zhuce_wx">支付宝</a>
                <p>已有账号？<a href="/user/login">立即登录</a></p>
            
            </div>
        </div>
        <P>weibo.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欢迎您注册微博</P>
    </div>

</div>
    <script type="text/javascript">

        $('.phone').blur(function(){

            //设置一个判断手机号是否合法的正则表达式
            var string = "^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\\d{8}$";

            var res = $('.phone').val().match(string);

            if(res == null){
                $('i').eq(0).attr('class','wrong');
                return false;
            }else{
                $('i').eq(0).attr('class','right');

            }
        //     $.get('/user/register/phone',{phone:$('.phone').val()},function(data){
        //         if(data == '1'){
        //             console.log('1');
        //             layer.msg('您的手机号已经注册,请登录');
        //             $('i').eq(0).attr('class','wrong');
        //         }
        //     });
         });

        $('#password').blur(function(){

            var string1 = '^[a-z0-9_-]{6,18}$';

            var res1= $('#password').val().match(string1);

            if(res1 == null){
                $('i').eq(2).attr('class','wrong');
                return false;
            }else{
                $('i').eq(2).attr('class','right');
            }

        });

        $('#repassword').blur(function(){

            if( $('#password').val() == ''|| $('#password').val() != $('#repassword').val()){
                $('i').eq(3).attr('class','wrong');
                return false;
            }else{
                $('i').eq(3).attr('class','right');
            }


        });

       $('#yan').click(function () {
           if (!$('.phone').val() || $('i').eq(0).attr('class')!= 'right') {
               layer.msg('您未填写手机号 或手机号不正确');
               $('i').eq(0).attr('class', 'wrong');
           } else {
               $.get('/user/register/code', {phone: $('.phone').val()}, function (data) {
                   if (data == '0') {
                       layer.msg('您的手机号已经注册,请登录');
                       $('i').eq(0).attr('class', 'wrong');
                   } else {
                       chen();
                   }
               });
           }
       });

         function chen() {
             var timer = "";
             var nums = 60;
             var validCode = true;//定义该变量是为了处理后面的重复点击事件
             $("#yan").on('click', function () {
                 console.log("111");
                 var code = $(this);
                 if (validCode) {
                     validCode = false;
                     timer = setInterval(function () {
                         if (nums > 0) {
                             nums--;
                             code.val(nums + "秒后重新发送");
                             code.attr('disabled', 'disabled');
                         }
                         else {
                             clearInterval(timer);
                             nums = 60;//重置回去
                             validCode = true;
                             code.removeAttr('disabled');
                             code.val("发送验证码");
                         }
                     }, 1000)
                 }
             })
         }

        $('#register').click(function(){
            if($('i').eq(3).attr('class')!='right' || $('i').eq(2).attr('class')!='right' || $('i').eq(0).attr('class')!='right'){
                layer.msg('您的注册信息有不正确的内容');
            }else{
                $.post('/user/register/register',{phone:$('.phone').val(),password:$('#password').val(),'_token':'{{csrf_token()}}'},function(data){
                        if(data == '1'){
                            layer.msg('恭喜，注册成功');
                            location.herf = '/user/login';

                        }else if(data == '2'){
                            layer.msg('抱歉，手机验证码不正确');
                        }
                });
            }


        });



    </script>

</body>
</html>