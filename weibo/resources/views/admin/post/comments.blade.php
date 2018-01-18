@extends('admin.index')
@section('title','微博评论')
@section('zhuti')
<div class="mws-panel grid_6">
    <div class="mws-panel-header">
        <span>
            评论管理
        </span>
    </div>
    <div class="mws-panel-body">
    @foreach($data as $k => $v)
        <div>
        @if($v->fid == 0)
            <p>{{$v->nickname}}评论：{{$v->content}}
            <br>{{$v->comment_time}}&nbsp;&nbsp;&nbsp;<a style="cursor:pointer;color:#333;"><i class="icon-trash" title="删除"></i></a></p>
            <p style="margin-left:50%;">谁谁回复{{$v->nickname}}：{{$v->content}}
            <br>2018-1-1 12:22:22&nbsp;&nbsp;&nbsp;<a style="cursor:pointer;color:#333;"><i class="icon-trash" title="删除"></i></a></p>
        @endif
        </div>
        <div style="clear:both"><hr /></div>
    @endforeach
    </div>
</div>
@stop

