@extends('home.public')
@section('title','首页')
@section('content')
	<!-- 主体 -->
	<div style="width:10px;height:60px;clear:both;"></div>
	<div class="content">
		
		<div class="con_left">
			<a href="#">首页</a>
			<a href="#">我的收藏</a>
			<a href="#">我的赞</a>
			<b></b>
			<a href="#">微博类型</a>
			<a href="#">微博类型</a>
			<a href="#">微博类型</a>
		</div>

		<div class="con_center">

			<!-- 编辑器开始 -->
			<div class="conC_one" style="height:200px">
				<div class="row" id="edit_form" >
					<span class="pull-left" style="margin:15px;font-size: 14px;color: #666;float: left;">编写新鲜事</span>
					<span class="tips pull-right" style="margin:15px;font-size: 14px;color: #666;float: right;"></span>
					<div contentEditable="true" id="content" ></div>
					<div style="margin-top: 12px;margin-left:15px;">
						<span class="emoji" >表情</span>
						<span class="pic" >图片	</span>
						<select id="WB_type">
							<option>　---默认---</option>
							<option>　---原创---</option>
							<option>　---搞笑---</option>
							<option>　---萌宠---</option>
						</select>
						<span>
							<input type="file" name=""  class="select_Img" style="display: none" >
						</span>
						<div class="myEmoji">
							<ul id="myTab" class="nav nav-tabs">
								<li class="active"><a data-toggle="tab">预设</a></li>
								<li><a data-toggle="tab">热门</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
								<div class="tab-pane fade in actives" id="set">
									<div class="emoji_1"></div>
								</div>
								<div class="tab-pane fade" id="hot">
									<div class="emoji_2"></div>
								</div>
							</div>
						</div>
						 <!-- <span> <input type="file" id="selectImg" value=""></input> </span>  -->
						<button type="button" id="send" class="pull-right disabled">发布</button>
					</div>
				</div>
			</div>
			<!-- 编辑器结束 -->

			<div class="conC_two">
				<ul>
					<li>全部</li>
					<li>默认</li>
					<li>原创</li>
					<li>搞笑</li>
					<li>萌宠</li>
				</ul>
			</div>
			<!-- 微博内容 -->
			<div class="zuijia"></div>
			<div class="weizong">
			</div>	
			<!-- 微博内容结束 -->
			<div class="page">
				<ul id="page">
					@if(isset($page))
						@for($i=1;$i<=$page;$i++)
						<input type="button" value="{{$i}}">
						@endfor
					@else
						<input type="button" value="1">
					@endif
				</ul>
				<!-- <a href="/index/index?aid=2">2</a> -->
			</div>
	
		</div>


		<div class="con_right" style="height:auto">
			<div class="conR_one">
				<div class="conR_bg"></div>
				<div class="conR_pic"><img src="/homes/images/tou.png"></div>
				<div class="conR_name"><a class="name" href="#">{{$detail->nickname}}</a>&nbsp;&nbsp;<a href="#" class="level">LV14</a></div>
				<ul class="conR_ul">
					<li><a href="#">
						<b>123</b>
						<span>关注</span>
					</a></li>
					<li><a href="#">
						<b>11124</b>
						<span>粉丝</span>
					</a></li>
					<li style="border:none;"><a href="#">
						<b>1222</b>
						<span>微博</span>
					</a></li>
				</ul>
			</div>
			<!-- 热门微博 -->
			<div class="conR_two">
				<div class="conR_hot">
					<a class="hot" href="#">热门微博</a>
					<a class="huan" href="#">&nbsp;换一批</a>
				</div>
				<ul >
					@foreach($hot as $key=>$value)
					<li style="overflow:hidden"><a href="javascript:;">{{ $value->content}}</a><span>{{($value->like) > 9999 ? round($value->like/10000).'万' :  $value->like}}</span></li>
					@endforeach
				</ul>
				<div class="conR_more"><a class="more" href="#">查看更多 ></a></div>
			</div>
			<!-- 好友关注动态 -->
			<div class="conR_three" style="height:auto;">
				<div class="friends">好友关注状态</div>
				<ul class="friends_ul">
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="/homes/images/tou.png">
						<div>
							<a href="#"></a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="/homes/images/guanzhu.png">
					</li>
				</ul>
				<div class="conR_more"><a href="#">查看更多 ></a></div>
			</div>
		</div>
	</div>
