@extends('store.layout.base')
@section('script')
    <script>
        var STORE_URL="{{url('/store')}}";
    </script>
@endsection
@section('content')
    <div id="layoutRight" class="ncsc-layout-right">
        <div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>商品<i class="icon-angle-right"></i>商品发布</div>
        <div class="main-content" id="mainContent">
            <!-- S setp -->
            <ul class="add-goods-step">
                <li class="current"><i class="icon icon-list-alt"></i>
                    <h6>STEP.1</h6>
                    <h2>选择商品分类</h2>
                    <i class="arrow icon-angle-right"></i> </li>
                <li><i class="icon icon-edit"></i>
                    <h6>STEP.2</h6>
                    <h2>填写商品详情</h2>
                    <i class="arrow icon-angle-right"></i> </li>
                <li><i class="icon icon-cogs "></i>
                    <h6>STEP.3</h6>
                    <h2>选择适用车型</h2>
                    <i class="arrow icon-angle-right"></i> </li>
                <li><i class="icon icon-ok-circle"></i>
                    <h6>STEP.4</h6>
                    <h2>商品发布成功</h2>
                </li>
            </ul>
            <!--S 分类选择区域-->
            <div class="wrapper_search">
                <div class="wp_sort">
                    <div id="dataLoading" class="wp_data_loading">
                        <div class="data_loading">加载中...</div>
                    </div>
                    <div class="sort_selector">
                        <div class="sort_title">您常用的商品分类：        <div class="text" id="commSelect">
                                <div>请选择</div>
                                <div class="select_list" id="commListArea" style="display: none;">
                                    <ul>
                                        <li data-param="{stapleid:86}"><span nctype="staple_name">保养用品 &gt;油品 &gt;机油</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:47}"><span nctype="staple_name">电子汽配件 &gt;电器 &gt;其它</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:78}"><span nctype="staple_name">发动机系统 &gt;发动机 &gt;发动机汽缸盖</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:509}"><span nctype="staple_name">保养用品 &gt;油品 &gt;刹车油</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:368}"><span nctype="staple_name">传动系统 &gt;其它</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:311}"><span nctype="staple_name">车灯/后视镜 &gt;前照灯 &gt;前大灯喷水嘴</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:309}"><span nctype="staple_name">气囊/座椅/安全带 &gt;其它</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:308}"><span nctype="staple_name">发动机系统 &gt;发动机 &gt;发动机皮带</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:79}"><span nctype="staple_name">发动机系统 &gt;点火系 &gt;点火模块</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:75}"><span nctype="staple_name">发动机系统 &gt;发动机 &gt;发动机总成</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:73}"><span nctype="staple_name">传动系统 &gt;传动系 &gt;传动轴总成</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:125}"><span nctype="staple_name">传动系统 &gt;变速箱及离合器 &gt;变速箱侧盖</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:832}"><span nctype="staple_name">传动系统 &gt;变速箱及离合器 &gt;变速器后盖</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:51}"><span nctype="staple_name">行驶系统 &gt;车轮 &gt;前轮毂</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:312}"><span nctype="staple_name">汽车装饰、影音、防盗 &gt;汽车装饰 &gt;其它</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:310}"><span nctype="staple_name">车门/机盖 &gt;后门 &gt;后门玻璃升降器</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:92}"><span nctype="staple_name">保养用品 &gt;养护用品 &gt;玻璃水</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li data-param="{stapleid:833}"><span nctype="staple_name">传动系统 &gt;变速箱及离合器 &gt;自动变速箱总成</span><a href="JavaScript:void(0);" nctype="del-comm-cate" title="删除">X</a></li>
                                        <li id="select_list_no" style="display: none;"><span class="title">您还没有添加过常用的分类</span></li>
                                    </ul>
                                </div>
                            </div>
                            <i class="icon-angle-down"></i>
                        </div>
                    </div>
                    <div id="class_div" class="wp_sort_block">
                        <div class="sort_list">
                            <div class="wp_category_list">
                                <div id="class_div_1" class="category_list ps-container">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li class="" nctype="selClass" data-param="{gcid:{{$category['id']}}}"> <a class="" href="javascript:void(0)"><i class="icon-double-angle-right"></i>{{$category['category_name']}}</a></li>
                                        @endforeach
                                    </ul>
                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 284px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 264px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 138px;"></div></div></div>
                            </div>
                        </div>
                        <div class="sort_list">
                            <div class="wp_category_list blank">
                                <div id="class_div_2" class="category_list ps-container" style="">
                                    <ul>
                                    </ul>
                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 15px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 264px; display: none;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                            </div>
                        </div>
                        <div class="sort_list sort_list_last">
                            <div class="wp_category_list blank">
                                <div id="class_div_3" class="category_list ps-container" style="">
                                    <ul>
                                    </ul>
                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 15px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 264px; display: none;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert">
                    <dl class="hover_tips_cont">
                        <dt id="commodityspan"><span style="color:#F00;">请选择商品类别</span></dt>
                        <dt id="commoditydt" style="display: none;" class="current_sort">您当前选择的商品类别是：</dt>
                        <dd id="commoditydd"></dd>
                    </dl>
                </div>
                <div class="wp_confirm">
                    <form method="get" action="{{url('store/add_step_two')}}" id="submit_form">

                        <input type="hidden" name="class_id" id="class_id" value="">

                        <div class="bottom tc">
                            <label class="submit-border"><input disabled="disabled" nctype="buttonNextStep" value="下一步，填写商品信息" type="submit" class="submit" style=" width: 200px;"></label>
                        </div>
                    </form>
                </div>
            </div>
            <link href="{{asset('common/js/perfect-scrollbar.min.css')}}" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="{{asset('common/js/perfect-scrollbar.min.js')}}"></script>
            <script src="{{asset('common/js/common_select.js')}}"></script>
            <script src="{{asset('common/js/jquery.mousewheel.js')}}"></script>
            <script src="{{asset('mall/js/store_goods_add.step1.js')}}"></script>
            <script>
                $(function(){
                    $('.submit-border').on('click',function(){
                        $('#submit_form').submit();
                    });
                });
            </script>
        </div>
    </div>
@endsection
