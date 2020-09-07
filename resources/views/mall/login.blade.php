<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>刘备修车网 - 欢迎登录</title>
    <meta name="keywords" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta name="description" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <style type="text/css">

        body {
            _behavior: url(http://liubei.com/mall/templates/default/css/csshover.htc);
        }
    </style>
    <link rel="liubei icon" href="{{asset('/liubei.ico')}}">
    <link href="{{asset('/mall/css/base.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/mall/css/home_header.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/mall/css/home_login.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/mall/css/register.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/mall/css/logins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/mall/font/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <script src="{{asset('/common/js/jquery.js')}}"></script>
    <script src="{{asset('/common/js/jquery-ui/jquery.ui.js')}}"></script>
    <script src="{{asset('/common/js/jquery.validation.min.js')}}"></script>
    <style type="text/css">
        body{
            background-color: #f5f5f5;
        }
        .public-top-layout, .head-app, .public-nav-layout,
        .nch-breadcrumb-layout, #faq, .public-head-layout {
            display: none !important;
        }

        .public-head-layout {
            margin: 10px auto -10px auto;
        }

        .wrapper {
            width: 1000px;
        }

        #footer {
            border-top: none !important;
        }
        .register-car-warp{
            width: 100%;background-color:#ffffff;height:auto;
        }
    </style></head>
<body><div class="register-setting">
    <div class="register-car-warp">
        <div class="register-car-l">
            <div>
                <a href="/"><i></i></a>
                <h3>会员登录</h3>
            </div>


        </div>
    </div>

    <div class="register-col wrap-brand">
        <!--s login-sidebar-->
        <div>
            <div class="login-centent-R fix">
                <div class="login-sidebar login-cnt">
                    <h2 class="login-title fix">
                        <span>会员登录</span>
                        <!-- <a
                            href="index.php?act=login&op=register&ref_url=http%3A%2F%2Fliubei.com%2Fentry%2F%3Fact%3Dindex%26op%3Dlists%26mod%3Darticle%26cate%3Dnews">
                            <i class="lMore-icon"></i>加盟入驻 -->

                    </h2>
                    <div style="clear: both;"></div>
                    <div class="line-s"></div>
                    <form id="login_form" method="post" action="{{url('mall/login')}}" class="form-submit" name="loginForm">
                        {{csrf_field()}}
                        <ul>
                            <li class="login-field"><i class="user-icon"></i>
                                <input autocomplete="off" name="member_name" id="member_name" autofocus="" type="text" class="textbox validate[required:请输入您的用户名]" value="{{old('member_name')}}" placeholder="请输入您的用户名">
                                <div class="txt">请输入您的用户名</div></li>
                            <li class="login-field"><i class="pw-icon"></i> <input name="password" autocomplete="off" id="password" type="password" class="textbox validate[required:请输入您的密码]" value="" placeholder="请输入密码">
                                <!--  <i class="rj-icon"></i> -->
                                <div class="passWa">请输入密码</div></li>
                            <li class="login-tips"><label for="male"> <input type="checkbox" id="remember" name="remember" @if(old('remember')) checked="checked" @endif>&nbsp;记住我
                                </label> <a href="{{url('forget_password')}}">忘记密码？</a></li>
                            <li><input type="submit" value="登&nbsp;&nbsp;录" class="login-btn">
                            </li>
                        </ul>

                        <!--<div class="login-fol">
                                <p>使用合作网站账号登录：</p>
                                <h3>QQ登陆</h3>
                            </div>-->
                    </form>
                    <div style="clear: both;"></div>
                    <div class="login-other">
                        <i class="login-icon2"></i> <a href="" target="_blank">供应商登录</a>
                        <em>|</em> <a href="" target="_blank">服务站登录</a>
                        <a href="{{url('mall/register')}}" style="float: right;font-size:12px">注册申请</a>
                    </div>
                    <!--e login-sidebar-->
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#login_form").validate({
                errorPlacement: function(error, element){
                    var error_td = element.parent('li');
                    error_td.find('label').hide();
                    error_td.after(error);
                },
                onkeyup: false,
                rules: {
                    user_name: "required",
                    password: "required"
                },
                messages: {
                    user_name: "用户名不能为空",
                    password: "密码不能为空"
                }
            });
        });
    </script>

    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div>
    <div id="footer" class="wrapper" style="position: relative;left: 0px;right: 0px;bottom: 0px;width:100%">
        <p><a href="http://liubei.com" target="_blank">首页</a>
            | <a href="/about_jrwm.html">招聘英才</a>
            | <a href="/jiamengyoushi.html">合作及洽谈</a>
            | <a href="/contactus.html">联系我们</a>
            | <a href="/about_jtln.html">关于我们</a>
            | <a href="/friendlinks.html">友情链接</a>
        </p>
        © Copyright 2016 粤ICP备16026125号-1<br>
    </div>


</div></body>
</html>