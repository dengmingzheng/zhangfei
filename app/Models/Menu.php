<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $fillable=['title','parent_id','group','guard','url','sort','is_show','updated_at','deleted_at'];

    protected $casts=[
        'id'=>'integer',
        'parent_id'=>'integer',
        'sort'=>'integer',
        'is_show'=>'integer',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
    ];

//    /**
//     * 日期属性
//     */
//    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
//

    //关联自身模型 获取父类
    public function parent()
    {
        return $this->belongsTo(Menu::class);
    }

    //关联自身模型 获取子类
    public function children()
    {
        return $this->hasMany(Menu::class,'parent_id');
    }
}
