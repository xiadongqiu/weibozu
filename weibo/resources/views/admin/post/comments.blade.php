@extends('admin.index')
@section('title','评论列表')
@section('zhuti')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            评论列表
        </span>
       
    </div>
     
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
          
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    搜索:
                    <input type="text" aria-controls="DataTables_Table_1">
                </label>
                <button style="height:25px;background:#444;border:1px solid #666;color:#fff;border-radius:3px;">
                <i class="icon-search"></i>
                </button>
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th 
                        style="width: 10px;">
                            ID
                        </th>
                       
                        <th 
                        style="width: 200px;">
                            评论/回复时间
                        </th>
                        <th 
                        style="width: 120px;">
                            评论/回复人
                        </th>
                        <th 
                        style="width: 120px;">
                            被评论/回复微博id
                        </th>
                       
                       
                        <th 
                        style="width: 123px;">
                            被回复人
                        </th>
                        <th  
                        style="width: 100px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($res as $k=>$v)
                    
                    <tr class="odd">
                        <td class="  sorting_1">
                          {{$v['id']}}
                        </td>
                        <td>
                            {{date('Y-m-d H:i:s',time($v['comment_time']))}}
                        </td>
                        <td>
                            {{$v['pid']}}
                        </td>
                       
                        <td>
                            {{$v['wid']}}
                        </td>
                        
                        @if($v['fid']==0)
                            <td>
                                --
                            </td>
                        @else
                            <td>
                              {{$v['fid']}}
                            </td>
                        @endif
                      
                        <td >
                            <a href="#" class="btn btn-small"><i title="查看详情" class="icon-search"></i></a>
                           
                            <a href="#" class="btn btn-small"><i title="删除" class="icon-trash"></i></a>
                            
                        </td>
                    </tr>
                @endforeach
               
                </tbody>
            </table>
            
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                <a tabindex="0" class="first paginate_button paginate_button_disabled"
                id="DataTables_Table_1_first">
                    First
                </a>
                <a tabindex="0" class="previous paginate_button paginate_button_disabled"
                id="DataTables_Table_1_previous">
                    Previous
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
                    Next
                </a>
                <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">
                    Last
                </a>
            </div>
        </div>
    </div>
</div>
@stop

