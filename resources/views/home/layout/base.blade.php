<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <link rel="liubei icon" href="./liubei.ico">
    <title>刘备修车网 - 首页</title>
    <meta name="keywords" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta name="description" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <link rel="stylesheet" href="{{asset('/home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/home/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('/home/css/swiper.min.css')}}">

    <script type="text/javascript">
        var SITEURL = "{{url('/mall')}}";
    </script>
    <script src="{{asset('/common/js/jquery.js')}}"></script>
    <script src="{{asset('/common/js/jquery-ui/jquery.ui.js')}}"></script>
    <script src="{{asset('/common/js/jquery.validation.min.js')}}"></script>
    <script src="{{asset('/common/js/dialog/dialog.js')}}" id="dialog_js" charset="utf-8"></script>
    <link href="{{asset('/common/js/dialog/dialog.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('/home/js/additional-methods.min.js')}}"></script>
    <script src="{{asset('/home/js/layer/layer.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/home/js/layer/skin/layer.css')}}" id="layui_layer_skinlayercss" style="">
    {{--<script src="http://liubei.com/core/framework/libraries/storage/client/src/js/plupload.full.min.js"></script>--}}
    {{--<script src="http://liubei.com/core/framework/libraries/storage/client/src/js/uploadoss.js"></script>--}}
    @yield('style')
</head>
<body>

@yield('body')

<div class="footer">
    <div class="wrapper fix">
        <div class="left fix">
            <ul>
                <li>
                    <img src="{{asset('/home/images/ken.png')}}" alt="">
                    <dl>
                        <dt>
                            <a target="_blank" href="#">服务中心</a>
                        </dt>
                        <dd>
                            <a target="_blank" href="">刘备商城</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">商家中心</a>
                        </dd>
                        <dd>
                            <a target="_blank" href="">服务站管理</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <img src="{{asset('/home/images/ma.png')}}" alt="">
                    <dl>
                        <dt>
                            <a href="">招商专区</a>
                        </dt>
                        <dd>
                            <a href="">加盟优势</a>
                        </dd>

                        <dd>
                            <a href="">如何加盟</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <img src="{{asset('/home/images/liuLogo.png')}}" alt="">
                    <dl>
                        <dt>
                            <a href="">关于我们</a>
                        </dt>
                        <dd>
                            <a href="">加入我们</a>
                        </dd>

                    </dl>
                </li>
                <li>
                    <img src="{{asset('/home/images/wF.png')}}" alt="">
                    <dl>
                        <dt>
                            <a href="">联系我们</a>
                        </dt>
                        <dd>
                            <a href="">联系方式</a>
                        </dd>
                        <dd><a href="">在线客服</a></dd>
                        <dd><a href="" target="_blank">新浪微博</a></dd>
                        <dd><a class="J_WeChat" href="javascript:void(0);">官方微信</a></dd>
                    </dl>
                </li>
                <li>
                    <img src="{{asset('/home/images/icon_help_33x33.png')}}" alt="">
                    <dl>
                        <dt><a href="javascript:void(0);" style="margin-top:7px;">帮助中心</a></dt>
                        <dd>
                            <a href="">如何支付</a>
                        </dd>
                        <dd>
                            <a href="">如何购物</a>
                        </dd>
                        <dd>
                            <a href="">积分规则</a>
                        </dd>
                        <dd>
                            <a href="">常见问题</a>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="right fix">
            <p><i></i><span><a href="">免费热线电话</a></span></p>
            <p class="font32">400-860-0170</p>
            <p class="grey">周一到周日 9:00-18:00</p>
        </div>
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>
    <div class="copy">
        <p>
            <a href="{{url('/')}}}">首页 | </a>
            <a href="">招聘英才 | </a>
            <a href="">合作及洽谈 | </a>
            <a href="">联系我们 | </a>
            <a href="">关于我们 | </a>
            <a href="">友情链接 </a>
        </p>
        Copyright © 2015 深圳市点红网络科技有限公司版权所有.<br>粤ICP备16026125号-1

    </div>
</div>
<div class="fixed fix">
    <div class="fixeds fix">
        <div class="fixedsLeft">
            <img src="{{asset('/home/images/kong4.png')}}" alt="">
        </div>
        <div class="fixedsBox">
            <h3>刘备修车微信公众号</h3>
            <img src="{{asset('/home/images/QRcodes.jpg')}}" width="185" height="185" alt="">
            <div class="fixedBot">
                <a href=""><i></i></a>
            </div>
        </div>
    </div>
</div>
<div class="subNavList-one" style="display: none;">
    <div class="sub-nav">
        <div class="logo"><a href="{{asset('/')}}"><img src="{{asset('/home/images/logo.png')}}" alt=""></a></div>
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
<!--页脚脚本文件-->

<script src="{{asset('/home/js/global.js')}}"></script>
<script src="{{asset('/home/js/slider.js')}}"></script>
@yield('script')
<div class="layer_notice wxqrcode lbxcwx">
    <h1>刘备修车官方微信</h1>
    <h6>打开微信，点击右上角的"+"，选择"扫一扫"功能,用摄像头对准下方二维码即可。</h6>
    <div class="qrcode-bg"><img src="{{asset('/home/images/QRcodes.jpg')}}" width="333"></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".J_mobile").mouseover(function () {
            $(this).find(".content-qrcode").show();

        });
        $(".J_mobile").mouseout(function () {
            $(this).find(".content-qrcode").hide();
        });
    });
    $('.J_WeChat').on('click', function () {
        layer.open({
            type: 1,
            shade: 0.6,
            title: false,
            content: $('.lbxcwx'),
            cancel: function (index) {
                layer.close(index);
            }
        });
    });
</script>

</body>
</html>