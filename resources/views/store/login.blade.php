<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>商家管理中心登录</title>
    <meta name="keywords" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta name="description" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <script type="text/javascript" src="{{asset('common/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('common/js/jquery.validation.min.js')}}"></script>
    <link href="{{asset('mall/css/base.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mall/css/seller_center.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mall/font/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <script language="JavaScript" type="text/javascript">
        window.onload = function() {
            tips = new Array(2);
            tips[0] = document.getElementById("loginBG01");
            tips[1] = document.getElementById("loginBG02");
            index = Math.floor(Math.random() * tips.length);
            tips[index].style.display = "block";
        };
        $(document).ready(function() {
            //更换验证码
            captcha_url = "{{captcha_src()}}";
            function change_seccode() {
                $('#codeimage').attr('src', captcha_url + Math.random());
                $('#captcha').select();
            }

            $('[nctype="btn_change_seccode"]').on('click', function() {
                change_seccode();
            });

            //登陆表单验证
            $("#form_login").validate({
                errorPlacement:function(error, element) {
                    element.prev(".repuired").append(error);
                },
                onkeyup: false,
                rules:{
                    seller_name:{
                        required:true
                    },
                    password:{
                        required:true
                    },
                    captcha:{
                        required:true,
                    }
                },
                messages:{
                    seller_name:{
                        required:"<i class='icon-exclamation-sign'></i>用户名不能为空"
                    },
                    password:{
                        required:"<i class='icon-exclamation-sign'></i>密码不能为空"
                    },
                    captcha:{
                        required:"<i class='icon-exclamation-sign'></i>验证码不能为空",
                    }
                }
            });
            //Hide Show verification code
            $("#hide").click(function(){
                $(".code").fadeOut("slow");
            });
            $("#captcha").focus(function(){
                $(".code").fadeIn("fast");
            });

        });
    </script>
</head>
<body>
<div id="loginBG01" class="ncsc-login-bg">
    <p class="pngFix"></p>
</div>
<div id="loginBG02" class="ncsc-login-bg" style="display: block;">
    <p class="pngFix"></p>
</div>
<div class="ncsc-login-container">
    <div class="ncsc-login-title">
        <h2>商家管理中心</h2>
        <span>请输入您注册商铺时申请的商家名称<br>
    登录密码为商城用户通用密码</span></div>
    <form id="form_login" action="{{url('store/login')}}" method="post">
        {{csrf_field()}}
        <div class="input">
            <label>用户名</label>
            <span class="repuired"></span>
            <input name="seller_name" type="text" autocomplete="off" class="text" autofocus="" value="">
            <span class="ico"><i class="icon-user"></i></span> </div>
        <div class="input">
            <label>密码</label>
            <span class="repuired"></span>
            <input name="password" type="password" autocomplete="off" class="text" value="">
            <span class="ico"><i class="icon-key"></i></span> </div>
        <div class="input">
            <label>验证码</label>
            <span class="repuired"></span>
            <input type="text" name="captcha" id="captcha" autocomplete="off" class="text" style="width: 80px;" maxlength="4" size="10" value="">
            <div class="code">
                <div class="arrow"></div>
                <div class="code-img"><a href="javascript:void(0)" nctype="btn_change_seccode"><img src="{{captcha_src()}}" name="codeimage" border="0" id="codeimage"></a></div>
                <a href="JavaScript:void(0);" id="hide" class="close" title=""><i></i></a> <a href="JavaScript:void(0);" class="change" nctype="btn_change_seccode" title=""><i></i></a> </div>
            <span class="ico"><i class="icon-qrcode"></i></span>
            <input type="submit" class="login-submit" value="商家登录">
        </div>
    </form>
</div>


</body>
</html>