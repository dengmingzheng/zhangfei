<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/7 0007
 * Time: 16:39
 */

namespace App\Services;

use App\Models\ArticleClass;

class ArticleClassService extends BaseService
{
    /**
     * 所有关联关系
     *
     * @var array
     */
    public $withAll = ['parent','children','articles'];

    /**
     * 查询字段
     * @var array
     */
    public $field=['id','title','parent_id','sort','created_at','updated_at'];

    public function init($uniqueKey = '', $uniqueValue = '', $idKey = 'id')
    {
        $this->initialize(new ArticleClass(), $uniqueKey, $uniqueValue, $idKey);
        return $this;
    }

}