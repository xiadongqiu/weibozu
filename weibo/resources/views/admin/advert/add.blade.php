
 @extends('admin.index')
  @section('title','广告管理')
@section('zhuti')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>广告添加</span>
        </div>
		<div class="mws-panel-body no-padding">
        @if (count($errors) > 0)
	    <div class="mws-form-message error">
	        <ul >
	            @foreach ($errors->all() as $error)
	                <li style="font-size: 15px;list-style: none">{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif


        	<form action="/admin/advert/" class="mws-form" method="post" enctype="multipart/form-data">
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">广告名称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="advertising" value="{{old('advertising')}}">
        				</div>
        			</div>
                    <div class="mws-form-row">
                            <label class="mws-form-label">广告内容</label>
                            <div class="mws-form-item">
                            <textarea name="content" class="small" value="{{old('content')}}"></textarea>
                        </div>
                    </div>

        			

        			<div class="mws-form-row">
                        <div style="padding-bottom: 10px;">广告图片</div>
                        <div>
                            <input type="file" readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected..." name="picture">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">广告地址</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="url" value="{{old('url')}}" >
                        </div>
                    </div>

        		</div>
        		<div class="mws-button-row">

        			{{csrf_field()}}

                    <input type="submit" class="btn btn-default" value="添加">
        		</div>
        	</form>
        </div>
    </div>

@endsection
