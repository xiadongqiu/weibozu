@extends('admin.index')
@section('title','添加链接')
@section('zhuti')

	<div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>添加友情链接</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form action="/admin/flink/" class="mws-form" method="post" enctype="multipart/form-data">
                <div class="mws-form-inline">

                    <div class="mws-form-row">
                        <label class="mws-form-label">连接名称</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="link_name" value="{{old('link_name')}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">连接描述</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="link_info" value="{{old('link_info')}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">链接地址</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="url" value="{{old('url')}}">
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">
                  {{csrf_field()}}
                    <input type="submit" class="btn" value="添加">

                </div>
            </form>
        </div>
    </div>
@stop
