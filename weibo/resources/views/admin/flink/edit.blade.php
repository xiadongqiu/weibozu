@extends('admin.index')
@section('title','修改链接')
@section('zhuti')
	<div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>友情链接修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form action="/admin/flink/{{ $res->id }}" class="mws-form" method="post" enctype="multipart/form-data">
                <div class="mws-form-inline">

                    <div class="mws-form-row">
                        <label class="mws-form-label">连接名称</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="link_name" value="{{ $res->link_name }}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">连接描述</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="link_info" value="{{ $res->link_info }}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">链接地址</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="url" value="{{ $res->url }}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">友情链接状态</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline">
                                <li><input type="radio" name="status" value="0" @if ( $res->status == 0 ) checked @endif > <label>上线</label></li>
                                <li><input type="radio" name="status" value="1" @if ( $res->status == 1 ) checked @endif > <label>下线</label></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="mws-button-row">

                    {{csrf_field()}}

                    {{method_field('PUT')}}

                    <input type="submit" class="btn btn-default" value="修改">

                </div>
            </form>
        </div>
    </div>
@stop