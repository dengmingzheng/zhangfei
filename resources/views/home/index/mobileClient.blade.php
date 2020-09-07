@extends('home.layout.base')

@section('body')
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div><div>
        <div class="subNavs-mobilePage">
            <div class="subNavList">
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
                </div>        </div>
            <div class="btn-download">
                <a class="btn-ios J_mobileCode" href="#linkios">Ios</a>
                <a class="btn-android J_mobileCode" href="#linkandroid">Android</a>
            </div>
        </div>
    </div>
    <div class="layer_notice wxqrcode lbxcapp" style="height:433px;">
        <h1>刘备修车APP下载</h1>
        <h6></h6>
        <div class="qrcode-bg"><img src="{{asset('/home/images/mobile_code.png')}}" width="333"></div>
    </div>

@endsection
