@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>系统信息</h3>
        <ul class="tab-base">
            <li><a href="{{url('/users')}}"><span>客户列表</span></a></li>
            <li><a class="current"><span>查看</span></a></li></ul>
    </div>


    <div class="content-group">
        <form>
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">企业ID:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->id}}</td>
                    <td class="vatop tips"></td>
                </tr>
                <tr>
                    <td colspan="2"><label class="validation" for="ss_name">账号:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->name}}</td>
                    <td class="vatop tips"></td>
                </tr>
                <tr>
                    <td colspan="2" class="required"><label for="">所属角色:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">@if($user->role){{$user->role->role_name}}@endif</td>
                    <td class="vatop tips"></td>
                </tr>
                <tr>
                    <td colspan="2" class="required">
                        <label for="station_grade"> 客户经理: </label>
                    </td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->accountManager}}</td>
                    <td class="vatop tips"></td>
                </tr>
                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts">联系人:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->contacter}}</td>
                    <td class="vatop tips"></td>
                </tr>
                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">联系电话:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->tel}}</td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">联系手机:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->mobile}}</td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">腾讯QQ :</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->qq}}</td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">电子邮件:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->email}}</td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">短信总数:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">@if($user->wallet){{$user->wallet->total}}@endif</td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">剩余短信 :</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">@if($user->wallet){{$user->wallet->remain}}@endif</td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="station_contacts_phone">短信单价:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">{{$user->messagePrice}}</td>
                    <td class="vatop tips"></td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="tfoot">
                    <td colspan="15"><a href="JavaScript:void(0);" class="btn" id="return"><span>返回</span></a></td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>
@endsection

@section('script')
    <script>

        $(function(){
            $('#return').on('click', function(){
                history.go(-1);}
             )
        });
    </script>
@endsection