@extends('home/layout/base')
@section('style')
    <style>
        p.warning-validate{
            line-height:22px;
            color:#bb2b2f;
            margin-bottom:10px;
        }
        .errorMessage{
            display: none;
        }
    </style>
@endsection
@section('body')
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div>
    <div class="header">
        <div class="nav">
            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('/home/images/logo.png')}}" alt=""></a></div>
            <div class="menu">
                <ul>
                    <li><a href="{{url('/')}}">首页</a></li>
                    <li><a href="{{url('/mall')}}">刘备商城</a></li>
                    <li><a href="{{url('/joinAdvantage')}}">招商专区</a></li>
                    <li><a href="{{url('/contact')}}">联系我们</a></li>
                    <li><a href="{{url('/news')}}">产业资讯</a></li>
                    <li class="J_mobile" style="position: relative;"><span class="icon icon-mobile"></span><a href="{{url('/mobileClient')}}" style="float:left;">手机客户端</a>
                        <div class="float-window">
                            <div class="content-qrcode">
                                <div class="header-qrcode">
                                    <p>扫一扫下载客户端</p>
                                    <p>最新资讯一手掌握</p>
                                </div>
                                <div class="body-qrcode">
                                    <img src="{{asset('/home/images/mobile_code.png')}}" width="120" height="118">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<div class="banners">
    <div class="banners_test">
        <div class="bannersBox">
            <div class="banner" id="banner">
                <a href="http://liubei.com/entry?act=index&amp;op=special&amp;mod=xdzf" class="d1 bannerImg7" style="display: block; z-index: 1;"></a>
                <a href="javascript:void(0);" class="d1 bannerImg5" style="display: none; z-index: 2;"></a>
                <a href="javascript:void(0);" class="d1 bannerImg4" style="display: none; z-index: 2;"></a>
                <a href="javascript:void(0);" class="d1 bannerImg2" style="cursor: auto; display: none; z-index: 2;"></a>
                <a href="javascript:void(0);" class="d1 bannerImg3" style="cursor: auto; display: none; z-index: 2;"></a>
                <div class="controller" id="banner_id">
                    <ul>
                        <li class="nuw"></li>
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="loginLoayout">
            <div class="login">
                <div class="loginContent">
                    <h3 class="login-title fix">
                        <span>用户登录</span>
                        <a href="{{url('/register')}}"><i class="helpIcon"></i>立即注册</a>
                    </h3>
                    <div class="loginForm">
                        <form id="userLoginForm" action="{{url('mall/login')}}" method="post" class="login-submit">
                            {{csrf_field()}}
                            <div class="login-field logusername">
                                <i class="inlineBlock inline"></i>
                                <input type="text" name="member_name" id="member_name"  value="{{old('member_name')}}" class="textbox" placeholder="请输入账号/手机号码/邮箱">
                            </div>
                            <div class="errorMessage">
                                {{$errors->first('member_name')}}
                            </div>
                            <div class="login-field loguserpwd">
                                <i class="pas inlineBlock inline"></i>
                                <input type="password" name="password" id="password" value="{{old('password')}}" class="textbox" placeholder="请输入登录密码">
                                <i class="key"></i>
                            </div>
                            <div class="errorMessage">
                                {{$errors->first('password')}}
                            </div>
                            <div class="login-tips">
                                <label for="remember"><input type="checkbox" name="remember" @if(old('remember')) checked="checked" @endif>&nbsp; 记住我</label>
                                <a href="{{url('/forget_password')}}">忘记密码</a>
                            </div>
                            <div>
                                <input type="submit" class="login-btn" value="登&nbsp; 录">
                            </div>
                        </form>
                    </div>
                    <div class="message">
                        <h2 class="login-title fix">
                            <span>产业资讯</span>
                            <a target="_blank" href="">更多<i class="rightIcon"></i></a>
                        </h2>
                        <div class="messageContent">
                            @foreach($articles as $article)
                            <p>
                                <a target="_blank" title="{{$article['article_title']}}" href="{{url('/articles',['id'=>$article['id']])}}">{{$article['article_title']}}<span>{{$article['created_at']}}</span></a>
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mainbody">
    <div class="mainImg fix">
        <ul>
            <li>
                <a href="{{url('/mall')}}">
                    <div class="sw_box">
                        <i class="sw"></i>
                    </div>
                    <div class="sw_box font">
                        <p>刘备修车商城</p>
                        <p>隆重上线</p>
                    </div>
                </a>
            </li>
            <li class="w">
                <a href="">
                    <div class="sw_box">
                        <i class="sw1"></i>
                    </div>
                    <div class="sw_box font">
                        <p>赚积分，赢大奖！</p>
                        <p class="grey">宝箱活动火热进行中</p>
                        <p class="black">立即参加<i></i></p>
                    </div>
                </a>
            </li>
            <li class="w">
                <a href="{{url('/joinAdvantage')}}">
                    <div class="sw_box">
                        <i class="sw2"></i>
                    </div>
                    <div class="sw_box fonts">
                        <p>特许加盟</p>
                        <p class="grey">互惠互利，携手共赢</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div style="clear: both;"></div>
</div>

@endsection

@section('script')
    <script>
        $().ready(function () {
            // 在键盘按下并释放及提交后验证提交表单
            $("#userLoginForm").validate({
                errorElement: "p",
                errorClass: "warning-validate",
                errorPlacement: function (error, element) {
                    //$(element).parent().next().html(error);
                    var error_msg = $(error).text();
                    $(element).attr('placeholder',error_msg);
                    $(element).parent().css({borderColor:"#bb2b2f",backgroundColor:"#ffffcc"});
                    $(element).one('focus',function(){
                        $(this).parent().css({borderColor:"#cccccc",backgroundColor:"#f0f0f0"});
                    })
                },
                rules: {
                    user_name: "required",
                    password: {
                        required: true
                    }
                },
                messages: {
                    user_name: "账号不能为空",
                    password: {
                        required: "密码不能为空"
                    }
                }
            });
        });
    </script>
@endsection
