@extends('home.layout.base')

@section('body')
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div><div>
        <div class="subNavs2">
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
                        </ul>
                    </div>
                </div>        </div>
        </div>
        <div>
            <div class="tab">
                <div class="tabList fix">
                    <div class="mesBox fix">
                        <h1>产业资讯</h1>
                        <h3>头条资讯</h3>
                        <div class="left">
                            <div class="content">
                                <h5><a href="#">深圳第一届汽车维修新技术论坛在车仆集团成功举办</a></h5>
                                <p><a href="#">12月2日，深圳市第一届汽车维修新技术论坛在车仆控股集团成功举办。此次论坛由深圳宝安汽车维修协会及石岩车管所共同主办，车仆控股集团深圳铁茧科技有限公司承办。</a></p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="rightImg">
                                <div class="content">
                                    <p><a href="#">移动互联网浪潮下企业的出路在哪里？车仆微圈告诉你</a></p>
                                </div>
                            </div>
                            <div class="rightImgs">
                                <div class="content">
                                    <p><a href="#">车仆参加广州万通千人创业工程活动备受学子青睐</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mesPage fix">
                        <div class="lefts fix">
                            <h3>最新资讯</h3>
                            <div class="pageleft">
                                <p>
                                    <a target="_blank" title="【刘备修车网】轻装上阵，暴风式席卷汽车后市场。 " href="">【刘备修车网】轻装上阵，暴风式<span>2016-10-12</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="为什么我的修理厂比别人的差这么多？ " href="">为什么我的修理厂比别人的差这么<span>2016-10-10</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="重管理才能德天下 " href="">重管理才能德天下<span>2016-09-29</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="【刘备修车网】八面围城 " href="">【刘备修车网】八面围城<span>2016-09-26</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="后市场需要一个拨乱反正的王者 " href="">后市场需要一个拨乱反正的王者<span>2016-09-19</span></a>
                                </p>
                            </div>
                            <div class="pageright">
                                <p>
                                    <a target="_blank" title="汽车后市场发展，去浮躁是关键 " href="">汽车后市场发展，去浮躁是关键<span>2016-09-13</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="【喜讯】刘备修车网携手华北汽车公元，您看到了背后的原因吗？ " href="">【喜讯】刘备修车网携手华北汽车<span>2016-09-09</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="汽车后市场：行业的成功在于积累 " href="">汽车后市场：行业的成功在于积累<span>2016-09-08</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="【刘备全国招募-九江站】振臂九江 " href="">【刘备全国招募-九江站】振臂九<span>2016-09-07</span></a>
                                </p>
                                <p>
                                    <a target="_blank" title="刘备修车网深圳龙岗服务站即将隆重开业！ " href="">刘备修车网深圳龙岗服务站即将隆<span>2016-09-06</span></a>
                                </p>
                            </div>
                            <div style="clear: both;"></div>

                        </div>
                        <div class="rights">
                            <p>获得刘备团队及行业最新资讯的推送，请关注：</p>
                            <div class="rights_cens">
                                <div class="img">
                                    <img src="{{asset('/home/images/QRcodes.jpg')}}" alt="" width="92" height="92">
                                    <p>@刘备修车网</p>
                                </div>
                                <div class="img">
                                    <a href="http://weibo.com/u/5963454766" target="_blank"> <img src="{{asset('/home/images/sina.jpg')}}" alt=""></a>
                                    <p>官方新浪微博</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="home" style="margin-top:30px;">
                        <a href="#">首页 <i></i></a>
                        <a href="#">产业资讯 <i></i></a>
                    </div>
                </div>
            </div>
        </div>

@endsection