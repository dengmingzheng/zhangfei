@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/links')}}"><span>友情链接</span></a></li>
            <li><a class="current"><span>添加友情链接</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/links/create')}}" id="form">
            @csrf
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">链接标题:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('name')}}"  name="name" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('name')}}</td>
                </tr>

                <tr>
                    <td colspan="2"><label class="validation" for="">链接网址:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('url')}}"  name="url" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('url')}}</td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">排序:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('sort',255)}}"  name="sort" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('sort')}} </td>
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
