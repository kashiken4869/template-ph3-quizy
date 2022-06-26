<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'big_question_id' => '1',
            'image' => 'takanawa.png',
            'sortID' => '1',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'big_question_id' => '1',
            'image' => 'kameido.png',
            'sortID' => '2',

        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => '2',
            'image' => 'mukainada.png',
            'sortID' => '1',
        ];
        DB::table('questions')->insert($param);
    }
}
