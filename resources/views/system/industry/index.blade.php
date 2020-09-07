@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a class="current"><span>行业分类</span></a></li>
            <li><a href="{{url('admin/industry/create')}}"><span>添加行业分类</span></a></li></ul>
    </div>


    <div class="content-group">
        <form method="post" id="form_admin" action="">

            <table class="table tb-type2 nobdb">
                <thead>
                <tr class="thead">
                    <th class="align-center"><input type="checkbox" class="checkAll"  name="chkVal"></th>
                    <th class="align-center">序号</th>
                    <th class="align-center">行业分类</th>
                    <th class="align-center">排序</th>
                    <th class="align-center">更新时间</th>
                    <th class="align-center">创建时间</th>
                    <th class="align-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($list as $value)
                    <tr class="hover" style="background: rgb(255, 255, 255);">
                        <td class="align-center"><input name="ids[]" type="checkbox" value="{{$value['id']}}" class="checkItem"></td>
                        <td class="align-center">{{$loop->index+1}}</td>
                        <td class="align-center">{{$value['name']}}</td>
                        <td class="align-center">{{$value['sort']}}</td>
                        <td class="align-center">{{$value['updated_at']}}</td>
                        <td class="align-center">{{$value['created_at']}}</td>

                        <td class="align-center">
                            <a href="{{url('admin/industry/edit?id=')}}{{$value['id']}}">编辑</a> |
                            <a href="JavaScript:void(0)" deleteId="{{$value['id']}}" deleteUrl="{{url('admin/industry/del')}}" class="delete">删除</a></td>
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
                        <a href="JavaScript:void(0);" class="btn delAll" deleteUrl="{{url('admin/industry/del')}}"><span>删除</span></a>

                        <div class="pagination">
                            {!! $page !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>
@endsection
