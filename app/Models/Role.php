<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    //获取权限下的角色
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
