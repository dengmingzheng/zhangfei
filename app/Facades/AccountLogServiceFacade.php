<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/24 0024
 * Time: 15:53
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AccountLogServiceFacade extends Facade
{
    /**
     * 获取组件的注册名称。
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'AccountLogService'; }

}