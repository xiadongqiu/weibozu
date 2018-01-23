@extends('admin.index')
@section('title','友情链接')
@section('zhuti')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            友情链接列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
         <div class="dataTables_filter" id="DataTables_Table_1_filter">
                          <label>
            <form action="/admin/flink/search/t" method="get">
                友情链接：<input type="text" name="link_name" aria-controls="DataTables_Table_1">
                 <input type="submit" style="height:25px;background:#444;border:1px solid #333;color:#fff;border-radius:3px;" value="搜索">
            </form>
                </label>
                </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                    <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            ID
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            链接名称
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 300px;" aria-label="Browser: activate to sort column ascending">
                            链接地址
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 300px;" aria-label="Platform(s): activate to sort column ascending">
                            发布时间
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            链接描述
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-label="Engine version: activate to sort column ascending">
                            链接状态
                        </th>
                        
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                </thead>

                 <tbody role="alert" aria-live="polite" aria-relevant="all">
                 @foreach ($data as $k => $v)
                        <tr class="even" id="flink{{$v->id}}">
                        	<td class=" ">
                                <center>{{$v->id}}</center>
                            </td>
                            <td class=" ">
                                <center>{{$v->link_name}}</center>
                            </td>
                            <td class=" ">
                                <center>{{$v->url}}</center>
                            </td>
                            <td class=" ">
                                <center>{{date('Y年m月d日 H:i:s',$v->publish_time)}}</center>
                            </td>
                            <td class=" ">
                                <center>{{$v->link_info}}</center>
                            </td>
                            <td class=" ">
                                <center>{{$v->status == 0 ? "上线" : "下线"}}</center>
                            </td>
                            <td class=" ">
                                <center>
                                    <a href="/admin/flink/{{$v->id}}/edit">
                                        <input type="submit" class="btn btn-default" value="修改"/>
                                    </a>
                                        <button class="btn btn-default" onclick="flink_delete({{$v->id}})">删除</button>
                                </center>

                            </td>
                        </tr>
                    @endforeach

                </tbody> 

                </table>
                 <div class="dataTables_info" id="DataTables_Table_1_info">
                共{{$data->total()}}条&nbsp;&nbsp;&nbsp;3条/页
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
               {!! $data->appends($request)->render() !!}
            </div>

                <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

                  

                </div>
        </div>
    </div>
</div>

@stop

@section('js')
     <script type="text/javascript">

            function flink_delete(id){

                layer.confirm('您确定要删除此链接吗？', {
                  btn: ['确定','取消'] //按钮
              },function(){
                 $.ajax({
                    type: "post",
                    url: "/admin/flink/"+id,
                    data: {id:id,_token:'{{csrf_token()}}',_method:'delete'},

                    beforeSend:function(){
                        //加载样式
                        a = layer.load(0, {shade: false});
                      },
                    success: function(data) {

                        //关闭加载样式
                        layer.close(a)

                        //移除标签
                        $('#flink'+id).remove();

                        layer.msg('链接删除成功:)', {icon: 1});
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        layer.msg("链接删除失败，请检查网络后重试", {icon:2 ,})
                    }
                });

                },function(){

            });
        }

            </script>

@endsection
