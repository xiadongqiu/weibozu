@extends('admin.index')
@section('title','广告管理')
@section('zhuti')
<div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>广告修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form action="/admin/advert/{{$data->id}}" class="mws-form" method="post" enctype="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        {{csrf_field()}}
                        {{ method_field('put') }}
                        <label class="mws-form-label">广告名称</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="advertising" value="{{$data->advertising}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                            <label class="mws-form-label">广告内容</label>
                            <div class="mws-form-item">
                            <textarea name="content" class="small">{{$data->content}}</textarea>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <div style="padding-bottom: 10px;">广告图片</div>
                        <div>
                            <input type="file" readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected..." name="picture">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">广告地址</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="url" value="{{$data->url}}" >
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">广告状态</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline">
                                <li><input type="radio" name="status" {{$data->status == 0 ?'checked':''}}  value="0" ><label>上线</label></li>
                                <li><input type="radio" name="status" {{$data->status == 1 ?'checked':''}} value="1" ><label>下线</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">

                    <input type="submit" class="btn btn-default" value="确认修改">
                </div>
            </form>
        </div>
    </div>

@endsection
