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
            <li>我的主页</li>
            <li>我的相册</li>
            <li>个人中心</li>
        </ul>
    </div>
    <script type="text/javascript">
        $('.cen_m').children().eq(0).click(function () {
            alert(1);
            location.href = '/user/user/index'
        })

        $('.cen_m').children().eq(1).click(function () {
            location.href = '/user/user/index?status=2/'
        });

        $('.cen_m').children().eq(2).click(function () {
            location.href = '/user/user/index?status=1'
        })

    </script>
    <div style="clear: both;"></div>
    <div class="zhu_cont">
        <div class="content"  style="display:{{$status['status'] == null?'block':'none'}}" >
            <div class="cont_left">
                <div class="cont_left_one">
                    <ul>
                        <li>
                            <a href="/user/user/attent">12345</a>
                            <span>关注</span>
                        </li>
                        <li>
                            <a href="/user/user/fensi">12345</a>
                            <span>粉丝</span>
                        </li>
                        <li>
                            <a href="/user/user/index">12345</a>
                            <span>微博</span>
                        </li>
                    </ul>
                </div>
                <div class="cont_left_two">
                    <ul>
                        <li><a href="#">申请认证</a></li>
                        <li>已经成功认证&nbsp;&nbsp;<img src="/Homes/images/huiyuan.png"></li>
                    </ul>
                    <div><a onclick="zhongxin()" style="cursor:pointer">详情请看个人中心</a></div>
                </div>
                <div class="cont_left_three">
                    <span style="border-bottom: 1px solid #F2F2F5;">相册</span>
                    @if($res->detail->pics !== '0')
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
                        <form>
                            <input type="text" style="width:200px;height:25px">
                            <input id="sou" type="submit" value="搜索">
                        </form>
                    </div>
                </div>

            </div>
            <div class="weibo" style="left:20px">
                <div class="wb_tab_a" style="">
                    <ul class="tab_ul clearfix">
                        <li class="tab_li" style="float: left;">
                            <a class="tab_item" bpfilter="page" href="#">
                                <span class="W_f14 S_txt1" style="">粉丝 625</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="follow_box">
                    <div class="follow_inner">
                        <ul class="follow_list">

                            <dl style="position: relative; border-bottom: 1px solid;border-color:rgb(242, 242, 245)">
                                <dt class="mod_pic" style="float:left;position:relative">
                                    <a target="_blank" title="微博钱包" href="#">
                                        <img  width="50" height="50" alt="微博钱包" src="http://p2l4kajri.bkt.clouddn.com/{{$res->detail->portrait}}" style="border-radius: 50%;width: 50px;height: 50px;">
                                    </a>
                                </dt>
                                <dd class="mod_info S_line1" style="position:relative">
                                    <div class="info_name W_fb W_f14" style="font-size: 14px;font-weight: 700">
                                        <a class="S_txt1" target="_blank"  href="#">微博钱包</a>
                                    </div>
                                    <div class="info_connect">
                                        <span class="conn_type">关注
                                            <em class="count">
                                                <a target="_blank" href="#">132</a>
                                            </em>
                                        </span>
                                        <span class="conn_type W_vline S_line1">粉丝<em class="count">
                                                <a target="_blank" href="#">22441818
                                                </a></em>
                                        </span>
                                        <span class="conn_type W_vline S_line1">微博<em class="count"><a target="_blank" href="#">816</a>
                                            </em>
                                        </span>

                                    </div>
                                    <div class="info_add" style="line-height: 30px">
                                        <em class="tit S_txt2">地址</em> <span> 上海</span>
                                    </div>
                                    <div class="info_intro" style="line-height: 30px">简介 <span> 微博钱包官方微博</span></div>
                                    <div class="info_from" style="line-height: 30px">
                                        通过<a href="#" class="from">微博推荐</a>关注
                                    </div>
                                </dd>
                                <dd class="opt_box" node-type="opt_box" style="position: absolute">
			                        <span>
									<a href="javascript:;" class="W_btn_b" >
					                    <em class="W_ficon ficon_add S_ficon">+</em>关注</a>
								    </span>
                                    <a href="javascript:;" class="W_btn_b" >举报
                                        <em class="W_ficon ficon_arrow_down_lite S_ficon" >g</em></a>
                                </dd>
                            </dl>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('a').css({textDecoration: 'none'});
        $('.clear').css({
            clear:'both'
        });
        $('.wb_tab_a').css({
            height: '38px',
            borderBottomWidth: '1px',
            borderBottomStyle: 'solid',
            padding: '0 6px',
            borderColor: '#f2f2f5'
        })

        $('.tab_item').css({
            position: 'relative',
            display: 'inline-block',
            margin: '0 10px',
            padding: '7px 0',
            height: '23px',
            lineHeight: '23px',
            marginBottom: '-1px'
        })
        $('.follow_box .follow_inner').css({
            padding: '15px 16px 16px',
            overflow: 'hidden',
            marginTop: '10px',

        });
        $('.follow_box .follow_item').css({
            position: 'relative',
            marginTop: '-1px',
            padding: '16px 0',
            borderTop: 'none'
        });
        $('.follow_box .mod_info').css({
            marginLeft: '65px',
            verticalAlign: 'top',
            zoom: '1',
            borderColor: '#d9d9d9'

        });
        $(" .follow_box .info_connect .conn_type").css({
            padding: '0 10px 0 0'
        });
        $(' .follow_box .info_connect').css({
            marginTop: '8px'
        });
        $('.follow_box .info_connect .W_vline').css({
            display: 'inline',
            width: 'auto',
            padding: '0 10px'
        });
        $('.W_vline').css({
            borderLeftWidth: '1px',
            borderLeftStyle: 'solid',
            width: '0',
            overflow: 'hidden'
        });
        $('.follow_box .opt_box').css({
            position: 'absolute',
            top: '0px',
            right: '0px',
            fontSize: '0'
        })
        $('.W_btn_b').css({
            borderWidth: '1px',
            borderStyle: 'solid',
            boxShadow: '0px 1px 2px rgba(0,0,0,0.1)'
        });
        $(".W_btn_a, .W_btn_b, .W_btn_c, .W_btn_d").css({
            padding: '0 10px 0 10px',
            whiteSpace: 'nowrap',
            display: 'inline-block',
            borderRadius: '2px',
            height: '24px',
            lineHeight: '25px',
            textDecoration: 'none',
            fontSize: '12px',
            minWidth: '40px',
            textAlign: 'center',
            outline: 'none'

        });
        $(" .follow_box .opt_box .W_btn_b").css({
            marginLeft: '6px'
        });


    </script>
@endsection('content')