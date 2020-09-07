@extends('home.layout.base')
@section('style')
    <style>
        /*下拉菜单样式*/
        #region_xlc select, #region_jxs select, #region_ppcj select {
            display: block;
            margin-bottom: 3px;
            width: 278px;
        }

        /*验证错误提示样式*/
        .errorMessage {
            clear: both;
            line-height: 22px;
            color: #bb2b2f;
            margin-bottom: 10px;
            padding-left: 230px;
        }

        /*验证错误提示样式*/
        p.warning-validate {
            line-height: 22px;
            color: #bb2b2f;
            margin-bottom: 10px;
            padding-left: 230px;
        }
        .previewImg{
            height:100px;background: #F9F9F9;
            text-align: center;line-height:100px;width:100px;
        }
    </style>
    <link href="{{asset('common/webuploader/webuploader.css')}}" type="text/css" rel="stylesheet"/>
@endsection

@section('body')
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="subNav">
    <div class="subNavList">
        <div class="ins-nav">
            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('/home/images/logo.png')}}" alt=""></a></div>
            <div class="menu">
                <ul>
                    <li><a href="{{url('/')}}">首页</a></li>
                    <li><a href="{{url('/mall')}}">刘备商城</a></li>
                    <li><a href="{{url('/joinAdvantage')}}">招商专区</a></li>
                    <li><a href="{{url('/contact')}}">联系我们</a></li>
                    <li><a href="{{url('/news')}}">产业资讯</a></li>
                    <li class="J_mobile" style="position: relative;"><span class="icon icon-mobile"></span><a href="{{url('/mobileClient')}}" style="float:left;">手机客户端</a>
                        <div class="float-window">
                            <div class="content-qrcode">
                                <div class="header-qrcode">
                                    <p>扫一扫下载客户端</p>
                                    <p>最新资讯一手掌握</p>
                                </div>
                                <div class="body-qrcode">
                                    <img src="{{asset('/home/images/mobile_code.png')}}" width="120" height="118">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>    </div>
