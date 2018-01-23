@extends('home.public')
@section('title','首页')
@section('bootstrap',' ')
@section('content')
<script type="text/javascript" src="/homes/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/homes/duotu/ssi-uploader1.js"></script>

    <!-- <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.css" /> -->
    <link rel="stylesheet" href="/homes/duotu/style.css">
    <link rel="stylesheet" href="/homes/duotu/ssi-uploader1.css"/>
	<!-- 主体 -->
	<div style="width:10px;height:60px;clear:both;"></div>
	<div class="content">
		
		<div class="con_left">
			<a href="javascript:;">首页</a>
			<a href="javascript:;">我的收藏</a>
			<a href="javascript:;">我的赞</a>
			<b></b>
			<a href="javascript:;">微博类型</a>
			<a href="javascript:;">微博类型</a>
			<a href="javascript:;">微博类型</a>
		</div>

		<div class="con_center">

			<!-- 编辑器开始 -->
			<div class="conC_one" style="height:200px">
				<div class="row" id="edit_form" style="position: relative;">
					<span class="pull-left" style="margin:15px;font-size: 14px;color: #666;float: left;">编写新鲜事</span>
					<span class="tips pull-right" style="margin:15px;font-size: 14px;color: #666;float: right;"></span>
					<div contentEditable="true" id="content" ></div>
					<div style="margin-top: 12px;margin-left:15px;">
						<span class="emoji" >表情</span>
						<span class="pic" >图片	</span>
						<select id="WB_type" name="type">
							<option value="默认">　---默认---</option>
							<option value="原创">　---原创---</option>
							<option value="搞笑">　---搞笑---</option>
							<option value="社会">　---社会---</option>
						</select>
						<span>
							<input type="button" multiple  name="" id="shang"  class="select_Img" style="display:none;" >

						</span>
						<div class="fapic" style="display:none;position: absolute;width:540px;height:420px;background:#eff;z-index:999;overflow:auto;border:1px solid #dcdcdc">
							<div class="guanbi" style="float:right;cursor:pointer">[X]</div>
							<div class="container" style="padding:10px">
							    <div class="container" style="padding:10px">
							        <div class="row">
							            <div>
							                <h5>请选择上传的图片</h5>
							                <input type="file" name="uploadfiles" multiple id="ssi-upload"/>
							                <input type="hidden" style="width:500px;" class="imgFiles" name="imgvalue" value="" />
							            </div>
							        </div>

							    </div>
							</div>
						</div>
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
						<button type="button" id="send" class="pull-right disabled">发布</button>
					</div>
				</div>
			</div>
			<!-- 编辑器结束 -->

			<div class="conC_two">
				<ul class="type">
					<li>全部</li>
					<li>默认</li>
					<li>原创</li>
					<li>搞笑</li>
					<li>社会</li>
				</ul>
			</div>
			

			<!-- 微博内容 -->
			<div class="zuijia">

				<!-- 转发信息 -->
				<!-- <div class="weibo" style="padding:;">
					<a href="javascript:;" class="xiangxia"></a>
					<div class="xiangxia_show">
				                        <ul>
				                             
				                            <li><a href="javascript:;">置顶</a></li>
				                            <li><a href="javascript:;">加标签</a></li>
				                        </ul>
					</div>
					<div class="weibo_d1">
						<img src="/Homes/images/tou.png">
					</div>
					<div class="weibo_d2">
				                        <a href="javascript:;" class="wei_name">用户名</a>
				                        <div class="wei_time"><a href="javascript:;">47分钟前</a> 来自 微博 weibo.com</div>
				                        <div class="wei_cont">
				                            <p>微博内容微博内容微博内容微博内容</p>
				                            <ul class="wei_ul">
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                            </ul>
				                        </div>
					</div>
					<p style="clear:both"></p>
					<div class="weibo_d3" >
				                        <a href="javascript:;" class="wei_name">@用户名</a>
				                        <div class="wei_cont">
				                            <p>原微博内容原微博内容原微博内容</p>
				                            <ul class="wei_ul">
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                                <li><img src="/Homes/images/img1.jpg"></li>
				                            </ul>
							<p style="clear:both"></p>
				        </div>
					</div>
					<p style="clear:both"></p>
					<div class="wei_bottom">
				                        <ul>
				                            <li onclick="xiang(this)"><a href="/detail/'+'微博id'+'">查看详情</a><input type="hidden" value="'+wdata["comment"]+'" /></li>
				                            <li onclick="zhuanfa(this)"><a href="javascript:void(0)">转发</a><span>12345</span></li>
				                            <li onclick="Ping(this)" class="Ping" ><input type="hidden" value="微博id"><a href="javascript:void(0)" class="pinglun">评论</a><span>12345</span></li>
				                            <li><a href="javascript:void(0)">赞</a><span>12345</span></li>
				                        </ul>
					</div>
				</div> -->
				<!-- 转发信息 -->

			</div>

			<div class="weizong">


			</div>	
			<!-- 微博内容结束 -->
			<div class="page">
				<ul id="page">
					@if(isset($page))
						@for($i=1;$i<=$page;$i++)
						<input type="button" value="{{$i}}" style="padding:5px;">
						@endfor
					@else
						<input type="button" value="1" style="padding:5px;">
					@endif
				</ul>
			</div>
	
		</div>

		<div class="con_right" style="height:auto">
			<div class="conR_one">
				<div class="conR_bg"></div>
				@if( $detail->portrait == 'default.jpg')
					<div class="conR_pic"><a href="/user/user"><img src="/homes/images/tou.png"></a></div>
				@else
					<div class="conR_pic"><a href="/user/user"><img src="http://p2l4kajri.bkt.clouddn.com/{{$detail->portrait}}"></a></div>
				@endif
				
				<div class="conR_name"><a class="name" href="/user/user" >{{$detail->nickname}}</a>&nbsp;&nbsp;<a href="/user/user" class="level">LV14</a></div>

				<ul class="conR_ul">
					<li><a href="javascript:;">
						<b>{{$detail->attent}}</b>
						<span>关注</span>
					</a></li>
					<li><a href="javascript:;">
						<b>{{$detail->fensi}}</b>
						<span>粉丝</span>
					</a></li>
					<li style="border:none;"><a href="javascript:;">
						<b id='weis'>{{$weis}}</b>
						<span>微博</span>
					</a></li>
				</ul>
			</div>
			<!-- 热门微博 -->
			<div class="conR_two">
				<div class="conR_hot">
					<a class="hot" href="javascript:;">热门微博</a>
					<a class="huan" href="javascript:;">&nbsp;换一批</a>
				</div>
				<ul >
					@foreach($hot as $key=>$value)
					<li style="overflow:hidden"><a href="javascript:;">{{ html_entity_decode($value->content) }}</a><span>{{($value->like) > 9999 ? round($value->like/10000).'万' :  $value->like}}</span></li>
					@endforeach
				</ul>
				<div class="conR_more"><a class="more" href="javascript:;">查看更多 ></a></div>
			</div>
			<!-- 好友关注动态 -->
			<div class="conR_three" style="height:auto;">
				<div class="friends">好友关注状态</div>
				<ul class="friends_ul">
					<li>
						<img width="30" height="30" style="margin-left:10px;" src="/homes/images/tou.png">
						<div>
							<a href="javascript:;"></a>
							<span>简单介绍</span>
						</div>
						<img style="float:right;margin-right:10px;" src="/homes/images/guanzhu.png">
					</li>
				</ul>
				<div class="conR_more"><a href="javascript:;">查看更多 ></a></div>
			</div>
		</div>
	</div>
