<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Big_questionsTableSeeder extends Seeder
{

    public function run()
    {
            $param = [
            'name' => 'ガチで東京の人しか解けない！#東京の難読地名クイズ',
        ];
        DB::table('big_questions')->insert($param);

            $param = [
            'name' => 'ガチで広島の人しか解けない！#広島の難読地名クイズ',
        ];
        DB::table('big_questions')->insert($param);
    }
}
