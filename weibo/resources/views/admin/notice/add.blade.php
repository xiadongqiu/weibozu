@extends('admin.index')
@section('title','添加公告')
@section('zhuti')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-magic"></i>添加公告</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form action="/admin/notice" class="mws-form" novalidate="novalidate" method="POST"> 
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3k5ns514ltm5l1n81_0" style="display: block;">
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label">标题</label>
                                    <div class="mws-form-item">
                                        <input type="text" name="title" class="small">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">内容</label>
                                    <div class="mws-form-item">
                                        <textarea name="content" class="small"></textarea>
                                    </div>
                                </div>
                                
                            </fieldset>       
				             <div class="mws-button-row">
               				 {{csrf_field()}}
               			 <input type="submit" class="btn btn-default" value="添加">
            </div>
    </div>
@stop


@section('js')

@stop