<div style="clear:both"></div>
<!-- 转发输入框 -->
<div class="zhuanfa">
	<div class="zCont">
		<div class="close">[X]</div>
		<input type="hidden" value="" id="zid">
		<textarea id="border"></textarea>
		<input type="button" value="转发" id="zhuan" onclick="transpond(this)">
	</div>
</div>
<script type="text/javascript">

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
//默认
$('.type li').click(function(){
	
	var type = $(this).html();
	$.get('/index/type',{type:type});
	location.href='/index';
})
//转发微博
function zhuanfa(obj){
	$('.zhuanfa').css('display','block');
	var wid = $(obj).next().find('input[type=hidden]').val();
	//获取被转发微博的id
	var zid = $('#zid').val(wid);
	//alert($('#zid').val());
}
//点击转发
function transpond(zhuan){
	var bid = $('#zid').val();
	//alert(bid);
	var content = $('#border').val();
	$.get('/index/zhuanfa',{bid:bid,content:content},function (zdata){
		//console.log(zdata);
		//原微博内容
		var old = zdata['content'];
		if(zdata){
			//console.log(wdata['portrait']);
			if(zdata['portrait'] == 'default.jpg'){
				photo = '<img src="/homes/images/tou.png">';
			}else{
				var photo = '<img src="http://p2l4kajri.bkt.clouddn.com/'+zdata['portrait']+'" >';
			}
			//$('.zuijia').prepend('<div class="weibo" style="padding:;"><a href="javascript:;" class="xiangxia"></a><div class="xiangxia_show"><ul> <li onclick="report(this)"><a href="javascript:;">举报</a></li></ul></div><div class="weibo_d1">'+photo+'</div><div class="weibo_d2"><a href="/user/user" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+publish_time+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="weibo_d3" ><a href="javascript:;" class="wei_name">@'+wdata[i]['bnickname']+'</a><div class="wei_cont"><p>'+wdata[i]['bcontent']+'</p><ul class="wei_ul"><li><img src="/Homes/images/img1.jpg"></li></ul><p style="clear:both"></p></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li onclick="xiang(this)"><a href="/detail/'+wdata[i]["id"]+'">查看详情</a><input type="hidden" value="'+wdata[i]["id"]+'" /></li><li onclick="zhuanfa(this)"><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li onclick="zana(this)" id="'+wdata[i]["id"]+'"><input type="hidden" value="'+wdata[i]["uid"]+'"><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');
		}
		zdata['picture'] = eval("(" + zdata['picture'] + ")");
		
		if(zdata['picture'] != ''){
			$.each(zdata['picture'],function(i,n){
				obj.parent().parent().parent().next().next().find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
			})
		}
	},"json");

	$('.zhuanfa').css('display','none');
	layer.alert('转发成功！');
	location.href='/index/wei';

}

