@extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span style="font-weight:bold;">
            <i class="icon-table">
            </i>
             - 用户列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
                <a href="" style="color:#333;font-weight:bold;line-height:30px;">
                    <i class="icon-plus-sign"></i>
                    添加用户
                </a>
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
                        <th style="width: 130px;">
                            昵称
                        </th>
                        <th style="width: 170px;">
                            账号
                        </th>
                        <th style="width: 50px;">
                            状态
                        </th>
                        <th style="width: 70px;">
                            权限
                        </th>
                        <th style="width: 120px;">
                            最后登录
                        </th>
                        <th style="width: 200px;">
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
                        <td class="">
                           {{$val->detail->nickname}}
                        </td>
                        <td class=" sorting_1">
                            {{$val->phone}}
                        </td>
                        <td class=" ">
                            {{$status[$val->status]}}
                        </td>
                        <td class=" ">
                            {{$auth[$val->auth]}}
                        </td>
                        <td class=" ">
                            {{date('Y-m-d H:i:s',$val->lastlogin_time)}}
                        </td>
                        <td class=" ">
                            @if ($val['auth']<=1)
                                <a href="" style="color:#333;"><i class="icon-cog-3"></i>管理</a>
                            @else
                                <i class="icon-cog-2"></i>管理
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                共100条   10/页
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                <a tabindex="0" class="first paginate_button paginate_button_disabled"
                id="DataTables_Table_1_first">
                    首页
                </a>
                <a tabindex="0" class="previous paginate_button paginate_button_disabled"
                id="DataTables_Table_1_previous">
                    上一页
                </a>
                <span>
                    <a tabindex="0" class="paginate_active">
                        1
                    </a>
                    <a tabindex="0" class="paginate_button">
                        2
                    </a>
                    <a tabindex="0" class="paginate_button">
                        3
                    </a>
                    <a tabindex="0" class="paginate_button">
                        4
                    </a>
                    <a tabindex="0" class="paginate_button">
                        5
                    </a>
                </span>
                <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">
                    下一页
                </a>
                <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">
                    尾页
                </a>
            </div>
        </div>
    </div>
</div>  
@stop
@section('title','微博-用户')