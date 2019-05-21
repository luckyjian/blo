<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="data-spm" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>New博客后台</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="/static/admin/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/static/admin/css/main.css">
    {{--自定义阿里字体库--}}
    <link type="text/css" rel="stylesheet" href="//at.alicdn.com/t/font_1038155_bvfj232ori.css">

    {{--框架css--}}
    <link rel="stylesheet" type="text/css" href="/plugin/larryms/larry/css/larry.css" media="all">
    <link rel="stylesheet" type="text/css" href="/plugin/larryms/css/admin/larryms.css">
    <link rel="stylesheet" type="text/css" href="/plugin/larryms/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/plugin/larryms/larry/font/fa/font-awesome.min.css" media="all">


    @stack('css')
</head>

<body class="hasTopbar hasSidebar domain" style="padding-top: 50px; padding-left: 50px;overflow: hidden;">
<div id="console-bar">
    <div class="newblog-console-base-bar">
        <div class="console-base-container">
            <div class="topbar " data-spm="newblog_topbar">
                <div class="newblog-logo pull-left logo-box">
                    <div class="newblog-logo-wrapper pull-left home-width-zh">
                        <a href="/" target="_blank" class="newblog-icon pull-left">
                            <span class="blog-logo">N</span>
                        </a>
                        <a href="/" target="_self" class="console-link pull-left">
                            <span>New博客后台管理</span>
                        </a>
                    </div>
                </div>

                <div class="pull-right topbar-info clearfix">
                    <div class="pull-left topbar-search">
                        <div class="topbar-search-container">
                            <div class="newblog-common-search-container">
                                <input class="newblog-common-search-input-elem" placeholder="搜索">
                                <div class="newblog-common-search-close" style="display: none;"></div>
                                <div class="newblog-common-search-icon"></div>
                                <div class="newblog-common-search-outline">
                                    <div class="newblog-common-search-dropdown" style="height: 0px;">
                                        <ul class="dropdown-list"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="pull-left dropdown topbar-notice topbar-info-dropdown topbar-info-item message-box">--}}
                    {{--<a  class="topbar-btn topbar-info-dropdown-toggle" href="/" target="_blank" rel="noopener noreferrer">--}}
                    {{--<span class="topbar-btn-notice-title">消息<span class="topbar-btn-notice-num">0</span></span>--}}
                    {{--</a>--}}
                    {{--<div class="topbar-info-dropdown-memu topbar-info-dropdown-memu-list">--}}
                    {{--<div class="topbar-notice-head">--}}
                    {{--<strong>站内消息通知</strong><a href="/">消息接收管理</a>--}}
                    {{--</div>--}}
                    {{--<div class="topbar-notice-body">--}}
                    {{--<ul class="topbar-notice-list">--}}
                    {{--<li class="">--}}
                    {{--<a href="/" target="_blank" class="clearfix" rel="noopener noreferrer">--}}
                    {{--<p class="topbar-notice-item-name" title="企业安全无法保障？  员工办事效率低下？">企业安全无法保障？员工办事效率低下？</p>--}}
                    {{--<p class="topbar-notice-item-time">2019-03-26 15:15</p>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="topbar-notice-foot">--}}
                    {{--<a class="topbar-notice-more" target="_blank" rel="noopener noreferrer" href="https://msc.console.newblog.com/#/innerMsg/unread/0">查看更多</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    <div class="pull-left topbar-info-item topbar-info-dropdown support-box ">
                        <a href="https://www.newblog.com/service" target="_blank"
                           class="topbar-btn topbar-info-dropdown-toggle"><span>服务</span></a>
                        <ul class="topbar-info-dropdown-memu topbar-info-dropdown-memu-list">
                            <li class="topbar-info-btn">
                                <span class="topbar-info-btn-gap"></span>
                                <a href="https://yq.newblog.com/articles" target="_blank"><span>博客</span></a>
                            </li>
                            <li class="topbar-info-btn">
                                <span class="topbar-info-btn-gap"></span>
                                <a href="https://mvp.newblog.com/zhidao/add" target="_blank"><span>社区求助</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="pull-left topbar-info-item topbar-info-dropdown user-box">
                        <a class="topbar-info-dropdown-toggle topbar-btn" rel="noopener noreferrer">
                            <img class="topbar-user-avatar" src="/static/admin/css/default_handsome.jpg">
                        </a>
                        <div class="topbar-info-dropdown-memu topbar-info-dropdown-memu-list">
                            <div class="topbar-user-header"><h3>
                                    <img class="topbar-user-avatar" src="/static/admin/css/default_handsome.jpg">
                                    <span title="18798276809" class="topbar-user-email">admin</span></h3>
                                <ul class="topbar-user-entrance-list">
                                    <li class="topbar-user-entrance">
                                        <a href="/" title="基本资料" target="_target">基本资料</a>
                                    </li>
                                    <li class="topbar-user-entrance">
                                        <a href="/" title="实名认证" target="_target">我的消息</a>
                                    </li>
                                    <li class="topbar-user-entrance">
                                        <a  title="安全设置" onclick='mainObj.showChangeBox()'>密码设置</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-user-body">
                                <ul class="topbar-user-entrance-list">
                                    <li class="topbar-user-entrance">
                                        <a href="/" target="_target" rel="noopener noreferrer">
                                                <span class="topbar-user-entrance-logo-box">
                                                    <i class="topbar-user-entrance-logo icon-topbar-secure-control topbar-sidebar-secure-control"></i>
                                                </span>
                                            <span class="topbar-user-entrance-name">安全管控</span>
                                        </a>
                                    </li>

                                    <li class="topbar-user-entrance">
                                        <a href="https://ram.console.newblog.com/" target="_target"
                                           rel="noopener noreferrer">
                                                <span class="topbar-user-entrance-logo-box">
                                                    <i class="topbar-user-entrance-logo icon-topbar-ram topbar-sidebar-ram1"></i>
                                                </span>
                                            <span class="topbar-user-entrance-name">访问控制</span>
                                        </a>
                                    </li>

                                    <li class="topbar-user-entrance">
                                        <a href="https://ak-console.newblog.com/" target="_target"
                                           rel="noopener noreferrer">
                                                <span class="topbar-user-entrance-logo-box">
                                                    <i class="topbar-user-entrance-logo icon-topbar-accesskeys topbar-sidebar-accesskeys"></i>
                                                </span>
                                            <span class="topbar-user-entrance-name">accesskeys</span>
                                        </a>
                                    </li>

                                    <li class="topbar-user-entrance">
                                        <a href="https://club.newblog.com/#/growth?_k=ynjugy" target="_target"
                                           rel="noopener noreferrer">
                                                <span class="topbar-user-entrance-logo-box">
                                                    <i class="topbar-user-entrance-logo icon-account topbar-sidebar-account"></i>
                                                </span>
                                            <span class="topbar-user-entrance-name">会员权益</span>
                                        </a>
                                    </li>

                                    <li class="topbar-user-entrance">
                                        <a href="https://club.newblog.com/" target="_target" rel="noopener noreferrer">
                                                <span class="topbar-user-entrance-logo-box">
                                                    <i class="topbar-user-entrance-logo icon-account icon-score topbar-sidebar-score"></i>
                                                </span>
                                            <span class="topbar-user-entrance-name">会员积分</span>
                                        </a>
                                    </li>

                                    <li class="topbar-user-entrance">
                                        <a href="https://promotion.newblog.com/ntms/yunparter/personal-center.html"
                                           target="_target" rel="noopener noreferrer">
                                                <span class="topbar-user-entrance-logo-box">
                                                    <i class="topbar-user-entrance-logo icon-cps topbar-sidebar-cps topbar-sidebar-yundashi"></i>
                                                </span>
                                            <span class="topbar-user-entrance-name">推荐返利后台</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-user-footer">
                                <a href="{{route('admin_logout')}}" target="_self">退出管理控制台</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sidebar  sidebar-mini " data-spm="newblog_sidebar">
                <div class="newblog-sidebar-wrapper">
                    <div class="product-all">
                        <div class="product-all-wrapper">
                            <span class="product-all-icon-box">
                                <i class="iconfont icon-kongzhitai1" style="color: deepskyblue"></i>
                            </span>
                            <span class="product-all-name"><a href="/admin" style="color: white">控制台</a></span>
                            <span class="newblog-sidebar-toolbar">
                                <i class="topbar-sidebar-angle-right "></i>
                            </span>
                        </div>
                    </div>
                    <ul class="sidebar-products">
                        {{--product-item-active--}}
                        <li class="product-item" data-productid="ecs" style="transform: translate3d(0px, 0px, 0px);">
                            <span class="product-item-icon-box">
                                <i class="iconfont icon-quanxian"></i>
                            </span>
                            <a href="/admin" class="product-item-link">
                                <span class="product-item-name">权限管理</span>
                            </a>
                        </li>
                        <li class="product-item" data-productid="ecs" style="transform: translate3d(0px, 40px, 0px);">
                            <span class="product-item-icon-box">
                                <i class="iconfont icon-weixin"></i>
                            </span>
                            <a href="/admin/wechat/menu" class="product-item-link">
                                <span class="product-item-name">微信管理</span>
                            </a>
                        </li>
                        <li class="product-item" data-productid="ecs" style="transform: translate3d(0px, 80px, 0px);">
                            <span class="product-item-icon-box">
                                <i class="iconfont icon-wenzhangguanli1"></i>
                            </span>
                            <a href="/admin" class="product-item-link">
                                <span class="product-item-name">文章管理</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="console-frame">
    <div class="new-product-small"></div>
    @section('left-sidebar')
        <div class="side" id="my-left-box">
            <div class="brand">域名服务</div>
            <div class="menu">
                <ul>
                    <li class=""><span class="icon"></span>
                        <div class="text">域名列表</div>
                    </li>
                    <li class=" "><span class="icon"></span>
                        <div class="text">信息模板</div>
                    </li>
                    <li class=" "><span class="icon"></span>
                        <div class="text">批量操作</div>
                    </li>
                    <li class=" "><span class="icon"></span>
                        <div class="text">域名转入</div>
                    </li>
                    <li class="">
                        <span class="icon"><i class="iconfont icon-arrLeft-fill"></i></span>
                        <div class="text">我是卖家</div>
                        <ul class="ng-scope ng-hide">
                            <li class="active"><span class="icon"></span>
                                <div class="text">我要卖域名</div>
                            </li>
                            <li class=" "><span class="icon"></span>
                                <div class="text">批量操作</div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="toggle" id="my-close-left">
                <div class="shape"></div>
            </div>
        </div>
    @show

    <div class="content" style="padding: 2px 2px 5px 2px;border-left: 2px solid white;background-color: #f8f5f5">
        @yield('content')
    </div>

    <div class="dropdown-menu-list  pt-page-moveFromTop " id="change-pwd-box" style="display: none;margin: 0 auto;left: 0;right: 0;width: 430px;height: 330px;">
        <h5>修改密码<span class="msg-clear-all" id="clearMsg" onclick="mainObj.closeChangeBox()">关闭</span></h5>
        <div class="slimScrollDiv" style="height: 2100px;">
            <div class="msg-box lslimscroll noti-scrol" style="overflow: hidden">
                <div class="msg-item" >
                    <div class="msg-icon larry-bg-info" >
                        旧密码
                    </div>
                    <div class="msg-detail"  style="width: 315px;padding-top: 10px;">
                        <input type="password" class="form-control"   style="border-radius: 0;border:1px solid #ccccff" placeholder="请输入旧密码">
                    </div>
                </div>

                <div class="msg-item" >
                    <div class="msg-icon larry-bg-info" >
                        新密码
                    </div>
                    <div class="msg-detail"  style="width: 315px;padding-top: 10px;">
                        <input type="password" class="form-control" maxlength="16" style="border-radius: 0;border:1px solid #ccccff" placeholder="请设置新密码">
                    </div>
                </div>
                <div class="msg-item" >
                    <div class="msg-icon larry-bg-info" >
                        确认密码
                    </div>
                    <div class="msg-detail"  style="width: 315px;padding-top: 10px;">
                        <input type="password" class="form-control" maxlength="16"  style="border-radius: 0;border:1px solid #ccccff" placeholder="请再次输入新的密码">
                    </div>
                </div>
            </div>
        </div>
        <div class="fix-look"  id="viewMsg" style="border-top: 1px solid #f7f2f2;cursor: pointer;" onclick="mainObj.posChangePwd()">
            立即修改
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
    $('#my-close-left').on('click', function () {
        if ($('#my-left-box').hasClass('collapse')) {
            $('#my-left-box').removeClass('collapse')
        } else {
            $('#my-left-box').addClass('collapse')
        }
    });

    $('#my-left-box > .menu > ul > li').on('click', function () {
        if (!$(this).hasClass('expand')) {
            $(this).find('.iconfont').removeClass('icon-arrLeft-fill').addClass('icon-sanb');
            $(this).addClass('expand').find('.ng-scope').removeClass('ng-hide')
        } else {
            $(this).find('.iconfont').removeClass('icon-sanb').addClass('icon-arrLeft-fill');
            $(this).removeClass('expand').find('.ng-scope').addClass('ng-hide')
        }
    });


    let mainObj = {
        showChangeBox(){
            $('#change-pwd-box').show();
        },
        closeChangeBox(){
            $('#change-pwd-box').hide();
        },
        posChangePwd(){
            alert('此功能尚未开发')
        }
    }
</script>

@stack('scripts')

</html>