@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/articleClasses')}}"><span>文章分类</span></a></li>
            <li><a class="current"><span>编辑文章分类</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/articleClasses/edit')}}" id="form">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$detail['id']}}"/>
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">分类名称:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{$detail['title']}}"  name="title" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('title')}}</td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="">所属分类:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <select id="parent_id" name="parent_id" class="valid">
                            <option value="">--请选择所属分类--</option>
                            @if(!empty($articleClasses))
                                @foreach($articleClasses as $val)
                                    <option value="{{$val['id']}}" @if($detail['parent_id'] == $val['id']) selected="selected" @endif>{{ $val['title'] }}</option>
                                    @if(!empty($val['children']))
                                        @foreach($val['children'] as $item)
                                            <option value="{{ $item['id'] }}" @if($detail['parent_id'] == $item['id']) selected="selected" @endif>&nbsp;&nbsp;--|{{$item['title']}}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </select></td>
                    <td class="vatop tips">{{$errors->first('parent_id')}}</td>
                </tr>


                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">排序:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{$detail['sort']}}"  name="sort" class="txt"></td>
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
