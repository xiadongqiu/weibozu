  @extends('admin.index')
  @section('title','网站配置')
@section('zhuti')
 <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>网站配置修改</span>
    </div>
    <div class="mws-panel-body no-padding">

        <form action="/admin/config/ste" class="mws-form" method="POST">
            <div class="mws-form-block">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="webname" value="{{$config->webname}}">
                    </div>
                </div>
 
                <div class="mws-form-row">
                            <label class="mws-form-label">广告内容</label>
                            <div class="mws-form-item">
                            <textarea name="content" class="small" >{{$config->content}}</textarea>
                        </div>
                    </div>
               
                 <div class="mws-form-row">
                    <label class="mws-form-label">网站关键字</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="keyword" value="{{$config->keyword}}">
                    </div>
                </div>
                <div class="mws-form-row" style="width:150px">
                    <label class="mws-form-label">网站LOGO</label>
                    <div class="mws-form-item">
                        <input type="file" name="logo" size="18" />
                        <img src="{{ ltrim($config->logo,'.') }}">
                    </div>
            </div>
             <div class="mws-form-row">
                    <label class="mws-form-label">网站版权</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="copyright" value="{{$config->copyright}}">
                    </div>
                </div>
             <div class="mws-form-row">
                    <label class="mws-form-label">状态：
                    <select name="status" id="level" value="{{$config->status}}">
                     <option value="1" <?=$config['status']==1 ? 'selected' : '';?>>&nbsp;&nbsp;开启</option>
                    <option value="2" <?=$config['status']==0 ? 'selected' : '';?> >&nbsp;&nbsp;关闭</option>
                 </select>
                 </label>
                </div>
            
            <div class="mws-button-row">
            {{csrf_field()}}
                <input type="submit" class="form-control btn btn-success" value="修改">
                
            </div>
        </form>
    </div>
</div>
@stop


@section('js')

<script type="text/javascript">
     // alert($);
    
   
</script>

@endsection