@extends('mall.layout.base')
@section('content')
    <div id="layoutRight" class="ncsc-layout-right">
        <div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>商品<i class="icon-angle-right"></i>仓库中的商品</div>
        <div class="main-content" id="mainContent">

            <div class="tabmenu">
                <ul class="tab pngFix" src="http://liubei.com/shop/common/store_avatar.jpeg">
                    <li class="active"><a href="http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=index">仓库中的商品</a></li><li class="normal"><a href="http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=index&amp;type=lock_up">违规的商品</a></li><li class="normal"><a href="http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=index&amp;type=wait_verify">等待审核的商品</a></li></ul>
            </div>
            <form method="get" action="index.php">
                <table class="search-form">
                    <input type="hidden" name="act" value="store_goods_offline">
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
                        <th>
                            <select name="search_type">
                                <option value="0" selected="selected">商品名称</option>
                                <option value="2">平台货号</option>
                            </select>
                        </th>
                        <td class="w160"><input type="text" class="text" name="keyword" value=""></td>
                        <td class="tc w70"><label class="submit-border"><input type="submit" class="submit" value="搜索"></label></td>
                    </tr>
                    </tbody></table>
            </form>
            <table class="ncsc-default-table">
                <thead>
                <tr nc_type="table_header">
                    <th class="w30"></th>
                    <th class="w50"></th>
                    <th>商品名称</th>
                    <th class="w180">上架</th>
                    <th class="w100">价格</th>
                    <th class="w100">库存</th>
                    <th class="w100">操作</th>
                </tr>
                <tr>
                    <td class="tc"><input type="checkbox" id="all" class="checkall"></td>
                    <td colspan="10"><label for="all">全选</label>
                        <a href="javascript:void(0);" class="ncsc-btn-mini" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods" name="commonid" confirm="您确定要删除吗?"><i class="icon-trash"></i>删除</a> <a href="javascript:void(0);" class="ncsc-btn-mini" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show" name="commonid"><i class="icon-level-up"></i>上架</a>
                    </td></tr>
                </thead>
                <tbody>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9619"></th>
                    <th colspan="20">平台货号：9619</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9619" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10040" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/14762994210.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10040" target="_blank">车仆机油</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9619')" class="ncsc-btn">上架</a></td>
                    <td><span>¥100.00</span></td>
                    <td><span>1000瓶</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9619" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9619');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9618"></th>
                    <th colspan="20">平台货号：9618</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9618" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10039" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296433312714583.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10039" target="_blank">大灯喷水嘴L</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9618')" class="ncsc-btn">上架</a></td>
                    <td><span>¥333.00</span></td>
                    <td><span>1000个</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9618" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9618');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9617"></th>
                    <th colspan="20">平台货号：9617</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9617" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10038" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296433308746356.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10038" target="_blank">大灯喷水嘴L</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9617')" class="ncsc-btn">上架</a></td>
                    <td><span>¥20.00</span></td>
                    <td><span>1000个</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9617" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9617');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9616"></th>
                    <th colspan="20">平台货号：9616</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9616" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10037" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296428614750919.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10037" target="_blank">壳牌黄喜力HX6</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9616')" class="ncsc-btn">上架</a></td>
                    <td><span>¥360.00</span></td>
                    <td><span>1000支</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9616" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9616');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9615"></th>
                    <th colspan="20">平台货号：9615</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9615" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10036" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296426836086578.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10036" target="_blank">后门升降器总成  左</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9615')" class="ncsc-btn">上架</a></td>
                    <td><span>¥100.00</span></td>
                    <td><span>1000件</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9615" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9615');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9613"></th>
                    <th colspan="20">平台货号：9613</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9613" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10034" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/05296419725538530.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10034" target="_blank">气囊游丝</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9613')" class="ncsc-btn">上架</a></td>
                    <td><span>¥155.00</span></td>
                    <td><span>1000个</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9613" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9613');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9612"></th>
                    <th colspan="20">平台货号：9612</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9612" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10033" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10033" target="_blank">壳牌黄喜力HX6</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9612')" class="ncsc-btn">上架</a></td>
                    <td><span>¥500.00</span></td>
                    <td><span>1000支</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9612" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9612');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9611"></th>
                    <th colspan="20">平台货号：9611</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9611" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10032" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=10032" target="_blank">荣威550 750 MG6 MG7 1.8 1.8</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9611')" class="ncsc-btn">上架</a></td>
                    <td><span>¥132.00</span></td>
                    <td><span>1000其他</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9611" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9611');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="9513"></th>
                    <th colspan="20">平台货号：9513</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="9513" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=9930" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/14760003650.jpg@!60"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=9930" target="_blank">你也快来</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=9513')" class="ncsc-btn">上架</a></td>
                    <td><span>¥5000000.00</span></td>
                    <td><span>1002在</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=9513" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=9513');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                <tr>
                    <th class="tc"><input type="checkbox" class="checkitem tc" value="7676"></th>
                    <th colspan="20">平台货号：7676</th>
                </tr>
                <tr>
                    <td class="trigger"><i class="tip icon-plus-sign" nctype="ajaxGoodsList" data-comminid="7676" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
                    <td><div class="pic-thumb">
                            <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=7548" target="_blank"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg"></a></div></td>
                    <td class="tl"><dl class="goods-name">
                            <dt style="max-width: 450px !important;">
                                <a href="http://liubei.com/mall/index.php?act=goods&amp;op=index&amp;goods_id=7548" target="_blank">123456</a></dt>
                            <dd class="serve">
                                <span class="" title="店铺推荐商品"><i class="commend">荐</i></span>
                                <!--<span class="" title="手机端商品详情"><i class="icon-tablet"></i></span>
                                <span class="" title="商品页面二维码"><i class="icon-qrcode"></i>
                                <div class="QRcode"><a target="_blank" href="">下载标签</a>
                                  <p><img src=""/></p>
                                </div>
                                </span> -->
                            </dd>
                        </dl></td>
                    <td><a href="javascript:void(0)" onclick="ajax_get_confirm('','http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show&amp;commonid=7676')" class="ncsc-btn">上架</a></td>
                    <td><span>¥11111.00</span></td>
                    <td><span>1002件</span></td>
                    <td class="nscs-table-handle"><span><a href="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=edit_goods&amp;commonid=7676" class="btn-blue"><i class="icon-edit"></i><p>编辑</p></a></span>
                        <span><a href="javascript:void(0)" onclick="ajax_get_confirm('您确定要删除吗?', 'http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods&amp;commonid=7676');" class="btn-red"><i class="icon-trash"></i><p>删除</p></a></span></td>
                </tr>
                <tr style="display:none;"><td colspan="20"><div class="ncsc-goods-sku ps-container"></div></td></tr>
                </tbody>
                <tfoot>
                <tr>
                    <th class="tc"><input type="checkbox" id="all2" class="checkall"></th>
                    <th colspan="10"><label for="all2">全选</label>
                        <a href="javascript:void(0);" class="ncsc-btn-mini" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_online&amp;op=drop_goods" name="commonid" confirm="您确定要删除吗?"><i class="icon-trash"></i>删除</a> <a href="javascript:void(0);" class="ncsc-btn-mini" nc_type="batchbutton" uri="http://liubei.com/mall/index.php?act=store_goods_offline&amp;op=goods_show" name="commonid"><i class="icon-level-up"></i>上架</a></th>
                </tr>
                <tr>
                    <td colspan="20"><div class="pagination"> <ul><li><span>首页</span></li><li><span>上一页</span></li><li><span class="currentpage">1</span></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=2"><span>2</span></a></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=3"><span>3</span></a></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=4"><span>4</span></a></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=5"><span>5</span></a></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=6"><span>6</span></a></li><li><span>...</span></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=2"><span>下一页</span></a></li><li><a class="demo" href="/mall/index.php?act=store_goods_offline&amp;op=index&amp;curpage=9"><span>末页</span></a></li></ul> </div></td>
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
                });
            </script>    </div>
    </div>
@endsection