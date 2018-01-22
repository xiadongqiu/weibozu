  @extends('admin.index')
  @section('title','网站配置')
@section('zhuti')
 <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>网站配置修改</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form action="admin/config/update" class="mws-form" method="POST">
            <div class="mws-form-block">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="webname" value="{{$config->webname}}">
                    </div>
                </div>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">网站内容</label>
                    <div class="mws-form-item" >
                        <input type="text" style="height:100px;" class="small" name="content" value="{{$config->content}}">
                    </div>
                </div>
                
                 <div class="mws-form-row">
                    <label class="mws-form-label">网站关键字</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="keyword" value="{{$config->keyword}}">
                    </div>
                </div>
                <div class="mws-form-row" style="width:150px">
                    <label class="mws-form-label">网站原LOGO</label>
                    <div class="mws-form-item">
                        <input type="file">
                        <img src="#" style="width:150px;height:50px;" id="img1" name="logo" value="{{$config->logo}}">
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
                     <option value="" >&nbsp;&nbsp;开启</option>
                    <option value=""  >&nbsp;&nbsp;关闭</option>
                 </select>
                 </label>
                </div>
            
            <div class="mws-button-row">
                {{csrf_field()}} 
                <input type="submit" class="btn" value="修改">
                
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