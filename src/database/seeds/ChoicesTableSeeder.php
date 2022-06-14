<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('choices')->insert(
            [
                //takanawa
                [
                    'question_id'=>1,
                    'name'=>'たかなわ',
                    'valid'=>1,
                ],
                [
                    'question_id'=>1,
                    'name'=>'たかわ',
                    'valid'=>0,
                ],
                [
                    'question_id'=>1,
                    'name'=>'こうわ',
                    'valid'=>0,
                ],

                //kameido
                [
                    'question_id'=>2,
                    'name'=>'かめいど',
                    'valid'=>1,
                ],
                [
                    'question_id'=>2,
                    'name'=>'かめど',
                    'valid'=>0,
                ],
                [
                    'question_id'=>2,
                    'name'=>'かめと',
                    'valid'=>0,
                ],
                
                //mukainada
                [
                    'question_id'=>3,
                    'name'=>'むかいなだ',
                    'valid'=>1,
                ],
                [
                    'question_id'=>3,
                    'name'=>'むきはら',
                    'valid'=>0,
                ],
                [
                    'question_id'=>3,
                    'name'=>'むこうひら',
                    'valid'=>0,
                ],
            ]   

        
        );
    }
}
