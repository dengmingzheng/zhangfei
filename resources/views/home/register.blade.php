<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>刘备修车网 - 用户注册</title>
    <meta name="keywords" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta name="description" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">

    <link rel="liubei icon" href="/liubei.ico">
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
        }

        label.validation {
            background: url(../mall/images/home/bg_position.gif) no-repeat scroll -620px -660px;
            padding-left: 16px;
        }
    </style>
</head>
<body>
<div class="login-layout">
    <div class="login-layout-i">
        <div class="register-car-l">
            <a href="/"><i></i></a>
            <h3>加盟入驻</h3>
        </div>
        <div class="logoRight">
            已有账号，去<a href="{{url('mall/login')}}">&nbsp;登录</a>
        </div>
        <div style="clear: both;"></div>
        <div class="login-layout-content fix">
            <form action="{{url('/saveFactory')}}" enctype="multipart/form-data" method="post" class="fix"
                  id="register_form">
                {{csrf_field()}}
                <input name="member_type" type="hidden" value="1">
                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>登录手机号</label>
                    <input type="text" id="member_mobile" name="member_mobile" value="{{old('member_mobile')}}"
                           class="form-group-input input-width" placeholder="登录手机号"> <span
                            class="error">{{$errors->first('member_mobile')}}</span>
                </div>
                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>密码</label>
                    <input type="text" id="password" name="password" value="" class="form-group-input input-width"
                           placeholder="登录密码"> <span class="error">{{$errors->first('password')}}</span>
                </div>

                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>确认密码</label>
                    <input type="text" id="password_confirmation" name="password_confirmation" value=""
                           class="form-group-input input-width" placeholder="确认密码"> <span class="error"></span>
                </div>

                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>修理厂名称</label>
                    <input type="text" id="company_name" name="company_name" class="form-group-input input-width"
                           value="{{old('company_name')}}" placeholder=""> <span
                            class="error">{{$errors->first('company_name')}}</span>
                </div>
                <div class="form-group" id="region">
                    <input id="s_1" name="company_province_id" type="hidden" value="">
                    <input id="s_2" name="company_city_id" type="hidden" value="">
                    <input id="s_3" name="company_area_id" type="hidden" value="">
                    <input id="s_4" name="area_valid_id" class="area_ids" type="hidden" value="">
                    <label for="name"><span class="location-center">*</span>所在区域</label>
                    <input type="hidden" value="" name="company_address" id="company_address" class="area_names">
                    <select class="form-group-input">
                    </select>
                    <span class="error">{{$errors->first('company_province_id')}}{{$errors->first('company_city_id')}}{{$errors->first('company_area_id')}}</span>
                </div>
                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>详细地址</label>
                    <input type="text" id="company_address_detail" class="form-group-input input-width"
                           value="{{old('company_address_detail')}}" name="company_address_detail" placeholder="">
                    <span class="error">{{$errors->first('company_address_detail')}}</span>
                </div>
                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>联系人</label>
                    <input type="text" name="contacts_name" value="{{old('contacts_name')}}" id="contacts_name"
                           class="form-group-input input-width" placeholder=""> <span
                            class="error">{{$errors->first('contacts_name')}}</span>
                </div>
                <div class="form-group">
                    <label for="name"><span class="location-center">*</span>门头照</label>
                    <input type="file" name="company_cover" id="company_cover" class="form-group-input"
                           value="{{old('company_cover')}}">

                    <span class="error">{{$errors->first('company_cover')}}</span>
                </div>
                <div class="form-group">
                    <label for="name">企业法人姓名</label>
                    <input type="text" id="business_legal_representative" name="business_legal_representative"
                           class="form-group-input input-width" placeholder=""> <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="name">法人身份证号</label>
                    <input type="text" id="business_legal_card" name="business_legal_card"
                           class="form-group-input input-width" placeholder=""> <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="name">法人身份证正面</label>
                    <input type="file" name="business_legal_card_front" class="form-group-input"
                           value="{{old('business_legal_card_front')}}">
                    <span class="error">{{$errors->first('business_legal_card_front')}}</span>
                </div>
                <div class="form-group">
                    <label for="name">法人身份证反面</label>
                    <input type="file" name="business_legal_card_back" class="form-group-input"
                           value="{{old('business_legal_card_back')}}">
                    <span class="error">{{$errors->first('business_legal_card_back')}}</span>
                </div>
                <div class="form-group">
                    <label for="name">营业执照编号</label>
                    <input type="text" id="business_licence_number" name="business_licence_number"
                           class="form-group-input input-width" placeholder=""> <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="name">营业执照照片</label>
                    <input type="file" name="business_licence_number_electronic" class="form-group-input"
                           value="{{old('business_licence_number_electronic')}}">
                    <span class="error">{{$errors->first('business_licence_number_electronic')}}</span>
                </div>
                <div class="form-group checkbox">
                    <label for="name"></label>
                    <input type="checkbox" name="factory_agree" id="factory_agree" value="1" checked="checked"
                           class="form-group-input "/>
                    <span>已阅读并同意《<i>车扑商城注册会员协议</i>》
                    </span> <span></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>

                    <button type="button" id="btn_submit" class="form-group-input but-pad">立&nbsp;即&nbsp;注&nbsp;册
                    </button>
                </div>

            </form>
            <div class="logoRight-R fix">
                <p>注册遇到问题 ?</p>
                <p>
                    请拨打客服电话：<i>4008-600-170</i>
                </p>
            </div>
            <div style="clear: both;"></div>

        </div>

    </div>
