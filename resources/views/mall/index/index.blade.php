@extends('mall.layout.base')
@section('content')

    <link href="{{asset('mall/css/index.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mall/css/indexs.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('mall/js/jquery.SuperSlide.2.1.1.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('mall/js/home_index.js?t=1571149463')}}" charset="utf-8"></script>

    <script type="text/javascript">var uid = window.location.href.split("#V3");
        var fragment = uid[1];
        if (fragment) {
            if (fragment.indexOf("V3") == 0) {
                document.cookie = 'uid=0';
            } else {
                document.cookie = 'uid=' + uid[1];
            }
        }

        var isAppCallBack=true;
        function appCallback(data){
            window.location.reload();
        }
    </script>
    <style type="text/css">.category {
            display: block !important;
        }</style>
    <div class="clear"></div>

    <!-- HomeFocusLayout Begin-->
    <div class="home-focus-layout">  <div id="slideBox" class="slideBox">
            <div class="main_banner_wrap">
                <ul class="banner_pic_ul">
                    <li>
                        <a href="http://www.liubeixc.com/entry/?act=index&amp;op=special&amp;mod=fxyhl" target="_blank" title="">
                            <img width="752" height="291" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-101-2.jpg">
                        </a>
                    </li>
                </ul>
                <div class="main_banner_change main_banner_prev prev" href="javascript:void(0)">&lt;</div>
                <div class="main_banner_change main_banner_next next" href="javascript:void(0)">&gt;</div>
            </div>
        </div>

        <div class="jfocus-trigeminy">
            <ul style="left: -750px; width: 1500px;">
                <li>
                    <a href="http://www.liubeixc.com/mall/" target="_blank" title="" style="opacity: 1;">
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-103-1-1.jpg" alt=""></a>
                    <a href="" target="_blank" title="" style="opacity: 1;">
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-103-1-2.jpg" alt=""></a>
                    <a href="" target="_blank" title="" style="opacity: 1;">
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-103-1-3.jpg" alt=""></a>
                </li>
                <li>
                    <a href="" target="_blank" title="" style="opacity: 1;">
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-103-2-1.jpg" alt=""></a>
                    <a href="" target="_blank" title="" style="opacity: 1;">
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-103-2-2.jpg" alt=""></a>
                    <a href="" target="_blank" title="" style="opacity: 1;">
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/editor/web-101-103-2-3.jpg" alt=""></a>
                </li>
            </ul>
            <div class="pagination"><span style="opacity: 0.4;"></span><span style="opacity: 1;"></span></div><div class="arrow pre" style="opacity: 0.5;"></div><div class="arrow next" style="opacity: 0.5;"></div></div>

        <script type="text/javascript">
            jQuery(".slideBox").slide({mainCell:".main_banner_wrap ul",autoPlay:true});
        </script>



        <div class="right-sidebar">
            <div class="policy">
                <ul>
                    <li class="b1">三天包退</li>
                    <li class="b2">价格透明</li>
                    <li class="b3">闪电发货</li>
                </ul>
            </div>
            <div class="groupbuy">
                <div class="title"><i>折</i>近期折扣</div>
                <ul style="left: 0px; width: 210px;">
                    <li>
                        <dl style=" background-image:url(http://liubei-dev.img-cn-hangzhou.aliyuncs.com/nopicture.jpg)">
                            <dd class="time"> <span class="time-remain"></span></dd>
                        </dl>
                    </li>
                </ul>
                <div class="pagination"><span style="opacity: 1;"></span></div><div class="arrow pre" style="opacity: 0;"></div><div class="arrow next" style="opacity: 0.5;"></div></div>
            <div class="proclamation">
                <ul class="tabs-nav">
                    <li class="tabs-selected">
                        <h3>商城公告</h3>
                    </li>
                </ul>
                <div class="tabs-panel">
                    <ul class="mall-news">
                        <li><i></i><a target="_blank" href="http://liubei.com/mall/index.php?act=article&amp;op=show&amp;article_id=102" title="【刘备修车网】轻装上阵，暴风式席卷汽车后市场。">【刘备修车网】轻装上阵，暴 </a>
                            <time>(2016-10-13)</time>
                        </li>
                        <li><i></i><a target="_blank" href="http://liubei.com/mall/index.php?act=article&amp;op=show&amp;article_id=98" title="【刘备修车网】八面围城">【刘备修车网】八面围城 </a>
                            <time>(2016-09-26)</time>
                        </li>
                        <li><i></i><a target="_blank" href="http://liubei.com/mall/index.php?act=article&amp;op=show&amp;article_id=68" title="【喜讯】刘备修车网携手华北汽车公元，您看到了背后的原因吗？">【喜讯】刘备修车网携手华 </a>
                            <time>(2016-09-09)</time>
                        </li>
                        <li><i></i><a target="_blank" href="http://liubei.com/mall/index.php?act=article&amp;op=show&amp;article_id=65" title="【刘备全国招募-九江站】振臂九江">【刘备全国招募-九江站】 </a>
                            <time>(2016-09-07)</time>
                        </li>
                        <li><i></i><a target="_blank" href="http://liubei.com/mall/index.php?act=article&amp;op=show&amp;article_id=63" title="刘备修车网深圳龙岗服务站即将隆重开业！">刘备修车网深圳龙岗服务站 </a>
                            <time>(2016-09-06)</time>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--HomeFocusLayout End-->

    <!-- content start -->
    <div class="wrap-brand">
        <div class="message">
            <div class="message-layout">实时交易信息：</div>
            <div id="scroll_div" class="scroll_div">
                <div class="tempWrap" style="overflow:hidden; position:relative; width:972px"><ul style="width: 4374px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1134px;"><li class="clone" style="float: left; width: 148px;">
                            Aa**aa消费<i>604.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>80.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>1.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>1.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>1.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>0.01</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>0.02</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>0.05</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            朗朗**修厂消费<i>219.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>150.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            朗朗**修厂消费<i>188.50</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>10.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            东浩**修厂消费<i>942.50</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            东浩**修厂消费<i>219.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            东浩**修厂消费<i>145.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>100.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            海添**修厂消费<i>315.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            海添**修厂消费<i>268.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            活动**账号消费<i>89.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            Aa**aa消费<i>276.00</i>元
                        </li>
                        <li style="float: left; width: 148px;">
                            Aa**aa消费<i>604.00</i>元
                        </li>
                        <li class="clone" style="float: left; width: 148px;">
                            活动**账号消费<i>80.00</i>元
                        </li><li class="clone" style="float: left; width: 148px;">
                            活动**账号消费<i>1.00</i>元
                        </li><li class="clone" style="float: left; width: 148px;">
                            活动**账号消费<i>1.00</i>元
                        </li><li class="clone" style="float: left; width: 148px;">
                            活动**账号消费<i>1.00</i>元
                        </li><li class="clone" style="float: left; width: 148px;">
                            活动**账号消费<i>0.01</i>元
                        </li><li class="clone" style="float: left; width: 148px;">
                            活动**账号消费<i>0.02</i>元
                        </li></ul></div>
            </div>
        </div>
        <div class="left-layoutGood fix">
            <ul class="tabs-nawG tabs-nav">
                <li class="tabs-selected">
                    <i class="arrow"></i>
                    <h3>热卖商品</h3>
                </li>
                <li>
                    <i class="arrow"></i>
                    <h3>新品推荐</h3>
                </li>
            </ul>
            <div class="tabs-panels tabs-panel fix">
                <ul>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11396" target="_blank">
                                <img alt="固特异轮胎 三能 EXCELLENCE 23560R18" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/91/MtkkYfaMQG.jpg@!240">
                            </a></p>
                        <p class="goods-name"><a title="固特异轮胎 三能 EXCELLENCE 23560R18" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11396" target="_blank">固特异轮胎 三能 EXCELLENCE 23560R18</a></p>
                        <p class="goods-price">商城价：<em>￥710.00</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">
                                <img alt="车仆润滑油" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg">
                            </a></p>
                        <p class="goods-name"><a title="车仆润滑油" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">车仆润滑油</a></p>
                        <p class="goods-price">商城价：<em>￥0.50</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=476" target="_blank">
                                <img alt="润滑油" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/104/14707991710.jpg@!240">
                            </a></p>
                        <p class="goods-name"><a title="润滑油" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=476" target="_blank">润滑油</a></p>
                        <p class="goods-price">商城价：<em>￥188.50</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10465" target="_blank">
                                <img alt="标榜合成型制动液/沸点205 /5支起送货" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05298058010624019.jpg@!240">
                            </a></p>
                        <p class="goods-name"><a title="标榜合成型制动液/沸点205 /5支起送货" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10465" target="_blank">标榜合成型制动液/沸点205 /5支起送货</a></p>
                        <p class="goods-price">商城价：<em>￥200.00</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=559" target="_blank">
                                <img alt="测试0号" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/86/MwTdksYCcQ.jpg@!240">
                            </a></p>
                        <p class="goods-name"><a title="测试0号" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=559" target="_blank">测试0号</a></p>
                        <p class="goods-price">商城价：<em>￥0.10</em></p>
                    </li>
                </ul>				</div>
            <div class="tabs-panels tabs-panel tabs-hide fix">
                <ul>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11445" target="_blank">
                                <img alt="是否需要审核" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg">
                            </a></p>
                        <p class="goods-name"><a title="是否需要审核" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11445" target="_blank">是否需要审核</a></p>
                        <p class="goods-price">商城价：<em>￥0.15</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11442" target="_blank">
                                <img alt="213124" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg">
                            </a></p>
                        <p class="goods-name"><a title="213124" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11442" target="_blank">213124</a></p>
                        <p class="goods-price">商城价：<em>￥1.00</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">
                                <img alt="车仆润滑油" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg">
                            </a></p>
                        <p class="goods-name"><a title="车仆润滑油" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">车仆润滑油</a></p>
                        <p class="goods-price">商城价：<em>￥0.50</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11440" target="_blank">
                                <img alt="WEQWR" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg">
                            </a></p>
                        <p class="goods-name"><a title="WEQWR" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11440" target="_blank">WEQWR</a></p>
                        <p class="goods-price">商城价：<em>￥0.01</em></p>
                    </li>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11439" target="_blank">
                                <img alt="asdfasdfasdf" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/86/DZi2x5EREr.png@!240">
                            </a></p>
                        <p class="goods-name"><a title="asdfasdfasdf" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11439" target="_blank">asdfasdfasdf</a></p>
                        <p class="goods-price">商城价：<em>￥22.00</em></p>
                    </li>
                </ul>				</div>
        </div>
        <div style="clear: both;"></div>
        <div class="star fix">
            <div class="star-goods fix">
                <div class="left"><i class="left-icon"><span>明星商品</span></i></div>
                <div class="right change" type="star"><i class="right-icon"></i><a href="javascript:void(0);">换一批</a></div>
            </div>
            <div class="tabs-panels fix" ref="star">
                <ul>
                    <li class="goods-li">
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=476" target="_blank">
                                <img alt="润滑油" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/104/14707991710.jpg@!240">
                            </a></p>
                        <p class="goods-name"><a title="润滑油" href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=476" target="_blank">润滑油</a></p>
                        <p class="goods-price">商城价：<em>￥188.50</em></p>
                    </li>
                </ul>

            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="recommend fix">
            <div class="recommend-goods fix">
                <div class="left fix"><i class="left-icon"><span> 推荐店铺</span></i></div>
                <div class="right fix"><a href="http://liubei.com/mall/index.php?act=flagship&amp;op=index">更多</a><i class="right-icon"></i></div>
                <div style="clear: both;"></div>
            </div>
            <div class="tabs-panels fix">
                <ul>
                    <li>
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=86" target="_blank">
                                <img alt="郑州经销商1号店" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/λ1480581067579.JPEG@!240"></a>
                        </p>
                        <p class="goods-brandname"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=86">郑州经销商1号店</a>
                        </p>
                        <p class="goods-prices">
                            <span class="goods-price-spans">商品数量<em>29</em></span>
                        </p>
                        <p class="goods-price">
                            <span class="goods-price-span">主营：<em>车内饰品</em></span>

                        </p>
                    </li>
                    <li>
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=91" target="_blank">
                                <img alt="广州广隆汽配城" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/͟1477571331772.jpeg@!240"></a>
                        </p>
                        <p class="goods-brandname"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=91">广州广隆汽配城</a>
                        </p>
                        <p class="goods-prices">
                            <span class="goods-price-spans">商品数量<em>5</em></span>
                        </p>
                        <p class="goods-price">
                            <span class="goods-price-span">主营：<em>导航，净化器</em></span>

                        </p>
                    </li>
                    <li>
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=92" target="_blank">
                                <img alt="德龙汽配店" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/΋14769444740.jpg@!240"></a>
                        </p>
                        <p class="goods-brandname"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=92">德龙汽配店</a>
                        </p>
                        <p class="goods-prices">
                            <span class="goods-price-spans">商品数量<em>7</em></span>
                        </p>
                        <p class="goods-price">
                            <span class="goods-price-span">主营：<em>润滑油</em></span>

                        </p>
                    </li>
                    <li>
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=94" target="_blank">
                                <img alt="一洲汽配店" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/ccJx6EKMN594.jpg@!240"></a>
                        </p>
                        <p class="goods-brandname"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=94">一洲汽配店</a>
                        </p>
                        <p class="goods-prices">
                            <span class="goods-price-spans">商品数量<em>0</em></span>
                        </p>
                        <p class="goods-price">
                            <span class="goods-price-span">主营：<em>机油</em></span>

                        </p>
                    </li>
                    <li>
                        <p class="goods-thumb"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=96" target="_blank">
                                <img alt="盛康汽配店" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/SptGKRRSB4179.jpg@!240"></a>
                        </p>
                        <p class="goods-brandname"><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=96">盛康汽配店</a>
                        </p>
                        <p class="goods-prices">
                            <span class="goods-price-spans">商品数量<em>0</em></span>
                        </p>
                        <p class="goods-price">
                            <span class="goods-price-span">主营：<em>防冻液</em></span>

                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- content end -->
@endsection












