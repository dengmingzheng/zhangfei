@extends('home.layout.base')
@section('body')
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div><div>
        <div class="header">
            <div class="ins-nav">
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
        <div class="contactus">
            <div class="content">
                <h1>联系我们</h1>
                <div class="opinion">
                    <p>点红科技团队非常重视您的反馈意见。</p>
                    <p>如您有任何问题或建议，请与我们联系。</p>
                    <p>点红科技团队会尽快回复您的反馈。</p>
                </div>
                <div class="information">
                    <h3>联系方式</h3>
                    <p>客服电话：400-860-0170</p>
                    <p>商务合作：sale@liubeixc.com</p>
                    <p>简历投递：hr@liubeixc.com</p>
                    <p>意见反馈：service@liubeixc.com</p>
                </div>
                <div class="address">
                    <h3>公司地址</h3>
                    <p>深圳市宝安区爱群路三九工业区17号（邮编：518108）</p>
                </div>
                <div class="address">
                    <h3>关注我们</h3>
                    <a href="http://weibo.com/u/5963454766" target="_blank">新浪微博</a>
                    <a class="J_WeChat">官方微信</a>
                </div>
                <div class="home">
                    <a href="#">首页 <i></i></a>
                    <a href="#">联系我们<i></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection
