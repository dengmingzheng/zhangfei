<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//官网路由
Route::group(['namespace'=>'Home'],function(){

    Route::get('/','IndexController@index');//首页

    Route::get('/joinAdvantage','IndexController@joinAdvantage');//招商专区

    Route::get('/contact','IndexController@contact');//联系我们

    Route::get('/news','IndexController@news');//产业资讯

    Route::get('/mobileClient','IndexController@mobileClient');//手机客户端

    Route::get('/register','RegisterController@register');//注册页面

    Route::post('/saveFactory','RegisterController@saveFactory');//注册修车厂

    Route::post('/saveStore','RegisterController@saveStore');//注册经销商

    Route::post('/saveCompany','RegisterController@saveCompany');//注册品牌

    Route::get('/forget_password','IndexController@forget_password');//忘记密码

    Route::get('/login','IndexController@login');//忘记密码

    Route::post('/uploadImg','RegisterController@uploadImg');//上传图片

    Route::post('/checkMobile','RegisterController@checkMobile');//验证注册手机号码

    Route::post('/checkEmail','RegisterController@checkEmail');//验证注册邮箱

    Route::post('/checkCompany','RegisterController@check_reg_company');//验证经销商名称是否已经被注册

    Route::get('/getLogisticsByOrder','IndexController@getLogisticsByOrder');
});
