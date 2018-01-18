@extends('home.public')
@section('title','未登录首页')
@section('content')


	@section('nav')
	<div class="top">
		<div class="top_div">
			<div class="WB_logo"><img height="35" src="/Homes/images/logo.png"></div>
			<div class="WB_center" style="margin-right:130px;float:right;">
				<ul>
					<li><a class="WE_cen5" href="javascript:;">&nbsp;&nbsp;登录</a></li>
					<li><a class="WE_cen6" href="javascript:;">&nbsp;&nbsp;注册</a></li>
				</ul>
			</div>
		</div>
	</div>
	@show
	<!-- 主体 -->
	<div style="width:10px;height:60px;clear:both;"></div>
	<div class="content">
		
		<div class="con_left" style="margin-top:10px;">
			<a href="javascript:;">首页</a>
			<a href="javascript:;">登录</a>
			<a href="javascript:;">注册</a>
			<b></b>
			<a href="javascript:;">默认</a>
			<a href="javascript:;">原创</a>
			<a href="javascript:;">幽默</a>
			<a href="javascript:;">萌宠</a>
		</div>

		<div class="con_center">
			@foreach($data as $k=>$val)
			<!-- 微博内容 -->
			<div class="weibo">
				<a href="javascript:;" class="xiangxia"></a>
				<div class="xiangxia_show">
					<ul>
						<li><a href="javascript:;">屏蔽</a></li>
						<li><a href="javascript:;">举报</a></li>
					</ul>
				</div>

				<div class="weibo_d1">
					<img src="./Homes/images/tou.png">
				</div>
				<div class="weibo_d2">
					<a href="javascript:;" class="wei_name">{{$val->detail->nickname}}</a>
					<div class="wei_time"><a href="javascript:;">
					@if( time()-($val->publish_time)<3600)
						{{date("i",$val->publish_time) }}分钟前
					@elseif(time()-($val->publish_time)<86400)
						{{ date("H",$val->publish_time) }}小时前
					@else
						{{ date("Y-m-d",$val->publish_time) }}
					@endif
					</a> 来自 微博 weibo.com</div>
					<div class="wei_cont">
						<p>{{ $val->content}} </p>
						<ul class="wei_ul">
							<!-- <li><img src="./Homes/images/img1.jpg"></li> -->
						</ul>
					</div>
				</div>
				<p style="clear:both"></p>
				<div class="wei_bottom">
					<ul>
						<li>
							<a href="javascript:;">收藏</a>
							<span >{{ ($val->collect) > 99999 ? round($val->collect/10000).'万' :  $val->collect}}</span>
						</li>
						<li>
							<a href="javascript:;">转发</a>
							<span>{{ ($val->transpond) > 99999 ? round($val->transpond/10000).'万' :  $val->transpond}}</span>
						</li>
						<li class="Ping">
							<input type="hidden" value="{{$val->id}}">
							<a href="javascript:;">评论</a>
							<span>{{ ($val->comment) > 99999 ? round($val->comment/10000).'万' :  $val->comment}}</span>
						</li>
						<li>
							<a href="javascript:;">赞</a>
							<span>{{ ($val->like) > 99999 ? round($val->like/10000).'万' :  $val->like}}</span>
						</li>
					</ul>

				</div>
				<!-- 回复内容 -->
		   <!-- <div class="wei_replay">
					<div class="wei_ping">
						<a href="javascript:;"><img width="30" height="30" src="./Homes/images/tou.png"></a>
						<form>
							<input type="text" class="wei_pingcon">
							<input type="submit" value="评论" class="wei_pinglun">
						</form>
					</div>
					<div class="WB_ping">
						<div class="WB_ping_one">
							<a href="javascript:;"><img width="30" height="30" src="./Homes/images/tou.png"></a>
							<ul class="WB_ping_oneul">
								<li><a href="javascript:;">永不放弃的温斯顿</a>：伊朗的封闭桎梏政教合一政权，必须结束了！</li>
								<li>
									<span>今天 11:11</span>
									<span class="WB_ping_onespan">
										<a href="javascript:;">举报</a>
										<a href="javascript:;">屏蔽</a>
										<a class="" href="javascript:;">回复</a>
										<input type="hidden" value='pid'>
									</span>
								</li>
							</ul>
						</div>
						<div class="WB_ping_one">
							<a href="javascript:;"><img width="30" height="30" src="./Homes/images/tou.png"></a>
							<ul class="WB_ping_oneul">
								<li><a href="javascript:;">永不放弃的温斯顿</a>：伊朗的封闭桎梏政教合一政权，必须结束了！</li>
								<li>
									<span>今天 11:11</span>
									<span class="WB_ping_onespan">
										<a href="javascript:;">举报</a>
										<a href="javascript:;">屏蔽</a>
										<a id='Hui' href="javascript:;">回复</a>
										<input type="hidden" value='wid'>
										<i>11</i>
									</span>
								</li>
							</ul>
						</div>
						<div class="WB_ping_two">
							<form>
								<input type="text" class="wei_hui">
								<input type="button" onclick="huifu(this)" value="回复" class="wei_huifu">
							</form>
						</div>
						<div class="WB_ping_three">
							<ul class="WB_ping_three_ul">
								<li><a href="javascript:;">永不放弃的温斯顿</a>:真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸真是看不下去了，这幅黑特朗普的嘴脸.</li>
								<li>
									<span>今天 11:11</span>
									<span class="WB_ping_onespan">
										<a href="javascript:;">举报</a>
										<a href="javascript:;">屏蔽</a>
										<a href="javascript:;">回复</a>
										<i>11</i>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="weibo_gengduo">
					<a href="javascript:;">查看更多 > </a>
				</div> -->
			</div>
			<!-- 微博内容结束 -->
			
			@endforeach

			<div class="page">{!! $data->render() !!}</div>
		</div>



		<div class="con_right">
			
			<!-- 热门微博 -->
			<div class="conR_two">
				<div class="conR_hot">
					<a class="hot" href="javascript:;">热门微博</a>
					<a class="huan" href="javascript:;">&nbsp;换一批</a>
				</div>
				<ul >
					@foreach($hot as $key=>$value)
					<li style="overflow:hidden"><a href="javascript:;">{{ $value->content}}</a><span>{{($value->like) > 9999 ? round($value->like/10000).'万' :  $value->like}}</span></li>
					@endforeach
				</ul>
				<div class="conR_more"><a href="javascript:;">查看更多 ></a></div>
			</div>
			<!-- 好友关注动态 -->
			<div class="conR_three">
				<div class="friends">好友关注状态</div>
				<ul class="friends_ul">
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="javascript:;">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="javascript:;">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="javascript:;">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="javascript:;">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="javascript:;">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="./Homes/images/tou.png">
						<div>
							<a href="javascript:;">用户名</a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="./Homes/images/guanzhu.png">
					</li>
				</ul>
				<div class="conR_more"><a href="javascript:;">查看更多 ></a></div>
			</div>
		</div>
	</div>
