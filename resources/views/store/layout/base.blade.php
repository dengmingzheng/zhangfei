<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>商家中心</title>
    <meta name="keywords" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <meta name="description" content="刘备修车网，基于汽车后市场的全产业供应链公共服务平台。打造可靠可信、公平公正、快速高效的汽车后市场良性生态圈是我们的不懈追求。">
    <link href="{{asset('mall/css/base.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mall/css/seller_center.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mall/font/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('common/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('mall/js/seller.js')}}"></script>
    <script type="text/javascript" src="{{asset('common/js/waypoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('common/js/jquery-ui/jquery.ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('common/js/jquery.validation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('common/js/common.js')}}"></script>
    <script type="text/javascript" src="{{asset('common/js/member.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('common/js/dialog/dialog.js')}}" id="dialog_js" charset="utf-8"></script>
    <link href="{{asset('common/js/dialog/dialog.css')}}" rel="stylesheet" type="text/css">

    <style type="text/css">
        /* 消息弹窗提示 个性化样式 */
        .toolbarframe{
            border:1px solid #c8c7cc;width:230px;padding-left:16px;padding-bottom: 16px;box-shadow: 1px 4px 4px  #000;position:fixed;background-color:#fff;font-family: 'Microsoft Yahei';z-index: 1;right:54px;bottom:-230px;
        }
        #show_msg_content a{
            overflow: hidden;white-space: nowrap;text-overflow: ellipsis;display: block;

        }
    </style>
    @yield('style')
</head>

