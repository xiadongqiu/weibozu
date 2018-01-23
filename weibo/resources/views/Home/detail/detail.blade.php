@extends('home.public')
@section('title','详情')
@section('bootstrap',' ')
@section('content')
	
	<!-- 主体 -->
	<div style="height:100px;width:10px;"></div>
	<div class="det_cont">
		<div class="det_cont_left">
			<div class="weibo">
				<div class="weibo_d1">
					@if($res->portrait =='default.jpg')
					<img src="/homes/images/tou.png">
					@else
					<img src="http://p2l4kajri.bkt.clouddn.com/{{$res->portrait}}">
					@endif
					
				</div>
				<div class="weibo_d2">
					<a href="/user/user" class="wei_name">{{$res->nickname}}</a>
					<div class="wei_time">
                    @if(time()-$res->publish_time < 60)
                    <a href="javascript:;">{{ date('s',(time()-$res->publish_time)) }}秒前</a> 来自 微博 weibo.com</div>
                    @elseif(time()-$res->publish_time < 3600)
                    <a href="javascript:;">{{ date('i',(time()-$res->publish_time)) }}分钟前</a> 来自 微博 weibo.com</div>
                    @else
                    <a href="javascript:;">{{date('Y-m-d',$res->publish_time)}}</a>  来自 微博 weibo.com</div>
                    @endif
                   

					<div class="wei_cont">
						<p >{!! $res->content !!}</p>
						<ul class="wei_ul">
							@if( (json_decode($res->picture,true))[0] != '' )
                                @foreach(json_decode($res->picture,true) as $val)
                                <li><img src="http://p2l4kajri.bkt.clouddn.com/{{$val}}"></li>
                                @endforeach
                            @endif   

						</ul>
					</div>
				</div>
				<p style="clear:both"></p>
				<div class="wei_bottom">
					<ul>
						<li style="width:80px;"></li>
						<li><a href="javascript:;">转发</a><span>{{$res->transpond}}</span></li>
						<li onclick="Ping(this)" class="Ping">
							<input type="hidden" value="{{$res->id}}">
							<a href="javascript:;">评论</a><span>{{$res->comment}}</span>
						</li>
						<li onclick="zana(this)" class="zan" id="{{$res->uid}}">
							<input type="hidden" value="{{$res->id}}">
							<a href="javascript:;">赞</a><span>{{$res->like}}</span>
						</li>
					</ul>
				</div>
				<!-- 回复内容 -->
				<div class="wei_replay">
				</div>
			</div>
			<!-- 微博内容结束 -->
		</div>
		<div class="det_cont_right">

			<div class="det_cont_Rdiv" style="height:200px;">
				<span style="border-bottom: 1px solid #F2F2F5;">相关推荐</span>
				@if(count($data) == '0')
					<div class="wei_zan">
						<div>
							<p>暂无内容</p>
						</div>
					</div>
					<div class="clear"></div>
				@else
					@foreach($data as $k => $v)
					<div class="wei_zan">
						@if($v->portrait =='default.jpg')
						<img src="/homes/images/tou.png">
						@else
						<img src="http://p2l4kajri.bkt.clouddn.com/{{$v->portrait}}">
						@endif
						<div>
							<p><a href="/user/user/index?id={{$v->uid}}">{{$v->nickname}}</a></p>
							<p>{!! $v->content  !!}</p>
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
@endsection('content')