</div>
<script>
    var SITEURL = 'http://mingzheng.test/mall';
</script>
<script type="text/javascript" src="{{asset('/common/js/dialog/dialog.js')}}" id="dialog_js" charset="utf-8"></script>
<link href="{{asset('/common/js/dialog/dialog.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{asset('/common/js/jquery-ui/jquery.ui.js')}}"></script>
<script type="text/javascript" src="{{asset('/common/js/jquery-ui/i18n/zh-CN.js')}}" charset="utf-8"></script>
<script src="{{asset('/common/js/common_select.js')}}"></script>
<script type="text/javascript" src="{{asset('/common/js/jquery.nyroModal/custom.min.js')}}" charset="utf-8"></script>
<link href="{{asset('/common/js/jquery.nyroModal/styles/nyroModal.css')}}" rel="stylesheet" type="text/css"
      id="cssfile2">
<script>

    //注册表单验证
    $(function () {
        $("select").live("change", function () {
            var selects = $(this).siblings("select").andSelf();
            var id = '';
            var names = new Array();
            for (i = 0; i < selects.length; i++) {
                sel = selects[i];
                var _obj = $("#s_" + (i + 1));
                if (sel.value > 0) {
                    id = sel.value;
                    name = sel.options[sel.selectedIndex].text;
                    _obj.val(id);
                }
            }
        })
        regionInit("region", function () {
            }, function () {
            }
        );

        $('a[nctype="nyroModal"]').nyroModal();

        $("#btn_submit").click(function () {
            if ($("#register_form").valid()) {
                ajaxpost('register_form', '', '', 'onerror');
//     		$('#register_form').submit();
            }
        });

        jQuery.validator.addMethod("isMobile", function (value, element) {
            var length = value.length;
            var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
            return this.optional(element) || (length == 11 && mobile.test(value));
        }, "请正确填写您的手机号码");
        jQuery.validator.addMethod("isPic", function (value, element, params) {
            if (value != '') {
                var sub = value.substring(value.lastIndexOf(".") + 1).toLowerCase();
                if (element.files[0].size / (1024 * 1024) > 1) {
                    return false;
                }
                if (sub != 'jpg' && sub != 'png' && sub != 'gif') {
                    return false;
                }
            }
            return true;
        }, "请上传后缀为.jpg/.png/.gif且不大于1M的图片");
        jQuery.validator.addMethod("company_cover_empty", function (value, element, params) {
            if (value != '') {
                return true;
            } else {
                if ($('input[ref="company_cover"]').val() != '') {
                    return true;
                }
                return false;
            }
        }, "企业门头照不能为空");
        jQuery.validator.addMethod("businessInfo", function (value, element) {
            if ($('#business_legal_representative').val() != '' && $('#business_legal_card').val() != '') {
                if (($('input[name="business_legal_card_front"]').val() != '' || (typeof($('img[ref="business_legal_card_front"]').attr('src')) != 'undefined' && $('img[ref="business_legal_card_front"]').attr('src') != ''))
                    && ($('input[name="business_legal_card_back"]').val() != '' || (typeof($('img[ref="business_legal_card_back"]').attr('src')) != 'undefined' && $('img[ref="business_legal_card_back"]').attr('src') != ''))) {
                    return true;
                }
            }
            if ($('#business_licence_number').val() != '') {
                if ($('input[name="business_licence_number_electronic"]').val() != '' || (typeof($('img[ref="business_licence_number_electronic"]').attr('src')) != 'undefined' && $('img[ref="business_licence_number_electronic"]').attr('src') != '')) {
                    return true;
                }
            }
            return false;
        }, "身份证信息和营业执照信息至少填写一个");

        jQuery.validator.addMethod("check_reg_phone", function (value, element) {
            if (value == '') {
                return true;
            }
            var flag = false;
            $.ajax({
                url: 'index.php?act=login&op=check_reg_phone',
                data: {contacts_phone: $("#contacts_phone").val()},
                type: 'post',
                async: false,
                success: function (data) {
                    if (data == 'true') {
                        flag = true;
                    }
                }
            })
            return flag;
        }, "您输入的手机号码已经注册，请重新输入");

        jQuery.validator.addMethod("check_reg_company", function (value, element) {
            if (value == '') {
                return true;
            }
            var flag = false;
            $.ajax({
                url: 'index.php?act=login&op=check_reg_company',
                data: {company_name: $("#company_name").val()},
                type: 'post',
                async: false,
                success: function (data) {
                    if (data == 'true') {
                        flag = true;
                    }
                }
            })
            return flag;
        }, "您输入的企业名称已经注册，请重新输入");

        jQuery.validator.addMethod("address_type", function (value, element) {
            if (typeof(nc_a) == 'undefined') {//加载地区数据
                var area_scripts_src = '';
                area_scripts_src = $("script[src*='jquery.js']").attr("src");//取JS目录的地址
                area_scripts_src = area_scripts_src.replace('jquery.js', 'area_array.js');
                $.getScript(area_scripts_src, function () {
                    if (typeof(nc_a[value]) == 'object' && nc_a[value].length > 0) {//数组存在
                        return false;
                    }
                });
            } else {
                if (typeof(nc_a[value]) == 'object' && nc_a[value].length > 0) {//数组存在
                    return false;
                }
            }
            return true;
        }, "地区必填，且具体到县/区");

        $('#register_form').validate({
            errorPlacement: function (error, element) {
                error.appendTo(element.parent().find('.error'));
            },
            rules: {
                contacts_phone: {
                    required: true,
                    isMobile: '',
                    check_reg_phone: true
                },
                company_name: {
                    required: true,
                    minlength: 2,
                    maxlength: 20,
                    check_reg_company: true
                },
                area_valid_id: {
                    required: true,
                    address_type: true
                },
                company_address_detail: {
                    required: true,
                    maxlength: 50
                },
                contacts_name: {
                    required: true,
                    minlength: 2,
                    maxlength: 8
                },
                company_cover: {
                    company_cover_empty: true,
                    isPic: true
                },
                business_legal_card_front: {
                    isPic: true
                },
                business_legal_card_back: {
                    isPic: true
                },
                business_licence_number_electronic: {
                    isPic: true
                },

                business_legal_representative: {
                    businessInfo: true,
                    minlength: 2,
                    maxlength: 50
                },
                business_licence_number: {
                    businessInfo: true,
                    minlength: 2,
                    maxlength: 50
                },
            },
            messages: {
                contacts_phone: {
                    required: '登录手机号不能为空',
                },
                company_name: {
                    required: '企业名称不能为空',
                    minlength: '企业名称最小2字符',
                    maxlength: '企业名称最大20字符',
                },
                area_valid_id: {
                    required: '所在地区不能为空',
                },
                company_address_detail: {
                    required: '详细地址不能为空',
                    maxlength: '详细地址最大50字符',
                },
                contacts_name: {
                    required: '联系人不能为空',
                    minlength: '联系人最小2字符',
                    maxlength: '联系人最大8字符',
                },
                company_cover: {
                    required: '企业门头照不能为空',
                },
                business_legal_representative: {
                    minlength: '企业法人姓名最小2字符',
                    maxlength: '企业法人姓名最大50字符',
                },
                business_legal_card: {
                    minlength: '法人身份证号18字符',
                    maxlength: '法人身份证号18字符',
                },
                business_legal_card_front: {},
                business_legal_card_back: {},
                business_licence_number: {
                    minlength: '营业执照编号最小2字符',
                    maxlength: '营业执照编号最大50字符',
                },
                business_licence_number_electronic: {}
            }
        });
    });
</script>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="footer" class="wrapper" style="position: absolute;left: 0px;right: 0px;bottom: -240px;width:100%">
    <p><a href="http://liubei.com" target="_blank">首页</a>
        | <a href="{{url('/')}}">招聘英才</a>
        | <a href="">合作及洽谈</a>
        | <a href="">联系我们</a>
        | <a href="">关于我们</a>
        | <a href="">友情链接</a>
    </p>
    © Copyright 2016 粤ICP备16026125号-1<br>
</div>


<div></div>
</body>
</html>