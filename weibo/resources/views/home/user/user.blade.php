@extends('Home.public')
@section('title','用户中心')
@section('content')
    <script type="text/javascript" src="/homes/js/jquery.min.js"></script>
    <script src="/homes/js/jquery.transform-0.9.1.min.js"></script>
    <script src="/homes/js/cufon-yui.js" type="text/javascript"></script>
    <script src="/homes/js/ChunkFive_400.font.js" type="text/javascript"></script>
    <script type="text/javascript">
        Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
        Cufon.replace('.description',{ textShadow: '1px 1px #fff'});
        Cufon.replace('a',{ textShadow: '1px 1px #fff', hover : true});
    </script>
    <!-- head end -->
    <div style="height:30px;width:50px;"></div>
    <div class="cen_top">
        <div class="con_toppic"><img src="/Homes/images/tou.png"></div>
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
        <div class="content">
            <div class="cont_left">
                <div class="cont_left_one">
                    <ul>
                        <li>
                            <a href="#">12345</a>
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
                    <div><a >详情请看个人中心</a></div>
                </div>
                <div class="cont_left_three">
                    <span style="border-bottom: 1px solid #F2F2F5;">相册</span>
                    <div><img src="/Homes/images/tou.png"><img src="/Homes/images/tou.png"></div>
                    <span style="border-top: 1px solid #F2F2F5;"><a href="#">查看个人相册</a></span>
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
                <div class="wei_sou">
                    <div class="wei_souall"><a href="#">全部</a></div>
                    <div class="wei_souinp">
                        <form>
                            <input type="text">
                            <input id="sou" type="submit" value="搜索">
                        </form>
                    </div>
                </div>
                <!-- 微博内容 -->
                @foreach ($res->weibo as $k => $v)
                    <div class="weibo">
                        <a href="#" class="xiangxia"></a>
                        <div class="xiangxia_show">
                            <ul>
                                <li><a href="#">删除</a></li>
                                <li><a href="#">置顶</a></li>
                                <li><a href="#">加标签</a></li>
                            </ul>
                        </div>
                        <div class="weibo_d1">
                            <img src="/Homes/images/tou.png">
                        </div>
                        <div class="weibo_d2">
                            <a href="#" class="wei_name">用户名</a>
                            <div class="wei_time"><a href="#">47分钟前</a> 来自 微博 weibo.com</div>
                            <div class="wei_cont">
                                <p>【新年第一乌龙！万人同迎新年，倒计时结束时钟秒回2017[允悲]】2017年12月31日，杭州某商场大屏在跨年时，倒计时出现失误，现场群众新年欢呼还没喊出口，本应跳至00:00的时钟又跳回了23:58，场面一度十分尴尬！[doge]大屏负责人：是机器出现了问题，在场的有好几万人。</p>
                                <ul class="wei_ul">
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                    <li><img src="/Homes/images/img1.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <p style="clear:both"></p>
                        <div class="wei_bottom">
                            <ul>
                                <li><a href="javascript:void(0)">收藏</a><span>12345</span></li>
                                <li><a href="javascript:void(0)">转发</a><span>12345</span></li>
                                <li><a href="javascript:void(0)" class="pinglun">评论</a><span>12345</span></li>
                                <li><a href="javascript:void(0)">赞</a><span>12345</span></li>
                            </ul>
                        </div>
                        <!-- 回复内容 -->
                        <div class="wei_replay">
                            <div class="wei_ping">
                                <a href="#"><img width="30" height="30" src="/Homes/images/tou.png"></a>
                                <form>
                                    <input type="text" class="wei_pingcon">
                                    <input type="submit" value="评论" class="wei_pinglun">
                                </form>
                            </div>
                            <div class="WB_ping">

                                <div class="WB_ping_one">
                                    <a href="#"><img width="30" height="30" src="/Homes/images/tou.png"></a>
                                    <ul class="WB_ping_oneul">
                                        <li><a href="#">永不放弃的温斯顿</a>：伊朗的封闭桎梏政教合一政权，必须结束了！</li>
                                        <li>
                                            <span>今天 11:11</span>
                                            <span class="WB_ping_onespan">
										<a href="#">举报</a>
										<a href="#">屏蔽</a>
										<a href="#">回复</a>
										<i>11</i>
									</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="WB_ping_one">
                                    <a href="#"><img width="30" height="30" src="/Homes/images/tou.png"></a>
                                    <ul class="WB_ping_oneul">
                                        <li><a href="#">永不放弃的温斯顿</a>：伊朗的封闭桎梏政教合一政权，必须结束了！</li>
                                        <li>
                                            <span>今天 11:11</span>
                                            <span class="WB_ping_onespan">
										<a href="#">举报</a>
										<a href="#">屏蔽</a>
										<a href="#">回复</a>
										<i>11</i>
									</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="WB_ping_two">
                                    <form>
                                        <input type="text" class="wei_hui">
                                        <input type="submit" value="评论" class="wei_huifu">
                                    </form>
                                </div>
                                <div class="WB_ping_three">
                                    <ul class="WB_ping_three_ul">
                                        <li><a href="#">永不放弃的温斯顿</a>:真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸.</li>
                                        <li>
                                            <span>今天 11:11</span>
                                            <span class="WB_ping_onespan">
										<a href="#">举报</a>
										<a href="#">屏蔽</a>
										<a href="#">回复</a>
										<i>11</i>
									</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="WB_ping_three">
                                    <ul class="WB_ping_three_ul">
                                        <li><a href="#">永不放弃的温斯顿</a>:真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸.</li>
                                        <li>
                                            <span>今天 11:11</span>
                                            <span class="WB_ping_onespan">
										<a href="#">举报</a>
										<a href="#">屏蔽</a>
										<a href="#">回复</a>
										<i>11</i>
									</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="WB_ping_three">
                                    <ul class="WB_ping_three_ul">
                                        <li><a href="#">永不放弃的温斯顿</a>:真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了。</li>
                                        <li>
                                            <span>今天 11:11</span>
                                            <span class="WB_ping_onespan">
										<a href="#">举报</a>
										<a href="#">屏蔽</a>
										<a href="#">回复</a>
										<i>11</i>
									</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="weibo_gengduo">
                            <a href="#">查看更多 > </a>
                        </div>
                    </div>
                @endforeach
                {{--<!-- 微博内容结束 -->--}}
            </div>
            <div class="cont_right">
                <ul>
                    <li><a href="#">类型一</a></li>
                    <li><a href="#">类型一</a></li>
                    <li><a href="#">类型一</a></li>
                    <li><a href="#">类型一</a></li>
                </ul>
            </div>
        </div>

        <!-- 相册开始 -->
        <div style="clear: both;"></div>
        <div class="xiangce" style="display:none;">
            <div class="xiangce_d1">
                <b>相片墙</b>
                <a href="上传照片">上传图片</a>
            </div>
            <div id="im_wrapper" class="im_wrapper">
                <div style="background-position:0px 0px;"><img src="/homes/touxiang/15518061306/thumbs/1.jpg" alt="" /></div>
                <div style="background-position:-125px 0px;"><img src="/homes/touxiang/15518061306/thumbs/2.jpg" alt="" /></div>
                <div style="background-position:-250px 0px;"><img src="/homes/touxiang/15518061306/thumbs/3.jpg" alt="" /></div>
                <div style="background-position:-375px 0px;"><img src="/homes/touxiang/15518061306/thumbs/4.jpg" alt="" /></div>
                <div style="background-position:-500px 0px;"><img src="/homes/touxiang/15518061306/thumbs/5.jpg" alt="" /></div>
                <div style="background-position:-625px 0px;"><img src="/homes/touxiang/15518061306/thumbs/6.jpg" alt="" /></div>

                <div style="background-position:0px -125px;"><img src="/homes/touxiang/15518061306/thumbs/7.jpg" alt="" /></div>
                <div style="background-position:-125px -125px;"><img src="/homes/touxiang/15518061306/thumbs/8.jpg" alt="" /></div>
                <div style="background-position:-250px -125px;"><img src="/homes/touxiang/15518061306/thumbs/9.jpg" alt="" /></div>
                <div style="background-position:-375px -125px;"><img src="/homes/touxiang/15518061306/thumbs/10.jpg" alt="" /></div>
                <div style="background-position:-500px -125px;"><img src="/homes/touxiang/15518061306/thumbs/11.jpg" alt="" /></div>
                <div style="background-position:-625px -125px;"><img src="/homes/touxiang/15518061306/thumbs/12.jpg" alt="" /></div>

                <div style="background-position:0px -250px;"><img src="/homes/touxiang/15518061306/thumbs/13.jpg" alt="" /></div>
                <div style="background-position:-125px -250px;"><img src="/homes/touxiang/15518061306/thumbs/14.jpg" alt="" /></div>
                <div style="background-position:-250px -250px;"><img src="/homes/touxiang/15518061306/thumbs/15.jpg" alt="" /></div>
                <div style="background-position:-375px -250px;"><img src="/homes/touxiang/15518061306/thumbs/16.jpg" alt="" /></div>
                <div style="background-position:-500px -250px;"><img src="/homes/touxiang/15518061306/thumbs/17.jpg" alt="" /></div>
                <div style="background-position:-625px -250px;"><img src="/homes/touxiang/15518061306/thumbs/18.jpg" alt="" /></div>

                <div style="background-position:0px -375px;"><img src="/homes/touxiang/15518061306/thumbs/19.jpg" alt="" /></div>
                <div style="background-position:-125px -375px;"><img src="/homes/touxiang/15518061306/thumbs/20.jpg" alt="" /></div>
                <div style="background-position:-250px -375px;"><img src="/homes/touxiang/15518061306/thumbs/21.jpg" alt="" /></div>
                <div style="background-position:-375px -375px;"><img src="/homes/touxiang/15518061306/thumbs/22.jpg" alt="" /></div>
                <div style="background-position:-500px -375px;"><img src="/homes/touxiang/15518061306/thumbs/23.jpg" alt="" /></div>
                <div style="background-position:-625px -375px;"><img src="/homes/touxiang/15518061306/thumbs/24.jpg" alt="" /></div>
            </div>
            <div id="im_loading" class="im_loading"></div>
            <div id="im_next" class="im_next"></div>
            <div id="im_prev" class="im_prev"></div>

            <div class="xiangce_page">分页</div>
            <script type="text/javascript" src="/homes/js/xiangce.js"></script>
        </div>
        <!-- 相册结束 -->

        <!-- 个人中心 -->
        <div class="zhu_center" style="display:none;">
            <div class="xinxi_one"><span>基本信息</span><button type="button" id="bianji" >编辑</button>
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
                        <td><i></i>{{$res->detail->adress}}</td>
                    </tr>
                    <tr>
                        <td><span>性  别</span></td>
                        <td><i></i>{{$res->detail->sex}}</td>
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
                        <td><span>博客地址</span></td>
                        <td><i></i>{{$res->detail->adress or '马上填写 自己的博客地址,让自己的心声被更多的人了解'}}</td>
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
                        <td><span>{{$res->detail->registertime}}</span></td>
                    </tr>
                </table>
            </div>
            <div class="xinxi_one"><span>联系信息</span></div>
            <div class="xinxi_two">
                <table>
                    <tr>
                        <td><span>邮箱</span></td>
                        <td><i></i>71***85@qq.com</td>
                    </tr>
                    <tr>
                        <td><span>QQ</span></td>
                        <td><i></i>71***85@qq.com</td>
                    </tr>
                    <tr>
                        <td><span>MSN</span></td>
                        <td><i></i>71***85@qq.com</td>
                    </tr>
                </table>
            </div>
            <div class="xinxi_one"><span>职业信息</span></div>
            <div class="xinxi_two">
                <table>
                    <tr>
                        <td><span>职业信息</span></td>
                        <td><i></i>71***85@qq.com</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="zhu_center bianji" style="display:none;">
            <div class="xinxi_one"><span>基本信息</span><button type="button" id="bianji" >编辑</button>
            </div>
            <div class="xinxi_two">
                <table>
                    <tr>
                        <td><span>登录名</span></td>
                        <td><i></i>71***85@qq.com</td>
                    </tr>
                    <tr>
                        <td><span>昵  称</span></td>
                        <td><input type="text" name=""/></td>
                    </tr>
                    <tr>
                        <td><span>真实姓名</span></td>
                        <td><input type="text" name=""/></td>
                    </tr>
                    <tr>
                        <td><span>所在地</span></td>
                        <td>
                            <select id="province">

                                <option>----请选择省份----</option>

                                <option>北京</option>

                                <option>上海</option>

                                <option>江苏</option>

                                <option>河南</option>


                                <option>日本</option>

                            </select>

                            <select class="city">

                                <option>----请选择城市----</option>

                            </select>

                            <select class="city">

                                <option>东城</option>

                                <option>西城</option>

                                <option>崇文</option>

                                <option>宣武</option>

                                <option>朝阳</option>

                            </select>

                            <select class="city">

                                <option>黄浦</option>

                                <option>卢湾</option>

                                <option>徐汇</option>

                                <option>长宁</option>

                                <option>静安</option>

                            </select>

                            <select class="city">

                                <option>南京</option>

                                <option>镇江</option>

                                <option>苏州</option>

                                <option>南通</option>

                                <option>扬州</option>

                            </select>

                            <select class="city">

                                <option>郑州</option>

                                <option>周口</option>

                                <option>洛阳</option>

                                <option>南阳</option>

                                <option>安阳</option>

                            </select>

                            <select class="city">

                                <option>大阪</option>

                                <option>秋叶原</option>

                                <option>东京</option>


                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td><span>性  别</span></td>
                        <td><input type="radio" name=""/>男
                            <input type="radio" name=""/>女
                        </td>
                    </tr>
                    <tr>
                        <td><span>性取向</span></td>
                        <td><input type="checkbox" name=""/>男
                            <input type="checkbox" name=""/>女
                            <input type="checkbox" name=""/>双性  	此处可选多项
                        </td>

                    </tr>
                    <tr>
                        <td><span>感情状况</span></td>
                        <td><select name="" id="">
                                <option value="" selected>请选择</option>
                                <option value="">单身狗</option>
                                <option value="">暗恋中</option>
                                <option value="">暧昧中</option>
                                <option value="">恋爱中</option>
                                <option value="">已婚</option>
                                <option value="">订婚</option>
                                <option value="">分居</option>
                                <option value="">离异</option>
                                <option value="">丧偶</option>


                            </select></td>
                    </tr>
                    <tr>
                        <td><span>生日</span></td>
                        <td>
                            <div class="birthday">
                                <select name="year" id="year" onchange="getDays()"></select>
                                <select name="month" id="month" onchange="getDays()"></select>
                                <select name="day" id="day"></select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span>血型</span></td>
                        <td>
                            <select name="" id="">
                                <option value="">AB</option>
                                <option value="">A</option>
                                <option value="">O</option>
                                <option value="">B</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>博客地址</span></td>
                        <td><input type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td><span>个性域名</span></td>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr>
                        <td><span>简介</span></td>
                        <td><textarea name="" id="" cols="20" rows="2"></textarea></td>
                    </tr>
                    <tr>
                        <td><span>注册时间</span></td>
                        <td><span>2013-11-06</span></td>
                    </tr>
                </table>
            </div>
            <div class="xinxi_one"><span>联系信息</span></div>
            <div class="xinxi_two">
                <table>
                    <tr>
                        <td><span>邮箱</span></td>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr>
                        <td><span>QQ</span></td>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr>
                        <td><span>MSN</span></td>
                        <td><input type="text" name=""></td>
                    </tr>
                </table>
            </div>/
            <div class="xinxi_one"><span>职业信息</span></div>
            <div class="xinxi_two">
                <table>
                    <tr>
                        <td><span>职业信息</span></td>
                        <td><input type="text" name=""></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 个人中心 -->
    </div>
    <script type="text/javascript">

        $('.xiangxia').click(function(){
            $(this).siblings().show();
            return false;

        })
        $('body').click(function(){
            $('.xiangxia_show').hide();
        })

        $('.cen_m').children().eq(0).click(function(){
            $('.content').show();
            $('.xiangce').hide();
            $('.zhu_center').hide();
            $('.weibo').show();
        });

        $('.cen_m').children().eq(1).click(function(){
            $('.content').hide();
            $('.xiangce').show();
            $('.zhu_center').hide();
            $('.weibo').hide();


        });

        $('.cen_m').children().eq(2).click(function(){
            $('.content').hide();
            $('.xiangce').hide();
            $('.zhu_center').show();
            $('.bianji').hide();
        });

        $('#bianji').click(function(){
            $('.zhu_center').hide();
            $('.bianji').show();

        });

        var currentShowCity=0;
        $(document).ready(function(){
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

        function getSelectValue(){
            alert("1级="+$("#province").val());
            $(".city").each(function(i,o){
                if(i == currentShowCity){
                    alert("2级="+$(".city").eq(i).val());
                }
            });

        }

        $(document).ready(function(){
            var date=new Date();//创建日期对象
            var year=date.getFullYear();//获取当前年份
            for(var i=year-100;i<=year;i++){//在id为year的selector附加option选项
                $("#year").append("<option value=\""+i+"\">"+i+"</option>");//append函数附加html到元素结尾处
            }
            for(var i=1;i<=12;i++){
                $("#month").append("<option value=\""+i+"\">"+i+"</option>");//为Id为month的selector附加option选项
            }
            getDays($("#month").val(),$("#year").val());//执行函数getDays()，传参year和month，初始化day selector
        });
        function getDaysInMonth(month,year){//年月对应的日数算法
            var days;
            if (month==1 || month==3 || month==5 || month==7 || month==8 || month==10 || month==12) {
                days=31;//固定31
            }else if (month==4 || month==6 || month==9 || month==11){
                days=30;//固定30
            }else{
                if ((year%4 == 0 && year%100 != 0) || (year%400 == 0)) {     //排除百年，每四年一闰；每四百年一闰；
                    days=29; //闰年29
                }else {
                    days=28; //平年28
                }
            }
            return days;//返回该年月的日数
        }
        function getDays(){
            var year = $("#year").val();//year selector onchange="getDays()"动态获取用户选择的year值
            var month = $("#month").val();//month selector onchange="getDays()"动态获取用户选择的month值
            var days = getDaysInMonth(month,year);//调用算法函数计算对应年月的日数
            $("#day").empty();//调用empty()函数清空day selector options，然后再append函数往day selector添加options
            for(var i=1;i<=days;i++){
                $("#day").append("<option value=\""+i+"\">"+i+"</option>");
            }
        }




    </script>
@endsection('content')