<body>
<script type="text/javascript" src="{{asset('common/js/ToolTip.js')}}"></script>
<div id="toolTipLayer" style="position: absolute; z-index: 999; display: none; visibility: visible; left: 1187px; top: 146px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<header class="ncsc-head-layout w">
    <div class="wrapper">
        <div class="ncsc-admin">
            <dl class="ncsc-admin-info">
                <!--        <dt class="admin-avatar"><img src="--><!--" width="32" class="pngFix" alt=""/></dt>-->
                <dt class="admin-avatar"><img src="" width="32" class="pngFix" alt=""></dt>
                <dd class="admin-permission">当前用户</dd>
                <dd class="admin-name">{{Auth::guard('store')->user()->seller_name}}</dd>
            </dl>
            <div class="ncsc-admin-function">
                <a href="http://liubei.com/mall/index.php?act=show_store&amp;op=index&amp;store_id=92" title="前往店铺" target="_blank"><i class="icon-home"></i></a>
                <a href="http://liubei.com/mall/index.php?act=seller_center&amp;op=modifypw" title="修改密码"><i class="icon-wrench"></i></a>
                <a href="http://liubei.com/mall/index.php?act=seller_logout&amp;op=logout" title="安全退出"><i class="icon-signout"></i></a></div>
        </div>
        <div class="center-logo"> <a href="http://liubei.com/mall" target="_blank"><img src="" class="pngFix" alt=""></a>
            <!-- <h1>商家中心</h1> -->
        </div>
        <div class="index-search-container">
            <div class="index-sitemap"><a href="javascript:void(0);">导航管理 <i class="icon-angle-down"></i></a>
                <div class="sitemap-menu-arrow"></div>
                <div class="sitemap-menu">
                    <div class="title-bar">
                        <h2> <i class="icon-sitemap"></i>管理导航<em>小提示：添加您经常使用的功能到首页侧边栏，方便操作。</em> </h2>
                        <span id="closeSitemap" class="close">X</span></div>
                    <div id="quicklink_list" class="content">
                        <dl>
                            <dt>商品</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_goods_add" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_goods_add&amp;op=index"> 商品发布 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_goods_online" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_goods_online&amp;op=index"> 出售中的商品 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_goods_offline" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_goods_offline&amp;op=index"> 仓库中的商品 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_album" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_album&amp;op=album_cate"> 图片空间 </a></dd>
                        </dl>
                        <dl>
                            <dt>订单</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_order" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_order&amp;op=index"> 订单管理 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_new_order" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_new_order&amp;op=index"> 待审核订单 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_evaluate" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_evaluate&amp;op=list"> 评价管理 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_refund" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_refund&amp;op=index"> 退款管理 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_return" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_return&amp;op=index"> 退货管理 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_order_msg" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_order_msg&amp;op=msg_setting"> 订单提醒设置 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_order_create" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_order_create&amp;op=index"> 代下单 </a></dd>
                        </dl>
                        <dl>
                            <dt>促销</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_promotion_xianshi" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_promotion_xianshi&amp;op=xianshi_list"> 限时折扣 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_promotion_mansong" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_promotion_mansong&amp;op=mansong_list"> 满即送 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_promotion_booth" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_promotion_booth&amp;op=booth_goods_list"> 推荐展位 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_goods_star" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_goods_star&amp;op=index"> 明星商品 </a></dd>
                        </dl>
                        <dl>
                            <dt>店铺</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_setting" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_setting&amp;op=store_setting"> 店铺设置 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_navigation" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_navigation&amp;op=navigation_list"> 店铺导航 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_goods_class" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_goods_class&amp;op=index"> 店铺分类 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_live" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_live&amp;op=store_live"> 线下商铺 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_brand" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_brand&amp;op=brand_list"> 品牌申请 </a></dd>
                        </dl>
                        <dl>
                            <dt>客服</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_consult" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_consult&amp;op=consult_list"> 咨询管理 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_complain" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_complain&amp;op=list"> 投诉管理 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_im" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_im&amp;op=index"> 聊天记录 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_callcenter" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_callcenter&amp;op=index"> 客服设置 </a></dd>
                        </dl>
                        <dl>
                            <dt>公告</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_notice_plat" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_notice_plat&amp;op=index"> 平台公告  </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_msg" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_msg&amp;op=index"> 系统消息  </a></dd>
                        </dl>
                        <dl>
                            <dt>结算</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_bill" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_bill&amp;op=bank"> 资金结算 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="statistics_general" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=statistics_general&amp;op=general"> 订单分析 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="statistics_goods" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=statistics_goods&amp;op=goodslist"> 商品分析 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="statistics_sale" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=statistics_sale&amp;op=sale"> 运营报告 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="statistics_flow" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=statistics_flow&amp;op=storeflow"> 流量统计 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_company_settle" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_company_settle&amp;op=com_settle"> 结算账户设置 </a></dd>
                        </dl>
                        <dl>
                            <dt>设置</dt>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="store_company_info" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=store_company_info&amp;op=index"> 企业信息 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="seller_log" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=seller_log&amp;op=log_list"> 操作日志 </a></dd>
                            <dd><i nctype="btn_add_quicklink" data-quicklink-act="sign_list" class="icon-check" title="添加为常用功能菜单"></i><a href="index.php?act=sign_list&amp;op=index"> 签约管理 </a></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="search-bar">
                <form method="get" target="_blank">
                    <input type="hidden" name="act" value="search">
                    <input type="text" nctype="search_text" name="keyword" placeholder="商城商品搜索" class="search-input-text">
                    <input type="submit" nctype="search_submit" class="search-input-btn pngFix" value="" src="http://liubei.com/shop/common/store_avatar.jpeg">
                </form>
            </div>
        </div>
        <nav class="ncsc-nav">
           @foreach($navs as $nav)
            <dl class="{{$nav['current']}}">
                <dt><a href="{{url($nav['url'])}}">{{$nav['title']}}</a></dt>
                @if(!empty($nav['children']))
                    <dd>
                        <ul>
                                @foreach($nav['children'] as $children)
                                    <li class=""> <a href="{{url($children['url'])}}"> {{$children['title']}} </a> </li>
                                @endforeach
                        </ul>
                    </dd>
                @endif
                <dd class="arrow"></dd>
            </dl>
            @endforeach
        </nav>
    </div>
</header>
<div class="ncsc-layout wrapper">
    <div id="layoutLeft" class="ncsc-layout-left">
        <div id="sidebar" class="sidebar">
            <div class="column-title" id="main-nav"><span class="ico-{{$sidebar['ico']}}"></span>
                <h2>{{$sidebar['title']}}</h2>
            </div>
            <div class="column-menu">
                <ul id="seller_center_left_menu">
                    @if(!empty($sidebar['menus']))
                        @foreach($sidebar['menus'] as $menu)
                                <li class="@if(request()->path() == $menu['url']) current @endif"> <a href="{{url($menu['url'])}}"> {{$menu['title']}} </a> </li>
                        @endforeach
                    @else
                        <div class="add-quickmenu"><a href="javascript:void(0);"><i class="icon-plus"></i>添加常用功能菜单</a></div>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