<script type="text/javascript">
$('a').css('text-decoration','none');

var pre = 0;
$('.wei_bottom').on("click",".Ping",function(){
	obj = $(this);
	if($(this).attr('pre') == null){
		$(this).attr('pre','pre');
		$.get('/a/comment',{id:$(this).find("input").val()}, function (data){
			if(data){
				for(var i=0;i<3;i++){
					if(data[i]['fid'] == 0){
						obj.parent().parent().next().append("<div class='WB_ping'><div class='WB_ping_one'><a href='javascript:;'><img width='30' height='30' src='./Homes/images/tou.png'></a><ul class='WB_ping_oneul'><li><a href='javascript:;'>"+data[i]['nickname']+"</a>："+data[i]['content']+"</li><li><span>今天 11:11</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a><a href='javascript:;' class='replays' onclick='replays(this)' param="+data[i]['id']+">回复</a><input type='hidden' value="+data[i]['id']+"><i>11</i></span></li></ul></div></div>");
					}
				}
			}
			obj.parent().parent().next().prepend("<div class='wei_ping'><a href='javascript:;'><img width='30' height='30' src='./Homes/images/tou.png'></a><form><input type='text' class='wei_pingcon'><input type='submit' value='评论' class='wei_pinglun'></form></div>");
			obj.parent().parent().next().after('<div class="weibo_gengduo"><a href="javascript:;">查看更多 > </a></div>');

			obj.parent().parent().next().slideDown();
		},"json");
	}else{
		$(this).parent().parent().next().slideUp();
		$(this).parent().parent().next().empty();
		$(this).parent().parent().next().next().remove();
		$(this).removeAttr('pre');
	}
	
});

// 回复==========================
function replays(obj){
	var id = $(obj).attr('param');
	if($(obj).attr('rep') == null){
		$(obj).attr('rep','rep');
		$.get('/a/replay',{id:$(obj).attr('param')}, function (data){
			if(data){
				$(obj).parent().parent().parent().parent().after('<div class="WB_ping_two"><form><input type="text" class="wei_hui"><input type="submit" value="评论" class="wei_huifu"></form></div>');
				for(var i=0;i<3;i++){
					$(obj).parent().parent().parent().parent().next().after("<div class='WB_ping_three'><ul class='WB_ping_three_ul'><li><a href='javascript:;'>"+data[i]['nickname']+"</a>:'"+data[i]['content']+"</li><li><span>今天 11:11</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a><a href='javascript:;'>回复</a><i>11</i></span></li></ul></div>");
				}
			}
			$(obj).parent().parent().parent().parent().show();
		},"json");

	}else{
		$(obj).parent().parent().parent().parent().nextAll().hide();
		$(obj).removeAttr('rep');
		$(obj).parent().parent().parent().parent().nextAll().remove();
	}
}

$('.wei_replay .replays').hover(function(){
	$(this).css({'color':'#fa7d3c'});
},function(){
	$(this).css({'color':'#666'});
});

</script>

<script type="text/javascript">
$(function(){
	// 举报，屏蔽显示/隐藏
	$('.xiangxia').click(function(){
		$(this).siblings().show();
		return false;

	})
	$('body').click(function(){
		$('.xiangxia_show').hide();
	})	

	$('.huan').click(function(){
		var lis = $(this);
		lis.parent().next().empty();
		$.get('/a/huan',function(data){
			for(var j=0;j<8;j++){
				var rr = data[j]['like'] > 9999 ? Math.round(data[j]['like']/10000)+'万' : data[j]['like'];
				lis.parent().next().append('<li style="overflow:hidden"><a href="javascript:;">'+data[j]['content']+'</a><span>'+ rr +'</span></li>');
			}
			
		},'json');
	})



})
</script>

@endsection
