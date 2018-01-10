@extends('admin.index')
@section('title','微博列表')
@section('zhuti')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            微博列表
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
                        style="width: 50px;">
                            类型
                        </th>
                        <th 
                        style="width: 120px;">
                            收藏次数
                        </th>
                        <th 
                        style="width: 120px;">
                            点赞次数
                        </th>
                        <th
                        style="width: 100px;">
                            评论次数
                        </th>
                       
                        <th 
                        style="width: 123px;">
                            发表时间
                        </th>
                        <th 
                        style="width: 50px;">
                            状态
                        </th>
                        <th 
                        style="width: 110px;">
                            举报次数
                        </th>
                        <th 
                        style="width: 50px;">
                            热门
                        </th>
                        <th 
                        style="width: 120px;">
                            转发次数
                        </th>
                        <th 
                        style="width: 100px;">
                            发表人
                        </th>
                        <th  
                        style="width: 100px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">

                @foreach($data as $k=>$v)
                    
                    <tr class="odd">
                        <td class="  sorting_1">
                          {{$v['id']}}
                        </td>
                        <td>
                            {{$v['type']}}
                        </td>
                        <td>
                            {{$v['collect']}}
                        </td>
                       
                        <td>
                            {{$v['comment']}}
                        </td>
                        <td>
                            {{$v['transpond']}}
                        </td>
                        <td>
                            {{date('Y-m-d H:i:s',time($v['publish_time']))}}
                        </td>
                        
                        @if($v['status']==0)
                        <td >
                            显示    
                        </td>
                        @else
                        <td >
                            已屏蔽   
                        </td>
                        @endif
                        <td >
                            {{$v['report']}}
                        </td>

                       <td>
                            {{$v->hot ? '热门' : '默认'}}
                       </td>
                        <td >
                            {{$v['like']}}
                        </td>
                        <td >
                            {{$v->detail->nickname}}
                        </td>
                        <td >
                            <a href="#" class="btn btn-small"><i title="查看详情" class="icon-search"></i></a>
                       
                               
                            <a onclick=del({{$v['id']}},$(this)) class="btn btn-small"><i title="删除" class="icon-trash"></i></a>
                       
                            
                         
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

@section('js')
<script type="text/javascript">
   function del(id,obj){
        $.post("{{url('/admin/post')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}','id':id},function(data){   
           if(data == 1){
               alert('删除成功');
           } else if (data ==0){
               alert('删除失败');
           }
                
        });
     
    };
</script>
@stop