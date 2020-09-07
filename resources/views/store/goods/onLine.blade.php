@extends('mall.layout.base')
@section('content')
    <div id="layoutRight" class="ncsc-layout-right">
        <div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>商品<i class="icon-angle-right"></i>出售中的商品</div>
        <div class="main-content" id="mainContent">

            <div class="tabmenu">
                <ul class="tab pngFix" src="http://liubei.com/shop/common/store_avatar.jpeg">
                    <li class="active"><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=index">出售中的商品</a></li></ul>
                <!-- //zmr>v30-->
                <!--批量生成二维码 bagin-->
                <!--<a title="批量生成商品二维码" class="ncsc-btn ncsc-btn-green" href="index.php?act=store_goods_online&amp;op=maker_qrcode" target="_blank" style="right:100px" onclick="return confirm('您确定要执行批量生成二维码吗？');">批量生成商品二维码</a>-->
                <!--批量生成二维码 end-->

                <a href="http://liubei.com/mall/index.php?act=store_goods_add&amp;op=index" class="ncsc-btn ncsc-btn-green" title="发布新商品"> 发布新商品</a></div>
            <form method="get" action="index.php">
                <table class="search-form">
                    <input type="hidden" name="act" value="store_goods_online">
                    <input type="hidden" name="op" value="index">
                    <tbody><tr>
                        <td>&nbsp;</td>
                        <th>本店分类</th>
                        <td class="w160"><select name="stc_id" class="w150">
                                <option value="0">请选择...</option>
                                <option value="8">1231</option>
                                <option value="9">ff</option>
                                <option value="10">123</option>
                                <option value="11">312312312</option>
                                <option value="12">123123</option>
                                <option value="13">1231233123123123</option>
                                <option value="15">12312</option>
                                <option value="16">12312312312</option>
                                <option value="17">vvvvv</option>
                                <option value="18">Qqqqqqq</option>
                                <option value="19">1231</option>
                                <option value="22">Kjhdaklfhalkdhfakljdsbfklbadjk</option>
                                <option value="25">1231231231</option>
                                <option value="26">一个人在线角色扮演网</option>
                                <option value="36">发动机</option>
                                <option value="39">ijskx</option>
                                <option value="106">油品</option>
                                <option value="129">Case</option>
                            </select></td>
                        <th> <select name="search_type">
                                <option value="0" selected="selected">商品名称</option>
                                <option value="2">平台货号</option>
                            </select>
                        </th>
                        <td class="w160"><input type="text" class="text w150" name="keyword" value=""></td>
                        <td class="tc w70"><label class="submit-border">
                                <input type="submit" class="submit" value="搜索">
                            </label></td>
                    </tr>
                    </tbody></table>
            </form>
            <table class="ncsc-default-table">
                <thead>
                <tr nc_type="table_header">
                    <th class="w30">&nbsp;</th>
                    <th class="w50">&nbsp;</th>
                    <th coltype="editable" column="goods_name" checker="check_required" inputwidth="230px">商品名称</th>
                    <th class="w100">价格</th>
                    <th class="w100">库存</th>
                    <th class="w100">发布时间</th>
                    <th class="w120">操作</th>
                </tr>
                <tr>
                    <td class="tc"><input type="checkbox" id="all" class="checkall"></td>
                    <td colspan="20"><label for="all">全选</label>
                        <a href="javascript:void(0);" class="ncsc-btn-mini" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods" name="commonid" confirm="您确定要删除吗?"><i class="icon-trash"></i>删除</a> <a href="javascript:void(0);" class="ncsc-btn-mini" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=goods_unshow" name="commonid"><i class="icon-level-down"></i>下架</a> <a href="javascript:void(0);" class="ncsc-btn-mini" nctype="batch" data-param="{url:'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_jingle', sign:'jingle'}"><i></i>设置广告词</a>
                        <!--设置关联版设 bagin-->
                        <!--<a href="javascript:void(0);" class="ncsc-btn-mini" nctype="batch" data-param="{url:'', sign:'plate'}"><i></i>设置关联版式</a>-->
                        <!--设置关联版设 end-->
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="10044"></th>
                    <th colspan="20">平台货号：10044</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="10044" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10465" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05298058010624019.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10465" target="_blank">标榜合成型制动液/沸点205 /5支起送货</a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥200.00</span></td>
                    <td><span>
        965瓶      </span></td>
                    <td class="goods-time">2016-10-15</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=10044" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=10044');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="10043"></th>
                    <th colspan="20">平台货号：10043</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="10043" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10464" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05298057767220927.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10464" target="_blank">车仆高级制动液/沸点230/5瓶起送货</a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥100.00</span></td>
                    <td><span>
        1004瓶      </span></td>
                    <td class="goods-time">2016-10-15</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=10043" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=10043');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="10042"></th>
                    <th colspan="20">平台货号：10042</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="10042" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10463" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10463" target="_blank">TE弓箭</a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥158.00</span></td>
                    <td><span>
        1000件      </span></td>
                    <td class="goods-time">2016-10-14</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=10042" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=10042');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9700"></th>
                    <th colspan="20">平台货号：9700</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9700" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10121" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/14763550430.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10121" target="_blank">TE卐</a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥1580.00</span></td>
                    <td><span>
        1000件      </span></td>
                    <td class="goods-time">2016-10-13</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9700" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9700');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9622"></th>
                    <th colspan="20">平台货号：9622</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9622" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10043" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296438739391949.png@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10043" target="_blank">尾喉适用于大众朗逸朗行途观高尔夫CC速腾甲壳虫尾喉</a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥100.00</span></td>
                    <td><span>
        1000其他      </span></td>
                    <td class="goods-time">2016-10-13</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9622" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9622');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9621"></th>
                    <th colspan="20">平台货号：9621</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9621" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10042" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296437198549672.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10042" target="_blank">气囊游丝</a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥100.00</span></td>
                    <td><span>
        1000个      </span></td>
                    <td class="goods-time">2016-10-13</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9621" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9621');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9620"></th>
                    <th colspan="20">平台货号：9620</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9620" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb"><a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10041" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296435258478676.png@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10041" target="_blank">Mobil美孚路宝手动变速箱油齿轮油差速器油大众 </a></dt>
                            <dd class="serve"> <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--手机分享以及二维码分享  bagin-->
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                              <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                <p><img src=""/></p>
                              </div>
                              </span>-->
                                <!--手机分享以及二维码分享  end-->
                            </dd>
                        </dl></td>
                    <td><span>¥150.00</span></td>
                    <td><span>
        1000其他      </span></td>
                    <td class="goods-time">2016-10-13</td>
                    <td class="nscs-table-handle">        <span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9620" class="btn-blue"><i class="icon-edit"></i>
        <p>编辑</p>
        </a></span> <span><a href="javascript:void(0);" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9620');" class="btn-red"><i class="icon-trash"></i>
        <p>删除</p>
        </a></span>
                    </td>
                </tr>
                <tr style="display:none;">
                    <td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th class="tc"><input type="checkbox" id="all2" class="checkall"></th>
                    <th colspan="10"><label for="all2">全选</label>
                        <a href="javascript:void(0);" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods" name="commonid" confirm="您确定要删除吗?" class="ncsc-btn-mini"><i class="icon-trash"></i>删除</a> <a href="javascript:void(0);" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=goods_unshow" name="commonid" class="ncsc-btn-mini"><i class="icon-level-down"></i>下架</a> <a href="javascript:void(0);" class="ncsc-btn-mini" nctype="batch" data-param="{url:'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_jingle', sign:'jingle'}"><i></i>设置广告词</a> <a href="javascript:void(0);" class="ncsc-btn-mini" nctype="batch" data-param="{url:'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_plate', sign:'plate'}"><i></i>设置关联版式</a> </th>
                </tr>
                <tr>
                    <td colspan="20"><div class="pagination"> <ul><li><span>首页</span></li><li><span>上一页</span></li><li><span class="currentpage">1</span></li><li><span>下一页</span></li><li><span>末页</span></li></ul> </div></td>
                </tr>
                </tfoot>
            </table>
            <script src="{{asset('common/js/jquery.poshytip.min.js')}}"></script>
            <script src="{{asset('common/js/store_goods_list.js')}}"></script>
            <script>
                $(function(){
                    //Ajax提示
                    $('.tip').poshytip({
                        className: 'tip-yellowsimple',
                        showTimeout: 1,
                        alignTo: 'target',
                        alignX: 'center',
                        alignY: 'top',
                        offsetY: 5,
                        allowTipHover: false
                    });
                    $('a[nctype="batch"]').click(function(){
                        if($('.checkitem:checked').length == 0){    //没有选择
                            showDialog('请选择需要操作的记录');
                            return false;
                        }
                        var _items = '';
                        $('.checkitem:checked').each(function(){
                            _items += $(this).val() + ',';
                        });
                        _items = _items.substr(0, (_items.length - 1));

                        var data_str = '';
                        eval('data_str = ' + $(this).attr('data-param'));

                        if (data_str.sign == 'jingle') {
                            ajax_form('ajax_jingle', '设置广告词', data_str.url + '&commonid=' + _items + '&inajax=1', '480');
                        } else if (data_str.sign == 'plate') {
                            ajax_form('ajax_plate', '设置关联版式', data_str.url + '&commonid=' + _items + '&inajax=1', '480');
                        }
                    });
                });
            </script>    </div>
    </div>
@endsection