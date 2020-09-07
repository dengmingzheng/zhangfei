<?php

namespace App\Listeners;

use App\Events\adminLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class adminLoginUpdateAccount implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 任务被处理的延迟时间（秒）
     *
     * @var int
     */
    public $delay = 30;

    /**
     * Handle the event.
     *
     * @param  adminLogin  $event
     * @return void
     */
    public function handle(adminLogin $event)
    {
        $updateData = [
            'login_num' => $event->data->login_num+1,//登录次数
            'last_login_time' => $event->data->login_time,//上传登录时间
            'login_time' => now(),//本次登录时间
            'updated_at' => now()
        ];

        DB::table('accounts')->where('id',$event->data->id)->update($updateData);
    }
}
