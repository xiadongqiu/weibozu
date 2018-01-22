@extends('home.public')
@section('title','用户中心')
@section('content')
    <div style="height:30px;width:50px;"></div>
    <div class="cen_top">
        <div class="con_toppic">

            <div class="ibox-content">
                <div class="row">
                    <div id="crop-avatar" class="col-md-6" style="padding-left: 0px;">
                        <div class="avatar-view" >
                            <img src='http://p2l4kajri.bkt.clouddn.com/{{$res->detail->portrait}}' alt="Logo">
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
    <script type="text/javascript">
        $('body').css({
            font:'#333'
        });
        $('.cen_m').children().eq(0).click(function () {
            location.href = '/user/user/index?id={{$uid or ''}}'
        });

        $('.cen_m').children().eq(1).click(function () {
            location.href = '/user/user/index?status=2&id={{$uid or ''}}'
        });

        $('.cen_m').children().eq(2).click(function () {
            location.href = '/user/user/index?status=1&id={{$uid or ''}}'
        });

    </script>
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
                        <li><a href="#">申请认证</a></li>
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
                    @if($res->detail->pics != '')
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
                <div class="cont_left_three" style="height:200px;">
                    <span style="border-bottom: 1px solid #F2F2F5;">赞</span>
                    <div id="wei_zan">
                        <img src="/Homes/images/tou.png">
                        <div>
                            <p><a href="#">用户名</a></p>
                            <p>微博内容微博内容微博内容微博内容微博内容微博内容微博内容微内容</p>
                        </div>
                    </div>
                    <div  style="clear:both"></div>
                    <span style="border-top: 1px solid #F2F2F5;"><a href="#">查看更多</a></span>
                </div>
            </div>
            <div class="cont_center">
                <div class="wei_sou" style="width: 640px;height: 60px;background: #fff;border-radius: 3px;">
                    <div class="wei_souall"><a href="#">全部</a></div>
                    <div class="wei_souinp">
                        <form action="/user/user/">
                            <input type="text" style="width:200px;height:25px">
                            <input id="sou" type="submit" value="搜索" name="tiaojian">
                        </form>
                    </div>
                </div>

            </div>
            <div class="weibo" style="left:20px">
                <div class="wb_tab_a" style="">
                    <ul class="tab_ul clearfix">
                        <li class="tab_li" style="float: left;">
                            <a class="tab_item" bpfilter="page" href="#">
                                <span class="W_f14 S_txt1" style="">粉丝 {{$res->detail->fensi}}</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="follow_box">
                    <div class="follow_inner">
                        @foreach($res->attentions as $k=>$v)
                        <ul class="follow_list">

                            <dl style="position: relative; border-bottom: 1px solid;border-color:rgb(242, 242, 245)">
                                <dt class="mod_pic" style="float:left;position:relative">
                                    <a target="_blank" title="微博钱包" href="/user/user/index?id={{$v->id}}">
                                        <img  width="50" height="50" alt="微博钱包" src="http://p2l4kajri.bkt.clouddn.com/{{$v->detail->portrait}}" style="border-radius: 50%;width: 50px;height: 50px;">
                                    </a>
                                </dt>
                                <dd class="mod_info S_line1" style="position:relative">
                                    <div class="info_name W_fb W_f14" style="font-size: 14px;font-weight: 700">
                                        <a class="S_txt1" target="_blank"  href="/user/user/index?id={{$v->id}}">{{$v->detail->nickname}}</a>
                                    </div>
                                    <div class="info_connect">
                                        <span class="conn_type">关注
                                            <em class="count">
                                                <a target="_blank" href="#">{{$v->detail->attent}}</a>
                                            </em>
                                        </span>
                                        <span class="conn_type W_vline S_line1">粉丝<em class="count">
                                                <a target="_blank" href="#">{{$v->detail->fensi}}
                                                </a></em>
                                        </span>
                                        <span class="conn_type W_vline S_line1">微博<em class="count"><a target="_blank" href="#">{{count($v->weibo)}}</a>
                                            </em>
                                        </span>



                                    </div>
                                    <div class="info_add" style="line-height: 30px">
                                        <em class="tit S_txt2">地址</em> <span>  {{(explode(':',$v->detail->adress))[0]}}</span>
                                    </div>
                                    <div class="info_intro" style="line-height: 30px">简介 <span> {{$v->detail->abstract}}</span></div>
                                </dd>
                                <dd class="opt_box" node-type="opt_box" style="position: absolute">

                                    @if($uid  == session('home'))
                                    <span>
                                            @if(in_array($v->detail->id,$arr))
                                            <a href="javascript:;" class="W_btn_b" id="{{$v->detail->id}}" onclick="guanzhu(this)">{{'已互关注'}}</a>
                                             @else
                                            <a href="javascript:;" class="W_btn_b" id="{{$v->detail->id}}" onclick="guanzhu(this)">关注</a>
                                             @endif
								    </span>
                                     @endif
                                </dd>
                            </dl>

                        </ul>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        function guanzhu(obj){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                if($(obj).html() != '已互关注'){
                    $.post('/user/user/guanzhu',{uid:$(obj).attr('id')},function(data){

                        if(data){
                            layer.msg('您已经关注成功');
                            $('#'+data+'').html('已互关注');
                            $('#'+data+'').removeAttr('onclick');
                        }
                    });
                }else{
                    layer.msg('您已经关注成功');
                }



        }

    </script>
    <script type="text/javascript">

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
    </script>

@endsection('content')