<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleClass extends BaseModel
{
    use SoftDeletes;

    protected $fillable=['title','parent_id','sort','deleted_at','updated_at'];

    protected $casts=[
        'id'=>'integer',
        'parent_id'=>'integer',
        'sort'=>'integer',
    ];

    //关联自身模型 获取父类
    public function parent()
    {
        return $this->belongsTo(ArticleClass::class);
    }

    //关联自身模型 获取子类
    public function children()
    {
        return $this->hasMany(ArticleClass::class,'parent_id');
    }

    //获取文章
    public function articles()
    {
        return $this->hasMany(Article::class,'id','ac_id');
    }
}
