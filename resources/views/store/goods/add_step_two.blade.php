@extends('mall.layout.base')
@section('content')
    <div id="layoutRight" class="ncsc-layout-right">
        <div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>商品<i class="icon-angle-right"></i>商品发布</div>
        <div class="main-content" id="mainContent">
            <script>
                // 认证服务器地址
                var oss_api_server_url = 'http://liubei.com/entry/index.php?act=auth';
                // 上传路径
                var oss_object_prefix = 'shop/store/goods/92/';
            </script>
            <script src="http://liubei.com/data/resource/js/jquery.ajaxContent.pack.js"></script>
            <script src="http://liubei.com/data/resource/js/jquery-ui/i18n/zh-CN.js"></script>
            <script src="http://liubei.com/data/resource/js/common_select.js"></script>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/fileupload/jquery.iframe-transport.js" charset="utf-8"></script>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/fileupload/jquery.ui.widget.js" charset="utf-8"></script>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/fileupload/jquery.fileupload.js" charset="utf-8"></script>
            <script src="http://liubei.com/data/resource/js/jquery.poshytip.min.js"></script>
            <script src="http://liubei.com/data/resource/js/jquery.mousewheel.js"></script>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/jquery.charCount.js"></script>
            <!--[if lt IE 8]>
            <script src="http://liubei.com/data/resource/js/json2.js"></script>
            <![endif]-->
            <script src="http://liubei.com/mall/resource/js/store_goods_add.step2.js"></script>
            <script src="http://liubei.com/mall/resource/js/diyField.js"></script>
            <link rel="stylesheet" type="text/css" href="http://liubei.com/data/resource/js/jquery-ui/themes/ui-lightness/jquery.ui.css">
            <link rel="stylesheet" href="http://liubei.com/core/framework/libraries/storage/client/src/css/default.css">
            <script src="http://liubei.com/core/framework/libraries/storage/client/src/js/plupload.full.min.js"></script>
            <script src="http://liubei.com/core/framework/libraries/storage/client/src/js/uploadoss.js"></script>
            <ul class="add-goods-step">
                <li><i class="icon icon-list-alt"></i>
                    <h6>STEP.1</h6>
                    <h2>选择商品分类</h2>
                    <i class="arrow icon-angle-right"></i> </li>
                <li class="current"><i class="icon icon-edit"></i>
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
            <div class="item-publish">
                <form method="post" id="goods_form" action="http://liubei.com/mall/index.php?act=store_goods_add&amp;op=save_goods">
                    <input type="hidden" name="form_submit" value="ok"> <input type="hidden" name="commonid" value=""> <input type="hidden" name="type_id" value="0"> <input type="hidden" name="ref_url" value="http://liubei.com/mall/index.php?act=store_goods_add&amp;op=index">
                    <div class="ncsc-form-goods">
                        <h3>商品基本信息</h3>
                        <dl>
                            <dt>商品分类：</dt>
                            <dd id="gcategory"> 发动机系统 &gt;点火系 &gt;点火线圈 <a class="ncsc-btn" href="http://liubei.com/mall/index.php?act=store_goods_add&amp;op=add_step_one">编辑</a>
                                <input type="hidden" id="cate_id" name="cate_id" value="90" class="text">
                                <input type="hidden" name="cate_name" value="发动机系统 >点火系 >点火线圈" class="text">
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="required">*</i>商品名称：</dt>
                            <dd>
                                <input name="g_name" type="text" class="text w400" value=""> <span></span>
                                <p class="hint">商品标题名称长度至少3个字符，最长50个汉字</p>
                            </dd>
                        </dl>
                        <!-- 增加表单 -->
                        <dl>
                            <dt>商品别名：</dt>
                            <dd>
                                <input name="g_alias1" type="text" class="text w100" value="">
                                <input name="g_alias2" type="text" class="text w100" value="">
                                <input name="g_alias3" type="text" class="text w100" value="">
                                <span></span>
                            </dd>
                        </dl>
                        <dl style="overflow: visible;">
                            <dt><i class="required">*</i>商品品牌：</dt>
                            <dd>
                                <div class="ncsc-brand-select" style="float:left;">
                                    <div class="selection">
                                        <input name="b_name" id="b_name" value="" type="text" class="text w180"> <input type="hidden" name="b_id" id="b_id" value=""> <em class="add-on" nctype="add-on"><i class="icon-collapse"></i></em>
                                    </div>
                                    <div class="ncsc-brand-select-container">
                                        <div class="brand-index" data-tid="0" data-url="http://liubei.com/mall/index.php?act=store_goods_add&amp;op=ajax_get_brand">
                                            <div class="letter" nctype="letter">
                                                <ul>
                                                    <li><a href="javascript:void(0);" data-letter="all">全部</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="A">A</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="B">B</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="C">C</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="D">D</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="E">E</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="F">F</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="G">G</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="H">H</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="I">I</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="J">J</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="K">K</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="L">L</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="M">M</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="N">N</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="O">O</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="P">P</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="Q">Q</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="R">R</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="S">S</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="T">T</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="U">U</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="V">V</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="W">W</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="X">X</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="Y">Y</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="Z">Z</a></li>
                                                    <li><a href="javascript:void(0);" data-letter="0-9">其他</a></li>
                                                    <li><a href="javascript:void(0);" data-empty="0">清空</a></li>
                                                </ul>
                                            </div>
                                            <div class="search" nctype="search">
                                                <input name="search_brand_keyword" id="search_brand_keyword" type="text" class="text" placeholder="品牌名称关键字查找"><a href="javascript:void(0);" class="ncsc-btn-mini" style="vertical-align: top;">Go</a>
                                            </div>
                                        </div>
                                        <div class="brand-list ps-container" nctype="brandList">
                                            <ul nctype="brand_list">
                                                <li data-id="453" data-name="阿波罗"><em>A</em>阿波罗</li>
                                                <li data-id="682" data-name="奥迪"><em>A</em>奥迪</li>
                                                <li data-id="681" data-name="安驰"><em>A</em>安驰</li>
                                                <li data-id="461" data-name="艾路斯"><em>A</em>艾路斯</li>
                                                <li data-id="460" data-name="AW"><em>A</em>AW</li>
                                                <li data-id="459" data-name="爱信"><em>A</em>爱信</li>
                                                <li data-id="458" data-name="爱动"><em>A</em>爱动</li>
                                                <li data-id="457" data-name="安索（AMSOIL）"><em>A</em>安索（AMSOIL）</li>
                                                <li data-id="456" data-name="AC"><em>A</em>AC</li>
                                                <li data-id="454" data-name="安耐特"><em>A</em>安耐特</li>
                                                <li data-id="455" data-name="安捷迅"><em>A</em>安捷迅</li>
                                                <li data-id="689" data-name="奔驰"><em>B</em>奔驰</li>
                                                <li data-id="690" data-name="奔腾"><em>B</em>奔腾</li>
                                                <li data-id="691" data-name="本田"><em>B</em>本田</li>
                                                <li data-id="692" data-name="比亚迪"><em>B</em>比亚迪</li>
                                                <li data-id="693" data-name="标致"><em>B</em>标致</li>
                                                <li data-id="687" data-name="北京"><em>B</em>北京</li>
                                                <li data-id="686" data-name="保时捷"><em>B</em>保时捷</li>
                                                <li data-id="684" data-name="宝龙"><em>B</em>宝龙</li>
                                                <li data-id="685" data-name="宝马"><em>B</em>宝马</li>
                                                <li data-id="462" data-name="博韦德"><em>B</em>博韦德</li>
                                                <li data-id="463" data-name="奔原"><em>B</em>奔原</li>
                                                <li data-id="688" data-name="北汽"><em>B</em>北汽</li>
                                                <li data-id="694" data-name="别克"><em>B</em>别克</li>
                                                <li data-id="683" data-name="宝骏"><em>B</em>宝骏</li>
                                                <li data-id="696" data-name="长安"><em>C</em>长安</li>
                                                <li data-id="697" data-name="长安商用"><em>C</em>长安商用</li>
                                                <li data-id="698" data-name="长城"><em>C</em>长城</li>
                                                <li data-id="699" data-name="传祺"><em>C</em>传祺</li>
                                                <li data-id="695" data-name="昌河"><em>C</em>昌河</li>
                                                <li data-id="799" data-name="车仆"><em>C</em>车仆</li>
                                                <li data-id="705" data-name="道奇"><em>D</em>道奇</li>
                                                <li data-id="467" data-name="东机工"><em>D</em>东机工</li>
                                                <li data-id="465" data-name="德尔福"><em>D</em>德尔福</li>
                                                <li data-id="704" data-name="大众"><em>D</em>大众</li>
                                                <li data-id="676" data-name="DS"><em>D</em>DS</li>
                                                <li data-id="464" data-name="DENSO电装"><em>D</em>DENSO电装</li>
                                                <li data-id="709" data-name="东南"><em>D</em>东南</li>
                                                <li data-id="708" data-name="东风小康"><em>D</em>东风小康</li>
                                                <li data-id="707" data-name="东风风度"><em>D</em>东风风度</li>
                                                <li data-id="703" data-name="大宇"><em>D</em>大宇</li>
                                                <li data-id="702" data-name="大通"><em>D</em>大通</li>
                                                <li data-id="701" data-name="大发"><em>D</em>大发</li>
                                                <li data-id="700" data-name="大迪"><em>D</em>大迪</li>
                                                <li data-id="466" data-name="DOLZ"><em>D</em>DOLZ</li>
                                                <li data-id="706" data-name="东风"><em>D</em>东风</li>
                                                <li data-id="667" data-name="福特"><em>F</em>福特</li>
                                                <li data-id="666" data-name="福迪"><em>F</em>福迪</li>
                                                <li data-id="665" data-name="风行"><em>F</em>风行</li>
                                                <li data-id="664" data-name="风神"><em>F</em>风神</li>
                                                <li data-id="662" data-name="菲亚特"><em>F</em>菲亚特</li>
                                                <li data-id="663" data-name="丰田"><em>F</em>丰田</li>
                                                <li data-id="668" data-name="福田"><em>F</em>福田</li>
                                                <li data-id="472" data-name="菲亚姆"><em>F</em>菲亚姆</li>
                                                <li data-id="471" data-name="FAG"><em>F</em>FAG</li>
                                                <li data-id="473" data-name="法雷奥"><em>F</em>法雷奥</li>
                                                <li data-id="791" data-name="富奇"><em>F</em>富奇</li>
                                                <li data-id="470" data-name="菲罗多"><em>F</em>菲罗多</li>
                                                <li data-id="469" data-name="风帆"><em>F</em>风帆</li>
                                                <li data-id="468" data-name="FSL"><em>F</em>FSL</li>
                                                <li data-id="540" data-name="GMB"><em>G</em>GMB</li>
                                                <li data-id="539" data-name="盖茨"><em>G</em>盖茨</li>
                                                <li data-id="669" data-name="观致"><em>G</em>观致</li>
                                                <li data-id="670" data-name="光冈"><em>G</em>光冈</li>
                                                <li data-id="541" data-name="冠军"><em>G</em>冠军</li>
                                                <li data-id="712" data-name="华北"><em>H</em>华北</li>
                                                <li data-id="534" data-name="汉高"><em>H</em>汉高</li>
                                                <li data-id="535" data-name="海拉"><em>H</em>海拉</li>
                                                <li data-id="536" data-name="弘光"><em>H</em>弘光</li>
                                                <li data-id="537" data-name="HZY"><em>H</em>HZY</li>
                                                <li data-id="538" data-name="惠源"><em>H</em>惠源</li>
                                                <li data-id="675" data-name="悍马"><em>H</em>悍马</li>
                                                <li data-id="671" data-name="哈飞"><em>H</em>哈飞</li>
                                                <li data-id="674" data-name="海马"><em>H</em>海马</li>
                                                <li data-id="672" data-name="哈弗"><em>H</em>哈弗</li>
                                                <li data-id="710" data-name="恒天"><em>H</em>恒天</li>
                                                <li data-id="673" data-name="海格"><em>H</em>海格</li>
                                                <li data-id="713" data-name="华普"><em>H</em>华普</li>
                                                <li data-id="533" data-name="好顺"><em>H</em>好顺</li>
                                                <li data-id="718" data-name="汇众"><em>H</em>汇众</li>
                                                <li data-id="717" data-name="黄海"><em>H</em>黄海</li>
                                                <li data-id="716" data-name="幻速"><em>H</em>幻速</li>
                                                <li data-id="715" data-name="华阳"><em>H</em>华阳</li>
                                                <li data-id="714" data-name="华泰"><em>H</em>华泰</li>
                                                <li data-id="711" data-name="红旗"><em>H</em>红旗</li>
                                                <li data-id="797" data-name="华颂"><em>H</em>华颂</li>
                                                <li data-id="532" data-name="INA"><em>I</em>INA</li>
                                                <li data-id="720" data-name="吉利"><em>J</em>吉利</li>
                                                <li data-id="725" data-name="捷豹"><em>J</em>捷豹</li>
                                                <li data-id="724" data-name="江南"><em>J</em>江南</li>
                                                <li data-id="723" data-name="江铃"><em>J</em>江铃</li>
                                                <li data-id="528" data-name="加石油"><em>J</em>加石油</li>
                                                <li data-id="529" data-name="J-WORKS"><em>J</em>J-WORKS</li>
                                                <li data-id="530" data-name="加德士"><em>J</em>加德士</li>
                                                <li data-id="722" data-name="江淮"><em>J</em>江淮</li>
                                                <li data-id="721" data-name="佳星"><em>J</em>佳星</li>
                                                <li data-id="531" data-name="金冷"><em>J</em>金冷</li>
                                                <li data-id="726" data-name="解放"><em>J</em>解放</li>
                                                <li data-id="727" data-name="金杯"><em>J</em>金杯</li>
                                                <li data-id="677" data-name="Jeep"><em>J</em>Jeep</li>
                                                <li data-id="719" data-name="吉奥"><em>J</em>吉奥</li>
                                                <li data-id="527" data-name="嘉实多"><em>J</em>嘉实多</li>
                                                <li data-id="728" data-name="九龙"><em>J</em>九龙</li>
                                                <li data-id="731" data-name="凯迪拉克"><em>K</em>凯迪拉克</li>
                                                <li data-id="729" data-name="卡威"><em>K</em>卡威</li>
                                                <li data-id="732" data-name="克莱斯勒"><em>K</em>克莱斯勒</li>
                                                <li data-id="800" data-name="康普顿"><em>K</em>康普顿</li>
                                                <li data-id="795" data-name="凯翼"><em>K</em>凯翼</li>
                                                <li data-id="730" data-name="开瑞"><em>K</em>开瑞</li>
                                                <li data-id="522" data-name="卡夫特"><em>K</em>卡夫特</li>
                                                <li data-id="523" data-name="卡泰克"><em>K</em>卡泰克</li>
                                                <li data-id="526" data-name="King of CL"><em>K</em>King of CL</li>
                                                <li data-id="525" data-name="凯诺"><em>K</em>凯诺</li>
                                                <li data-id="524" data-name="KYB"><em>K</em>KYB</li>
                                                <li data-id="521" data-name="路维"><em>L</em>路维</li>
                                                <li data-id="733" data-name="雷克萨斯"><em>L</em>雷克萨斯</li>
                                                <li data-id="735" data-name="理念"><em>L</em>理念</li>
                                                <li data-id="736" data-name="力帆"><em>L</em>力帆</li>
                                                <li data-id="737" data-name="铃木"><em>L</em>铃木</li>
                                                <li data-id="738" data-name="陆风"><em>L</em>陆风</li>
                                                <li data-id="520" data-name="利达"><em>L</em>利达</li>
                                                <li data-id="519" data-name="LUK"><em>L</em>LUK</li>
                                                <li data-id="518" data-name="伦福德"><em>L</em>伦福德</li>
                                                <li data-id="517" data-name="骆氏"><em>L</em>骆氏</li>
                                                <li data-id="516" data-name="骆驼"><em>L</em>骆驼</li>
                                                <li data-id="734" data-name="雷诺"><em>L</em>雷诺</li>
                                                <li data-id="792" data-name="猎豹"><em>L</em>猎豹</li>
                                                <li data-id="801" data-name="龙蟠"><em>L</em>龙蟠</li>
                                                <li data-id="739" data-name="路虎"><em>L</em>路虎</li>
                                                <li data-id="740" data-name="马自达"><em>M</em>马自达</li>
                                                <li data-id="679" data-name="MINI"><em>M</em>MINI</li>
                                                <li data-id="515" data-name="MINTEX1"><em>M</em>MINTEX1</li>
                                                <li data-id="514" data-name="美孚"><em>M</em>美孚</li>
                                                <li data-id="513" data-name="马牌"><em>M</em>马牌</li>
                                                <li data-id="512" data-name="马勒"><em>M</em>马勒</li>
                                                <li data-id="511" data-name="曼牌"><em>M</em>曼牌</li>
                                                <li data-id="678" data-name="MG"><em>M</em>MG</li>
                                                <li data-id="741" data-name="美亚"><em>M</em>美亚</li>
                                                <li data-id="742" data-name="纳智捷"><em>N</em>纳智捷</li>
                                                <li data-id="509" data-name="NGK"><em>N</em>NGK</li>
                                                <li data-id="510" data-name="耐诺思"><em>N</em>耐诺思</li>
                                                <li data-id="744" data-name="欧宝"><em>O</em>欧宝</li>
                                                <li data-id="745" data-name="欧朗"><em>O</em>欧朗</li>
                                                <li data-id="743" data-name="讴歌"><em>O</em>讴歌</li>
                                                <li data-id="508" data-name="OCI"><em>O</em>OCI</li>
                                                <li data-id="507" data-name="壳牌"><em>Q</em>壳牌</li>
                                                <li data-id="750" data-name="庆铃"><em>Q</em>庆铃</li>
                                                <li data-id="749" data-name="起亚"><em>Q</em>起亚</li>
                                                <li data-id="748" data-name="启腾"><em>Q</em>启腾</li>
                                                <li data-id="747" data-name="启辰"><em>Q</em>启辰</li>
                                                <li data-id="746" data-name="奇瑞"><em>Q</em>奇瑞</li>
                                                <li data-id="751" data-name="日产"><em>R</em>日产</li>
                                                <li data-id="752" data-name="荣威"><em>R</em>荣威</li>
                                                <li data-id="753" data-name="瑞麒"><em>R</em>瑞麒</li>
                                                <li data-id="506" data-name="日立"><em>R</em>日立</li>
                                                <li data-id="754" data-name="萨博"><em>S</em>萨博</li>
                                                <li data-id="802" data-name="速马力"><em>S</em>速马力</li>
                                                <li data-id="793" data-name="赛宝"><em>S</em>赛宝</li>
                                                <li data-id="762" data-name="斯柯达"><em>S</em>斯柯达</li>
                                                <li data-id="761" data-name="斯巴鲁"><em>S</em>斯巴鲁</li>
                                                <li data-id="760" data-name="思铭"><em>S</em>思铭</li>
                                                <li data-id="759" data-name="双龙"><em>S</em>双龙</li>
                                                <li data-id="758" data-name="双环"><em>S</em>双环</li>
                                                <li data-id="757" data-name="绅宝"><em>S</em>绅宝</li>
                                                <li data-id="755" data-name="三菱"><em>S</em>三菱</li>
                                                <li data-id="756" data-name="陕汽通家"><em>S</em>陕汽通家</li>
                                                <li data-id="498" data-name="索菲玛"><em>S</em>索菲玛</li>
                                                <li data-id="497" data-name="沙漠之鹰"><em>S</em>沙漠之鹰</li>
                                                <li data-id="499" data-name="胜视"><em>S</em>胜视</li>
                                                <li data-id="500" data-name="SKF"><em>S</em>SKF</li>
                                                <li data-id="501" data-name="声魔"><em>S</em>声魔</li>
                                                <li data-id="502" data-name="SK"><em>S</em>SK</li>
                                                <li data-id="503" data-name="萨克斯"><em>S</em>萨克斯</li>
                                                <li data-id="504" data-name="上海汇众"><em>S</em>上海汇众</li>
                                                <li data-id="505" data-name="胜牌"><em>S</em>胜牌</li>
                                                <li data-id="496" data-name="3M"><em>S</em>3M</li>
                                                <li data-id="680" data-name="Smart"><em>S</em>Smart</li>
                                                <li data-id="492" data-name="天一电子"><em>T</em>天一电子</li>
                                                <li data-id="763" data-name="天马"><em>T</em>天马</li>
                                                <li data-id="764" data-name="通田"><em>T</em>通田</li>
                                                <li data-id="488" data-name="TRW"><em>T</em>TRW</li>
                                                <li data-id="489" data-name="天博"><em>T</em>天博</li>
                                                <li data-id="765" data-name="通用"><em>T</em>通用</li>
                                                <li data-id="490" data-name="铁狼"><em>T</em>铁狼</li>
                                                <li data-id="491" data-name="统一"><em>T</em>统一</li>
                                                <li data-id="495" data-name="泰索"><em>T</em>泰索</li>
                                                <li data-id="494" data-name="TEXTAR（泰明顿）"><em>T</em>TEXTAR（泰明顿）</li>
                                                <li data-id="493" data-name="泰锐"><em>T</em>泰锐</li>
                                                <li data-id="796" data-name="腾势"><em>T</em>腾势</li>
                                                <li data-id="487" data-name="U2"><em>U</em>U2</li>
                                                <li data-id="481" data-name="瓦尔塔"><em>W</em>瓦尔塔</li>
                                                <li data-id="771" data-name="五十铃"><em>W</em>五十铃</li>
                                                <li data-id="770" data-name="五菱"><em>W</em>五菱</li>
                                                <li data-id="769" data-name="沃尔沃"><em>W</em>沃尔沃</li>
                                                <li data-id="768" data-name="威旺"><em>W</em>威旺</li>
                                                <li data-id="767" data-name="威麟"><em>W</em>威麟</li>
                                                <li data-id="482" data-name="沃宝"><em>W</em>沃宝</li>
                                                <li data-id="483" data-name="万里路"><em>W</em>万里路</li>
                                                <li data-id="484" data-name="瓦德"><em>W</em>瓦德</li>
                                                <li data-id="486" data-name="沃森"><em>W</em>沃森</li>
                                                <li data-id="485" data-name="WD-40"><em>W</em>WD-40</li>
                                                <li data-id="766" data-name="万丰"><em>W</em>万丰</li>
                                                <li data-id="477" data-name="湘火炬"><em>X</em>湘火炬</li>
                                                <li data-id="479" data-name="信义"><em>X</em>信义</li>
                                                <li data-id="480" data-name="淅川"><em>X</em>淅川</li>
                                                <li data-id="772" data-name="西雅特"><em>X</em>西雅特</li>
                                                <li data-id="778" data-name="雪铁龙"><em>X</em>雪铁龙</li>
                                                <li data-id="777" data-name="雪佛兰"><em>X</em>雪佛兰</li>
                                                <li data-id="776" data-name="新雅途"><em>X</em>新雅途</li>
                                                <li data-id="775" data-name="新凯"><em>X</em>新凯</li>
                                                <li data-id="774" data-name="现代"><em>X</em>现代</li>
                                                <li data-id="773" data-name="夏利"><em>X</em>夏利</li>
                                                <li data-id="478" data-name="新日石"><em>X</em>新日石</li>
                                                <li data-id="794" data-name="英致"><em>Y</em>英致</li>
                                                <li data-id="476" data-name="YOP"><em>Y</em>YOP</li>
                                                <li data-id="475" data-name="裕江"><em>Y</em>裕江</li>
                                                <li data-id="780" data-name="野马"><em>Y</em>野马</li>
                                                <li data-id="784" data-name="永源"><em>Y</em>永源</li>
                                                <li data-id="779" data-name="扬子"><em>Y</em>扬子</li>
                                                <li data-id="781" data-name="一汽"><em>Y</em>一汽</li>
                                                <li data-id="805" data-name="鹰标2"><em>Y</em>鹰标2</li>
                                                <li data-id="785" data-name="云雀"><em>Y</em>云雀</li>
                                                <li data-id="782" data-name="依维柯"><em>Y</em>依维柯</li>
                                                <li data-id="783" data-name="英菲尼迪"><em>Y</em>英菲尼迪</li>
                                                <li data-id="474" data-name="ZF"><em>Z</em>ZF</li>
                                                <li data-id="790" data-name="众泰"><em>Z</em>众泰</li>
                                                <li data-id="787" data-name="中欧"><em>Z</em>中欧</li>
                                                <li data-id="788" data-name="中顺"><em>Z</em>中顺</li>
                                                <li data-id="789" data-name="中兴"><em>Z</em>中兴</li>
                                                <li data-id="786" data-name="中华"><em>Z</em>中华</li>
                                            </ul>
                                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 220px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 0px; display: none;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                                        <div class="no-result" nctype="noBrandList" style="display: none;">
                                            没有符合"<strong>搜索关键字</strong>"条件的品牌<br>
                                            <a class="ncsc-btn-mini" nctype="manual_input_brand" href="javascript:void(0);" data-name="">仍然选择</a>
                                        </div>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt><i class="required">*</i>型号：</dt>
                            <dd>
                                <input name="g_spec_type" type="text" class="text w100" value="">
                                <span></span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>规格：</dt>
                            <dd>
                                <input name="g_pack_spec" type="text" class="text w100" value="">
                                <span></span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>原厂编码（OEM号）：</dt>
                            <dd>			            					<input name="g_oem[]" type="text" class="text w200" maxlength="30" value="">
                                <input name="g_oem[]" type="text" class="text w200" maxlength="30" value="">
                                <input name="g_oem[]" type="text" class="text w200" maxlength="30" value="">
                            </dd>
                        </dl>
                        <dl>
                            <dt>生产厂家：</dt>
                            <dd>
                                <input name="g_manufacturer" type="text" class="text w100" value="">
                                <span></span>
                            </dd>
                        </dl>
                        <dl>
                            <dt><i class="required">*</i>单位：</dt>
                            <dd>
                                <input name="g_unit" type="text" class="text w100" value=""><span></span>
                                <p class="hint">单位如：个、瓶、包等等</p>
                            </dd>
                        </dl>
                        <dl>
                            <dt nc_type="no_spec">
                                <i class="required">*</i>商品价格：</dt>
                            <dd nc_type="no_spec">
                                <input name="g_price" value="" type="text" class="text w60"><em class="add-on"><i class="icon-renminbi"></i></em>
                                <span></span>
                                <p class="hint">价格必须是0.01~9999999之间的数字，且不能高于市场价。<br>
                                    此价格为商品实际销售价格，如果商品存在规格，该价格显示最低价格。
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt nc_type="no_spec">
                                <i class="required">*</i>商品库存：</dt>
                            <dd nc_type="no_spec">
                                <input name="g_storage" value="" type="text" class="text w60"> <span></span>
                                <p class="hint">商铺库存数量必须为0~999999999之间的整数<br>若启用了库存配置，则系统自动计算商品的总数，此处无需卖家填写</p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>商品图片：</dt>
                            <dd>
                                <div class="ncsc-form-goods-pic" style="min-height:255px;">
                                    <div class="container">
                                        <div class="ncsc-goodspic-list" style="opacity: 1;">
                                            <ul nctype="ul0">
                                                <li class="ncsc-goodspic-upload" id="ncsc-goodspic-upload_00">
                                                    <!--                            <div class="upload-thumb"><img src="--><!--" nctype="file_--><!--">-->
                                                    <div class="upload-thumb"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" nctype="file_00">
                                                        <input type="hidden" name="img[0][0][name]" value="" nctype="file_00">
                                                    </div>
                                                    <div class="show-default" nctype="file_00">
                                                        <p><i class="icon-ok-circle"></i>默认主图
                                                            <input type="hidden" name="img[0][0][default]" value="0">
                                                        </p><a href="javascript:void(0)" nctype="del" class="del" title="移除">X</a>
                                                    </div>
                                                    <div class="show-sort">排序：<input name="img[0][0][sort]" type="text" class="text" value="0" size="1" maxlength="1">
                                                    </div>
                                                    <div class="ncsc-upload-btn" id="add_album_container"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="file_00" id="file_00" style="position: relative; z-index: 1;"></span><p><i class="icon-upload-alt"></i>上传</p>
                                                        </a><div id="html5_1dn481rr1l7v1snvnt01jqo15tc3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 1774px; left: 719px; width: 80px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1dn481rr1l7v1snvnt01jqo15tc3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></div>

                                                    <div id="html5_1dn481rrkm091o9s1lpk16qd1sjm6_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 144px; left: 70px; width: 60px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1dn481rrkm091o9s1lpk16qd1sjm6" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></li>
                                                <li class="ncsc-goodspic-upload" id="ncsc-goodspic-upload_01">
                                                    <!--                            <div class="upload-thumb"><img src="--><!--" nctype="file_--><!--">-->
                                                    <div class="upload-thumb"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" nctype="file_01">
                                                        <input type="hidden" name="img[0][1][name]" value="" nctype="file_01">
                                                    </div>
                                                    <div class="show-default" nctype="file_01">
                                                        <p><i class="icon-ok-circle"></i>默认主图
                                                            <input type="hidden" name="img[0][1][default]" value="0">
                                                        </p><a href="javascript:void(0)" nctype="del" class="del" title="移除">X</a>
                                                    </div>
                                                    <div class="show-sort">排序：<input name="img[0][1][sort]" type="text" class="text" value="0" size="1" maxlength="1">
                                                    </div>
                                                    <div class="ncsc-upload-btn" id="add_album_container"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="file_01" id="file_01" style="position: relative; z-index: 1;"></span><p><i class="icon-upload-alt"></i>上传</p>
                                                        </a></div>

                                                    <div id="html5_1dn481rrl2efqo1nbo11sa29h9_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 144px; left: 70px; width: 60px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1dn481rrl2efqo1nbo11sa29h9" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></li>
                                                <li class="ncsc-goodspic-upload" id="ncsc-goodspic-upload_02">
                                                    <!--                            <div class="upload-thumb"><img src="--><!--" nctype="file_--><!--">-->
                                                    <div class="upload-thumb"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" nctype="file_02">
                                                        <input type="hidden" name="img[0][2][name]" value="" nctype="file_02">
                                                    </div>
                                                    <div class="show-default" nctype="file_02">
                                                        <p><i class="icon-ok-circle"></i>默认主图
                                                            <input type="hidden" name="img[0][2][default]" value="0">
                                                        </p><a href="javascript:void(0)" nctype="del" class="del" title="移除">X</a>
                                                    </div>
                                                    <div class="show-sort">排序：<input name="img[0][2][sort]" type="text" class="text" value="0" size="1" maxlength="1">
                                                    </div>
                                                    <div class="ncsc-upload-btn" id="add_album_container"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="file_02" id="file_02" style="position: relative; z-index: 1;"></span><p><i class="icon-upload-alt"></i>上传</p>
                                                        </a></div>

                                                    <div id="html5_1dn481rrntgu3hvrbr1jmr1e6sc_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 144px; left: 70px; width: 60px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1dn481rrntgu3hvrbr1jmr1e6sc" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></li>
                                                <li class="ncsc-goodspic-upload" id="ncsc-goodspic-upload_03">
                                                    <!--                            <div class="upload-thumb"><img src="--><!--" nctype="file_--><!--">-->
                                                    <div class="upload-thumb"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" nctype="file_03">
                                                        <input type="hidden" name="img[0][3][name]" value="" nctype="file_03">
                                                    </div>
                                                    <div class="show-default" nctype="file_03">
                                                        <p><i class="icon-ok-circle"></i>默认主图
                                                            <input type="hidden" name="img[0][3][default]" value="0">
                                                        </p><a href="javascript:void(0)" nctype="del" class="del" title="移除">X</a>
                                                    </div>
                                                    <div class="show-sort">排序：<input name="img[0][3][sort]" type="text" class="text" value="0" size="1" maxlength="1">
                                                    </div>
                                                    <div class="ncsc-upload-btn" id="add_album_container"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="file_03" id="file_03" style="position: relative; z-index: 1;"></span><p><i class="icon-upload-alt"></i>上传</p>
                                                        </a></div>

                                                    <div id="html5_1dn481rro51nufd1ngcf43ukaf_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 144px; left: 70px; width: 60px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1dn481rro51nufd1ngcf43ukaf" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></li>
                                                <li class="ncsc-goodspic-upload" id="ncsc-goodspic-upload_04">
                                                    <!--                            <div class="upload-thumb"><img src="--><!--" nctype="file_--><!--">-->
                                                    <div class="upload-thumb"><img src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg" nctype="file_04">
                                                        <input type="hidden" name="img[0][4][name]" value="" nctype="file_04">
                                                    </div>
                                                    <div class="show-default" nctype="file_04">
                                                        <p><i class="icon-ok-circle"></i>默认主图
                                                            <input type="hidden" name="img[0][4][default]" value="0">
                                                        </p><a href="javascript:void(0)" nctype="del" class="del" title="移除">X</a>
                                                    </div>
                                                    <div class="show-sort">排序：<input name="img[0][4][sort]" type="text" class="text" value="0" size="1" maxlength="1">
                                                    </div>
                                                    <div class="ncsc-upload-btn" id="add_album_container"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="file_04" id="file_04" style="position: relative; z-index: 1;"></span><p><i class="icon-upload-alt"></i>上传</p>
                                                        </a></div>

                                                    <div id="html5_1dn481rrpnkt1pn015e518csptai_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 144px; left: 70px; width: 60px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1dn481rrpnkt1pn015e518csptai" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></li>
                                            </ul>
                                            <div class="ncsc-select-album">
                                                <a class="ncsc-btn" href="index.php?act=store_album&amp;op=pic_list&amp;item=goods_image&amp;color_id=0" nctype="select-0"><i class="icon-picture"></i>从图片空间选择</a>
                                                <a href="javascript:void(0);" nctype="close_album" class="ncsc-btn ml5" style="display: none;"><i class=" icon-circle-arrow-up"></i>关闭相册</a>
                                                <input type="hidden" name="image_path" id="image_path" nctype="goods_image" value=""><span></span>
                                            </div>
                                            <div nctype="album-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </dd>
                        </dl>










                        <dl>
                            <dt>商品描述：</dt>
                            <dd id="ncProductDetails">
                                <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" jquery1239647486215="2">
                                        <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#panel-1" jquery1239647486215="8"><i class="icon-desktop"></i> 电脑端</a></li>
                                        <li class="selected ui-state-default ui-corner-top"><a href="#panel-2" jquery1239647486215="9"><i class="icon-mobile-phone"></i>手机端</a></li>
                                    </ul>
                                    <div id="panel-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" jquery1239647486215="4">
                                        <div class="ke-container ke-container-default" style="width: 100%;"><div style="display:block;" class="ke-toolbar" unselectable="on"><span class="ke-outline" data-name="source" title="HTML代码" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-source" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="fullscreen" title="全屏显示" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-fullscreen" unselectable="on"></span></span><span class="ke-outline" data-name="undo" title="后退(Ctrl+Z)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-undo" unselectable="on"></span></span><span class="ke-outline" data-name="redo" title="前进(Ctrl+Y)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-redo" unselectable="on"></span></span><span class="ke-outline" data-name="print" title="打印(Ctrl+P)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-print" unselectable="on"></span></span><span class="ke-outline" data-name="cut" title="剪切(Ctrl+X)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-cut" unselectable="on"></span></span><span class="ke-outline" data-name="copy" title="复制(Ctrl+C)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-copy" unselectable="on"></span></span><span class="ke-outline" data-name="paste" title="粘贴(Ctrl+V)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-paste" unselectable="on"></span></span><span class="ke-outline" data-name="plainpaste" title="粘贴为无格式文本" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-plainpaste" unselectable="on"></span></span><span class="ke-outline" data-name="wordpaste" title="从Word粘贴" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-wordpaste" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="justifyleft" title="左对齐" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifyleft" unselectable="on"></span></span><span class="ke-outline" data-name="justifycenter" title="居中" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifycenter" unselectable="on"></span></span><span class="ke-outline" data-name="justifyright" title="右对齐" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifyright" unselectable="on"></span></span><span class="ke-outline" data-name="justifyfull" title="两端对齐" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifyfull" unselectable="on"></span></span><span class="ke-outline" data-name="insertorderedlist" title="编号" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-insertorderedlist" unselectable="on"></span></span><span class="ke-outline" data-name="insertunorderedlist" title="项目符号" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-insertunorderedlist" unselectable="on"></span></span><span class="ke-outline" data-name="indent" title="增加缩进" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-indent" unselectable="on"></span></span><span class="ke-outline" data-name="outdent" title="减少缩进" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-outdent" unselectable="on"></span></span><span class="ke-outline" data-name="subscript" title="下标" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-subscript" unselectable="on"></span></span><span class="ke-outline" data-name="superscript" title="上标" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-superscript" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="selectall" title="全选(Ctrl+A)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-selectall" unselectable="on"></span></span><span class="ke-outline" data-name="clearhtml" title="清理HTML代码" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-clearhtml" unselectable="on"></span></span><span class="ke-outline" data-name="quickformat" title="一键排版" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-quickformat" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="formatblock" title="段落" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-formatblock" unselectable="on"></span></span><span class="ke-outline" data-name="fontname" title="字体" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-fontname" unselectable="on"></span></span><span class="ke-outline" data-name="fontsize" title="文字大小" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-fontsize" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="forecolor" title="文字颜色" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-forecolor" unselectable="on"></span></span><span class="ke-outline" data-name="hilitecolor" title="文字背景" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-hilitecolor" unselectable="on"></span></span><span class="ke-outline" data-name="bold" title="粗体(Ctrl+B)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-bold" unselectable="on"></span></span><span class="ke-outline" data-name="italic" title="斜体(Ctrl+I)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-italic" unselectable="on"></span></span><span class="ke-outline" data-name="underline" title="下划线(Ctrl+U)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-underline" unselectable="on"></span></span><span class="ke-outline" data-name="strikethrough" title="删除线" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-strikethrough" unselectable="on"></span></span><span class="ke-outline" data-name="lineheight" title="行距" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-lineheight" unselectable="on"></span></span><span class="ke-outline" data-name="removeformat" title="删除格式" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-removeformat" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="image" title="图片" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-image" unselectable="on"></span></span><span class="ke-outline" data-name="flash" title="Flash" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-flash" unselectable="on"></span></span><span class="ke-outline" data-name="media" title="视音频" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-media" unselectable="on"></span></span><span class="ke-outline" data-name="table" title="表格" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-table" unselectable="on"></span></span><span class="ke-outline" data-name="hr" title="插入横线" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-hr" unselectable="on"></span></span><span class="ke-outline" data-name="emoticons" title="插入表情" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-emoticons" unselectable="on"></span></span><span class="ke-outline" data-name="link" title="超级链接" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-link" unselectable="on"></span></span><span class="ke-outline" data-name="unlink" title="取消超级链接" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-unlink" unselectable="on"></span></span><span class="ke-inline-block ke-separator"></span><span class="ke-outline" data-name="about" title="关于" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-about" unselectable="on"></span></span></div><div style="display: block; height: 419px;" class="ke-edit"><iframe class="ke-edit-iframe" hidefocus="true" frameborder="0" style="width: 100%; height: 419px;"></iframe><textarea class="ke-edit-textarea" hidefocus="true" style="width: 100%; height: 419px; display: none;"></textarea></div><div class="ke-statusbar"><span class="ke-inline-block ke-statusbar-center-icon"></span><span class="ke-inline-block ke-statusbar-right-icon"></span></div></div><textarea id="g_body" name="g_body" style="width: 100%; height: 480px; visibility: hidden; display: none;"></textarea>
                                        <script src="http://liubei.com/data/resource/kindeditor/kindeditor-min.js" charset="utf-8"></script>
                                        <script src="http://liubei.com/data/resource/kindeditor/lang/zh_CN.js" charset="utf-8"></script>
                                        <script>
                                            var KE;
                                            KindEditor.ready(function(K) {
                                                KE = K.create("textarea[name='g_body']", {
                                                    readonlyMode : false,
                                                    items : ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
                                                        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                                                        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                                                        'superscript', '|', 'selectall', 'clearhtml','quickformat','|',
                                                        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                                                        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'flash', 'media', 'table', 'hr', 'emoticons', 'link', 'unlink', '|', 'about'],
                                                    cssPath : "http://liubei.com/data/resource/kindeditor/themes/default/default.css",
                                                    allowImageUpload : false,
                                                    allowFlashUpload : false,
                                                    allowMediaUpload : false,
                                                    allowFileManager : false,
                                                    syncType:"form",
                                                    afterCreate : function() {
                                                        var self = this;
                                                        self.sync();
                                                    },
                                                    afterChange : function() {
                                                        var self = this;
                                                        self.sync();
                                                    },
                                                    afterBlur : function() {
                                                        var self = this;
                                                        self.sync();
                                                        if($(".verify_flag")){
                                                            $(".verify_flag").val(1);
                                                        }
                                                    }
                                                });
                                                KE.appendHtml = function(id,val) {
                                                    this.html(this.html() + val);
                                                    if (this.isCreated) {
                                                        var cmd = this.cmd;
                                                        cmd.range.selectNodeContents(cmd.doc.body).collapse(false);
                                                        cmd.select();
                                                    }
                                                    return this;
                                                }
                                            });
                                        </script>
                                        <div class="hr8">
                                            <div class="ncsc-upload-btn">
                                                <a href="javascript:void(0);"><span> <input type="file" hidefocus="true" size="1" class="input-file" name="add_album" id="add_album" multiple="multiple" style="position: relative; z-index: 1;">
									</span>
                                                    <p>
                                                        <i class="icon-upload-alt" data_type="0" nctype="add_album_i"></i>图片上传
                                                    </p> </a>
                                            </div>
                                            <a class="ncsc-btn mt5" nctype="show_desc" href="index.php?act=store_album&amp;op=pic_list&amp;item=des"><i class="icon-picture"></i>插入相册图片</a>
                                            <a href="javascript:void(0);" nctype="del_desc" class="ncsc-btn mt5" style="display: none;"><i class=" icon-circle-arrow-up"></i>关闭相册</a>
                                        </div>
                                        <p id="des_demo"></p>
                                    </div>
                                    <div id="panel-2" class="ui-tabs-panel ui-tabs-hide ui-widget-content ui-corner-bottom" jquery1239647486215="5">
                                        <div class="ncsc-mobile-editor">
                                            <div class="pannel">
                                                <div class="size-tip">
										<span nctype="img_count_tip">图片总数得超过<em>20</em>张
										</span><i>|</i><span nctype="txt_count_tip">文字不得超过<em>5000</em>字
										</span>
                                                </div>
                                                <div class="control-panel" nctype="mobile_pannel">
                                                </div>
                                                <div class="add-btn">
                                                    <ul class="btn-wrap">
                                                        <li><a href="javascript:void(0);" nctype="mb_add_img"><i class="icon-picture"></i>
                                                                <p>图片</p> </a></li>
                                                        <li><a href="javascript:void(0);" nctype="mb_add_txt"><i class="icon-font"></i>
                                                                <p>文字</p> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="explain">
                                                <dl>
                                                    <dt>1、基本要求：</dt>
                                                    <dd>（1）手机详情总体大小：图片+文字，图片不超过20张，文字不超过5000字；</dd>
                                                    <dd>建议：所有图片都是本宝贝相关的图片。</dd>
                                                </dl>
                                                <dl>
                                                    <dt>2、图片大小要求：</dt>
                                                    <dd>（1）建议使用宽度480 ~ 620像素、高度小于等于960像素的图片；</dd>
                                                    <dd>（2）格式为：JPG\JEPG\GIF\PNG；</dd>
                                                    <dd>举例：可以上传一张宽度为480，高度为960像素，格式为JPG的图片。</dd>
                                                </dl>
                                                <dl>
                                                    <dt>3、文字要求：</dt>
                                                    <dd>（1）每次插入文字不能超过500个字，标点、特殊字符按照一个字计算；</dd>
                                                    <dd>建议：不要添加太多的文字，这样看起来更清晰。</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="ncsc-mobile-edit-area" nctype="mobile_editor_area">
                                            <div nctype="mea_img" class="ncsc-mea-img" style="display: none;"></div>
                                            <div class="ncsc-mea-text" nctype="mea_txt" style="display: none;">
                                                <p id="meat_content_count" class="text-tip"></p>
                                                <textarea class="textarea valid" nctype="meat_content"></textarea>
                                                <div class="button">
                                                    <a class="ncsc-btn ncsc-btn-blue" nctype="meat_submit" href="javascript:void(0);">确认</a><a class="ncsc-btn ml10" nctype="meat_cancel" href="javascript:void(0);">取消</a>
                                                </div>
                                                <a class="text-close" nctype="meat_cancel" href="javascript:void(0);">X</a>
                                            </div>
                                        </div>
                                        <input name="m_body" autocomplete="off" type="hidden" value="">
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        <!-- 旗舰店才可配置本店分类 -->
                        <dl>
                            <dt>本店分类：</dt>
                            <dd>
					<span class="new_add"><a href="javascript:void(0)" id="add_sgcategory" class="ncsc-btn">新增分类</a>
					</span>
                                <select name="sgcate_id[]" class="sgcategory">
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
                                </select>
                                <p class="hint">商品可以从属于店铺的多个分类之下，店铺分类可以由 "商家中心 -&gt; 店铺 -&gt; 店铺分类" 中自定义</p>
                            </dd>
                        </dl>
                        <!--推荐商品 bagin-->
                        <dl>
                            <dt>商品推荐：</dt>
                            <dd>
                                <ul class="ncsc-form-radio-list">
                                    <li><label> <input name="g_commend" value="1" checked="checked" type="radio">
                                            是</label></li>
                                    <li><label> <input name="g_commend" value="0" type="radio">
                                            否</label></li>
                                </ul>
                                <p class="hint">被推荐的商品会显示在店铺首页</p>
                            </dd>
                        </dl>
                        <!--推荐商品 end-->
                        <dl>
                            <dt>商品卖点：</dt>
                            <dd>
                                <textarea name="g_jingle" class="textarea h60 w400"></textarea>
                                <span></span>
                                <p class="hint">商品卖点最长不能超过140个汉字</p>
                            </dd>
                        </dl>

                        <!-- diyfield start-->

                        <div id="InputsWrapper">
                            <dl>
                                <dt>
                                    <input type="text" name="diyField[1][key]" value="" class="diyFieldKey text w100">
                                </dt>
                                <dd>
                                    <input type="text" name="diyField[1][value]" value="" class="diyFieldValue text w200"> <a href="#" class="removeclass">×</a>
                                </dd>
                            </dl>
                        </div>
                        <!-- diyfield end-->
                        <dl>
                            <dt></dt>
                            <dd>
                                <a href="javascript:void(0);" class="ncsc-btn" id="AddMoreFileBox"><i class="icon-plus"></i>添加自定义商品属性</a>
                            </dd>
                        </dl>
                    </div>
                    <div class="bottom tc hr32">
                        <label class="submit-border"> <input type="submit" class="submit" value="下一步，选择车型">
                        </label>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/ajaxfileupload/ajaxfileupload.js" charset="utf-8"></script>
            <script src="http://liubei.com/data/resource/js/jquery.ajaxContent.pack.js" type="text/javascript"></script>
            <script type="text/javascript" src="http://liubei.com/mall/resource/js/store_goods_add.step3.js" charset="utf-8"></script>
            <script type="text/javascript">
                var SITEURL = "http://liubei.com/mall";
                var DEFAULT_GOODS_IMAGE = "http://liubei-dev.img-cn-hangzhou.aliyuncs.com/default.jpg";
                var SHOP_RESOURCE_SITE_URL = "http://liubei.com/mall/resource";

                $(function(){
                    $('a[nctype="select-0"]').ajaxContent({
                        event:'click', //mouseover
                        loaderType:"img",
                        loadingMsg:SHOP_TEMPLATES_URL+"/images/loading.gif",
                        target:'div[nctype="album-0"]'
                    }).click(function(){
                        $(this).hide();
                        $(this).next().show();
                    });

                    //电脑端手机端tab切换
                    $(".tabs").tabs();

                    $('#goods_form').validate({
                        errorPlacement: function(error, element){
                            if($(element).attr('name')=='b_name'){
                                $(element).parent().parent().parent().append(error);
                            }else{
                                $(element).nextAll('span').append(error);
                            }
                        },
                        rules : {
                            g_name : {
                                required    : true,
                                minlength   : 3,
                                maxlength   : 50
                            },
                            b_name : {
                                required    : true,
                                minlength   : 1,
                                maxlength   : 50
                            },
                            g_unit : {
                                required    : true,
                                minlength   : 1,
                                maxlength   : 50
                            },
                            g_spec_type : {
                                required    : true,
                                minlength   : 1,
                                maxlength   : 50
                            },
                            g_jingle : {
                                maxlength   : 140
                            },
                            g_price : {
                                required    : true,
                                number      : true,
                                min         : 0.01,
                                max         : 9999999
                            },
                            g_storage  : {
                                required    : true,
                                digits      : true,
                                min         : 0,
                                max         : 999999999
                            },
                            g_alias1  : {
                                maxlength   : 50
                            },
                            g_alias2  : {
                                maxlength   : 50
                            },
                            g_alias3  : {
                                maxlength   : 50
                            },
                            g_pack_spec  : {
                                maxlength   : 100
                            },
                            g_manufacturer  : {
                                maxlength   : 100
                            },
                            image_path : {
//                 required    : true
                            }
                        },
                        messages : {
                            g_name  : {
                                required    : '<i class="icon-exclamation-sign"></i>商品名称不能为空',
                                minlength   : '<i class="icon-exclamation-sign"></i>商品标题名称长度至少3个字符，最长50个汉字',
                                maxlength   : '<i class="icon-exclamation-sign"></i>商品标题名称长度至少3个字符，最长50个汉字'
                            },
                            b_name  : {
                                required    : '<i class="icon-exclamation-sign"></i>商品品牌不能为空',
                                minlength   : '<i class="icon-exclamation-sign"></i>商品品牌长度至少1个字符，最长50个汉字',
                                maxlength   : '<i class="icon-exclamation-sign"></i>商品品牌长度至少1个字符，最长50个汉字'
                            },
                            g_unit  : {
                                required    : '<i class="icon-exclamation-sign"></i>商品单位不能为空',
                                minlength   : '<i class="icon-exclamation-sign"></i>商品单位长度至少1个字符，最长50个汉字',
                                maxlength   : '<i class="icon-exclamation-sign"></i>商品单位长度至少1个字符，最长50个汉字'
                            },
                            g_spec_type  : {
                                required    : '<i class="icon-exclamation-sign"></i>商品型号不能为空',
                                minlength   : '<i class="icon-exclamation-sign"></i>商品型号长度至少1个字符，最长50个汉字',
                                maxlength   : '<i class="icon-exclamation-sign"></i>商品型号长度至少1个字符，最长50个汉字'
                            },
                            g_jingle : {
                                maxlength   : '<i class="icon-exclamation-sign"></i>商品卖点不能超过140个字符'
                            },
                            g_price : {
                                required    : '<i class="icon-exclamation-sign"></i>商品价格不能为空',
                                number      : '<i class="icon-exclamation-sign"></i>商品价格只能是数字',
                                min         : '<i class="icon-exclamation-sign"></i>商品价格必须是0.01~9999999之间的数字',
                                max         : '<i class="icon-exclamation-sign"></i>商品价格必须是0.01~9999999之间的数字'
                            },
                            g_storage : {
                                required    : '<i class="icon-exclamation-sign"></i>商品库存不能为空',
                                digits      : '<i class="icon-exclamation-sign"></i>库存只能填写数字',
                                min         : '<i class="icon-exclamation-sign"></i>商铺库存数量必须为0~999999999之间的整数',
                                max         : '<i class="icon-exclamation-sign"></i>商铺库存数量必须为0~999999999之间的整数'
                            },
                            g_alias1  : {
                                maxlength   : '<i class="icon-exclamation-sign"></i>别名长度最长50个字符'
                            },
                            g_alias2  : {
                                maxlength   : '<i class="icon-exclamation-sign"></i>别名长度最长50个字符'
                            },
                            g_alias3  : {
                                maxlength   : '<i class="icon-exclamation-sign"></i>别名长度最长50个字符'
                            },
                            g_pack_spec  : {
                                maxlength   : '<i class="icon-exclamation-sign"></i>规格长度最长100个字符'
                            },
                            g_manufacturer  : {
                                maxlength   : '<i class="icon-exclamation-sign"></i>生产厂家长度最长100个字符'
                            },
                            image_path : {
//                 required    : '<i class="icon-exclamation-sign"></i>请上传图片并设置商品主图'
                            }
                        }
                    });
                });

                $(function(){
                    // 提交后不没有填写的价格或库存的库存配置设为默认价格和0
                    // 库存配置隐藏式 里面的input加上disable属性
                    $('input[type="submit"]').click(function(){
                        $('input[data_type="price"]').each(function(){
                            if($(this).val() == ''){
                                $(this).val($('input[name="g_price"]').val());
                            }
                        });
                        $('input[data_type="stock"]').each(function(){
                            if($(this).val() == ''){
                                $(this).val('0');
                            }
                        });
                        $('input[data_type="alarm"]').each(function(){
                            if($(this).val() == ''){
                                $(this).val('0');
                            }
                        });
                    });

                });
            </script>
            <script src="http://liubei.com/mall/resource/js/scrolld.js"></script>
            <script type="text/javascript">$("[id*='Btn']").stop(true).on('click', function (e) {e.preventDefault();$(this).scrolld();})</script>
        </div>
    </div>
@endsection