</div>
<script type="text/javascript">
    $(document).ready(function(){
        //添加删除快捷操作
        $('[nctype="btn_add_quicklink"]').on('click', function() {
            var $quicklink_item = $(this).parent();
            var item = $(this).attr('data-quicklink-act');
            if($quicklink_item.hasClass('selected')) {
                $.post("http://liubei.com/mall/index.php?act=seller_center&op=quicklink_del", { item: item }, function(data) {
                    $quicklink_item.removeClass('selected');
                    $('#quicklink_' + item).remove();
                }, "json");
            } else {
                var count = $('#quicklink_list').find('dd.selected').length;
                if(count >= 8) {
                    showError('快捷操作最多添加8个');
                } else {
                    $.post("http://liubei.com/mall/index.php?act=seller_center&op=quicklink_add", { item: item }, function(data) {
                        $quicklink_item.addClass('selected');
                        var $link = $quicklink_item.find('a');
                        var menu_name = $link.text();
                        var menu_link = $link.attr('href');
                        var menu_item = '<li id="quicklink_' + item + '"><a href="' + menu_link + '">' + menu_name + '</a></li>';
                        $(menu_item).appendTo('#seller_center_left_menu').hide().fadeIn();
                    }, "json");
                }
            }
        });
        //浮动导航  waypoints.js
        $("#sidebar,#mainContent").waypoint(function(event, direction) {
            $(this).parent().toggleClass('sticky', direction === "down");
            event.stopPropagation();
        });

        $(".closes").click(function(){
            close_tips();
        })


    });
    // 搜索商品不能为空
    $('input[nctype="search_submit"]').click(function(){
        if ($('input[nctype="search_text"]').val() == '') {
            return false;
        }
    });
    function close_tips(){
        $('.toolbarframe').animate({'bottom':"-160px"});
    };

</script>
<style>
    a{
        text-decoration: none;
    }
    .toolbarframe a:hover{
        color:#0076ff;
    }
    .voucher{
        margin-top: 16px;
    }
    .time{
        text-align: right;font-size:12px;margin-top: 40px;color:#808080;margin-right: 16px
    }
    .message_box{
        border-bottom: 1px solid #c8c7cc;
    }
    .messageBox{
        padding:10px  16px 10px 0px
    }
    .closes{
        float: right;cursor: pointer;
    }
</style>

<div class="toolbarframe">
    <div class="message_box">
        <div class="messageBox">
            <span style="color:#000">通知</span>
            <a class="closes">
                <img src="http://liubei.com/mall/templates/default/images/brand/xbtn.png" alt="">
            </a>
        </div>
        <div style="clear: both"></div>
    </div>
    <div style="clear: both"></div>
    <div class="voucher" id="show_msg_content" style="font-size:12px;color:#808080"></div>
    <div class="time">
        <!-- （5秒后自动关闭） -->
    </div>
</div>
<div id="faq">
    <div class="faq-wrapper">
    </div>
</div>
<div id="footer" class="wrapper">
    <p><a href="http://liubei.com/mall" target="_blank">首页</a>
        | <a href="/about_jrwm.html">招聘英才</a>
        | <a href="/jiamengyoushi.html">合作及洽谈</a>
        | <a href="/contactus.html">联系我们</a>
        | <a href="/about_jtln.html">关于我们</a>
        | <a href="/friendlinks.html">友情链接</a>
    </p>
    © Copyright 2016 粤ICP备16026125号-1<br>
</div>

<div id="tbox">
    <div class="btn" id="msg"><a href="http://liubei.com/mall/index.php?act=store_msg&amp;op=index"><i class="msg"><em>733</em></i>站内消息</a></div>
    <div class="btn" id="im"><i class="im"><em id="new_msg" style="display:none;"></em></i><a href="javascript:void(0);">在线联系</a></div>
    <div class="btn" id="gotop" style="display:none;"><i class="top"></i><a href="javascript:void(0);">返回顶部</a></div>
</div>

@yield('script')

</body>
</html>