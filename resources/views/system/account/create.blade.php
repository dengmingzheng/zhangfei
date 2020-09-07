@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>系统管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/accounts')}}"><span>管理员列表</span></a></li>
            <li><a class="current"><span>添加管理员</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/accounts/create')}}" id="form">
            @csrf
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">用户名:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('login_name')}}"  name="login_name" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('login_name')}}</td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="">角色:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <select id="role_id" name="role_id" class="valid">
                            <option value="0">--请选择角色--</option>
                            @if(!empty($roles))
                                @foreach($roles as $role)
                                    <option value="{{$role['id']}}">{{$role['role_name']}}</option>
                                @endforeach
                            @endif
                        </select></td>
                    <td class="vatop tips">{{$errors->first('role_id')}}</td>
                </tr>

                <tr>
                    <td colspan="2"><label class="validation" for="">密码:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="password" value=""  name="password" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('password')}}</td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">确认密码:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="password" value=""  name="password_confirmation" class="txt"></td>
                    <td class="vatop tips"></td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">昵称:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('user_name')}}"  name="user_name" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('user_name')}} </td>
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
