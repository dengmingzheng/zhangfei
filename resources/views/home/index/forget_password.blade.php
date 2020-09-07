<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>刘备修车网 - 忘记密码</title>
    <meta name="keywords" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta name="description" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <style type="text/css">

        body {
            _behavior: url(http://liubei.com/mall/templates/default/css/csshover.htc);
        }
    </style>
    <link rel="liubei icon" href="http://liubei.com/liubei.ico">
    <link href="http://liubei.com/mall/templates/default/css/base.css" rel="stylesheet" type="text/css">
    <link href="http://liubei.com/mall/templates/default/css/home_header.css" rel="stylesheet" type="text/css">
    <link href="http://liubei.com/mall/templates/default/css/home_login.css" rel="stylesheet" type="text/css">
    <link href="http://liubei.com/mall/templates/default/css/register.css" rel="stylesheet" type="text/css">
    <link href="http://liubei.com/mall/templates/default/css/logins.css" rel="stylesheet" type="text/css">
    <link href="http://liubei.com/mall/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://liubei.com/data/resource/js/jquery.js"></script>
    <script src="http://liubei.com/data/resource/js/jquery-ui/jquery.ui.js"></script>
    <script src="http://liubei.com/data/resource/js/jquery.validation.min.js"></script>
    <style type="text/css">
        .public-top-layout, .head-app, .public-head-layout,
        .public-nav-layout, .nch-breadcrumb-layout, #faq {
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
            padding-top: 30px;
        }
        span.error{
            color: red;
        }
    </style></head>

<body><div class="login-layout">
    <div class="login-layout-i">
        <div class="register-car-l">
            <a href="/"><i></i></a>
            <h3>重设密码</h3>
        </div>
        <div class="login-layout-content fix">
            <form action="index.php?act=login&amp;op=modifyPassw&amp;mall_sign=1" method="POST" id="find_password_form" class="fix">
                <input type="hidden" name="form_submit" value="ok">
                <input name="nchash" type="hidden" value="5ccf60bd">
                <div class="form-group">
                    <label for="name">手机号码</label> <input type="text" id="user_name" name="user_name" class="form-group-input input-width" placeholder="">
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="name" style="">短信验证码</label>
                    <input type="text" class="form-group-input input-pad" id="verify" name="verify" placeholder="输入短信验证码">
                    <button type="button" id="get_verify" class="buts">获取短信验证码</button>
                    <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="name">新密码</label> <input type="password" id="password" name="password" class="form-group-input input-width" style="" placeholder=""> <span></span>
                </div>
                <div class="form-group">
                    <label for="name">重复新密码</label> <input type="password" id="password_confirm" name="password_confirm" class="form-group-input input-width" placeholder=""> <span></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input type="hidden" name="formhash" value="80Clvh6kArpQX83dmD05nrYWLljuhLT">					<input name="nchash" type="hidden" value="5ccf60bd">
                    <button type="button" class="form-group-input but-pad" id="Submit">确&nbsp;认&nbsp;提&nbsp;交</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        //获取验证码
        $("#get_verify").live('click',function(){
            $(this).attr('id','');
            var _phone = $('input[name="user_name"]').val();
            var _this = this;
            var tel = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
            if(!tel.test(_phone)){
                $(_this).attr('id','get_verify');
                $(this).parent().children('span:first').html('请输入正确手机号');
                return false;
            }else{
                $(this).parent().children('span:first').html('');
            }

            $.ajax({
                url: 'index.php?act=login&op=sendSmsCodeFastCache&do_type=forget',
                data: {contacts_phone: _phone},
                type: 'post',
                async: false,
                dataType:'json',
                success: function (data) {
                    if(!data.result){
                        $(_this).attr('id','get_verify');
                        alert(data.msg);
                    }else{
                        var time = 60;
                        var id = window.setInterval(function(){
                            if(time > 1 ){
                                time = time - 1;
                                $(_this).html(time + '秒');
                                $(_this).attr('id','');
                            }else{
                                $(_this).html('获取验证码');
                                window.clearInterval(id);
                                $(_this).attr('id','get_verify');
                            }
                        },1000);
                    }
                }
            });
        });

        $("#Submit").on('click',function(){
            if($("#find_password_form").valid()){
                $("#find_password_form").submit();
            }
        });

        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[1][358][0-9]{9}$/i.test(value);
        }, "Letters only please");
        $("#find_password_form").validate({
            errorPlacement: function(error, element){
                var error_td = element.parent();
                error_td.find('span').hide();
                error_td.append(error);
            },
            onkeyup: false,
            rules : {
                user_name : {
                    required : true,
                    remote   : {
                        url :'index.php?act=login&op=checkPhone&column=ok',
                        type:'get',
                        data:{
                            user_name : function(){
                                return $('#user_name').val();
                            }
                        }
                    }
                },
                verify: {
                    required : true,
                    minlength: 6,
                    maxlength: 6
                },
                password : {
                    required : true,
                    minlength: 6,
                    maxlength: 20
                },
                password_confirm : {
                    required : true,
                    equalTo  : '#password'
                }
            },
            messages : {
                user_name : {
                    required : '必填项',
                    remote	 : '该用户手机号不存在'
                },
                verify: {
                    required : '必填项',
                    minlength: '请填6位验证码',
                    maxlength: '请填6位验证码'
                },
                password  : {
                    required : '必填项',
                    minlength: '密码至少6位',
                    maxlength: '密码最长20位'
                },
                password_confirm : {
                    required : '必填项',
                    equalTo  : '两次密码不一致'
                }
            }
        });
    });
</script>

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="footer" class="wrapper" style="position: absolute;left: 0px;right: 0px;bottom: 0px;width:100%">
    <p><a href="http://liubei.com" target="_blank">首页</a>
        | <a href="/about_jrwm.html">招聘英才</a>
        | <a href="/jiamengyoushi.html">合作及洽谈</a>
        | <a href="/contactus.html">联系我们</a>
        | <a href="/about_jtln.html">关于我们</a>
        | <a href="/friendlinks.html">友情链接</a>
    </p>
    © Copyright 2016 粤ICP备16026125号-1<br>
</div>


</body>
</html>