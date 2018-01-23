@extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span style="font-weight:bold;">
            <i class="icon-table">
            </i>
             举报列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 25px;">
                            Id
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
                @foreach ($data as $k => $val)
                    <tr class="even" align="center">
                        <td class="">
                            {{$val->id}}
                        </td>
                        <td class="sorting_1">
                            {{$val->detail->nickname}}
                        </td>
                        <td class=" ">
                            {{$val->report}}
                        </td>
                        <td class=" ">
                           {{date('Y-m-d H:i:s',$val->report_time)}}
                        </td>
                        <td class=" ">
                            <a href="/detail/{{$val->wid}}" style="color:#333;" target="_black">查看微博</a>&nbsp;&nbsp;&nbsp;
                            <a onclick="del({{$val->wid}},$(this))" style="cursor:pointer;color:#333;">删除微博</a>&nbsp;&nbsp;&nbsp;
                            <a onclick="dele({{$val->id}},$(this))" style="cursor:pointer;color:#333;"><i class="icon-trash" title="删除"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                共{{$data->total()}}条&nbsp;&nbsp;&nbsp;10条/页
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
               {!! $data->appends($request)->render() !!}
            </div>
        </div>
    </div>
</div>  
@stop
@section('js')
<script type="text/javascript">
  function del(id,obj){
       
            layer.open({
                title:'删除提示！'
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
    function dele(id,obj){
       
            layer.open({
                title:'删除提示！'
                ,content: '真的要删除第'+id+'条吗？'
                ,btn: ['删除', '取消']
                ,yes: function(index,layero){
                  //按钮【删除】的回调
                  layer.close(index);
                  layer.load(1);
                //   location.reload();
                   $.post("{{url('/admin/report')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}','id':id},function(data){   
                       
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
@section('title','微博举报')