<div style="clear:both"></div>

<script type="text/javascript">
//$("#content").keyup(function(){  });
	//判断输入的字符串长度
	

	$("#send").click(function(){
		var content_len = $("#content").html().length;
		$(".tips").text("已经输入"+content_len+"个字");
		var obj = $(this);
		if(content_len > 0){
			$.get('/index/send',{content:$(this).parent().prev().html()},function (wdata){
				if(wdata){
					//console.log($(this));
					obj.parent().parent().parent().next().next().prepend('<div class="weibo"><a href="#" class="xiangxia"></a><div class="xiangxia_show"><ul><li><a href="#">信息</a></li><li><a href="#">信息</a></li><li><a href="#">信息</a></li></ul></div><div class="weibo_d1"><img src="/homes/images/tou.png"></div><div class="weibo_d2"><a href="#" class="wei_name">'+wdata['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+wdata["publish_time"]+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li><a href="javascript:;">收藏</a><span >'+wdata["collect"]+'</span></li><li><a href="javascript:;">转发</a><span>'+wdata["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata["id"]+'"><a href="javascript:;">评论</a><span>'+wdata["comment"]+'</span></li><li><a href="javascript:;">赞</a><span>'+wdata["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');
				}
			},"json");
		}else{
			alert('请添加内容');
		}
		
		$("#content").text('');
		
	})
	

$(".pic").click(function(){
	$(".select_Img").click();  	
})
//添加表情包1
for (var i = 1; i < 60; i++) {
		$(".emoji_1").append("<img src='/homes/img/f"+i+".png' style='width:26px;height:26px' >");
	}
	//添加表情包2
	for (var i = 1; i < 61; i++) {
		$(".emoji_2").append("<img src='/homes/img/h"+i+".png' style='width:26px;height:26px' >");
	}
$(".emoji").click(function(){
	$(".myEmoji").show();
	$("#myTabContent>div").eq(0).css({'display':'block'});
	//点击空白处隐藏弹出层
	$(document).click(function (e) {
		if (!$("#edit_form").is(e.target) && $("#edit_form").has(e.target).length === 0) {
			$(".myEmoji").hide();
		}
	});
});

//将表情添加到输入框
$(".myEmoji img").each(function(){
	$(this).click(function(){
		var url = $(this)[0].src;

		$('#content').append("<img src='"+url+"' style='width:25px;height:25px' >");

		$("#send").removeClass("disabled");
	})
})

</script>






<script type="text/javascript">

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

$('.more').click(function(){
	var lis = $(this);
	lis.parent().prev().empty();
	$.get('/a/huan',function(data){
		for(var j=0;j<8;j++){
			var rr = data[j]['like'] > 9999 ? Math.round(data[j]['like']/10000)+'万' : data[j]['like'];
			lis.parent().prev().append('<li style="overflow:hidden"><a href="javascript:;">'+data[j]['content']+'</a><span>'+ rr +'</span></li>');
		}
		
	},'json');
})

$(function(){

	$.get('/index/wei',{aid:'1'},function (wdata){
		$('.weizong').empty();
		for(var i=0;i<4;i++){
			$('.weizong').append('<div class="weibo"><a href="#" class="xiangxia"></a><div class="xiangxia_show"><ul><li><a href="#">信息</a></li><li><a href="#">信息</a></li><li><a href="#">信息</a></li></ul></div><div class="weibo_d1"><img src="/homes/images/tou.png"></div><div class="weibo_d2"><a href="#" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+wdata[i]["publish_time"]+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li><a href="javascript:;">收藏</a><span >'+wdata[i]["collect"]+'</span></li><li><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');
		}
			
	},"json")
})

$("#page").on('click',"input",function(){
	page = $(this);
	$.get('/index/wei',{aid:$(this).val()},function (wdata){
		$('.weizong').empty();
		for(var i=0;i<4;i++){
			$('.weizong').append('<div class="weibo"><a href="#" class="xiangxia"></a><div class="xiangxia_show"><ul><li><a href="#">信息</a></li><li><a href="#">信息</a></li><li><a href="#">信息</a></li></ul></div><div class="weibo_d1"><img src="/homes/images/tou.png"></div><div class="weibo_d2"><a href="#" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+wdata[i]["publish_time"]+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li><a href="javascript:;">收藏</a><span >'+wdata[i]["collect"]+'</span></li><li><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');
		}
			
	},"json")
})



</script>
<script type="text/javascript">
var pre = 0;
/*$('.wei_bottom').on("click",".Ping",function(){
	obj = $(this);
	if($(this).attr('pre') == null){
		$(this).attr('pre','pre');
		$.get('/a/comment',{id:$(this).find("input").val()}, function (data){
			if(data){
				for(var i in data){
					if(data[i]['fid'] == 0){
						obj.parent().parent().next().append("<div class='WB_ping'><div class='WB_ping_one'><a href='javascript:;'><img width='30' height='30' src='/homes/images/tou.png'></a><ul class='WB_ping_oneul'><li><a href='javascript:;'>"+data[i]['nickname']+"</a>："+data[i]['content']+"</li><li><span>今天 11:11</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a><a href='javascript:;' class='replays' onclick='replays(this)' param="+data[i]['id']+">回复</a><input type='hidden' class='wid' value="+data[i]['id']+"> </span></li></ul></div></div>");
					}
				}
			}
			obj.parent().parent().next().prepend("<div class='wei_ping'><a href='javascript:;'><img width='30' height='30' src='/homes/images/tou.png'></a><form><input type='text' class='wei_pingcon'><input type='button' value='评论' onclick='ping(this)' class='wei_pinglun'></form></div>");
			obj.parent().parent().next().after('<div class="weibo_gengduo"><a href="javascript:;">查看更多 > </a></div>');

			obj.parent().parent().next().slideDown();
		},"json");
	}else{
		$(this).parent().parent().next().slideUp();
		$(this).parent().parent().next().empty();
		$(this).parent().parent().next().next().remove();
		$(this).removeAttr('pre');
	}
	
});*/

//一级批评论
function Ping(obj){
	obj = $(obj);
	if($(obj).attr('pre') == null){
		$(obj).attr('pre','pre');
		$.get('/a/comment',{id:$(obj).find("input").val()}, function (data){
			if(data){
				for(var i in data){
					if(data[i]['fid'] == 0){
						obj.parent().parent().next().append("<div class='WB_ping'><div class='WB_ping_one'><a href='javascript:;'><img width='30' height='30' src='/homes/images/tou.png'></a><ul class='WB_ping_oneul'><li><a href='javascript:;'>"+data[i]['nickname']+"</a>："+data[i]['content']+"</li><li><span>今天 11:11</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a><a href='javascript:;' class='replays' onclick='replays(this)' param="+data[i]['id']+">回复</a><input type='hidden' class='wid' value="+data[i]['id']+"> </span></li></ul></div></div>");
					}
				}
			}
			obj.parent().parent().next().prepend("<div class='wei_ping'><a href='javascript:;'><img width='30' height='30' src='/homes/images/tou.png'></a><form><input type='text' class='wei_pingcon'><input type='button' value='评论' onclick='ping(this)' class='wei_pinglun'></form></div>");
			obj.parent().parent().next().after('<div class="weibo_gengduo"><a href="javascript:;">查看更多 > </a></div>');

			obj.parent().parent().next().slideDown();
		},"json");
	}else{
		$(this).parent().parent().next().slideUp();
		$(this).parent().parent().next().empty();
		$(this).parent().parent().next().next().remove();
		$(this).removeAttr('pre');
	}
}

// 回复==========================
function replays(obj){
	var id = $(obj).attr('param');
	if($(obj).attr('rep') == null){
		$(obj).attr('rep','rep');
		$.get('/a/replay',{id:$(obj).attr('param')}, function (data){
			if(data){
				$(obj).parent().parent().parent().parent().after("<div class='WB_ping_two' style='display:block'><form><input type='text' class='wei_hui'><input type='button' onclick='huifu(this)' value='回复' class='wei_huifu'></form></div>");
				for(var i in data){
					$(obj).parent().parent().parent().parent().next().after("<div class='WB_ping_three'><ul class='WB_ping_three_ul'><li><a href='javascript:;'>"+data[i]['nickname']+"</a>:"+data[i]['content']+"</li><li><span>今天 11:11</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a></span></li></ul></div>");
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
//追加评论=================
function ping(ping){
	//var this = $(ping);
	//找到被评论微博的id
	var wid = $(ping).parent().parent().parent().prev().find('.Ping>input[type=hidden]').val();
	//alert(wid);
		if($(ping).prev().val() == ''){
			layer.alert('评论内容不能为空！');
			return false;
		}
	$.get('/index/ping',{pcont:$(ping).prev().val(),wid:wid},function (data){
		// $(ping).parent().parent().next().prepend('<div>123</div>');
		$(ping).prev().val('');
		// $(ping).parent().next().after();
		$(ping).parent().parent().next().prepend('<div class="WB_ping_one"><a href="javascript:;"><img width="30" height="30" src="./Homes/images/tou.png"></a><ul class="WB_ping_oneul"><li><a href="javascript:;">'+data["nickname"]+'</a>：'+data["content"]+'</li><li><span>今天 11:11</span><span class="WB_ping_onespan"><a href="javascript:;">举报</a><a href="javascript:;">屏蔽</a><a class="" href="javascript:;">回复</a><input class="wid" type="hidden" value=' +data["wid"]+ '><input class="fid" type="hidden" value=' +data["id"]+ '> </span></li></ul></div>'+'<div class="WB_ping_two" style="display:block"><form><input type="text" class="wei_hui"><input type="button" onclick="huifu(this)" value="回复" class="wei_huifu"></form></div>');
	},"json");
}

//追加回复============
function huifu(huifu){
	//找到被评论微博的id
	var fid = $(huifu).parent().parent().parent().find('input[type=hidden]').val();
	var wid = $(huifu).parent().parent().parent().find('input[class=wid]').val();
	//找到评论的id
	//追加评论的回复
	alert(fid);
	alert(wid);
	$(huifu).parent().parent().parent().next().css('display','block');
	$.get('/index/huifu',{hcont:$(huifu).prev().val()},function (data){
		$(huifu).parent().parent().after("<div>123</div>");
		//$(huifu).parent().parent().parent().parent().prepend('<div class="WB_ping_two"><form><input type="text" class="wei_hui"><input type="button" onclick="huifu(this)" value="回复" class="wei_huifu"></form></div>');
	})
}
</script>


<script type="text/javascript">
$(function(){
	$("#myTab>li").eq(0).click(function(){
		$("#myTab>li").removeClass('active');
		$(this).addClass('active');
		$(".emoji_1").css({'display':'block'});
		$(".emoji_2").css({'display':'none'});
		$("#myTabContent>div").eq(0).css({'display':'block'});
		$("#myTabContent>div").eq(1).css({'display':'none'});
	})
	$("#myTab>li").eq(1).click(function(){
		$("#myTab>li").removeClass('active');
		$(this).addClass('active');
		$(".emoji_1").css({'display':'none'});
		$(".emoji_2").css({'display':'block'});
		$("#myTabContent>div").eq(0).css({'display':'none'});
		$("#myTabContent>div").eq(1).css({'display':'block'});
	})
})

</script>

@endsection