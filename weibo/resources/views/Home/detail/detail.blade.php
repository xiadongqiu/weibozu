@extends('home.public')
@section('title','详情')
@section('bootstrap',' ')
@section('content')
	
	<!-- 主体 -->
	<div style="height:100px;width:10px;"></div>
	<div class="det_cont">
		<div class="det_cont_left">
			<div class="weibo">
				<a href="javascript:;" class="xiangxia"></a>
				<div class="xiangxia_show">
					<ul>
						<li><a href="javascript:;">信息</a></li>
						<li><a href="javascript:;">信息</a></li>
						<li><a href="javascript:;">信息</a></li>
					</ul>
				</div>

				<div class="weibo_d1">
					@if($res->portrait =='default.jpg')
					<img src="/homes/images/tou.png">
					@else
					<img src="http://p2l4kajri.bkt.clouddn.com/{{$res->portrait}}">
					@endif
					
				</div>
				<div class="weibo_d2">
					<a href="javascript:;" class="wei_name">{{$res->nickname}}</a>
					<div class="wei_time"><a href="javascript:;">47分钟前</a> 来自 微博 weibo.com</div>
					<div class="wei_cont">
						<p>{{$res->content}}</p>
						<ul class="wei_ul">
							@if($pictrue)
								@foreach($pictrue as $val)
								<li><img src="http://p2l4kajri.bkt.clouddn.com/{{$val}}"></li>
								@endforeach
							@endif

						</ul>
					</div>
				</div>
				<p style="clear:both"></p>
				<div class="wei_bottom">
					<ul>
						<li><a href="javascript:;">收藏</a><span>{{$res->nickname}}</span></li>
						<li><a href="javascript:;">转发</a><span>{{$res->transpond}}</span></li>
						<li onclick="Ping(this)" class="Ping">
							<input type="hidden" value="{{$res->id}}">
							<a href="javascript:;">评论</a><span>{{$res->comment}}</span>
						</li>
						<li><a href="javascript:;">赞</a><span>{{$res->like}}</span></li>
					</ul>
				</div>
				<!-- 回复内容 -->
				<div class="wei_replay">
				</div>
				<div class="weibo_gengduo">
					<a href="javascript:;">查看更多 > </a>
				</div>
			</div>
			<!-- 微博内容结束 -->
		</div>
		<div class="det_cont_right">

			<div class="det_cont_Rdiv" style="height:200px;">
				<span style="border-bottom: 1px solid #F2F2F5;">相关推荐</span>
				@if(count($data) == '0')
					<div id="wei_zan">
						<div>
							<p>暂无内容</p>
						</div>
					</div>
					<div class="clear"></div>
				@else
					@foreach($data as $k => $v)
					<div id="wei_zan">
						<img src="/homes/images/tou.png">
						<div>
							<p><a href="javascript:;">{{$v->nickname}}</a></p>
							<p>{{$v->content}}</p>
						</div>
					</div>
					<div class="clear"></div>
					@endforeach
				@endif
					
			</div>

		</div>
	</div>
	<!-- 主体 -->

<script type="text/javascript">


</script>


<script type="text/javascript">
$(function(){

	$('.det_cont_right').css('width','310px');
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