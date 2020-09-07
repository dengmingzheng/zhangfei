<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DateTimeInterface;

class Account extends Authenticatable
{
    use SoftDeletes;

    //可修改字段
    protected $fillable = [
        'username', 'login_num', 'password','last_login_time','login_time','deleted_at','updated_at',
    ];

    //隐藏的字段
    // protected $hidden = ['password'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'login_num' => 'integer',
    ];

    /**
     * 为数组 / JSON 序列化准备日期。
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
    }

    //角色关联模型
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
