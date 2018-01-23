@extends('home.public')
@section('title','首页')
@section('bootstrap',' ')
@section('content')
    123
    <div class="security_bd">
        <div class="s_title S_line1 W_f14"><a style="color: #eb7350;">账号与安全</a></div>
        <div class="s_cont clearfix" style="float: left;">
            <ul id="selec" class="left_list S_line1 W_fl">
                <li class="on">修改密码</li>
                <li>手机号码</li>
                <li>登录保护</li>
                <li>最近登录记录</li>
                <li>威盾保护</li>
            </ul>
        </div>
        <div class="right_mod W_fr">
            <div class="form_mod">
                <div class="W_tips tips_warn clearfix">
                    <p class="icon"></p>
                    <p class="txt">为保障您的帐号安全，修改密码前请填写原密码
                    </p>
                </div>
                <ul class="form_list">
                    <li class="item">
                        <span class="tit">原密码</span>
                        <input type="password" class="W_input" id="opassword" name="password"  placeholder="请输入密码">
                    </li>

                    <li class="item">
                        <span class="tit">新密码</span>
                        <input type="password" class="W_input"  id="npassword" name="newpassword" placeholder="请输入密码">
                    </li>
                </ul>
                <p class="form_prompt S_txt2 tmp-tips-error" style="margin-bottom: 10px;margin-bottom: 10px;"></p>
                <div class="form_btn S_line2">
                    <a href="javascript:;" id="subbtn" class="W_btn_a btn_34px" >下一步</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#selec').children().click(function(){
            $('#selec').children().attr('class',' ');
            $(this).attr('class','on');
        });

        $('#opassword,#npassword').blur(function(){

            var string1 = '^[a-z0-9_-]{6,18}$';

            res1111= $('#opassword,#npassword').val().match(string1);

            if(res1111 == null){
                layer.msg('密码格式不正确');
                return false;
            }

        });


        $('#subbtn').click(function(){
            if(res1111 != null){
                $.post('/user/user/gai',{np:$('#npassword').val(),op:$('#opassword').val()},function(data){
                    if(data == '1'){
                        layer.msg('原密码不正确');
                    }else if(data == '2'){

                        layer.confirm('修改密码成功,请重新登录', {
                            btn: ['确定'] //按钮
                        }, function(){
                            location.href='/user/login';
                        });
                    }
                });
            }else{
                layer.msg('请确保密码格式正确');
            }
        });

    </script>

@endsection