</div>
<div class="tab">
    <div class="tabLists fix" style="margin-bottom:60px;">
        <div class="tabULs fix">
            <ul class="inlineBlock inline">
                <li class="act" id="act_1"><a>修车厂</a></li>
                <li class="" id="act_2"><a>经销商户</a></li>
                <li class="" id="act_3"><a>品牌商家</a></li>
            </ul>
        </div>
        <div class="tabContets" id="tab_1" style="display: block;">
            <div class="tabbox">
                <form id="xlcRegisterForm" action="{{url('/saveFactory')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input name="member_type" id="member_type" type="hidden" value="1"/>
                    <input name="is_perfect" id="is_perfect" type="hidden" value="{{old('is_perfect',0)}}"/>
                    <div class="form-register">
                        <div class="form-reg-header">
                            <div class="form-reg-title">用户注册</div>
                            <div class="form-reg-loginbtn">已有账号？马上<a class="btn-returnlogin" href="{{url('/')}}">登录</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>手机号码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="mobile" id="xlc_mobile" value="{{old('mobile')}}">
                            </div>
                            <div class="errorMessage" id="xlc_mobile_error">{{$errors->first('mobile')}}</div>
                        </div>

                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>密码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="password" class="form-input-text" name="password" value="">
                            </div>
                            <div class="errorMessage">{{$errors->first('password')}}</div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>确认密码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="password" class="form-input-text" name="password_confirmation" value="">
                            </div>
                            <div class="errorMessage"></div>
                        </div>

                        <div @if(!old('is_perfect')) style="display:none;" @endif id="perfect_div">
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>修理厂名称:</label>
                                </div>
                                <div class="form-group-content">
                                    <input type="text" class="form-input-text" value="" name="company_name" id="xlc_company_name"/>
                                </div>
                                <div class="errorMessage" id="xlc_company_name_error">{{$errors->first('company_name')}}</div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>所在地区:</label>
                                </div>
                                <div class="form-group-content" id="region_xlc">
                                    <input id="s_1" class="company_province_id" name="company_province_id" type="hidden"
                                           value=""/>
                                    <input id="s_2" class="company_city_id" name="company_city_id" type="hidden" value="">
                                    <input id="s_3" class="company_area_id" name="company_area_id" type="hidden"
                                           value="">
                                    <input id="s_4" class="area_valid_id area_ids lastnodearea" name="area_valid_id"
                                           type="hidden"
                                           value=""/>
                                    <input type="hidden" value="" name="company_address" id="company_address"
                                           class="area_names"/>
                                    <select></select>
                                </div>
                                <div class="errorMessage">{{$errors->first('company_address')}}</div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>联系人:</label>
                                </div>
                                <div class="form-group-content">
                                    <input type="text" class="form-input-text" name="contacts_name" id="contacts_name_xlc"/>
                                </div>
                                <div class="errorMessage">{{$errors->first('contacts_name')}}</div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>邮箱:</label>
                                </div>
                                <div class="form-group-content">
                                    <input type="text" class="form-input-text" name="email" id="xlc_email"/>
                                </div>
                                <div class="errorMessage" id="xlc_email_error">{{$errors->first('email')}}</div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>通讯地址:</label>
                                </div>
                                <div class="form-group-content">
                                    <input type="text" class="form-input-text" name="address_detail" id="address_detail_xlc"/>
                                </div>
                                <div class="errorMessage">{{$errors->first('address_detail')}}</div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label>推荐码:</label>
                                </div>
                                <div class="form-group-content">
                                    <input type="text" class="form-input-text" name="invitation_code_xlc" id="invitation_code_xlc"/>
                                </div>
                                <div class="errorMessage">{{$errors->first('invitation_code_xlc')}}</div>
                            </div>
                            <div class="form-group">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>门头照:</label>
                                </div>
                                <div class="form-group-content">
                                    <a id="xcc_company_cover_pick"  href="javascript:void(0);">浏览…</a>

                                    <input type="hidden" name="company_cover" id="xcc_company_cover_value" value="{{old('company_cover')}}">
                                    @if(old('company_cover'))
                                        <div class="previewImg" id="xcc_company_cover_img">
                                            <img src="{{old('company_cover')}}" style="width:100px;height:100px;">
                                        </div>
                                    @else
                                        <div class="previewImg" id="xcc_company_cover_img" style="display: none">图片预览</div>
                                    @endif
                                </div>
                                <div class="errorMessage" id="xcc_company_cover_error">{{$errors->first('company_cover')}}</div>
                            </div>
                            <div class="form-group" style="min-height:64px;">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>法人身份证正面:</label>
                                </div>
                                <div class="form-group-content">
                                    <a id="xcc_business_legal_card_front_pick"  href="javascript:void(0);">浏览…</a>

                                    <input type="hidden" name="business_legal_card_front" id="xcc_business_legal_card_front_value" value="{{old('company_cover')}}">
                                    @if(old('company_cover'))
                                        <div class="previewImg" id="xcc_business_legal_card_front_img">
                                            <img src="{{old('company_cover')}}" style="width:100px;height:100px;">
                                        </div>
                                    @else
                                        <div class="previewImg" id="xcc_business_legal_card_front_img" style="display: none">图片预览</div>
                                    @endif

                                </div>
                                <div class="errorMessage" id="xcc_business_legal_card_front_error">{{$errors->first('business_legal_card_front')}}</div>
                            </div>
                            <div class="form-group" style="margin-bottom:5px;">
                                <div class="form-group-head">
                                    <label><span class="mark-must">*</span>营业执照照片:</label>
                                </div>
                                <div class="form-group-content">
                                    <a id="xcc_business_licence_number_electronic_pick"  href="javascript:void(0);">浏览…</a>

                                    <input type="hidden" name="business_licence_number_electronic" id="xcc_business_licence_number_electronic_value" value="{{old('company_cover')}}">
                                    @if(old('company_cover'))
                                        <div class="previewImg" id="xcc_business_licence_number_electronic_img">
                                            <img src="{{old('company_cover')}}" style="width:100px;height:100px;">
                                        </div>
                                    @else
                                        <div class="previewImg" id="xcc_business_licence_number_electronic_img" style="display: none">图片预览</div>
                                    @endif

                                </div>
                                <div class="errorMessage" id="xcc_business_licence_number_electronic_error">{{$errors->first('business_licence_number_electronic')}}</div>
                            </div>
                        </div>

                        <div style="display: inline-block;margin-left:157px;">
                            <span style="vertical-align: middle;">升级正式会员，享受更多优惠和功能。<a id="do_perfect" href="javascript:void(0);" style="color:red">立即完善V</a></span>
                        </div>

                        <div class="form-group form-group-reg">

                            <button type="submit" class="btn-postreg">立即注册</button>
                            <div style="display: inline-block;">
                                <input type="checkbox" id="factory_agree" name="factory_agree" @if(old('factory_agree')) checked="checked" @endif style="vertical-align: middle;margin-left: 20px">
                                <span style="vertical-align: middle;" class="agreement" type="xlc">我同意"刘备修车网"协议</span>
                            </div>
                            <div class="errorMessage" style="padding-left: 0px;display: inline-block;">{{$errors->first('factory_agree')}}</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tabContets" id="tab_2" style="display: none;">
            <div class="tabbox">
                <form id="jxsRegisterForm" action="{{url('/saveStore')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input name="member_type" id="member_type" type="hidden" value="2"/>
                    <div class="form-register">
                        <div class="form-reg-header">
                            <div class="form-reg-title">经销商注册</div>
                            <div class="form-reg-loginbtn">已有账号？马上<a class="btn-returnlogin" href="{{url('/')}}">登录</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>手机号码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="mobile" value="{{old('mobile')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('mobile')}}</div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<div class="form-group-head">--}}
                                {{--<label><span class="mark-must">*</span>验证码:</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-group-content">--}}
                                {{--<input type="text" class="form-input-text" style="width: 168px" name="verify" id="verify">--}}
                            {{--</div>--}}
                            {{--<div class="form-group-content">--}}
                                {{--<a id="get_verify" ref="contacts_phone2" class="selectfiles" style="padding: 4px 10px" href="javascript:void(0);">获取验证码</a>--}}
                            {{--</div>--}}
                            {{--<div class="errorMessage"></div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>密码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="password" class="form-input-text" name="password">
                            </div>
                            <div class="errorMessage">{{$errors->first('password')}}</div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>确认密码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="password" class="form-input-text" name="password_confirmation">
                            </div>
                            <div class="errorMessage"></div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>经销商名称:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="company_name" id="jxs_company_name" value="{{old('company_name')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('company_name')}}</div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>所在地区:</label>
                            </div>
                            <div class="form-group-content" id="region_jxs">
                                <input id="s_1" class="" name="company_province_id" type="hidden" value="">
                                <input id="s_2" class="" name="company_city_id" type="hidden" value="">
                                <input id="s_3" class="" name="company_area_id" type="hidden" value="">
                                <input id="s_4" class="" name="area_valid_id area_ids" type="hidden" value="">
                                <input type="hidden" value="" name="company_address" id="company_address" class="area_names">
                                <select>

                                </select>
                            </div>
                            <div class="errorMessage">{{$errors->first('company_province_id')}}{{$errors->first('company_city_id')}}{{$errors->first('company_area_id')}}</div>
                        </div>

                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>联系人:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="contacts_name" value="{{old('contacts_name')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('contacts_name')}}</div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>邮箱:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="email" value="{{old('email')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('email')}}</div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>通讯地址:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="address_detail" value="{{old('address_detail')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('address_detail')}}</div>
                        </div>
                        <div class="form-group">
                            <div class="form-group-head">
                                <label>推荐码:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="invitation_code" value="{{old('invitation_code')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('invitation_code')}}</div>
                        </div>

                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>营业执照号:</label>
                            </div>
                            <div class="form-group-content">
                                <input type="text" class="form-input-text" name="business_licence_number" value="{{old('business_licence_number')}}">
                            </div>
                            <div class="errorMessage">{{$errors->first('business_licence_number')}}</div>
                        </div>

                        <div class="form-group">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>门头照:</label>
                            </div>
                            <div class="form-group-content">
                                <a id="jxs_company_cover_pick"  href="javascript:void(0);">浏览…</a>

                                <input type="hidden" name="company_cover" id="jxs_company_cover_value" value="{{old('company_cover')}}">
                                @if(old('company_cover'))
                                    <div class="previewImg" id="jxs_company_cover_img">
                                        <img src="{{old('company_cover')}}" style="width:100px;height:100px;">
                                    </div>
                                @else
                                    <div class="previewImg" id="jxs_company_cover_img" style="display: none">图片预览</div>
                                @endif

                                <div class="errorMessage" id="jxs_company_cover_error">{{$errors->first('company_cover')}}</div>
                            </div>
                        </div>
                        <div class="form-group" style="min-height:64px;">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>法人身份证正面:</label>
                            </div>
                            <div class="form-group-content">
                                <a id="jxs_business_legal_card_front_pick"  href="javascript:void(0);">浏览…</a>

                                <input type="hidden" name="business_legal_card_front" id="jxs_business_legal_card_front_value" value="{{old('business_legal_card_front')}}">
                                @if(old('business_legal_card_front'))
                                    <div class="previewImg" id="jxs_business_legal_card_front_img">
                                        <img src="{{old('business_legal_card_front')}}" style="width:100px;height:100px;">
                                    </div>
                                @else
                                    <div class="previewImg" id="jxs_business_legal_card_front_img" style="display: none">图片预览</div>
                                @endif
                                <div class="errorMessage" id="jxs_business_legal_card_front_error">{{$errors->first('business_legal_card_front')}}</div>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom:5px;">
                            <div class="form-group-head">
                                <label><span class="mark-must">*</span>营业执照照片:</label>
                            </div>
                            <div class="form-group-content">
                                <a id="jxs_business_licence_number_electronic_pick"  href="javascript:void(0);" style="position: relative; z-index: 1;">浏览…</a>

                                <input type="hidden" value="{{old('business_licence_number_electronic')}}" name="business_licence_number_electronic" id="jxs_business_licence_number_electronic_value">
                                @if(old('business_licence_number_electronic'))
                                    <div class="previewImg" id="jxs_business_licence_number_electronic_img">
                                        <img src="{{old('business_licence_number_electronic')}}" style="width:100px;height:100px;">
                                    </div>
                                @else
                                    <div class="previewImg" id="jxs_business_licence_number_electronic_img" style="display: none">图片预览</div>
                                @endif
                                <div class="errorMessage" id="jxs_business_licence_number_electronic_error">{{$errors->first('business_licence_number_electronic')}}</div>
                            </div>
                        </div>
                        <div class="form-group form-group-reg">

                            <button type="submit" class="btn-postreg">立即注册</button>
                            <div style="display: inline-block;">
                                <input type="checkbox" id="store_agree" name="store_agree" @if(old('store_agree')) checked="checked" @endif style="vertical-align: middle;margin-left: 20px">
                                <span style="vertical-align: middle;" class="agreement" type="jxs">我同意"刘备修车网"协议</span>
                            </div>
                            <div class="errorMessage" style="padding-left: 0px;display: inline-block;">{{$errors->first('store_agree')}}</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div class="float_box"></div>
<div class="agreement_content_box2" style="display: none;">
    <div style="width: 738px;height: 417px;background: #fff;">
        <div class="headDiv">
            <h3 style="fontsize: 16px;color:#000;">刘备修车网修理厂注册协议</h3>
            <a class="close_x"><img src="http://liubei.com/entry/images/closeAn.png"></a>
        </div>
        <div class="agreement_content" style="">
            <p>刘备修车网由深圳市点红网络科技有限公司经营并管理，修理厂申请刘备修车网注册流程中点击同意前，请务必认真阅读和理解本《刘备修车网修理厂注册协议》（以下简称《协议》）中规定的所有权利和限制。修理厂一旦注册、登录、使用或以任何方式使用本《协议》所涉及的相关服务，表示乙方同意并接受本《协议》各项条款的约束，同时本《协议》产生法律效力。</p>
            <p>一、注册资格</p>
            <p>1.1 汽车维修企业或汽车服务企业，依法登记的公司、企业应具备合法的汽车维修和服务资格；</p>
            <p>1.2 经营须符合国家相关法律、法规、规范性文件以及本协议的要求；</p>
            <p>1.3 在使用刘备修车网服务时，应当具有合法固定的经营场所，并按刘备修车网页面的提示准确完整地提供乙方的真实信息（包括但不限于店名、电话、地址、电子邮箱等），以便联系；</p>
            <p>1.4 在协议期内，汽车修理厂（以下简称“修理厂”）为证明合法身份及从业资质，须按甲方要求在刘备修车网上提交相关证明文件、信息和材料，经网站形式审查通过后，方可进行网络交易。</p>
            <p>二、服务内容</p>
            <p>2.1 刘备修车网仅提供相关的网络服务平台。除此之外修理厂用于接入互联网的设备（如个人电脑、手机、及其他与接入互联网或移动互联网有关的装置）及登录互联网所需的相关费用（如为接入互联网而支付的电话费及上网费、为使用移动网而支付的手机费、电费）均应由修理厂自行负担。</p>
            <p>2.2 刘备修车网有义务在现有技术的基础上维护整个网站的正常运行，并努力提升和改进技术，使修理厂的网上交易活动得以顺利进行。</p>
            <p>2.2.1 刘备修车网提供http://www.liubeixc.</p>com前端网站，提供注册端口。刘备修车网有权对修理厂的经营主体身份和有关的证明文件进行审查和登记，建立登记档案并定期核实更新。<p></p>
            <p>2.2.2 刘备修车网提供电子交易平台。</p>
            <p>2.2.3 刘备修车网为修理厂提供订购配件的物流配送服务。
            </p><p>2.2.4 刘备修车网协助修理厂办理好订购配件的对账与货款结算工作。</p>
            <p>2.2.5 修理厂在刘备修车网站内的注册信息必须真实，订购的产品信息、供货数量等所有信息以修理厂在网站上的确认为准。</p>
            <p>2.2.6 修理厂在经营中与配件经销单位发生纠纷，须首先自行协商处理，协商不成提请刘备修车网站调解处理，但这并不构成本网站的任何义务。</p>
            <p>三、用户使用规则</p>
            <p>3.1 刘备修车网服务平台通过刘备修车网（含刘备修车网网站移动客户端及其他登录客户端）为修理厂提供网络交易服务平台，一旦确认本协议，即代表修理厂同意使用刘备修车网开办的银行托管账户进行资金转账和监管。修理厂同意使用刘备修车网提供的支付系统进行资金转账（包括付款、收款、扣划保证金等）和资金监管，若修理厂与供应商私自更改资金监管、托管账户从而导致的错付、多付或重复扣取款项的，由此导致的所有损失、索赔及投诉均由修理厂与供应商自行承担并解决，网站对此不承担任何责任。</p>
            <p>3.2 一旦注册成功，修理厂将得到一个“用户帐号”（又称商家用户名）和密码，作为修理厂用户入驻刘备修车网平台的唯一身份标识，在使用服务的过程中必须与自设的密码共同使用。修理厂应妥善保管用户帐号及密码信息的安全，且不得以任何形式擅自转让或授权他人使用用户名。修理厂应对该用户名和密码所进行的一切活动和事件负全部责任。因修理厂的过失导致账号和密码脱离控制，从而造成经销商、刘备修车网或任何第三方用户遭受损害的，修理厂将承担损害赔偿责任。</p>
            <p>3.3 在刘备修车网选购产品时，修理厂如有任何疑问可与供应商联系，确认商品类型、型号、价格以及发票开具和货物配送方式等内容。若修理厂与供应商双方达成一致，即可订购产品。修理厂所提供的选购信息必须真实有效，欺诈行为所造成的一切法律后果将由修理厂自行承担。</p>
            <p>3.4 付款前修理厂应确认好产品信息、采购数量、采购价格、采购区域等相关信息，上述商品信息可能发生变动，刘备修车网不作特别通知。由于互联网技术因素等客观原因，网页显示的信息可能会有一定的滞后性或差错，对此情形请您知悉并理解，因此给您造成的不变或损失，本网站不承担任何责任。</p>
            <p>3.5 采购订单一旦付款成功即视为真实有效。未经供应商和刘备修车网许可，不得随意修改和取消订单，否则，由此造成的损失由修理厂自行承担。</p>
            <p>3.6 订单生成后，修理厂需24小时内将采购款通过支付宝或其它网站认可的支付方式汇入刘备修车网开办的银行托管账户，由银行根据本协议内容负责支付和管理。</p>
            <p>3.7 供应商应在确认修理厂付款后一个工作日内安排发货。</p>
            <p>3.8 修理厂在收货时应立即开封查验，确认无误后在送货单或快递单上签字。经修理厂签字的送货单或快递单将作为刘备修车网和供应商确认修理厂收货成功的凭证。
            </p><p>3.9 收货后如有不满和疑问，修理厂应在验收签字后的3日内通知刘备修车网并主动联系供应商解决相关问题，刘备修车网将延迟承付该供应商货款（最多延迟至修理厂验收 签字后第15日承付）。修理厂验收签字后3日内未向刘备修车网提出异议，则视为对本次交易满意，即本次交易完成，刘备修车网将在修理厂验收签字后5日内自动承付该笔交易货款至供应商绑定的银行账户。</p>
            <p>3.10 修理厂的购货发票由供应商负责开具，其开票方式、票种和发票传递方式须符合相关法律法规的规定。刘备修车网只为供应商和修理厂双方提供交易平台，不参与交易实质性的内容。</p>
            <p>3.11 协议有效期间，修理厂变更联系地址和企业名称等信息，修理厂缴纳的费用仍延续有效。</p>
            <p>3.12 修理厂如出现地址、联系方式、账户信息变更等重要事件，需主动修改相应信息，因修理厂未及时修改相应信息而造成的损失由修理厂自行承担。</p>
            <p>3.13 修理厂在使用刘备修车网平台服务过程中，保证遵守以下规定：</p>
            <p>3.13.1 遵守中国有关的法律和法规以及社会公序良俗，如有违反导致任何法律后果，修理厂将以自己的名义独立承担所有相应的法律责任；</p>
            <p>3.13.2 遵守所有与网络服务有关的网络协议、规定和程序；</p>
            <p>3.13.3 不得利用刘备修车网平台从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；</p>
            <p>3.13.4 不得传输或发表损害国家社会公共利益和涉及国家安全的信息资料或言论；</p>
            <p>3.13.5 修理厂保证其发布的信息真实、准确，符合法律规定和甲方的规定，不得利用刘备修车网平台服务上传、展示或传播任何虚假的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、庸俗淫秽的或其他任何非法的信息资料；</p>
            <p>3.13.6 不得利用刘备修车网平台进行任何不利于刘备修车网的行为（包括但不限于有损甲方品牌形象和声誉的任何言论及行动），如刘备修车网发现修理厂有故意诋毁或损害平台利益的言行，刘备修车网有权立即终止本协议，并视情节追求修理厂法律责任；</p>
            <p>3.13.7 修理厂应保证其将按照《中华人民共和国合同法》及其他法规、部门规章和国家强制性标准的规定，采购商品并履行相关义务；</p>
            <p>3.13.8 修理厂在使用服务进行交易的过程中遵守诚实信用的原则，不在交易过程中采取不正当竞争行为，不扰乱网上交易的正常秩序，不从事与网上交易无关的行为；
            </p><p>3.13.9 修理厂保证不对刘备修车网上任何数据做商业性利用，未经刘备修车网事先书面批准的情况下，不得以复制、传播等方式使用在刘备修车网网站上展示的任何资料；</p>
            <p>3.13.10 因修理厂操作错误而导致的商品种类、型号、数量、价格错误等损失，由修理厂自行承担；</p>
            <p>3.13.11 修理厂授权刘备修车网有权永久、全球、免费全部（或部分）使用、复制、修订、改写、发布、翻译、展示修理厂公示于刘备修车网上的各类信息或制作其派生作品，或以现在已知或日后开发的任何形式、媒体或技术，将上述信息纳入其他作品内；</p>
            <p>3.13.12 未经甲方书面授权，修理厂不得以任何形式使用刘备修车网商标、标志及企业字号，否则，修理厂承担由此导致的全部法律责任；</p>
            <p>3.13.13 修理厂承诺并未隐瞒任何其他足以影响甲方签订和履行本合同的信息。</p>
            <p>3.14 刘备修车网有权对修理厂使用刘备修车网平台情况进行审查和监督。</p>
            <p>3.15 修理厂完全理解并不可撤销地授权刘备修车网及刘备修车网授权的第三方，根据本协议及网站规则的规定，处理修理厂在刘备修车网平台上发生的所有交易纠纷及可能产生的交易纠纷；修理厂同意接受刘备修车网或刘备修车网授权的第三方的判断和处理决定。</p>
            <p>3.16 经国家生效法律文书或行政处罚决定确认修理厂存在违法行为，刘备修车网有权在刘备修车网上公布修理厂的违法或违规行为并要求修理厂承担相应的赔偿责任或违约责任。</p>
            <p>四、费用</p>
            <p>修理厂理解并同意缴纳以下费用</p>
            <p>4.1 会员费：所有修理厂在刘备修车网注册时免收注册费用。</p>
            <p>五、协议更新及乙方的关注义务</p>
            <p>5.1 本协议包含了修理厂使用刘备修车网服务的基本规范，修理厂在使用刘备修车网服务时，还需遵循刘备修车网公示的具体规范，即网站规则（包括但不限于刘备修车网统一发布的说明、通知公告、操作规则、温馨提示等），网站规则属于本《协议》的有机组成部分。</p>
            <p>5.2 根据国家法律法规变化及网站运营需要，刘备修车网有权修改本《协议》，并不定期更新网站规则，一旦导致上述条款发生变化，刘备修车网将于新条款生效7日前将相关信息通过网站公示等方式通知修理厂，修理厂可随时登录刘备修车网查阅最新《协议》条款及网站规则，相关信息在通知之日起正式生效；如果修理厂不接受所改动的内容，修理厂有权立即停止接受刘备修车网所提供的注册服务，并书面申请清户；如果修理厂未明示拒绝接受改动的内容或继续使用刘备修车网提供的服务，则视为接受《协议》条款的变动。</p>
            <p>5.3 由于修理厂在协议更新后因未熟悉公告规定而引起的损失，刘备修车网将不承担任何责任。</p>
            <p>六、协议的解除与终止</p>
            <p>6.1 以下情节发生时，刘备修车网有权单方面解除或终止协议，：</p>
            <p>6.1.1 修理厂提供的修理厂信息（包括但不限于店名、电话、地址、电子邮箱等）不真实、不准确或不完整的。</p>
            <p>6.1.2 修理厂有违反本协议第3.13条等有关诚实信用原则的行为或故意扰乱商城秩序行为的。</p>
            <p>6.1.3 修理厂与其他用户发生矛盾，遭到其他用户投诉或者造成刘备修车网损失，经调解无效，协议将强制终止。</p>
            <p>6.1.4 修理厂严重违反刘备修车网的规章制度。</p>
            <p>6.1.5 本《协议》及网站规则变更时，修理厂明示并通知刘备修车网不愿接受该等变更的。</p>
            <p>6.1.6 对有证据证明修理厂对合法权利人实施侵权行为（包括但不限于侵犯注册商标专用权、企业名称权、专利权），刘备修车网在接到权利人删除、屏蔽、断开链接等措施的要求后，有权采取相应的措施防止损害的进一步扩大或终止协议。</p>
            <p>6.1.7 修理厂在使用网络服务时违反本协议规定的，且由此造成刘备修车网、供应商及其他第三方的损失，修理厂需承担相应的赔偿责任。</p>
            <p>6.2 若修理厂单面解除协议，须提前30日向刘备修车网予以书面通知，在双方账目核对无误后，刘备修车网负责在15个工作日内办理好解除协议事宜。</p>
            <p>七、特别声明 </p>
            <p>7.1 除非另有约定，刘备修车网上的商品通常并非由刘备修车网直接销售或提供，而是由入驻刘备修车网平台的经营者销售或提供。刘备修车网上提供商品或服务的经营者利用刘备修车网服务平台开展经营活动，依法自负盈亏，独立承担法律责任。</p>
            <p>7.2 刘备修车网在此明确声明对服务不作任何明示或暗示的保证，包括但不限于对服务的可适用性，没有错误或疏漏，持续性，准确性，可靠性，适用于某一特定用途之类的保证，声明或承诺。刘备修车网对服务所涉的技术和信息的有效性，准确性，正确性，可靠性，质量，稳定，完整和及时性均不作承诺和保证。</p>
            <p>7.3 修理厂在使用产品和享受服务的过程中产生纠纷，例如产品质量或其它退、换货等问题，修理厂须主动联系供应商在线下协商解决相关问题。网站协助解决相关争议，但对此产生的后果不负任何连带责任和义务。</p>
            <p>7.4 刘备修车网不保证为向修理厂提供便利而设置的外部链接的准确性和完整性，同时，对于该等外部链接指向的不由刘备修车网实际控制的任何网页上的内容，刘备修车网不承担相关责任。</p>
            <p>7.5 对于因电信系统或互联网网络故障、计算机故障或病毒、电力故障导致信息损坏或丢失、计算机系统损坏等因不可抗力或者其他本网站无法控制的原因造成的损失，因不属于刘备修车网经营控制范围，刘备修车网不承担任何责任。</p>
            <p>7.6 使用服务下载或者获取任何资料的行为均出于修理厂的独立判断，修理厂自行承担因此原因可能导致的电脑系统或资料灭失风险。</p>
            <p>7.7 无论在任何情况下对于台风、洪水、地震、战争、政府行为、罢工、骚乱等不可抗力事件，发生不可抗力事件的一方的合同履行责任可以要求延期或者免除，但应当及时通知对方并及时提供不可抗力证明。</p>
            <p>八、法律及争议解决 </p>
            <p>8.1 本协议之订立、生效、解释、修订、补充、终止、执行与争议解决均适用中华人民共和国大陆地区法律；如法律无相关规定的，参照商业惯例及/或行业惯例。</p>
            <p>8.2 如果本《协议》或网站规则条款中任何一条被视为废止、无效或因任何理由不可执行，该条款应视为可分的且并不影响任何其余条款的有效性和可执行性。</p>
            <p>8.3 因本协议引起的或与本协议有关的任何争议，各方应友好协商解决；协商不成时，任何一方均可向深圳市宝安区人民法院提起诉讼。</p>

        </div>
    </div>
</div>
<div class="agreement_content_box" style="display: none;">
    <div style="width: 738px;height: 417px;background: #fff;">
        <div class="headDiv">
            <h3 style="fontsize: 16px;color:#000;">刘备修车网经销商注册协议</h3>
            <a class="close_x"><img src="http://liubei.com/entry/images/closeAn.png"></a>
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
@endsection

@section('script')
<script src="{{asset('/common/js/common_select.js')}}"></script>
<script src="{{asset('/common/js/common.js')}}"></script>
<script src="{{asset('/common/webuploader/webuploader.js')}}"></script>
<script>
    $(function(){
        $(".agreement").click(function(){
            var _type = $(this).attr("type");
            $('.float_box').show();
            if(_type == 'xlc'){
                $('.agreement_content_box2').show();
            }else{
                $('.agreement_content_box').show();

            }
        });

        $('.close_x').click(function(){
            $('.agreement_content_box').hide();
            $('.float_box').hide();
        });

        $('.close_x').click(function(){
            $('.agreement_content_box2').hide();
            $('.float_box').hide();
        });

        /* 地区联动菜单处理 */
        $(function () {
            $("select").live("change", function () {
                var selects = $(this).siblings("select").andSelf();
                var id = '';
                var names = new Array();
                for (i = 0; i < selects.length; i++) {
                    sel = selects[i];
                    var _obj = $("#s_" + (i + 1));
                    if (sel.value > 0) {
                        id = sel.value;
                        name = sel.options[sel.selectedIndex].text;
                        _obj.val(id);
                    }
                }
                $("#jxsRegisterForm input[name=company_province_id]").val($('.company_province_id').val());
                $("#jxsRegisterForm input[name=company_city_id]").val($('.company_city_id').val());
                $("#jxsRegisterForm input[name=company_area_id]").val($('.company_area_id').val());
                $("#jxsRegisterForm input[name=area_valid_id]").val($('.lastnodearea').val());
                $("#ppcjRegisterForm input[name=company_province_id]").val($('.company_province_id').val());
                $("#ppcjRegisterForm input[name=company_city_id]").val($('.company_city_id').val());
                $("#ppcjRegisterForm input[name=company_area_id]").val($('.company_area_id').val());
                $("#xlcRegisterForm input[name=area_valid_id]").val($('.lastnodearea').val());
            });
            regionInit("region_xlc");
            regionInit("region_jxs");
            regionInit("region_ppcj");
        });


        //修理厂是否完善资料
        $("#do_perfect").on('click',function(){
            var _isPerfect = $('input[name="is_perfect"]').val();
            if(parseInt(_isPerfect) === 1){
                $('input[name="is_perfect"]').val(0);
                $("#perfect_div").hide();
                $("#do_perfect").html('立即完善V');

            }else{
                $('input[name="is_perfect"]').val(1);
                $("#perfect_div").show();
                $("#do_perfect").html('立即完善Λ');

            }
        });

        //检查修理厂手机是否已注册
        $('#xlc_mobile').on('blur',function(){

            var mobile = parseInt($('#xlc_mobile').val());

            if(!(/^1[3456789]\d{9}$/.test(mobile))){
                $('#xlc_mobile_error').html('手机号码格式错误!');
                return false;
            }

            var url = "{{url('/checkMobile')}}";
            var token = "{{csrf_token()}}";

            $.post(url,{mobile:mobile,_token:token},function (data) {
                if(data.status){
                    $('#xlc_mobile_error').html('手机号码已注册!');
                }
            });

        });

        //检查修理厂邮箱是否已注册
        $('#xlc_email').on('blur',function(){

            var email = $('#xlc_email').val();

            var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if(!regEmail.test(email)){
                $('#xlc_email_error').html('邮箱格式错误!');
            }

            var url = "{{url('/checkEmail')}}";
            var token = "{{csrf_token()}}";

            $.post(url,{email:email,_token:token},function (data) {
                if(data.status){
                    $('#xlc_email_error').html('邮箱已注册');
                }
            });

        });

        //验证经销商名称是否已经被注册
        $('#jxs_company_name').on('blur',function(){

            var company_name = $('#jxs_company_name').val();

            if(!company_name){
               return false;
            }

            var url = "{{url('/checkCompany')}}";
            var token = "{{csrf_token()}}";

            $.post(url,{company_name:company_name,_token:token},function (data) {
                if(data.status){
                    $('#xlc_company_name_error').html('修理厂名称已注册');
                }
            });

        });

        //上传修车厂注册门头照
        var xccCompanyCove = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            formData: {
                _token:"{{ csrf_token() }}"
            },
            // swf文件路径
            swf: 'common/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: "{{url('/uploadImg')}}",
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id : '#xcc_company_cover_pick',
                multiple : false
            },
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        // 修车厂注册门头照文件上传成功
        xccCompanyCove.on( 'uploadSuccess', function(file,response) {
            if(response.status == 1){
                var imgurl = response.path;

                $('#xcc_company_cover_value').val(imgurl);
                $('#xcc_company_cover_img').html('<image src="'+imgurl+'" style="width:100px;height:100px;" />').show();
            }else{
                $('#xcc_company_cover_error').html('门头照图片上传失败');
            }

        });

        //上传修车厂注册法人身份证
        var xccBusinessCord = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            formData: {
                _token:"{{ csrf_token() }}"
            },
            // swf文件路径
            swf: 'common/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: "{{url('/uploadImg')}}",
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id : '#xcc_business_legal_card_front_pick',
                multiple : false
            },
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        // 修车厂注册法人身份证文件上传成功
        xccBusinessCord.on( 'uploadSuccess', function(file,response) {
            if(response.status == 1){
                var imgurl = response.path;

                $('#xcc_business_legal_card_front_value').val(imgurl);
                $('#xcc_business_legal_card_front_img').html('<image src="'+imgurl+'" style="width:100px;height:100px;" />').show();
            }else{
                $('#xcc_business_legal_card_front_error').html('法人身份证图片上传失败');
            }

        });

        //上传修车厂注册营业执照
        var xccNumberCord = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            formData: {
                _token:"{{ csrf_token() }}"
            },
            // swf文件路径
            swf: 'common/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: "{{url('/uploadImg')}}",
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id : '#xcc_business_licence_number_electronic_pick',
                multiple : false
            },
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        // 修车厂注册营业执照上传成功
        xccNumberCord.on( 'uploadSuccess', function(file,response) {
            if(response.status == 1){

                var imgurl = response.path;

                $('#xcc_business_licence_number_electronic_value').val(imgurl);
                $('#xcc_business_licence_number_electronic_img').html('<image src="'+imgurl+'" style="width:100px;height:100px;" />').show();
            }else{
                $('#xcc_business_licence_number_electronic_error').html('营业执照图片上传失败');
            }

        });

        //上传经销商门头照
        var jxs_company_cover = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            formData: {
                _token:"{{ csrf_token() }}"
            },
            // swf文件路径
            swf: 'common/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: "{{url('/uploadImg')}}",
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id : '#jxs_company_cover_pick',
                multiple : false
            },
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        // 经销商门头照文件上传成功
        jxs_company_cover.on( 'uploadSuccess', function(file,response) {
            // console.log(response.path);return false;
            var imgurl = response.path;

            $('#jxs_company_cover_value').val(imgurl);
            $('#jxs_company_cover_img').html('<image src="'+imgurl+'" style="width:100px;height:100px;" />').show();
        });


        //上传经销商法人身份证正面
        var jxs_business_legal_card_front = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            formData: {
                _token:"{{ csrf_token() }}"
            },
            // swf文件路径
            swf: 'common/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: "{{url('/uploadImg')}}",
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id : '#jxs_business_legal_card_front_pick',
                multiple : false
            },
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        // 经销商法人身份证正面文件上传成功
        jxs_business_legal_card_front.on( 'uploadSuccess', function(file,response) {
            // console.log(response.path);return false;
            var imgurl = response.path;

            $('#jxs_business_legal_card_front_value').val(imgurl);
            $('#jxs_business_legal_card_front_img').html('<image src="'+imgurl+'" style="width:100px;height:100px;" />').show();
        });

        //上传经销商营业执照
        var jxs_business_licence_number_electronic = WebUploader.create({
            // 选完文件后，是否自动上传。
            auto: true,
            formData: {
                _token:"{{ csrf_token() }}"
            },
            // swf文件路径
            swf: 'common/webuploader/Uploader.swf',
            // 文件接收服务端。
            server: "{{url('/uploadImg')}}",
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id : '#jxs_business_licence_number_electronic_pick',
                multiple : false
            },
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });

        // 经销商营业执照上传成功
        jxs_business_licence_number_electronic.on( 'uploadSuccess', function(file,response) {
            // console.log(response.path);return false;
            var imgurl = response.path;

            $('#jxs_business_licence_number_electronic_value').val(imgurl);
            $('#jxs_business_licence_number_electronic_img').html('<image src="'+imgurl+'" style="width:100px;height:100px;" />').show();
        });

    })

</script>

@endsection