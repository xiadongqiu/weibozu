@extends('Home.public')
@section('title','用户中心')
@section('content')
    <!-- head end -->
    <div style="height:30px;width:50px;"></div>
    <div class="cen_top">
        <div class="con_toppic">

            <div class="ibox-content">
                <div class="row">
                    <div id="crop-avatar" class="col-md-6" style="padding-left:0px">
                        <div class="avatar-view" >
                            @if($res->detail->portrait == 'default.jpg')
                            <img src='/Homes/images/tou.png' alt="Logo">
                            @else
                            <img src='http://p2l4kajri.bkt.clouddn.com/{{$res->detail->portrait}}' alt="Logo">
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="avatar-form"  enctype="multipart/form-data" >
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" type="button">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">修改头像</h4>
                            </div>
                            <div class="modal-body">
                                <div class="avatar-body">
                                    <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden">
                                        <input class="avatar-data" name="avatar_data" type="hidden">
                                        <label for="avatarInput">图片上传</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file"></div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="avatar-preview preview-md"></div>
                                        </div>
                                    </div>
                                    <div class="row avatar-btns">
                                        <div class="col-md-9">
                                            <div class="btn-group">
                                                <button class="btn" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees"><i class="fa fa-undo"></i> 向左旋转</button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees"><i class="fa fa-repeat"></i> 向右旋转</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success btn-block avatar-save" type="btn"><i class="fa fa-save"></i> 保存修改</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>

        </div>
        <div class="con_topname">{{$res->detail->nickname}}</div>
        <div class="con_topcon">{{$res->detail->abstract or '这个人很懒，什么都没有留下'}}</div>
    </div>

    <div class="cen_nav">
        <ul class="cen_m">
            @if($uid == session('home'))
                <li>我的主页</li>
                <li>我的相册</li>
            @else
                <li>她的主页</li>
                <li>她的相册</li>
            @endif

            @if($uid ==session('home'))
                <li>个人中心</li>
            @endif
        </ul>
    </div>
    <div style="clear: both;"></div>
    <div class="zhu_cont">
        <div class="content"  style="display:{{$status['status'] == null?'block':'none'}}" >
            <div class="cont_left">
                <div class="cont_left_one">
                    <ul>
                        <li>
                            <a href="/user/user/attent?id={{$uid or ''}}">{{$res->detail->attent}}</a>
                            <span>关注</span>
                        </li>
                        <li>
                            <a href="/user/user/fensi?id={{$uid or ''}}">{{$res->detail->fensi}}</a>
                            <span>粉丝</span>
                        </li>
                        <li>
                            <a href="/user/user/index?id={{$uid or ''}}">{{count($res->weibo)}}</a>

                            <span>微博</span>
                        </li>
                    </ul>
                </div>
                <div class="cont_left_two">
                    <ul>
                        <li><a href="javascript:;">申请认证</a></li>
                        <li>已经成功认证&nbsp;&nbsp;<img src="/Homes/images/huiyuan.png"></li>
                    </ul>

                    <div>
                        @if($uid == session('home'))
                        <a onclick="zhongxin()" style="cursor:pointer">详情请看个人中心</a>
                        @endif
                    </div>
                </div>
                <div class="cont_left_three">
                    <span style="border-bottom: 1px solid #F2F2F5;">相册</span>
                    @if(count($pic)>=2)
                        <div>
                        @for($i=0;$i<=1;$i++)

                            <img src="http://p2l4kajri.bkt.clouddn.com/{{$pic[$i]}}">
                        @endfor
                        </div>
                    @else
                        <div><img src="/Homes/images/tou.png"><img src="/Homes/images/tou.png"></div>
                    @endif
                    <span style="border-top: 1px solid #F2F2F5;"><a onclick="xiangce()" style="cursor:pointer">查看个人相册</a></span>
                </div>
                <div class="cont_left_three" style="">
                    <span style="border-bottom: 1px solid #F2F2F5;">赞</span>
                    @if(count($res->like)>0)
                    <div class="W_zan" style="border-bottom:1px solid #ddd;">
                        <img style="width: 60px;
                                height: 60px;
                                border-radius: 50%;" src="http://p2l4kajri.bkt.clouddn.com/{{($res->like[0])->portrait}}">
                        <p><a href="#">{{$res->like[0]->nickname}}</a></p>
                        <div>{{$res->like[0]->content}}</div>
                    </div>
                    <div  style="clear:both"></div>
                    @else
                        您未赞过任何微博
                    @endif
                    <span id="zhuijia" style="border-top: 1px solid #F2F2F5;"><a href="javascript:;" id="{{$res->id}}" onclick="zan(this)">查看更多</a></span>

                </div>
            </div>
            <div class="cont_center">
                <div class="wei_sou" style="width: 640px;height: 60px;background: #fff;border-radius: 3px;">
                    <div class="wei_souall"><a href="javascript:;">全部</a></div>
                    <div class="wei_souinp">
                        <form>
                            <input type="text" style="width:200px;height:25px">
                            <input id="sou" type="submit" value="搜索">
                        </form>
                    </div>
                </div>
                <!-- 微博内容 -->
                @if(count($res->weibo)>0)
                @foreach ($res->weibo as $k => $v)
                    <div class="weibo" style="">
                        @if($uid == session('home'))

                        <a href="javascript:;" class="xiangxia"></a>

                        <div class="xiangxia_show" style="height: 37px;">
                            <ul>
                                <li><a href="javascript:;" id="{{$v->id}}" onclick="delw(this)">删除</a></li>
                            </ul>
                        </div>
                        @endif
                        <div class="weibo_d1">
                            @if($v->portrait =='default.jpg')
                            <img src="/homes/images/tou.png">
                            @else
                            <img src="http://p2l4kajri.bkt.clouddn.com/{{$v->portrait}}">
                            @endif
                        </div>
                        <div class="weibo_d2">
                            <a href="javascript:;" class="wei_name">{{$v->nickname}}</a>
                            <div class="wei_time">
	                            @if(time()-$v->publish_time < 3600)
	                            <a href="javascript:;">{{date('i',$v->publish_time)}}分钟前</a> 来自 微博 weibo.com</div>
	                            @else
	                            <a href="javascript:;">{{date('Y-m-d',$v->publish_time)}}</a> 来自 微博 weibo.com</div>
	                            @endif
                            <div class="wei_cont">
                                <div class="W_cont" >
                                    <p style="">{{htmlentities($v->content)}}</p>
                                </div>
                                <ul class="wei_ul">
                                    @if( (json_decode($v->picture,true))[0] != '' )
                                        @foreach(json_decode($v->picture,true) as $val)
                                        <li><img src="http://p2l4kajri.bkt.clouddn.com/{{$val}}"></li>
                                        @endforeach
                                    @endif                                    
                                </ul>
                            </div>
                        </div>
                        <div style="clear:both" style=""></div>
                        <div class="wei_bottom">
                            <ul>
                                <li style="width:80px"></li>
                                <li onclick="xiang(this)">
                                    <a href="/detail/{{$v->id}}">查看详情</a>
                                </li>
                                <li onclick="Ping(this)" class="Ping">
                                    <input type="hidden" value="{{$v->id}}">
                                    <a href="javascript:;">评论</a><span>{{$v->comment}}</span>
                                </li>
                                <li onclick="zana(this)" class="zan" id="{{$v->uid}}">
                                    <input type="hidden" value="{{$v->id}}">
                                    <a href="javascript:;">赞</a><span>{{$v->like}}</span>
                                </li>
                            </ul>
                        </div>
                        <!-- 回复内容 -->
                        <div class="wei_replay">
                        </div>
                    </div>
                @endforeach
                @else
                    <div class="weibo">您未发布任何微博</div>
                @endif
                {{--<!-- 微博内容结束 -->--}}
                <script type="text/javascript">

                    $('.xiangxia').click(function(){
                        $(this).siblings().show();
                        return false;
                    });
                    $('body').click(function(){
                        $('.xiangxia_show').hide();
                    });

                    function zana(obj){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.post('/index/zan',{wei:$(obj).find('input[type=hidden]').val(),uid:$(obj).attr('id')},function(data){
                            if(data == '1'){
                                layer.msg('您已经赞过该帖子了');
                            }else if(data == '2'){
                               var zan = $(obj).find('span').html();
                                zan = parseInt(zan);
                                zan = zan+1;
                                $(obj).find('span').html(zan);
                            }else if(data == '0'){
                                layer('失败，请重试');
                            }
                        });
                    }
                </script>
                <script type="text/javascript">
                    function delw(obj){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        layer.confirm('确定要删除吗？', {
                            btn: ['确认','取消'] //按钮
                        }, function(){
                            $.post('/index/delw',{wid:$(obj).attr('id')},function(data){
                                if(data == '1'){
                                    layer.msg('删除成功');
                                    $(obj).parent().parent().parent().parent().remove();
                                }
                            });
                        });

                    }

                </script>
            </div>
            <div class="cont_right">
                <img src="/homes/images/guanggao1.png">
                <img src="/homes/images/guanggao2.png">
            </div>
        </div>


