 @extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_4">
    <div class="mws-panel-header">
        <span>
            修改密码
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="form_layouts.html">
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">
                        用户名：
                    </label>
                    <div class="mws-form-item">
                        <input type="text" class="large" value="{{$data->phone}}" readonly>
                    </div>
                </div>
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">
                        旧密码：
                    </label>
                    <div class="mws-form-item">
                        <input type="password" name="oldphone" class="large" value="">
                    </div>
                </div>
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">
                        新密码：
                    </label>
                    <div class="mws-form-item">
                        <input type="password" name="phone" class="large" value="">
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="修改" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>
@stop
@section('title','修改密码')