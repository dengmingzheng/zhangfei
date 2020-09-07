@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>系统管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/roles')}}"><span>管理员列表</span></a></li>
            <li><a class="current"><span>编辑管理员</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/accounts/edit')}}" id="form">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$account['id']}}" >
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">用户名:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{$account['login_name']}}"  name="login_name" class="txt" disabled="disabled"></td>
                    <td class="vatop tips">用户名不可以修改</td>
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
                                    <option value="{{$role['id']}}" @if($account['role_id'] == $role['id']) selected="selected" @endif>{{$role['role_name']}}</option>
                                @endforeach
                            @endif
                        </select></td>
                    <td class="vatop tips">{{$errors->first('role_id')}}</td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">昵称:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{$account['user_name']}}"  name="user_name" class="txt"></td>
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
