@extends('admin.index')
@section('title','微博评论')
@section('zhuti')
<div class="mws-panel grid_6">
    <div class="mws-panel-header">
        <span>
            评论管理
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 10px;">
                            ID
                        </th>
                        <th style="width: 130px;">
                            评论人
                        </th>
                        <th style="width: 480px;">
                            评论内容
                        </th>
                        <th style="width: 150px;">
                            评论时间
                        </th>
                        <th style="width: 150px;">
                            查看回复
                        </th>
                        <th style="width: 50px;">
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
                        <td>
                            {{$v->nickname}}
                        </td>
                        <td>
                            {{$v->content}}
                        </td>
                        <td>
                            {{date('Y-m-d H:i:s',$v->comment_time)}}
                        </td>
                        <td>
                            <a href="/admin/comments/replay?fid={{$v->id}}" style="color:#333;" target="_black">查看回复</a>
                        </td>

                        <td>
                            <a class="delete" id="{{$v->id}}" wid="{{$v->wid}}" href="javascript:;" style="color:#333;" target="_black">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    </div>
</div>
<script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script type="text/javascript">

$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.delete').click(function(){
        // alert(12);
        var id = $(this).attr('id');
        var wid = $(this).attr('wid');
        var del = $(this).parent().parent();        

        layer.confirm('确定要删除此条评论吗？', {
            btn: ['删除','取消'] //按钮
        }, function(){

            $.post('/admin/comments/delping',{id:id,wid:wid,'_token':'{{csrf_token()}}'},function (data){
                if(data == '1'){
                    layer.msg('删除评论成功！', {icon: 1});
                    del.remove();
                }else{
                    layer.alert('删除评论失败！');
                }

            })

        });


    })
    

})

</script>
@stop

