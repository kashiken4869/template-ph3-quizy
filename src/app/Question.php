<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function choices()
    {
    return $this ->hasMany('App\Choice')->where('hide', 0);
    }

    public static $rules = [
        'image' => 'image|file',
    ];
}
