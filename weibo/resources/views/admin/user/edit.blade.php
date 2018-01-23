@extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_6">
    <div class="mws-panel-header">
        <span style="font-weight:bold;">
            个人信息
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="" method="post" id="form">
        {{ method_field('PUT') }}
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
                        <input type="hidden" class="small" name="uid" value="{{$res->uid}}">
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
                        <input type="radio" class="mini" name="sexual" value="男" {{ ($res->sexual == '男') ? 'checked' : '' }}> 男&nbsp;&nbsp;&nbsp;
                        <input type="radio" class="mini" name="sexual" value="女" {{ ($res->sexual == '女') ? 'checked' : '' }}> 女
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
                        <textarea rows=""  name="abstract" class="large">{{$res->abstract}}</textarea>
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
           
            <div class="mws-button-row">
                <input type="button" id="edit" value="修改" class="btn btn-danger">
            </div>
        </form>
    </div>
    </div>
 
@stop
@section('title','微博-用户')
@section('js')
<script type='text/javascript'>
$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
    $('#edit').click(function(){
    	var formData = new FormData($( "#form" )[0]);
    	
    	$.ajax({
                type: "post",
                dataType: "json",
                url: "/admin/user/{{$res->id}}",
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if(data == 1){
                        layer.msg('修改成功！');
                    }else if(data == 2){
                        layer.msg('未做任何修改！');
                    }else{
                    	layer.msg('修改失败，请稍后从试！');
                    }
                }


            });
    })
</script>
@stop