$('.close').click(function(){
	$('.zhuanfa').css('display','none');
})
</script>

<script type="text/javascript">

$(function(){
	$('.body').css('position', 'relative');
})
$(function(){


	$('#ssi-DropZoneBack').css({'fontSize':'12px'});
	$('.ssi-uploader').css({'width':'480px'});
	$('.ssi-previewBox').css({'width':'480px'});
	$(".ssi-imgToUpload").css({'width':'100px'});
	$(".WB_ping").css({'height':'30px','margin':'15px auto'});

	$('.pic').click(function(event){
		$('.fapic').show();
	})
	$('.guanbi').click(function(){
		$('.fapic').hide();
	})
})
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var imgNum = 0;
    $('#ssi-upload').ssi_uploader({url:'/index/shang',onEachUpload:function(fileInfo,xhr ){
        
        //console.log(xhr);
        imgNum++;
        var jsondata = $('.imgFiles').val();
        //console.log(jsondata);
        // $('.imgFiles').val(jsondata + imgNum+':'+xhr+',');
        // $('.imgFiles').val(jsondata + xhr+',');
       		$('.imgFiles').val(jsondata + xhr+',');
        },maxFileSize:2,allowed:['jpg','gif','txt','png','pdf']
    });
</script>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$("#send").click(function(){
	$('.fapic').hide();
	var content_len = $("#content").html().length;
	$(".tips").text("已经输入"+content_len+"个字");

	var obj = $(this);
	if(content_len > 0){
		$.post('/index/send',{content:$(this).parent().prev().html(),picture:$(this).prev().prev().find('input[type=hidden]').val(),type:$(this).parent().find('select option:selected').val()},function (wdata){

			if(wdata){
				//console.log(wdata['portrait']);
				if(wdata['portrait'] == 'default.jpg'){
					photo = '<img src="/homes/images/tou.png">';
				}else{
					var photo = '<img src="http://p2l4kajri.bkt.clouddn.com/'+wdata['portrait']+'" >';
				}
				obj.parent().parent().parent().next().next().prepend('<div class="weibo"  ><a href="javascript:;" onclick="xiangxia(this)" class="xiangxia"></a><div class="xiangxia_show"><ul> <li onclick="report(this)"><a href="javascript:;">举报</a></li></ul></div><div class="weibo_d1">'+photo+'</div><div class="weibo_d2"><a href="/user/user" class="wei_name">'+wdata['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+'刚刚'+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li onclick="xiang(this)"><a href="/detail/'+wdata["id"]+'">查看详情</a><input type="hidden" value="'+wdata["comment"]+'" /></li><li onclick="zhuanfa(this)"><a href="javascript:;">转发</a><span>'+wdata["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata["id"]+'"><a href="javascript:;">评论</a><span>'+wdata["comment"]+'</span></li><li onclick="zana(this)" id="'+wdata["uid"]+'"><input type="hidden" value="'+wdata["id"]+'"><a href="javascript:;">赞</a><span>'+wdata["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');
			}
			wdata['picture'] = eval("(" + wdata['picture'] + ")");
			
			if(wdata['picture'] != ''){
				$.each(wdata['picture'],function(i,n){
					obj.parent().parent().parent().next().next().find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
				})
			}

		},"json");

		//清空上传后的图片
		$('#ssi-previewBox').empty();
		$(this).prev().prev().find('input[type=hidden]').val('');
	}else{
		layer.alert('请添加微博内容！');
	}
	$("#content").text('');

	var weis = $("#weis").html();
	parseInt(weis)+1;

	$("#weis").html(parseInt(weis)+1);
	
})

$('#ssi-clearBtn').click(function(){
	$('.fapic').find('input[type=hidden]').val('');
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
		
	},"json");
})

