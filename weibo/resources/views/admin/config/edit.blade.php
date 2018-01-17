  @extends('admin.index')
@section('zhuti')
  <div class="mws-panel grid_6" style="margin:0 5%;">
    <div class="mws-panel-header">
        <span style="font-weight:bold;">
            网站配置
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="" method="post">
        <!-- {{ method_field('PUT') }} -->
            <fieldset class="mws-form-inline">
                <legend style="font-weight:bold;">
                        网站信息
                </legend>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        网站名称：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="webname" value="">
                    </div>                   
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        网站关键字：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="keywords" value="">
                    </div>                   
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        网站log：
                    </label>
                    <div class="mws-form-item">
                       <input type="file" name="logo" id="test20">
                    </div>                   
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        网站版权：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="copyright" value="">
                    </div>                   
                </div>
                
                <div class="mws-form-row">
                <label class="mws-form-label">
                        网站描述：
                    </label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" name="content" class="large">
                        </textarea>
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">
                            网站状态：
                    </label>
                    <div class="mws-form-item">
                        <select class="xsmall"  name="status" rel="tooltip" data-placement="right">
                       
                            <option value="" >
                                开启
                            </option>
                            <option value="" >
                                关闭
                            </option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <div class="mws-button-row">
                <input type="button" id="edit" value="提交" class="btn btn-danger">
            </div>
        </form>
    </div>
    </div>
@stop