<!--         相册开始 -->

<div style="clear: both;"></div>
<div class="xiangce" style="display:{{$status['status'] == '2'?'block':'none'}}">
    <div class="xiangce_d1">
        <b>相片墙</b>
        @if($uid == session('home'))
        <a href="javascript:;" id="shang" style="text-decoration:none;">上传图片</a>
        @endif
    </div>
    <div class="xiangce_pics">
            <div class="baguetteBoxOne gallery">
                @if($res->detail->pics != '')
                    @foreach (json_decode($res->detail->pics) as $key=>$v)
                <a href="http://p2l4kajri.bkt.clouddn.com/{{$v}}" title="第1张图片">
                    <img src="http://p2l4kajri.bkt.clouddn.com/{{$v}}?imageView2/2/w/200/h/200">
                </a>
                        @if($uid == session('home'))
                    <button type="button" id="{{$key}}"  onclick="delpic(this)" class="btn-warning">删除</button>
                        @endif
                    @endforeach
                @else
                    <h4>您未添加任何图片 请去添加</h4>
                @endif
            </div>
    </div>

    <script type="text/javascript">
        baguetteBox.run('.baguetteBoxOne', {
            animation: 'fadeIn',
        });
        function delpic(obj){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post('/user/user/delpic',{pic:$(obj).attr('id')},function(data){
                if(data == 1){
                    layer.msg('删除成功');
                    location.href = '/user/user/index?status=2&id={{$uid or ''}}';

                }
            });
        }
    </script>

