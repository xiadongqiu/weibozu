<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
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

<script type="text/javascript" src="/admins/layer/layer.js"></script>

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
        
            <!-- 查看提示 -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="/admins/#" data-toggle="dropdown" class="mws-dropdown-trigger" title="举报"><i class="icon-exclamation-sign"></i></a>
                
                <!-- 消息提示 -->
                <span class="mws-dropdown-notif">11</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        <!-- 已阅读 -->
                            <li class="read">
                                <a href="/admins/#" title="已阅读">
                                    <span class="message">
                                        <b>微博标题...</b>
                                    </span>
                                    <span class="time">
                                        色情低俗, 2018-01-03
                                    </span>
                                </a>
                            </li>
                            <!-- 未阅读 -->
                            <li class="unread">
                                <a href="/admins/#" title="未阅读">
                                    <span class="message">
                                        <b>微博标题...</b>
                                    </span>
                                    <span class="time">
                                        违法暴力, 2018-01-03
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="/admins/#">查看全部</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="/admins/#" data-toggle="dropdown" class="mws-dropdown-trigger" title="留言"><i class="icon-envelope"></i></a>
                
                <!-- 邮件提示 -->
                <span class="mws-dropdown-notif">3511</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="/admins/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/admins/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="/admins/#">查看全部</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/admins/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">

                        hello, aa

                        hello, 

                    </div>
                    <ul>
                        <li><a href="/admins/#" title="">用户</a></li>
                        <li><a href="/admins/#">修改密码</a></li>
                        <li><a href="/admin/loginout" id="logoff">注销</a></li>
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
                        <a href="admin/user/list"><i class="icon-users"></i> 用户管理</a>
                        <ul style="display: none;" class="closed">
                            <li><a href="/admin/user/list">用户列表</a></li>
                            <li><a href="/admins/#">用户添加</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-comments-2"></i> 微博管理</a>
                        <ul style="display: none;" class="closed">
                            <li><a href="/admin/post">微博列表</a></li>
                            <li><a href="/admins/#">微博评论</a></li>
                            <li><a href="/admins/#">评论回复</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-exclamation-sign"></i> 举报管理</a>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-planet"></i>网站配置</a>
                         <ul style="display: none;" class="closed">
                            <li><a href="/admin/config">配置信息</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-newspaper"></i>广告管理</a>
                         <ul style="display: none;" class="closed">
                            <li><a href="/admin/#">广告添加</a></li>
                            <li><a href="/admins/#">广告修改</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/admins/#"><i class="icon-sound"></i>系统公告</a>
                         <ul style="display: none;" class="closed">
                            <li><a href="/admin/#">公告添加</a></li>
                            <li><a href="/admins/#">公告修改</a></li>
                             <li><a href="/admins/#">公告列表</a></li>
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
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            <!-- 尾部结束 -->
            
        </div>
        <!-- 内容栏结束 -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
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
    <script src="/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
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
    

</body>
</html>