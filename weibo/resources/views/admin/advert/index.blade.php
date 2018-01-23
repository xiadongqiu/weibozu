  @extends('admin.index')
  @section('title','广告列表')
@section('zhuti')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            广告列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

            <form action="/admin/advert" method="get" class="">

                
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        关键字:
                        <input type="text" name="search" value="" aria-controls="DataTables_Table_1" >
                    </label>
                        <button class="btn btn-default">搜索</button>
                </div>

            </form>

            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                        <tr role="row">
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 200px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                ID
                            </th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 280px;" aria-label="Browser: activate to sort column ascending">
                                广告名称
                            </th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 280px;" aria-label="Browser: activate to sort column ascending">
                                广告内容
                            </th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 200px;" aria-label="Platform(s): activate to sort column ascending">
                                广告图片
                            </th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 200px;" aria-label="Engine version: activate to sort column ascending">
                                广告地址
                            </th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="Engine version: activate to sort column ascending">
                                广告状态
                            </th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 250px;" aria-label="CSS grade: activate to sort column ascending">
                                操作
                            </th>
                        </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($data as $k=>$v)
                        <tr class="even" id="">

                                    <td class=" ">
                                        <center>{{$v->id}}</center>
                                    </td>
                                    <td class=" ">
                                        <center>{{$v->advertising}}</center>
                                    </td>
                                    <td class=" ">
                                        <center>{{$v->content}}</center>
                                    </td>
                                    <td class=" ">
                                        <center>{{$v->picture}}<img src="#" style="width:100px;" id="img" >
                                        </center>
                                    </td>
                                    
                                    <td class=" ">
                                        <center>{{$v->url}}</center>
                                    </td>
                                    
                                    <td class=" ">
                                        <center>

                        
                                        </center>
                                    </td>        

                                    <td class=" ">
                                        <center>

                                            <a href="/admin/advert/{{$v->id}}/edit">
                                            <input type="submit" class="btn btn-default" value="修改"></a>
                                            <button class="btn btn-default" id="content{{$v->id}}"  onclick="advert_status({{$v->id}})">{{$v->status== 1 ? '广告上架':'广告下架'}}</button>
                                             
                                            <button class="btn btn-default" onclick="advert_delete({{$v->id}})">删除</button>
                                        </center>
                                    </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
             <div class="dataTables_info" id="DataTables_Table_1_info">
                共{{$data->total()}}条&nbsp;&nbsp;&nbsp;5条/页
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
               {!! $data->appends($request)->render() !!}
            </div>


            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
 
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script type="text/javascript">
        //删除广告
        function advert_delete(id){

            layer.confirm('您确定要删除此广告吗？', {
                  btn: ['确定','取消'] //按钮
                }, function(){

                    $.ajax({
                    type: "post",
                    url: "/admin/advert/"+id,
                    data: {id:id,_token:'{{csrf_token()}}',_method:'delete'},
                    beforeSend:function(){
                        //加载样式
                        a = layer.load(0, {shade: false});
                      },
                    success: function(data) {

                        //关闭加载样式
                        layer.close(a)

                        //移除标签
                        $('#advert'+id).remove();

                        layer.msg('广告删除成功:)', {icon: 1});
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                        layer.msg("广告删除失败，请检查网络后重试", {icon:2 ,})
                    }
                });

                }, function(){

                });
        }
    </script>
@endsection