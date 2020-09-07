@extends('system.layout.base')
@section('style')
    <link href="/system/editor/css/simditor.css" rel="stylesheet">
@endsection
@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/articles')}}"><span>文章管理</span></a></li>
            <li><a class="current"><span>编辑文章</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/articles/edit')}}" id="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$detail['id']}}">
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">标题名称(必填):</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{request()->input('title',$detail['title'])}}"  name="title" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('title')}}</td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="">所属分类:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <select id="ac_id" name="ac_id" class="valid">
                            <option value="0">--请选择所属分类--</option>
                            @if(!empty($articleClass))
                                @foreach($articleClass as $val)
                                    <option value="{{$val['id']}}" @if(request()->input('ac_id',$detail['ac_id']) == $val['id']) selected="selected" @endif>{{$val['title']}}</option>
                                    @if(!empty($val['children']))
                                        @foreach($val['children'] as $item)
                                            <option value="{{$item['id']}}" @if(request()->input('ac_id',$detail['ac_id']) == $item['id']) selected="selected" @endif>&nbsp;&nbsp;--|{{$item['title']}}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </select></td>
                    <td class="vatop tips">{{$errors->first('ac_id')}}</td>
                </tr>

                <tr class="noborder">
                    <td colspan="2"><label class="validation">作者:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{request()->input('author',$detail['author'])}}"  name="author" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('author')}}</td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">排序:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{request()->input('sort',$detail['sort'])}}"  name="sort" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('sort')}} </td>
                </tr>

                <tr class="noborder">
                    <td colspan="2" class="required"><label>状态:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <input type="radio" value="0" name="is_show" @if(request()->input('is_show',$detail['is_show']) == 0) checked="checked" @endif >草稿 <input type="radio" value="1" name="is_show" @if(request()->input('is_show',$detail['is_show']) == 1) checked="checked" @endif >发布
                    </td>
                    <td class="vatop tips">{{$errors->first('status')}}</td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">文章内容:</label></td>
                </tr>
                <tr class="noborder">
                    <td colspan="2" class="vatop rowform">
                        <textarea name="content"  id="editor" rows="3">{!! request()->input('content',$detail['content']) !!}</textarea>
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
    <script type="text/javascript"  src="/system/editor/js/module.js"></script>
    <script type="text/javascript"  src="/system/editor/js/hotkeys.js"></script>
    <script type="text/javascript"  src="/system/editor/js/uploader.js"></script>
    <script type="text/javascript"  src="/system/editor/js/simditor.js"></script>
    <script>

        $(function(){

            $('.menutd').height(1350);

            var editor = new Simditor({
                textarea: $('#editor'),
                upload: {
                    url: '{{ url('admin/articles/imageUpload') }}',
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