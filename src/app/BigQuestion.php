<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // トレイトを使う


class BigQuestion extends Model
{

    public function questions()
    {
        return $this ->hasMany('App\Question');
    }
}
