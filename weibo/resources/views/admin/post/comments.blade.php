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
                       
                        <th 
                        style="width: 50px;">
                            被评论微博id
                        </th>
                        <th 
                        style="width: 50px;">
                            被回复评论id
                        </th>
                       
                        <th 
                        style="width: 100px;">
                            评论/回复人
                        </th>
                        <th  
                        style="width: 200px;">
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
                            {{$v['wid']}}
                        </td>
                        
                        <td>
                            {{$v['fid'] ? $v['fid'] :'--'}}
                        </td>
                      
                        <td>
                            {{$v['nickname']}}
                        </td>
                        <td >
                            <button type="button" class="btn btn-primary btn-small">详情</button>
                            <button onclick=del({{$v['id']}},$(this)) type="button" class="btn btn-danger btn-small">删除</button>
                            
                            
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
       
            layer.open({
                title:'删除提示'
                ,content: '真的要删除第'+id+'条吗？'
                ,btn: ['删除', '取消']
                ,yes: function(index,layero){
                  //按钮【删除】的回调
                  layer.close(index);
                  layer.load(1);
                //   location.reload();
                   $.post("{{url('/admin/post')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}','id':id},function(data){   
                       
                        if(data == 1){
                            layer.msg('删除成功', {icon: 1});
                            location.reload();
                            } else if (data ==0){
                            layer.msg('删除失败', {icon: 2});
                            location.reload();
                            
                            } 
                            
                    });
                }
                ,no: function(index, layero){
                  //按钮【取消】的回调
                 
                }
              });              
       
     
    };
</script>
@stop

