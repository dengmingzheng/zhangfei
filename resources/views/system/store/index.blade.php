@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>店铺管理</h3>
        <ul class="tab-base">
            <li><a class="current"><span>店铺会员</span></a></li>
    </div>


    <div class="content-group">
        <form method="get" name="formSearch" id="formSearch">

            <table class="tb-type1 noborder search">
                <tbody>
                <tr>
                    <!-- 查询条件 -->
                    <th><label for="title">主营产品:</label></th>
                    <td><input type="text" value="{{request()->input('title')}}" name="title" class="txt"></td>

                    <th><label for="title">店铺名称:</label></th>
                    <td><input type="text" value="{{request()->input('shop_name')}}" name="shop_name" class="txt"></td>

                    <th><label for="title">电话:</label></th>
                    <td><input type="text" value="{{request()->input('phone')}}" name="phone" class="txt"></td>

                    <th><label for="title">创建时间</label></th>
                    <td class="so"><input class="txt date hasDatepicker" type="text" value="{{request()->input('time_start')}}" id="time_start" name="time_start" readonly="readonly">
                        <label for="os_day_start">~</label>
                        <input class="txt date hasDatepicker" type="text" value="{{request()->input('time_end')}}" id="time_end" name="time_end" readonly="readonly">
                    </td>

                    <td><a href="javascript:void(0);" id="searchSubmit" class="btn-search " title="查询">&nbsp;</a>
                    <td><a class="btns" id="searchReset" resetUrl="{{url('admin/stores')}}"><span>重置</span></a></td>

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
                    <th class="align-center">店铺名称</th>
                    <th class="align-center">主营商品</th>
                    <th class="align-center">联系地址</th>
                    <th class="align-center">具体地址</th>
                    <th class="align-center">公司名称</th>
                    <th class="align-center">手机号</th>
                    <th class="align-center">添加时间</th>
                    <th class="align-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($list as $value)
                    <tr class="hover" style="background: rgb(255, 255, 255);">
                        <td class="align-center"><input name="ids[]" type="checkbox" value="{{$value['id']}}" class="checkItem"></td>
                        <td class="align-center">{{$loop->index+1}}</td>
                        <td class="align-center">{{$value->shop_name}}</td>
                        <td class="align-center">{{$value->businesses->title}}</td>
                        <td class="align-center">{{$value->region}}</td>
                        <td class="align-center">{{$value->address}}</td>
                        <td class="align-center">{{$value->company_name}}</td>
                        <td class="align-center">{{$value->user->mphone}}</td>

                        <td class="align-center">{{$value->created_at}}</td>

                        <td class="align-center">
                            <a href="{{url('admin/menus/editMenu?id=')}}{{$value['id']}}">编辑</a> |
                            <a href="JavaScript:void(0)" deleteId="{{$value['id']}}" deleteUrl="{{url('admin/menus/delMenu')}}" class="delete">删除</a></td>
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
                        <a href="JavaScript:void(0);" class="btn delAll" deleteUrl="{{url('admin/menus/delMenu')}}"><span>删除</span></a>

                        <div class="pagination">
                           {{$list->links()}}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>
@endsection

@section('script')
<script src="{{asset('./system/js/laydate/laydate.js')}}"></script>
<script>
    laydate.render({
        elem: '#time_start'
    });
    laydate.render({
        elem: '#time_end'
    });
</script>
@endsection