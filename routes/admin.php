<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::get('/','LoginController@showLoginForm');
    Route::get('/login','LoginController@showLoginForm');
    Route::post('/login','LoginController@login');
    Route::get('logout','LoginController@logout');
});


Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth.admin','admin.permission']],function(){
    Route::get('/index','IndexController@index');

    /*系统管理模块*/
    Route::get('/menus', 'MenuController@index');//菜单列表
    Route::match(['get', 'post'], '/menus/createMenu', 'MenuController@createMenu');//添加菜单
    Route::match(['get', 'put'], '/menus/editMenu', 'MenuController@editMenu');//编辑菜单
    Route::delete('/menus/delMenu', 'MenuController@delMenu');//删除菜单

    Route::get('/accounts', 'AccountController@index');//管理员列表
    Route::match(['get', 'post'], 'accounts/create', 'AccountController@createAccount');//添加管理员
    Route::match(['get', 'put'], 'accounts/edit', 'AccountController@editAccount');//编辑管理员
    Route::delete('/accounts/del', 'AccountController@delAccount');//删除管理员

    Route::get('/roles', 'AccountController@roleList');//角色列表
    Route::match(['get', 'post'], 'roles/create', 'AccountController@createRole');//添加角色
    Route::match(['get', 'put'], 'roles/edit', 'AccountController@editRole');//编辑角色
    Route::delete('/roles/del', 'AccountController@delRole');//删除角色

    Route::get('/logs', 'AccountController@logs');//日志列表

    /**店铺*/
    Route::get('/stores','StoreController@index');//店铺列表

    //店铺主营分类
    Route::get('/businesses','StoreController@businesses');//店铺主营分类列表
});

