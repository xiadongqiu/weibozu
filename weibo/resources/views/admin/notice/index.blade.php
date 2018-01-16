@extends('admin.index')
@section('title','公告列表')
@section('zhuti')
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>公告列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                        <div id="DataTables_Table_1_length" class="dataTables_length">
                        
                      </div>
                        <div class="dataTables_filter" id="DataTables_Table_1_filter">  
                        <label><button>搜索:</button> <input type="text" aria-controls="DataTables_Table_1"></label></div>
                        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                        <tr role="row">
                         <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">ID</th>
                            <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">公告标题</th>
                            <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 212px;">发布时间</th>
                            <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">公告内容</th>
                             <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">操作</th>
                        </tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($res as $k=>$v)
                        		<tr class="odd">
                        		<td class=" ">
                                    {{$v['id']}}      
                                </td>
                                    <td class=" sorting_1">
                                        {{$v['title']}}
                                    </td>
                                    <td class=" ">
                                        {{$v['content']}}
                                    </td>
                                    <td class=" ">
                                         {{date('Y-m-d H:i:s',time($v['announcement_time']))}}
                                    </td>
                                   <td class="">
                                   <a href="/admin/notice/create">
                                        <button class="layui-btn">增加</button>
                                    </a>
                                    <a href="/admin/notice/{{$v['id']}}/edit">
                                        <button class="layui-btn ">修改</button>
                                     </a>
                                       <button onclick=del({{$v['id']}},$(this)) type="button" class="btn btn-danger btn-small">删除</button>
                                    </td>
                                </tr>
                        @endforeach
        		</tbody>
        	</table>

        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
        <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">首页</a>
        <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">上一页</a>
        <span>
        	<a tabindex="0" class="paginate_active">1</a>
        	<a tabindex="0" class="paginate_button">2</a>
        	<a tabindex="0" class="paginate_button">3</a>
        	<a tabindex="0" class="paginate_button">4</a>
       	 	<a tabindex="0" class="paginate_button">5</a>
        </span>
        <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">下一页</a>
        <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">尾页</a>
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
                   $.post("{{url('/admin/notice')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}','id':id},function(data){   
                       
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
