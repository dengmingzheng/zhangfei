<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/22 0022
 * Time: 13:07
 */

namespace App\Services;

use App\Models\Menu;

class MenuService extends BaseService
{
    /**
     * 所有关联关系
     *
     * @var array
     */
    public $withAll = ['parent','children'];

    /**
     * 查询字段
     * @var array
     */
    public $field=['id','title','parent_id','group','guard','url','sort','is_show','created_at','updated_at'];

    /**
     * 每页显示的条数
     * @var number
     */
    public $perPage = 15;

    public function init($uniqueKey = '', $uniqueValue = '', $idKey = 'id')
    {
        $this->initialize(new Menu(), $uniqueKey, $uniqueValue, $idKey);
        return $this;
    }

}