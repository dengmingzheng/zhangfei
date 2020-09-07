@extends('system.layout.base')

@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a class="current"><span>友情链接</span></a></li>
            <li><a href="{{URL('admin/links/create')}}"><span>添加友情链接</span></a></li>
        </ul>
    </div>


    <div class="content-group">

        <form method="post" id="form" action="">

            <table class="table tb-type2 nobdb">
                <thead>
                <tr class="thead">
                    <th class="align-center"><input type="checkbox" class="checkAll"  name="chkVal"></th>
                    <th>序号</th>
                    <th class="align-center">标题</th>
                    <th class="align-center">链接网址</th>
                    <th class="align-center">排序</th>
                    <th class="align-center">时间</th>
                    <th class="align-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($list as $value)
                    <tr class="hover" style="background: rgb(255, 255, 255);">
                        <td class="align-center"><input name="ids[]" type="checkbox" value="{{$value['id']}}" class="checkItem"></td>
                        <td class="align-center">{{$loop->index+1}}</td>
                        <td class="align-center">{{$value['name']}}</td>
                        <td class="align-center">{{$value['url']}}</td>
                        <td class="align-center">{{$value['sort']}}</td>
                        <td class="align-center">{{$value['created_at']}}</td>
                        <td class="align-center">
                            <a href="{{url('admin/links/edit?id=')}}{{$value['id']}}">编辑</a> |
                            <a href="JavaScript:void(0)" deleteId="{{$value['id']}}" deleteUrl="{{url('admin/links/del')}}" class="delete">删除</a>
                        </td>
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
