@extends('system.layout.base')
@section('style')
    <link href="{{asset('system/editor/css/simditor.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="header_line">
    <h3>网站管理</h3>
    <ul class="tab-base">
        <li><a href="{{url('admin/informations')}}"><span>资讯管理</span></a></li>
        <li><a class="current"><span>添加资讯</span></a></li>
    </ul>
</div>


<div class="content-group">
    <form method="post" action="{{url('admin/informations/create')}}" id="form" enctype="multipart/form-data">
        @csrf
        <table class="table tb-type2">
            <tbody>
            <tr class="noborder">
                <td colspan="2"><label class="validation">标题名称(必填):</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" value="{{old('title')}}"  name="title" class="txt"></td>
                <td class="vatop tips">{{$errors->first('title')}}</td>
            </tr>

            <tr class="noborder">
                <td colspan="2"><label class="validation">标题图片:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform">
                    <input type="file" name="path" class="txt" value="{{old('path')}}">
                </td>
                <td class="vatop tips">{{$errors->first('path')}}</td>
            </tr>

            <tr class="">
                <td colspan="2" class="required"><label class="validation" for="">所属分类:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform">
                    <select id="information_type_id" name="information_type_id" class="valid">
                        <option value="0">--请选择所属分类--</option>
                        @if(!empty($categoryList))
                            @foreach($categoryList as $val)
                                <option value="{{$val['id']}}" @if(old('information_type_id') == $val['id']) selected="selected" @endif>{{$val['name']}}</option>
                                @if(!empty($val['children']))
                                    @foreach($val['children'] as $item)
                                        <option value="{{$item['id']}}" @if(old('information_type_id') == $item['id']) selected="selected" @endif>&nbsp;&nbsp;--|{{$item['name']}}</option>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    </select></td>
                <td class="vatop tips">{{$errors->first('information_type_id')}}</td>
            </tr>

            <tr class="noborder">
                <td colspan="2"><label class="validation">副标题:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" value="{{old('sub_title')}}"  name="sub_title" class="txt"></td>
                <td class="vatop tips">{{$errors->first('sub_title')}}</td>
            </tr>

            <tr class="noborder">
                <td colspan="2"><label class="validation">作者:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" value="{{old('auth')}}"  name="auth" class="txt"></td>
                <td class="vatop tips">{{$errors->first('auth')}}</td>
            </tr>

            <tr class="noborder">
                <td colspan="2"><label class="validation">关键字:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" value="{{old('keywords')}}"  name="keywords" class="txt"></td>
                <td class="vatop tips">{{$errors->first('keywords')}}</td>
            </tr>

            <tr class="noborder">
                <td colspan="2"><label class="validation">seo:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><textarea name="seo_title">{{old('seo_title')}}</textarea></td>
                <td class="vatop tips">{{$errors->first('seo_title')}}</td>
            </tr>

            <tr class="noborder">
                <td colspan="2"><label class="validation">meta:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><textarea name="meta">{{old('meta')}}</textarea></td>
                <td class="vatop tips">{{$errors->first('meta')}}</td>
            </tr>


            <tr>
                <td colspan="2" class="required"><label class="validation" for="">排序:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" value="{{old('sort',255)}}"  name="sort" class="txt"></td>
                <td class="vatop tips">{{$errors->first('sort')}} </td>
            </tr>

            <tr class="noborder">
                <td colspan="2" class="required"><label>状态:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform">
                    <input type="radio" value="0" name="status" @if(old('status') == 0) checked="checked" @endif >草稿 <input type="radio" value="1" name="status" @if(old('status') == 1) checked="checked" @endif >发布
                </td>
                <td class="vatop tips">{{$errors->first('status')}}</td>
            </tr>

            <tr>
                <td colspan="2" class="required"><label class="validation" for="">文章内容:</label></td>
            </tr>
            <tr class="noborder">
                <td colspan="2" class="vatop rowform">
                    <textarea name="content"  id="editor" rows="3">{{old('content')}}</textarea>
                </td>
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
    <script type="text/javascript"  src="{{ asset('system/editor/js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('system/editor/js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('system/editor/js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('system/editor/js/simditor.js') }}"></script>
    <script>

        $(function(){

            $('.menutd').height(1350);

            var editor = new Simditor({
                textarea: $('#editor'),
                upload: {
                    url: '{{ url('admin/informations/imageUpload') }}',
                    params: { _token: '{{ csrf_token() }}' },
                    fileKey: 'upload_file',
                    connectionCount: 3,
                    leaveConfirm: '文件上传中，关闭此页面将取消上传。'
                },
                pasteImage: true,
            });
        });
    </script>
@endsection