@extends('home/layout/base')

@section('style')
    <style>
        .tab .tabList .tabContet-1{
            width:680px;
        }
        .tabList .tabContet-1 .tabPone{
            width:680px;
        }
        .tabList .tabContet-1 .tabbox .flow{
            width:680px;
        }
        .tabList .tabContet-1 .tabbox .flow ul li{
            width:680px;
        }
        .flow .flowContent{
            width:600px;
        }
        .flow .flowContent dl{
            width:495px;
        }
        .flow .flowContent dl{
            margin-left:25px;
        }
    </style>
@endsection

@section('body')
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div>
    <div class="subNavs">
        <div class="subNavList">
            <div class="ins-nav">
                <div class="logo"><a href="http://liubei.com/entry"><img src="http://liubei.com/entry/resource/images/logo.png" alt=""></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="http://liubei.com/entry">首页</a></li>
                        <li><a href="http://liubei.com/mall">刘备商城</a></li>
                        <li><a href="?act=index&amp;op=single&amp;mod=joinadvantage&amp;mark=jmys">招商专区</a></li>
                        <li><a href="?act=index&amp;op=single&amp;mod=contactus">联系我们</a></li>
                        <li><a href="?act=index&amp;op=lists&amp;mod=article&amp;cate=news">产业资讯</a></li>
                        <li class="J_mobile" style="position: relative;"><span class="icon icon-mobile"></span><a href="?act=index&amp;op=single&amp;mod=mobileclient">手机客户端</a>
                            <div class="float-window">
                                <div class="content-qrcode">
                                    <div class="header-qrcode">
                                        <p>扫一扫下载客户端</p>
                                        <p>最新资讯一手掌握</p>
                                    </div>
                                    <div class="body-qrcode">
                                        <img src="http://liubei.com/entry/resource/images/mobile_code.png" width="120" height="118">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>        </div>
    </div>
    <div>
        <div class="tab">
            <div class="tabLists tabList fix">
                <div class="tabUL fix">
                    <ul class="inlineBlock inline">
                        <li class="act"><a>加盟优势</a></li>
                        <!--                        <li class="--><!--"><a>运作流程</a></li>-->
                        <li class=""><a>如何加盟</a></li>
                    </ul>
                </div>
                <div class="tabBorder" style="display: block;">
                    <div class="tabContets tabContet-1">
                        <div class="tabbox">
                            <div class="tabPones">
                                <h3>为什么选择刘备修车网平台</h3>
                                <p>
                                    在每一环节都做到尽善尽美，才能赢得更多的回头客。刘备修车物流为您提供高效快速的配送服务，让身处世界各地的客户满意购物。您还有机会接触到尊享快速免费物流的刘备修车网会员，从而加快您的库存流通。
                                </p>
                            </div>
                            <div class="tabPtwos">
                                <div class="tabPtwoCons">
                                    <div class="contentIcon">
                                        <img src="http://liubei.com/entry/resource/images/shang-1.png" width="73" height="60px" alt="">
                                        <span>正品保证</span>
                                    </div>

                                    <h3>打造百年品牌信誉，信心之选</h3>
                                    <p>
                                        注重商品质量，致力让顾客对我们予以更大的信心。
                                        集团严格规定所有商品均为原厂正货，禁止出售次品、未质检商品及假货。
                                        打造百年良好品牌信誉，绝对信心之选！
                                    </p>
                                    <div class="Img">
                                        <img src="http://liubei.com/entry/resource/images/banner-3.png" width="742" height="247" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tabPtwos">
                                <div class="tabPtwoCons">
                                    <div class="contentIcon">
                                        <img src="http://liubei.com/entry/resource/images/shang-4.png" width="58" height="66px" alt="">
                                        <span>极速配送</span>
                                    </div>

                                    <h3>两小时同城配送速度体验</h3>
                                    <p>
                                        刘备修车网服务站所在城市构建的同城配送物流体系将实现经销商与维修厂配件同城配送两小时速达。
                                    </p>
                                    <div class="Img">
                                        <img src="http://liubei.com/entry/resource/images/banner-1.png" width="742" height="247" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tabPtwos">
                                <div class="tabPtwoCons">
                                    <div class="contentIcon">
                                        <img src="http://liubei.com/entry/resource/images/shang-3.png" width="54" height="60px" alt="">
                                        <span>价格实在</span>
                                    </div>

                                    <h3>内部价只供会员享受，保证品质</h3>
                                    <p>
                                        刘备修车联盟内部价只供会员享受，内部价均低于或等于市场均价，在享受低价的同时，承诺保证物流服务和产品的品质，请放心购买，欢迎各采购进行比价。
                                    </p>
                                    <div class="Img" style="border:none;padding-bottom:10px;">
                                        <img src="http://liubei.com/entry/resource/images/banner-2.png" width="742" height="247" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabBorder" style="display: none; ">

                    <div class="tabContet-1">
                        <div class="tabbox">
                            <div class="tabPone">
                                <h3>如何加盟入驻刘备修车平台？</h3>
                                <p class="step-1">
                                    只需要快捷5步，轻装加盟
                                </p>
                                <p class="step-2">
                                    快速入驻，让您立即享受刘备修车网高效服务
                                </p>
                                <p class="step-3">
                                    加盟热线：400-860-0170                                </p>
                            </div>
                            <div class="flow">
                                <ul>
                                    <li class="fix">

                                        <div class="flowBor">
                                            <div class="circles">1</div>
                                            <div class="wires"></div>
                                        </div>
                                        <div class="flowContent fix">
                                            <div class="left">
                                                <img src="http://liubei.com/entry/resource/images/icon-1.png" alt="">
                                            </div>

                                            <dl>
                                                <dt>
                                                    <h3>预约加盟入驻刘备商城</h3></dt>
                                                <dd>
                                                    <p>联系当地服务站入驻加盟，或拨打客服热线入驻加盟：400-860-0170。
                                                    </p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li class="fix">

                                        <div class="flowBor">
                                            <div class="circles">2</div>
                                            <div class="wires"></div>
                                        </div>
                                        <div class="flowContent fix">
                                            <div class="left">
                                                <img src="http://liubei.com/entry/resource/images/icon.png" alt="">
                                            </div>

                                            <dl>
                                                <dt>
                                                    <h3>信息采集</h3></dt>
                                                <dd>
                                                    <p>
                                                        当地区域服务站客服人员收到入驻加盟信息，立即前往帮助商户办理入驻手续，为商户提供最高效的服务。
                                                    </p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li class="fix">

                                        <div class="flowBor">
                                            <div class="circles">3</div>
                                            <div class="wires"></div>
                                        </div>
                                        <div class="flowContent fix">
                                            <div class="left">
                                                <img src="http://liubei.com/entry/resource/images/icon.png" alt="">
                                            </div>

                                            <dl>
                                                <dt>
                                                    <h3>资质审核</h3></dt>
                                                <dd>
                                                    <p>
                                                        商户根据客服人员指导，注册通过审核后，商户手机收到登录帐号、密码。
                                                    </p>

                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li class="fix">

                                        <div class="flowBor">
                                            <div class="circles">4</div>
                                            <div class="wires"></div>
                                        </div>
                                        <div class="flowContent fix">
                                            <div class="left">
                                                <img src="http://liubei.com/entry/resource/images/icon.png" alt="">
                                            </div>

                                            <dl>
                                                <dt>
                                                    <h3>保证金广告费缴纳</h3></dt>
                                                <dd>
                                                    <p>
                                                        登录商城，交纳保证金后成为普通商户；
                                                        交纳广告费既成为实力商家。
                                                    </p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li class="fix">

                                        <div class="flowBor">
                                            <div class="circles">5</div>
                                            <!--                                            <div class="wires"></div>-->
                                        </div>
                                        <div class="flowContent fix" style="margin-left:50px;">
                                            <div class="left">
                                                <img src="http://liubei.com/entry/resource/images/icon.png" alt="">
                                            </div>

                                            <dl>
                                                <dt>
                                                    <h3>商品上传</h3></dt>
                                                <dd>
                                                    <p>
                                                        客服根据商品上传标准指导商户上传商品，上传商品经刘备修车网审核通过后，由商户进行上架，即可在刘备汽配商城进行售卖。
                                                    </p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="join">
                    <h3>立即加盟：</h3>
                    <p>
                        请在下方填写您的联系电话号码，并点击“预约”按钮。我们相关工作人员会进行电话回访，并与您预约办理加盟手续的时间。我们的工作人员将在预约当天上门为您办理相关手续。
                    </p>
                    <div class="tabInp">
                        <form id="form" action="http://liubei.com/entry/index.php?act=index&amp;op=joinin" method="post">
                            <input type="text" name="contacts_phone" id="contacts_phone" placeholder="填写您的联系电话">
                            <input type="button" id="btn_submit" value="预&nbsp;&nbsp;约">
                            <div class="error"></div>
                        </form>
                    </div>
                </div>
                <div class="home">
                    <a href="#">首页 <i></i></a>
                    <a href="#">招商专区 <i></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function(){
            $("#btn_submit").click(function(){
                if($("#form").valid()){
                    ajaxpost('form', '', '', 'onerror');
                }
            });

            jQuery.validator.addMethod("isPhone", function(value, element) {
                return ((/^(([0-9]{2,3})|([0-9]{3}-))?((0[0-9]{2,3})|0[0-9]{2,3}-)?[1-9][0-9]{6,7}(-[0-9]{1,4})?$/).test(value)
                    || (/^(13|15|18|17)[0-9]{9}$/).test(value));
            }, "<i></i>请输入正确的电话或手机号码");

            $('#form').validate({
                errorPlacement: function(error, element){
                    error.appendTo(element.parent().find('.error'));
                },
                rules : {
                    contacts_phone : {
                        required    : true,
                        isPhone   : '',
                    },
                },
                messages : {
                    contacts_phone  : {
                        required    : '<i></i>预约电话不能为空',
                    },
                }
            });
        })

    </script>
@endsection

