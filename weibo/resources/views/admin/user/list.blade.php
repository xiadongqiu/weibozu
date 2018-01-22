 @extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
             用户列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
                <!--  -->
            </div>
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>

                    <form action="/admin/user/search/u" method="get">
                        账号：<input type="text" name="phone" aria-controls="DataTables_Table_1">
                        <input type="submit" style="height:25px;background:#444;border:1px solid #333;color:#fff;border-radius:3px;" value="搜索">
                    </form>
                </label>
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 30px;">
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
                        <th style="width: 80px;">
                            注册时间
                        </th>
                        <th style="width: 130px;">
                            最后登录
                        </th>
                        <th style="width: 80px;">
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
                            {{date('Y-m-d',$val->detail->registertime)}}
                        </td>
                        <td class=" ">
                            {{date('Y-m-d H:i:s',$val->lastlogin_time)}}
                        </td>
                        <td class=" ">
                            <a href="/admin/user/{{$val->id}}/edit" style="color:#333;font-size:15px;"><i class="icon-edit" title="编辑"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="javascript:;" onclick="delu(this)" id="{{$val->id}}" style="color:#333;font-size:15px;"><i class="icon-trash" title="删除"></i></a>
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
    <script type="text/javascript">
        function delu(obj){
            layer.confirm('确定要删除该用户吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("/admin/user/"+$(obj).attr('id'),{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                        layer.msg('123');
                });

            });
        }

    </script>
@stop
@section('title','微博用户')