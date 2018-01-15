@extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span style="font-weight:bold;">
            <i class="icon-table">
            </i>
             - 举报列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
            </div>
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    <input type="text" aria-controls="DataTables_Table_1">
                    <button style="height:25px;background:#444;border:1px solid #666;color:#fff;border-radius:3px;"><i class="icon-search"></i></button>
                </label>
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 25px;">
                            Id
                        </th>
                        <th style="width: 150px;">
                            举报原因
                        </th>
                        <th style="width: 130px;">
                            举报人
                        </th>
                        <th style="width: 130px;">
                            微博作者
                        </th>
                        <th style="width: 50px;">
                            举报次数
                        </th>
                        <th style="width: 150px;">
                            举报时间
                        </th>
                        <th style="width: 120px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach ($res as $k => $val)
                    <tr class="even" align="center">
                        <td class="">
                            {{$val->id}}
                        </td>
                        <td class=" sorting_1">
                            {{$val->content}}
                        </td>
                        <td class="">
                            {{$val->jid}}
                        </td>
                        <td class=" ">
                            {{$val->uid}}
                        </td>
                        <td class=" ">
                            {{$val->report}}
                        </td>
                        <td class=" ">
                           {{date('Y-m-d H:i:s',$val->report_time)}}
                        </td>
                        <td class=" ">
                            <a href="/admin/user/{{$val->id}}/edit" style="color:#333;">查看</a>&nbsp;&nbsp;&nbsp;
                            <a href="" style="color:#333;font-size:15px;"><i class="icon-trash" title="删除"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                共{{$res->total()}}条&nbsp;&nbsp;&nbsp;10条/页
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                <a href="{{$res->url($res->hasMorePages())}}" tabindex="0" class="first paginate_button"
                id="DataTables_Table_1_first">
                    首页
                </a>
                <a href="{{$res->previousPageUrl()}}" tabindex="0" class="previous paginate_button"
                id="DataTables_Table_1_previous">
                    上一页
                </a>
                <span>
                @for($i=1;$i<=$res->lastPage();$i++)
                @if($i==$res->currentPage())
                <a href="{{$res->url($i)}}" tabindex="0" class="paginate_active">{{$i}}</a>
                @else
                <a href="{{$res->url($i)}}" tabindex="0" class="paginate_button">{{$i}}</a>
                @endif
                @endfor
                </span>
                <a href="{{$res->nextPageUrl()}}" tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">
                    下一页
                </a>
                <a href="{{$res->url($res->lastPage())}}" tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">
                    尾页
                </a>
            </div>
        </div>
    </div>
</div>  
@stop
@section('title','微博-举报')