<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends BaseModel
{
    use SoftDeletes;

    protected $fillable=['ac_id','title','author','account_id','content','url','sort','is_show','deleted_at','updated_at'];

    protected $casts=[
        'id'=>'integer',
        'ac_id'=>'integer',
        'account_id'=>'integer',
        'sort'=>'integer',
        'is_show'=>'boolean',
    ];

    //获取所属分类
    public function class()
    {
        return $this->belongsTo(ArticleClass::class,'ac_id','id');
    }

    //获取发布人
    public function account()
    {
        return $this->belongsTo(Account::class,'account_id','id');
    }
}
