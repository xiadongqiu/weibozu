@extends('home.public')
@section('title','用户中心')
@section('content')
    <div style="height:30px;width:50px;"></div>
    <div class="cen_top">
        <div class="con_toppic">

            <div class="ibox-content">
                <div class="row">
                    <div id="crop-avatar" class="col-md-6">
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
                            <a href="#">12345</a>
                            <span>粉丝</span>
                        </li>
                        <li>
                            <a href="#">12345</a>
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
                <ul id="guan">
                    <li>
                        <div class="member_wrap clearfix">
                            <div class="mod">
                                <p class="pic_box" style='margin-top: 29px;'>
                                    <a action-type="ignore_list" target="_blank" href="#" class="">
                                        <img src="http://p2l4kajri.bkt.clouddn.com/{{$res->detail->portrait}}" title="一情感语录" style="border-radius: 50%;" width="50" height="50" alt="一情感语录" class="W_face_radius">
                                    </a>
                                </p>
                            </div>

                            <div class="mod_info" style="margin-left: 82px;font-size: 14px;line-height:35px;">
                                <div>
                                <a target="_blank"  href="#" class="S_txt1" title="一情感语录" >一情感语录
                                </a>
                                </div>

                            <div class="statu">
                                <em class="W_ficon ficon_right S_ficon" style="margin-right: 2px;padding: 5px;">√</em><span class="S_txt1" style="font-size: 12px">已关注</span>
                            </div>
                            <div class="text1" style="margin-bottom:4px;font-size: 12px;">
                                他还没有填写个人简介
                            </div>


                            </div>
                        </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>



            </div>
        </div>
        </div>
    </div>

    <script type="text/javascript">
        $('a').css({textDecoration:'none'});
        $('#guan').children().css({float:'left',
        width: '290px',
        height: '140px',
        margin: '6px 0 0 6px',
        borderRadius: '2px',
        backgroundColor:'#f2f2f5'

        });
        $('.member_wrap').css({ width: '274px',
        height: '108px',
        padding: '16px 0 16px 16px',
        });
        $('.mod').css({ float:'left',
        position: 'relative',
        width: '66px',
        height: '108px',
        borderRightWidth: '1px',
        borderRightStyle: 'solid',
        borderColor: '#d9d9d9'
        })

    </script>
@endsection('content')