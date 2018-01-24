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
                    <form action="/admin/post/search/p" method="get">
                        用户：<input type="text" name="nickname" aria-controls="DataTables_Table_1">
                        <input type="submit" style="height:25px;background:#444;border:1px solid #333;color:#fff;border-radius:3px;" value="搜索">
                    </form>
                </label>
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 10px;">
                            ID
                        </th>
                        <th style="width: 130px;">
                            发表人
                        </th>
                        <th style="width: 80px;">
                            内容
                        </th>
                        <th style="width: 50px;">
                            评论
                        </th>
                        <th style="width: 50px;">
                            点赞
                        </th>
                        <th style="width: 50px;">
                            转发
                        </th>
                        <th style="width: 50px;">
                            举报
                        </th>
                        <th style="width: 80px;">
                            类型
                        </th>
                        <th style="width: 150px;">
                            发布时间
                        </th>
                        <th style="width: 200px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">

                @foreach($data as $k=>$v)
                    
                    <tr class="odd" align="center">
                        <td>
                            {{$v->id}}
                        </td>
                        <td class="sorting_1">
                            {{$v->nickname}}
                        </td>
                        <td>
                            {!! $v->content !!}
                        </td>
                        <td>
                            {{$v->comment}}
                        </td>
                        <td>
                            {{$v->like}}
                        </td>
                        <td>
                            {{$v->transpond}}
                        </td>

                        <td>
                            {{$v->report}}
                        </td>
                        <td >
                             {{$v->type}}
                        </td>
                        <td >
                            {{date('Y-m-d H:i:s',time($v->publish_time))}}
                        </td>
                        <td >
                            <a href="/detail/{{$v->id}}" style="color:#333;" target="_black">微博</a>&nbsp;|&nbsp;
                            <a href="/admin/comments/comment?id={{$v->id}}" style="color:#333;" target="_black">查看评论</a>&nbsp;|&nbsp;
                            <a onclick="del({{$v['id']}},$(this))" style="cursor:pointer;color:#333;"><i class="icon-trash" title="删除"></i></a>
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
        ,content: '真的要删除第'+id+'条微博吗？'
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