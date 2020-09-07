<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/21 0021
 * Time: 16:11
 */

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\AccountLog;

//后台日志服务
class AccountLogService extends BaseService
{

    public function init($uniqueKey = '', $uniqueValue = '', $idKey = 'id')
    {
        $this->initialize(new AccountLog(), $uniqueKey, $uniqueValue, $idKey);
        return $this;
    }

    //写入日志
    public function write($content, $data = [])
    {
        $insertData = [
            'account_id' => Auth::guard('admin')->user()->id,
            'content' => $content,
            'data' =>json_encode($data),
            'ip'=>request()->getClientIp(),
            'updated_at' => now(),
            'created_at' => now(),
        ];

        return $this->init()->model->insertGetId($insertData);
    }

    public function get()
    {
        return 'hello';
    }

}