</div>

<!-- 相册结束 -->

<!-- 个人中心 -->

<div class="zhu_center" style="display:{{$status['status'] == '1'?'block':'none'}}">
    <div class="xinxi_one"><span>基本信息</span> <button type="button" id="bianji" >编辑</button>
    </div>
    <div class="xinxi_two">
        <table>
            <tr>
                <td><span>登录名</span></td>
                <td>{{$res->phone}}</td>
            </tr>
            <tr>
                <td><span>昵  称</span></td>
                <td><i></i>{{$res->detail->nickname or '未填写昵称'}}</td>
            </tr>
            <tr>
                <td><span>真实姓名</span></td>
                <td><i></i>{{$res->detail->name or '马上填写自己的真实姓名'}}</td>
            </tr>
            <tr>
                <td><span>所在地</span></td>
                <td><i></i>{{$adress[0].'省   '.$adress[1].'市' }}</td>
            </tr>
            <tr>
                <td><span>性  别</span></td>
                <td><i></i>{{$res->detail->sex }}</td>
            </tr>
            <tr>
                <td><span>性取向</span></td>
                <td><i></i>{{$res->detail->sexual or '马上填写自己的性取向,让更多的人了解你'}}</td>
            </tr>
            <tr>
                <td><span>感情状况</span></td>
                <td><i></i>{{$res->detail->emotion or '马上填写自己的感情状况,让更多的人了解你'}}</td>
            </tr>
            <tr>
                <td><span>生日</span></td>
                <td><i></i>{{$res->detail->birthday}}</td>
            </tr>
            <tr>
                <td><span>血型</span></td>
                <td><i></i>{{$res->detail->blood or '马上填写自己的血型,可以被更多同血型的人找到哦'}}</td>
            </tr>
            <tr>
                <td><span>个性域名</span></td>
                <td><i></i>{{$res->detail->domainname or '马上填写还没有个性域名和微号哦，现在就去申请吧~'}}</td>
            </tr>
            <tr>
                <td><span>简介</span></td>
                <td><i></i>{{$res->detail->abstract or '马上填写自己的个人介绍,让大家快速了解真实的你'}}</td>
            </tr>
            <tr>
                <td><span>注册时间</span></td>
                <td><span>{{date('Y-m-d',$res->detail->registertime)}}</span></td>
            </tr>
        </table>
    </div>
    <div class="xinxi_one"><span>联系信息</span></div>
    <div class="xinxi_two">
        <table>
            <tr>
                <td><span>邮箱</span></td>
                <td><i></i>{{$res->detail->email or '您未填写邮箱'}}</td>
            </tr>
            <tr>
                <td><span>QQ</span></td>
                <td><i></i>{{$res->detail->qq or '您还未填写QQ'}}</td>
            </tr>
            <tr>
                <td><span>MSN</span></td>
                <td><i></i>{{$res->detail->msn or '您还未填写MSN'}}</td>
            </tr>
        </table>
    </div>
    <div class="xinxi_one"><span>职业信息</span></div>
    <div class="xinxi_two">
        <table>
            <tr>
                <td><span>职业信息</span></td>
                <td><i></i>{{$res->detail->job or '请填写职业信息'}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="zhu_center bianji" style="display:{{$status['status'] == '3'?'block':'none'}}">
    <form action="" id="form">
    <div class="xinxi_one"><span>基本信息</span> <button id="baocun" type="button">保存</button>
    </div>
    <div class="xinxi_two">

            <table>
            <tr>
                <td><span>登录名</span></td>
                <td><i></i>{{$res->phone}}</td>
            </tr>
            <tr>
                <td><span>昵  称</span></td>
                <td><input type="text" value="{{$res->detail->nickname}}" placeholder="请输入昵称" name="nickname" /></td>
            </tr>
            <tr>
                <td><span>真实姓名</span></td>
                <td><input type="text" value="{{$res->detail->name}}" placeholder="请输入姓名" name="name"/></td>
            </tr>
            <tr>
                <td><span>所在地</span></td>
                <td>

                    <select  id="province">

                        <option>请选择省份</option>

                        <option value="北京" {{$adress[0]=='北京'?'selected':' '}}>北京</option>

                        <option value="上海" {{$adress[0]=='上海'?'selected':' '}}>上海</option>

                        <option value="江苏" {{$adress[0]=='江苏'?'selected':' '}}>江苏</option>

                        <option value="河南" {{$adress[0]=='河南'?'selected':' '}}>河南</option>

                        <option value="日本" {{$adress[0]=='日本'?'selected':' '}}>日本</option>

                    </select>

                    <select class="city" >

                        <option>请选择城市</option>

                    </select>
                    <select class="city" >

                        <option value="东城" {{$adress[1]=='东城'?'selected':' '}}>东城</option>

                        <option value="西城" {{$adress[1]=='西城'?'selected':' '}}>西城</option>

                        <option value="崇文" {{$adress[1]=='崇文'?'selected':' '}}>崇文</option>

                        <option value="宣武" {{$adress[1]=='宣武'?'selected':' '}}>宣武</option>

                        <option value="朝阳" {{$adress[1]=='朝阳'?'selected':' '}}>朝阳</option>

                    </select>

                    <select class="city">

                        <option value="黄埔" {{$adress[1]=='黄浦'?'selected':' '}}>黄浦</option>

                        <option value="卢湾" {{$adress[1]=='卢湾'?'selected':' '}}>卢湾</option>

                        <option value="徐汇" {{$adress[1]=='徐汇'?'selected':' '}}>徐汇</option>

                        <option value="常宁" {{$adress[1]=='长宁'?'selected':' '}}>长宁</option>

                        <option value="静安" {{$adress[1]=='静安'?'selected':' '}}>静安</option>

                    </select>

                    <select class="city">

                        <option value="南京" {{$adress[1]=='静安'?'selected':' '}}>南京</option>

                        <option value="镇江" {{$adress[1]=='镇江'?'selected':' '}}>镇江</option>

                        <option value="苏州" {{$adress[1]=='苏州'?'selected':' '}}>苏州</option>

                        <option value="南通" {{$adress[1]=='南通'?'selected':' '}}>南通</option>

                        <option value="扬州" {{$adress[1]=='扬州'?'selected':' '}}>扬州</option>

                    </select>

                    <select class="city">

                        <option value="郑州" {{$adress[1]=='郑州'?'selected':' '}}>郑州</option>

                        <option value="周口" {{$adress[1]=='周口'?'selected':' '}}>周口</option>

                        <option value="洛阳" {{$adress[1]=='洛阳'?'selected':' '}}>洛阳</option>

                        <option value="南阳" {{$adress[1]=='南阳'?'selected':' '}}>南阳</option>

                        <option value="安阳" {{$adress[1]=='安阳'?'selected':' '}}>安阳</option>

                    </select>

                    <select class="city">

                        <option value="大阪" {{$adress[1]=='大阪'?'selected':' '}}>大阪</option>

                        <option value="秋叶原" {{$adress[1]=='秋叶原'?'selected':' '}}>秋叶原</option>

                        <option value="东京" {{$adress[1]=='东京'?'selected':' '}}>东京</option>


                    </select>
                    <input type="hidden" name="adress" value="" id="adress">


                    <script type="text/javascript">
                        $(function(){
                            $("#province").change(function(){
                                $("#province option").each(function(i,o){
                                    if($(this).attr("selected"))
                                    {
                                        $(".city").hide();

                                        $(".city").eq(i).show();

                                        currentShowCity=i;
                                    }
                                });
                            });
                            $("#province").change();
                        });


                        $('#form').change(function(){
                        var sheng = $("#province").val();
                        $(".city").each(function(i,o){
                            if(i == currentShowCity){
                                shi = $(".city").eq(i).val();
                            }
                        });

                        var adress = sheng +":"+shi;
                        $('#adress').val(adress);

                        var year = $('#date-sel-year').val();
                        var month = $('#date-sel-month').val();
                        var day = $('#date-sel-day').val();
                        var date =  year+'-'+month+"-"+day;

                        $('#birthday').val(date);
                    });

                    </script>
                </td>
            </tr>
            <tr>
                <td><span>性  别</span></td>
                <td><input type="radio" name="sex" value="男" {{($res->detail->sex == '男') ? 'checked':''}}/>男
                    <input type="radio" name="sex" value="女" {{($res->detail->sex == '女') ? 'checked':''}}/>女
                </td>
            </tr>
            <tr>
                <td><span>性取向</span></td>
                <td><input type="radio" name="sexual" value="男" {{($res->detail->sexual == '男') ? 'checked':''}}/>男
                    <input type="radio" name="sexual" value="女" {{($res->detail->sexual == '女') ? 'checked':''}}/>女
                    <input type="radio" name="sexual" value="双性" {{($res->detail->sexual == '双性') ? 'checked':''}}/>双性
                </td>

            </tr>
            <tr>
                <td><span>感情状况</span></td>
                <td><select name="emotion" id="">
                        <option value="默认" {{($res->detail->emotion == ' ') ? 'selected':''}}>请选择</option>
                        <option value="单身狗" {{($res->detail->emotion == '单身狗') ? 'selected':''}}>单身狗</option>
                        <option value="暗恋中" {{($res->detail->emotion == '暗恋中') ? 'selected':''}}>暗恋中</option>
                        <option value="暧昧中" {{($res->detail->emotion == '暧昧中') ? 'selected':''}}>暧昧中</option>
                        <option value="恋爱中" {{($res->detail->emotion == '恋爱中') ? 'selected':''}}>恋爱中</option>
                        <option value="已婚" {{($res->detail->emotion == '已婚') ? 'selected':''}}>已婚</option>
                        <option value="订婚" {{($res->detail->emotion == '订婚') ? 'selected':''}}>订婚</option>
                        <option value="分居" {{($res->detail->emotion == '分局') ? 'selected':''}}>分居</option>
                        <option value="离异" {{($res->detail->emotion == '离异') ? 'selected':''}}>离异</option>
                        <option value="丧偶" {{($res->detail->emotion == '丧偶') ? 'selected':''}}>丧偶</option>


                    </select></td>
            </tr>
            <tr>
                <td><span>生日</span></td>
                <td>
                    <select id="date-sel-year" rel=" {{date('Y',strtotime($res->detail->birthday))}}" ></select>年
                    <select id="date-sel-month" rel="{{date('m',strtotime($res->detail->birthday))}}"></select>月
                    <select id="date-sel-day" rel="{{date('d',strtotime($res->detail->birthday))}}"></select>日
                    <input type="hidden" id="birthday" name="birthday">
                </td>
            </tr>
            <tr>
                <td><span>血型</span></td>
                <td>
                    <select name="blood" id="">
                        <option value="AB" {{($res->detail->blood == 'AB') ? 'selected':''}}>AB</option>
                        <option value="A" {{($res->detail->blood == 'A') ? 'selected':''}}>A</option>
                        <option value="O" {{($res->detail->blood == 'O') ? 'selected':''}}>O</option>
                        <option value="B" {{($res->detail->blood == 'B') ? 'selected':''}}>B</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><span>个性域名</span></td>
                <td><input type="text" name="domainname" value="{{ $res->detail->domainname }}" placeholder="请输入个人域名"> </td>
            </tr>
            <tr>
                <td><span>简介</span></td>
                <td><textarea name="abstract" id="" cols="20" rows="2"  placeholder="请输个人简介">{{$res->detail->abstract}}</textarea></td>
            </tr>
            <tr>
                <td><span>注册时间</span></td>
                <td><span>{{date('Y/m/d H:i:s',$res->detail->registertime)}}</span></td>
            </tr>
        </table>

    </div>
    <div class="xinxi_one"><span>联系信息</span></div>
    <div class="xinxi_two">
        <table>
            <tr>
                <td><span>邮箱</span></td>
                <td><input type="text" name="email" value="{{$res->detail->email}}" placeholder="请输入个人邮箱"></td>
            </tr>
            <tr>
                <td><span>QQ</span></td>
                <td><input type="text" name="qq" value="{{$res->detail->qq}}" placeholder="请输入QQ"></td>
            </tr>
            <tr>
                <td><span>MSN</span></td>
                <td><input type="text" name="msn" value="{{$res->detail->msn}}" placeholder="请输入MSN"></td>
            </tr>
        </table>
    </div>/
    <div class="xinxi_one"><span>职业信息</span></div>
    <div class="xinxi_two">
        <table>
            <tr>
                <td><span>职业信息</span></td>
                <td><input type="text" name="job" value="{{$res->detail->job}}" placeholder="请输入个人职业信息"></td>
            </tr>
        </table>


    </div>
    </form>
</div>

<!--   个人中心 -->

    </div>
    <script type="text/javascript" src="/homes/js/date.js"></script>
    <script type="text/javascript">

        $("#shang").click(function(){

            layer.open({
                type: 2,
                title: '图片上传',
                shadeClose: true,
                shade: 0.8,
                area: ['60%', '60%'],
                content: '/user/user/uploade'
            });


        });

        // $('#ssi-upload').ssi_uploader({url:'#',maxFileSize:6,allowed:['jpg','gif','txt','png','pdf']});
    </script>
    <script type="text/javascript">

        $('.cen_m').children().eq(0).click(function(){
            zhuye();
        });

        function zhuye(){
            $('.content').show();
            $('.xiangce').hide();
            $('.zhu_center').hide();
            $('.weibo').show();
        }



        $('.cen_m').children().eq(1).click(function(){
            xiangce();

        });
        function xiangce(){
            location.href = '/user/user/index?status=2&id={{$uid or ''}}';
            $('.content').hide();
            $('.xiangce').show();
            $('.zhu_center').hide();
            $('.weibo').hide();

        }

        $('.cen_m').children().eq(2).click(function(){
            zhongxin()
        });
        function zhongxin(){
            $('.content').hide();
            $('.xiangce').hide();
            $('.zhu_center').show();
            $('.bianji').hide();
        }


        $('#bianji').click(function(){
            // alert(1);

            $('.zhu_center').hide();
            $('.bianji').show();
        });

        $('#baocun').click(function(){
            $('.zhu_center').show();
            $('.bianji').hide();
            var formData = new FormData($( "#form" )[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });
            $.ajax({
                type: "post",
                dataType: "json",
                url: "/user/user/edit",
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if(data == 1){
                    layer.msg('保存成功');
                    location.href = '/user/user/index?status=1';
                }else{
                    layer.msg('修改失败,请重试');
        }
                }
            });


        });

        $.date_picker({
            YearSelector:  "#date-sel-year",
            MonthSelector: "#date-sel-month",
            DaySelector:   "#date-sel-day"
        });
        // $.ms_DatePicker().val();

        $(function(){
           $('a').css('text-decoration','none');
        });
    </script>
    <script type="text/javascript">
        var ii =0;
        function zan(obj){
            $(obj).slideDown(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.post('/user/user/like',{id:"{{$uid}}"},function(data){
                    if(data.length>=2){
                        if(ii<data.length-1){
                            for(var i = 1 + ii;i< data.length;i++) {
                                $('#zhuijia').before('<div class="W_zan" style="border-bottom:1px solid #ddd;">\n' +
                                    '                        <img style="width: 60px;\n' +
                                    '                                height: 60px;\n' +
                                    '                                border-radius: 50%;" src="http://p2l4kajri.bkt.clouddn.com/'+data[i].portrait+'">\n' +
                                    '                        <p><a href="/user/user/index?id='+data[i].uid+'">'+data[i].nickname+'</a></p>\n' +
                                    '                        <div>'+data[i].content+'</div>\n' +
                                    '                    </div>\n' +
                                    '                    <div  style="clear:both"></div>');
                                ii++;
                            }
                        }else{
                            layer.msg('没有更多信息了');
                        }

                    }else{
                        layer.msg('没有更多信息了');
                    }

                });
            });
        }


    </script>
@endsection('content')


