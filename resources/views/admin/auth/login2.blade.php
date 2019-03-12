<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>New博客(管理系统)</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="/static/hAdmin/login/login2.css" tppabs="css/style.css"/>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1038155_keqhk7s252a.css">
    <style>
        .larry-btn-submit:active{
            background: rgba(31, 204, 188, 0.8) !important;
        }
    </style>
</head>

<body class="login-body">
<canvas class="pg-canvas" width="2048" height="590"></canvas>
<div class="login pt-page-scaleUp">
    <div class="login-title">
        <strong><b class="logo">New博客</b>(管理系统)</strong>
        <em style="font-size: 12px;">Management System</em>
    </div>

    <form class="layui-form larryms-form">
        <dvi class="layui-form-item">
            <label class="larryms-label"><i class="iconfont icon-ai-user" style="color: white"></i></label>
            <input type="text" name="uname" lay-verify="require" autocomplete="off" placeholder="请输入您的用户名"
                   class="layui-input larry-input">
            <span class="validation"><i class="larry-icon larry-gou4"></i></span>
        </dvi>

        <dvi class="layui-form-item">
            <label class="larryms-label"><i class="iconfont icon-suo" style="color: white"></i></label>
            <input type="password" name="passwd" lay-verify="require" autocomplete="off" placeholder="请输入您的密码"
                   class="layui-input larry-input">
            <span class="validation"><i class="larry-icon larry-gou4"></i></span>
        </dvi>

        <dvi class="layui-form-item larryms-code">
            <label class="larryms-label"><i class="iconfont icon-yanzhengma" style="color: white"></i></label>
            <input type="text" name="code" lay-verify="require" autocomplete="off" placeholder="输入验证码"
                   class="layui-input larry-input">
            <span class="validation"><i class="larry-icon larry-gou4"></i></span>
            <div class="code">
                <div class="code-img"></div>
            </div>
        </dvi>

        <div class="layui-form-item">
            <button class="layui-btn larry-btn-submit" style="border: none;outline: none;cursor: pointer">立即登录</button>
        </div>

        <div class="layui-form-item layui-trans larryms-user-login-other">

            <a href="" class="reg-a forget">忘记密码</a>
        </div>

        <div class="layui-form-item">
            <label style="font-size: 10px;margin-left: 25px;color: #020202;">Copyright © 2019 New博客. All Rights Reserved.</label>
        </div>
    </form>
</div>

<script src="/static/hAdmin/login/jquery.js"></script>
<script src="/static/hAdmin/login/Particleground.js" ></script>
<script>
    $('body').particleground({dotColor: '#5cbdaa', lineColor: '#5cbdaa'});
</script>
</body>
</html>