@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a class="current"><span>文章管理</span></a></li>
            <li><a href="{{url('admin/articles/create')}}"><span>添加文章</span></a></li></ul>
    </div>


    <div class="content-group">
        <form method="get" name="formSearch" id="formSearch">

            <table class="tb-type1 noborder search">
                <tbody>
                <tr>
                    <!-- 查询条件 -->
                    <th><label for="title">关键字</label></th>
                    <td><input type="text" value="{{request()->input('keyword')}}" name="keyword" class="txt"></td>

                    <th><label for="title">状态</label></th>
                    <td>
                        <select name="is_show" class="selected">
                            <option value="">--请选择--</option>
                            <option value="0" @if(!request()->input('is_show')) selected="selected" @endif>草稿</option>
                            <option value="1" @if(request()->input('is_show')) selected="selected" @endif>发布</option>
                        </select>
                    </td>

                    <th><label for="parent_id">文章分类</label></th>
                    <td>
                        <select id="ac_id" name="ac_id" class="valid">
                            <option value="">--请选择--</option>
                            @if(!empty($articleClass))
                                @foreach($articleClass as $val)
                                    <option value="{{$val['id']}}" @if(request()->input('ac_id') == $val['id']) selected="selected" @endif>{{$val['title']}}</option>
                                    @if(!empty($val['children']))
                                        @foreach($val['children'] as $item)
                                            <option value="{{$item['id']}}" @if(request()->input('ac_id') == $item['id']) selected="selected" @endif>&nbsp;&nbsp;--|{{$item['title']}}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </td>

                    <td><a href="javascript:void(0);" id="searchSubmit" class="btn-search " title="查询">&nbsp;</a>
                    <td><a class="btns" id="searchReset" resetUrl="{{URL('admin/articles')}}"><span>重置</span></a></td>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <form method="post" id="form_admin" action="">

            <table class="table tb-type2 nobdb">
                <thead>
                <tr class="thead">
                    <th class="align-center"><input type="checkbox" class="checkAll"  name="chkVal"></th>
                    <th class="align-center">序号</th>
                    <th class="align-center">标题</th>
                    <th class="align-center">资讯分类</th>
                    <th class="align-center">发布人</th>
                    <th class="align-center">状态</th>
                    <th class="align-center">发布时间</th>
                    <th class="align-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($list as $value)
                    <tr class="hover" style="background: rgb(255, 255, 255);">
                        <td class="align-center"><input name="ids[]" type="checkbox" value="{{$value['id']}}" class="checkItem"></td>
                        <td class="align-center">{{$loop->index+1}}</td>
                        <td class="align-center">{{$value['title']}}</td>
                        <td class="align-center">@if(!empty($value['class'])) {{$value['class']['title']}}@endif</td>
                        <td class="align-center">@if(!empty($value['account'])) {{$value['account']['username']}}@endif</td>
                        <td class="align-center">{{$value['is_show'] ? '发布' : '草稿'}}</td>
                        <td class="align-center">{{$value['created_at']}}</td>

                        <td class="align-center">
                            <a href="{{url('admin/articles/edit?id=')}}{{$value['id']}}">编辑</a> |
                            <a href="JavaScript:void(0)" deleteId="{{$value['id']}}" deleteUrl="{{url('admin/articles/del')}}" class="delete">删除</a></td>
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
                        <a href="JavaScript:void(0);" class="btn delAll" deleteUrl="{{url('admin/articles/del')}}"><span>删除</span></a>

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
