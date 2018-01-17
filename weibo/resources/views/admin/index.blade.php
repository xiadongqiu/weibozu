<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="_token" content="{{ csrf_token() }}"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">
<link rel="shortcut icon" href="/admins/images/favicon.ico">

<title>@yield('title','微博-admin')</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
        <div id="mws-themer-content">
        	<div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
        	<div id="mws-theme-presets-container" class="mws-themer-section">
	        	<label for="mws-theme-presets">颜色设置</label>
            </div>
            <div class="mws-themer-separator"></div>
        	<div id="mws-theme-pattern-container" class="mws-themer-section">
	        	<label for="mws-theme-patterns">背景</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>基础颜色</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>突出显示颜色</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>文本颜色</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>文字发光颜色</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>文字发光不透明度</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="btn btn-danger small" id="mws-themer-getcss">获取 CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
        	<form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

	<!-- 头部 -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/admins/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">

             <a href="/index">网站首页</a>

            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/admins/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">

                        hello, [ {{$user->auth}} ]

                    </div>
                    <ul>
                        <li><a href="/admins/#" title="{{$user->detail->nickname}}">用户</a></li>
                        <li><a href="/admins/#">修改密码</a></li>
                        <li><a href="/admin/loginout" id="logoff" title="退出登录">注销</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 头部结束 -->

    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- 侧边栏 -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
        	<!-- 搜索 -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="搜索...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            <!-- 搜索结束 -->

            <!-- 导航 -->
            <div id="mws-navigation">
                <ul>

                    <li class="active">
                        <a href="/admin"><i class="icon-home"></i> 后台首页</a>
                    </li>

                    <li>
                        <a href="/admin/user"><i class="icon-users"></i> 用户列表</a>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-comments-2"></i> 微博管理</a>
                        <ul style="display: none;" class="closed">
                            <li><a href="/admin/post">微博列表</a></li>
                            <li><a href="/admin/comments">评论列表</a></li>
                            
                        </ul>
                    </li>

                    <li>

                        <a href="/admin/report"><i class="icon-warning-sign"></i> 举报管理</a>

                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-newspaper"></i>广告管理</a>
                         <ul style="display: none;" class="closed">
                            <li><a href="/admin/#">广告添加</a></li>
                            <li><a href="/admin/advert/">广告列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-sound"></i>系统公告</a>
                         <ul style="display: none;" class="closed">
                            <li><a href="/admin/notice/create">公告添加</a></li>
                             <li><a href="/admin/notice">公告列表</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="/admins/#"><i class="icon-planet"></i>网站配置</a>
                         <ul style="display: none;" class="closed">
                            <li><a href="/admin/config">配置信息</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- 导航结束 -->
        </div>
        <!-- 侧边栏结束 -->
        
        <!-- 内容栏 -->
        <div id="mws-container" class="clearfix">
        	<!-- 内容 -->
            <div class="container">
             @section('zhuti')

                

                aaa 

             @show
            
            </div>
            <!-- 内容结束 -->
                       
            <!-- 尾部 -->
            <div id="mws-footer">
            	Ban quan 2018 . Weibo admin suo you
            </div>
            <!-- 尾部结束 -->
            
        </div>
        <!-- 内容栏结束 -->

    </div>
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/layer/layer.js"></script>
    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/admins/js/libs/excanvas.min.js"></script>
    <![endif]-->

    <script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admins/js/demo/demo.dashboard.js"></script>
	<script type="text/javascript" src="/admins/layer/layer.js"></script>
@section('js')


@show




</body>
</html>