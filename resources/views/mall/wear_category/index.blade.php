@extends('mall.layout.base')
@section('style')
    <link rel="stylesheet" href="{{asset('mall/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('mall/css/page-car.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('mall/css/search2.css')}}">

@endsection
@section('content')
    <div class="wrap-brand">
        <ul class="qWNavCate fix">
            <li ref="0"><a class="event-partCategory qW-icon1" href="javascript:void(0);"><div></div><span>油品</span></a></li>
            <li ref="1"><a class="event-partCategory qW-icon2" href="javascript:void(0);"><div></div><span>蓄电池</span></a></li>
            <li ref="2"><a class="event-partCategory qW-icon3" href="javascript:void(0);"><div></div><span>滤清器</span></a></li>
            <li ref="3"><a class="event-partCategory qW-icon4" href="javascript:void(0);"><div></div><span>制动系统</span></a></li>
            <li ref="4"><a class="event-partCategory qW-icon5" href="javascript:void(0);"><div></div><span>点火系统</span></a></li>

            <li ref="5"><a class="event-partCategory qW-icon6" href="javascript:void(0);"><div></div><span>皮带以及涨紧轮</span></a></li>
            <li ref="6"><a class="event-partCategory qW-icon7" href="javascript:void(0);"><div></div><span>雨刷片</span></a></li>

            <li ref="7"><a class="event-partCategory qW-icon8" href="javascript:void(0);"><div></div><span>照明</span></a></li>
            <li ref="8"><a class="event-partCategory qW-icon9" href="javascript:void(0);"><div></div><span>养护用品</span></a></li>
        </ul>

        <div class="carType-col fix">
            <span class="cTtxts">商品筛选</span>
            <div class="currentCarType-cars">
                <div class="select-type-board">
                    <div class="quickWear-type">
                        <!--					<img src="--><!--" class="currentType-brand" alt="暂无图片">-->
                        <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" class="currentType-brand" alt="暂无图片">
                        <span name="carName">您尚未选择车型</span>
                    </div>
                    <div class="select-type">
                        <a class="link" href="javascript:void(0);" id="showcar"></a>
                    </div>
                    <div class="select-clear">
                        <a class="event-clearCarmodel clearCarType" data-type="wearingCategory" style="display: none" href="javascript:void(0);">清空车型</a>
                    </div>
                </div>
            </div>
            <div class="vinCode-search">
                <input id="search_keyword" type="text" value="" maxlength="50" placeholder="在保养件中搜索">
                <input id="search_car" type="hidden" value="0_0_0_0_0_0">
                <input id="search_order" type="hidden" value="0">
                <input id="search_order_type" type="hidden" value="1">
                <input id="search_scope" type="hidden" value="0">
                <input id="search_hdfk" type="hidden" value="0">
                <input id="search_star" type="hidden" value="0">
                <input id="search_class" type="hidden" value="">
                <input id="search_class_level" type="hidden" value="0">
                <input id="search_brand" type="hidden" value="">
                <div id="txtVIN">在全车件中搜索</div>
                <input id="searchByKeyWords" type="button" value="搜索">
            </div>
        </div>
        <div id="hotSearch" class="qW-hotSearch fix">
            <span class="txt">热门关键词：</span>
            <div class="cnt">
                <span><a class="key" title="机滤">机滤</a></span>
                <span><a class="key" title="空滤">空滤</a></span>
                <span><a class="key" title="汽滤">汽滤</a></span>
                <span><a class="key" title="空调滤">空调滤</a></span>
                <span><a class="key" title="前片">前片</a></span>
                <span><a class="key" title="后片">后片</a></span>
                <span><a class="key" title="前盘">前盘</a></span>
                <span><a class="key" title="后盘">后盘</a></span>
                <span><a class="key" title="正时皮带">正时皮带</a></span>
                <span><a class="key" title="电瓶">电瓶</a></span>
                <span><a class="key" title="火花塞">火花塞</a></span>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="qWCnt fix">
            <div class="wholeCarCate">
                <ul class="class1">
                    <li class="qW-cateItem" class-id="1" class-level="1" title="油品">
                        <h3 title="油品"><i></i>油品</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="935" title="变速箱油">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="变速箱油"><span>变速箱油</span></a>
                            </li>
                            <li class-id="936" title="刹车油">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="刹车油"><span>刹车油</span></a>
                            </li>
                            <li class-id="934" title="机油">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="机油"><span>机油</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="2" class-level="1" title="蓄电池">
                        <h3 title="蓄电池"><i></i>蓄电池</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="472" title="蓄电池">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="蓄电池"><span>蓄电池</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="3" class-level="1" title="滤清器">
                        <h3 title="滤清器"><i></i>滤清器</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="61" title="机油滤清器">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="机油滤清器"><span>机油滤清器</span></a>
                            </li>
                            <li class-id="147" title="燃油滤清器">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="燃油滤清器"><span>燃油滤清器</span></a>
                            </li>
                            <li class-id="171" title="空气滤清器">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="空气滤清器"><span>空气滤清器</span></a>
                            </li>
                            <li class-id="499" title="空调滤清器">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="空调滤清器"><span>空调滤清器</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="4" class-level="1" title="制动系">
                        <h3 title="制动系"><i></i>制动系</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="273" title="前刹车片">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前刹车片"><span>前刹车片</span></a>
                            </li>
                            <li class-id="275" title="前刹车盘">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前刹车盘"><span>前刹车盘</span></a>
                            </li>
                            <li class-id="280" title="后刹车片">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="后刹车片"><span>后刹车片</span></a>
                            </li>
                            <li class-id="282" title="后刹车盘">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="后刹车盘"><span>后刹车盘</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="5" class-level="1" title="点火系">
                        <h3 title="点火系"><i></i>点火系</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="90" title="点火线圈">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="点火线圈"><span>点火线圈</span></a>
                            </li>
                            <li class-id="92" title="火花塞">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="火花塞"><span>火花塞</span></a>
                            </li>
                            <li class-id="94" title="高压线">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="高压线"><span>高压线</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="6" class-level="1" title="皮带以及涨紧轮">
                        <h3 title="皮带以及涨紧轮"><i></i>皮带以及涨紧轮</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="44" title="正时皮带">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="正时皮带"><span>正时皮带</span></a>
                            </li>
                            <li class-id="47" title="正时涨紧轮">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="正时涨紧轮"><span>正时涨紧轮</span></a>
                            </li>
                            <li class-id="72" title="发动机皮带">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="发动机皮带"><span>发动机皮带</span></a>
                            </li>
                            <li class-id="464" title="发电机皮带">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="发电机皮带"><span>发电机皮带</span></a>
                            </li>
                            <li class-id="465" title="发电机涨紧轮">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="发电机涨紧轮"><span>发电机涨紧轮</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="7" class-level="1" title="雨刷片">
                        <h3 title="雨刷片"><i></i>雨刷片</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="871" title="前风挡雨刮片">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前风挡雨刮片"><span>前风挡雨刮片</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="8" class-level="1" title="照明">
                        <h3 title="照明"><i></i>照明</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="298" title="制动灯灯泡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="制动灯灯泡"><span>制动灯灯泡</span></a>
                            </li>
                            <li class-id="619" title="前大灯灯泡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前大灯灯泡"><span>前大灯灯泡</span></a>
                            </li>
                            <li class-id="621" title="前指示灯灯泡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前指示灯灯泡"><span>前指示灯灯泡</span></a>
                            </li>
                            <li class-id="639" title="后指示灯灯泡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="后指示灯灯泡"><span>后指示灯灯泡</span></a>
                            </li>
                            <li class-id="623" title="前雾灯灯泡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前雾灯灯泡"><span>前雾灯灯泡</span></a>
                            </li>
                            <li class-id="625" title="前转向灯灯泡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="前转向灯灯泡"><span>前转向灯灯泡</span></a>
                            </li>
                            <li class-id="608" title="氙气灯">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="氙气灯"><span>氙气灯</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="qW-cateItem" class-id="9" class-level="1" title="养护用品">
                        <h3 title="养护用品"><i></i>养护用品</h3>
                        <ul style="display:none;" class="class2">
                            <li class-id="940" title="添加剂">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="添加剂"><span>添加剂</span></a>
                            </li>
                            <li class-id="941" title="玻璃水">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="玻璃水"><span>玻璃水</span></a>
                            </li>
                            <li class-id="942" title="防锈降噪">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="防锈降噪"><span>防锈降噪</span></a>
                            </li>
                            <li class-id="943" title="汽车蜡">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="汽车蜡"><span>汽车蜡</span></a>
                            </li>
                            <li class-id="944" title="润滑脂">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="润滑脂"><span>润滑脂</span></a>
                            </li>
                            <li class-id="945" title="油漆及辅料">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="油漆及辅料"><span>油漆及辅料</span></a>
                            </li>
                            <li class-id="946" title="粘合剂">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="粘合剂"><span>粘合剂</span></a>
                            </li>
                            <li class-id="947" title="防冻液">
                                <span class="switch center_docu"></span>
                                <a href="javascript:void(0);" title="防冻液"><span>防冻液</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- s 配件列表 -->
            <div id="search-container" class="qWMainCnt"><div class="qWnNavCrumble fix">
                    <div class="nav-crumble-item fix choosed-condition">
                        <span class="txt">当前已选条件：</span>
                    </div>
                </div>
                <div>
                </div>

                <div class="qW-lBrand fix">
                    <span class="txt">配件品牌：</span>
                    <div class="cnt">
                        <ul class="nci-brand nci-brand-show fix">
                            <li brand_id="800" title="康普顿" class="goods_brand_li">
                                <a class="evnet-search-brand">康普顿</a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div id="filter-container">
                    <!-- 搜索过滤条件及结果 -->
                    <div class="shop_con_list pr" id="main-nav-holder">
                        <nav class="sort-bar" id="main-nav">
                            <div class="nch-sortbar-array">
                                排序方式：
                                <ul>
                                    <li class="filter-event selected" data-order="0"><a href="javascript:void(0);" title="默认排序">默认</a></li>
                                    <li class="filter-event " data-order="1"><a href="javascript:void(0);" class="desc">销量<i></i></a></li>
                                    <li class="filter-event " data-order="2"><a href="javascript:void(0);" class="desc">人气<i></i></a></li>
                                    <li class="filter-event " data-order="3"><a href="javascript:void(0);" class="desc">价格<i></i></a></li>
                                </ul>
                            </div>
                            <div class="nch-sortbar-owner s_scope"><span><a href="javascript:void(0);" class=""><i></i>全国范围</a></span></div>
                            <div class="nch-sortbar-owner s_hdfk"><span><a href="javascript:void(0);" class=""><i></i>货到付款</a></span></div>
                            <div class="nch-sortbar-owner s_star"><span><a href="javascript:void(0);" class=""><i></i>明星商品</a></span></div>
                        </nav>

                        <div id="goods-container" class="good-list">
                            <!-- 搜索结果及分页 -->
                            <div class="page2">
                                <div class="pagination">
                                    <ul><li><span>上一页</span></li><li><a class="demo" page_no="2"><span>下一页</span></a></li></ul>    </div>
                            </div>
                            <!-- list start -->
                            <div class="list">
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" alt="车仆润滑油">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11441','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11441&quot;}" nc_type="compare_11441"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11441" target="_blank">车仆润滑油</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black">通用商品</i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">52</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="91" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png"></a>
                                                        <div class="float-contenr store_credit" style="display: none;">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width: 94%;"></i></em><span>好评率：<i class="rate-i">94%</i></span>
                                                                    <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=91" target="_blank">进入店铺</a>                            	</div>
                                                                <div class="float-list-ds rate"><p class="desccredit">如实描述：<span>4.8</span></p><p class="servicecredit">服务态度：<span>4.8</span></p><p class="deliverycredit">物流服务：<span>4.6</span></p></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">郑州上街服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥0.50</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11441">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_948" value="948">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11441" data-param="{goods_id:11441}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11436" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/14812753130.jpg@!240" alt="车仆高级制动液/沸点230/5瓶起送货">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11436','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11436&quot;}" nc_type="compare_11436"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11436" target="_blank">车仆高级制动液/沸点230/5瓶起送货</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black"></i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">31</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥20.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11436">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_970" value="970">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11436" data-param="{goods_id:11436}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11435" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/05297997616389455.jpg@!240" alt="车仆高级制动液/沸点230/5瓶起送货">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11435','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11435&quot;}" nc_type="compare_11435"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11435" target="_blank">车仆高级制动液/沸点230/5瓶起送货</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black"></i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">0</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥20.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11435">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_1000" value="1000">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11435" data-param="{goods_id:11435}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11434" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/14811675690.jpg@!240" alt=" 润滑油">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11434','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11434&quot;}" nc_type="compare_11434"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11434" target="_blank"> 润滑油</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black">通用商品</i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">0</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥1.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11434">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_1" value="1">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11434" data-param="{goods_id:11434}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11430" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/14811675690.jpg@!240" alt=" 润滑油">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11430','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11430&quot;}" nc_type="compare_11430"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11430" target="_blank"> 润滑油</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black">通用商品</i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">1</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥108.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11430">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_0" value="0">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11430" data-param="{goods_id:11430}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11418" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/05297997616389455.jpg@!240" alt="车仆高级制动液/沸点230/5瓶起送货">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11418','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11418&quot;}" nc_type="compare_11418"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11418" target="_blank">车仆高级制动液/沸点230/5瓶起送货</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black"></i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">16</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥2.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11418">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_31" value="31">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11418" data-param="{goods_id:11418}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11412" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/86/05322842491874063.jpg@!240" alt="瓦尔塔蓄电池 L2-400H5-60-L-T2-M">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11412','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11412&quot;}" nc_type="compare_11412"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11412" target="_blank">瓦尔塔蓄电池 L2-400H5-60-L-T2-M</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black">通用商品</i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">0</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="86" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">郑州经销商1号店</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                    <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=86" target="_blank">进入店铺</a>                            	</div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">郑州上街服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥122.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11412">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_1000" value="1000">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11412" data-param="{goods_id:11412}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11410" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/86/05322597813824755.jpg@!240" alt="玻璃水">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11410','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11410&quot;}" nc_type="compare_11410"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11410" target="_blank">玻璃水</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black">通用商品</i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">2</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="86" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">郑州经销商1号店</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                    <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=86" target="_blank">进入店铺</a>                            	</div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">郑州上街服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥125.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11410">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_998" value="998">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11410" data-param="{goods_id:11410}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11409" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/RSdWAYYiJR.jpg@!240" alt="玻璃水">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11409','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11409&quot;}" nc_type="compare_11409"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11409" target="_blank">玻璃水</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black">通用商品</i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">90</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥125.00</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11409">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_1000" value="1000">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11409" data-param="{goods_id:11409}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="product-d fix">
                                    <div class="product-listGrid fix">
                                        <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11405" target="_blank">
                                            <!--    		<img src="--><!--"-->
                                            <!--    		alt="--><!--">-->
                                            <img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/114/TMzjRpCJJ5.jpg@!240" alt="火花塞">
                                        </a>
                                        <div class="list-item fix">
                                            <ul>
                                                <li class="list-pic-l"><a href="javascript:collect_goods('11405','count','goods_collect');"> 收藏 </a></li>
                                                <li class="list-pic-l lisT"><a class="" href="javascript:void(0);" data-param="{&quot;gid&quot;:&quot;11405&quot;}" nc_type="compare_11405"> +对比 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-listLeft fix">
                                        <div>
                                            <div class="product-layout-left">
                                                <p class="listP"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=11405" target="_blank">火花塞</a></p>
                                                <div class="more-carType">
                                                    适用车型：<i class="col-black"></i>
                                                </div>
                                                <p class="event-carSeries carSeriesTxt">
                                                    销量：<i class="col-black">28</i> 件
                                                </p>
                                                <div class="event-carSeries carSeriesTxt float-box">
                                                    <div class="float-boxContent store_container fix" store_id="114" sc_id="0">
                                                        <a href="javascript:void(0);" id="float-boxContent"> <img src="http://liubei.com/mall/templates/default/images/brand/list-09.png">祥泰汽配</a>
                                                        <div class="float-contenr store_credit" style="">
                                                            <div class="float-list shop-rate">
                                                                <i class="arrow"></i>
                                                                <div class="float-list-d rate-star">
                                                                    <em><i class="star-i" style="width:100%;"></i></em><span>好评率：<i class="rate-i">--</i></span>
                                                                </div>
                                                                <div class="float-list-ds rate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="float-boxSpan">韵关市服务站</span>
                                                </div>
                                            </div>
                                            <div class="list-contentP">
                                                <div class="list-contentP-pad">
                                                </div>
                                                <div class="list-content-pd fix">
                                                    <p class="list-content-price">￥35.50</p>
                                                    <div class="num-box fix">
                                                        <a class="decrease">-</a><input class="qua_wbk txtCount" maxlength="4" autocomplete="off" value="1" type="text" ref="count_g_id_11405">
                                                        <a class="increase">+</a><input class="txtStorage" type="hidden" ref="storage_g_id_993" value="993">
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div>
                                                        <p class="list-butImg fix">
                                                            <a href="javascript:void(0);" nctype="addcart_submit" goods_id="11405" data-param="{goods_id:11405}">加入购物车</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                            <!-- list end -->
                            <div class="tc mt20 mb20">
                                <div class="pagination"><ul><li><span>首页</span></li><li><span>上一页</span></li><li><span class="currentpage">1</span></li><li><a class="demo" page_no="2"><span>2</span></a></li><li><a class="demo" page_no="3"><span>3</span></a></li><li><a class="demo" page_no="4"><span>4</span></a></li><li><a class="demo" page_no="5"><span>5</span></a></li><li><a class="demo" page_no="6"><span>6</span></a></li><li><span>...</span></li><li><a class="demo" page_no="2"><span>下一页</span></a></li><li><a class="demo" page_no="120"><span>末页</span></a></li></ul></div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="lockcompare" value="unlock">

            </div>
            <!-- e 配件列表 -->
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        var _CLASS_ARR = new Array();
        //切换服务站
        var isAppCallBack = true;
        function appCallback(data){
            loadResult(_init_param());
        }
        $(function(){
            // 上部图标元素点击事件
            $('.qWNavCate li').on('click', function(){
                var _index = $(this).attr('ref');
                // 触发相关联保养件一级类目点击事件
                $('.qW-cateItem:eq('+_index+')').click();
            })
            //一级类目点击事件
            $('.qW-cateItem').on('click', function(){
                // 本元素样式变化
                $(this).siblings().removeClass('act');
                $(this).siblings().children('ul').hide();
                $(this).children('ul').slideToggle();
                $(this).toggleClass('act');
                $('.qW-cateItem ul li.act').removeClass('act');
                // 上面关联图标元素样式变化
                var ref = $('.qW-cateItem').index(this);
                var ref_obj = $('.qWNavCate li:eq('+ref+')');
                $('.event-partCategory').removeClass('act');
                $('.event-partCategory i').removeClass('act');
                $(ref_obj).children('a').addClass('act');
                $(ref_obj).find('i').addClass('act');
                $('#search_class').val($(this).attr('class-id'));
                $('#search_class_level').val('1');
                $('#search_keyword').val('');
                $('#search_brand').val('');
                // 加载数据
                var param = _init_param();
                loadResult(param, true, false, true);
            })
            //直接点击分类，清空搜索条件，只根据station,car,class查
            $('ul.class2 li').on('click', function(event){
                event.stopPropagation();
                $('#search_keyword').val('');
                $('ul.class2 li').removeClass('act');
                $(this).addClass('act');
                var _class_name = $(this).children('a').attr('title');
                $('#search_class').val($(this).attr('class-id'));
                $('#search_class_level').val('0');
                $('#search_keyword').val('');
                $('#search_brand').val('');
                var param = _init_param();
                loadResult(param, true, false, true);
            })
            //点击搜索按钮，根据station,car,keyword查
            $('#searchByKeyWords').on('click', function(){
                if(trim($('#search_keyword').val()) == ''){
                    alert('请输入搜索关键字');
                    return false;
                }
                $('#search_class').val('');
                $('#search_class_level').val('0');
                var param = _init_param();
                loadResult(param, true, true);
            })
            //点击已选中条件，则删除此条件
            $('body').on('click', '.choosed-condition a', function(){
                deleteOpt(this);
            })
            //点击热门关键词
            $('.key').on('click', function(){
                $('#search_keyword').val($(this).attr('title'));
                $('#search_class').val('');
                $('#search_class_level').val('0');
                var param = _init_param();
                loadResult(param, true, true);
            })
            //车型选择弹框
            new PopupLayer({
                trigger:"#showcar",
                popupBlk:"#selectCar",
                closeBtn:"#type-close",
                automa:false,
                offsets: { //弹出层容器位置的调整值
                    x: 0,
                    y: -200
                },
                useOverlay:true, //开启遮罩
                onBeforeStart: function() { //自定义事件
                    CarSelect.show('wearingCategory');
                }
            });
            //页面加载数据
            loadResult(_init_param(), true, true);
        })
        /**
         * 初始化查询基本条件
         */
        function _init_param(isFilter) {
            var _search_car = $('#search_car').val();
            var _search_keyword = $('#search_keyword').val();
            var _search_class_level = $('#search_class_level').val();
            var _search_class = $('#search_class').val();
            var _search_brand = $('#search_brand').val();
            var _search_order = 0;
            var _search_order_type = 1;
            var _search_scope = 0;
            var _search_hdfk = 0;
            var _search_star = 0;
            if(isFilter){ // 只有传入此参数，才根据页面排序方式、是否全国范围、是否明星商品查
                _search_order = $('#search_order').val();
                _search_order_type = $('#search_order_type').val();
                _search_scope = $('#search_scope').val();
                _search_hdfk = $('#search_hdfk').val();
                _search_star = $('#search_star').val();
            }else{
                $('#search_order').val('0');
                $('#search_order_type').val('1');
                $('#search_scope').val('0');
                $('#search_hdfk').val('0');
                $('#search_star').val('0');
            }
            return {'search_car':_search_car,'search_keyword':_search_keyword,'search_class':_search_class,'search_class_level':_search_class_level,
                'search_brand':_search_brand,'search_order':_search_order,'search_order_type':_search_order_type,'search_scope':_search_scope,
                'search_star':_search_star,'search_hdfk':_search_hdfk};
        }
        /**
         * 删除已选择条件
         */
        function deleteOpt(obj) {
            if(!obj){return false;}
            if($(obj).hasClass('event-category')){ //删除分类条件
                $('#search_class').val('');
                $('#search_class_level').val('0');
                loadResult(_init_param(), true, true);
            }
            if($(obj).hasClass('event-keyWords')){ //删除搜索条件
                $('#search_keyword').val('');
                loadResult(_init_param(), true, false, true);
            }
            if($(obj).hasClass('event-brand')){ //删除品牌条件
                $('#search_brand').val('');
                loadResult(_init_param(), true, false, false);
            }
        }
        /**
         * 加载全车件查询列表
         */
        function loadResult(param, clearOpt, clearMenu, clearKey, url) {
            url = url || 'index.php?act=wearing_category&op=get_search_page';
            // 增加页面遮罩，提示用户加载中
            $('#search-container').load( url, param, function(){
                // 选择车型
                if(param.search_car && param.search_car!='0_0_0_0_0_0'){
                    $('.select-type').addClass('act');
                }else{
                    $('.select-type').removeClass('act');
                }
                // 已选条件
                if(clearOpt){
                    $('.choosed-condition .event-a').remove();
                    if(param.search_class){
                        if(param.search_class_level == 1){
                            $('.choosed-condition').append('<a class="event-a event-category"><i class="close-icon"></i>分类：<span name="categoryName" _class_id="'+param.search_class+'">'+$('.qW-cateItem[class-id="'+param.search_class+'"]').attr("title")+'</span></a>');
                        }else{
                            $('.choosed-condition').append('<a class="event-a event-category"><i class="close-icon"></i>分类：<span name="categoryName" _class_id="'+param.search_class+'">'+$('li[class-id="'+param.search_class+'"]').attr("title")+'</span></a>');
                        }
                    }
                    if(param.search_keyword){
                        $('.choosed-condition').append('<a class="event-a event-keyWords"><i class="close-icon"></i>关键词：<span name="keyword" _keyword="'+param.search_keyword+'">'+param.search_keyword.replace('<','&lt;').replace('>','&gt;')+'</span></a>');
                    }
                    if(param.search_brand){
                        if($('li[brand_id='+param.search_brand+']').length>0){
                            $('.choosed-condition').append('<a class="event-a event-brand"><i class="close-icon"></i>品牌：<span name="brand" _brand_id="'+param.search_brand+'">'+$('li[brand_id="'+param.search_brand+'"]').attr("title")+'</span></a>');
                        }
                    }
                }
                // 左侧菜单关闭
                if(clearMenu){
                    $('.qW-cateItem ul li').removeClass('act');
                    if(param.search_class){
                        // 左侧变化
                        if(param.search_class_level == 1){
                            $('.qW-cateItem').removeClass('act');
                            $('.qW-cateItem ul').hide();
                            $('.qW-cateItem[class-id="'+param.search_class+'"]').addClass('act');
                            $('.qW-cateItem[class-id="'+param.search_class+'"] ul').show();
                        }else{
                            $('.qW-cateItem ul li').removeClass('act');
                            $('.qW-cateItem ul li[class-id="'+param.search_class+'"]').addClass('act');
                        }
                    }else{
                        $('.qW-cateItem').removeClass('act');
                        $('.qW-cateItem ul').hide();
                    }
                }
                // 搜索框
                if(clearKey){
                    $('#search_keyword').val('');
                }
                //初始化对比按钮
                initCompare();
            });
        }
    </script>

    <link rel="stylesheet" type="text/css" href="{{asset('mall/home/selectCar_files/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('mall/home/selectCar_files/base.css')}}">

    <script type="text/javascript" src="{{asset('mall/home/selectCar_files/car_select.js')}}"></script>
@endsection