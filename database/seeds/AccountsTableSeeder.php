<?php

use Illuminate\Database\Seeder;
use App\Models\Account;
use Carbon\Carbon;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $accounts = factory(Account::class)->times(10)->create();

        $account = Account::find(1);

        $account->username = 'admin';
        $account->updated_at = Carbon::now();

        $account->save();
    }
}
