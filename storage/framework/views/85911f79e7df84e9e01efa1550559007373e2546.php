<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title> New博客|管理系统</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="<?php echo e(asset('static/hAdmin/css/bootstrap.min.css?v=3.3.6')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('static/hAdmin/css/font-awesome.min.css?v=4.4.0')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('static/hAdmin/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('static/hAdmin/css/style.css?v=4.1.0')); ?>" rel="stylesheet">
    <style type="text/css">
        .cus-nav > li{
            border-left: 1px solid #f1e9e9;
            border-right: 1px solid #f1e9e9;
            margin-right: 0 !important;
        }
        .cus-nav > li > a {
            font-weight: none !important;
        }
        .nav > li > a {
            color: #869fb1;
            font-weight: 300;
            padding: 14px 20px 14px 25px;
        }
        .to-web-home{
            height: 50px;width: 45px;font-size: 22px;margin:0;line-height: 43px;border-left: 1px solid #e2e2e2;border-right:1px solid #e2e2e2;
        }
        .to-web-home > i{
            color: #7DB0E8
        }
        #wrapper{
            overflow: hidden !important;
        }

        body.mini-navbar .nav-header,.nav-header{
            height: 50px;
            background: -webkit-linear-gradient(left, #000000 , #9f9494); /* Safari 5.1 - 6.0 */
            background: -o-linear-gradient(right, #000000 , #9f9494); /* Opera 11.1 - 12.0 */
            background: -moz-linear-gradient(right, #000000 , #9f9494); /* Firefox 3.6 - 15 */
            background: linear-gradient(to right, #000000 , #9f9494); /* 标准的语法 */
        }
    </style>
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" >
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;color: #ffffff;text-align: center">
                                        <strong class="font-bold">New博客</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">博</div>
                    </li>

                    <li>
                        <a class="J_menuItem" href="index_v1.html">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li class="line dk"></li>

                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">博客管理</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">内容管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="graph_echarts.html">文章管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_flot.html">问答管理</a>
                            </li>
                        </ul>
                    </li>
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">微信管理</span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="/admin/wechat/menu"><i class="fa fa-magic"></i> <span class="nav-label">微信菜单</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header" style="width: 100% !important">
                        <a class="navbar-minimalize minimalize-styl-2 " style="height: 50px;width: 45px;font-size: 22px;margin:0;line-height: 43px;" href="#"><i class="fa fa-bars" ></i> </a>
                        <a class="minimalize-styl-2 to-web-home"  href="/"  title="返回官网用户中心"><i class="fa fa-home"></i></a>
                        <ul class="nav navbar-top-links cus-nav" style="float: right;">
                            <li >
                                <a href="/seller/index/signOut"><i class="glyphicon glyphicon-log-out"></i> 退出</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="100%" src="/admin/index/index" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script src="<?php echo e(asset('static/hAdmin/js/jquery.min.js?v=2.1.4')); ?>"></script>
    <script src="<?php echo e(asset('static/hAdmin/js/bootstrap.min.js?v=3.3.6')); ?>"></script>
    <script src="<?php echo e(asset('static/hAdmin/js/plugins/metisMenu/jquery.metisMenu.js')); ?>"></script>
    <script src="<?php echo e(asset('static/hAdmin/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/hAdmin/js/plugins/layer/layer.min.js')); ?>"></script>

    <!-- 自定义js -->
    <script src="<?php echo e(asset('static/hAdmin/js/hAdmin.js?v=4.1.0')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('hAdmin/js/index.js')); ?>"></script>

    <!-- 第三方插件 -->
    <script src="<?php echo e(asset('static/hAdmin/js/plugins/pace/pace.min.js')); ?>"></script>

</body>

</html>
