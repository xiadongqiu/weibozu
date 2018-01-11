@extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_6" style="margin:0 5%;">
    <div class="mws-panel-header">
        <span style="font-weight:bold;">
            个人信息
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="">
            <fieldset class="mws-form-inline">
                <legend style="font-weight:bold;">
                        修改信息
                </legend>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">
                        账号：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="small" readonly="readonly" value="{{$res->user->phone}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        昵称：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="nickname" value="{{$res->nickname}}">
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        真实姓名：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="mini" name="name" value="{{$res->name}}">
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        性别：
                    </label>
                    <div class="mws-form-item">
                        <input type="radio" class="mini" name="sex" checked> 男&nbsp;&nbsp;&nbsp;
                        <input type="radio" class="mini" name="sex"> 女
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        年龄：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="xlarge" name="age" value="{{$res->age}}">
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        生日：
                    </label>
                    <div class="mws-form-item">
                        <div class="birthday">
                            <select name="year" id="year" onchange="getDays()"></select>
                            <select name="month" id="month" onchange="getDays()"></select>
                            <select name="day" id="day"></select>
                        </div>
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        qq：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="qq" value="{{$res->qq}}">
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        邮箱：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="email" value="{{$res->email}}">
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        个人域名：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="domainname" value="{{$res->domainname}}">
                    </div>                   
                </div>
                <div class="mws-form-row">
                <label class="mws-form-label">
                        简介：
                    </label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" name="abstract" class="large">
                        </textarea>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                            身份：
                    </label>
                    <div class="mws-form-item">
                        <select class="xsmall" id="auth" name="auth">
                        @if ($res->user->auth < 2)
                            <option value="0" {{ ($res->user->auth == 0) ? 'selected' : '' }}>
                                用户
                            </option>
                            <option value="1" {{ ($res->user->auth == 1) ? 'selected' : '' }}>
                                管理员
                            </option>
                        @else
                            <option value="2" selected>
                                超级管理员
                            </option>
                        @endif
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                            账号状态：
                    </label>
                    <div class="mws-form-item">
                        <select class="xsmall" id="status" name="status" rel="tooltip" data-placement="right"
                        data-original-title="开启-允许登录 / 关闭-禁止登录">
                            <option value="0" {{ ($res->user->status == 0) ? 'selected' : '' }}>
                                开启
                            </option>
                            <option value="1" {{ ($res->user->status == 1) ? 'selected' : '' }}>
                                关闭
                            </option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">
                        Dropdown List
                    </label>
                    <div class="mws-form-item">
                        <select class="large">
                            <option>
                                Option 1
                            </option>
                            <option>
                                Option 3
                            </option>
                            <option>
                                Option 4
                            </option>
                            <option>
                                Option 5
                            </option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <div class="mws-button-row">
                <input type="submit" value="Submit" class="btn btn-danger">
                <input type="reset" value="Reset" class="btn ">
            </div>
        </form>
    </div>
    </div>
 
@stop
@section('title','微博-用户')
@section('js')
<script type='text/javascript'>
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
    $('#alter').click(function(){
    	$.post('/admin/user/{{$res->id}}',{auth:$('#auth').val(),status:$('#status').val(),'_token':'{{csrf_token()}}'},function(data){

    	});
    })
</script>
@stop