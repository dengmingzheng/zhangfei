<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/9/7 0007
 * Time: 16:38
 */

namespace App\Services;

use App\Models\Article;

class ArticleService extends BaseService
{
    /**
     * 所有关联关系
     *
     * @var array
     */
    public $withAll = ['class','account'];

    /**
     * 查询字段
     * @var array
     */
    public $field=['id','ac_id','title','author','account_id','content','url','sort','is_show','created_at','updated_at'];

    public function init($uniqueKey = '', $uniqueValue = '', $idKey = 'id')
    {
        $this->initialize(new Article(), $uniqueKey, $uniqueValue, $idKey);
        return $this;
    }
}