@extends('system.layout.base')
@section('content')
    <div class="header_line">
        <h3>系统管理</h3>
        <ul class="tab-base">
            <li><a href="{{url('admin/roles')}}"><span>角色管理</span></a></li>
            <li><a class="current"><span>添加角色</span></a></li>
        </ul>
    </div>


    <div class="content-group">
        <form method="post" action="{{url('admin/roles/create')}}" id="form">
            @csrf
            <table class="table tb-type2">
                <tbody>
                <tr class="noborder">
                    <td colspan="2"><label class="validation">角色:</label></td>
                </tr>

                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="{{old('role_name')}}"  name="role_name" class="txt"></td>
                    <td class="vatop tips">{{$errors->first('role_name')}}</td>
                </tr>

                <tr>
                    <td colspan="2"><table class="table tb-type2 nomargin">
                            <thead>
                            <tr class="space">
                               <td> <input id="limitAll" value="1" type="checkbox">&nbsp;&nbsp;设置权限</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $key=>$menu)
                            <tr>

                                <td>
                                    <label style="width:80px">&nbsp;</label>
                                    <input id="limit{{$key}}" type="checkbox" onclick="selectLimit('limit{{$key}}')">
                                    <label for="limit{{$key}}"><b>{{$menu['title']}}</b>&nbsp;&nbsp;</label>
                                    @if(!empty($menu['children']))
                                        @foreach($menu['children'] as $children)
                                            <label><input nctype="limit" class="limit{{$key}}" type="checkbox" name="permission[]" value="{{$children['url']}}">{{$children['title']}}&nbsp;</label>
                                        @endforeach
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table></td>
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
    <script>

        function selectLimit(name){
            if($('#'+name).prop('checked')) {
                $('.'+name).prop('checked',true);
            }else {
                $('.'+name).prop('checked',false);
            }
        }

        $(function(){
            $('#limitAll').click(function(){
                if(this.checked){
                    $('input[type="checkbox"]').prop("checked", true);
                }else{
                    $('input[type="checkbox"]').prop("checked", false);
                }
            });
        });
    </script>
@endsection