@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>系统信息</h3>
        <ul class="tab-base">
            <li><a href="{{url('/users')}}"><span>客户列表</span></a></li>
            <li><a class="current"><span>修改密码</span></a></li></ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('/resetPassword')}}" id="user_form">
            {{csrf_field()}}
            <table class="table tb-type2">
                <tbody>
                <tr class="">
                    <td colspan="2"><label class="validation">原密码(必填):</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="password" value=""  name="oldPassword" class="infoTableInput"></td>
                    <td class="vatop tips">{{$errors->first('oldPassword')}}</td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="">新密码(必填):</label></td>
                </tr>

                <tr class="noborder">
                    <td class="vatop rowform"><input type="password" value=""  name="password" class="infoTableInput"></td>
                    <td class="vatop tips">{{$errors->first('password')}}</td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="">确认密码(必填):</label></td>
                </tr>

                <tr class="noborder">
                    <td class="vatop rowform"><input type="password" value=""  name="password_confirmation" class="infoTableInput"></td>
                    <td class="vatop tips"></td>
                </tr>

                </tbody>
                <tfoot>
                <tr class="tfoot">
                    <td colspan="15"><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span>提交</span></a></td>
                </tr>

                </tfoot>
            </table>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
            //表单提交
            $('#submitBtn').on('click',function(){
                $('#user_form').submit();
            });
        });
    </script>
@endsection