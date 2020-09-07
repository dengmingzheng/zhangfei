@extends('store.layout.base')

@section('content')
    <div id="layoutRight" class="ncsc-layout-right">
        <div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>首页<i class="icon-angle-right"></i></div>
        <div class="main-content" id="mainContent">

            <div class="ncsc-index">
                <div class="top-container">
                    <div class="basic-info">
                        <dl class="ncsc-seller-info">
                            <dt class="seller-name">
                                <h3>{{Auth::guard('store')->user()->seller_name}}</h3>
                                <h5>（用户名：{{Auth::guard('store')->user()->seller_name}}）</h5>
                            </dt>
                            <dd class="store-logo">
                                <p><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/avatar/΋14769444740.jpg"></p>
                                <!--<a href=""><i class="icon-edit"></i>编辑店铺设置</a>--> </dd>
                            <dd class="seller-permission">管理权限：<strong>{{Auth::guard('store')->user()->is_admin ? '管理员' : '员工'}}</strong></dd>
                            <dd class="seller-last-login">最后登录：<strong>{{Auth::guard('store')->user()->last_login_time}}</strong> </dd>
                            <dd class="store-name">店铺名称：<a href="" target="_black">{{Auth::guard('store')->user()->store->store_name}}</a></dd>
                            <dd class="store-grade">店铺等级：<strong>{{Auth::guard('store')->user()->store->grade->name}}</strong></dd>
                            <!--<dd class="store-validity"><strong>                    <a href="index.php?act=store_info&op=reopen">马上续签</a>
                                        </strong> </dd>-->
                        </dl>
                        <div class="detail-rate">
                            <h5> <strong>店铺动态评分：</strong> <!-- 与行业相比 --> </h5>
                            <ul>
                                <li> 描述相符<span class="credit">{{Auth::guard('store')->user()->store->store_desccredit}} 分</span>
                                    <!-- <span class=""><i></i><em></em></span>  -->
                                </li>
                                <li> 服务态度<span class="credit">{{Auth::guard('store')->user()->store->store_servicecredit}} 分</span>
                                    <!-- <span class=""><i></i><em></em></span>  -->
                                </li>
                                <li> 发货速度<span class="credit">{{Auth::guard('store')->user()->store->store_deliverycredit}} 分</span>
                                    <!-- <span class=""><i></i><em></em></span>  -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="seller-cont">
                    <div class="container type-a">
                        <div class="hd">
                            <h3>店铺及商品提示</h3>
                            <h5>您需要关注的店铺信息以及待处理事项</h5>
                        </div>
                        <div class="content">
                            <dl class="focus">
                                <dt>店铺商品发布情况：</dt>
                                <dd title="已发布/可传商品"><em id="nc_goodscount">93</em>&nbsp;/&nbsp;
                                    不限          </dd>
                                <dt>图片空间使用：</dt>
                                <dd><em id="nc_imagecount">29</em>&nbsp;/&nbsp;不限</dd>
                            </dl>
                            <ul>
                                <li><a href="index.php?act=store_goods_online&amp;op=index" class="num">出售中 <strong id="nc_online">7</strong></a></li>
                                <li><a href="index.php?act=store_goods_offline&amp;op=index&amp;type=wait_verify&amp;verify=10" title="30天内举报记录数" class="num">发布待平台审核 <strong id="nc_waitverify">4</strong></a></li>
                                <li><a href="index.php?act=store_goods_offline&amp;op=index&amp;type=wait_verify&amp;verify=0" title="30天内举报记录数">平台审核失败 <strong id="nc_verifyfail"></strong></a></li>
                                <li><a href="index.php?act=store_goods_offline&amp;op=index" class="num">仓库中已审核 <strong id="nc_offline">81</strong></a></li>
                                <li><a href="index.php?act=store_goods_offline&amp;op=index&amp;type=lock_up" class="num">违规下架 <strong id="nc_lockup">1</strong></a></li>
                                <li><a href="index.php?act=store_consult&amp;op=consult_list&amp;type=to_reply">待回复咨询 <strong id="nc_consult"></strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container type-b">
                        <div class="hd">
                            <h3>商家帮助</h3>
                            <h5></h5>
                        </div>
                        <div class="content">
                            <ul>
                                <li><a target="_blank" href="http://liubei.com/mall/index.php?act=show_help&amp;op=index&amp;t_id=91" title="规则体系">
                                        规则体系</a></li>
                                <li><a target="_blank" href="http://liubei.com/mall/index.php?act=show_help&amp;op=index&amp;t_id=92" title="商品管理">
                                        商品管理</a></li>
                                <li><a target="_blank" href="http://liubei.com/mall/index.php?act=show_help&amp;op=index&amp;t_id=93" title="促销方式">
                                        促销方式</a></li>
                                <li><a target="_blank" href="http://liubei.com/mall/index.php?act=show_help&amp;op=index&amp;t_id=94" title="订单及售后">
                                        订单及售后</a></li>
                                <li><a target="_blank" href="http://liubei.com/mall/index.php?act=show_help&amp;op=index&amp;t_id=95" title="店铺续约">
                                        店铺续约</a></li>
                                <li><a target="_blank" href="http://liubei.com/mall/index.php?act=show_help&amp;op=index&amp;t_id=99" title="入驻流程">
                                        入驻流程</a></li>
                            </ul>
                            <dl>
                                <dt>平台联系方式</dt>
                                <!--.($key+1)-->
                                <dd>电话：0755-82911999</dd>
                                <dd>邮箱：service@liubeixc.com</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="container type-a">
                        <div class="hd">
                            <h3>交易提示</h3>
                            <h5>您需要立即处理的交易订单</h5>
                        </div>
                        <div class="content">
                            <dl class="focus">
                                <dt>近期售出：</dt>
                                <dd><a href="index.php?act=store_order" class="num">交易中的订单 <strong id="nc_progressing">10</strong></a></dd>
                                <dt>维权提示：</dt>
                                <dd><a href="index.php?act=store_complain&amp;select_complain_state=1">收到维权投诉 <strong id="nc_complain"></strong></a></dd>
                            </dl>
                            <ul>
                                <li><a href="index.php?act=store_order&amp;op=index&amp;state_type=state_confirm">待付款 <strong id="nc_payment"></strong></a></li>
                                <li><a href="index.php?act=store_order&amp;op=index&amp;state_type=state_pay" class="num">待发货 <strong id="nc_delivery">1</strong></a></li>
                                <li><a href="index.php?act=store_refund&amp;lock=2" class="num"> 售前退款 <strong id="nc_refund_lock">4</strong></a></li>
                                <li><a href="index.php?act=store_refund&amp;lock=1"> 售后退款 <strong id="nc_refund"></strong></a></li>
                                <li><a href="index.php?act=store_return&amp;lock=2"> 售前退货 <strong id="nc_return_lock"></strong></a></li>
                                <li><a href="index.php?act=store_return&amp;lock=1"> 售后退货 <strong id="nc_return"></strong></a></li>
                                <li><a href="index.php?act=store_bill&amp;op=index&amp;bill_state=1" class="num"> 待确认账单 <strong id="nc_bill_confirm">70</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container type-c">
                        <div class="hd">
                            <h3>销售情况统计</h3>
                            <h5>按周期统计商家店铺的订单量和订单金额</h5>
                        </div>
                        <div class="content">
                            <table class="ncsc-default-table">
                                <thead>
                                <tr>
                                    <th class="w50">项目</th>
                                    <th>订单量</th>
                                    <th class="w100">订单金额</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bd-line">
                                    <td>昨日销量</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="bd-line">
                                    <td>月销量</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container type-c h500">
                        <div class="hd">
                            <h3>单品销售排名</h3>
                            <h5>掌握30日内最热销的商品及时补充货源</h5>
                        </div>
                        <div class="content">
                            <table class="ncsc-default-table">
                                <thead>
                                <tr>
                                    <th>排名</th>
                                    <th class="tl" colspan="2">商品信息</th>
                                    <th>销量</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container type-d h500">

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer_content')
    <div>
        <div class="float_box"></div>
        <div class="agreement_content_box1">
            <div style="width: 738px;height: 417px;background: #fff;">
                <div class="headDiv">
                    <h3 style="font-size: 16px;color:#000;">刘备修车实力商家协议</h3>
                    <a class="close_x"><img src="http://liubei.com/mall/templates/default/images/closeAn.png"></a>
                </div>
                <div class="agreement_content" style="">
                    <p>一、实力商户入驻条件：</p>
                    <p>1. 乙方为汽车配件经销商；</p>
                    <p>2. 乙方具有合法的经营资格和固定的经营场所，乙方所提供的信息是真实、准确和完整的；</p>
                    <p>3. 乙方的经营符合国家相关法律、法规、规范性文件以及本协议的要求；</p>
                    <p>4. 乙方所售产品来源合法，且符合国家法律法规以及行业规定的质量标准，具有法律法规及行业要求所需的必备文件；</p>
                    <p>5. 乙方需将营业执照照片和店面门头照片上传至刘备修车网，经网站审核通过后，乙方正式成为本商城商户；</p>
                    <p>6. 乙方在刘备修车网已有绑定的银行卡帐号；</p>
                    <p>7. 乙方在刘备修车网上传的配件产品不少于500种，其中易损件、油品、汽车养护用品上传总数量不少于100种或经营产品全部上架；</p>
                    <p>8. 乙方需要配备一各专职的商城客服人员，作为商城的常用联系人，确保买方的线上采购咨询。</p>

                    <p>2.  二、实力商户广告服务项目</p>
                    <p>乙方委托甲方在刘备修车网乙方所在的地区主页中发布一个企业招商及产品信息广告，同时该广告位置将链接至乙方的网上实力商家店铺，用于产品发布、展示及销售，有关广告业务项目如下：</p>
                    <p>2.1 服务费用</p>
                    <table width="100%" border="1">
                        <tbody><tr>
                            <td>入驻地区</td>
                            <td>收费标准（人民币）</td>
                        </tr>
                        <tr>
                            <td>一、二线城市</td>
                            <td>2万元/年</td>
                        </tr>
                        <tr>
                            <td>三线地级市</td>
                            <td>1万元/年</td>
                        </tr>
                        </tbody></table>
                    <p>2.2 付款方式：乙方进入刘备修车网申请实力商户进行缴费操作。自乙方签署本协议后的5个工作日内，乙方须向甲方支付全额广告费用；自甲方确认收款后的5个工作日内，甲方应提供给乙方等额票据。</p>
                    <p>2.3 投放时间：自乙方的实力商家广告上线之日起12个月内。</p>
                    <p>2.4 位置说明：</p>
                    <table width="100%" border="1">
                        <tbody><tr>
                            <td>入驻地区</td>
                            <td>位置</td>
                            <td>形式</td>
                            <td>规格</td>
                            <td>备注</td>
                        </tr>
                        <tr>
                            <td>一、二线城市</td>
                            <td>入驻地区服务站修理厂登录首页面</td>
                            <td>单个图片，并链接实力商家网络地址</td>
                            <td>224px*224px</td>
                            <td>按实力商家入驻先后顺序进行排序</td>
                        </tr>
                        <tr>
                            <td>三线地级市</td>
                            <td>入驻地区服务站修理厂登录首页面</td>
                            <td>单个图片，并链接实力商家网络地址</td>
                            <td>224px*224px</td>
                            <td>按实力商家入驻先后顺序进行排序</td>
                        </tr>
                        </tbody></table>
                    <p>2.5 服务内容：</p>
                    <table width="100%" border="1">
                        <tbody><tr>
                            <td>序号</td>
                            <td>内容</td>
                            <td colspan="2">详细说明</td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>基本服务</td>
                            <td colspan="2">
                                1. 商城美工负责设计并完善实力商家网上店铺在本商城的形象<br>
                                2. 商城专业人员协助完成实力商家网上店铺内品的上传和产品卖点的描述
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>增值服务</td>
                            <td colspan="2">
                                1.实力商家网上店铺内明星产品可根据需求进行更换<br>
                                2.实力商家网上店铺内的展示商品可不限量上传
                            </td>

                        </tr>
                        </tbody></table>
                    <p>三、乙方的权利和义务：</p>
                    <p>3.1 乙方有权依法享有本协议赋予的权利，使用本协议提供的服务。</p>
                    <p>3.2 自乙方付款并经甲方确认收款后的5个工作日内，乙方须将广告素材及有关文件交给甲方指定服务单位，并派专人协助甲方完成广告发布相关工作。乙方自主制作的广告图片或内容（包括但不限于广告图片、文字内容、文件大小、图片质量）须经甲方审核通过后才可投放。</p>
                    <p>3.3 广告发布后，乙方无权要求更换广告投放位置。如有之前合作客户到期下架，乙方同意商城自动按序整体前移补充空位。</p>
                    <p>3.4 乙方有权对发布的广告内容进行每月不超过两次的更新说明，甲方需在接到乙方通知及素材有关文件之日起5日内提供需要更新的设计，乙方确认更新的设计文件后应配合甲方完成内容审核及发布工作。</p>
                    <p>3.5 若乙方广告即将到期，并确定将继续在甲方投放广告，乙方应在广告到期前15内续费。</p>
                    <p>3.6 乙方保证发布信息内容真实、准确并且符合《中华人民共和国广告法》及相关法律和法规的规定。</p>


                    <p>四、甲方的权利和义务</p>
                    <p>4.1 甲方不提供广告试放服务，自乙方按照本协议约定支付全部款项且甲方确认收到乙方全部款项后，甲方开始制作广告，自甲方收到乙方提供的完整的广告素材后10个工作日内完成乙方的广告发布工作，甲方对乙方提供的广告文件或人员配置有任何疑问，乙方应及时与甲方沟通解决。</p>
                    <p>4.2 甲方须保证乙方广告按协议规定的日期发布。</p>
                    <p>4.3 甲方应配合乙方完成广告内容更新工作，并在收到乙方提供的素材有关文件后5个工作日内完成更新工作。</p>
                    <p>4.4 甲方有权审核广告内容，并有权单方面撤下违法违规违约的广告。</p>
                    <p>4.5 甲方确保汽配商城正常运行，不得擅自中断乙方广告发布。</p>

                    <p>五、违约责任</p>
                    <p>5.1 乙方未按协议规定的日期和方式履行付款义务的，应按应付款总额的5%向甲方支付违约金，迟延付款超过15天的，甲方有权单方面解除合同并要求甲方支付应付款总额20%的违约金。</p>
                    <p>5.2 由于乙方原因（如发布广告内容不真实或者违反相关法律法规的规定、乙方提供的产品侵犯第三人合法权益等）造成甲方损失的，乙方应承担赔偿责任。甲方损失包括但不限于直接损失、间接损失以及为维权所支付的诉讼费、律师费、调查取证费等。</p>
                    <p>5.3 因甲方自身原因造成乙方广告发布延期（除不可抗力外），甲方将对该广告服务自动延期至符合规定的广告投放日期；因乙方的原因造成广告制作周期延误，造成的全部损失由乙方自行承担。</p>
                    <p>5.4因不可抗力而造成正常服务中断或停止，甲方应及时通知乙方，对该广告服务自动延期至符合规定的广告投放日期。</p>

                    <p>六、协议解除</p>
                    <p>6.1 出于网站运营效果考虑，若网上实力商家店铺出现以下情况，则甲方有权解除本服务协议：</p>
                    <p>（1）自实力商家店铺上线之日起30日内，购买产品的不同买家数量少于10个；（2）每月参与采购的买家少于10个；</p>
                    <p>（3）出现两次以上（不含两次）网站有权取消乙方实力商户资格。</p>
                    <p>6.2 实力商家上线90天为考核期，考核期内实力商家未达到上述考核指标（参照6.1），网站有权给予劝退；</p>
                    <p>6.3 实力商家如果对网站的服务不满意，可主动提出协议解除。</p>
                    <p>6.4 考核期解除协议的退款方式：</p>
                    网站扣除费用包含：后台服务费2000元，以及省会城市1500元/月（地级市700元/月）。<p></p>
                    剩余费用将退还至乙方在本商城绑定的银行卡账号。<p></p>
                    具体核算方式如下：<p></p>
                    省会城市：返还费用等于20000元减去（1500元乘以已经开放月份）减去（2000元后台服务费）。（已经投放月份，不足15天不计入月份）。<p></p>
                    地级城市：返还费用等于10000元减去（700元乘以已经开放月份）减去（2000元后台服务费）。（已经投放月份，不足15天不计入月份。）<p></p>
                    <p>6.5 自乙方签署本协议后，乙方未按协议规定的日期和方式履行付款义务，逾期超过15日的，甲方有权解除本协议。</p>
                    <p>6.6 甲方应自本协议到期前30日通知乙方续费事宜。</p>
                    <p>七、不可抗力</p>
                    <p>7.1因不可抗力（不可抗力指双方在订立协议时不能预见的、对其发生和后果不能避免且不能克服的事件。包括黑客攻击、计算机病毒发作、电信部门技术调整导致之影响、因政府管制而造成的暂时性关闭等，而造成的任何影响网络正常经营之情形），致使本协议无法履行，本协议自动终止。</p>
                    <p>7.2 因不可抗力或其他意外事件，致使本协议的履行不可能、不必要或者无意义的，任何一方均可解除本协议，且双方互不承担违约责任，待不可抗力情形消失后，由双方协商确定变更协议内容。</p>

                    <p>八、争议解决</p>
                    <p>8.1 本协议以上规定若与相关法律法规或规范性文件相冲突，以相关法律法规或规范性文件为准。</p>
                    <p>8.2 双方因协议的解释或履行产生争议，由双方协商解决。协商不成，则向甲方所在地人民法院起诉。</p>

                    <p>九、其它
                    </p><p>9.1 对协议条款的任何修改、变更或增减，须经双方签署书面文件，成为本协议的补充文件，具有同等法律效力。</p>
                    <p>9.2 本协议未尽事宜，由双方协商解决。
                    </p></div>
            </div>
        </div>
        <div class="agreement_content_box">
            <div style="width: 738px;height: 417px;background: #fff;">
                <div class="headDiv">
                    <h3 style="font-size: 16px;color:#000;">刘备修车保证金协议</h3>
                    <a class="close_x"><img src="http://liubei.com/mall/templates/default/images/closeAn.png"></a>
                </div>
                <div class="agreement_content" style="">
                    <p>刘备修车网及刘备修车网汽配商城由深圳市点红网络科技有限公司经营并管理，您确认，您已经充分阅读、理解并接受本协议的全部内容．即表示您同意并遵循本协议(《刘备修车网供应商入网合作协议》）之所有约定．点击“确认”按钮即表明您同意以下使用条件和所有有关的政策、条件和准则的约束，请仔细阅读这些使用条件。</p>
                    <p>一、您确认满足以下条件</p>
                    <p>  1 您为汽车配件经销商；</p>
                    <p>  2  您为符合中国法律法规成立并具有相应合法证照的实体组织；</p>
                    <p>  3 您具有合法的经营资格和固定的经营场所，您所提供的信息是真实、准确和完整的；</p>
                    <p>  4 您的经营符合国家相关法律、法规、规范性文件以及本协议的要求；</p>
                    <p>  5 您所售产品符合国家法律法规以及行业规定的质量标准；</p>
                    <p>  6 您需将营业执照照片和店面门头照片上传至刘备修车网，经网站审核通过后，您正式成为本商城商户。</p>
                    <p>二、双方权利与义务</p>
                    <p>  2.1 刘备修车网协助您办理网上资质审核工作，为您提供注册端口；</p>
                    <p>  2.2 刘备修车网在本网站协议物流企业业务覆盖范围内为您提供采购方订货的物流配送，网站对因运输过程中所造成的直接损坏及安全负责；若在本网站物流企业无法覆盖的范围内，您须按照本网站的要求，在保证服务质量的前提下自选物流企业进行配送服务；</p>
                    <p>  2.3 刘备修车网协助您办理好您位于本商城内的对账与货款结算工作；</p>
                    <p>  2.4 刘备修车网有权对您的注册资料及交易行为进行查阅，发现注册资料或交易行为中存在问题，或可能会导致不良后果的，有权向您发出询问，要求您进一步提供必要的信息或直接对相关的交易作出相应的处理；</p>
                    <p>  2.5 刘备修车网有权对您出售商品是否具有合法进货来源进行不定期检查，您应对您在本网站销售的商品提供合法进货凭证，若您无法提供，本网站有权依据实际情况对商品的真伪作出判断，并根据本协议以及本网站相关规则对相关商品进行处理，由此产生的不利后果均由您承担；</p>
                    <p>  2.6 刘备修车网在一般情况下不对您的交易行为以及与交易有关的其它事项进行事先审查，但如存在第三方通知本网站或采购方，认为您的具体交易事项可能存在重大问题的情况。本网站将以普通非专业人员的知识水平标准对相关内容进行判别，如认为这些内容或行为违法或具有不当性质的，本网站有权根据不同情况选择删除相关信息或停止对您提供服
                        务，并追究相关法律责任。</p>
                    <p>  2.7 您在刘备修车网内的注册信息以及发布的产品信息、供货数量、销售价格等所有信息必须真实有效；</p>
                    <p>  2.8 您在刘备修车网内提供的相关证照、产品质量等文件可供购买单位通过本平台进行查询与质量追踪；</p>
                    <p>  2.9 您保证您将按照不低于《中华人民共和国产品质量法》、《中华人民共和国消费者权益保护法》及其他法规、部门规章和国家强制性标准规定的要求，出售商品并提供“三包”等售后服务。您承诺对因您所售商品出现的质量问题而产生的一切责任均由您自己承担，与本网站无关；</p>
                    <p>  2.10  您保证在适用本网站进行交易的过程中遵守诚实信用原则，不在交易过程中采取不正当竞争行为，不扰乱网上交易的正常秩序，不从事与网上交易无关的行为；</p>
                    <p>  2.11 您保证不对本网站上的任何数据作商业性利用，包括但不限于在未经本网站实现书面批准的情况下，以复制、传播或向他方披露等方式使用在本网站上其他用户展示的任何资料；</p>
                    <p>  2.12  你保证拥有合法的权利和资格向本网站上传有关商品销售信息并进行销售，且前述行为未对任何第三方合法权益，包括但不限于第三方知识产权等构成侵害，如您的行为导致本网站遭受任何第三方提起的索赔、诉讼或行政问责，您将承担相应责任并保证使本网站免责；</p>
                    <p>  2.13  您在经营中与购买单位发生纠纷，您须自行处理好，若您请求本网站从中予以协调的，经本网站审核后可以向双方了解情况，将所了解的情况通知对方，本网站仅协助处理，并不构成义务。</p>
                    <p>三、服务约定</p>
                    <p>1.  您和您产品的采购方都同意只使用刘备修车网提供的支付系统进行资金转账和监管；</p>
                    <p>2.  您在接到网上订单后，需与采购方联系，确认商品名称、型号、价格以及发票开具等信 息后，点击订单确认；</p>
                    <p>3.  采购方通过支付平台完成支付后，正式订单即生成；</p>
                    <p>4.  本网站将生成的订单随货品配送给采购方，采购方收货后，有三天的退货期，三天没有提出异议，之后再需2个工作日货款即可汇入商户在本网站绑定的账户；</p>
                    <p>3.  采购方收货或使用后如有异议，例如产品质量、退换货等，您须主动在线下沟通解决， 本网站有义务协助；</p>
                    <p>4.  采购方的购货发票由您负责开具，开票方式和发票传递须符合国家税法规定；</p>
                    <p>5.  托管银行在向您支付货款时，按协议条款，自动扣除商户每笔交易的网络技术使用费及 支付系统手续费；</p>
                    <p>6.  非刘备修车网故意行为，因互联网运行的不确定因素导致的经营障碍，刘备修车网与您均免责；</p>
                    <p>7.  您须解决采购商的投诉、网上评论以及采购商退换货工作，刘备修车网有义务协助；</p>
                    <p>10您的账户和密码非常重要须做好保密工作并妥善管理，发生信息泄漏或被盗等情形，责任由您自行承担。</p>
                    <p>四、您须缴纳的费用</p>
                    <p>  4.1 刘备修车网络技术使用费及支付系统手续费：您网上销售额的3%，由支付系统给您汇款时直接扣除。如因发展需要收取宣传、促销费用将另行通知；（手续费是否减免以当期发布的政策为准）</p>
                    <p>  4.2 诚信保证金： </p>
                    <p>　（1）诚信保证金定义：您确保诚信经营，对其所销售产品的特征、性能描述与实际配送到购买方的一致，做到货真价值；</p>
                    <p>　（2）保证金的交纳方式，入驻商城需交纳保证金1000元.；</p>
                    <p>　（3）未发生质量投诉，保证金将在您退出本商城时全额退款； </p>
                    <p>　（4） 保证金扣款行为：</p>
                    <p>A.  向买方提供的商品非订单中所描述（如标注 A 品牌发货B 品牌）；</p>
                    <p> B、 供货不及时，影响买方使用，造成买方产生损失；</p>
                    <p>         C、 商品出现质量问题，造成买方产生损失；</p>
                    <p>          D、 不按时邮寄发票</p>
                    <p>E、 以及其他不诚信经营給买方造成损失的行为。</p>
                    <p>（5） 保证金扣款约定：</p>
                    <p>A、买方就第（4）项中出现的行为向本商城投诉，经第三方判定成立，执行处罚；</p>
                    <p>B、视情节严重，给予 500 元—1000 元的扣款。</p>
                    <p>（6） 追加保证金：</p>
                    <p>若您出现保证金被扣除的情况时，需在 7 个工作日内补齐1000 元基础保证金。</p>
                    <p>五、销售约定</p>
                    <p>5.1、为给采购方营造良好的采购环境，促进您的产品销售，您需要不断完善和丰富自己的商品．</p>
                    <p>5.2、为更好的服务买家，促进商品在商城的销售，您需要指派专职人员来管理商城店铺，并参加本商城组织的各种培训．</p>
                    <p>5.3、了为便于您的采购方掌握采购流程，您在店铺上线30天内至少邀请10位你的线下修理厂客户参与线上交易体验．</p>
                    <p>6.  协议解除</p>
                    <p>6.1、您出现两次以上不诚信行为，将扣除你的诚信保证金．</p>
                    <p>6.2、根据您平时在商城中交易违规情况严重情况，公司有权单方面解除合作协议．</p>
                    <p>6.3  若您无合法证照且以不当方式注册为本网站用户的，您与本网站之间的合作协议自始无效，一经发现，公司有权解除合作协议，取消该用户服务</p> ，如给本网站造成损失的，您同意赔偿全部损失.<p></p>
                    <p>6.4 若您中途退出，须提前 30 天以书面形式通知刘备修车网，经本网站审核同意，在账目核对后，您需在15个工作日内办理好解除协议事宜，由本网站注销注册用户，但在注销用户后，本网站仍保留下列权利及义务：</p>
                    <p>（1）本网站有权保留和合理使用您的注册资料及以前的交易行为记录；</p>
                    <p>（2）如您在注销前在本网站的交易行为中存在违法行为或违反本协议的行为，本网站仍可行使本协议规定的权利。</p>
                    <p>七、有限责任</p>
                    <p>7.1 本网站有义务在技术上确保正常运行，尽力避免服务中断或将中断时间限制在最短时间内，保证您的网上交易活动的顺利进行。但如因不可抗力或者其他无法控制的原因使本网站崩溃或无法正产适用导致网上交易无法完成或丢失有关的信息、记录等，本网站不承担责任；</p>
                    <p>7.2 任何用户向本网站提供错误、不完整、不真实信息等原因造成不能正常适用本网站服务或遭受任何其他损失，与本网站无关；</p>
                    <p>7.3 本网站对任何直接、间接、偶然、特殊及其他的损害不负责任，这些损害可能来自：不正当使用网络服务，非法使用网络服务或用户传送的信息有所变动等方面。</p>
                    <p>8.  违约责任</p>
                    <p>8.1 本协议任何一方违反本协议规定的内容，给另一方造成损失的，应当承担违约责任，赔偿另一方因此造成的损失，包括但不限于物质损失、利息损失、因追索或诉讼而支出的诉讼费、合理的通讯费、交通费、住宿费、律师费等；</p>
                    <p>8.2 协议一方违反协议规定内容给另一方造成损失的，受损失的一方应当采取合理措施避免损失扩大，因防止损失夸大而支出的合理费用，由违约方承担。一方没有采取合理措施避免损失扩大的，对损失扩大部分违约方不承担赔偿责任。</p>
                    <p>九、争议的解决</p>
                    <p>本协议在执行过程中如有争议，双方应先协商解决；如协商不成，由深圳市宝安区人民法院管辖。如发生本网站服务条款与中华人民共和国法律相抵触时，则这些条款将完全按照法律规定重新解释，而其他条款则依旧保持对双方产生法律效力和影响。</p>


                </div>
            </div>
        </div>
        <div class="ConfirmationLetterBox">
            <div>
                <div style="position: relative;">
                    <a class="close_x" style="">
                        <img src="http://liubei.com/mall/templates/default/images/closeAn.png">
                    </a>
                </div>
            </div>
            <div class="ConfirmationContent" style="">
                <h3 style="">收款确认函</h3>
                <p style="text-indent:2em;">深圳市点红网络科技有限公司<em class="borderBottom black" id="JTime">2016 年08月16日</em>收到<em class="borderBottom black" id="JCompany">深圳大雄汽配修量厂有限公司</em>如下款项：</p>
                <p class="money" style="">《平台保证金》<em class="black" id="JMoney">1000</em>元（大写金额：
                    <em class="black" id="JMoney2">壹千</em>元）</p>
                <p style="font-size: 14px">此确认函只代表我司财务部确认收到该笔款项，并不作为它有效凭证。</p>

            </div>
            <div class="companyName" style="">
                <p style="margin-top:100px;">深圳市点红网络科技有限公司</p>
                <p style="margin-top:20px;margin-bottom:30px;">签章：（账务章）</p>
                <p style="">日期：<em class="black" id="JTime2">2016年08月16日</em></p>
            </div>
        </div>
    </div>
@endsection