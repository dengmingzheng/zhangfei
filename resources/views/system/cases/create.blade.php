@extends('system.layout.base')
@section('style')
    <link href="{{asset('system/editor/css/simditor.css')}}" rel="stylesheet">
    <link href="{{asset('system/webuploader/webuploader.css')}}" rel="stylesheet">
    <link href="{{asset('system/webuploader/style.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="header_line">
        <h3>网站管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/cases')}}"><span>案例管理</span></a></li>
            <li><a class="current"><span>添加案例</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/cases/create')}}" id="form" enctype="multipart/form-data">
            @csrf
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">案例标题(必填):</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('name')}}" name="name" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('name')}}</td>
                </tr>

                <tr class="noborder">
                    <td colspan="2"><label class="validation">案例Logo:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <input type="file" name="logo" class="txt" value="{{old('logo')}}">
                    </td>
                    <td class="vatop tips">{{$errors->first('logo')}}</td>
                </tr>

                <tr class="">
                    <td colspan="2" class="required"><label class="validation" for="">案例分类:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <select id="type" name="type" class="valid">
                            <option value="0">--请选择所属分类--</option>
                            @if(!empty($caseArr))
                                @foreach($caseArr as $key=>$val)
                                    <option value="{{$key}}"
                                            @if(old('type') == $key) selected="selected" @endif>{{$val}}</option>
                                @endforeach
                            @endif
                        </select></td>
                    <td class="vatop tips">{{$errors->first('type')}}</td>
                </tr>

                <tr class="noborder">
                    <td colspan="2"><label class="validation">作者:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('author')}}" name="author" class="txt">
                    </td>
                    <td class="vatop tips">{{$errors->first('author')}}</td>
                </tr>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">行业分类:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        @foreach($industries as $item)
                            <input type="checkbox" value="{{$item['id']}}" name="industry_ids[]"
                                   class="checkbox">{{$item['name']}}
                        @endforeach
                    </td>
                    <td class="vatop tips">{{$errors->first('industry_ids')}}</td>
                </tr>

                <tr class="noborder">
                    <td colspan="2"><label class="validation">案例介绍:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><textarea name="intruduce">{{old('intruduce')}}</textarea></td>
                    <td class="vatop tips">{{$errors->first('intruduce')}}</td>
                </tr>


                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">排序:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('sort',255)}}" name="sort" class="txt">
                    </td>
                    <td class="vatop tips">{{$errors->first('sort')}} </td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">案例展示图片:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <div id="wrapper">
                            <div id="container">
                                <!--头部，相册选择和格式选择-->

                                <div id="uploader">
                                    <div class="queueList">
                                        <div id="dndArea" class="placeholder">
                                            <div id="filePicker"></div>
                                            <p>或将照片拖到这里，单次最多可选300张</p>
                                        </div>
                                    </div>
                                    <div class="statusBar" style="display:none;">
                                        <div class="progress">
                                            <span class="text">0%</span>
                                            <span class="percentage"></span>
                                        </div><div class="info"></div>
                                        <div class="btns">
                                            <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="vatop tips">{{$errors->first('show_img')}} </td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" for="">案例描述:</label></td>
                </tr>
                <tr class="noborder">
                    <td colspan="2" class="vatop rowform">
                        <textarea name="desc" id="editor" rows="3">{{old('desc')}}</textarea>
                    </td>
                </tr>

                </tbody>
                <tfoot>
                <tr class="tfoot">
                    <input type="hidden" value="" name="show_img[]" id="show_img">
                    <td colspan="15"><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span>提交</span></a></td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('system/editor/js/module.js') }}"></script>
    <script type="text/javascript" src="{{ asset('system/editor/js/hotkeys.js') }}"></script>
    <script type="text/javascript" src="{{ asset('system/editor/js/uploader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('system/editor/js/simditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('system/webuploader/webuploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('system/js/upload.js') }}"></script>
    <script>

        $(function () {

            $('.menutd').height(1350);

            var editor = new Simditor({
                textarea: $('#editor'),
                upload: {
                    url: '{{ url('admin/informations/imageUpload') }}',
                    params: {_token: '{{ csrf_token() }}'},
                    fileKey: 'upload_file',
                    connectionCount: 3,
                    leaveConfirm: '文件上传中，关闭此页面将取消上传。'
                },
                pasteImage: true,
            });

        });
    </script>
@endsection