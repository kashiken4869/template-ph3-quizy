<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function choice()
    {
    return $this ->belongsTo('App\Choice');
    }
}
