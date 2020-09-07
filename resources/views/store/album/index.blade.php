@extends('mall.layout.base')
@section('content')
    <div id="layoutRight" class="ncsc-layout-right">
        <div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>商品<i class="icon-angle-right"></i>图片空间</div>
        <div class="main-content" id="mainContent">

            <div class="tabmenu">
                <ul class="tab pngFix" src="http://liubei.com/shop/common/store_avatar.jpeg">
                    <li class="active"><a href="index.php?act=store_album">我的相册</a></li><li class="normal"><a href="index.php?act=store_album&amp;op=store_watermark">水印管理</a></li></ul>
                <a uri="index.php?act=store_album&amp;op=album_add" nc_type="dialog" dialog_title="创建相册" class="ncsc-btn ncsc-btn-green" style="right: 100px;"><i class="icon-folder-open "></i>创建相册</a>
                <a id="open_uploader" href="JavaScript:void(0);" class="ncsc-btn ncsc-btn-acidblue"><i class="icon-cloud-upload"></i>上传图片</a>
                <div class="upload-con" id="uploader" style="display: none;">
                    <form method="post" action="" id="fileupload" enctype="multipart/form-data" style="position: relative;">
                        <div class="upload-con-div">选择相册：        <select name="category_id" id="category_id" class="select w80">
                                <option value="96" class="w80">默认相册</option>
                            </select>
                        </div>
                        <div class="upload-con-div">选择文件：
                            <div class="ncsc-upload-btn"> <a href="javascript:void(0);"><span>
          <input type="file" hidefocus="true" size="1" class="input-file" name="file" id="store_album_uploader" multiple="multiple" style="position: relative; z-index: 1;">
          </span>
                                    <p><i class="icon-upload-alt"></i>上传图片</p>
                                </a> </div>
                        </div>
                        <div nctype="file_msg"></div>
                        <div class="upload-pmgressbar" nctype="file_loading"></div>
                        <div class="upload-txt"><span>支持Jpg、Gif、Png格式，大小不超过1024KB的图片上传；浏览文件时可以按住ctrl或shift键多选。</span> </div>
                        <div id="html5_1dn47dstl196gvmg1ivb1fmsc0e3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1dn47dstl196gvmg1ivb1fmsc0e3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/gif,image/png,image/bmp"></div></form>
                </div>
            </div>
            <div id="pictureIndex" class="ncsc-picture-folder">
                <table class="search-form">
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <th>排序方式</th>
                        <td class="w100"><form name="select_sort" id="select_sort" class="sortord">
                                <input type="hidden" name="act" value="store_album">
                                <input type="hidden" name="op" value="album_cate">
                                <select name="sort" id="img_sort">
                                    <option value="4" selected="">按排序从大到小</option>
                                    <option value="5">按排序从小到大</option>
                                    <option value="0">按创建时间从晚到早</option>
                                    <option value="1">按创建时间从早到晚</option>
                                    <option value="2">按相册名降序</option>
                                    <option value="3">按相册名升序</option>
                                </select>
                            </form></td>
                    </tr>
                    </tbody>
                </table>
                <div class="ncsc-album">
                    <ul>
                        <li class="hidden" style="opacity: 1;">
                            <dl>
                                <dt>
                                    <div class="covers"><a href="index.php?act=store_album&amp;op=album_pic_list&amp;id=96">
                                            <!--              <img id="aclass_cover" src="--><!--">-->
                                            <img id="aclass_cover" src="http://liubei-dev.img-cn-hangzhou.aliyuncs.com/shop/store/goods/92/Qd2DXjrYJX.jpg@!240">
                                        </a></div>
                                    <h3 class="title"><a href="index.php?act=store_album&amp;op=album_pic_list&amp;id=96">默认相册</a></h3>
                                </dt>
                                <dd class="date">共29张</dd>
                                <dd class="buttons"><span nc_type="dialog" dialog_title="编辑相册" dialog_id="album_96" dialog_width="480" uri="index.php?act=store_album&amp;op=album_edit&amp;id=96"><a href="JavaScript:void(0);"><i class="icon-pencil"></i>编辑</a></span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/fileupload/jquery.iframe-transport.js" charset="utf-8"></script>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/fileupload/jquery.ui.widget.js" charset="utf-8"></script>
            <script type="text/javascript" src="http://liubei.com/data/resource/js/fileupload/jquery.fileupload.js" charset="utf-8"></script>
            <link rel="stylesheet" href="http://liubei.com/core/framework/libraries/storage/client/src/css/default.css">
            <script src="http://liubei.com/core/framework/libraries/storage/client/src/js/plupload.full.min.js"></script>
            <script src="http://liubei.com/core/framework/libraries/storage/client/src/js/uploadoss.js"></script>
            <script type="text/javascript">

                $(function() {
                    //鼠标触及区域li改变class
                    $(".ncsc-album ul li").hover(function() {
                        $(this).addClass("hover");
                    }, function() {
                        $(this).removeClass("hover");
                    });
                    //凸显鼠标触及区域、其余区域半透明显示
                    $(".ncsc-album > ul > li").jfade({
                        start_opacity:"1",
                        high_opacity:"1",
                        low_opacity:".5",
                        timing:"200"
                    });

//    // ajax 上传图片
//    var upload_num = 0; // 上传图片成功数量
//    $('#fileupload').fileupload({
//        dataType: 'json',
//        url: '///index.php?act=store_album&op=image_upload',
//        add: function (e,data) {
//        	$.each(data.files, function (index, file) {
//                $('<div nctype=' + file.name.replace(/\./g, '_') + '><p>'+ file.name +'</p><p class="loading"></p></div>').appendTo('div[nctype="file_loading"]');
//            });
//        	data.submit();
//        },
//        done: function (e,data) {
//            var param = data.result;
//            $this = $('div[nctype="' + param.origin_file_name.replace(/\./g, '_') + '"]');
//            $this.fadeOut(3000, function(){
//                $(this).remove();
//                if ($('div[nctype="file_loading"]').html() == '') {
//                    setTimeout("window.location.reload()", 1000);
//                }
//            });
//            if(param.state == 'true'){
//                upload_num++;
//                $('div[nctype="file_msg"]').html('<i class="icon-ok-sign">'+'</i>'+'//'+upload_num+'//');
//
//            } else {
//                $this.find('.loading').html(param.message).removeClass('loading');
//            }
//        }
//    });

                    /* 上传图片 */
                    var uploader = (function(){
                        // 认证服务器地址
                        var oss_api_server_url = 'http://liubei.com/entry/index.php?act=auth';
                        // 上传路径
                        var oss_object_prefix = "shop/store/goods/92/";
                        var uploader = uploadOSS({appUrl: oss_api_server_url,key: oss_object_prefix});
                        uploader.init(
                            {
                                client_id: 'store_album_uploader',
                                browse_button: 'store_album_uploader',
                                container: 'fileupload',
                                init: {
                                    PostInit: function () {
                                        return false;
                                    },
                                    FilesAdded: function (up, files) {
                                        $.each(files, function (index, file) {
                                            $('<div nctype=' + encodeURI(file.name.replace(/\./g, '_')) + '><p>'+ file.name +'</p><p class="loading"></p></div>').appendTo('div[nctype="file_loading"]');
                                        });
                                        uploader.postSend('store_album_uploader');
                                        return false;
                                    },
                                    BeforeUpload: function (up, file) {
                                        uploader.setUploadParam('store_album_uploader', file.name, true);
                                        return false;
                                    },
                                    UploadProgress: function (up, file) {
                                        return false;
                                    },
                                    FileUploaded: function (up, file, info) {
                                        if (info.status == 200) {
                                            var result = uploader.tonkenUrl(uploader.get_uploaded_object_name('store_album_uploader', file.name));
                                            var obj = eval("(" + result + ")");
                                            if (obj.code == 200) {
                                                var ossurl = obj.data.url;
                                            }
                                            $('#fileupload').append("<input type='hidden' class='form-input-file' name='file' value='" + ossurl + "' />");
                                            uploader.uploadDoneState.push('store_album_uploader');
                                            $(document).trigger("onFileUploaded", {client_id: 'store_album_uploader', url: ossurl});

                                            $.ajax({
                                                type: "post",
                                                url: 'http://liubei.com/mall/index.php?act=store_album&op=image_upload',
                                                data: "url="+ossurl+"&category_id="+$("#category_id").val(),
                                                success: function(msg){
                                                    var param = msg;
                                                    $this = $('div[nctype="' + encodeURI(file.name.replace(/\./g, '_')) + '"]');
                                                    console.log($this.length);
                                                    $this.fadeOut(3000, function(){
                                                        $(this).remove();
                                                        if ($('div[nctype="file_loading"]').html() == '') {
                                                            setTimeout("window.location.reload()", 1000);
                                                        }
                                                    });
                                                    if(param.state == 'true'){
                                                        upload_num++;
                                                        $('div[nctype="file_msg"]').html('<i class="icon-ok-sign">'+'</i>'+'成功上传'+upload_num+'张图片');

                                                    } else {
                                                        $this.find('.loading').html(param.message).removeClass('loading');
                                                    }
                                                }
                                            });
                                        }
                                        else if (info.status == 203) {
                                            alert(data.error);
                                        }
                                        else {
                                            console.log(info.response);
                                        }
                                        return false;
                                    },
                                    UploadComplete: function (up, file) {
                                        return false;
                                    },
                                    Error: function (up, err) {
                                        console.log(err);
                                        return false;
                                    }
                                }
                            }
                        );
                        return uploader;
                    })();
                });

                $(function(){
                    $("#img_sort").change(function(){
                        $('#select_sort').submit();
                    });
                });
            </script>
        </div>
    </div>
@endsection