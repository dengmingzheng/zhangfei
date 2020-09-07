@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>权限设置</h3>
        <ul class="tab-base">
            <li><a class="current"><span>管理员列表</span></a></li>
            <li><a href="{{url('admin/accounts/create')}}"><span>添加管理员</span></a></li>
        </ul>
    </div>

    <div class="content-group">
        <form method="get" name="formSearch" id="formSearch" action="{{url('admin/accounts')}}">
            @csrf
            <table class="tb-type1 noborder search">
                <tbody>
                <tr>
                    <!-- 查询条件 -->
                    <th><label for="name">用戶名</label></th>
                    <td><input type="text" value="{{request()->input('name')}}" name="name" class="txt"></td>

                    <td><a href="javascript:void(0);" id="ncsubmit" class="btn-search " title="查询">&nbsp;</a></td>
                </tr>
                </tbody>
            </table>
        </form>

        <form method="post" id="form" action="">

            <table class="table tb-type2 nobdb">
                <thead>
                <tr class="thead">
                    <th class="align-center"><input type="checkbox" class="checkAll"  name="chkVal"></th>
                    <th class="align-center">序号</th>
                    <th class="align-center">用户名</th>
                    <th class="align-center">昵称</th>
                    <th class="align-center">角色</th>
                    <th class="align-center">登录次数</th>
                    <th class="align-center">上次登录时间</th>
                    <th class="align-center">创建时间</th>
                    <th class="align-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($list['data'] as $value)
                    <tr class="hover" style="background: rgb(255, 255, 255);">
                        <td class="align-center"><input name="ids[]" type="checkbox" value="{{$value['id']}}" class="checkItem"></td>
                        <td class="align-center">{{$loop->index+1}}</td>
                        <td class="align-center">{{$value['login_name']}}</td>
                        <td class="align-center">{{$value['user_name']}}</td>
                        <td class="align-center">@if($value['role']){{$value['role']['role_name']}}@endif</td>
                        <td class="align-center"> {{$value['logins']}}</td>
                        <td class="align-center">{{$value['last_login_time'] ?? ''}}</td>
                        <td class="align-center">{{$value['created_at']}}</td>
                        <td class="align-center">
                            <a href="{{url('admin/accounts/edit?id=')}}{{$value['id']}}">编辑</a> |
                            <a href="{{url('admin/accounts/updatePassword?id=')}}{{$value['id']}}">修改密码</a> |
                            <a href="JavaScript:void(0)" deleteId="{{$value['id']}}" deleteUrl="{{url('admin/accounts/del')}}" class="delete">删除</a></td>
                    </tr>

                @empty
                    <tr class="hover">
                        <td colspan="10" class="align-center">没有数据</td>

                    </tr>
                @endforelse

                </tbody>
                <tfoot class="tfoot">
                <tr>
                    <td class="align-center"><input type="checkbox" class="checkAll" name="chkVal"></td>

                    <td colspan="16"><label for="checkallBottom">全选</label>&nbsp;&nbsp;
                        <a href="JavaScript:void(0);" class="btn"><span>删除</span></a>

                        <div class="pagination">

                          {{$page}}

                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>
@endsection
