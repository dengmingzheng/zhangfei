@extends('mall.layout.base')
@section('style')

    <link rel="stylesheet" href="{{asset('mall/css/page-car.css')}}">
    <link rel="stylesheet" href="{{asset('mall/css/flagship.css')}}">
@endsection
@section('content')

    <div class="wrap-brand">
        <div class="flagship-label  fix">
            <ul>
                <li class="act"><a class="act-bar" data-type="0">本地店铺</a></li>
                <li><a class="act-bar" data-type="1">全国店铺</a></li>
            </ul>
        </div>
        <div class="flagship-list" id="flagship-list">
            <style>
            </style>

            <nav id="main-nav" class="sort-bar">
                <div class="nch-sortbar-array"> 排序方式：
                    <ul class="sort-ul">
                        <li order="0" class="selected"><a title="默认排序" href="javascript:void(0);">默认</a></li>
                        <li order="1" class=""><a href="javascript:void(0);" class="">销量<i></i></a></li>
                        <li order="2" class=""><a href="javascript:void(0);" class="">信誉<i></i></a></li>
                    </ul>
                    <div class="nch-sortbar-owner">
                        <span><a href="javascript:void(0);" id="isfb" class=""><i></i>收藏或购买过</a></span>
                    </div>
                </div>
                <div class="flagship-search">
                    <span><input type="text" name="store_keyword" value="" placeholder="店铺搜索" maxlength="20"><i class="search-btn"></i></span>
                </div>
            </nav>

            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=198" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="打发第三方" title="">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=198" target="_blank" class="merchant_name">打发第三方</a>
                            <a href="#" class="im-chat-link" data-chatid="liubei_1637">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i></span>
                        <p>主营：</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">0</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=197" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="北京鑫鑫世纪广昊商贸有限责任公司" title="">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=197" target="_blank" class="merchant_name">北京鑫鑫世纪广昊商贸有限责任公司</a>
                            <a href="#" class="im-chat-link" data-chatid="liubei_1636">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i></span>
                        <p>主营：</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">0</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=192" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="tet898" title="">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=192" target="_blank" class="merchant_name">tet898</a>
                            <a href="#" class="im-chat-link" data-chatid="liubei_1600">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i></span>
                        <p>主营：</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">0</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=191" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="test-20161230-1" title="">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=191" target="_blank" class="merchant_name">test-20161230-1</a>
                            <a href="#" class="im-chat-link" data-chatid="liubei_1595">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i></span>
                        <p>主营：</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">0</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=101" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/na37ccjYih101.jpg@!240" alt="张氏批发商" title="shop/store/na37ccjYih101.jpg">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=101" target="_blank" class="merchant_name">张氏批发商</a>
                            <a href="#" class="im-chat-link" data-chatid="test_1">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i><b></b></span>
                        <p>主营：</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">39</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=96" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/SptGKRRSB4179.jpg@!240" alt="盛康汽配店" title="shop/avatar/SptGKRRSB4179.jpg">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=96" target="_blank" class="merchant_name">盛康汽配店</a>
                            <a href="#" class="im-chat-link" data-chatid="test_1">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i><b></b></span>
                        <p>主营：防冻液</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">111</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=94" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/ccJx6EKMN594.jpg@!240" alt="一洲汽配店" title="shop/store/ccJx6EKMN594.jpg">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=94" target="_blank" class="merchant_name">一洲汽配店</a>
                            <a href="#" class="im-chat-link" data-chatid="test_1">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i><b></b></span>
                        <p>主营：机油</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">10</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=92" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/΋14769444740.jpg@!240" alt="德龙汽配店" title="shop/avatar/΋14769444740.jpg">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=92" target="_blank" class="merchant_name">德龙汽配店</a>
                            <a href="#" class="im-chat-link" data-chatid="autoparts_3">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i><b></b></span>
                        <p>主营：润滑油</p>
                        <p>商品总数：<i class="i-col">7</i></p>
                        <p>销量：<i class="i-col">60</i></p>
                        <p>综合评分：<i class="i-col">5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10465" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05298058010624019.jpg@!240" alt="标榜合成型制动液/沸点205 /5支起送货"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10465" target="_blank">标榜合成型制动液/沸点205 /5支起送货</a></p>
                            <p>
                                <i>￥200.00</i><em>成交39笔</em>
                            </p></li>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10464" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05298057767220927.jpg@!240" alt="车仆高级制动液/沸点230/5瓶起送货"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10464" target="_blank">车仆高级制动液/沸点230/5瓶起送货</a></p>
                            <p>
                                <i>￥100.00</i><em>成交9笔</em>
                            </p></li>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10463" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="TE弓箭"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10463" target="_blank">TE弓箭</a></p>
                            <p>
                                <i>￥158.00</i><em>成交1笔</em>
                            </p></li>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10041" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296435258478676.png@!240" alt="Mobil美孚路宝手动变速箱油齿轮油差速器油大众 "></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10041" target="_blank">Mobil美孚路宝手动变速箱油齿轮油差速器油大众 </a></p>
                            <p>
                                <i>￥150.00</i><em>成交0笔</em>
                            </p></li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=91" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/͟1477571331772.jpeg@!240" alt="广州广隆汽配城" title="shop/avatar/͟1477571331772.jpeg">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=91" target="_blank" class="merchant_name">广州广隆汽配城</a>
                            <a href="#" class="im-chat-link" data-chatid="hello">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i><b></b></span>
                        <p>主营：导航，净化器</p>
                        <p>商品总数：<i class="i-col">5</i></p>
                        <p>销量：<i class="i-col">575</i></p>
                        <p>综合评分：<i class="i-col">4.7</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11396" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/91/MtkkYfaMQG.jpg@!240" alt="固特异轮胎 三能 EXCELLENCE 23560R18"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11396" target="_blank">固特异轮胎 三能 EXCELLENCE 23560R18</a></p>
                            <p>
                                <i>￥710.00</i><em>成交126笔</em>
                            </p></li>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="车仆润滑油"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">车仆润滑油</a></p>
                            <p>
                                <i>￥0.50</i><em>成交52笔</em>
                            </p></li>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11421" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="TEST购买无效"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11421" target="_blank">TEST购买无效</a></p>
                            <p>
                                <i>￥0.50</i><em>成交13笔</em>
                            </p></li>
                        <li class="list-position"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11442" target="_blank">
                                <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="213124"></a>
                            <p class="g-title"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11442" target="_blank">213124</a></p>
                            <p>
                                <i>￥1.00</i><em>成交9笔</em>
                            </p></li>
                    </ul>
                </div>
            </div>
            <div class="flagship-list-chunk fix">
                <div class="flagship-list-chunk1">
                    <div class="flagship-list-img">
                        <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=88" target="_blank">
                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/3hnPwpxrec88.jpg@!240" alt="河南国际汽配城" title="shop/store/3hnPwpxrec88.jpg">
                        </a>
                    </div>
                    <div class="flagship-list-note">
                        <h2><a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=88" target="_blank" class="merchant_name">河南国际汽配城</a>
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=123123&amp;site=qq&amp;menu=yes" title="QQ: 123123"><img border="0" src="http://wpa.qq.com/pa?p=2:666666:52" style=" vertical-align: middle;"></a>
                            <a href="#" class="im-chat-link" data-chatid="test_1">
                                <img src="http://liubei.com/mall/templates/default/images/chat.png">
                            </a>
                        </h2>
                        <span><i></i><b></b></span>
                        <p>主营：润滑油，防冻液</p>
                        <p>商品总数：<i class="i-col">0</i></p>
                        <p>销量：<i class="i-col">71</i></p>
                        <p>综合评分：<i class="i-col">4.5</i></p>
                        <p class="list-ps">所属服务站：郑州上街服务站</p>
                    </div>
                </div>
                <div class="flagship-list-chunk2">
                    <ul>
                        <li class="list-position"><a>
                                <img src="http://liubei.com/shop/common/goods_image.png"></a>
                            <p style="text-align: center;"><a>暂无数据</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tc mt20 mb20">
                <div class="pagination"> <ul><li><span>首页</span></li><li><span>上一页</span></li><li><span class="currentpage">1</span></li><li><a class="demo" page_no="2"><span>2</span></a></li><li><a class="demo" page_no="2"><span>下一页</span></a></li><li><a class="demo" page_no="2"><span>末页</span></a></li></ul> </div>
            </div>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/area_pop.js"></script>
            <script type="text/javascript">
                $(function(){
                    //点击分页，根据所有参数查
                    $('.pagination a').on('click', function(){
                        var page_no = $(this).attr('page_no');
                        $('#page_no').val(page_no);
                        var param = _init_param();
                        param.curpage = page_no;
                        loadResult(param);
                    })
                    //点击排序
                    $('.sort-ul li').on('click', function(){
                        if($(this).hasClass('selected')){
                            if($(this).children('a').hasClass('desc')){
                                $(this).children('a').removeClass('desc').addClass('asc');
                            }else{
                                $(this).children('a').removeClass('asc').addClass('desc');
                            }
                        }else{
                            $(this).children('a').addClass('desc').removeClass('asc');
                            $(this).addClass('selected').siblings().removeClass('selected');
                        }
                        loadResult(_init_param());
                    })
                    //点击是否收藏或购买过
                    $('#isfb').on('click', function(){
                        // 判断登录
                        $(this).toggleClass('selected');
                        loadResult(_init_param());
                    })
                    //点击搜索
                    $('.search-btn').on('click', function(){
                        if($('input[name="store_keyword"]').val()==''){
                            alert('请输入店铺名称！');
                            return false;
                        }
                        loadResult(_init_param());
                    })

                    // 选择地区
                    $('#area-container').on({
                        'mouseout': function(){
                            $('#area_selector').hide();
                        },
                        'mouseover': function(){
                            $('#area_selector').show();
                        }
                    })
                    $('#area_selector').on({
                        'mouseenter':function(){
                            $(this).show();
                        }
                    })
                    AREA_POP._init('area-container', true);

                })
            </script>

            <script type="text/javascript">
                $(function(){
                    $(".im-chat-link").live('click',function(){
                        $(".im-chat-link").unbind('click');
                        webimLink($(".im-chat-link"));
                    });
                });
            </script>
            <script>
                imgLoaderManage({
                    area:".flagship-list-img img",// 店铺
                    src:{
                        loading:"http://liubei.com/shop/common/store_avatar.jpeg",// 载入图片
                        error:"http://liubei.com/shop/common/store_avatar.jpeg"// 错误图片
                    }
                });
                imgLoaderManage({
                    area:".list-position img",// 产品
                    src:{
                        loading:"/data/upload/shop/common/loading_red.gif",// 载入图片
                        error:"http://liubei.com/shop/common/goods_image.png"// 错误图片
                    }
                });
            </script>
        </div>
    </div>
    <script type="text/javascript">
        //切换服务站
        var isAppCallBack = true;
        function appCallback(data){
            loadResult(_init_param());
        }
        $(function(){
            $('#search_act').val('flagship');
            $('.act-bar').on('click', function(){
                var _par = $(this).parent();
                $(_par).addClass('act').siblings().removeClass('act');
                loadResult(_init_param());
            })
        })
        //初始化参数
        function _init_param(){
            var scope = $('.flagship-label .act a')?$('.flagship-label .act a').attr('data-type'):0;
            var order = $('.sort-ul li.selected')?$('.sort-ul li.selected').attr('order'):0;
            var order_type = $('.sort-ul li.selected').children('a').hasClass('asc')?1:0;
            var isfb = $('#isfb').hasClass('selected')?1:0;
            var store_keyword = $('input[name="store_keyword"]')?$('input[name="store_keyword"]').val():'';
            return {'scope':scope, 'order':order, 'order_type':order_type,
                'isfb':isfb, 'keyword':store_keyword};
        }
        //加载数据
        function loadResult(param, url) {
            url = url || 'index.php?act=flagship&op=get_store';
            $('#flagship-list').load( url, param, function(){

            });
        }
    </script>

@endsection