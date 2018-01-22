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
		$(ping).parent().parent().after('<div class="WB_ping"><div class="WB_ping_one"><a href="javascript:;">'+photo+'</a><ul class="WB_ping_oneul"><li><a href="javascript:;">'+data["nickname"]+'</a>：'+data["content"]+'</li><li><span>刚刚</span><span class="WB_ping_onespan"><a href="javascript:;">举报</a><a href="javascript:;">屏蔽</a><a class="" href="javascript:;">回复</a><input class="wid" type="hidden" value=' +data["wid"]+ '><input class="fid" type="hidden" value=' +data["id"]+ '> </span></li></ul></div></div>'+'<div class="WB_ping_two" style="display:block"><form><input type="text" class="wei_hui"><input type="button" onclick="huifu(this)" value="回复" class="wei_huifu"></form></div>');
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


//的查看详情
function xiang(obj){
	var id = $(obj).find('input[type=hidden]').val();
	// alert(id);
}