@extends('admin.index')
@section('title','修改公告')
@section('zhuti')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-magic"></i>修改公告</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div class="wizard-nav wizard-nav-horizontal">
                       
                       </div>
                       <form action="/admin/notice/{{$res->id}}" class="mws-form" novalidate="novalidate" method="POST">
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1c3k5ns514ltm5l1n81_0" style="display: block;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label">标题</label>    
                                    <div class="mws-form-item">
                                        <input type="text" name="title" class="required large">
                                    </div>
                                </div>
                               
                                <div class="mws-form-row">
                                    <label class="mws-form-label">内容</label>
                                    <div class="mws-form-item">
                                        <textarea name="content"  class="required large"></textarea>
                                    </div>
                                </div>
                                
                            </fieldset>                  
                                
                         <div class="mws-button-row">
                        <input type="submit" onclick="changetext(this)" class="btn btn-default" value="保存">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                     </div>
                </div>
@stop

@section('js')

@stop