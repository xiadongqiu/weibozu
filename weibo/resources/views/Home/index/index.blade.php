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

		<!-- 编辑器开始 -->
		<div class="con_center">
			<div class="conC_one" style="height:200px">
				<div class="row" id="edit_form" >
					<span class="pull-left" style="margin:15px;font-size: 14px;color: #666;float: left;">编写新鲜事</span>
					<span class="tips pull-right" style="margin:15px;font-size: 14px;color: #666;float: right;"></span>
					<form role="form" style="margin-top: 50px;">
						<div contentEditable="true" id="content" ></div>
						<div style="margin-top: 12px;margin-left:15px;">
							<span class="emoji" >表情</span>
							<span class="pic" >图片	</span>
							<select id="WB_type">
								<option>　---默认---</option>
								<option>　---原创---</option>
								<option>　---搞笑---</option>
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
					</form>
				</div>
			</div>
		<!-- 编辑器结束 -->

			<div class="conC_two">
				<ul>
					<li>全部</li>
					<li>类型1</li>
					<li>类型2</li>
				</ul>
			</div>
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
			

		</div>


		<div class="con_right">
			<div class="conR_one">
				<div class="conR_bg"></div>
				<div class="conR_pic"><img src="./Homes/images/tou.png"></div>
				<div class="conR_name"><a class="name" href="#">用户名</a>&nbsp;&nbsp;<a href="#" class="level">LV14</a></div>
				<ul class="conR_ul">
					<li><a href="#">
						<b>122</b>
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

<script type="text/javascript" src="/Homes/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript">
	$(function(){

		 $("#content").keyup(function(){

			//判断输入的字符串长度
			var content_len = $("#content").text().replace(/\s/g,"").length;

			$(".tips").text("已经输入"+content_len+"个字");
			
	   
			if(content_len==0){
				// alert(content);
				$(".tips").text("");
				$("#send").addClass("disabled");
				return false;
			}else{
				$("#send").removeClass("disabled");
			}
		 });

		 
			$(".pic").click(function(){
				
				$(".select_Img").click();  	
				

			})

			/*function confirm(){
			
				var r= new FileReader();
					f=$(".select_Img").files[0];
					r.readAsDataURL(f);
					r.onload=function(e) {
						$(".preview").src=this.result;

					};
			}*/
		
		//点击按钮发送内容
		 $("#send").click(function(){

			// var myDate = new Date();

		  //   var min = myDate.getMinutes();

		  //   var time = min-(min-1);

		  //   //alert(time);

			var content=$("#content").html();

			//判断选择的是否是图片格式		 
			var imgPath = $(".imgPath").text();
			var start  = imgPath.lastIndexOf(".");
			var postfix = imgPath.substring(start,imgPath.length).toUpperCase();
			

			if(imgPath!=""){

				if(postfix!=".PNG"&&postfix!=".JPG"&&postfix!=".GIF"&&postfix!=".JPEG"){
						alert("图片格式需为png,gif,jpeg,jpg格式");
				}else{
					$(".item_msg").prepend("<div class='col-sm-12 col-xs-12 message' > <img src='img/icon.png' class='col-sm-2 col-xs-2' style='border-radius: 50%'><div class='col-sm-10 col-xs-10'><span style='font-weight: bold;''>Jack.C</span> <br><small class='date' style='color:#999'>刚刚</small><div class='msg_content'>"+content+"<img class='mypic' onerror='this.src='img/bg_1.jpg' src='file:///"+imgPath+"' ></div></div></div>");
				}
			}else{
				 $(".item_msg").prepend("<div class='col-sm-12 col-xs-12 message' > <img src='img/icon.png' class='col-sm-2 col-xs-2' style='border-radius: 50%'><div class='col-sm-10 col-xs-10'><span style='font-weight: bold;''>Jack.C</span> <br><small class='date' style='color:#999'>刚刚</small><div class='msg_content'>"+content+"</div></div></div>");
			}
								
		 });

		  //添加表情包1
		  for (var i = 1; i < 60; i++) {

				$(".emoji_1").append("<img src='/Homes/img/f"+i+".png' style='width:26px;height:26px' >");
			}
			//添加表情包2
			for (var i = 1; i < 61; i++) {

				$(".emoji_2").append("<img src='/Homes/img/h"+i+".png' style='width:26px;height:26px' >");
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
			
			//放大或缩小预览图片
			$(".mypic").click(function(){
				var oWidth=$(this).width(); //取得图片的实际宽度  
				var oHeight=$(this).height(); //取得图片的实际高度  
			  
				if($(this).height()!=200){
					$(this).height(200); 
				}else{
					$(this).height(oHeight + 200/oWidth*oHeight); 
					
				}
							
			})
			
	})
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