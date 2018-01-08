@extends('Home.public')
@section('title','未登录首页')
@section('content')


	@section('nav')
	<div class="top">
		<div class="top_div">
			<div class="WB_logo"><img height="35" src="/Homes/images/logo.png"></div>
			<div class="WB_center" style="margin-right:130px;float:right;">
				<ul>
					<li><a class="WE_cen5" href="#">&nbsp;&nbsp;登录</a></li>
					<li><a class="WE_cen6" href="#">&nbsp;&nbsp;注册</a></li>
				</ul>
			</div>
		</div>
	</div>
	@show
	<!-- 主体 -->
	<div style="width:10px;height:60px;clear:both;"></div>
	<div class="content">
		
		<div class="con_left" style="margin-top:10px;">
			<a href="/user/login">首页</a>
			<a href="#">登录</a>
			<a href="#">注册</a>
			<b></b>
			<a href="#">默认</a>
			<a href="#">原创</a>
			<a href="#">幽默</a>
			<a href="#">萌宠</a>
		</div>

		<div class="con_center">
			@foreach($data as $k=>$val)
			<!-- 微博内容 -->
			<div class="weibo">
				<a href="#" class="xiangxia"></a>
				<div class="xiangxia_show">
					<ul>
						<li><a href="#">信息</a></li>
						<li><a href="#">信息</a></li>
						<li><a href="#">信息</a></li>
					</ul>
				</div>

				<div class="weibo_d1">
					<img src="./Homes/images/tou.png">
				</div>
				<div class="weibo_d2">
					<a href="#" class="wei_name">用户名</a>
					<div class="wei_time"><a href="#">47分钟前</a> 来自 微博 weibo.com</div>
					<div class="wei_cont">
						<p>【新年第一乌龙！万人同迎新年，倒计时结束时钟秒回2017[允悲]】2017年12月31日，杭州某商场大屏在跨年时，倒计时出现失误，现场群众新年欢呼还没喊出口，本应跳至00:00的时钟又跳回了23:58，场面一度十分尴尬！[doge]大屏负责人：是机器出现了问题，在场的有好几万人。</p>
						<ul class="wei_ul">
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
							<li><img src="./Homes/images/img1.jpg"></li>
						</ul>
					</div>
				</div>
				<p style="clear:both"></p>
				<div class="wei_bottom">
					<ul>
						<li><a href="#">收藏</a><span>12345</span></li>
						<li><a href="#">转发</a><span>12345</span></li>
						<li><a href="#">评论</a><span>12345</span></li>
						<li><a href="#">赞</a><span>12345</span></li>
					</ul>
				</div>
				<!-- 回复内容 -->
				<div class="wei_replay">
					<div class="wei_ping">
						<a href="#"><img width="30" height="30" src="./Homes/images/tou.png"></a>
						<form>
							<input type="text" class="wei_pingcon">
							<input type="submit" value="评论" class="wei_pinglun">
						</form>
					</div>
					<div class="WB_ping">

						<div class="WB_ping_one">
							<a href="#"><img width="30" height="30" src="./Homes/images/tou.png"></a>
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
							<a href="#"><img width="30" height="30" src="./Homes/images/tou.png"></a>
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
			<!-- 微博内容结束 -->
			@endforeach

		</div>


		<div class="con_right">
			
			<!-- 热门微博 -->
			<div class="conR_two">
				<div class="conR_hot">
					<a class="hot" href="#">热门微博</a>
					<a class="huan" href="#">&nbsp;换一批</a>
				</div>
				<ul>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
					<li><a href="#">湖南卫视跨年</a><span>12.2万</span></li>
				</ul>
				<div class="conR_more"><a href="#">查看更多 ></a></div>
			</div>
			<!-- 好友关注动态 -->
			<div class="conR_three">
				<div class="friends">好友关注状态</div>
				<ul class="friends_ul">
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="#">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="#">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="#">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="#">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="#">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="#">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
				</ul>
				<div class="conR_more"><a href="#">查看更多 ></a></div>
			</div>
		</div>
	</div>

@endsection