$('.more').click(function(){
	var lis = $(this);
	lis.parent().prev().empty();
	$.get('/a/huan',function(data){
		for(var j=0;j<8;j++){
			var rr = data[j]['like'] > 9999 ? Math.round(data[j]['like']/10000)+'万' : data[j]['like'];
			lis.parent().prev().append('<li style="overflow:hidden"><a href="javascript:;">'+data[j]['content']+'</a><span>'+ rr +'</span></li>');
		}
		
	},"json");
})

//页面加载时的第一页
$(function(){
	$.get('/index/wei',{aid:'1'},function (wdata){
		$('.weizong').empty();
		for(var i=0;i<4;i++){

			if(wdata[i]['portrait'] == 'default.jpg'){
				photo = '<img src="/homes/images/tou.png">';
			}else{
				var photo = '<img src="http://p2l4kajri.bkt.clouddn.com/'+wdata[i]['portrait']+'" >';
			}
		
			var time = wdata[i]['publish_time']*1000;
			//console.log(time);
			var date = new Date(time);


			Y = date.getFullYear() + '-';
			M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
			D = date.getDate() + ' ';
			h = date.getHours() + ':';
			m = date.getMinutes() + ':';
			s = date.getSeconds(); 

			//console.log(Y+M+D+h+m+s);
			//console.log(Date.parse(new Date())-time);
			if((Date.parse(new Date())-time)/1000 < 3600){
				publish_time = h+m+s;
			}else{
				publish_time = Y+M+D;
			}
			//console.log(wdata[i]['bid']);

			if(wdata[i]['bid'] > 0){
				$('.weizong').append('<div class="weibo" style="padding:;"><a href="javascript:;" onclick="xiangxia(this)" class="xiangxia"></a><div class="xiangxia_show"><ul> <li onclick="report(this)"><a href="javascript:;">举报</a></li></ul></div><div class="weibo_d1">'+photo+'</div><div class="weibo_d2"><a href="/user/user" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+publish_time+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="weibo_d3" ><a href="javascript:;" class="wei_name">@'+wdata[i]['bnickname']+'</a><div class="wei_cont"><p>'+wdata[i]['bcontent']+'</p><ul class="wei_ul"></ul><p style="clear:both"></p></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li onclick="xiang(this)"><a href="/detail/'+wdata[i]["id"]+'">查看详情</a><input type="hidden" value="'+wdata[i]["id"]+'" /></li><li onclick="zhuanfa(this)"><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li onclick="zana(this)" id="'+wdata[i]["uid"]+'"><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');

			}else{

				$('.weizong').append('<div class="weibo"  ><a href="javascript:;" onclick="xiangxia(this)" class="xiangxia"></a><div class="xiangxia_show"><ul> <li onclick="report(this)"><input type="hidden" value="'+wdata[i]['id']+'" /><a href="javascript:;">举报</a></li></ul></div><div class="weibo_d1">'+photo+'</div><div class="weibo_d2"><a href="/user/user" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+publish_time+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li onclick="xiang(this)"><a href="/detail/'+wdata[i]["id"]+'">查看详情</a><input type="hidden" value="'+wdata[i]["id"]+'" /></li><li onclick="zhuanfa(this)"><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li onclick="zana(this)" id="'+wdata[i]["uid"]+'"><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');
			}



		}
			for (var j = 0; j<4; j++) {
				wdata[j]['picture'] = eval("(" + wdata[j]['picture'] + ")");
				//console.log(wdata[j]['picture']);
				
			};

			if(wdata[0]['picture'] != ''){
				//console.log(wdata[0]['picture']);
				$.each(wdata[0]['picture'],function(j,n){
					$('.weibo:eq(0)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
				})
			}
			if(wdata[1]['picture'] != ''){
				//console.log(wdata[1]['picture']);
				$.each(wdata[1]['picture'],function(j,n){
					$('.weibo:eq(1)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
				})
			}
			if(wdata[2]['picture'] != ''){
				//console.log(wdata[2]['picture']);
				$.each(wdata[2]['picture'],function(j,n){
					$('.weibo:eq(2)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
				})
			}
			if(wdata[3]['picture'] != ''){
				//console.log(wdata[3]['picture']);
				$.each(wdata[3]['picture'],function(j,n){
					$('.weibo:eq(3)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
				})
			}

			
	},"json")
})
//ajax分页================
$("#page").on('click',"input",function(){
	page = $(this);
	$.get('/index/wei',{aid:$(this).val()},function (wdata){
		$('.weizong').empty();
		for(var i=0;i<4;i++){

			var time = (wdata[i]['publish_time']*1000);
			//console.log(time);
			var date = new Date(time);

			Y = date.getFullYear() + '-';
			M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
			D = date.getDate() + ' ';
			h = date.getHours() + ':';
			m = date.getMinutes() + ':';
			s = date.getSeconds(); 

			//console.log(Y+M+D+h+m+s);
			//console.log(Date.parse(new Date())-time);
			if((Date.parse(new Date())-time)/1000 < 3600){
				publish_time = h+m+s;
			}else{
				publish_time = Y+M+D;
			}

			if(wdata[i]['portrait'] == 'default.jpg'){
				photo = '<img src="/homes/images/tou.png">';
			}else{
				var photo = '<img src="http://p2l4kajri.bkt.clouddn.com/'+wdata[i]['portrait']+'" >';
			}


			if(wdata[i]['bid'] > 0){

				$('.weizong').append('<div class="weibo" style="padding:;"><a href="javascript:;" onclick="xiangxia(this)" class="xiangxia"></a><div class="xiangxia_show"><ul> <li onclick="report(this)"><input type="hidden" value="'+wdata[i]['id']+'" /><a href="javascript:;">举报</a></li></ul></div><div class="weibo_d1">'+photo+'</div><div class="weibo_d2"><a href="/user/user" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+publish_time+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="weibo_d3" ><a href="javascript:;" class="wei_name">@'+wdata[i]['bnickname']+'</a><div class="wei_cont"><p>'+wdata[i]['bcontent']+'</p><ul class="wei_ul"></ul><p style="clear:both"></p></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li onclick="xiang(this)"><a href="/detail/'+wdata[i]["id"]+'">查看详情</a><input type="hidden" value="'+wdata[i]["id"]+'" /></li><li onclick="zhuanfa(this)"><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li onclick="zana(this)" id="'+wdata[i]["uid"]+'"><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');

			}else{

				$('.weizong').append('<div class="weibo"  ><a href="javascript:;" onclick="xiangxia(this)" class="xiangxia"></a><div class="xiangxia_show"><ul> <li onclick="report(this)"><input type="hidden" value="'+wdata[i]['id']+'" /><a href="javascript:;">举报</a></li></ul></div><div class="weibo_d1">'+photo+'</div><div class="weibo_d2"><a href="/user/user" class="wei_name">'+wdata[i]['nickname']+'</a><div class="wei_time"><a href="javascript:;">'+publish_time+'</a> 来自 微博 weibo.com</div><div class="wei_cont"><p>'+wdata[i]['content']+'</p><ul class="wei_ul"></ul></div></div><p style="clear:both"></p><div class="wei_bottom"><ul><li onclick="xiang(this)"><a href="/detail/'+wdata[i]["id"]+'">查看详情</a><input type="hidden" value="'+wdata[i]["id"]+'" /></li><li onclick="zhuanfa(this)"><a href="javascript:;">转发</a><span>'+wdata[i]["transpond"]+'</span></li><li onclick="Ping(this)" class="Ping" ><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">评论</a><span>'+wdata[i]["comment"]+'</span></li><li onclick="zana(this)" id="'+wdata[i]["uid"]+'"><input type="hidden" value="'+wdata[i]["id"]+'"><a href="javascript:;">赞</a><span>'+wdata[i]["like"]+'</span></li></ul></div><div class="wei_replay" ></div></div>');

			}

		}


		for (var j = 0; j<4; j++) {
			wdata[j]['picture'] = eval("(" + wdata[j]['picture'] + ")");
			//console.log(wdata[j]['picture']);
			
		};

		if(wdata[0]['picture'] != ''){
			//console.log(wdata[0]['picture']);
			$.each(wdata[0]['picture'],function(j,n){
				$('.weibo:eq(0)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
			})
		}
		if(wdata[1]['picture'] != ''){
			//console.log(wdata[1]['picture']);
			$.each(wdata[1]['picture'],function(j,n){
				$('.weibo:eq(1)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
			})
		}
		if(wdata[2]['picture'] != ''){
			//console.log(wdata[2]['picture']);
			$.each(wdata[2]['picture'],function(j,n){
				$('.weibo:eq(2)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
			})
		}
		if(wdata[3]['picture'] != ''){
			//console.log(wdata[3]['picture']);
			$.each(wdata[3]['picture'],function(j,n){
				$('.weibo:eq(3)').find('.wei_ul:first').prepend('<li><img src="http://p2l4kajri.bkt.clouddn.com/'+n+'" ></li>');
			})
		}

			
	},"json")
})



</script>
<script type="text/javascript">
//的查看详情
function xiang(obj){
	var id = $(obj).find('input[type=hidden]').val();
	// alert(id);
}

//一级批评论、点击查看评论
function Ping(obj){
	obj = $(obj);
	if($(obj).attr('pre') == null){
		$(obj).attr('pre','pre');
		$.get('/a/comment',{id:$(obj).find("input").val()}, function (data){
			if(data){
				for(var i in data){
					if(data[i]['portrait'] == 'default.jpg'){
						photo = '<img width="30" height="30" src="/homes/images/tou.png">';
					}else{
						var photo = '<img width="30" height="30"  src="http://p2l4kajri.bkt.clouddn.com/'+data[i]['portrait']+'" >';
					}


					var time = data[i]['comment_time']*1000;
					//console.log(time);
					var date = new Date(time);

					Y = date.getFullYear() + '-';
					M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
					D = date.getDate() + ' ';
					h = date.getHours() + ':';
					m = date.getMinutes() + ':';
					s = date.getSeconds(); 

					//console.log(Y+M+D+h+m+s);
					console.log(Date.parse(new Date())-time);
					if((Date.parse(new Date())-time)/1000 < 3600){
						comment_time = h+m+s;
					}else{
						comment_time = Y+M+D;
					}

					if(data[i]['fid'] == 0){
						obj.parent().parent().next().append("<div class='WB_ping'><div class='WB_ping_one'><a href='javascript:;'>"+photo+"</a><ul class='WB_ping_oneul'><li><a href='javascript:;'>"+data[i]['nickname']+"</a>："+data[i]['content']+"</li><li><span>"+comment_time+"</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a><a href='javascript:;' class='replays' onclick='replays(this)' param="+data[i]['id']+">回复</a><input type='hidden' class='wid' value="+data[i]['id']+"> </span></li></ul></div></div>");
					}
				}
			}
			obj.parent().parent().next().prepend("<div class='wei_ping'><a href='javascript:;'><img width='30' height='30' src='/homes/images/comm.png'></a><form><input type='text' class='wei_pingcon'><input type='button' value='评论' onclick='ping(this)' class='wei_pinglun'></form></div>");
			obj.parent().parent().next().after('<div class="weibo_gengduo" style="display:block"><a href="javascript:;">查看更多 > </a></div>');

			obj.parent().parent().next().slideDown();
		},"json");
	}else{
		$(obj).parent().parent().next().slideUp();
		$(obj).parent().parent().next().empty();
		$(obj).parent().parent().next().next().remove();
		$(obj).removeAttr('pre');
	}
}

// 回复==查看回复========================
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
		if(data['portrait'] == 'default.jpg'){
			photo = '<img width="30" height="30" src="/homes/images/tou.png">';
		}else{
			var photo = '<img width="30" height="30"  src="http://p2l4kajri.bkt.clouddn.com/'+data['portrait']+'" >';
		}

		$(ping).prev().val('');

		// $(ping).parent().next().after();
		$(ping).parent().parent().after('<div class="WB_ping"><div class="WB_ping_one"><a href="javascript:;">'+photo+'</a><ul class="WB_ping_oneul"><li><a href="/user/user">'+data["nickname"]+'</a>：'+data["content"]+'</li><li><span>刚刚</span><span class="WB_ping_onespan"><a href="javascript:;">举报</a><a href="javascript:;">屏蔽</a><a class="" href="javascript:;">回复</a><input class="wid" type="hidden" value=' +data["wid"]+ '><input class="fid" type="hidden" value=' +data["id"]+ '> </span></li></ul></div></div>'+'<div class="WB_ping_two" style="display:block"><form><input type="text" class="wei_hui"><input type="button" onclick="huifu(this)" value="回复" class="wei_huifu"></form></div>');
		//alert($(ping).parent().parent().parent().prev().find('span').html());

		var com = $(ping).parent().parent().parent().prev().find('.Ping>span').html();
		var newcom = parseInt(com)+1;
		$(ping).parent().parent().parent().prev().find('.Ping>span').html(newcom);
	},"json");
}

//追加回复============
function huifu(huifu){
	//找到被评论微博的id
	var wid = $(huifu).parent().parent().parent().parent().parent().find('input[type=hidden]:first').val();
	console.log(wid);
	var fid = $(huifu).parent().parent().parent().find('input[type=hidden]:last').val();
	// $(huifu).parent().parent().parent().next().css('display','block');
	$.get('/index/huifu',{hcont:$(huifu).prev().val(),fid:fid,wid:wid},function (msg){
		msg = eval("(" + msg + ")");
		if(msg){
			$(huifu).parent().parent().after("<div class='WB_ping_three'><ul class='WB_ping_three_ul'><li><a href='javascript:;'>"+msg['nickname']+"</a>:"+msg['content']+"</li><li><span>今天 11:11</span><span class='WB_ping_onespan'><a href='javascript:;'>举报</a><a href='javascript:;'>屏蔽</a></span></li></ul></div>");
		}
	})
	$(huifu).prev().val('');
}


//举报==============
function report(report){
	var id = $(report).parent().find('input[type=hidden]').val();
	//alert(id);
	$.get('/index/report',{id:id},function (data){
		if(data == 'ok'){
			layer.alert('举报成功！');
		}
	})
}
	
//显示、隐藏举报，屏蔽
function xiangxia(obj){
	$(obj).next().show();
	$(obj).next().children().click(function(){
		$(obj).next().hide();
		return false;
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

<script type="text/javascript">

</script>

@endsection