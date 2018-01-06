<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/homes/layer/layer.js"></script>

    <title>Document</title>
    <style type="text/css">
        *{
            margin:0px;
            padding:0px;

        }
        a{

        }
        body{
            background: url("/homes/images/2.jpg")no-repeat;

        }

        .box1 {
            width: 100%;
            height:100%;
            position: relative;
        }
        .box2{
            width:500px;
            height:500px;
            position: absolute;
            right:120px;
            top:150px;
            /*border:1px solid red;*/
            background-color: rgba(255,255,255,.8);
            padding:40px;
            padding-top: 70px;
            font-size: 20px;
            border-radius:10px;

        }
        .box3
        {
            margin-top:30px;
            font-size: 15px;
        }

        .box5
        {
            margin-top:-40px;
            font-size: 25px;
        }
        .box4
        {
            margin-right:10px;
            font-size: 18px;
        }

        .yan {
            /*display: block;*/
            width:40%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.4285;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left:120px;
        }

        .form-control
        {
            height:40px;
        }
    </style>
</head>
<body>
<div class="box1">

    <div class="box2">
        <div class="box5 text-center">
           <strong> 用户注册</strong>
      </div>
        <form>
            <div class="form-group">
                <label for="phone">手机号</label>
                <input type="text" class="form-control" id="phone" placeholder="手机号" name="phone">
            </div>
            <button type="button" id="yan" class="btn btn-info">点击获取验证码</button>
            <input type="text" name="yanzheng" class="yan" placeholder="验证码"/>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="密码">
            </div>
            <div class="form-group">
                <label for="repassword">确认密码</label>
                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="确认密码">
            </div>

            <button type="button" class="btn btn-success form-control" id="register">注册</button>
            <div class="box4"><a href="#" style=" text-decoration: none;margin-left:335px;">忘记密码</a></div>
        </form>
        <div class="box3 text-center">
            已经拥有账号 赶快<a href="/user/login" style=" text-decoration: none;">登录</a>

        </div>
    </div>

</div>
</body>
<script type="text/javascript">
    $('#yan').click(function(){
        $.get('/user/register/code',{phone:$('#phone').val()},function(data){
            if(data == '0'){

                layer.confirm('您的手机号已经注册是否前去登录?', {
                    btn: ['登陆','取消'] //按钮
                }, function(){
                    location.href='/user/login';
                });
            }

        });

    });

    $('#register').click(function(){

         $.post('/user/register/register',{username:$('#phone').val(),password:$('#password').val(),code:$('.yan').val(),'_token':'{{csrf_token()}}'},function(data){
                if(data == '1'){
                    alert('注册成功');
                }else{
                    alert('注册失败');
                }
        });
    });


</script>
</html>