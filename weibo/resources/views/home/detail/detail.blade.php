@extends('Home.public')
@section('title','详情')
@section('content')
	
	<!-- 主体 -->
	<div style="height:100px;width:10px;"></div>
	<div class="det_cont">
		<div class="det_cont_left">
			<!-- 微博内容 -->
		<!-- 	@foreach($data as $k=>$val)
		
		@endforeach -->
			<!-- 微博内容结束 -->

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
						<li><a id="Ping" >评论</a><span>12345</span></li>
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
						<div class="huifu">
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
						<div class="huifu">
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
				</div>
				<div class="weibo_gengduo">
					<a href="#">查看更多 > </a>
				</div>
			</div>
			<!-- 微博内容结束 -->
		</div>
		<div class="det_cont_right">

			<div class="det_cont_Rdiv" style="height:200px;">
				<span style="border-bottom: 1px solid #F2F2F5;">相关推荐</span>
				<div id="wei_zan">
					<img src="./Homes/images/tou.png">
					<div>
						<p><a href="#">用户名</a></p>
						<p>微博内容微博内容微博内容微博内容微博内容微博内容微博内容微内容</p>
					</div>
				</div>
				<div class="clear"></div>
				<div id="wei_zan">
					<img src="./Homes/images/tou.png">
					<div>
						<p><a href="#">用户名</a></p>
						<p>微博内容微博内容微博内容微博内容微博内容微博内容微博内容微内容</p>
					</div>
				</div>
				<div class="clear"></div>
				<div id="wei_zan">
					<img src="./Homes/images/tou.png">
					<div>
						<p><a href="#">用户名</a></p>
						<p>微博内容微博内容微博内容微博内容微博内容微博内容微博内容微内容</p>
					</div>
				</div>
				<div class="clear"></div>
				<div id="wei_zan">
					<img src="./Homes/images/tou.png">
					<div>
						<p><a href="#">用户名</a></p>
						<p>微博内容微博内容微博内容微博内容微博内容微博内容微博内容微内容</p>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- 主体 -->
<script type="text/javascript">
$(function(){
	$("#Ping").toggle(function(){
		$('.wei_replay').slideDown();
		$('.weibo_gengduo').show();
	},function(){
		$('.wei_replay').slideUp();
		$('.weibo_gengduo').hide();
	})
})


</script>
@endsection('content')