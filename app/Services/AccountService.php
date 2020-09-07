<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/21 0021
 * Time: 16:10
 */

namespace App\Services;

use App\Models\Account;

class AccountService extends BaseService
{

    /**
     * 所有关联关系
     *
     * @var array
     */
    public $withAll = ['role'];

    /**
     * 初始化 设置唯一标识和redis键名
     * @return this
     */
    public function init( $uniqueKey = '', $uniqueValue = '', $idKey = 'id' ) {

        $this->initialize(new Account(), $uniqueKey, $uniqueValue, $idKey);

        return $this;
    }
}