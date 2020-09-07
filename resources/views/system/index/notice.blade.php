@extends('system.layout.base')
@section('style')
    <style>
        .notice_title{
            width: 100%;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-size: 24px;
            margin-top: 10px;
        }

        .notice_content p{
            font-size: 14px;
            margin-left: 10px;
            text-space: 10px;
        }
        p{
            font-weight: bolder;
            margin-bottom:5px;
        }
    </style>
@endsection
@section('content')
    <div class="notice_title">使用说明</div>
    <div class="notice_content">

        <p>1、 目前网站暂时不支持多项删除，只支持单项删除</p>
        <p>2、 网站使用了Swoole加速Laravel项目</p>
    </div>
@endsection